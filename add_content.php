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
    <?php require('header.php'); ?>

</head>

<body>

    <div class=" container">
        <div style="background-color: #0A1334;">
            <div class="row">
                <div class="col pt-3 d-grid gap-2 d-md-flex justify-content-md-center" style="background-color: #0A1334;">
                    <div class="" style=" background-color: #0A1334;justify-content: center;">
                        <img src="img/LOGO1 9.png" style="border-radius: 10px;" alt="">
                        <p class="fs-4 text-white pt-2" style="background-color: #0A1334;">Manage Add</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <form method="post" style="background-color: #0A1334;" action="backend/content/add.php" class="d-flex flex-warp justify-content-center">
                    <div class="text-white" style="background-color: #12234E;width: 75%;padding: 15px;  border-radius: 10px;">
                        <div class="row">
                            <div class="col" style="background-color: #12234E;">
                                Video url
                                <input type="url" class="form-control" name="con_media" width="1000px" required>
                            </div>
                        </div>
                        <div class="d-flex mt-4">
                            <div class="col" style="background-color: #12234E;">
                                <button type="submit" class="btn-warning text-white" style="width: 100%;">Add</button>
                            </div>
                            <div class="col" style="background-color: #12234E;">
                                <button style="background-color: #FF5D02;width: 100%;" class="text-white">Cancel</button>
                            </div>
                        </div>
                </form>

            </div>
        </div>
</body>

</html>