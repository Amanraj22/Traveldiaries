<?php include "../components/connect.php";
include "../components/config.php";
session_start(); ?>
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
    <link rel="stylesheet" href="../css/style.css?v=<?=$version?>">
    <link rel="stylesheet" href="../css/footer.css?v=<?=$version?>">
</head>
<body>
<?php  include "../components/header.php";?>


<!-- blog_details.php -->
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        /* Add your custom CSS styles here for responsiveness */
    </style>

<?php
    // Check if the title is specified in the URL
    if (!empty($_GET['Title'])) {
        $title = $_GET['Title'];

        // Retrieve blog details from the database based on the title
        $sql = "SELECT * FROM `tblcard` WHERE Title = '$title'";
        $result = mysqli_query($con, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
?>
            <section id="blog-details">
                <div class="container">
                    <div class="blog-details-content">
                        <img src="<?php echo $row['Image']; ?>" alt="Blog Image">
                        <div class="blog-heading">
                            <!-- <h3><?php echo $row['Title']; ?></h3> -->
                            <!-- <span><?php echo $row['Date']; ?></span> -->
                        </div>
                        <h2><?php echo $row['Title']; ?></h2>
                        <p class="responsive-paragraph"><?php echo $row['Description']; ?></p>
                        <p class="responsive-paragraph"><?php echo $row['Description2']; ?></p>
                        <p class="responsive-paragraph"><?php echo $row['Description3']; ?></p>
                    </div>
                </div>
            </section>
<?php
        } else {
            echo 'No blog found with the specified title.';
        }
    } else {
        echo 'Blog title is not specified.';
    }
?>


<!-- blog_details.php -->


<style>
    .blog-details-content{
        margin: 6rem 0 4rem 0;
    }
      .blog-details-content img{
        width: 100%;
    height: 32rem;
    object-fit: cover;
      }
      .blog-heading{
        margin: 4rem 0 -2rem 0rem;
      }
      .blog-details-content h2{
        text-align: center;
        font-size: 2.4rem;
      }
      .blog-details-content p{
        margin: 1rem 0;
        font-size: 1.3rem;
      }
      .responsive-paragraph {
    max-width: 100%;
    font-size: 16px;
    word-wrap: break-word;
    overflow-wrap: break-word;
}

@media (max-width: 768px) {
    .responsive-paragraph {
        font-size: 14px;
    }
}

@media (max-width: 480px) {
    .responsive-paragraph {
        font-size: 12px;
    }
    .blog-details-content img{
        height: 16rem;
    }
}


        /* Example media query for small screens */
        @media screen and (max-width: 600px) {
            /* Adjust the layout and styling for small screens */
            .blog-post {
                width: 100%;
            }

            .blog-post img {
                max-width: 100%;
                height: auto;
            }
        }
    </style>

    <?php include '../components/footer.php'; ?>
    <script src="../js/script.js"></script>
</body>
</html>
