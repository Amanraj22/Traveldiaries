<?php
include '../components/config.php';
include '../components/connect.php';

if (isset($_COOKIE['admin_id'])) {
   $admin_id = $_COOKIE['admin_id'];
} else {
   $admin_id = '';
   header('location:login.php');
}

$select_profile = mysqli_query($con, "SELECT * FROM `admin` WHERE id = '$admin_id' LIMIT 1");
$fetch_profile = mysqli_fetch_assoc($select_profile);

if (isset($_POST['submit'])) {

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);

   if (!empty($name)) {
      $verify_name = mysqli_query($con, "SELECT * FROM `admin` WHERE name = '$name'");
      if (mysqli_num_rows($verify_name) > 0) {
         $warning_msg[] = 'Username already taken!';
      } else {
         mysqli_query($con, "UPDATE `admin` SET name = '$name' WHERE id = '$admin_id'");
         $success_msg[] = 'Username updated!';
      }
   }

   $empty_pass = 'da39a3ee5e6b4b0d3255bfef95601890afd80709';
   $prev_pass = $fetch_profile['password'];
   $old_pass = sha1($_POST['old_pass']);
   $old_pass = filter_var($old_pass, FILTER_SANITIZE_STRING);
   $new_pass = sha1($_POST['new_pass']);
   $new_pass = filter_var($new_pass, FILTER_SANITIZE_STRING);
   $c_pass = sha1($_POST['c_pass']);
   $c_pass = filter_var($c_pass, FILTER_SANITIZE_STRING);

   if ($old_pass != $empty_pass) {
      if ($old_pass != $prev_pass) {
         $warning_msg[] = 'Old password not matched!';
      } elseif ($c_pass != $new_pass) {
         $warning_msg[] = 'New password not matched!';
      } else {
         if ($new_pass != $empty_pass) {
            mysqli_query($con, "UPDATE `admin` SET password = '$c_pass' WHERE id = '$admin_id'");
            $success_msg[] = 'Password updated!';
         } else {
            $warning_msg[] = 'Please enter new password!';
         }
      }
   }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Update</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css?v=<?=$version?>">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'admin_header.php'; ?>
<!-- header section ends -->

<!-- update section starts  -->

<section class="form-container">

   <form action="" method="POST">
      <h3>update profile</h3>
      <input type="text" name="name" placeholder="<?= $fetch_profile['name']; ?>" value="<?= $fetch_profile['name']; ?>" maxlength="20" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="old_pass" placeholder="enter old password" maxlength="20" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="new_pass" placeholder="enter new password" maxlength="20" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="c_pass" placeholder="confirm new password" maxlength="20" class="box" oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="submit" value="update now" name="submit" class="btn">
   </form>

</section>

<!-- update section ends -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- custom js file link  -->
<script src="../js/admin_script.js"></script>

</body>
</html>