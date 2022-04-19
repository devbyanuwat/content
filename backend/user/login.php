<?php
session_start();
include('../db.php');

$username = $_POST['user'];
$password = $_POST['password'];
// $_SESSION['username'];
// $password = mysqli_real_escape_string($conn, $_POST['password']);

$sql = "SELECT * FROM `member` WHERE `username` LIKE '$username' AND `password` LIKE '$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_assoc($result);
    $status =  $row['status_id'];
    $_SESSION['user_id'] = $row['user_id'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['surname'] = $row['surname'];
    $_SESSION['tel'] = $row['tel'];
    if ($status == 2) {
        //user
        header('location:../../users/');
    } else if ($status == 1) {
        //admin
        header('location:../../');
    }
} else {
    header('location:../../signin.php');
}
