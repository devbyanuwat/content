<?php
session_start();
require('../db.php');

$firstname = $_POST['user_firstname'];
$lastname = $_POST['user_lastname'];
$tel = $_POST['user_tel'];
$username =  $_POST['user_username'];
$password = $_POST['user_password'];

$sql = "INSERT INTO `member` (`user_id`, `username`, `password`, `name`, `surname`, `tel`, `status_id`) VALUES (NULL, '$username', '$password', '$firstname', '$lastname', '$tel', '2')";
if (mysqli_query($conn, $sql)) {
    if ($_SESSION['username'] == "") {
        header('location:../../users/signin.php');
    } else {
        header('location:../../manage.php');
    }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
