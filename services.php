<?php include 'components/config.php'; 
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css?v=<?=$version?>">
    <link rel="stylesheet" href="css/footer.css?v=<?=$version?>">
</head>
<body>
<?php include 'components/header.php'; ?>

 <!-- home section banner start -->
 <div class="banner">
  <img src="img/abtimg.jpeg" alt="Image description">
  <div class="banner-content">
    <h1>Services</h1>
  </div>
</div>
 <!-- home section banner end -->

 
<!-- about section starts  -->

<section class="about" id="about">
<!-- <div class="margin">
  <h2>We work with our energetic team, which embodies the following value system:</h2>
</div> -->

   <div class="rows">
      <div class="image">
         <img src="https://images.pexels.com/photos/1037890/pexels-photo-1037890.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="">
      </div>
      <div class="content">
         <h3>Customized Itineraries</h3>
         <p class="border">We create personalized travel plans tailored to your preferences, ensuring a unique and unforgettable experience.</p>
      </div>
   </div>

   <div class="rows revers">
      <div class="image">
         <img src="https://images.pexels.com/photos/4825701/pexels-photo-4825701.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
      </div>
      <div class="content">
         <h3>Accommodation</h3>
         <p class="border">We handpick accommodations that offer comfort, convenience, and local charm, ensuring a delightful stay.</p>
      </div>
   </div>

   <div class="rows">
      <div class="image">
         <img src="https://images.pexels.com/photos/2533092/pexels-photo-2533092.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
         <!-- <img src="https://images.pexels.com/photos/799443/pexels-photo-799443.jpeg?auto=compress&cs=tinysrgb&w=600" alt=""> -->
      </div>
      <div class="content">
         <h3>Transportation</h3>
         <p class="border">We take care of all your transportation needs, offering various options to make your journey seamless and enjoyable.</p>
      </div>
   </div>

   <div class="rows revers">
      <div class="image">
         <img src="https://images.pexels.com/photos/7551438/pexels-photo-7551438.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
      </div>
      <div class="content">
         <h3>Guided Tours and Activities</h3>
         <p class="border">Our knowledgeable local guides provide fascinating tours and activities that immerse you in the culture, history, and natural wonders of your destination.</p>
      </div>
   </div>

   <div class="rows">
      <div class="image">
         <img src="https://images.pexels.com/photos/7688374/pexels-photo-7688374.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
      </div>
      <div class="content">
         <h3>Travel Insurance</h3>
         <p class="border">We highly recommend travel insurance to protect you against unforeseen circumstances, providing added peace of mind.</p>
      </div>
   </div>

   <div class="rows revers">
      <div class="image">
         <img src="https://images.pexels.com/photos/7709157/pexels-photo-7709157.jpeg?auto=compress&cs=tinysrgb&w=600" alt="">
      </div>
      <div class="content">
         <h3>24/7 Customer Support</h3>
         <p class="border">Our dedicated support team is available round the clock to assist you with any queries, changes, or emergencies.</p>
      </div>
   </div>

</section>

<!-- about section ends -->

    <?php include 'components/footer.php'; ?>
    <script src="js/script.js"></script>
</body>
</html>