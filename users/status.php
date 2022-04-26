<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('../style/bootstrap_5.php');  ?>
    <link rel="icon" type="image/png" sizes="16x16" href="../icon/mstile-150x150.png">
    <link rel="stylesheet" href="../style/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT FRIEND</title>
    <?php session_start(); ?>
    <?php require('header.php'); ?>

</head>
<style>
    input {
        pointer-events: none;
    }
</style>
<?php require('../backend/db.php');
$user_id = $_SESSION["user_id"];

$sql = "SELECT * FROM `payment` WHERE `user_id` = $user_id ORDER BY `payment`.`pay_id` ASC";

$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $pay_id = $row['pay_id'];
    $ps_id = $row['ps_id'];
    if ($ps_id == 1) {
        $ps_id = "Process";
    } else if ($ps_id == 2) {
        $ps_id = "complete";
    } else if ($ps_id == 3) {
        $ps_id = "failed";
    }
    $pay_start = $row['pay_start'];
    $pay_end = $row['pay_end'];
}
mysqli_close($conn);
?>

<body>

    <div class=" container">

        <div style="background-color: #0A1334;">
            <div class="row">
                <div class="col pt-3 d-grid gap-2 d-md-flex justify-content-md-center" style="background-color: #0A1334;">
                    <div class="" style=" background-color: #0A1334;justify-content: center;">
                        <img src="../img/LOGO1 9.png" style="border-radius: 10px;" alt="">
                        <p class="fs-4 text-white pt-2 text-center" style="background-color: #0A1334;">IT Friend</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="d-flex justify-content-center" style="background-color: #0A1334;">
                    <div class=" text-white " style="background-color: #12234E;width: 75%;padding: 15px;  border-radius: 10px;">
                        <div style="background-color: #12234E;">
                            <label for="user" class="form-label" style="background-color: #12234E;">Order ID</label>
                            <input type="text" class="form-control" name="user" id="user" value="<?php echo $pay_id; ?>">
                        </div>
                        <div style="background-color: #12234E;" class="mt-3">
                            <label for="password" class="form-label" style="background-color: #12234E;">Order Status</label>
                            <input type="text" class="form-control" name="password" value="<?php echo $ps_id; ?>">
                        </div>
                        <div class="d-flex justify-content-around pt-3" style="background-color: #12234E;">
                            <div class="col-3 ">
                                <div style="background-color: #12234E;">
                                    <label for="password" class="form-label" style="background-color: #12234E;">Start</label>
                                    <input type="text" class="form-control" name="password" value="<?php echo $pay_start; ?>">
                                </div>
                            </div>
                            <div class="col-3">
                                <div style="background-color: #12234E;">
                                    <label for="password" class="form-label" style="background-color: #12234E;">End</label>
                                    <input type="text" class="form-control" name="password" value="<?php echo $pay_end; ?>">
                                </div>
                            </div>
                        </div>



                        <div class="d-grid " style="background-color: #12234E;">
                            <a href="./" class="btn btn-danger text-white mt-3" id="submit">Back</a>
                        </div>
                    </div>

                </div>


            </div>
        </div>
</body>

</html>