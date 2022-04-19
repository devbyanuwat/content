<?php
require('../db.php');
$user_id = $_GET['user_id'];
$firstname = $_POST['user_firstname'];
$lastname = $_POST['user_lastname'];
$tel = $_POST['user_tel'];
$txtarea_comment = htmlentities($_POST['txtarea_comment']);


$sql = "INSERT INTO `comment` (`comment_id`, `user_id`, `comment_detail`) VALUES (NULL, '$user_id', '$txtarea_comment')";
if (mysqli_query($conn, $sql)) {
    header('location:../../users/');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
