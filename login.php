<?php include 'components/config.php'; ?>

<?php
include 'components/connect.php';
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    

    $email = $_POST['email'];
    $password = $_POST['password'];

        $sql = "select * from registration where email = '$email' and password = '$password' ";
// $check=($conn, $sql);
        $result = mysqli_query($con, $sql);
        $num = mysqli_num_rows($result);


        if($num == 1){
            // while($row = mysqli_fetch_assoc($result)){
                // if(password_verify($password, $row['password'])){
                    $login = true;
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['email'] = $email;
                    header("location: index.php");
                    
                }
                else{
                    $showError = "Invalid Credentials";
                }
            // }       
        }
    // else{
    //     $showError = "Invalid Credentials";
    // }
// }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="css/reg.css?v=<?=$version?>">
</head>
<body>


<?php
       if($login){
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> You are logged in
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
    <!-- <img src="https://img.freepik.com/free-photo/flat-lay-travel-essentials-with-sunglasses-money_23-2148434416.jpg?w=740&t=st=1684988407~exp=1684989007~hmac=3a3c11ece0dfd3ee162fb139122997f959ac672e7bda92ae397027cccd7ebb57" alt="" srcset=""> -->
<video autoplay loop muted plays-inline>
    <source src="https://player.vimeo.com/external/468050334.sd.mp4?s=8e482f083eb481cdc9a2e52f71a273677037b135&profile_id=164&oauth2_token_id=57447761" type="video/mp4">
  </video>
    <div class="form-box">
        <h1 id="title">Sign in</h1>
        <form action="login.php" method="POST">
            <div class="input-group input-login">
            <div class="input-field">
                        <i class="fa-solid fa-envelope"></i>
                        <input type="email" name="email" placeholder="Enter your email" required>
                    </div>

                <div class="input-field">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="password" placeholder="Enter your password" required>
                </div><br>

                <p>Not a member <a href="reg.php">sign up!</a></p>
            </div>
            <div class="btn-field">
                <button type="submit" value="login now" name="submit" id="signinbtn">Sign in</button>
            </div>
        </form>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>