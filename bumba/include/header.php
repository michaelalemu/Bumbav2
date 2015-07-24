<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="initial-scale=1.0, width=device-width" name="viewport">
  <title>Bumba-App</title>

  <!-- css -->
  <link href="css/base.min.css" rel="stylesheet">

  <!-- favicon -->
  <!-- ... -->

  <!-- ie -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="avoid-fout">
  <div class="avoid-fout-indicator avoid-fout-indicator-fixed">
    <div class="progress-circular progress-circular-alt progress-circular-center">
      <div class="progress-circular-wrapper">
        <div class="progress-circular-inner">
          <div class="progress-circular-left">
            <div class="progress-circular-spinner"></div>
          </div>
          <div class="progress-circular-gap"></div>
          <div class="progress-circular-right">
            <div class="progress-circular-spinner"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <header class="header">
    <ul class="nav nav-list pull-left">
      <li>
        <a data-toggle="menu" href="#menu">
          <span class="icon icon-lg">menu</span>
        </a>
      </li>
    </ul>
    <a class="header-logo" href="index.php">Bumba</a>
  </header>
  <nav class="menu" id="menu">
    <div class="menu-scroll">
      <div class="menu-wrap">
        <div class="menu-top">
          <div class="menu-top-img">
            <img alt="John Smith" src="images/samples/landscape.jpg">
          </div>
          <div class="menu-top-info">
            <a class="menu-top-user" href="javascript:void(0)"><span class="avatar pull-left"><img alt="alt text for John Smith avatar" src="images/users/avatar-001.jpg"></span><?php echo $_SESSION['username']; ?></a>
          </div>
          <div class="menu-top-info-sub">
            <small>Some additional information about John Smith</small>
          </div>
        </div>
        <div class="menu-content">
          <ul class="nav">
            <li>
              <a href="index.php"><span class="icon icon-lg">home</span>Home</a>
            </li>
            <li>
              <a href="view-profile.php?id=<?php echo $_SESSION['user_id']; ?>"><span class="icon icon-lg">account_box</span>View Profile</a>
            </li>
            <li>
              <a href="javascript:void(0)"><span class="icon icon-lg">add_to_photos</span>Upload Photo</a>
            </li>
            <li>
              <a href="logout.php"><span class="icon icon-lg">exit_to_app</span>Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>