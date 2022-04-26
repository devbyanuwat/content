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
    <?php require('backend/user/chk_login.php'); ?>
    <?php require('header.php'); ?>

</head>

<body style="width: 100%;">

    <div class="container">
        <div style="background-color: #0A1334;">
            <div class="row">
                <div class="col pt-3 d-grid gap-2 d-md-flex justify-content-md-center" style="background-color: #0A1334;">
                    <div class="" style=" background-color: #0A1334;justify-content: center;">
                        <img src="img/LOGO1 9.png" style="border-radius: 10px;" alt="">
                        <p class="fs-4 text-white pt-2" style="background-color: #0A1334;">Feedback Comment</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div style="background-color: #0A1334;">
                    <div style="background-color: #12234E;padding:15px;border-radius: 25px;margin-bottom: 15px;" class="d-md-flex justify-content-md-center">
                        <style>
                            table,
                            th,
                            td {
                                border: 1px solid black;
                            }

                            th {
                                background-color: #9BCCF9;
                            }

                            td {
                                background-color: #FFFCFC;
                            }
                        </style>
                        <table style="width:100%" class="text-center">
                            <tr>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Phone Number</th>
                                <th>Comment</th>
                            </tr>

                            <?php
                            require('backend/db.php');
                            $sql = "SELECT member.name,member.surname,member.tel,comment.comment_detail FROM `member` INNER JOIN `comment` ON member.user_id=comment.user_id";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_array($result)) {
                            ?>
                                    <tr>
                                        <td><?php echo $row['name'] ?> </td>
                                        <td><?php echo $row['surname'] ?></td>
                                        <td><?php echo $row['tel'] ?></td>
                                        <td><?php echo $row['comment_detail'] ?></td>
                                <?php
                                }
                            }

                                ?>

                                    </tr>
                        </table>
                    </div>
                </div>

            </div>
        </div>
</body>