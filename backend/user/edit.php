<?php
require('../db.php');
$user_id = $_GET['user_id'];
$firstname = $_POST['user_firstname'];
$lastname = $_POST['user_lastname'];
$tel = $_POST['user_tel'];
$username =  $_POST['user_username'];
$password = $_POST['user_password'];

echo $user_id;
$sql = "UPDATE `member` SET `username` = '$username', `password` = '$password', `name` = '$firstname', `surname` = '$lastname', `tel` = '$tel' WHERE `member`.`user_id` = $user_id";
if (mysqli_query($conn, $sql)) {
    header('location:../../manage.php');
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
