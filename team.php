<?php
@ob_start();
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>SRiSHTi 2k22 - Team</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

 <!-- Favicons -->
 <link href="assets/img/favicon.ico" rel="icon">
 <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

 <!-- Google Font -->
 <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap"
       rel="stylesheet">

   <!-- Vendor CSS Files -->
   <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/a74d0f3882.js" crossorigin="anonymous"></script>

  <link href="assets/css/team.css" rel="stylesheet">
  <link href="assets/css/navbar.css" rel="stylesheet">
  <link href="assets/css/footer.css" rel="stylesheet">
  <link href="assets/css/common-styles.css" rel="stylesheet">
  <link href="assets/css/background.css" rel="stylesheet">


  </head>

<body>
<ul class="circles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>

    <i class="bi bi-list mobile-nav-toggle d-xl-none"></i>

<header id="header" class="d-flex flex-column justify-content-center">

  <nav id="navbar" class="navbar nav-menu">
    <ul>

<?php require_once 'user.php'; ?>
  
  <li><a href="index.php" class="nav-link scrollto"><i class="fas fa-home"></i> <span>Home</span></a></li>
  <li><a href="about.php" class="nav-link scrollto"><i class="fas fa-info-circle"></i> <span>About</span></a></li>
  <li><a href="events.php" class="nav-link scrollto"><i class="fas fa-calendar-day"></i> <span>Events</span></a></li>
  <li><a href="workshop.php" class="nav-link scrollto"><i class="fas fa-chalkboard-teacher"></i> <span>&nbsp &nbsp &nbsp Workshop /<br>Paper Presentation</span></a></li>
  <li><a href="#" class="nav-link scrollto active"><i class="fas fa-users"></i> <span>Team</span></a></li>
    <li><a href="schedule.php" class="nav-link scrollto"><i class="fas fa-hourglass-half"></i><span>Schedule</span></a></li>
  <li><a href="contact.php" class="nav-link scrollto"><i class="fas fa-question"></i> <span>FAQ / Contact</span></a></li>
</ul>
  </nav><!-- .nav-menu -->

</header>

<?php require_once 'header.php';?>


  <div  id="header2" class="d-flex align-items-center header2 ">
    <div class="container d-flex align-items-center justify-content-center">

      <div class="logo">
        <h1>OUR TEAM</h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
    </div>
  </div>
  <section class="team spad">
  <div class="container d-flex justify-content-center">
    <div class="row">
        <div class="col-lg-12"><br><br></div>
                <!-- <div class="col-lg-4"></div> -->
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Anushya-Mam.jpeg" alt="">
                        <h4>Dr. Anusuya K V</h4>
                        <span>Faculty Advisor</span>
                        <p>Associate Professor(CAS)</p>
                        <div class="social">
                            <a href="mailto:kva.ece@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Bhuvanesh G.jpg" alt="">
                        <h4>Bhuvanesh G</h4>
                        <span>Chairman</span>
                        <p>ECE</p>
                        <div class="social">
                            <a href="mailto:19l208@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/bhuvanesh-g-3236081a7" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Ajay Shekar D.jpg" alt="">
                        <h4>Ajay Shekar D</h4>
                        <span>Co - Chairman</span>
                        <p>EEE SW</p>
                        <div class="social">
                            <a href="mailto:19e606@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/ajay-shekar-03" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Barani Kerthi S.jpg" alt="">
                        <h4>Barani Kerthi S</h4>
                        <span>Secretary - Men</span>
                        <p>EEE SW</p>
                        <div class="social">
                            <a href="mailto:19e604@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/barani-kerthi-s-9a8970175/" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Viveka P.jpg" alt="">
                        <h4>Viveka P</h4>
                        <span>Secretary - Women</span>
                        <p>ECE</p>
                        <div class="social">
                            <a href="mailto:19l264@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/viveka-p-131824216 " target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Janani G.jpg" alt="">
                        <h4>Janani G</h4>
                        <span>Treasurer</span>
                        <p>BME</p>
                        <div class="social">
                            <a href="mailto:19d214@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/janani-gd-503135237" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Megalingam R.jpg" alt="">
                        <h4>Megalingam R</h4>
                        <span>SPAC Chairman</span>
                        <p>ECE</p>
                        <div class="social">
                            <a href="mailto:19l223@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/megalingam-r/" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Toshini R.jpg" alt="">
                        <h4>Toshini R</h4>
                        <span>SPAC Secretary</span>
                        <p>BME</p>
                        <div class="social">
                            <a href="mailto:19d229@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/toshini-rajesh-605028191" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Mavsi Aadhavan C.jpg" alt="">
                        <h4>Mavsi Aadhavan C</h4>
                        <span>SPAVE Secretary - Men</span>
                        <p>BME</p>
                        <div class="social">
                            <a href="mailto:19d221@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/mavsi-aadhavan-50b360191" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Sangavi M.jpg" alt="">
                        <h4>Sangavi M</h4>
                        <span>SPAVE Secretary - Women</span>
                        <p>I&CE</p>
                        <div class="social">
                            <a href="mailto:19u235@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/sangavi-m" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Aswadh Khumar G S.jpg" alt="">
                        <h4>Aswadh Khumar G S</h4>
                        <span>Joint Secretary</span>
                        <p>RAE</p>
                        <div class="social">
                            <a href="mailto:20r432@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/aswadh-khumar-g-s-9a50171b9" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Priyadharshini V.jpg" alt="">
                        <h4>Priyadharshini V</h4>
                        <span>Joint Secretary</span>
                        <p>EEE SW</p>
                        <div class="social">
                            <a href="mailto:19e634@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/priyadharshini-v-1299a61b9" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Sanjith S.jpg" alt="">
                        <h4>Sanjith S</h4>
                        <span>Sponsorship Team - Head</span>
                        <p>ECE</p>
                        <div class="social">
                            <a href="mailto:19l244@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/sanjith-s-28a647207/" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Sushanthika G.jpg" alt="">
                        <h4>Sushanthika G</h4>
                        <span>Sponsorship Team - Co Head</span>
                        <p>BME</p>
                        <div class="social">
                            <a href="mailto:19d240@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/sushanthika-gnanasekaran-1988a6190" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Theviga Varsini K.jpg" alt="">
                        <h4>Theviga Varsini K</h4>
                        <span>Design Team - Head</span>
                        <p>I&CE</p>
                        <div class="social">
                            <a href="mailto:19u244@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/theviga" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Dhakshina Vyshak M.jpg" alt="">
                        <h4>Dhakshina Vyshak M</h4>
                        <span>Design Team - Co Head</span>
                        <p>ECE</p>
                        <div class="social">
                            <a href="mailto:19l110@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="http://www.linkedin.com/in/dhakshina-vyshak-m-5190531ba" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Arul Virumbi K.jpg" alt="">
                        <h4>Arul Virumbi K</h4>
                        <span>Technology Team - Head</span>
                        <p>EEE SW</p>
                        <div class="social">
                            <a href="mailto:19e601@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/arul-virumbi-a306781b0/" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Nithishwar M.jpg" alt="">
                        <h4>Nithishwar M</h4>
                        <span>Technology Team - Co Head</span>
                        <p>ECE</p>
                        <div class="social">
                            <a href="mailto:19l222@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/nithishwar-m-1800a01a6" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Vidhya V.jpg" alt="">
                        <h4>Vidhya V</h4>
                        <span>Publicity Team - Head</span>
                        <p>ECE</p>
                        <div class="social">
                            <a href="mailto:19l148@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/vidhya-venkatesh-8bbb031b9" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Narmatha V.jpg" alt="">
                        <h4>Narmatha V</h4>
                        <span>Publicity Team - Co Head</span>
                        <p>EEE SW</p>
                        <div class="social">
                            <a href="mailto:19e628@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="http://www.linkedin.com/in/narmatha-veerasamy/" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Akaash K L.jpg" alt="">
                        <h4>Akaash K L</h4>
                        <span>Logistics Team - Head</span>
                        <p>ECE</p>
                        <div class="social">
                            <a href="mailto:19l102@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/akaash-kl-32149b19b" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Karthic N.jpg" alt="">
                        <h4>Karthic N</h4>
                        <span>Logistics Team - Co Head</span>
                        <p>BME</p>
                        <div class="social">
                            <a href="mailto:20d435@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/karthic-nagaraj-870240187" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Kaartik P R.jpg" alt="">
                        <h4>Kaartik P R</h4>
                        <span>Hospitality Team - Head</span>
                        <p>EEE SW</p>
                        <div class="social">
                            <a href="mailto:19e616@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/kaartik-ravichandran-b233b3215" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Swarupaa V G.jpg" alt="">
                        <h4>Swarupaa V G</h4>
                        <span>Hospitality Team - Co Head</span>
                        <p>BME</p>
                        <div class="social">
                            <a href="mailto:19d242@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/swarupaa-vg-3b3517191" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Sivasubramaniyan R.jpg" alt="">
                        <h4>Sivasubramaniyan R</h4>
                        <span>Literary Team - Head</span>
                        <p>EEE SW</p>
                        <div class="social">
                            <a href="mailto:19e643@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/sivasubramaniyan-r-88a021228/" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Kanisha R.jpg" alt="">
                        <h4>Kanisha R</h4>
                        <span>Literary Team - Co Head</span>
                        <p>ECE</p>
                        <div class="social">
                            <a href="mailto:19l120@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/kanisha-r-a3454222b" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Sanjay S.jpg" alt="">
                        <h4>Sanjay S</h4>
                        <span>Membership Team - Head</span>
                        <p>ECE</p>
                        <div class="social">
                            <a href="mailto:19l243@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/sanjusuresh2001/" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Dheeksha C.jpg" alt="">
                        <h4>Dheeksha C</h4>
                        <span>Membership Team - Co Head</span>
                        <p>I&CE</p>
                        <div class="social">
                            <a href="mailto:19u212@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/dheeksha-chandramohan-20b29a208" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Dineshkanna B R.jpg" alt="">
                        <h4>Dineshkanna B R</h4>
                        <span>Editorial Team - Head</span>
                        <p>ECE</p>
                        <div class="social">
                            <a href="mailto:19l113@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <!-- <a href="https://www.linkedin.com/in/kaartik-ravichandran-b233b3215" target="_blank"><i class="fa fa-linkedin"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Prashitha R.jpg" alt="">
                        <h4>Prashitha R</h4>
                        <span>Editorial Team - Co Head</span>
                        <p>EEE SW</p>
                        <div class="social">
                            <a href="mailto:19e632@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/prashitha-r-b002bb21b" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Krishna Kumar T.jpg" alt="">
                        <h4>Krishna Kumar T</h4>
                        <span>Media Team - Head</span>
                        <p>EEE SW</p>
                        <div class="social">
                            <a href="mailto:19e619@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <!-- <a href="https://www.linkedin.com/in/kaartik-ravichandran-b233b3215" target="_blank"><i class="fa fa-linkedin"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Dhinakar B.jpg" alt="">
                        <h4>Dhinakar B</h4>
                        <span>Media Team - Co Head</span>
                        <p>I&CE</p>
                        <div class="social">
                            <a href="mailto:20u436@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/dhinakar-bhaskar-a638621b1" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Naresh Kumar K K R.jpg" alt="">
                        <h4>Naresh Kumar K K R</h4>
                        <span>Student Coordinator Head - Men</span>
                        <p>RAE</p>
                        <div class="social">
                            <a href="mailto:20r434@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="http://linkedin.com/in/naresh-kumar-kkr/" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Suriyapriya S.jpg" alt="">
                        <h4>Suriyapriya S</h4>
                        <span>Student Coordinator Head - Women</span>
                        <p>BME</p>
                        <div class="social">
                            <a href="mailto:19d239@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/suriyapriya-s-94aa2018b" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Adhithya S.jpg" alt="">
                        <h4>Adhithya S</h4>
                        <span>Student Executive Head - Men</span>
                        <p>ECE</p>
                        <div class="social">
                            <a href="mailto:19l203@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/adhithya-s" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Vasunthra V.jpg" alt="">
                        <h4>Vasunthra V</h4>
                        <span>Student Executive Head - Women</span>
                        <p>BME</p>
                        <div class="social">
                            <a href="mailto:19d245@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/vasunthra-v-2258a5190" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Bharath Kumar J K.jpg" alt="">
                        <h4>Bharath Kumar J K</h4>
                        <span>Student Executive</span>
                        <p>RAE</p>
                        <div class="social">
                            <a href="mailto:19r211@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/barath-kumar-jk-52b106226" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Gowtham Easwar K.jpg" alt="">
                        <h4>Gowtham Easwar K</h4>
                        <span>Student Executive</span>
                        <p>ECE</p>
                        <div class="social">
                            <a href="mailto:19l115@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/gowtham-easwar-5999131b6" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Dharshana P S.jpg" alt="">
                        <h4>Dharshana P S</h4>
                        <span>Student Executive</span>
                        <p>BME</p>
                        <div class="social">
                            <a href="mailto:19d212@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/dharsana-p-s-6a0028191" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Umda M.jpg" alt="">
                        <h4>Umda M</h4>
                        <span>Student Executive</span>
                        <p>ECE</p>
                        <div class="social">
                            <a href="mailto:19l145@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/umda-m-5202bb224" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Viboosithasri N S.jpg" alt="">
                        <h4>Viboosithasri N S</h4>
                        <span>Student Executive</span>
                        <p>ECE</p>
                        <div class="social">
                            <a href="mailto:19l147@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/viboosithasri-n-s-a3092b1b3" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Anjana V R.jpg" alt="">
                        <h4>Anjana V R</h4>
                        <span>Student Executive</span>
                        <p>RAE</p>
                        <div class="social">
                            <a href="mailto:19r206@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/anjana-v-r-abab40190" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Veerakarthik R D.jpg" alt="">
                        <h4>Veerakarthik R D</h4>
                        <span>Student Executive</span>
                        <p>ECE</p>
                        <div class="social">
                            <a href="mailto:19l262@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/veerakarthik-r-d-033b071b9" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Sudarshan S.jpg" alt="">
                        <h4>Sudarshan S</h4>
                        <span>Student Executive</span>
                        <p>EEE SW</p>
                        <div class="social">
                            <a href="mailto:19e644@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/sudarshansangameswaran/" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Saveetha S.jpg" alt="">
                        <h4>Saveetha S</h4>
                        <span>Student Executive</span>
                        <p>EEE SW</p>
                        <div class="social">
                            <a href="mailto:19e640@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/saveetha-s-267a1721a" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Yuvaraj R.jpg" alt="">
                        <h4>Yuvaraj R</h4>
                        <span>Student Executive</span>
                        <p>EEE SW</p>
                        <div class="social">
                            <a href="mailto:20e909@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <!-- <a href="https://www.linkedin.com/in/bhuvanesh-g-3236081a7" target="_blank"><i class="fa fa-linkedin"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Hariprakash R.jpg" alt="">
                        <h4>Hariprakash R</h4>
                        <span>Student Executive</span>
                        <p>ECE</p>
                        <div class="social">
                            <a href="mailto:19l116@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/hari-prakash-51292622b" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Sneha D.jpg" alt="">
                        <h4>Sneha D</h4>
                        <span>Student Executive</span>
                        <p>BME</p>
                        <div class="social">
                            <a href="mailto:19d235@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <!-- <a href="https://www.linkedin.com/in/bhuvanesh-g-3236081a7" target="_blank"><i class="fa fa-linkedin"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Brindha D.jpg" alt="">
                        <h4>Brindha D</h4>
                        <span>Student Executive</span>
                        <p>BME</p>
                        <div class="social">
                            <a href="mailto:19d206@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/brindha-murugan-532029191/" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Varsha C.jpg" alt="">
                        <h4>Varsha C</h4>
                        <span>Student Executive</span>
                        <p>I&CE</p>
                        <div class="social">
                            <a href="mailto:19u245@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/varsha-chandramohan-5a69ba207" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Sanjay Kumar S.jpg" alt="">
                        <h4>Sanjay Kumar S</h4>
                        <span>Governing Council</span>
                        <p>EEE SW</p>
                        <div class="social">
                            <a href="mailto:18e639@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="http://www.linkedin.com/in/sanjaykumar03" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Devipriya A.jpg" alt="">
                        <h4>Devipriya A</h4>
                        <span>Governing Council</span>
                        <p>EEE SW</p>
                        <div class="social">
                            <a href="mailto:18e611@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="http://www.linkedin.com/in/devipriya-annadurai-09371b207" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Krishna B.jpg" alt="">
                        <h4>Krishna B</h4>
                        <span>Governing Council</span>
                        <p>EEE SW</p>
                        <div class="social">
                            <a href="mailto:18e620@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/krishna-b-620" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Aswin Kumar K.jpg" alt="">
                        <h4>Aswin Kumar K</h4>
                        <span>Governing Council</span>
                        <p>EEE SW</p>
                        <div class="social">
                            <a href="mailto:19e902@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="http://linkedin.com/in/aswin-kumar-k-752856209" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Sangeetha M.jpg" alt="">
                        <h4>Sangeetha M</h4>
                        <span>Student Coordinator</span>
                        <p>ECE</p>
                        <div class="social">
                            <a href="mailto:21l416@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/sangeetha-m-1644a8226" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Deepa R S.jpg" alt="">
                        <h4>Deepa R S</h4>
                        <span>Student Coordinator</span>
                        <p>BME</p>
                        <div class="social">
                            <a href="mailto:20d209@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <!-- <a href="https://www.linkedin.com/in/bhuvanesh-g-3236081a7" target="_blank"><i class="fa fa-linkedin"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Karthi Keyan N.jpg" alt="">
                        <h4>Karthi Keyan N</h4>
                        <span>Student Coordinator</span>
                        <p>EEE SW</p>
                        <div class="social">
                            <a href="mailto:20e614@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/karthi-keyan-50a194225" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Krishna R S.jpg" alt="">
                        <h4>Krishna R S</h4>
                        <span>Student Coordinator</span>
                        <p>RAE</p>
                        <div class="social">
                            <a href="mailto:20r224@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <!-- <a href="https://www.linkedin.com/in/bhuvanesh-g-3236081a7" target="_blank"><i class="fa fa-linkedin"></i></a> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Aksaya Karthika A.jpg" alt="">
                        <h4>Aksaya Karthika A</h4>
                        <span>Student Coordinator</span>
                        <p>I&CE</p>
                        <div class="social">
                            <a href="mailto:20u201@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/aksayakarthika-alappan-562b97223" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Pavithra B.jpg" alt="">
                        <h4>Pavithra B</h4>
                        <span>Student Coordinator</span>
                        <p>EEE</p>
                        <div class="social">
                            <a href="mailto:20e137@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/pavithra-balakumar-b5a462219" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Monisha G S.jpg" alt="">
                        <h4>Monisha G S</h4>
                        <span>Student Coordinator</span>
                        <p>CSE</p>
                        <div class="social">
                            <a href="mailto:20z330@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/monisha-g-s-041b8920b/" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Rada laksmi A.jpg" alt="">
                        <h4>Rada laksmi A</h4>
                        <span>Student Coordinator</span>
                        <p>IT</p>
                        <div class="social">
                            <a href="mailto:20i235@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/rada-laksmi-a-022b3522a" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                    <div class="member">
                        <img src="assets/img/team/Akash U.jpg" alt="">
                        <h4>Akash U</h4>
                        <span>Student Coordinator</span>
                        <p>Production SW</p>
                        <div class="social">
                            <a href="mailto:20p602@psgtech.ac.in" target="_blank"><i class="fa fa-envelope"></i></a>
                            <a href="https://www.linkedin.com/in/akash-u-0454b1200" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                </div>
    </div>
</div>
</section>



<?php require_once 'footer.php';?>

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>



    <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


</body>

</html>
