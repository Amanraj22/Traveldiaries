<?php
include "../../components/connect.php";
if(isset($_POST['update'])){
    $ID = $_POST['Id'];
    $place = $_POST['place'];
    $duration = $_POST['duration'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $description = $_POST['description'];
    $cost = $_POST['cost'];
    $image = $_FILES['image'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "uploadImage/".$img_name;
    move_uploaded_file($img_loc,'uploadImage/'.$img_name);

    mysqli_query($con,"UPDATE `packcard` SET `place`='$place', `duration`='$duration', `start_date`='$start_date', `end_date`='$end_date', `description`='$description', `cost`='$cost', `image`='$img_des' WHERE Id = '$ID' ");
    header("location:crud.php");


}
?>
