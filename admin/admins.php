
<?php
include '../components/config.php';
include '../components/connect.php';

if(isset($_COOKIE['admin_id'])){
   $admin_id = $_COOKIE['admin_id'];
}else{
   $admin_id = '';
   header('location:login.php');
}

if (isset($_POST['delete'])) {
    $delete_id = $_POST['delete_id'];
    $delete_id = filter_var($delete_id, FILTER_SANITIZE_STRING);

    $verify_delete = $con->prepare("SELECT * FROM `admin` WHERE id = ?");
    $verify_delete->bind_param('s', $delete_id);
    $verify_delete->execute();
    $verify_delete_result = $verify_delete->get_result();

    if ($verify_delete_result->num_rows > 0) {
        $delete_admin = $con->prepare("DELETE FROM `admin` WHERE id = ?");
        $delete_admin->bind_param('s', $delete_id);
        $delete_admin->execute();
        echo"Admin deleted!";
    } else {
        echo "Admin already deleted!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admins</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css?v=<?=$version?>">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'admin_header.php'; ?>
<!-- header section ends -->

<!-- admins section starts  -->

<section class="grid">

   <h1 class="heading">admins</h1>

   <div class="box-container">

   <div class="box" style="text-align: center;">
      <p>create a new admin</p>
      <a href="register.php" class="btn">register now</a>
   </div>

   <?php
     $select_admins = $con->prepare("SELECT * FROM `admin`");
     $select_admins->execute();
     $select_admins_result = $select_admins->get_result();
     
     if ($select_admins_result->num_rows > 0) {
         while ($fetch_admins = $select_admins_result->fetch_assoc()) {
   ?>
   <div class="box" <?php if( $fetch_admins['name'] == 'admin'){ echo 'style="display:none;"'; } ?>>
      <p>name : <span><?php echo $fetch_admins['name']; ?></span></p>
      <form action="" method="POST">
         <input type="hidden" name="delete_id" value="<?php echo $fetch_admins['id']; ?>">
         <input type="submit" value="delete admins" onclick="return confirm('delete this admin?');" name="delete" class="btn">
      </form>
   </div>
   <?php
      }
   }else{
   }
   ?>

   </div>

</section>

<!-- admins section ends -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- custom js file link  -->
<script src="../js/admin_script.js"></script>


</body>
</html>