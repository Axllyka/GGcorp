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
   <title>AboutUs</title>
   <link rel=icon type="image/x-icon" href="GGLogoO-modified.png" />

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
         <img src="images/self-defense-modified.png" alt="">
      </div>

      <div class="content">
         <h3>Why choose us?</h3>
         <p>The company goes beyond merely providing products; it is a staunch advocate for education and awareness. GuardianGeaR offers comprehensive resources on self-defense techniques, personal safety best practices, and situational awareness. By fostering a sense of empowerment through knowledge, GuardianGear ensures that its users are not only equipped with reliable tools but are also prepared mentally to face potential threats.
GuardianGearis committed to ethical business practices, ensuring that all its self-defense products adhere to legal standards and regulations.</p>
<p>Disclaimer: Proper Usage of GuardianGeaR Self-Defense Products</p>
<p>
GuardianGeaR is dedicated to providing effective and reliable self-defense products to empower individuals in ensuring their safety. However, it is essential to use these products responsibly and in accordance with the law. </p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">
   
   <h1 class="heading">client's reviews</h1>

   <div class="swiper reviews-slider">

   <div class="swiper-wrapper">

      <div class="swiper-slide slide">
         <img src="images/track.jpg" alt="">
         <p>Feeling safer than ever!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Yvan</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/choc.jpg" alt="">
         <p>I recently purchased a stun gun from GuardianGeaR, and the quality is top-notch. The build is sturdy, and the technology is impressive.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Choc</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/machi.jpg" alt="">
         <p>GuardianGeaR's personal alarm is a game-changer! Small and inconspicuous, yet incredibly loud when needed.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Machi</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/hisoka.jpg" alt="">
         <p> I've learned practical self-defense techniques and situational awareness tips from their platform. It's a company that truly cares about empowering its customers.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Hisoka</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/killua.jpg" alt="">
         <p>I was amazed by the variety of self-defense products GuardianGeaR offers. As an avid hiker, their range caters perfectly to my outdoor lifestyle. The compact nature of their tools makes them easy to carry, providing that extra layer of security wherever I go.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Killua</h3>
      </div>

      <div class="swiper-slide slide">
         <img src="images/gojo.jpg" alt="">
         <p>The design of GuardianGeaR's self-defense tools is not only sleek but smart. The quick deployment features on their stun guns are impressive, providing a rapid response option when needed. It's a brand that combines style with functionality seamlessly.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Gojo</h3>
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