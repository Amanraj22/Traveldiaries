<?php
// session_start();
include "../components/connect.php";
include '../components/config.php';

$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $id = create_unique_id();
      $name=mysqli_real_escape_string($con, $_POST['name']);
      $password=mysqli_real_escape_string($con, $_POST['password']);
      $cpassword=mysqli_real_escape_string($con, $_POST['cpassword']);

    // Check whether this email exists
    $existSql = "select * from admin where name = '$name' ";
    $result = mysqli_query($con, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        // $exists = true;
        $showError = "Username already registered";
    }
    else{
        // $exists = false; 
        if($password === $cpassword){
            // $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "insert into admin (id, name, password, time)
            values ('$id', '$name', '$password', current_timestamp())";
            $result = mysqli_query($con, $sql);
            // header("location: login.php");
            if($result){
                $showAlert = true;
            }
        }
        else{
            $showError = "Passwords do not match";
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
   <title>Register</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css?v=<?=$version?>">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'admin_header.php'; ?>
<!-- header section ends -->

<?php
        if($showAlert){
            echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Congratulations we get a new admin
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
            }

    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> '.$showError.'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    }
?>

<!-- register section starts  -->

<section class="form-container">

   <form action="" method="POST">
      <h3>register new admin</h3>
      <input type="text" name="name" placeholder="enter username" maxlength="20" class="box" required oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="password" placeholder="enter password" maxlength="20" class="box" required oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="password" name="cpassword" placeholder="confirm password" maxlength="20" class="box" required oninput="this.value = this.value.replace(/\s/g, '')">
      <input type="submit" value="submit" name="submit" class="btn">
   </form>

</section>

<!-- register section ends -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

<!-- custom js file link  -->
<script src="../js/admin_script.js"></script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>

</body>
</html>