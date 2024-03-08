<?php
include "../components/connect.php";
if(isset($_POST['update'])){
    $ID = $_POST['Id'];
    $DATE = $_POST['date'];
    $TITLE = $_POST['title'];
    $DESCRIPTION = $_POST['description'];
    $DESCRIPTION2 = $_POST['description2'];
    $DESCRIPTION3 = $_POST['description3'];
    $IMAGE = $_FILES['image'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "uploadImage/".$img_name;
    move_uploaded_file($img_loc,'uploadImage/'.$img_name);

    mysqli_query($con,"UPDATE `tblcard` SET `Title`='$TITLE', `Description`='$DESCRIPTION', `Description2`='$DESCRIPTION2',  `Description3`='$DESCRIPTION3',  `Image`='$img_des' WHERE Id = '$ID' ");
    header("location:crud.php");


}
?>
