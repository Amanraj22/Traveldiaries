
<?php include 'components/config.php'; 
session_start();?>
<?php
$showAlert = false;
$showError = false;
include "components/connect.php";

if(isset($_POST['submit'])){
$name=mysqli_real_escape_string($con, $_POST['name']);
$email=mysqli_real_escape_string($con, $_POST['email']);
$number=mysqli_real_escape_string($con, $_POST['number']);
$queries=mysqli_real_escape_string($con, $_POST['queries']);

$query = "INSERT into `contact`(`name`, `email`, `number`, `queries`, `time`) 
VALUES ('$name','$email','$number','$queries', current_timestamp())";
 $result = mysqli_query($con, $query);

 if($result){
  $showAlert = true;
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
    <title>Contact</title>
    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css?v=<?=$version?>">
    <link rel="stylesheet" href="css/footer.css?v=<?=$version?>">
</head>
<body>
<?php include 'components/header.php'; ?>

<?php
        if($showAlert){
            echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Submitted successfully. Our team will contact you soon.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
            }

    if($showError){
    echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> Please try after some time!
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    }
?>

 <!-- home section banner start -->
 <div class="banner">
  <img src="https://images.pexels.com/photos/346882/pexels-photo-346882.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Image description">
  <div class="banner-content">
    <h1>Contact</h1>
  </div>
</div>
 <!-- home section banner end -->

  <!-- Section Book Start -->
  <script>
  function validateForm() {
    var name = document.forms["contactForm"]["name"].value;
    var email = document.forms["contactForm"]["email"].value;
    var number = document.forms["contactForm"]["number"].value;

    // Name validation
    if (name.trim() == "") {
      alert("Please enter your name");
      return false;
    }

    // Email validation
    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (email.trim() == "") {
      alert("Please enter your email");
      return false;
    } else if (!email.match(emailRegex)) {
      alert("Please enter a valid email address");
      return false;
    }

    // Phone number validation
    var phoneNumberRegex = /^\d{10}$/;
    if (number.trim() == "") {
      alert("Please enter your mobile number");
      return false;
    } else if (!number.match(phoneNumberRegex)) {
      alert("Please enter a valid 10-digit phone number");
      return false;
    }

    return true;
  }
</script>

<section class="book" id="book">
  <div class="container">
    <div class="main-text">
      <h1>Fill the details</h1>
    </div>

    <div class="row">
      <div class="col-md-6 py-3 py-md-0">
        <div class="card">
          <img src="https://img.freepik.com/free-vector/travelers-concept-illustration_114360-2602.jpg?t=st=1684848851~exp=1684849451~hmac=1abbdb52b12f5dbb7d433511f13468d4d3827e9de4a38ac704bf3876002fa87a" alt="">
        </div>
      </div>
      <div class="col-md-6 py-3 py-md-0">
        <form name="contactForm" action="contact.php" method="POST" onsubmit="return validateForm()">
          <input type="text" class="form-control" name="name" placeholder="Enter your name" required><br>
          <input type="email" class="form-control" name="email" placeholder="Enter your email" required><br>
          <input type="tel" class="form-control" name="number" placeholder="Enter your mobile number" required><br>
          <textarea class="form-control" rows="5" name="queries" placeholder="Enter your queries"></textarea>
          <input type="submit" value="Submit" name="submit" class="submit" required>
        </form>
      </div>
    </div>
  </div>
</section>

    <!-- Section Book End -->

    <style>
/* Section Book Start */
.book{
    /* background: #f9f9f9; */
    padding: 50px;
    margin: 6rem 0;
}
.main-text h1{
    text-align: center;
    text-shadow: 0px 1px 1px black;
    font-weight: 600;
}
.main-text h1 span{
    color: #ffa500;
}
.book .card{
    border-radius: 10px;
    box-shadow: 0px 5px 5px -6px black;
}
.book .row{
    margin-top: 30px;
}
.book form input{
    padding: 10px;
    color: black;
    border: none;
    outline: none;
    font-size: 15px;
    border-radius: 10px;
    box-shadow: 0px 5px 5px -6px black;
}
.book form textarea{
    border: none;
    border-radius: 10px;
    resize: none;
    box-shadow: 0px 5px 5px -6px black;
    height: 200px;
}
.book .submit{
    width: 160px;
    font-size: 16px;
    font-weight: 550;
    background: #ffa500;
    color: white;
    margin-top: 10px;
    transition: 0.5s;
}
.book .submit:hover{
    width: 170px;
}
@media (max-width:765px){
    .book{
        padding: 0;
    }
    .main-text h1{
        padding: 20px;
    }
}
/* Section Book End */
      </style>

    <?php include 'components/footer.php'; ?>
    <script src="js/script.js"></script>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>