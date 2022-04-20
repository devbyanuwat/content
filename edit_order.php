<!DOCTYPE html>
<html lang="en">

<head>
    <?php require('style/bootstrap_5.php');  ?>
    <link rel="icon" type="image/png" sizes="16x16" href="icon/mstile-150x150.png">
    <link rel="stylesheet" href="style/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT FRIEND</title>
    <?php session_start(); ?>
    <!-- <?php error_reporting(0); ?> -->
    <?php require('header.php'); ?>

</head>
<style>
    input {
        pointer-events: none;
    }
</style>
<?php
$price = 0;
if ($_GET['ps_id'] == 1) {
    $ps_id = "Process";
} else if ($ps_id == 2) {
    $ps_id = "Complete";
} else if ($ps_id == 3) {
    $ps_id = "Failed";
}

?>

<body>

    <div class=" container">
        <div style="background-color: #0A1334;">
            <div class="row">
                <div class="col pt-3 d-grid gap-2 d-md-flex justify-content-md-center" style="background-color: #0A1334;">
                    <div class="" style=" background-color: #0A1334;justify-content: center;">
                        <img src="img/LOGO1 9.png" style="border-radius: 10px;" alt="">
                        <p class="fs-4 text-white pt-2 text-center" style="background-color: #0A1334;">Edit Order.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <form method="post" style="background-color: #0A1334;" class="d-md-flex justify-content-md-center" action="backend/orders/edit.php">
                    <div class=" text-white" style="background-color: #12234E;width: 75%;padding: 15px;  border-radius: 10px;">
                        <div style="background-color: #12234E;">
                            <label for="user" class="form-label" style="background-color: #12234E;">Order ID</label>
                            <input type="text" class="form-control" name="pay_id" id="user" value="<?php echo $_GET['pay_id']; ?>" autocomplete="off">
                        </div>

                        <div style="background-color: #12234E;">
                            <label for="ps_id" class="form-label" style="background-color: #12234E;">Status</label>
                            <select id="ps_id" name="ps_id" class="form-select">
                                <option value="1">Process</option>
                                <option value="2">Complete</option>
                                <option value="3">Failed</option>
                            </select>
                        </div>
                        <div class="d-grid " style="background-color: #12234E;">
                            <button type="submit" class="btn btn-warning text-white mt-3" id="submit">Confirm</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
</body>

</html>