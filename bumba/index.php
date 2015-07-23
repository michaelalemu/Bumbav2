<?php
session_start();
?>
<?php
if(!isset($_SESSION["username"]))
   {
   header("Location: login.php?login_first");
   exit;
   }
?>
<?php

// Error reporting:
error_reporting(E_ALL^E_NOTICE);

include "connect.php";
include "include/posts.class.php";

// Select all posts and populate the $posts array with objects
$posts = array();
$result = mysql_query("SELECT * FROM user_post ORDER BY id DESC LIMIT 10");

while($row = mysql_fetch_assoc($result))
{
	$posts[] = new Posts($row);
}

?>
<?php include('include/header.php');?>

	<div class="content">
		<div class="content-heading">
			<div class="container">
				<h1 class="heading">Hi there. What's up?</h1>
			</div>
		</div>
		<div class="container">
			<section class="content-inner">
				<div class="card-wrap">
					<div class="row">

						<?php

						// Output the posts one by one
						foreach($posts as $c){
							echo $c->markup_posts();
						}
						?>

					</div>
				</div>
			</section>
		</div>
	</div>

<?php include('/include/footer.php');?>