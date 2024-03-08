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

include 'config.php';
$ID = $_GET['Id'];
$Record = mysqli_query($con,"SELECT * FROM `packcard` WHERE Id = $ID");
$data = mysqli_fetch_array($Record);

?>
    

<center>
        <div class="main">
        <form action="update1.php" method="POST" enctype="multipart/form-data" >
        <label for="">Place:</label>
        <input type="text" value="<?php echo $data['place'] ?>" name="place"><br>
        <label for="">Duration :</label>
        <input type="text" value="<?php echo $data['duration'] ?>" name="duration" id=""><br>
        <label for="">start_date:</label>
        <input type="date" value="<?php echo $data['start_date'] ?>" name="start_date" id=""><br>
        <label for="">end_date:</label>
        <input type="date" value="<?php echo $data['end_date'] ?>" name="end_date" id=""><br>
        <label for="">Description:</label>
        <input type="text" value="<?php echo $data['description'] ?>" name="description" id=""><br>
        <label for="">Cost:</label>
        <input type="text" value="<?php echo $data['cost'] ?>" name="cost" id=""><br>
        <label for="">Image:</label>
        <td><input type="file" name="image" value="<?php echo $data['image'] ?>"><img src="<?php echo $data['image'] ?>"  width = '200px'  height = '70px' alt=""> </td><br>
            <input type="hidden" name="Id"  value="<?php echo $data['Id'] ?>">
        <button type="submit" name="update" class = 'btn btn-danger m-2'>Update</button>

        </form>
    </div>
        </center>


       

    </body>    
</html>