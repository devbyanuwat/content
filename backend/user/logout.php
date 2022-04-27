<?php
session_start();
$_SESSION['username'] = "";
$_SESSION['ps_id'] = 0;
require('chk_login.php');
