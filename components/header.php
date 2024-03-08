<?php
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
   $loggedin = true;
}
else{
   $loggedin = false;
}
//   <!-- header start -->
 echo' <header class="header">
     <div class="container">
        <div class="header-main">
           <div class="logo">
              <a href="travel/index.php">Travel Diaries</a>
           </div>';
           if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
            echo 'Welcome: ' .$_SESSION['email'];
        }
          echo' <div class="open-nav-menu">
              <span></span>
           </div>
           <div class="menu-overlay">
           </div>';
         //   if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
         //     echo 'Welcome: ' .$_SESSION['email'];
         // }
         //   <!-- navigation menu start -->
           echo'<nav class="nav-menu">
             <div class="close-nav-menu">
                <img src="../../../travel/img/close.svg" alt="close">
             </div>
             <ul class="menu">
             <li class="menu-item">
                   <a href="../../../travel/index.php">Home</a>
                </li>
                <li class="menu-item menu-item-has-children">
                   <a href="#" data-toggle="sub-menu">About us</a>
                   <ul class="sub-menu">
                       <li class="menu-item"><a href="../../../travel/story.php">Our Story</a></li>
                       <li class="menu-item"><a href="../../../travel/services.php">Our Services</a></li>
                       <li class="menu-item"><a href="../../../travel/blogcrud/blog.php">Blogs</a></li>
                      
                   </ul>
                </li>
                <li class="menu-item">
                   <a href="../../../travel/admin/packcrud/package.php">Packages</a>
                </li>
                <li class="menu-item">
                   <a href="../../../travel/mybookings.php">My bookings</a>
                </li>
                <li class="menu-item">
                   <a href="../../../travel/contact.php">Contact Us</a>
                </li>
                <li class="menu-item">';
                if(!$loggedin){
                  echo' <p> <a href="../../../travel/login.php">Login</a><a href="../../../travel/reg.php">/Sign up</a></p>';
                }
                echo'</li>
                <li class="menu-item">';
                if($loggedin){
                echo' <a href="../../../travel/logout.php">logout</a>';
                }
             echo'</li>
             </ul>
             
           </nav>
           <!-- navigation menu end -->

        </div>
     </div>
  </header>';
//   <!-- header end -->
?>