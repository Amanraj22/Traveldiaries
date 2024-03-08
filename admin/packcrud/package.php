<?php include "../../components/connect.php";
include "../../components/config.php"; 
session_start();?>
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
 <!-- home section banner start -->
 <div class="banner">
  <img src="https://images.pexels.com/photos/307008/pexels-photo-307008.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Image description">
  <div class="banner-content">
    <h1>Visit <span class="change"></span></h1>
    <!-- <p>Choose your favourite destination.</p> -->
    <!-- <button>Blog</button> -->
    <!-- <a href="about.php" class="more">Travel</a> -->
  </div>
</div>
 <!-- home section banner end -->

  <!-- Section Packages Start -->
  <section class="packages" id="packages">
    <div class="container">
        <div class="main-txt">
            <h1><span>P</span>ackages</h1>
        </div>
        <div class="row" style="margin-top: 30px;">
            <?php
            $sql = "SELECT * FROM `packcard`";
            $result = mysqli_query($con, $sql);
            $sno = 0;
            foreach ($result as $row) {
                echo '<div class="col-md-4 py-3 py-md-0">';
                echo '<div class="card">';
                echo '<img src="' . $row['image'] . '">';
                echo '<div class="card-body">';
                echo '<h3>' . $row['place'] . ' <span>' . $row['duration'] . '</span></h3>';
                echo '<p>' . $row['description'] . '</p>';
                echo '<div class="star">';
                echo '<i class="fa-solid fa-star checked"></i>';
                echo '<i class="fa-solid fa-star checked"></i>';
                echo '<i class="fa-solid fa-star checked"></i>';
                echo '<i class="fa-solid fa-star checked"></i>';
                echo '<i class="fa-solid fa-star checked"></i>';
                echo '</div>';
                echo '<h6>Price: <strong>' . $row['cost'] . '</strong></h6>';
                echo '<a href="package_details.php?place=' . urlencode($row['place']) . '">Know more</a>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</section>

    <!-- Section Packages End -->

    
<style>

/* Section Packages Start */
.main-txt h1{
    text-align: center;
    margin-top: 30px;
    font-weight: 600;
    text-shadow: 0px 1px 1px black;
}
.main-txt h1 span{
    color: #ffa500;
}
.packages{
  margin: 6rem auto;
}
.packages .card{
    border-radius: 5px;
    border: none;
    box-shadow: rgba(0,0,0,0.1) 0px 4px 12px;
}
.packages .card img{
    border-radius: 5px;
    height: 16rem;
}
.packages .card .card-body{
    background: transparent;
}
.packages .card .card-body h3{
    font-size: 25px;
    font-weight: 600;
}
.packages .card .card-body p{
    font-size: 15px;
}
.card-body span{
  float: right;
}
.checked{
    color: #ffa500;
}
.star i{
    font-size: 15px;
}
.packages .card .card-body h6{
    font-size: 20px;
    margin: 0.5rem 0 1rem 0;
}
.packages .card .card-body a{
    padding: 10px;
    text-decoration: none;
    background: #ffa500;
    color: white;
    border-radius: 5px;
}
.row{
  justify-content:unset;
}
@media (max-width: 460px){
    .row{
        justify-content: center;
    }
    .col-sm-6, .col-md-4{
        width: 94%;
    }
}
/* Section Packages End */
 </style>

    <?php include '../../components/footer.php'; ?>
    <script src="../../js/script.js"></script>
</body>
</html>
