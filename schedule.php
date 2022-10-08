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

  <title>SRiSHTi 2K21 - SCHEDULE</title>
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

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">

  <!-- Template Main CSS File -->
  <link href="assets/css/common-styles.css" rel="stylesheet">
  <link href="assets/css/navbar.css" rel="stylesheet">
  <link href="assets/css/footer.css" rel="stylesheet">
  <link href="assets/css/schedule.css" rel="stylesheet">
  <link href="assets/css/background.css" rel="stylesheet">


  <link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.min.css">
  <script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

  
  
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
        <li><a href="events.php" class="nav-link scrollto "><i class="fas fa-calendar-day"></i> <span>Events</span></a></li>
        <li><a href="workshop.php" class="nav-link scrollto"><i class="fas fa-chalkboard-teacher"></i> <span>&nbsp &nbsp &nbsp Workshop /<br>Paper Presentation</span></a></li>
        <li><a href="team.php" class="nav-link scrollto"><i class="fas fa-users"></i> <span>Team</span></a></li>
        <li><a href="#" class="nav-link scrollto active"><i class="fas fa-hourglass-half"></i><span>Schedule</span></a></li>
        <li><a href="contact.php" class="nav-link scrollto"><i class="fas fa-question"></i> <span>FAQ / Contact</span></a></li>
      </ul>
    </nav><!-- .nav-menu -->

  </header>
    
  <?php require_once 'header.php';?>
    <div  id="header2" class="d-flex align-items-center header2">
        <div class="container d-flex align-items-center justify-content-center">
    
          <div class="logo">
            <h1>SCHEDULE</h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
          </div>
        </div>
      </div>
 
<div class="container-fluid">

  <div class="category-bar">
    <nav>
        <div id="sliding-bar"></div>
        <a href="#Day1">DAY - 1</a>
        <a href="#Day2">DAY - 2</a>
    </nav>
</div>

    <!-- Marquee Section Begin -->
    <!-- <section class="services spad" style="padding-bottom: 50px; padding-top: 0px;" id="Day1">
        <marquee scrollamount="10" onmouseover="this.stop()" onmouseleave="this.start()">
            Click <a style="color: white;" href="https://drive.google.com/file/d/1Csx7-YeCyH-obYDO2QnhtvF08ZckqSp0/view?usp=sharing" target="_blank">here</a> to download the complete SRiSHTi 2K22 schedule as PDF. 
        </marquee>
    </section> -->
    <!-- Marquee Section End -->

    <div class="experience" id="experience" >
            <div style="padding-bottom: 100px;" id="Day1"></div>
            <div div class="container">
                <header class="section-header text-center wow zoomIn"  data-wow-delay="0.1s">
                    <h1>SRiSHTi- Day 1</h1><br><br>
                </header>
                <div class="timeline">
                    <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date"><p style="text-transform: none; font-size:25px; font-style:normal">SRiSHTi 2K22</p>Inaguration</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/inauguration-c.png" style="height: 100px; width: 100px;">
                                </div>
                                <div class="item-2">
                                    <h2><br>8:30 AM - 9:30 AM</h2>
                                   <!-- <p>Category : Technical Event</p>-->
                                </div>
                                <div class="item-3">
                                    <!--<a class="btn" href="" target="_blank">Go to Event</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Euclidea<br>Round 1</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/TECH/euclidea.PNG" style="height: 130px; width: 130px;">
                                </div>
                                <div class="item-2">
                                    <h2>11:30 AM - 12:30 PM</h2>
                                    <p>Category : Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="./events.php#Tech">Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Tech Fete<br>Round 1</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/TECH/techfete.PNG" style="height: 130px; width: 130px;">
                                </div>
                                <div class="item-2">
                                    <h2>11:00 AM - 12:00 PM</h2>
                                    <p>Category : Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="./events.php#Tech" >Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Codeverse<br>Round 1</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/TECH/codverse.PNG" style="height: 130px; width: 130px;">
                                </div>
                                <div class="item-2">
                                    <h2>11:00 AM - 12:00 PM</h2>
                                    <p>Category : Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="./events.php#Tech">Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Snychron<br>Round 1</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/NON-TECH/synchron.png" style="height: 130px; width: 130px;">
                                </div>
                                <div class="item-2">
                                    <h2>11:30 PM - 12:30 PM</h2>
                                    <p>Category : Non-Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="./events.php#NonTech">Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Mazemice</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/BOT/mazemice.PNG" style="height: 130px; width: 130px;">
                                </div>
                                <div class="item-2">
                                    <h2>10:30 AM - 4:00 PM</h2>
                                    <p>Category : Bot Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="./events.php#Tech" >Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-item left wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Bot-Clar</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/BOT/clar.PNG" style="height: 130px; width: 130px;">
                                </div>
                                <div class="item-2">
                                    <h2>10:30 AM - 4:00 PM</h2>
                                    <p>Category : Bot Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="./events.php#Tech" >Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Technodium</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/FLAG/technodium.PNG" style="height: 130px; width: 130px;">
                                </div>
                                <div class="item-2">
                                    <h2>10:00 AM - 4:00 PM</h2>
                                    <p>Category : Flagship</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="./events.php#Tech" >Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-item left wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Code a thon</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/FLAG/code a thon.PNG" style="height: 130px; width: 130px;">
                                </div>
                                <div class="item-2">
                                    <h2>10:00 AM - 4:00 PM</h2>
                                    <p>Category : Flagship</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="./events.php#Tech" >Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Industrial Iot</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/WORK/schneider2.PNG" style="height: 130px; width: 130px;">
                                </div>
                                <div class="item-2">
                                    <h2>10:00 AM - 4:30 PM</h2>
                                    <p>Category : Workshop</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="./workshop.php#workshop" >Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item left wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Intelligent Learning</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/WORK/machine learning.PNG" style="height: 130px; width: 130px;">
                                </div>
                                <div class="item-2">
                                    <h2>10:00 AM - 4:30 PM</h2>
                                    <p>Category : Workshop</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="./workshop.php#workshop" >Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Embedded Signal Processing</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/WORK/embedded signal processing.PNG" style="height: 130px; width: 130px;">
                                </div>
                                <div class="item-2">
                                    <h2>10:00 AM - 4:30 PM</h2>
                                    <p>Category : Workshop</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="./workshop.php#workshop" >Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item left wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Drone Workshop</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/WORK/drone building.PNG" style="height: 130px; width: 130px;">
                                </div>
                                <div class="item-2">
                                    <h2>10:00 AM - 4:30 PM</h2>
                                    <p>Category : Workshop</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="./workshop.php#workshop" >Go to Event</a>
                                </div>
                            </div>
                        </div>
                    
                </div>
                <div class="timeline-item right wow slideInLeft" data-wow-delay="0.1s">
                    <div class="timeline-text">
                        <div class="timeline-date">ALL PAPER PRESENTATIONS</div>
                        <div class="grid-container">
                            <div class="item-1">
                                <img src="assets/img/icons/PAPER/airos.PNG" style="height: 130px; width: 130px;">
                            </div>
                            <div class="item-2">
                                <h2>11:00 AM - 4:30 PM</h2>
                                <!--<p>Category : Technical Event</p>-->
                            </div>
                            <div class="item-3">
                                <a class="btn" href="./workshop.php#paperpres" >Go to Event</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>

                <header class="section-header text-center wow zoomIn"  data-wow-delay="0.1s">
                    <h1 style="font-size:25px">LUNCH BREAK</h1><br>
                </header>
                <div class="timeline">
                    <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Euclidea<br>Round 2 & 3</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/TECH/euclidea.PNG" style="height: 130px; width: 130px;">
                                </div>
                                <div class="item-2">
                                    <h2>1:30 PM - 4:00 PM</h2>
                                    <p>Category : Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="./events.php#Tech">Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Ready Set Scavenge<br>Round 1 & 2</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/NON-TECH/ready set scavenge.png" style="height: 130px; width: 130px;">
                                </div>
                                <div class="item-2">
                                    <h2>1:30 PM - 4:00 PM</h2>
                                    <p>Category : Non-Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="./events.php#NonTech" >Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item left wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Tech Fete<br>Round 2</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/TECH/techfete.PNG" style="height: 130px; width: 130px;">
                                </div>
                                <div class="item-2">
                                    <h2>2:00 PM - 3:00 PM</h2>
                                    <p>Category : Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="./events.php#Tech">Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInLeft" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Codeverse<br>Round 2</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/TECH/codverse.PNG" style="height: 130px; width: 130px;">
                                </div>
                                <div class="item-2">
                                    <h2>2:30 PM - 3:30 PM</h2>
                                    <p>Category : Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="./events.php#Tech" >Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item left wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Snychron<br>Round 2</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/NON-TECH/synchron.png" style="height: 130px; width: 130px;">
                                </div>
                                <div class="item-2">
                                    <h2>3:30 PM - 4:00 PM</h2>
                                    <p>Category : Non-Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="./events.php#Tech" >Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    
                    
                    
                    
                    </div>
                    




            </div>
        </div>

        <div class="experience" id="experience">
        <div style="padding-bottom: 130px;" id="Day2"><br></div>
            <div class="container">
                <header class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
                <div class="timeline-date">
                    <h1>SRiSHTi- Day 2</h1><br><br></div>
                </header>
                <div class="timeline">
                    <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Sherlock's circle<br>Round 1</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/NON-TECH/sherlock_s circle.png" style="height: 130px; width: 130px;">
                                </div>
                                <div class="item-2">
                                    <h2>10:00 AM - 11:30 AM</h2>
                                    <p>Category : Non-Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="./events.php#NonTech">Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Tech Hotspot<br>Round 1</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/TECH/techhotspot.PNG" style="height: 130px; width: 130px;">
                                </div>
                                <div class="item-2">
                                    <h2>9:00 AM - 10:00 AM</h2>
                                    <p>Category : Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="./events.php#Tech">Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">To 2 Too<br>Round 1</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/TECH/to 2 too.PNG" style="height: 130px; width: 130px;">
                                </div>
                                <div class="item-2">
                                    <h2>9:00 AM - 10:00 AM</h2>
                                    <p>Category : Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="./events.php#Tech">Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Word Blitz<br>Round 1</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/NON-TECH/wordblitz.png" style="height: 130px; width: 130px;">
                                </div>
                                <div class="item-2">
                                    <h2>11:30 AM - 12:30 PM</h2>
                                    <p>Category : Non-Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="./events.php#NonTech">Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Illustratique<br>Round 1</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/NON-TECH/illustrique.png" style="height: 130px; width: 130px;">
                                </div>
                                <div class="item-2">
                                    <h2>11:00 AM - 1:00 PM</h2>
                                    <p>Category : Non-Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="./events.php#NonTech" >Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Tech Hotspot<br>Round 2</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/TECH/techhotspot.PNG" style="height: 130px; width: 130px;">
                                </div>
                                <div class="item-2">
                                    <h2>11:30 AM - 12:30 PM</h2>
                                    <p>Category : Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="./events.php#Tech" >Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-item left wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Mazemice</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/BOT/mazemice.PNG" style="height: 130px; width: 130px;">
                                </div>
                                <div class="item-2">
                                    <h2>10:30 AM - 4:00 PM</h2>
                                    <p>Category : Bot Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="./events.php#Tech" >Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Bot-Clar</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/BOT/clar.PNG" style="height: 130px; width: 130px;">
                                </div>
                                <div class="item-2">
                                    <h2>10:30 AM - 4:00 PM</h2>
                                    <p>Category : Bot Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="./events.php#Tech" >Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item left wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Technodium</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/FLAG/technodium.PNG" style="height: 130px; width: 130px;">
                                </div>
                                <div class="item-2">
                                    <h2>10:00 AM - 4:00 PM</h2>
                                    <p>Category : Flagship</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="./events.php#Tech" >Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Code a thon</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/FLAG/code a thon.PNG" style="height: 130px; width: 130px;">
                                </div>
                                <div class="item-2">
                                    <h2>10:00 AM - 4:00 PM</h2>
                                    <p>Category : Flagship</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="./events.php#Tech" >Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="timeline-item left wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Intelligent Learning</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/WORK/machine learning.PNG" style="height: 130px; width: 130px;">
                                </div>
                                <div class="item-2">
                                    <h2>10:00 AM - 4:30 PM</h2>
                                    <p>Category : Workshop</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="./workshop.php#workshop" >Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Embedded Signal Processing</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/WORK/embedded signal processing.PNG" style="height: 130px; width: 130px;">
                                </div>
                                <div class="item-2">
                                    <h2>10:00 AM - 4:30 PM</h2>
                                    <p>Category : Workshop</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="./workshop.php#workshop" >Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item left wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Automotive Embedded Systems</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/WORK/automotive embedded system.PNG" style="height: 130px; width: 130px;">
                                </div>
                                <div class="item-2">
                                    <h2>10:00 AM - 4:30 PM</h2>
                                    <p>Category : Workshop</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="./workshop.php#workshop" >Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Drone Workshop</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/WORK/drone building.PNG" style="height: 130px; width: 130px;">
                                </div>
                                <div class="item-2">
                                    <h2>10:00 AM - 4:30 PM</h2>
                                    <p>Category : Workshop</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="./workshop.php#workshop" >Go to Event</a>
                                </div>
                            </div>
                        </div>
                    
                </div>
                    
                    
                    <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">ALL PAPER PRESENTATIONS</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/PAPER/airos.PNG" style="height: 130px; width: 130px;">
                                </div>
                                <div class="item-2">
                                    <h2>11:00 AM - 4:00 PM</h2>
                                    <!--<p>Category : Technical Event</p>-->
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="./workshop.php#paperpres" >Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <header class="section-header text-center wow zoomIn"  data-wow-delay="0.1s">
                    <h1 style="font-size:25px">LUNCH BREAK</h1><br>
                </header>
                <div class="timeline">
                    <div class="timeline-item right wow slideInLeft" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Sherlock's circle<br>Round 2</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/NON-TECH/sherlock_s circle.png" style="height: 130px; width: 130px;">
                                </div>
                                <div class="item-2">
                                    <h2>2:00 PM - 3:30 PM</h2>
                                    <p>Category : Non-Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="./events.php#NonTech">Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">To 2 Too<br>Round 2</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/TECH/to 2 too.PNG" style="height: 130px; width: 130px;">
                                </div>
                                <div class="item-2">
                                    <h2>12:30 AM - 1:30 PM</h2>
                                    <p>Category : Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="./events.php#Tech">Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="timeline-item right wow slideInRight" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date">Word Blitz<br>Round 2</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/NON-TECH/wordblitz.png" style="height: 130px; width: 130px;">
                                </div>
                                <div class="item-2">
                                    <h2>2:00 PM - 3:00 PM</h2>
                                    <p>Category : Non-Technical Event</p>
                                </div>
                                <div class="item-3">
                                    <a class="btn" href="./events.php#NonTech">Go to Event</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                    
                    <div class="timeline-item left wow slideInLeft" data-wow-delay="0.1s">
                        <div class="timeline-text">
                            <div class="timeline-date"><p style="text-transform: none; font-size:25px; font-style:normal">SRiSHTi 2K22</p>VALIDECTORY</div>
                            <div class="grid-container">
                                <div class="item-1">
                                    <img src="assets/img/icons/valediction-c.png" style="height: 100px; width: 100px;">
                                </div>
                                <div class="item-2">
                                    <br><h2>5:00 PM - 6:30 PM</h2>
                                    <!--<p>Category : Technical Event</p>-->
                                </div>
                                <div class="item-3">
                                   <!-- <a class="btn" href="" >Go to Event</a>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

        <?php require_once 'footer.php';?>

        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


    

<script type = "text/javascript">
        var marker = document.querySelector('#sliding-bar');
        var item = document.querySelectorAll('nav a');

        function indicator(e){
            marker.style.left = e.offsetLeft+"px";
            marker.style.width = e.offsetWidth+"px";
        }

        item.forEach(link => {
            link.addEventListener('click', (e)=>{
                indicator(e.target);
            })
        })
    </script>
  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/typed.js/typed.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
</html>