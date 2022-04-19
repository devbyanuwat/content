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

<body style="width: 100%;">

    <div class="container">
        <div style="background-color: #0A1334;">
            <div class="row">
                <div class="col pt-3 d-grid gap-2 d-md-flex justify-content-md-center" style="background-color: #0A1334;">
                    <div class="" style=" background-color: #0A1334;justify-content: center;">
                        <img src="../img/LOGO1 9.png" style="border-radius: 10px;" alt="">
                        <p class="fs-4 text-white pt-2" style="background-color: #0A1334;text-align: center;">Comment</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <form method="post" style="background-color: #0A1334;" action="../backend/user/comment.php?user_id=<?php echo $_SESSION['user_id']; ?>" class="d-md-flex justify-content-md-center">
                    <div class="text-white" style="background-color: #12234E;width: 75%;padding: 15px;  border-radius: 10px;">
                        <!-- <input type="hidden" name="user_id" value="<?php echo $user_id; ?>"> -->
                        <div class="row">
                            <div class="col" style="background-color: #12234E;">
                                Firstname
                                <input type="text" class="form-control" name="user_firstname" value="<?php echo $_SESSION["name"]; ?>" required>
                            </div>
                            <div class="col" style="background-color: #12234E;">
                                Lastname
                                <input type="text" class="form-control" name="user_lastname" value="<?php echo $_SESSION["surname"]; ?>" required>
                            </div>
                        </div>
                        <div class="col" style="background-color: #12234E;">
                            Tel.
                            <input type="text" class="form-control" name="user_tel" value="<?php echo $_SESSION["tel"]; ?>" required>
                        </div>
                        <div class="col" style="background-color: #12234E;">
                            Comment
                            <textarea class="form-control" name="txtarea_comment" placeholder="Enter your comment" required></textarea>
                        </div>

                        <div class="row mt-3" style="background-color: #12234E;">
                            <div class="col-12 mx-auto" style="background-color: #12234E;">
                                <button type="submit" class="btn-warning text-white" style="width: 100%;">OK</button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
</body>