<!DOCTYPE html>
<html lang="en">

<head>
    <?php session_start(); ?>
    <!-- <?php error_reporting(0); ?> -->
    <?php require('style/bootstrap_5.php');  ?>
    <link rel="icon" type="image/png" sizes="16x16" href="icon/mstile-150x150.png">
    <link rel="stylesheet" href="style/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT FRIEND</title>
    <?php require('header.php'); ?>

    <img src="img/Homese_banner.png" class="img-fluid pb-4" width="100%">
</head>
<style>
    iframe {
        border-radius: 35px;
    }
</style>

<body>

    <?php
    require('backend/db.php');
    $sql = "SELECT * FROM `contents`";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        // output data of each row
    ?>


        <div class="col d-flex justify-content-center" style="margin-left: 250px;margin-right: 250px;background-color: #12234E;border-radius: 35px;">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/ZyQryZ-uPCk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>

        <div style="display: block;width:100%;height:10px;background-color: #E0E5E9;margin:10px "></div>
        <div class="d-flex justify-content-end pe-4" style="background-color: #12234E;">
            <a href="add_content.php"><img src="icon/add_icon.png" alt=""></a>
        </div>
        <div class="d-flex justify-content-center" style=" background-color: #12234E;width:100%;">
            <div class="d-flex flex-wrap justify-content-center" style="background-color: #12234E;">
                <?php while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <div class="col" style="margin:10px;background-color: #12234E;">
                        <iframe width="360" height="185" src="<?php echo $row['con_media']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <div class="row d-flex justify-content-center " style="border-radius: 300px; background-color: #12234E;width:50%">
                            <div class="col-6 d-flex justify-content-center" style="background-color: #12234E;"><a href="edit_content.php?content_id=<?php echo $row['con_id'] ?>"><img src="icon/edit_icon.png" alt=""></a></div>
                            <div class="col-6 d-flex justify-content-center" style="background-color: #12234E;"><a href="backend/content/del.php?content_id=<?php echo $row['con_id'] ?>"><img src="icon/del_icon.png" alt=""></a></div>
                        </div>
                    </div>

            <?php
                }
            } else {
            }

            mysqli_close($conn);
            ?>

            </div>
        </div>

        <div class="d-flex justify-content-center" style="background-color: #12234E;">
            <div style="display: block;width:90%;padding:20px 0;background-color: #E0E5E9;margin:10px;border-radius: 25px ;" class="text-center">
                Motion Graphic With Adobe After Effect
            </div>

        </div>
        <div class="d-flex justify-content-center" style="background-color: #12234E;padding-top:20px">
            <div class="col-4 d-flex justify-content-center" style="background-color: #12234E;"><img src="img/week.png" style="background-color: #12234E;"></div>
            <div class="col-4 d-flex justify-content-center" style="background-color: #12234E;"><img src="img/month.png" style="background-color: #12234E;"></div>
            <div class="col-4 d-flex justify-content-center" style="background-color: #12234E;"><img src="img/year.png" style="background-color: #12234E;"></div>
        </div>
        <div class="d-flex justify-content-center" style="background-color: #12234E;">
            <div class="col-4 d-flex justify-content-center" style="background-color: #12234E;"><a style="width: 50%;" href="order.php?class=week"> <img src="img/btn_buynow.png" width="100%" style="background-color: #12234E;"></a></div>
            <div class="col-4 d-flex justify-content-center" style="background-color: #12234E;"><a style="width: 50%;" href="order.php?class=month"> <img src="img/btn_buynow.png" width="100%" style="background-color: #12234E;"></a></div>
            <div class="col-4 d-flex justify-content-center" style="background-color: #12234E;"><a style="width: 50%;" href="order.php?class=year"> <img src="img/btn_buynow.png" width="100%" style="background-color: #12234E;"></a></div>
        </div>



</body>

</html>