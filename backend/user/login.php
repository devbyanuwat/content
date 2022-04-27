<?php
session_start();
include('../db.php');

$username = $_POST['user'];
$password = $_POST['password'];
$user_id = 4;
// $_SESSION['username'];
// $password = mysqli_real_escape_string($conn, $_POST['password']);

$sql = "SELECT * FROM `member` WHERE `username` LIKE '$username' AND `password` LIKE '$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {

    $row = mysqli_fetch_assoc($result);
    $status =  $row['status_id'];
    $_SESSION['user_id'] = $row['user_id'];
    $user_id = $row['user_id'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['surname'] = $row['surname'];
    $_SESSION['tel'] = $row['tel'];
    $_SESSION['ps_id'] = 0;
} else {
    header('location:../../signin.php');
}

if ($status == 2) {
    //user
    $sql_ps_id = "SELECT * FROM `payment` WHERE `user_id` = $user_id ORDER BY `pay_id` ASC";
    $result_ps_id = mysqli_query($conn, $sql_ps_id);

    if (mysqli_num_rows($result_ps_id) > 0) {
        $row_ps_id = mysqli_fetch_assoc($result_ps_id);
        $_SESSION['ps_id'] = $row_ps_id['ps_id'];
    }
    if ($_SESSION['ps_id'] == 2) {
        header('location:../../users/member.php');
    } else {
        header('location:../../users/');
    }
} else if ($status == 1) {
    //admin
    header('location:../../');
}
