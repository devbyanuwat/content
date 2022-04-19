<?php
require('../db.php');
$user_id = $_GET['user_id'];


$sql = "DELETE FROM member WHERE user_id = $user_id";

if (mysqli_query($conn, $sql)) {
    header('location:../../manage.php');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
