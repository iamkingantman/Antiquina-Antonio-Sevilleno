<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
   
   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'components/user_header.php'; ?>

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/23.png" alt="">
      </div>

      <div class="content">
         <h3>Developer's Message:</h3>
         <p>Hey There! We are Group 11 AASTechHub (AAS stands for Antiquina, Antonio, Sevilleno) for our Final Project in FDS subject headed by <a href="https://www.facebook.com/profile.php?id=61555878446367" target="_blank">Mr.Ervin Jay Balansag</a>. <br> <br> AASTechHub.com project is an ecommerce platform designed to facilitate the online buying and selling of electronic gadgets, smart devices, and home appliances.</p>

         <p>Group Members: <a href="https://www.facebook.com/iamkingantman/" target="_blank">Karen Antiquina</a>, <a href="https://www.facebook.com/kiervinglen.antonio" target="_blank">Kiervin Glen Antonio</a>, <a href="https://www.facebook.com/ronald.sevilleno.96" target="_blank">Ronald Sevilleno</a> . </p>
         <a href="contact.php" class="btn">Contact Us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">Client's Reviews.</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/pic-9.webp" alt="">
         <p>Shopping on AASTechHub.com has been a fantastic experience. The app is very user-friendly, and I can seamlessly browse through the app. The checkout process is quick and secure, and my items always arrive in perfect condition.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>User 1</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-9.webp" alt="">
         <p>AASTechHub.com is the go-to app! The selection is stunning, and the app's interface makes it so simple to compare items. I also appreciate the excellent customer service – they always respond promptly if I have any questions.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>User 2</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-9.webp" alt="">
         <p>I had an excellent shopping experience on AASTechHub.com. The app is well-designed, easy to navigate, and I found the perfect appliances I need. Plus, the order tracking feature kept me updated on my shipment’s progress!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>User 3</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-9.webp" alt="">
         <p>This app has made my searching for products so much more enjoyable! AASTechHub.com offers a great variety of items, and I love how detailed the product photos and descriptions are. It's my favorite place to shop for gadgets and appliances.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>User 4</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-9.webp" alt="">
         <p>The AASTechHub.com app is fantastic! It’s easy to browse through their curated selection of gadgets, and I can trust that the items are high quality. Delivery is fast and reliable, and my purchases always arrive well-packaged.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>User 5</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/pic-9.webp" alt="">
         <p>I’m really impressed with how seamless the experience is on AASTechHub.com. The app is smooth and intuitive, and the products are 100% original. I’m already looking forward to my next purchase!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>User 6</h3>
      </div>

   </div>

   <div class="swiper-pagination"></div>

   </div>

</section>









<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
        slidesPerView:1,
      },
      768: {
        slidesPerView: 2,
      },
      991: {
        slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>