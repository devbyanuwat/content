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
    <!-- <?php session_destroy(); ?> -->
    <?php session_start(); ?>
    <?php error_reporting(0); ?>
    <?php require('header.php'); ?>

</head>

<body>

    <div class=" container">
        <div style="background-color: #0A1334;">
            <div class="row">
                <div class="col pt-3 d-grid gap-2 d-md-flex justify-content-md-center" style="background-color: #0A1334;">
                    <div class="" style=" background-color: #0A1334;justify-content: center;">
                        <img src="img/LOGO1 9.png" style="border-radius: 10px;" alt="">
                        <p class="fs-4 text-white pt-2 text-center" style="background-color: #0A1334;">Sign Up</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <form method="post" style="background-color: #0A1334;" action="backend/user/add.php" class="d-md-flex justify-content-md-center">
                    <div class="text-white" style="background-color: #12234E;width: 75%;padding: 15px;  border-radius: 10px;">
                        <div class="row">
                            <div class="col" style="background-color: #12234E;">
                                Firstname
                                <input type="text" class="form-control" name="user_firstname" required>
                            </div>
                            <div class="col" style="background-color: #12234E;">
                                Lastname
                                <input type="text" class="form-control" name="user_lastname" required>
                            </div>
                        </div>
                        <div class="col" style="background-color: #12234E;">
                            Tel.
                            <input type="tel" maxlength="10" class="form-control" name="user_tel" pattern="[0-9]{10}" placeholder="0812341234" required>
                        </div>
                        <div class="col" style="background-color: #12234E;">
                            Username
                            <input type="text" class="form-control" name="user_username" required>
                        </div>
                        <div class="col" style="background-color: #12234E;">
                            Password
                            <input type="password" class="form-control" name="user_password" required>
                        </div>
                        <div class="row mt-3">
                            <div class="col-6 mx-auto" style="background-color: #12234E;">
                                <button type="submit" class="btn btn-warning text-white" style="width: 100%;">Add</button>

                            </div>
                            <div class="col" style="background-color: #12234E;">
                                <a href="./" style="background-color: #FF5D02;width: 100%;" class="btn text-white">Cancel</a>

                            </div>
                        </div>
                    </div>
                </form>

                <div style="background-color: #0A1334;padding-top:15px;padding-bottom: 15px;" class=" col d-md-flex justify-content-md-center">

                    <div class="text-center" style="background-color: #0A1334;color:#676663;"> Welcome to IT Friend !

                        <div class="text-center" style="background-color: #0A1334;color:#676663;"> Create an account.</div>
                    </div>

                </div>


            </div>
        </div>
</body>

</html>