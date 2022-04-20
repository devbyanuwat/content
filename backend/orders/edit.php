<?php
require('../db.php');
$pay_id = $_POST['pay_id'];
$ps_id = $_POST['ps_id'];

echo $ps_id;
$sql = "UPDATE `payment` SET `ps_id` = '$ps_id' WHERE `payment`.`pay_id` = $pay_id;";
if (mysqli_query($conn, $sql)) {
    header('location:../../order.php');
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

mysqli_close($conn);
