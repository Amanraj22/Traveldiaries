

<?php
// include db connection
include "../components/connect.php";

if(isset($_POST['upload'])){
    // $ID = $_POST['Id'];
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

    // insert data

    mysqli_query($con,"INSERT INTO `tblcard`(`Date`, `Title`, `Description`, `Description2`, `Description3`, `Image`) 
     VALUES ('$DATE','$TITLE', '$DESCRIPTION', '$DESCRIPTION2', '$DESCRIPTION3', '$img_des')");
    header("location:crud.php");

}

?>