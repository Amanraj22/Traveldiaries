<?php include "../components/connect.php";
include "../components/config.php"; 
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
	<link rel="stylesheet" href="../css/style.css?v=<?=$version?>">
    <link rel="stylesheet" href="../css/footer.css?v=<?=$version?>">
</head>
<body>
<?php  include "../components/header.php";?>

 <!-- home section banner start -->
 <div class="banner">
  <!-- <video autoplay loop muted plays-inline>
    <source src="img/banner-video.mp4" type="video/mp4">
  </video> -->
  <img src="../img/extra.jpeg" alt="Image description">
  <div class="banner-content">
    <h1>Visit <span class="change"></span></h1>
    <!-- <p>Choose your favourite destination.</p> -->
    <!-- <button>Blog</button> -->
    <!-- <a href="about.php" class="more">Travel</a> -->
  </div>
</div>
 <!-- home section banner end -->
 <div class="blog-heading">
        <h3>Latest Blog</h3>
        <span>My Recent Posts</span>
    </div>
    
 <section id="blog">
        <div class="blog-container">
            <?php
            $sql = "SELECT * FROM `tblcard`";
            $result = mysqli_query($con, $sql);
            $sno = 0;
            foreach ($result as $row) {

                echo '<div class="blog-box">';
                echo '<div class="blog-img">';
                echo '<img src="' . $row['Image'] . '" alt="blog">';
                echo '</div>';
                echo '<div class="blog-text">';
                $sno = $sno + 1;
                echo '<span>' . $row['Date'] . '</span>';
                echo '<a>' . $row['Title'] . '</a>';
                echo '<p>' . $row['Description'] . '</p>';
                echo '<a href="blog_details.php?Title=' . urlencode($row['Title']) . '">Read More</a>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </section>



<?php include '../components/footer.php'; ?>
    <script src="../js/script.js"></script>
</body>
</html>
