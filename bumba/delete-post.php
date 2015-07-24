<?php
session_start();
?>
<?php
// Script for adding new comment

include "connect.php";

$post_id = mysql_real_escape_string($_GET['delete_post_id']);

// Get user_id based on session variable
$user_id = mysql_real_escape_string($_SESSION['user_id']);

// Delete in database
$query = "DELETE FROM user_post WHERE post_id = '$post_id'";

$statement = $db->prepare($query);
$statement->execute();

// Return back
header("Location: view-profile.php?id=".$user_id);

exit();
?>