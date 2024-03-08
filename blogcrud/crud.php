<?php
include "../components/connect.php";
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: ../../../travel/login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
   
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
 <link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">



  <style>
  input{
    margin: 10px;
}
            </style>


</head>
<body>
  <center>
    <div class="main">
      <form action="insert.php" method="POST" enctype="multipart/form-data">
        <label for="date">Date:</label>
        <input type="date" name="date" required><br>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required><br>
        <label for="description">Description:</label>
        <input type="text" name="description" id="description" required><br>
        <label for="description2">Description2:</label>
        <input type="text" name="description2" id="description2"><br>
        <label for="description3">Description3:</label>
        <input type="text" name="description3" id="description3"><br>
        <label for="image">Image:</label>
        <input type="file" name="image" id="image" required><br>
        <button type="submit" name="upload">Upload</button>
      </form>
    </div>
  </center>

  <!-- fetch data -->
  <div class="container">
    <table class="table" id="myTable">
      <thead>
        <tr>
          <th scope="col">Id</th>
          <th scope="col">Date</th>
          <th scope="col">Title</th>
          <th scope="col">Description</th>
          <th scope="col">Description2</th>
          <th scope="col">Description3</th>
          <th scope="col">Image</th>
          <th scope="col">Delete</th>
          <th scope="col">Update</th>
        </tr>
      </thead>
      <tbody>
        <?php
        // include "../components/connect.php";
        $pic = mysqli_query($con, "SELECT * FROM `tblcard`");
        $Id = 0;
        while ($row = mysqli_fetch_array($pic)) {
          $Id = $Id + 1;
          echo "
            <tr>
              <td>$row[Id]</td>
              <td>$row[Date]</td>
              <td>$row[Title]</td>
              <td>$row[Description]</td>
              <td>$row[Description2]</td>
              <td>$row[Description3]</td>
              <td><img src='$row[Image]' width='200px' height='70px'></td>
              <td><a href='delete.php?Id=$row[Id]' class='btn btn-danger'>Delete</a></td>
              <td><a href='update.php?Id=$row[Id]' class='btn btn-danger'>Update</a></td>
            </tr>";
        }
        ?>
      </tbody>
    </table>
  </div>

  <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>

  <script>
  $(document).ready(function() {
    $('#myTable').DataTable();
  });
</script>


 
</body>
</html>