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
include "include/postsofuser.class.php";

// Select and show post based on user_id in URL
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$query_for_user_info = "SELECT * FROM users WHERE user_id =:id";
	$statement_for_user = $db->prepare($query_for_user_info);
	$statement_for_user->bindParam(":id", $_GET['id'], PDO::PARAM_INT);
	$statement_for_user->execute();
	$row1 = $statement_for_user->fetchObject();
	$user_username = htmlspecialchars($row1->user_username);
	$user_surname = htmlspecialchars($row1->user_surname);
	$user_created = htmlspecialchars($row1->user_created);


	// Select all posts and populate the $postsbyuser array with objects
	$query_for_posts = "SELECT * FROM user_post ORDER BY id ASC";
	$statement_for_posts = $db->query($query_for_posts);

	while($r = $statement_for_posts->fetch()) {
		$poster = htmlspecialchars($r['poster']);
		$comment = htmlspecialchars($r['comment']);
		$id = $r['id'];
		$user_id = $r['user_id'];
		if($user_id == $_GET['id']) {
			$postsofuser[] = new PostsOfUser($r);
		}
	}
}
?>

<?php include('include/header.php');?>

	<div class="content">
		<div class="content-heading">
			<div class="container">
				<h1 class="heading">Hi <?php echo $user_username ?>.</h1>
			</div>
		</div>
		<div class="container">
			<section class="content-inner">
				<div class="tile-wrap">

					<div class="tile tile-collapse tile-alt">
						<div data-target="#tile-collapse-16" data-toggle="tile">
							<div class="tile-inner">
								<div class="text-overflow">Here are all of your posts.</div>
							</div>
						</div>
						<div class="tile-active-show collapse" id="tile-collapse-16">
							<div class="tile-sub">
								<p>Aliquam in pharetra leo. In congue, massa sed elementum dictum, justo quam efficitur risus, in posuere mi orci ultrices diam. This is a <a href="javascript:void(0)">link</a> among some other text.</p>
							</div>
							<div class="tile-footer">
								<ul class="nav nav-list pull-left">
									<li>
										<a href="javascript:void(0)"><span class="icon">check</span>&nbsp;OK</a>
									</li>
									<li>
										<a data-dismiss="tile" href="javascript:void(0)"><span class="icon">close</span>&nbsp;Cancel</a>
									</li>
								</ul>
							</div>
						</div>
					</div>

					<?php
					// Output the post of user_id one by one
					foreach($postsofuser as $c){
						echo $c->markup_postsofuser();
					}
					?>
				</div>
			</section>
		</div>
	</div>

<?php include('include/footer.php');?>