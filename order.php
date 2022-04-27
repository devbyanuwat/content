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

<script>
    function del_user() {
        swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this imaginary file!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    swal("Poof! Your imaginary file has been deleted!", {
                        icon: "success",
                    });

                } else {
                    swal("Your imaginary file is safe!");
                }
            });
    }
</script>

<body style="width: 100%;">

    <div class="container">
        <div style="background-color: #0A1334;">
            <div class="row">
                <div class="col pt-3 d-grid gap-2 d-md-flex justify-content-md-center" style="background-color: #0A1334;">
                    <div class="" style=" background-color: #0A1334;justify-content: center;">
                        <img src="img/LOGO1 9.png" style="border-radius: 10px;" alt="">
                        <center>
                            <p class="fs-4 text-white pt-2" style="background-color: #0A1334;">Order Manager</p>
                        </center>
                    </div>
                </div>
            </div>

            <div class="row">
                <div style="background-color: #0A1334;">
                    <!-- <a href="add_user.php" style="background-color: #0A1334;" class="d-flex justify-content-end"><img src="icon/add_icon.png" width="3%"></a> -->
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

                        <table style="width:100%" class="text-center ">
                            <tr>
                                <th>#</th>
                                <th>Order ID</th>
                                <th>Username</th>
                                <th>Price</th>
                                <th>Edit</th>
                                <th>Status</th>
                                <!-- <th>Tel</th> -->
                            </tr>

                            <?php
                            require('backend/db.php');
                            $sql = "SELECT * FROM `payment` ORDER BY `pay_id` DESC";
                            $result = mysqli_query($conn, $sql);
                            $i = 1;

                            $sql_member = "SELECT member.username FROM `payment` INNER JOIN `member` ON member.user_id=payment.user_id ORDER BY `member`.`username` DESC";
                            $result_member = mysqli_query($conn, $sql_member);

                            $member = array("0");
                            while ($row_member = mysqli_fetch_array($result_member)) {
                                array_push($member, $row_member['username']);
                            }
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_array($result)) {

                            ?>
                                    <td><?php echo $i; ?> </td>
                                    <td><?php echo $row['pay_id'] ?></td>
                                    <td><?php print_r($member[$i])  ?></td>
                                    <td><?php echo $row['pay_price'] ?></td>
                                    <td><?php
                                        if ($row['ps_id'] == 1) {
                                            $ps_id = "Process";
                                        } else if ($row['ps_id'] == 2) {
                                            $ps_id = "Complete";
                                        } else if ($row['ps_id'] == 3) {
                                            $ps_id = "Failed";
                                        }
                                        echo $ps_id; ?></td>
                                    <!-- <td><?php echo $row['pay_tel'] ?></td> -->
                                    <td><a href="edit_order.php?pay_id=<?php echo $row['pay_id'] . "&ps_id=" .  $row['ps_id']; ?>"><img src="icon/edit_icon.png" width="15%" style="background-color: #FFFCFC;"></a></td>
                                    <!-- <td><a href="backend/user/del.php?user_id=<?php echo $row['user_id'] ?>"><img src="icon/del_icon.png" width="15%" style="background-color: #FFFCFC;"></a></td> -->
                            <?php
                                    $i++;
                                    echo "</tr>";
                                }
                            }

                            ?>


                        </table>
                    </div>
                </div>

            </div>
        </div>
</body>