<?php
require('../db.php');
$con_id = $_GET['con_id'];
$con_media = $_POST['con_media'];

$sql = "UPDATE `contents` SET `con_media` = '$con_media' WHERE `contents`.`con_id` = $con_id;";
if (mysqli_query($conn, $sql)) {
    header('location:../../');
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
