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
    <!-- <?php error_reporting(0); ?> -->
    <?php require('header.php'); ?>

</head>

<?php $category = $_GET['category'];
$price = 0;
if ($category == "week") {
    $price = 499;
} else if ($category == "month") {
    $price = 3999;
} else if ($category == "year") {
    $price = 14999;
}

?>

<body>

    <div class=" container">
        <div style="background-color: #0A1334;">
            <div class="row">
                <div class="col pt-3 d-flex flex-wrap justify-content-center" style="background-color: #0A1334;">
                    <div class="d-flex flex-wrap justify-content-center" style=" background-color: #0A1334">
                        <img src="../img/LOGO1 9.png" style="border-radius: 10px;" alt="">
                        <p class="fs-4 text-white pt-2 text-center" style="background-color: #0A1334;">Please fill out the information completely for easy payment.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <form method="post" style="background-color: #0A1334;" class="d-md-flex justify-content-md-center" action="../backend/orders/add.php">
                    <div class=" text-white" style="background-color: #12234E;width: 75%;padding: 15px;  border-radius: 10px;">
                        <div style="background-color: #12234E;">
                            <label for="user" class="form-label" style="background-color: #12234E;">Username</label>
                            <input type="text" class="form-control" name="user" id="user" value="<?php echo $_SESSION['username']; ?>" autocomplete="off" required disabled>
                        </div>
                        <div style="background-color: #12234E;">
                            <label for="user" class="form-label" style="background-color: #12234E;">Category</label>
                            <input type="text" class="form-control" name="category" id="category" style="pointer-events: none;" value="<?php echo $category; ?>" autocomplete="off" required>
                        </div>
                        <div style="background-color: #12234E;">
                            <label for="user" class="form-label" style="background-color: #12234E;">Price</label>
                            <input type="text" class="form-control" name="price" id="price" style="pointer-events: none;" value="<?php echo $price; ?>" autocomplete="off" required>
                        </div>
                        <div style="background-color: #12234E;">
                            <label for="user" class="form-label" style="background-color: #12234E;">Tel</label>
                            <input type="text" class="form-control" name="tel" id="user" value="<?php echo $_SESSION['tel']; ?>" autocomplete="off" required disabled>
                        </div>
                        <div class="d-grid " style="background-color: #12234E;">
                            <button type="submit" class="btn btn-warning text-white mt-3" id="submit">Confirm</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>
    <div class="d-flex justify-content-evenly" style="background-color: #0A1334;padding:20px">
        <div class="col-3 d-flex justify-content-center" style="background-color: #0A1334;"><img src="../img/qr_week.png" width="50%" alt=""></div>
        <div class="col-3 d-flex justify-content-center" style="background-color: #0A1334;"><img src="../img/qr_month.png" width="50%" alt=""></div>
        <div class="col-3 d-flex justify-content-center" style="background-color: #0A1334;"><img src="../img/qr_year.png" width="50%" alt=""></div>
    </div>
    <div class="d-flex justify-content-evenly" style="background-color: #0A1334;padding:20px">
        <div class="col-3 d-flex justify-content-center" style="background-color: #0A1334;">Week</div>
        <div class="col-3 d-flex justify-content-center" style="background-color: #0A1334;">Month</div>
        <div class="col-3 d-flex justify-content-center" style="background-color: #0A1334;">Year</div>
    </div>
</body>

</html>