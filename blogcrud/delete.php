<?php
include include "../components/connect.php";
 $ID = $_GET['Id'];
mysqli_query($con,"DELETE FROM `tblcard` WHERE Id = $ID");

header('location:crud.php');

?>