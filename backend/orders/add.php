<?php
session_start();

require('../db.php');
$user_id =  $_SESSION['user_id'];
$price = $_POST['price'];
$ps_id = 1;
$pay_start = date("Y-m-d");
$pay_end = 0;
$category = $_POST['category'];
if ($category == "week") {
    $pay_end = date("Y-m-d", strtotime(date("Y-m-d", strtotime($pay_start)) . " + 7 day"));
} else if ($category == "month") {
    $pay_end = date("Y-m-d", strtotime(date("Y-m-d", strtotime($pay_start)) . " + 30 day"));
} else if ($category == "year") {
    $pay_end = date("Y-m-d", strtotime(date("Y-m-d", strtotime($pay_start)) . " + 365 day"));
}

echo $user_id;
echo "<br>";
echo $pay_end;


$sql = "INSERT INTO `payment` (`pay_id`, `user_id`, `pay_price`, `ps_id`, `pay_start`, `pay_end`, `pay_category`) VALUES (NULL, '$user_id', '$price', '1', '$pay_start', '$pay_end', '$category');";
if (mysqli_query($conn, $sql)) {
    $_SESSION['ps_id']  = $ps_id;
    header('location:../../users/');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
