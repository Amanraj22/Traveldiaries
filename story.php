<?php include 'components/config.php'; 
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css?v=<?=$version?>">
    <link rel="stylesheet" href="css/footer.css?v=<?=$version?>">
</head>
<body>
<?php include 'components/header.php'; ?>

 <!-- home section banner start -->
 <div class="banner">
  <img src="img/abimg.jpeg" alt="Image description">
  <div class="banner-content">
    <!-- <h1>About</h1> -->
  </div>
</div>
 <!-- home section banner end -->
 <div class="tabs">
 <div class="tabs-button">
  <button class="tablink" onclick="openTab(event, 'tab1')">About us</button>
  <button class="tablink" onclick="openTab(event, 'tab2')">Our vision</button>
  <button class="tablink" onclick="openTab(event, 'tab3')">Our mission</button>
  <button class="tablink" onclick="openTab(event, 'tab4')">Our values</button>
  <button class="tablink" onclick="openTab(event, 'tab5')">Join us</button>
</div>

  <div id="tab1" class="tabcontent">
    <!-- <h3>About us</h3> -->
    <p>Welcome to Travel Diaries, a gateway to extraordinary travel experiences and unforgettable adventures. We are not just a travel company; we are your trusted companion on the path of exploration, discovery, and self-discovery. With a passion for wanderlust and a deep-rooted love for travel, we are here to inspire, guide, and transform your journeys into cherished memories.
      <br><br>At Travel Diaries, we believe that travel has the power to change lives. It opens our eyes to new cultures, broadens our perspectives, and allows us to connect with the world on a deeper level. We understand that each traveler is unique, with their own dreams, desires, and preferences. That's why we are dedicated to curating personalized travel experiences that go beyond the ordinary and create lifelong memories.

    </p>
  </div>
  
  <div id="tab2" class="tabcontent">
    <!-- <h3>Our vision</h3> -->
    <p>At Travel Diaries, our vision is to ignite the spirit of adventure in every traveler's heart and make the world a more connected and compassionate place. We envision a world where borders are transcended, cultures are celebrated, and the beauty of our planet is preserved for generations to come. Through our endeavors, we aim to foster a deeper understanding and appreciation of the rich tapestry of humanity, while promoting sustainable and responsible travel practices.
      <br><br>We believe that travel is not just about ticking off destinations on a checklist; it is a transformative journey that enriches our lives and broadens our horizons. Our vision is to inspire individuals to step out of their comfort zones, embrace the unknown, and embark on journeys that create lasting memories and meaningful connections. We aspire to create a global community of travelers who share a deep love for exploration and a commitment to making a positive impact on the world.
    </p>
  </div>
  
  <div id="tab3" class="tabcontent">
    <!-- <h3>Our mission</h3> -->
    <p>Our mission is to curate extraordinary travel experiences that go beyond the ordinary and leave an indelible mark on the souls of our travelers. We strive to create meaningful connections between people and places, allowing our customers to immerse themselves in the essence of each destination. With a commitment to excellence and a relentless pursuit of innovation, we aim to provide exceptional service, personalized attention, and transformative travel experiences that exceed expectations.
      <br><br>We believe that every journey should be as unique as the individual embarking on it. That's why we take the time to understand your desires, preferences, and dreams. Whether you're seeking a thrilling adventure, a tranquil escape, or an immersive cultural encounter, our team of travel experts is dedicated to curating tailor-made itineraries that cater to your specific needs. We go above and beyond to ensure that every aspect of your trip is meticulously planned and flawlessly executed, leaving you free to savor every moment of your travel experience.
    </p>
  </div>

  <div id="tab4" class="tabcontent">
    <!-- <h3>Our values</h3> -->
    <p><b>~ Passion for Exploration:</b> We believe that travel is a powerful catalyst for personal growth and self-discovery. Our passion for exploration fuels our desire to seek out unique destinations, hidden gems, and off-the-beaten-path experiences, ensuring that every journey with us is filled with wonder, excitement, and adventure. We are constantly on the lookout for new and exciting travel opportunities, allowing us to offer our customers fresh and captivating experiences.
    <br><br><b>~ Customer-Centric Approach:</b> We place our customers at the heart of everything we do. Your satisfaction and happiness are our top priorities. We understand that travel is a deeply personal experience, and we take the time to listen to your needs and preferences. Our dedicated team of travel experts is here to guide you every step of the way, providing personalized recommendations, insider tips, and expert advice to ensure that your journey is tailored to your unique desires.
    <br><br><b>~ Exceptional Service:</b> We are committed to providing you with unparalleled service and attention to detail throughout your travel journey. From the moment you contact us to the time you return home, we strive to exceed your expectations in every aspect. We meticulously handpick accommodations, transportation, and activities that align with your preferences, ensuring a seamless and unforgettable travel experience. Our goal is to make your journey as effortless and enjoyable as possible, leaving you with nothing but beautiful memories to cherish.
    <br><br><b>~ Cultural Respect and Responsibility:</b> We believe in the power of travel to bridge cultural divides and foster mutual understanding. We promote respect for local customs, traditions, and the environment. We actively seek partnerships with local communities and support initiatives that preserve and celebrate the cultural heritage and natural beauty of the destinations we visit. By engaging in sustainable and responsible travel practices, we strive to minimize our ecological footprint and leave a positive impact on the places we explore.
    <br><br><b>~ Continuous Innovation:</b> We embrace innovation and constantly strive to improve and evolve. We keep our finger on the pulse of the travel industry, staying updated on the latest trends, technologies, and best practices. By doing so, we can offer you unique and transformative experiences that are at the forefront of travel innovation. We are committed to providing you with the most seamless and immersive travel experiences, utilizing cutting-edge technology to enhance your journey and create moments that will stay with you forever.
    </p>
  </div>

  <div id="tab5" class="tabcontent">
  <!-- <h3>Join us</h3> -->
    <p>At Travel Diaries, we invite you to embark on a transformative journey of exploration and self-discovery. Whether you are yearning for a soul-stirring adventure, a blissful escape, or an immersive cultural encounter, we are here to turn your travel dreams into reality. Let us be your trusted companion as you navigate the world's wonders, create lasting memories, and connect with the beauty that awaits beyond your doorstep.
      <br><br>Our team of dedicated travel experts is eager to assist you in planning your next great adventure. Contact us today, and together, let's explore, discover, and celebrate the world in all its breathtaking diversity.
      <br><br>"To Start Your Adventure" : <a href="contact.php">Contact Us</a>
    </p>
  </div>

</div>


<style>
    /* Style the tab buttons */
    .tabs{
      text-align:center;
    }
    .tabs p{

    }
    .tabs h1{
        text-align:center;
	margin: 3rem 0;
    }
    .tabs-button{
        text-align:center;
        margin: 2rem 0 0 0;
    }
.tablink {
  background-color: #f2f2f2;
  color: #666;
  padding: 10px 20px;
  border: none;
  cursor: pointer;
  font-size: 16px;
  transition: background-color 0.3s;
}

/* Change background color of active tab button */
.tablink.active {
  background-color: #ddd;
  color: #000;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 20px;
}

/* Show the active tab content */
.tabcontent.show {
  display: block;
}
</style>
<script>
    // Function to open a specific tab
function openTab(event, tabId) {
  // Get all tab content elements
  var tabcontent = document.getElementsByClassName('tabcontent');
  
  // Hide all tab content elements
  for (var i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = 'none';
  }
  
  // Get all tab button elements
  var tablinks = document.getElementsByClassName('tablink');
  
  // Remove 'active' class from all tab button elements
  for (var i = 0; i < tablinks.length; i++) {
    tablinks[i].classList.remove('active');
  }
  
  // Show the selected tab content
  document.getElementById(tabId).style.display = 'block';
  
  // Add 'active' class to the clicked tab button
  event.currentTarget.classList.add('active');
}

// Open the default tab on page load
document.getElementById('tab1').style.display = 'block';
document.getElementsByClassName('tablink')[0].classList.add('active');

    </script>

    <?php include 'components/footer.php'; ?>
    <script src="js/script.js"></script>
</body>
</html>