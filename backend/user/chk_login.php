<?php

if ($_SESSION['username'] == '') {
    header('location:http://localhost/content/users/signin.php');
}
