<!-- <?php

// include 'connect.php';

// setcookie('admin_id', '', time() - 1, '/');

// header('location:login.php');

?> -->
<?php
session_start();
session_unset();
session_destroy();
header("location: login.php");
exit;
?>