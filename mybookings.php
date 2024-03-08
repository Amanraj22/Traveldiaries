<?php
include "components/connect.php";
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: ../../../travel/login.php");
    exit;
}
?>
<?php
include 'components/config.php';

// session_start();
$showAlert = false;
$showError = false;
$showno = false;

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   setcookie('user_id', create_unique_id(), time() + 60*60*24*30, '/');
   header('location:index.php');
}

if(isset($_POST['cancel'])){
   $booking_id = mysqli_real_escape_string($con, $_POST['booking_id']);

   $verify_booking = "SELECT * FROM booking WHERE id = ?";
   $stmt = mysqli_prepare($con, $verify_booking);
   mysqli_stmt_bind_param($stmt, "s", $booking_id);
   mysqli_stmt_execute($stmt);
   $result = mysqli_stmt_get_result($stmt);

   $numExistRows = mysqli_num_rows($result);
   if($numExistRows > 0){
       $delete_booking = "DELETE FROM booking WHERE id = ?";
       $stmt = mysqli_prepare($con, $delete_booking);
       mysqli_stmt_bind_param($stmt, "s", $booking_id);
       $result = mysqli_stmt_execute($stmt);

       if($result){
           $showAlert = true;
       }
       else{
           $showno = true;
       }
   }
   else{
       $showError = true;
   }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>bookings</title>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>


<!-- font awesome cdn link  -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css?v=<?=$version?>">
    <link rel="stylesheet" href="css/footer.css?v=<?=$version?>">

</head>
<body>
    <style>
        .submit{
            padding: 0.5rem;
            border-radius: 8px;
    display: inline-block;
    border:none;
        }
        </style>

<?php include 'components/header.php'; ?>
<?php
        if($showAlert){
            echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Booking cancelled successfully!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
            }

            if($showno){
               echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
               <strong>Error!</strong> Booking is not cancelled! Please try after some time!
               <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
             </div>';
               }

    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> Booking already cancelled!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    }
?>
<!-- booking section starts  -->




<section class="bookings">

   <h1 class="heading">my bookings</h1>

   <div class="box-container">

   <?php
    $sql="SELECT * from `booking`";
    $result=mysqli_query($con, $sql);
    $numExistRows = mysqli_num_rows($result);
    
    if($numExistRows > 0){
        foreach($result as $row){
            echo '<div class="box">';
            echo "<p>name : <span>". $row['name'] ."</span></p>
                <p>place : <span>". $row['place'] ."</span></p>
                <p>date : <span>". $row['start_date'] ." to <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;". $row['end_date'] ."</span></p>
                <p>email : <span>". $row['email'] ."</span></p>
                <p>number : <span>". $row['number'] ."</span></p>
                <p>person : <span>". $row['person'] ."</span></p>
                <p>booking id : <span>". $row['id'] ."</span></p>";
            echo '<form action="" method="POST">';
            echo ' <input type="hidden" name="booking_id" value="'. $row['id'] .'">';
            echo ' <input type="submit" value="cancel booking" name="cancel" class="btn submit" onclick="return confirm(\'cancel this booking?\');">';
            echo '</form>
            </div>';
        }
    }

   else{
     
   echo '<div class="box" style="text-align: center;">';
   echo ' <p style="padding-bottom: .5rem; text-transform:capitalize;">no bookings found!</p>';
   echo ' <a href="../travel/admin/packcrud/package.php" class="btn submit">Book new</a>';
   echo '</div>';
}
?>
   </div>

</section>



<!-- booking section ends -->


<?php include 'components/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>


<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>