<?php
session_start();
include('../db.php');

$user = $_POST['user'];
$password = $_POST['password'];
// $password = mysqli_real_escape_string($conn, $_POST['password']);

echo $_POST['user'] . "<-";

echo $user . "  -  " . $password;
