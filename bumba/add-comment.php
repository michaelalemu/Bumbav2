<?php
session_start();
?>
<?php
// Script for adding new comment

include "connect.php";

$poster = mysql_real_escape_string($_POST['poster']);
$comment = mysql_real_escape_string($_POST['comment']);
$original_id = mysql_real_escape_string($_GET['id']);

// Get user_id based on session variable
$user_id = mysql_real_escape_string($_SESSION['user_id']);

// Insert into database
$query = "INSERT INTO post_comment (user_id,comment,post_id) VALUES (:user_id,:comment,:post_id)";
$statement = $db->prepare($query);
$statement->bindParam(":user_id", $user_id, PDO::PARAM_STR);
$statement->bindParam(":comment", $comment, PDO::PARAM_STR);
$statement->bindParam(":post_id", $original_id, PDO::PARAM_INT);
$statement->execute();

// Return back
header("Location: read-comments.php?id=".$original_id);

exit();
?>