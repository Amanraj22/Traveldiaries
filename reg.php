<?php include 'components/config.php';
session_start();
 ?>

<?php
// session_start();
 include 'components/connect.php';

$showAlert = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // if(isset($_POST['submit'])){

        $name=mysqli_real_escape_string($con, $_POST['name']);
        $email=mysqli_real_escape_string($con, $_POST['email']);
        $password=mysqli_real_escape_string($con, $_POST['password']);
        $cpassword=mysqli_real_escape_string($con, $_POST['cpassword']);

    // Check whether this email exists
    $existSql = "select * from registration where email = '$email' ";
    $result = mysqli_query($con, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if($numExistRows > 0){
        // $exists = true;
        $showError = "Email already registered";
    }
    else{
        // $exists = false; 
        if($password === $cpassword){
            // $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "insert into registration(name, email, password, date)
            values ('$name', '$email', '$password', current_timestamp())";
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
    <title>About</title>
     <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="css/reg.css?v=<?=$version?>">
</head>

<body>

<?php
        if($showAlert){
            echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your account is now created and you can login
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
<style>
   video{
    width: 100%;
    height: 100vh;
    object-fit: cover;
    position: fixed;
  }
    </style>
    <div class="container">
    <video autoplay loop muted plays-inline>
    <source src="https://player.vimeo.com/external/463583413.sd.mp4?s=dd8f14324e8629e93f172a9e9f3f3d6a5077980f&profile_id=164&oauth2_token_id=57447761" type="video/mp4">
  </video>
        <div class="form-box">
            <h1 id="title">Create your account</h1>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="input-group">
                    <div class="input-field" id="namefield">
                        <i class="fa-solid fa-user"></i>
                        <input type="text" name="name" placeholder="Enter your name" required>
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email" placeholder="Enter your email" required>
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="password" placeholder="Enter your password" required>
                    </div>

                    <div class="input-field">
                        <i class="fa-solid fa-lock"></i>
                        <input type="password" name="cpassword" placeholder="Confirm your password" required>
                    </div>

                    <p>Already a member <a href="login.php">sign in!</a></p>
                </div><br>
                <div class="btn-field">
                <button type="submit" name="submit" id="signupbtn">Sign up</button>
            </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>

</html>