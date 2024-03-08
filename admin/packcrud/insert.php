

<?php
// include db connection
include "../../components/connect.php";

if(isset($_POST['upload'])){
    // $ID = $_POST['Id'];
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

    // insert data

    mysqli_query($con,"INSERT INTO `packcard`(`place`, `duration`, `start_date`, `end_date`, `description`, `cost`, `image`) 
     VALUES ('$place','$duration', '$start_date', '$end_date', '$description', '$cost', '$img_des')");
    header("location:crud.php");

}

?>