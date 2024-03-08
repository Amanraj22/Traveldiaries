<?php
include '../components/config.php';
include '../components/connect.php';

if(isset($_COOKIE['admin_id'])){
   $admin_id = $_COOKIE['admin_id'];
}else{
   $admin_id = '';
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashboard</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css?v=<?=$version?>">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'admin_header.php'; ?>
<!-- header section ends -->

<!-- dashboard section starts  -->

<section class="dashboard">

   <h1 class="heading">dashboard</h1>

   <div class="box-container">


   <div class="box">
      <?php
         $sql = "SELECT * FROM `admin` LIMIT 1";
         $result = mysqli_query($con, $sql);
         while ($row = mysqli_fetch_assoc($result)) { 
            ?>
            <h3>welcome!</h3>
            <p><?php echo $row['name']; ?></p>
            <a href="update.php" class="btn">update (soon)</a>
       <?php }
      ?>
      
   </div>


   <div class="box">
      <?php
          $sql = "SELECT * FROM `booking`";
          $result = mysqli_query($con, $sql);
         $num = mysqli_num_rows($result);
      ?>
      <h3><?php echo $num; ?></h3>
      <p>total bookings</p>
      <a href="bookings.php" class="btn">view bookings</a>
   </div>

   <div class="box">
      <?php
          $sql = "SELECT * FROM `admin`";
          $result = mysqli_query($con, $sql);
         $num = mysqli_num_rows($result);
      ?>
      <h3><?php echo $num; ?></h3>
      <p>total admins</p>
      <a href="admins.php" class="btn">view admins</a>
   </div>

   <div class="box">
      <?php
         $sql = "SELECT * FROM `contact`";
         $result = mysqli_query($con, $sql);
        $num = mysqli_num_rows($result);
      ?>
      <h3><?php echo $num; ?></h3>
      <p>total messages</p>
      <a href="messages.php" class="btn">view messages</a>
   </div>

   <div class="box">
      <?php
         $sql = "SELECT * FROM `packcard`";
         $result = mysqli_query($con, $sql);
        $num = mysqli_num_rows($result);
      ?>
      <h3><?php echo $num; ?></h3>
      <p>Packages</p>
      <a href="packcrud/crud.php" class="btn" target="_blank">Add packages</a>
   </div>

   <div class="box">
      <h3>quick select</h3>
      <p>login or register</p>
      <a href="login.php" class="btn" style="margin-right: 1rem;">login</a>
      <a href="register.php" class="btn" style="margin-left: 1rem;">register</a>
   </div>

   </div>

</section>


<!-- dashboard section ends -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- custom js file link  -->
<script src="../js/admin_script.js"></script>

</body>
</html>