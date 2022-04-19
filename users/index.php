<!DOCTYPE html>
<html lang="en">

<head>
    <?php session_start(); ?>
    <?php error_reporting(0); ?>
    <?php require('../style/bootstrap_5.php');  ?>
    <link rel="icon" type="image/png" sizes="16x16" href="../icon/mstile-150x150.png">
    <link rel="stylesheet" href="../style/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IT FRIEND</title>
    <?php require('header.php'); ?>

    <img src="img/Homese_banner.png" class="img-fluid pb-4" width="100%">
</head>

<body>
    <h1 style="text-align:center">User</h1>

    <div class="container">
        <iframe width="699" height="393" id="myFrame" src="https://www.youtube.com/embed/jbOTVZAm21M?list=RDjbOTVZAm21M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </div>





    <div class="p-4 text-center" style="background-color: #0A1235;">
        <div class="row row-cols-3">
            <div class="col d-flex justify-content-center" style="background-color: #12234E;">
                <div class="card">
                    <img src="..." class="card-img-top mx-auto bg-warning" alt="..." width="342px" height="316">
                    <div class="card-body">
                        <h5 class="card-title">Content 1</h5>
                        <p class="card-text">$3,999.00</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center" style="background-color: #12234E;">
                <div class="card">
                    <img src="..." class="card-img-top p-3 bg-warning" alt="..." width="342px" height="316">
                    <div class="card-body">
                        <h5 class="card-title">Content 2</h5>
                        <p class="card-text">$3,999.00</p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col d-flex justify-content-center" style="background-color: #12234E;">
                <div class="card">
                    <img src="../img/LOGO1 1.png" class="card-img-top p-3 rounded-3 bg-warning" width="auto" height="auto">
                    <div class="card-body" style="background-color: #12234E;">
                        <h5 class="card-title  text-center fs-5 rounded-pill m-3 p-3" style="background-color: #E0E5E9;">Content 3</h5>
                        <p class="card-text  text-center fs-5 rounded-pill m-3 p-3" style="background-color: #E0E5E9;">$3,999.00</p>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon1"><img src="icon/icons8-cart-64.png" width="32"></span>
                            <input type="button" class="btn-warning form-control rounded-3" aria-label="Username" aria-describedby="basic-addon1">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <iframe width="699" height="393" id="myFrame" src="https://www.youtube.com/embed/jbOTVZAm21M?list=RDjbOTVZAm21M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <input type="text" name="" id="new_url">
    <button onclick="change();">Change Video!</button>
    <script>
        function change() {
            var url = document.getElementById("new_url").value;
            var equal_index = url.search("=");
            var length = url.length;
            var short_url = url.substr(equal_index + 1, length);
            console.log("*url=" + url);
            console.log("*equal_index=" + equal_index);
            console.log("*length=" + length);
            console.log("*short_url=" + short_url);
            var vdo = document.getElementById("myFrame").src = "https://www.youtube.com/embed/" + short_url;
        }
    </script>
</body>

</html>