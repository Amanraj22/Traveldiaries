<?php
include "components/connect.php";
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
    header("location: ../../../travel/login.php");
    exit;
}
?>

<?php
$showAlert = false;
$showError = false;

if (isset($_POST['submit'])) {
    $id = create_unique_id();
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $place = mysqli_real_escape_string($con, $_POST['place']);
    $start_date = mysqli_real_escape_string($con, $_POST['start_date']);
    $end_date = mysqli_real_escape_string($con, $_POST['end_date']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $number = mysqli_real_escape_string($con, $_POST['number']);
    $person = mysqli_real_escape_string($con, $_POST['person']);
    $description = mysqli_real_escape_string($con, $_POST['description']);

    $query = "INSERT into `booking`(`id`, `name`, `place`, `start_date`, `end_date`, `email`, `number`, `person`, `description`, `time`) 
    VALUES ('$id', '$name','$place', '$start_date', '$end_date', '$email','$number','$person','$description', current_timestamp())";
    $result = mysqli_query($con, $query);

    if ($result) {
        $showAlert = true;
    } else {
        $showError = true;
    }
}

// Get the selected place name from the URL parameter
if (isset($_GET['place'])) {
    $selectedPlace = urldecode($_GET['place']);
} else {
    $selectedPlace = ''; // Default place name if no package is selected
}

// Get the selected date from the URL parameter
if (isset($_GET['start_date'])) {
    $startdate = urldecode($_GET['start_date']);
} else {
    $startdate = ''; // Default date if no package is selected
}

if (isset($_GET['end_date'])) {
  $enddate = urldecode($_GET['end_date']);
} else {
  $enddate = ''; // Default date if no package is selected
}
?>

<?php include 'components/config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Link -->
    <link rel="stylesheet" href="css/style.css?v=<?=$version?>">
    <link rel="stylesheet" href="css/footer.css?v=<?=$version?>">
</head>
<body>
    <?php
    if ($showAlert) {
        echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> Your booking is successful.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
    }

    if ($showError) {
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
    <strong>Error!</strong> Your booking is successful. Please try after some time.
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>';
    }
    ?>
    <!-- Section Book Start -->
    <script>
        function validateForm() {
            var name = document.forms["bookForm"]["name"].value;
            var place = document.forms["bookForm"]["place"].value;
            var startDate = document.forms["bookForm"]["start_date"].value;
            var email = document.forms["bookForm"]["email"].value;
            var number = document.forms["bookForm"]["number"].value;
            var person = document.forms["bookForm"]["person"].value;

            // Name validation
            if (name.trim() == "") {
                alert("Please enter your name");
                return false;
            }

            // Place validation
            if (place.trim() == "") {
                alert("Please enter the place name");
                return false;
            }

            // Start date validation
            if (startDate.trim() == "") {
                alert("Please select the start date");
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

            // Person validation
            if (person.trim() == "" || parseInt(person) <= 0) {
                alert("Please enter a valid number of persons");
                return false;
            }

            return true;
        }
    </script>
    <section class="book" id="book">
        <form name="bookForm" action="book.php" method="post" onsubmit="return validateForm()">
            <div class="container">
                <div class="main-text">
                    <h1><span>B</span>ook</h1>
                </div>

                <div class="row">
                    <div class="col-md-6 py-3 py-md-0">
                        <div class="card">
                            <img src="https://img.freepik.com/free-vector/trip-concept-illustration_114360-1247.jpg?w=740&t=st=1685033825~exp=1685034425~hmac=46da9dca4c8dbe207284e315d0670ddb7b137280d24f609280e56bfd0828ebbe" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 py-3 py-md-0">
                        <input type="text" class="form-control" name="name" placeholder="Enter your name" required><br>
                        <input type="text" class="form-control" name="place" value="<?php echo $selectedPlace; ?>" readonly><br> <!-- Autofill the selected place name -->

                        <div class="date">
                        <input type="date" class="form-control" name="start_date" value="<?php echo $startdate; ?>"readonly>
                        <input type="date" class="form-control" name="end_date" value="<?php echo $enddate; ?>" readonly>
                        </div><br>

                        <input type="email" class="form-control" name="email" placeholder="Enter your email id" required><br>
                        <input type="tel" class="form-control" name="number" placeholder="Enter your mobile number" required><br>
                        <input type="number" class="form-control" name="person" placeholder="How many persons" required><br>
                        <textarea class="form-control" rows="5" name="description" placeholder="Your expectation"></textarea>
                        <input type="submit" value="Book Now" name="submit" class="submit" required>
                    </div>
                </div>
            </div>
        </form>
    </section>
</body>
</html>

    <!-- Section Book End -->

    <style>
/* Section Book Start */
.book{
    /* background: #f9f9f9; */
    padding: 50px;
    /* margin: 6rem 0; */
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
.date{
  display: flex;
  gap: 1rem;
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
 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</body>
</html>