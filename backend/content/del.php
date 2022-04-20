<?php
require('../db.php');
$con_id = $_GET['content_id'];


$sql = "DELETE FROM contents WHERE con_id = $con_id";

if (mysqli_query($conn, $sql)) {
    header('location:../../');
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
