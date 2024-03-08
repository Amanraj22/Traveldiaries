<?php 
session_start();
include 'components/config.php'; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap Link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Bootstrap Link -->
  <!-- Font awesome icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css?v=<?=$version?>">
    <link rel="stylesheet" href="css/footer.css?v=<?=$version?>">
</head>
<body>
<?php include 'components/header.php'; ?>
<style>

  .header{
    background-color: aquamarine;
  }
  .banner{
    display: none;
  }
  @media (max-width: 1024px){
    .header{
      background-color: transparent;
    }
	.banner{
		display: block;
	}
	.he-container{
		display: none;
	}
  }
  </style>
<!-- new banner start -->
<!-- <div class="banner"> -->
<div class="he-container">
  <div class="he-content">
  <h1>Visit <span class="change"></span></h1><br>
  <p>"Explore. Experience. Express. <br>Your Travel Diaries Await."</p>
  <a href="admin/packcrud/package.php" class="btn submit">Travel</a>
  <a href="blogcrud/blog.php" class="btn submit">Blog</a>
  </div>
  <div class="he-images">
    <img src="img/worls.jpeg" class="img-1" alt="Image 1">
    <img src="img/nobu.png" class="img-2" alt="Image 2">
  </div>
</div>
<!-- </div> -->



<!-- new banner end -->
 <!-- home section banner start -->
 <div class="banner">
  <video autoplay loop muted plays-inline>
    <source src="https://player.vimeo.com/external/330412624.sd.mp4?s=853ea7644708b7986c992689dd351b0413d7b3ca&profile_id=164&oauth2_token_id=57447761" type="video/mp4">
  </video>
  <div class="banner-content">
    <h1>Visit <span class="change"></span></h1>
    <p>Choose your favourite destination.</p>
    <a href="admin/packcrud/package.php" class="btn submit">Travel</a>
  <a href="blogcrud/blog.php" class="btn submit">Blog</a>
  </div>
</div>
 <!-- home section banner end -->

 <!-- <div class="margin">
  <h2>"Explore. Experience. Express. Your Travel Diaries Await."</h2>
  <a href="advertiser.php" class="more">Explore more</a>
</div> -->

 <!-- destination start -->
 <div class="destination">
    <h1>Popular Destnitations</h1>
    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore, necessitatibus?</p>

    <!-- dest1 -->
    <div class="first-des">
        <div class="des-text">
            <h2>Bihar</h2>
            <p>Bihar, located in eastern India, is a state that boasts a rich cultural and historical heritage. From ancient archaeological sites to religious pilgrimage centers, Bihar offers a unique blend of history, spirituality, and natural beauty.</p>
        </div>
        <div class="dest-image">
        <img src="https://tourism.bihar.gov.in/content/dam/bihar-tourism/images/category_b/rohtas/tutla_bhawani_waterfall__rohtas/nature_rohtas_category_b_tutla_bhawani_pic_01.jpg/jcr:content/renditions/cq5dam.web.1280.765.jpeg" alt="Image description">
        <img src="https://assets-news.housing.com/news/wp-content/uploads/2022/09/09104906/RAJGIR-FEATURE-compressed.jpg" alt="Image description">
        </div>
    </div>

    <!-- dest2 -->
    <div class="first-des-reverse">
        <div class="des-text">
            <h2>Goa</h2>
            <p>Goa is known for its beautiful beaches, vibrant nightlife, and Portuguese heritage. It offers a perfect blend of relaxation and adventure. Visitors can enjoy sunbathing, water sports, and exploring the historic landmarks. Goa also has a rich culinary scene and a lively music and arts culture.</p>
        </div>
        <div class="dest-image">
        <img src="https://images.unsplash.com/photo-1623815616454-f4de13de2634?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=327&q=80" alt="Image description">
        <img src="https://images.unsplash.com/photo-1615473787506-24ca223bf0e1?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MzF8fGdvYXxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="Image description">
        </div>
    </div>

    <!-- dest3 -->
    <div class="first-des">
        <div class="des-text">
            <h2>Rajasthan</h2>
            <p>Rajasthan is a vibrant state in northwest India, famous for its royal heritage and majestic forts. It showcases a rich tapestry of history, culture, and architectural marvels. Visitors can explore iconic cities like Jaipur, Udaipur, and Jaisalmer, visit magnificent palaces and forts, and experience the vibrant local markets.</p>
        </div>
        <div class="dest-image">
        <img src="https://images.unsplash.com/photo-1679225181515-c7f5059c84f7?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=435&q=80" alt="Image description">
        <img src="https://images.unsplash.com/photo-1653495483345-ebfc28815a8d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=870&q=80" alt="Image description">
        </div>
    </div>

    <!-- dest4 -->
    <div class="first-des-reverse">
        <div class="des-text">
            <h2>Himachal Pradesh</h2>
            <p>Himachal Pradesh is a picturesque state nestled in the Himalayas, offering breathtaking mountain landscapes and serene hill stations. Places like Shimla, Manali, and Dharamshala attract tourists with their scenic beauty, adventure activities like trekking and paragliding, and Tibetan Buddhist monasteries. </p>
        </div>
        <div class="dest-image">
        <img src="https://images.unsplash.com/photo-1657894736555-6f39d2b182e8?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=387&q=80" alt="Image description">
        <img src="https://images.unsplash.com/photo-1626621336914-4ec225ce174f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=435&q=80" alt="Image description">
        </div>
    </div>
</div>
 <!-- destination end -->

 <?php include 'components/gallery.php'; ?>
 
 <?php include 'components/accordion.php'; ?>
    
    <?php include 'components/testimonial.php'; ?>


 
 <?php include 'components/footer.php'; ?>
<script src="js/script.js"></script>
</body>
</html>