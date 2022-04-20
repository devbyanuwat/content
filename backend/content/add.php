<?php
session_start();
require('../db.php');

$con_media = $_POST['con_media'];

// echo $con_media;
$sql = "INSERT INTO `contents` (`con_id`, `con_media`) VALUES (NULL, '$con_media')";
if (mysqli_query($conn, $sql)) {
    header('location:../../');
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
