<?php include "../../components/connect.php";
include "../../components/config.php";
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
  header("location: ../../../travel/login.php");
  exit;
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
       <!-- Bootstrap Link -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="../../css/style.css?v=<?=$version?>">
    <link rel="stylesheet" href="../../css/footer.css?v=<?=$version?>">
</head>
<body>
<?php  include "../../components/header.php";?>


<!-- package_details.php -->
<?php

// Check if the place is specified in the URL
if (!empty($_GET['place'])) {
    $place = $_GET['place'];

    // Retrieve package details from the database based on the place
    $sql = "SELECT * FROM `packcard` WHERE place = '$place'";
    $result = mysqli_query($con, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);


        // <!-- HTML markup for package details -->
       echo' <section class="package-details">
            <div class="container">
                <div class="main-text">
                    <!-- <h1>Package Details</h1> -->
                </div>
                <div class="row">
                    <div class="col-md-6">';
                       echo' <img src="' . $row['image'] . '" alt="Package details">';
                       echo' </div>
                    <div class="col-md-6 adjust">';
                    echo' <h2>' . $row['place'] . '</h2>';
                        
                    echo' <h4>Duration: <span>' . $row['duration'] . '</span></h4>
                        <h4>From: <span>' . $row['start_date'] . '</span>&nbsp;&nbsp;&nbsp;To: <span>' . $row['end_date'] . '</span></h4>
                        <h4>Price: <span>' . $row['cost'] . '</span></h4>
                        <p>Package details: ' . $row['description'] . '</p> ';
                        echo'  <h4>Includes:</h4>
                        <ul>
                            <li>Accommodation | Meals</li>
                            <li>Transportation | Guided Tours</li><br>
                        </ul>';
                        echo '<a href="../../book.php?place=' . urlencode($row['place']) . '&start_date=' . urlencode($row['start_date']) . '&end_date=' . urlencode($row['end_date']) . '" target="_blank" class="link">Book Now</a>';
                        // echo '<a href="../../book.php?place=' . urlencode($row['place']) . '" target="_blank" class="link">Book Now</a>';

                        // <!-- <a href="../../book.php" target="_blank" class="link">Book Now</a> -->
                        echo' </div>
                </div>
            </div>
        </section>';


    } else {
        echo 'No package found with the specified place.';
    }
} else {
    echo 'Package place is not specified.';
}
?>
<!-- package_details.php -->


<style>
img{
  height: 27rem;
    width: 35rem;
}
.link{
  padding: 10px;
    text-decoration: none;
    background: #ffa500;
    color: white;
    border-radius: 5px;
}
.link:hover{
  background: #ffa500;
    color: white;
}
.package-details{
  margin: 8rem 0rem;
}
.adjust{
  width: 36rem;
    margin: 1rem 0;
}
@media screen and (max-width: 460px){
.col-md-6 img{
        height: 21rem;
    width: 23rem;
    }
}
@media screen and (max-width: 600px) {
            /* Adjust the layout and styling for small screens */
            .col-md-6 {
                width: 100%;
            }
        }
 </style>

    <?php include '../../components/footer.php'; ?>
    <script src="../../js/script.js"></script>
</body>
</html>
