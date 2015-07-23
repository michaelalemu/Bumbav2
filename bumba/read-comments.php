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
include "include/comment.class.php";

// Select and show post based on id in URL
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$id_in_url = $id;
	$query_for_post = "SELECT * FROM user_post WHERE id =:id";
	$statement_for_post = $db->prepare($query_for_post);
	$statement_for_post->bindParam(":id", $_GET['id'], PDO::PARAM_INT);
	$statement_for_post->execute();
	$row1 = $statement_for_post->fetchObject();
	$post = htmlspecialchars($row1->post_content);


	// Select all comments and populate the $comments array with objects
	$query_for_comments = "SELECT * FROM post_comment ORDER BY id ASC";
	$statement_for_comments = $db->query($query_for_comments);

	while($r = $statement_for_comments->fetch()) {
		$poster = htmlspecialchars($r['poster']);
		$comment = htmlspecialchars($r['comment']);
		$id = $r['id'];
		$post_id = $r['post_id'];
		if($post_id == $_GET['id']) {
			$comments[] = new Comment($r);
		}
	}
}
?>

<?php include('include/header.php');?>

	<div class="content">
		<div class="content-heading">
			<div class="container">
				<h1 class="heading">Comments</h1>
			</div>
		</div>
		<div class="container">
			<section class="content-inner">
				<div class="tile-wrap tile-wrap-animation">

					<div class="tile tile-collapse tile-alt">
						<div data-target="#tile-collapse-16" data-toggle="tile">
							<div class="tile-inner">
								<div class="text-overflow"><?php echo $post ?></div>
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
					// Output the coments one by one
					foreach($comments as $c){
						echo $c->markup_comments();
					}
					?>

					<?php
					if ($poster != "") {
					echo '
						<div class="tile-active-show collapse" id="tile-collapse-1">
							<div class="tile-sub">
								<p>Posted by '.$poster.'</p>
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
						</div>';
					}
					?>

				</div>
				<fieldset>
					<form class="form" action="add-comment.php?id=<?php echo $id_in_url ?>" method="post">
						<legend>Leave a comment</legend>
						<div class="form-group form-group-icon">
							<div class="row">
								<div class="col-lg-6 col-sm-8">
									<div class="media">
										<div class="media-object pull-left">
											<label class="form-icon-label" for="input-comment"><span class="icon">comment</span></label>
										</div>
										<div class="media-inner">
											<textarea class="form-control textarea-autosize" id="input-comment" name="comment" placeholder="Comment" rows="1"></textarea>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group form-group-icon">
							<div class="row">
								<div class="col-lg-6 col-sm-8">
									<div class="media">
										<div class="media-object pull-left">
											<label class="form-icon-label" for="input-address"><span class="icon">pencil</span></label>
										</div>
										<div class="media-inner">
											<input class="form-control" id="input-name" name="poster" placeholder="Enter nick (can be left empty)" type="text">
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<div class="checkbox switch">
								<label for="input-switch-2">
									<input class="access-hide" id="input-switch-2" name="input-switch" type="checkbox"><span class="switch-toggle switch-toggle-alt"></span>Stay anonymously
								</label>
							</div>
						</div>
						<div class="form-group-btn">
							<button class="btn btn-blue waves-button waves-light waves-effect" type="submit" id="submit">Post</button>
							<button class="btn waves-button waves-effect" type="button">Cancel</button>
						</div>
					</form>
				</fieldset>
			</section>
		</div>
	</div>

<?php include('include/footer.php');?>