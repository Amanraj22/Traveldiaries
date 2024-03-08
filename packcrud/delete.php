<?php
include 'config.php';
 $ID = $_GET['Id'];
mysqli_query($con,"DELETE FROM `packcard` WHERE Id = $ID");

header('location:index.php');

?>