<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
<style>
    input{
        margin: 10px;
    }
</style>
</head>
<body>


<?php

include "../components/connect.php";
$ID = $_GET['Id'];
$Record = mysqli_query($con,"SELECT * FROM `tblcard` WHERE Id = $ID");
$data = mysqli_fetch_array($Record);

?>
    

<center>
        <div class="main">
        <form action="update1.php" method="POST" enctype="multipart/form-data" >
        <!-- <label for="">Date:</label> -->
        <!-- <input type="date" value="<?php echo $data['Date'] ?>" name="date"><br> -->
        <label for="">Title :</label>
        <input type="text" value="<?php echo $data['Title'] ?>" name="title" id=""><br>
        <label for="">Description:</label>
        <input type="text" value="<?php echo $data['Description'] ?>" name="description" id=""><br>
        <label for="">Description2:</label>
        <input type="text" value="<?php echo $data['Description2'] ?>" name="description2" id=""><br>
        <label for="">Description3:</label>
        <input type="text" value="<?php echo $data['Description3'] ?>" name="description3" id=""><br>
        <label for="">Image:</label>
        <td><input type="file" name="image" value="<?php echo $data['Image'] ?>"><img src="<?php echo $data['Image'] ?>"  width = '200px'  height = '70px' alt=""> </td><br>
            <input type="hidden" name="Id"  value="<?php echo $data['Id'] ?>">
        <button type="submit" name="update" class = 'btn btn-danger m-2'>Update</button>

        </form>
    </div>
        </center>


       

    </body>    
</html>