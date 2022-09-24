<?php
@ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SRiSHTi 2k22</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <script src="./js/three.min.js" type="module"></script>
    <script src="./js/script.js" type="module"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="./css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@600&display=swap" rel="stylesheet">


    <!-- Favicons -->
    <link href="assets/img/favicon.ico" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <link rel="stylesheet" href="assets/css/index.css">
     <link rel="stylesheet" href="assets/css/navbar.css">
     <link rel="stylesheet" href="assets/css/common-styles.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a74d0f3882.js" crossorigin="anonymous"></script>

     <link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.min.css">
  <script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<body id="bodi" class="">
<div id="closerdiv" onClick="hide()">
 <i id="closer" class="bi bi-list mobile-nav-toggle d-xl-none bi-x" style="display:none"></i>
</div>
  <header id="header" class="d-flex flex-column justify-content-center" >

    <nav id="navbar" class="navbar nav-menu" style= "display:none">
      <ul>

        <?php require_once 'user.php'; ?>
          
          <li><a href="#" class="nav-link scrollto active"><i class="fas fa-home" style="color: white"></i> <span>Home</span></a></li>
          <li><a href="about.php" class="nav-link scrollto"><i class="fas fa-info-circle"></i> <span>About</span></a></li>
          <li><a href="events.php" class="nav-link scrollto "><i class="fas fa-calendar-day"></i> <span>Events</span></a></li>
          <li><a href="workshop.php" class="nav-link scrollto"><i class="fas fa-chalkboard-teacher"></i> <span>&nbsp &nbsp &nbsp Workshop /<br>Paper Presentation</span></a></li>
          <li><a href="team.php" class="nav-link scrollto"><i class="fas fa-users"></i> <span>Team</span></a></li>
          <li><a href="schedule.php" class="nav-link scrollto"><i class="fas fa-hourglass-half"></i><span>Schedule</span></a></li>
        <li><a href="contact.php" class="nav-link scrollto"><i class="fas fa-question"></i> <span>FAQ / Contact</span></a></li>
        </ul>
    </nav><!-- .nav-menu -->

  </header>
 
  <a href="contact.php#contact" id="hcontact" class="btmbutton d-flex align-items-center justify-content-center"><i class="bi bi-telephone-fill"></i></a>
  <a href="https://drive.google.com/file/d/1fwOSyEFJ2h52JMvwsCXzm2JEXtw5S_Rk/view?usp=sharing" target="blank" id="broucher" class="btmbutton d-flex align-items-center justify-content-center" title="Download Brochure"><i class="bi bi-question"></i></a>



  <div class="text-box" >


    

    </div>
    

<!-- <h1>SRiSHTi<br>2k22</h1>
             <p>Where talent meets opportunities!</p> -->


    <div class="container">
        <div class="content">
          <button id="sized" class="button" onclick="showOrHideDiv()" >EXPERIENCE <span class="multicolortext"> SRiSHTi</span></button>
            <!-- <div class="button">EXPERIENCE <span class="srishtitext">SRiSHTi</span></div> -->
             
</div>
   
    </div>
    <canvas class="webgl"></canvas>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js" integrity="sha512-Mf/xUqfWvDIr+1B6zfnIDIiG7XHzyP/guXUWgV6PgaQoIFeXkJQR5XWh9fqAiCiRCpemabt3naV4jhDWVnuYDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/CSSRulePlugin.min.js" integrity="sha512-WmIFc2KnjfdlxbNwOApiTUtM6TwCz985/6yKTfFqC8Nq7H/VUMfJ897tEGx6SKSxLQbxilffKEcaGhbtBhGmng==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        const content = CSSRulePlugin.getRule('.content:before')
        const h1 = document.querySelector('h1')
        const p = document.querySelector('p')
        const tl = gsap.timeline()
  
        tl.from(content, {delay: .5, duration: 4, cssRule: {scaleX: 0}})
        tl.to(h1, {duration: 2, clipPath: "polygon(0 0, 100% 0, 100% 100%, 0% 100%)", y:'30px' }, "-=4")
        tl.to(p, {duration: 4, clipPath: 'polygon(0 0, 100% 0, 100% 100%, 0% 100%)', y:"30px"}, "-=4")
    </script>
  
<script>
 function showOrHideDiv() {
      var v = document.getElementById("navbar");
    
     v.style.display = "block";
         
          if ( $(window).width() < 1203 ){
            const el = document.getElementById("bodi");

el.classList.add("mobile-nav-active");
var u = document.getElementById("closer");
u.style.display = "block";
          }
    
   }
</script>
<script>
 function hide() {
     var v = document.getElementById("navbar");
    var u = document.getElementById("closer");
     v.style.display = "none";
         u.style.display = "none";
          if ( $(window).width() < 1203 ){
            const el = document.getElementById("bodi");

el.className= "";
          }
    
   }
</script>

</body>
<script src="assets/js/nav.js"></script>
<script src="assets/js/three.min.js"></script>
<script src="assets/js/index.js"></script>
<script src="assets/js/main.js"></script>
</html>