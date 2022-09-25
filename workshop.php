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

    <title>WORKSHOPS / PAPER PRESENTATION</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.ico" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a74d0f3882.js" crossorigin="anonymous"></script>


    <link href="assets/css/style3.css" rel="stylesheet">
    <link href="assets/css/cards.css" rel="stylesheet">
    <link href="assets/css/navbar.css" rel="stylesheet">
    <link href="assets/css/footer.css" rel="stylesheet">
    <link href="assets/css/common-styles.css" rel="stylesheet">
    <link href="assets/css/background.css" rel="stylesheet">


    <link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.min.css">
    <script src="https://unpkg.com/flickity@2.0/dist/flickity.pkgd.min.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>


    <script type="text/javascript">
        $(document).ready(function() {
            $("#btn_1").click(function() {
                ppname = "AIROS";
                registerPaperpres(ppname);
            });
            $("#btn_2").click(function() {
                ppname = "TECHNOVATION";
                registerPaperpres(ppname);
            });
            $("#btn_3").click(function() {
                ppname = "INNOVALANZ";
                registerPaperpres(ppname);
            });
            $("#btn_4").click(function() {
                ppname = "TECH-O-STER";
                registerPaperpres(ppname);
            });
            $("#btn_5").click(function() {
                ppname = "ARIVARANGAM";
                registerPaperpres(ppname);
            });
            $("#btn_6").click(function() {
                wsname = "DRONE BUILDING";
                registerWorkshop(wsname);
            });
            $("#btn_7").click(function() {
                wsname = "MACHINE LEARNING USING PYTHON";
                registerWorkshop(wsname);
            });
            $("#btn_8").click(function() {
                wsname = "AUTOMOTIVE EMBEDDED SYSTEMS";
                registerWorkshop(wsname);
            });
            $("#btn_9").click(function() {
                wsname = "EMBEDDED SIGNAL PROCESSING";
                registerWorkshop(wsname);
            });
            $("#btn_10").click(function() {
                wsname = "INDUSTRIAL AUTOMATION-IIOT";
                registerWorkshop(wsname);
            });

        });


        function register_alert(ppname) {
            alert(`You have Registered for ${ppname}`);
        }

        function wsfees(wsname) {
            ftype = wsname;
            $.ajax({
                type: "POST",
                url: "modules/pay_process.php",
                data: "type=" + ftype,
                success: function(html) {
                    if (html == 'false') {
                        $("#add_err1").html('<div class="alert alert-danger"> \
                            <strong>Please Try Again Later.</strong> \ \
                        </div>');

                        window.location.href = "profile.php";

                    } else {
                        window.location.href = html;
                    }
                },
                beforeSend: function() {
                    $("#add_err1").html("Loading...");
                }
            });
        }

        function registerPaperpres(ppname) {
            $.ajax({
                type: "POST",
                url: "ppregistered.php",
                data: "ppname=" + ppname,
                success: function(html) {
                    if (html == 'true') {

                        register_alert(ppname);

                    } else if (html == 'rem') {

                        alert("Already Registered");

                    } else if (html == 'genfee') {
                        var val = confirm("You Need to pay General fee! \n Do not close the page before the payment confirmation.");
                        if (val == true) {
                            wsfees("GEN");
                        }
                    } else {
                        alert("Login before registering to a Event")
                        window.location.href = "login.php";
                    }
                }

            });
        }

        function registerWorkshop(wsname) {
            $.ajax({
                type: "POST",
                url: "wregistered.php",
                data: "wsname=" + wsname,
                success: function(html) {
                    if (html == 'true') {
                        var val1 = confirm("Confirm to pay general fee. \n Do not close the page before the payment confirmation.");
                        if (val1 == true) {
                            let wstype = wsname.substring(0, 3).toUpperCase();
                            wsfees(wstype);
                        }
                    } else if (html == 'rem') {

                        alert("Already Registered");

                    } else if (html == 'genfee') {
                        var val2 = confirm("You Need to pay General fee! \n Do not close the page before the payment confirmation.");
                        if (val2 == true) {
                            wsfees("GEN");
                        }
                    } else {
                        alert("Login before registering to a Event");
                        window.location.href = "login.php";
                    }
                }

            });
        }
    </script>

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
                <li><a href="#" class="nav-link scrollto active"><i class="fas fa-chalkboard-teacher"></i> <span>&nbsp &nbsp &nbsp Workshop /<br>Paper Presentation</span></a></li>
                <li><a href="team.php" class="nav-link scrollto"><i class="fas fa-users"></i> <span>Team</span></a></li>
                <li><a href="schedule.php" class="nav-link scrollto"><i class="fas fa-hourglass-half"></i><span>Schedule</span></a></li>
                <li><a href="contact.php" class="nav-link scrollto"><i class="fas fa-question"></i> <span>FAQ / Contact</span></a></li>
            </ul>
        </nav><!-- .nav-menu -->

    </header>


    <?php require_once 'header.php'; ?>

    <div id="header2"></div>
    <div class="category-bar" style="top: 0px !important">
        <nav>
            <div id="sliding-bar"></div>
            <a href="#paperpres">PAPER PRESENTATION</a>
            <a href="#workshop">WORKSHOP</a>
        </nav>
    </div>



    <div class="card-area container">

        <div class="row">
            <!-- PAPER PRESENTATION -->
            <div class="col-lg-12" id="paperpres" style="padding-bottom: 50px;"><br></div>
            <div class="col-lg-12">
                <h3 style="height: 70px;color: #d1d7e0;text-align: center;font-weight: 500; font-size: 30px; margin-bottom:20px;">PAPER PRESENTATION</h3>
            </div>
            <div class="col-lg-4  col-md-6 col-sm-12">
                <div class="card-container">
                    <div class="card">
                        <div class="box">
                            <div class="content">
                                <div class="matter paper_1">
                                    <div class="m_cnt">
                                        <p>

                                            Made specifically for the software geeks out there, AiROS is a presentation event where you can showcase your software-based technologies and innovation.
                                        </p>
                                    </div>
                                    <div class="m_btn">
                                        <center><button id="div-1" type="button" class="btn btn-success">View Details</button></center>
                                    </div>
                                    <!-- <a id="div-1" class="inside-page__btn inside-page__btn-2" style="color: #d1d7e0;">View details</a> -->
                                </div>
                            </div>
                            <div class="image">
                                <div class="img-div">
                                    <img class="event-logo" src="assets/img/icons/PAPER/airos.PNG">
                                    <h2 class="text card-title  text-center" style="text-align: center;">AiROS</h2>
                                    <h2 class="turn-on text-center " style="text-align: center;">CLICK HERE</h2>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  col-md-6 col-sm-12">
                <div class="card-container">
                    <div class="card">
                        <div class="box">
                            <div class="content">
                                <div class="matter paper_1">
                                    <div class="m_cnt">
                                        <p>

                                            TECHNOVATION brings out the technical skills of young engineers by providing a platform to present their prodigious ideas based on hardware technologies.

                                        </p>

                                    </div>
                                    

                                    
                                    <div class="m_btn">

                                        <button id="div-2" type="button" class="btn btn-success">View Details</button>
                                    </div>
                                    <!-- <a id="div-1" class="inside-page__btn inside-page__btn-2" style="color: #66fcf1;">View details</a> -->
                                </div>
                            </div>
                            <div class="image">
                                <div class="img-div">
                                    <img class="event-logo" src="assets/img/icons/PAPER/technovalence.PNG">
                                    <h2 class="text card-title  text-center" style="text-align: center;">TECHNOVATION</h2>
                                    <h2 class="turn-on " style="text-align: center;">CLICK HERE</h2>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  col-md-6 col-sm-12">
                <div class="card-container">
                    <div class="card">
                        <div class="box">
                            <div class="content">
                                <div class="matter paper_1">
                                    <div class="m_cnt">
                                        <p>
                                            Welcome to InnovalanZ - Come amaze us with your unique ideas that aim to make daily life easier and more comfortable.
                                        </p>
                                    </div>
                                    <div class="m_btn">

                                        <button id="div-3" type="button" class="btn btn-success">View Details</button>

                                    </div>
                                </div>
                            </div>
                            <div class="image">
                                <div class="img-div">
                                    <img class="event-logo" src="assets/img/icons/PAPER/innovalanze.PNG">
                                    <h2 class="text card-title  text-center" style="text-align: center;">INNOVALANZ</h2>
                                    <h2 class="turn-on text-center " style="text-align: center;">CLICK HERE</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2  col-md-6 col-sm-12 hide-2"></div>
            <div class="col-lg-4  col-md-6 col-sm-12">
                <div class="card-container">
                    <div class="card">
                        <div class="box">
                            <div class="content">
                                <div class="matter paper_1">
                                    <div class="m_cnt">

                                        <p>
                                            It’s all about doing different things and doing things differently. Tech-O-Ster is a platform to present your ideas in ways that words couldn't convey!
                                        </p>
                                    </div>
                                    <div class="m_btn">
                                        <button id="div-4" type="button" class="btn btn-success">View Details</button>
                                    </div>
                                    <!-- <a id="div-1" class="inside-page__btn inside-page__btn-2" style="color: #66fcf1;">View details</a> -->
                                </div>
                            </div>
                            <div class="image">
                                <div class="img-div">
                                    <img class="event-logo" src="assets/img/icons/PAPER/tech o ster.PNG">
                                    <h2 class="text card-title  text-center" style="text-align: center;">TECH-O-STER</h2>
                                    <h2 class="turn-on " style="text-align: center;">CLICK HERE</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  col-md-6 col-sm-12">
                <div class="card-container">
                    <div class="card">
                        <div class="box">
                            <div class="content">
                                <div class="matter paper_1">
                                    <div class="m_cnt">
                                        <p>
                                            “Somewhere, something incredible is always waiting to be known”. We await your fruitful ideas for the future of electronic chips and integration.
                                        </p>
                                    </div>
                                    <div class="m_btn">

                                        <button id="div-5" type="button" class="btn btn-success">View Details</button>
                                    </div>
                                    <!-- <a id="div-1" class="inside-page__btn inside-page__btn-2" style="color: #66fcf1;">View details</a> -->
                                </div>
                            </div>
                            <div class="image">
                                <div class="img-div">
                                    <img class="event-logo" src="assets/img/icons/PAPER/arivarangam.PNG">
                                    <h2 class="text card-title  text-center" style="text-align: center;">ARIVARANGAM</h2>
                                    <h2 class="turn-on " style="text-align: center;">CLICK HERE</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!--Workshop-->
            <div class="col-lg-12" id="workshop" style="padding-bottom: 50px;"><br></div>
            <div class="col-lg-12">
                <h3 style="height: 70px;color: #d1d7e0;text-align: center;font-weight: 500; font-size: 30px; margin-bottom:20px;">WORKSHOP</h3>
            </div>
            <div class="col-lg-4  col-md-6 col-sm-12">
                <div class="card-container">
                    <div class="card">
                        <div class="box">
                            <div class="content">
                                <div class="matter work_1">
                                    <div class="m_cnt">
                                        <p>
                                            Looking for a fun yet informative workshop that helps improve your practical knowledge? Look no more, Join us and learn in detail about the construction and working of drones.
                                        </p>
                                    </div>
                                    <div class="m_btn">

                                        <button id="div-6" type="button" class="btn btn-success">View Details</button>
                                    </div>
                                    <!-- <a id="div-1" class="inside-page__btn inside-page__btn-2" style="color: #66fcf1;">View details</a> -->
                                </div>
                            </div>
                            <div class="image">
                                <div class="img-div">
                                    <img class="event-logo" src="assets/img/icons/WORK/drone building.PNG">
                                    <h2 class="text card-title  text-center " style="text-align: center;">DRONE BUILDING</h2>
                                    <h2 class="turn-on text-center " style="text-align: center;">CLICK HERE</h2>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  col-md-6 col-sm-12">
                <div class="card-container">
                    <div class="card">
                        <div class="box">
                            <div class="content">
                                <div class="matter work_1">
                                    <div class="m_cnt">
                                        <p>
                                            Come, learn and explore the field of machine learning starting from the fundamentals to implementation in python.
                                        </p>

                                    </div>
                                    <div class="m_btn">

                                        <button id="div-7" type="button" class="btn btn-success">View Details</button>
                                    </div>
                                    <!-- <a id="div-1" class="inside-page__btn inside-page__btn-2" style="color: #66fcf1;">View details</a> -->
                                </div>
                            </div>
                            <div class="image">
                                <div class="img-div">
                                    <img class="event-logo" src="assets/img/icons/WORK/machine learning.PNG">
                                    <h2 class="text card-title  text-center top-20" style="text-align: center;">MACHINE LEARNING USING PYTHON
                                    </h2>
                                    <h2 class="turn-on " style="text-align: center;">CLICK HERE</h2>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  col-md-6 col-sm-12">
                <div class="card-container">
                    <div class="card">
                        <div class="box">
                            <div class="content">
                                <div class="matter work_1">
                                    <div class="m_cnt">
                                        <p>
                                            If you’re interested in the automobile industry, then you cannot miss out on this wonderful opportunity to learn from field experts and explore the technology.
                                        </p>
                                    </div>
                                    <div class="m_btn">

                                        <button id="div-8" type="button" class="btn btn-success">View Details</button>
                                    </div>

                                </div>
                            </div>
                            <div class="image">
                                <div class="img-div">
                                    <img class="event-logo" src="assets/img/icons/WORK/automotive embedded system.PNG">
                                    <h2 class="text card-title  text-center top-20" style="text-align: center;">AUTOMOTIVE EMBEDDED SYSTEMS</h2>
                                    <h2 class="turn-on text-center " style="text-align: center;">CLICK HERE</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2  col-md-6 col-sm-12 hide-2"></div>
            <div class="col-lg-4  col-md-6 col-sm-12">
                <div class="card-container">
                    <div class="card">
                        <div class="box">
                            <div class="content">
                                <div class="matter work_1">
                                    <div class="m_cnt">
                                        <p>
                                            Get hands-on experience in prototyping some applications of embedded signal processing.
                                        </p>
                                    </div>
                                    <div class="m_btn">

                                        <button id="div-9" type="button" class="btn btn-success">View Details</button>
                                    </div>
                                    <!-- <a id="div-1" class="inside-page__btn inside-page__btn-2" style="color: #66fcf1;">View details</a> -->
                                </div>
                            </div>
                            <div class="image">
                                <div class="img-div">
                                    <img class="event-logo" src="assets/img/icons/WORK/embedded signal processing.PNG">
                                    <h2 class="text card-title  text-center top-20" style="text-align: center;">EMBEDDED SIGNAL PROCESSING
                                    </h2>
                                    <h2 class="turn-on " style="text-align: center;">CLICK HERE</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  col-md-6 col-sm-12">
                <div class="card-container">
                    <div class="card">
                        <div class="box">
                            <div class="content">
                                <div class="matter work_1">
                                    <div class="m_cnt">

                                        <p>
                                            Industrial Automation. Get trained in the use of control systems and various tools for handling different types of machinery and processes used in industries.
                                        </p>
                                    </div>
                                    <div class="m_btn">

                                        <button id="div-10" type="button" class="btn btn-success">View Details</button>
                                    </div>
                                    <!-- <a id="div-1" class="inside-page__btn inside-page__btn-2" style="color: #66fcf1;">View details</a> -->
                                </div>
                            </div>
                            <div class="image">
                                <div class="img-div">
                                    <img class="event-logo" src="assets/img/icons/WORK/schneider.PNG" alt="">
                                    <h2 class="text card-title  text-center top-20" style="text-align: center;">INDUSTRIAL AUTOMATION - IIoT</h2>
                                    <h2 class="turn-on " style="text-align: center;">CLICK HERE</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <?php require_once 'footer.php'; ?>

    <div id="id-modal-1" class="modal">
        <div class="modal-content">
            <span class="modal_close modal_close_1">&times;</span>
            <h4>AiROS</h4>
            <div class="description grid-lg-12 grid-md-12 grid-sm-12 grid-xs-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingten">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseone" aria-expanded="false" aria-controls="collapseThree">
                                    DESCRIPTION<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapseone" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                            <div class="panel-body">
                                <p>
                                <h5>AiROS</h5>
                                <i class="fa fa" style="font-size:10px"></i>This software paper presentation event is the perfect platform for people who are interested in presenting their skills in the trending software domains. The topics provided are Digital Processing Techniques, Virtual Reality, Cloud Computing, Web Application Development, Telemedicine, and Blockchain Technology. We anticipate your innovative ideas to contribute to these technologies. So what are you waiting for, Techies? Get in on the action! It's time to get in shape!<br><br>
                                <h5>Fees:</h5>The teams whose abstract got selected must pay a fee of <b>Rs.200</b> excluding the general registration fee to present the paper.


                                <br><br>


                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetwo" aria-expanded="false" aria-controls="collapseTwo">
                                    GENERAL RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapsetwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>
                                <ol>
                                    1.Every participant must have registered individually before reporting to the event. If a team has 2 or more members each member must have registered individually.<br>
                                    2. All participants are required to follow appropriate dress code (Boys- Shirt/Pant, Girls-Kurthi/Chudidhar).<br>
                                    3. All registered participants must collect their respective SRiSHTi ID Cards and campus map from the registration desk on the day of the events.<br>
                                    4. ID card verification will be carried out before the event starts and the participant is required to have their ID card throughout the event.<br>
                                    5. Late entries for events and workshops will not be permitted, the participants are also advised to report to the campus 30 mins prior to have a hassle-free experience.<br>
                                    6. Important Guidelines and Information regarding the Symposium will be conveyed at the Inauguration Event (October 29th 8:00 am) of SRiSHTi 2k22, so participants must attend the same without fail.<br>
                                    7. Any discrepancy during the event should be immediately reported to the event convenor and necessary actions would be taken. Any late response will not be taken into consideration.<br>
                                    8. The judges’ decision is final for all the events and will not be subjected to further discussion. Indulging in any malpractices will lead to immediate disqualification.<br>
                                    9. All the participants should pay the general registration fee to attend the events. Apart from this, events such as Paper Presentation, Flagship Events, Workshop will have additional fee.<br>
                                    10. Any forms of Inappropriate Behaviour will be highly condemned and necessary actions will be taken.<br>
                                    11. All events will conclude by 3:00 pm on October 30th and the prize winners will be announced immediately at the valedictory event (October 30th 4:00 pm) of SRiSHTi 2k22.
                                    <br>
                                </ol>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    EVENT RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>
                                <div class="bullet">
                                    1. Each team can have a maximum of 3 members.<br>
                                    2. All the participants are supposed to participate with their Srishti ID. Spot entries will not be allowed.<br>
                                    3. Participants are supposed to mail their abstract in PDF format on or before 22 OCTOBER to <a href="mailto:airos2k22srishti@gmail.com">"airos2k22srishti@gmail.com".</a><br>
                                    4. The abstract should be in IEEE format and should not exceed a page.<br>
                                    5. Internet resources are allowed. However, direct plagiarism of ideas is strictly prohibited.<br>
                                    6. Abstracts sent after the deadline given will not be considered.
                                    <br>
                                    7. The abstracts will be scrutinized and the selected teams will be informed via mail.<br>
                                    9. The participants should be present in the informed venue before or on time.<br>
                                    10.The participants will be given 15 minutes for presenting their ideas and solution followed by 5 minutes of the question-and-answer session.<br>
                                    11. Submission of projects (implementation of the ideas) will be an added credit.<br>
                                    12. The judges’ decision is final and no correspondence will be entered into.


                                    <br><br>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingone">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapseone">
                                    DATE AND TIME
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingone">
                            <div class="panel-body">
                                <p>
                                <h5>DATE</h5>
                                <div>29 and 30 OCTOBER 2022</div><br>
                                <h5>TIME</h5>
                                <div>You will be informed seperately about your specific timing</div><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingfive">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                    CONTACTS
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                            <div class="panel-body">
                                <ul>

                                    <li><a style="color: white;" href=" tel:+9174484 52533">KARTHI KEYAN N - 74484 52533
                                        </a></li>
                                    <li><a style="color: white;" href=" tel:+9198949 76800">SURESHKUMAR R - 98949 76800
                                        </a></li>
                                    <li><a style="color: white;" href=" tel:+9196292 29640">DEEPAK PANDIAN - 96292 29640
                                        </a></li>
                                </ul><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h4 style="font-size: 20px; color: white;">There's a treasure waiting for the winners.</h4><br>
            <!--<button class="coming_soon">Coming soon</button>-->
            <center><button type="button" class="submitBtn" id="btn_1"><b>Register</b></button></center>
        </div>
    </div>





    <div id="id-modal-2" class="modal">
        <div class="modal-content">
            <span class="modal_close modal_close_2">&times;</span>
            <h4>TECHNOVATION</h4>
            <div class="description grid-lg-12 grid-md-12 grid-sm-12 grid-xs-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapseThree">
                                    DESCRIPTION<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                            <div class="panel-body">
                                <p>
                                <h5>TECHNOVATION</h5>
                                <i class="fa fa" style="font-size:10px"></i>Looking for a suitable platform to present your innovative ideas related to hardware? Do you wish to develop your research abilities and technical skills? Want to know more about the current developments in your particular field of interest? Look no further, Technovation is just the event for you! The goal of this event is to assemble a collection of interconnected circuit elements that perform a particular objective function. The topics may range from the domains like Signal processing, Control
                                Systems, Sensors and actuators, Communication systems, Integrated Circuits, Electric Drives and Embedded Systems. Register and join us on this quest for knowledge!<br><br>
                                <h5>Fees:</h5>The teams whose abstract got selected must pay a fee of <b>Rs.200</b> excluding the general registration fee to present the paper.


                                <br><br>


                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseseven" aria-expanded="false" aria-controls="collapseTwo">
                                    GENERAL RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapseseven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>1.Every participant must have registered individually before reporting to the event. If a team has 2 or more members each member must have registered individually.<br>
                                    2. All participants are required to follow appropriate dress code (Boys- Shirt/Pant, Girls-Kurthi/Chudidhar).<br>
                                    3. All registered participants must collect their respective SRiSHTi ID Cards and campus map from the registration desk on the day of the events.<br>
                                    4. ID card verification will be carried out before the event starts and the participant is required to have their ID card throughout the event.<br>
                                    5. Late entries for events and workshops will not be permitted, the participants are also advised to report to the campus 30 mins prior to have a hassle-free experience.<br>
                                    6. Important Guidelines and Information regarding the Symposium will be conveyed at the Inauguration Event (October 29th 8:00 am) of SRiSHTi 2k22, so participants must attend the same without fail.<br>
                                    7. Any discrepancy during the event should be immediately reported to the event convenor and necessary actions would be taken. Any late response will not be taken into consideration.<br>
                                    8. The judges’ decision is final for all the events and will not be subjected to further discussion. Indulging in any malpractices will lead to immediate disqualification.<br>
                                    9. All the participants should pay the general registration fee to attend the events. Apart from this, events such as Paper Presentation, Flagship Events, Workshop will have additional fee.<br>
                                    10. Any forms of Inappropriate Behaviour will be highly condemned and necessary actions will be taken.<br>
                                    11. All events will conclude by 3:00 pm on October 30th and the prize winners will be announced immediately at the valedictory event (October 30th 4:00 pm) of SRiSHTi 2k22.
                                    <br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseeight" aria-expanded="false" aria-controls="collapseThree">
                                    EVENT RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapseeight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>
                                <div class="bullet">
                                    1. Each team can have a maximum of 3 members.<br>
                                    2. All the participants are supposed to participate with their Srishti ID. Spot entries will not be allowed.<br>
                                    3. Participants are supposed to mail their abstract in PDF format on or before October 22 to <a href="mailto:technovationsrishti2k22@gmail.com">"technovationsrishti2k22@gmail.com".</a><br>
                                    4. The abstract should be in IEEE format and should not exceed a page.<br>
                                    5. Internet resources are allowed. However, direct plagiarism of ideas is strictly prohibited.<br>
                                    6. Abstracts sent after the deadline given will not be considered.<br>
                                    7. The abstracts will be scrutinized and the selected teams will be informed via mail.<br>
                                    8. All the Selected team should send their presentation document on or before October 22.<br>
                                    9. The participants should be present in the informed venue before or on time.<br>
                                    10. The participants will be given 15 minutes for presenting their ideas and solution followed by 5 minutes of the question-and-answer session.<br>
                                    11. Submission of projects (implementation of the ideas) will be an added credit.<br>
                                    12. The judges’ decision is final and no correspondence will be entered into.

                                    <br><br>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingone">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsenine" aria-expanded="false" aria-controls="collapseone">
                                    DATE AND TIME
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapsenine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingone">
                            <div class="panel-body">
                                <p>
                                <h5>DATE</h5>
                                <div>29 OCTOBER 2022</div><br>
                                <h5>TIME</h5>
                                <div>You will be informed seperately about your specific timing</div><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingfive">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseten" aria-expanded="false" aria-controls="collapseten">
                                    CONTACTS
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseten" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                            <div class="panel-body">
                                <ul>
                                    <li><a style="color: white;" href=" tel:+9190800 45415 ">AJAY P - 90800 45415 </a></li>
                                    <li><a style="color: white;" href=" tel:+9193455 44874 ">PRIYANKA G S - 93455 44874 </a></li>
                                    <li><a style="color: white;" href=" tel:+9163699 53122">SANJANA RAGHAVAN - 63699 53122
                                        </a></li>
                                </ul><br>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h4 style="font-size: 20px; color: white;">There's a treasure waiting for the winners.</h4><br>
            <!--<button class="coming_soon">Coming soon</button>-->
            <center><button type="button" class="submitBtn" id="btn_2"><b>Register</b></button></center>
        </div>
    </div>




    <div id="id-modal-3" class="modal">
        <div class="modal-content">
            <span class="modal_close modal_close_3">&times;</span>
            <h4>
                INNOVALANZ</h4>
            <div class="description grid-lg-12 grid-md-12 grid-sm-12 grid-xs-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseeleven" aria-expanded="false" aria-controls="collapseThree">
                                    DESCRIPTION<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapseeleven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                            <div class="panel-body">
                                <p>
                                <h5>
                                    INNOVALANZ</h5>
                                <i class="fa fa" style="font-size:10px"></i>Welcome to InnovalanZ, a paper presentation event that brings forth an occasion for you, the pathfinders, to come up with astonishing innovative ideas. The ideas are expected to make everyday life easier and more comfortable, thus helping us move towards a better future. The choice of the problem is in your hands! It may be anything - from a health assistant, traffic controller, or agricultural equipment and goes on to an uncountable number of things that you can find an idea for. Get out of the box, think and present us with your priceless ideas!
                                <br><br>
                                <h5>Fees:</h5>The teams whose abstract got selected must pay a fee of <b>Rs.200</b> excluding the general registration fee to present the paper.


                                <br><br>


                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwo">
                                    GENERAL RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapseTwelve" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>1.Every participant must have registered individually before reporting to the event. If a team has 2 or more members each member must have registered individually.<br>
                                    2. All participants are required to follow appropriate dress code (Boys- Shirt/Pant, Girls-Kurthi/Chudidhar).<br>
                                    3. All registered participants must collect their respective SRiSHTi ID Cards and campus map from the registration desk on the day of the events.<br>
                                    4. ID card verification will be carried out before the event starts and the participant is required to have their ID card throughout the event.<br>
                                    5. Late entries for events and workshops will not be permitted, the participants are also advised to report to the campus 30 mins prior to have a hassle-free experience.<br>
                                    6. Important Guidelines and Information regarding the Symposium will be conveyed at the Inauguration Event (October 29th 8:00 am) of SRiSHTi 2k22, so participants must attend the same without fail.<br>
                                    7. Any discrepancy during the event should be immediately reported to the event convenor and necessary actions would be taken. Any late response will not be taken into consideration.<br>
                                    8. The judges’ decision is final for all the events and will not be subjected to further discussion. Indulging in any malpractices will lead to immediate disqualification.<br>
                                    9. All the participants should pay the general registration fee to attend the events. Apart from this, events such as Paper Presentation, Flagship Events, Workshop will have additional fee.<br>
                                    10. Any forms of Inappropriate Behaviour will be highly condemned and necessary actions will be taken.<br>
                                    11. All events will conclude by 3:00 pm on October 30th and the prize winners will be announced immediately at the valedictory event (October 30th 4:00 pm) of SRiSHTi 2k22.
                                    <br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThirteen" aria-expanded="false" aria-controls="collapseThree">
                                    EVENT RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapseThirteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>
                                <div class="bullet">
                                    1. Each team can have a maximum of 3 members and minimum of 1.<br>
                                    2. All the participants are supposed to participate with their Srishti ID. Spot entries will not be allowed.<br>
                                    3. Participants are supposed to mail their abstract in PDF format on or before October 22 to <a href="mailto:innovalanz2k22@gmail.com">"innovalanz2k22@gmail.com".</a><br>
                                    4. The abstract (problem statement and the idea) should be in IEEE format and should not exceed a page.<br>
                                    5.The abstracts will be scrutinized and the selected teams will be informed
                                    via mail.<br>
                                    6. Abstracts sent after the deadline given will not be considered. All the selected teams should send their presentation document on or before October 22.
                                    <br>
                                    7. The participants should be present in the informed venue on time.<br>
                                    8. The participants will be given 15 minutes for presenting their ideas and solution followed by 5 minutes of question-and-answer session.<br>
                                    9. Internet resources are allowed. However, direct plagiarism of ideas is strictly prohibited.<br>
                                    10. Submission of projects (implementation of the ideas) will be an added credit.<br>

                                    11. The judges’ decision is final and no correspondence will be entered into.

                                    <br><br>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingone">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefourteen" aria-expanded="false" aria-controls="collapseone">
                                    DATE AND TIME
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapsefourteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingone">
                            <div class="panel-body">
                                <p>
                                <h5>DATE</h5>
                                <div>29 OCTOBER 2022</div><br>
                                <h5>TIME</h5>
                                <div>You will be informed seperately about your specific timing</div><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingfive">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefifteen" aria-expanded="false" aria-controls="collapsefive">
                                    CONTACTS
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapsefifteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                            <div class="panel-body">
                                <ul>
                                    <li><a style="color: white;" href=" tel:+9197515 86191 ">ANUBHARATHI V S - 97515 86191
                                        </a></li>
                                    <li><a style="color: white;" href=" tel:+9186101 34467">MUGESH KUMAR N - 86101 34467 </a></li>
                                    <li><a style="color: white;" href=" tel:+9193614 46010">MOHAMED ASLAM - 93614 46010
                                        </a></li>
                                </ul><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h4 style="font-size: 20px; color: white;">There's a treasure waiting for the winners.</h4><br>
            <!--<button class="coming_soon">Coming soon</button>-->
            <center><button type="button" class="submitBtn" id="btn_3"><b>Register</b></button></center>
        </div>
    </div>




    <div id="id-modal-4" class="modal">
        <div class="modal-content">
            <span class="modal_close modal_close_4">&times;</span>
            <h4>TECH-O-STER</h4>
            <div class="description grid-lg-12 grid-md-12 grid-sm-12 grid-xs-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesixteen" aria-expanded="false" aria-controls="collapseThree">
                                    DESCRIPTION<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapsesixteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                            <div class="panel-body">
                                <p>
                                <h5>TECH-O-STER</h5>
                                <i class="fa fa" style="font-size:10px"></i>Have you wanted to present your ideas but were stuck by words? It it easier to show it using visual aids? Then fear not, for Tech-O-Ster is not your usual paper presentation but a Poster presentation, where participants can freely present their innovative ideas in an A3 poster by combining text and graphics. So, charts, graphs, mindmaps, and anything else can be used to show your research in emerging technologies in fields such as Artificial Organs, Smart Automation, Cloud Computing, Drug Delivery Systems, etc. For all the brilliant minds out there, we look forward to seeing your passion!<br><br>
                                <h5>Fees:</h5>The teams whose abstract got selected must pay a fee of <b>Rs.200</b> excluding the general registration fee to present the paper.


                                <br><br>


                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseseventeen" aria-expanded="false" aria-controls="collapseTwo">
                                    GENERAL RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapseseventeen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>1.Every participant must have registered individually before reporting to the event. If a team has 2 or more members each member must have registered individually.<br>
                                    2. All participants are required to follow appropriate dress code (Boys- Shirt/Pant, Girls-Kurthi/Chudidhar).<br>
                                    3. All registered participants must collect their respective SRiSHTi ID Cards and campus map from the registration desk on the day of the events.<br>
                                    4. ID card verification will be carried out before the event starts and the participant is required to have their ID card throughout the event.<br>
                                    5. Late entries for events and workshops will not be permitted, the participants are also advised to report to the campus 30 mins prior to have a hassle-free experience.<br>
                                    6. Important Guidelines and Information regarding the Symposium will be conveyed at the Inauguration Event (October 29th 8:00 am) of SRiSHTi 2k22, so participants must attend the same without fail.<br>
                                    7. Any discrepancy during the event should be immediately reported to the event convenor and necessary actions would be taken. Any late response will not be taken into consideration.<br>
                                    8. The judges’ decision is final for all the events and will not be subjected to further discussion. Indulging in any malpractices will lead to immediate disqualification.<br>
                                    9. All the participants should pay the general registration fee to attend the events. Apart from this, events such as Paper Presentation, Flagship Events, Workshop will have additional fee.<br>
                                    10. Any forms of Inappropriate Behaviour will be highly condemned and necessary actions will be taken.<br>
                                    11. All events will conclude by 3:00 pm on October 30th and the prize winners will be announced immediately at the valedictory event (October 30th 4:00 pm) of SRiSHTi 2k22.
                                    <br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseeighteen" aria-expanded="false" aria-controls="collapseThree">
                                    EVENT RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapseeighteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>
                                <div class="bullet">
                                    1.Each team can have a maximum of two members<br>
                                    2.All the participants are supposed to participate with their Srishti ID. Spot
                                    entries will not be allowed.<br>
                                    3. Participants are supposed to mail their poster in any of the formats mentioned (JPEG/JPG/PNG/PDF) on or before October 22 to <a href="mailto:techoster2k22@gmail.com">"techoster2k22@gmail.com".</a><br>
                                    4. Internet resources are allowed. However, direct plagiarism of ideas is strictly prohibited.<br>
                                    5. Posters sent after the deadline given will not be considered.<br>
                                    6. The poster will be scrutinized and the selected teams will be informed via mail.
                                    <br>
                                    7. The participants should be present in the informed venue before or on time<br>
                                    8. The participants will be given 10 minutes for presenting their ideas and solution followed by 5 minutes of question-and-answer session.<br>
                                    9. The judges’ decision is final and no correspondence will be entered into.
                                    <br><br>
                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingone">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsenineteen" aria-expanded="false" aria-controls="collapseone">
                                    DATE AND TIME
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapsenineteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingone">
                            <div class="panel-body">
                                <p>
                                <h5>DATE</h5>
                                <div>29 OCTOBER 2022</div><br>
                                <h5>TIME</h5>
                                <div>You will be informed seperately about your specific timing</div><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingfive">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetwenty" aria-expanded="false" aria-controls="collapsefive">
                                    CONTACTS
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapsetwenty" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                            <div class="panel-body">
                                <ul>
                                    <li><a style="color: white;" href=" tel:+9194866 40540 ">MANOBALAN- 94866 40540 </a></li>
                                    <li><a style="color: white;" href=" tel:+9196500 65255">DEEKSHA RAJESH - 96500 65255 </a></li>
                                    <li><a style="color: white;" href=" tel:+9196988 70005">YUVANDASS R - 96988 70005 </a></li>
                                </ul><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h4 style="font-size: 20px; color: white;">There's a treasure waiting for the winners.</h4><br>
            <!--<button class="coming_soon">Coming soon</button>-->
            <center><button type="button" class="submitBtn" id="btn_4"><b>Register</b></button></center>
        </div>
    </div>




    <div id="id-modal-5" class="modal">
        <div class="modal-content">
            <span class="modal_close modal_close_5">&times;</span>
            <h4>ARIVARANGAM (அறிவரங்கம்)</h4>
            <div class="description grid-lg-12 grid-md-12 grid-sm-12 grid-xs-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse21" aria-expanded="false" aria-controls="collapseThree">
                                    DESCRIPTION<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse21" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                            <div class="panel-body">
                                <p>
                                <h5>ARIVARANGAM (அறிவரங்கம்)</h5>
                                <i class="fa fa" style="font-size:10px"></i>"அறிவு அழிவு வராமல் காக்கும் கருவியாகும்"
                                ARIVARANGAM (அறிவரங்கம்) is a Tamil Paper Presentation event that bestows a platform for embedded engineers to present their fruitful ideas in the field of Future in Electronic Chips and Integration. The topics may range from Artificial intelligence, Wireless technology, Biomedical instrumentation, Cloud computing, Embedded Systems, Nano-Electronic Systems, Sensor-based systems, and other similar topics in the domain. So, go find some ingenious ideas, lay the groundwork, and shoot some insightful abstracts upon us!
                                "<br><br>
                                <h5>Fees:</h5>The teams whose abstract got selected must pay a fee of <b>Rs.200</b> excluding the general registration fee to present the paper.


                                <br><br>


                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse22" aria-expanded="false" aria-controls="collapseTwo">
                                    GENERAL RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse22" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>1.Every participant must have registered individually before reporting to the event. If a team has 2 or more members each member must have registered individually.<br>
                                    2. All participants are required to follow appropriate dress code (Boys- Shirt/Pant, Girls-Kurthi/Chudidhar).<br>
                                    3. All registered participants must collect their respective SRiSHTi ID Cards and campus map from the registration desk on the day of the events.<br>
                                    4. ID card verification will be carried out before the event starts and the participant is required to have their ID card throughout the event.<br>
                                    5. Late entries for events and workshops will not be permitted, the participants are also advised to report to the campus 30 mins prior to have a hassle-free experience.<br>
                                    6. Important Guidelines and Information regarding the Symposium will be conveyed at the Inauguration Event (October 29th 8:00 am) of SRiSHTi 2k22, so participants must attend the same without fail.<br>
                                    7. Any discrepancy during the event should be immediately reported to the event convenor and necessary actions would be taken. Any late response will not be taken into consideration.<br>
                                    8. The judges’ decision is final for all the events and will not be subjected to further discussion. Indulging in any malpractices will lead to immediate disqualification.<br>
                                    9. All the participants should pay the general registration fee to attend the events. Apart from this, events such as Paper Presentation, Flagship Events, Workshop will have additional fee.<br>
                                    10. Any forms of Inappropriate Behaviour will be highly condemned and necessary actions will be taken.<br>
                                    11. All events will conclude by 3:00 pm on October 30th and the prize winners will be announced immediately at the valedictory event (October 30th 4:00 pm) of SRiSHTi 2k22.
                                    <br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse23" aria-expanded="false" aria-controls="collapseThree">
                                    EVENT RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse23" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>
                                <div class="bullet">
                                    1. Each team can have a maximum of three members.<br>
                                    2.All the participants are supposed to participate with their Srishti ID. Spot
                                    entries will not be allowed.<br>
                                    3. Participants are supposed to send their abstracts in pdf format on or
                                    before 22 October to the mail id <a href="mailto:arivarangam2k22srishti@gmail.com">"arivarangam2k22srishti@gmail.com"</a>.<br>
                                    4. Internet resources are allowed. However, direct plagiarism of ideas is strictly prohibited.<br>
                                    5. The entire content should be in Tamil and abstract should not exceed 250 words .<br>
                                    6. The abstracts will be scrutinized and the selected teams will be informed via mail.
                                    <br>
                                    7. No abstracts sent after the deadline will be considered.<br>
                                    8. The participants will be given 20 minutes for presenting their ideas followed by 5 minutes of question-and-answer session.<br>
                                    9. The participants will be allotted with specific timings and they must attend it without any delay.<br>
                                    10. Submission of projects will be an added credit.</br>
                                    11. The presentation and explanation should be done only in Tamil language</br>
                                    12. The judges’ decision is final and no correspondence will be entered into.
                                    <br><br>
                                </div>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingone">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse24" aria-expanded="false" aria-controls="collapseone">
                                    DATE AND TIME
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapse24" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingone">
                            <div class="panel-body">
                                <p>
                                <h5>DATE</h5>
                                <div>29 OCTOBER 2022</div><br>
                                <h5>TIME</h5>
                                <div>You will be informed seperately about your specific timing</div><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingfive">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse25" aria-expanded="false" aria-controls="collapse25">
                                    CONTACTS
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapse25" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                            <div class="panel-body">
                                <ul>
                                    <li><a style="color: white;" href=" tel:+9197506 43025">KANI BRAMA GIRI S - 97506 43025 </a></li>
                                    <li><a style="color: white;" href=" tel:+91 97902 34539">PRAKALYA SK - 97902 34539 </a></li>
                                    <li><a style="color: white;" href=" tel:+9172992 89040 ">KRISHNAN S - 72992 89040 </a></li>

                                </ul><br>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h4 style="font-size: 20px; color: white;">There's a treasure waiting for the winners.</h4><br>
            <!--<button class="coming_soon">Coming soon</button>-->
            <center><button type="button" class="submitBtn" id="btn_5"><b>Register</b></button></center>
        </div>
    </div>


    <!--WORKSHOP-->

    <div id="id-modal-6" class="modal">
        <div class="modal-content">
            <span class="modal_close modal_close_6">&times;</span>
            <h4>DRONE BUILDING</h4>
            <div class="description grid-lg-12 grid-md-12 grid-sm-12 grid-xs-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesixteen" aria-expanded="false" aria-controls="collapseThree">
                                    DESCRIPTION<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapsesixteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                            <div class="panel-body">
                                <p>
                                <h5>DRONE BUILDING</h5>
                                <i class="fa fa" style="font-size:10px"></i>The workshop focuses on the live construction of the drone with its theory in parallel. A racing drone is built, which is relatively less complex compared to the other industrial standard drones,. This is specifically chosen for beginners who have a budding interest in drone theory. The workshop will consist of assembling a drone and study of its internal parts, and the theory behind it, with live demonstrations. The participants can learn various aspects of drone building like Basics of Drone theory, Building of a Drone, Mechanics of a drone, Physics behind the working of a drone, and Electronics of Drones.
                                <br><br>
                                <h5>Fees:</h5>Each participant must pay a workshop fee of <b>Rs.800</b> exclusive of the general fee to register for the workshop.


                                <br><br>


                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseseventeen" aria-expanded="false" aria-controls="collapseTwo">
                                    GENERAL RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapseseventeen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>1.Every participant must have registered individually before reporting to the event. If a team has 2 or more members each member must have registered individually.<br>
                                    2. All participants are required to follow appropriate dress code (Boys- Shirt/Pant, Girls-Kurthi/Chudidhar).<br>
                                    3. All registered participants must collect their respective SRiSHTi ID Cards and campus map from the registration desk on the day of the events.<br>
                                    4. ID card verification will be carried out before the event starts and the participant is required to have their ID card throughout the event.<br>
                                    5. Late entries for events and workshops will not be permitted, the participants are also advised to report to the campus 30 mins prior to have a hassle-free experience.<br>
                                    6. Important Guidelines and Information regarding the Symposium will be conveyed at the Inauguration Event (October 29th 8:00 am) of SRiSHTi 2k22, so participants must attend the same without fail.<br>
                                    7. Any discrepancy during the event should be immediately reported to the event convenor and necessary actions would be taken. Any late response will not be taken into consideration.<br>
                                    8. The judges’ decision is final for all the events and will not be subjected to further discussion. Indulging in any malpractices will lead to immediate disqualification.<br>
                                    9. All the participants should pay the general registration fee to attend the events. Apart from this, events such as Paper Presentation, Flagship Events, Workshop will have additional fee.<br>
                                    10. Any forms of Inappropriate Behaviour will be highly condemned and necessary actions will be taken.<br>
                                    11. All events will conclude by 3:00 pm on October 30th and the prize winners will be announced immediately at the valedictory event (October 30th 4:00 pm) of SRiSHTi 2k22.
                                    <br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseeighteen" aria-expanded="false" aria-controls="collapseThree">
                                    PRE-REQUISITE<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapseeighteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>
                                <div class="bullet">
                                    Only your enthusiastic participation and undivided attention. Let's start from scratch!

                                </div>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingone">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsenineteen" aria-expanded="false" aria-controls="collapseone">
                                    DATE AND TIME
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapsenineteen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingone">
                            <div class="panel-body">
                                <p>
                                <h5>DATE</h5>
                                <div>29 and 30 October 2022</div><br>
                                <h5>TIME</h5>
                                <div>11.00AM - 4:00PM</div><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingfive">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsetwenty" aria-expanded="false" aria-controls="collapsefive">
                                    CONTACTS
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapsetwenty" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                            <div class="panel-body">
                                <ul>
                                    <li><a style="color: white;" href=" tel:+9187784 37301">PRIYADARSHINI.P.S - 87784 37301 </a></li>
                                    <li><a style="color: white;" href=" tel:+9196004 29401">RAKSHA - 96004 29401 </a></li>
                                    <li><a style="color: white;" href=" tel:+9199947 44553">ARIKARAN R - 99947 44553 </a></li>
                                </ul><br>
                                <h5>RESOURCE PERSONS</h5>
                                <h4 style="color: #d1d7e0; font-size:18px; text-align:left!important;">Team from Skyx AeroSpace</h4>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--<button class="coming_soon">Coming soon</button>-->
            <center><button type="button" class="submitBtn" id="btn_6"><b>Register</b></button></center>
        </div>
    </div>




    <div id="id-modal-7" class="modal">
        <div class="modal-content">
            <span class="modal_close modal_close_7">&times;</span>
            <h4>MACHINE LEARNING USING PYTHON</h4>
            <div class="description grid-lg-12 grid-md-12 grid-sm-12 grid-xs-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse21" aria-expanded="false" aria-controls="collapseThree">
                                    DESCRIPTION<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse21" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                            <div class="panel-body">
                                <p>
                                <h5>MACHINE LEARNING USING PYTHON</h5>
                                <i class="fa fa" style="font-size:10px"></i>The workshop will focus on the fundamentals of Machine Learning, the knowledge of Python which is needed to implement Machine Learning Algorithms, and the implementation of Machine Learning Algorithms in Python which will give the participants a hands-on-experience and help them gain the required confidence and the knowledge to take up an AI Project in future. This workshop is perfect for beginners in Machine Learning, especially I and II Year students.

                                <br><br>
                                <h5>Fees:</h5>Each participant must pay a workshop fee of <b>Rs.600</b> exclusive of the general fee to register for the workshop.


                                <br><br>


                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse22" aria-expanded="false" aria-controls="collapseTwo">
                                    GENERAL RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse22" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>1.Every participant must have registered individually before reporting to the event. If a team has 2 or more members each member must have registered individually.<br>
                                    2. All participants are required to follow appropriate dress code (Boys- Shirt/Pant, Girls-Kurthi/Chudidhar).<br>
                                    3. All registered participants must collect their respective SRiSHTi ID Cards and campus map from the registration desk on the day of the events.<br>
                                    4. ID card verification will be carried out before the event starts and the participant is required to have their ID card throughout the event.<br>
                                    5. Late entries for events and workshops will not be permitted, the participants are also advised to report to the campus 30 mins prior to have a hassle-free experience.<br>
                                    6. Important Guidelines and Information regarding the Symposium will be conveyed at the Inauguration Event (October 29th 8:00 am) of SRiSHTi 2k22, so participants must attend the same without fail.<br>
                                    7. Any discrepancy during the event should be immediately reported to the event convenor and necessary actions would be taken. Any late response will not be taken into consideration.<br>
                                    8. The judges’ decision is final for all the events and will not be subjected to further discussion. Indulging in any malpractices will lead to immediate disqualification.<br>
                                    9. All the participants should pay the general registration fee to attend the events. Apart from this, events such as Paper Presentation, Flagship Events, Workshop will have additional fee.<br>
                                    10. Any forms of Inappropriate Behaviour will be highly condemned and necessary actions will be taken.<br>
                                    11. All events will conclude by 3:00 pm on October 30th and the prize winners will be announced immediately at the valedictory event (October 30th 4:00 pm) of SRiSHTi 2k22.
                                    <br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse23" aria-expanded="false" aria-controls="collapseThree">
                                    PRE-REQUISITES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse23" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>
                                <div class="bullet">
                                    Hardware requirements: A laptop with internet connectivity, mobile phone with hotspot<br>
                                    Software Requirements: Anaconda Distribution Python 3.x

                                </div>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingone">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse24" aria-expanded="false" aria-controls="collapseone">
                                    DATE AND TIME
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapse24" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingone">
                            <div class="panel-body">
                                <p>
                                <h5>DATE</h5>
                                <div>29 and 30 October 2022</div><br>
                                <h5>TIME</h5>
                                <div>11.00AM - 4.00PM</div><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingfive">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse25" aria-expanded="false" aria-controls="collapse25">
                                    CONTACTS
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapse25" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                            <div class="panel-body">
                                <ul>
                                    <li><a style="color: white;" href=" tel:+9187540 16156">RASHMITHA R - 8754016156</a></li>
                                    <li><a style="color: white;" href=" tel:+9179041 76458">JOTHISH KUMAR S V - 79041 76458</a></li>
                                    <li><a style="color: white;" href=" tel:+9177087 65116">ARUN KUMAR D - 77087 65116</a></li>
                                </ul><br>
                                <h5>RESOURCE PERSON</h5>
                                <h4 style="color: #d1d7e0; font-size:18px; text-align:left!important;">MR. SUJITH KUMAR M A</h4>
                                



                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--<button class="coming_soon">Coming soon</button>-->
            <center><button type="button" class="submitBtn" id="btn_7"><b>Register</b></button></center>
        </div>
    </div>


    <div id="id-modal-8" class="modal">
        <div class="modal-content">
            <span class="modal_close modal_close_8">&times;</span>
            <h4>AUTOMOTIVE EMBEDDED SYSTEMS</h4>
            <div class="description grid-lg-12 grid-md-12 grid-sm-12 grid-xs-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse21" aria-expanded="false" aria-controls="collapseThree">
                                    DESCRIPTION<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse21" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                            <div class="panel-body">
                                <p>
                                <h5>AUTOMOTIVE EMBEDDED SYSTEMS</h5>
                                <i class="fa fa" style="font-size:10px"></i>The automotive industry is the sixth largest economy in the world today, producing around 70 million cars every year and making an important contribution to government revenues all around the world. The main objective of this workshop is to provide an understanding of the technology essential to the design and implementation of an embedded system using suitable hardware and software tools for automotive applications. The auto industry needs electrical, Electronics, and computer engineers in ever-increasing numbers to deal with various electronics in the modern car.

                                <br><br>
                                <h5>Fees:</h5>Each participant must pay a workshop fee of <b>Rs.400</b> exclusive of the general fee to register for the workshop.


                                <br><br>


                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse22" aria-expanded="false" aria-controls="collapseTwo">
                                    GENERAL RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse22" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>1.Every participant must have registered individually before reporting to the event. If a team has 2 or more members each member must have registered individually.<br>
                                    2. All participants are required to follow appropriate dress code (Boys- Shirt/Pant, Girls-Kurthi/Chudidhar).<br>
                                    3. All registered participants must collect their respective SRiSHTi ID Cards and campus map from the registration desk on the day of the events.<br>
                                    4. ID card verification will be carried out before the event starts and the participant is required to have their ID card throughout the event.<br>
                                    5. Late entries for events and workshops will not be permitted, the participants are also advised to report to the campus 30 mins prior to have a hassle-free experience.<br>
                                    6. Important Guidelines and Information regarding the Symposium will be conveyed at the Inauguration Event (October 29th 8:00 am) of SRiSHTi 2k22, so participants must attend the same without fail.<br>
                                    7. Any discrepancy during the event should be immediately reported to the event convenor and necessary actions would be taken. Any late response will not be taken into consideration.<br>
                                    8. The judges’ decision is final for all the events and will not be subjected to further discussion. Indulging in any malpractices will lead to immediate disqualification.<br>
                                    9. All the participants should pay the general registration fee to attend the events. Apart from this, events such as Paper Presentation, Flagship Events, Workshop will have additional fee.<br>
                                    10. Any forms of Inappropriate Behaviour will be highly condemned and necessary actions will be taken.<br>
                                    11. All events will conclude by 3:00 pm on October 30th and the prize winners will be announced immediately at the valedictory event (October 30th 4:00 pm) of SRiSHTi 2k22.
                                    <br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse23" aria-expanded="false" aria-controls="collapseThree">
                                    PRE-REQUISITES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse23" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>
                                <div class="bullet">
                                    Passion towards the topic is all it takes, as we believe in building from the basics!
                                </div>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingone">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse24" aria-expanded="false" aria-controls="collapseone">
                                    DATE AND TIME
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapse24" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingone">
                            <div class="panel-body">
                                <p>
                                <h5>DATE</h5>
                                <div>30 October 2022</div><br>
                                <h5>TIME</h5>
                                <div>10.00AM - 3.00PM</div><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingfive">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse25" aria-expanded="false" aria-controls="collapse25">
                                    CONTACTS
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapse25" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                            <div class="panel-body">
                                <ul>
                                    <li><a style="color: white;" href=" tel:+9196773 98499">SANGEETHA M - 96773 98499 </a></li>
                                    <li><a style="color: white;" href=" tel:+9196770 88436">ARUN MURUGAN G - 96770 88436 </a></li>
                                    <li><a style="color: white;" href=" tel:+9193849 61999"> SANGAVI K - 93849 61999 </a></li>

                                </ul><br>
                                <h5>RESOURCE PERSONS</h5>
                                <h4 style="color: #d1d7e0; font-size:18px; text-align:left!important;">Team from Technovation CADD centre</h4>


                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--<button class="coming_soon">Coming soon</button>-->
            <center><button type="button" class="submitBtn" id="btn_8"><b>Register</b></button></center>
        </div>
    </div>




    <div id="id-modal-9" class="modal">
        <div class="modal-content">
            <span class="modal_close modal_close_9">&times;</span>
            <h4>EMBEDDED SIGNAL PROCESSING</h4>
            <div class="description grid-lg-12 grid-md-12 grid-sm-12 grid-xs-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse41" aria-expanded="false" aria-controls="collapseThree">
                                    DESCRIPTION<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse41" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                            <div class="panel-body">
                                <p>
                                    Participants will be educated in the field of Embedded Signal Processing and its applications; they will be given hands-on-experience in choosing the right processor core: ARM Cortex-A (for Multimedia Applications) / ARM Cortex-R core for Real-Time Applications) / ARM Cortex-M core for Control Applications). Product Prototyping hands-on like E-Bike and IoT applications helps the participants to experience the Embedded Product Design Life Cycle, which accelerates them to create similar but better products soon after the workshop.<br>
                                    <br>
                                <h5>Fees:</h5>Each participant must pay a workshop fee of <b>Rs.600</b> exclusive of the general fee to register for the workshop.<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse42" aria-expanded="false" aria-controls="collapseTwo">
                                    GENERAL RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse42" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>1.Every participant must have registered individually before reporting to the event. If a team has 2 or more members each member must have registered individually.<br>
                                    2. All participants are required to follow appropriate dress code (Boys- Shirt/Pant, Girls-Kurthi/Chudidhar).<br>
                                    3. All registered participants must collect their respective SRiSHTi ID Cards and campus map from the registration desk on the day of the events.<br>
                                    4. ID card verification will be carried out before the event starts and the participant is required to have their ID card throughout the event.<br>
                                    5. Late entries for events and workshops will not be permitted, the participants are also advised to report to the campus 30 mins prior to have a hassle-free experience.<br>
                                    6. Important Guidelines and Information regarding the Symposium will be conveyed at the Inauguration Event (October 29th 8:00 am) of SRiSHTi 2k22, so participants must attend the same without fail.<br>
                                    7. Any discrepancy during the event should be immediately reported to the event convenor and necessary actions would be taken. Any late response will not be taken into consideration.<br>
                                    8. The judges’ decision is final for all the events and will not be subjected to further discussion. Indulging in any malpractices will lead to immediate disqualification.<br>
                                    9. All the participants should pay the general registration fee to attend the events. Apart from this, events such as Paper Presentation, Flagship Events, Workshop will have additional fee.<br>
                                    10. Any forms of Inappropriate Behaviour will be highly condemned and necessary actions will be taken.<br>
                                    11. All events will conclude by 3:00 pm on October 30th and the prize winners will be announced immediately at the valedictory event (October 30th 4:00 pm) of SRiSHTi 2k22.
                                    <br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse43" aria-expanded="false" aria-controls="collapseThree">
                                    PRE - REQUISITE<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse43" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>
                                <div class="bullet"> Interest, enthusiasm and engagement with a hint of energy.

                                </div>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingone">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse44" aria-expanded="false" aria-controls="collapseone">
                                    DATE AND TIME
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapse44" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingone">
                            <div class="panel-body">
                                <p>
                                <h5>DATE</h5>
                                <div>29 and 30 October 2022</div><br>
                                <h5>TIME</h5>
                                <div>11.00AM - 4.00PM</div><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingfive">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse45" aria-expanded="false" aria-controls="collapsefive">
                                    CONTACTS
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapse45" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                            <div class="panel-body">

                                <ul>
                                    <li><a style="color: white;" href=" tel:+9199526 02041">MADHUMITHA S - 99526 02041 </a></li>
                                    <li><a style="color: white;" href=" tel:+9199522 58574">THARUN RAJ - 99522 58574</a></li>
                                    <li><a style="color: white;" href=" tel:+9190030 33373">LOKESH KRISHNAKUMAR - 90030 33373</a></li>


                                </ul><br>
                                <h5>RESOURCE PERSON</h5>
                                <h4 style="color: #d1d7e0; font-size:18px; text-align:left!important;">Dr.Sivaraj D-Assistant Professor,PSG College of Technology</h4>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--<button class="coming_soon">Coming soon</button>-->
            <center><button type="button" class="submitBtn" id="btn_9"><b>Register</b></button></center>
        </div>
    </div>
    </div>


    <div id="id-modal-10" class="modal">
        <div class="modal-content">
            <span class="modal_close modal_close_10">&times;</span>
            <h4>SCHNEIDER ELECTRIC INDUSTRIAL AUTOMATION -IIOT
            </h4>
            <div class="description grid-lg-12 grid-md-12 grid-sm-12 grid-xs-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse46" aria-expanded="false" aria-controls="collapseThree">
                                    DESCRIPTION<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse46" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                            <div class="panel-body">
                                <p>
                                    "As the world is digitalizing at a drastic rate, industries across several sectors are opting for industrial automation. Industrial automation products refer to the use of control systems, such as information technologies, robots, and tools for handling different types of machinery and processes used in several industries. Schneider Electric Industrial Automation - IIoT workshop consists of 4 sessions which introduces participants to Industrial Automation,Schneider IIOTSolutions & Hands-On: EcoS
                                    truxure Data Expert & Plant Advisor
                                    Schneider IIOT Solutions & Hands-On: EcoStruxure Augmented Operator Advisor & Node-Red Reduce Time to Market and Improve Quality using Automation
                                    "<br>
                                    <br>
                                <h5>Fees:</h5>Each participant must pay a workshop fee of <b>Rs.600</b> exclusive of the general fee to register for the workshop.<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse42" aria-expanded="false" aria-controls="collapseTwo">
                                    GENERAL RULES<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse42" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                                <p>1.Every participant must have registered individually before reporting to the event. If a team has 2 or more members each member must have registered individually.<br>
                                    2. All participants are required to follow appropriate dress code (Boys- Shirt/Pant, Girls-Kurthi/Chudidhar).<br>
                                    3. All registered participants must collect their respective SRiSHTi ID Cards and campus map from the registration desk on the day of the events.<br>
                                    4. ID card verification will be carried out before the event starts and the participant is required to have their ID card throughout the event.<br>
                                    5. Late entries for events and workshops will not be permitted, the participants are also advised to report to the campus 30 mins prior to have a hassle-free experience.<br>
                                    6. Important Guidelines and Information regarding the Symposium will be conveyed at the Inauguration Event (October 29th 8:00 am) of SRiSHTi 2k22, so participants must attend the same without fail.<br>
                                    7. Any discrepancy during the event should be immediately reported to the event convenor and necessary actions would be taken. Any late response will not be taken into consideration.<br>
                                    8. The judges’ decision is final for all the events and will not be subjected to further discussion. Indulging in any malpractices will lead to immediate disqualification.<br>
                                    9. All the participants should pay the general registration fee to attend the events. Apart from this, events such as Paper Presentation, Flagship Events, Workshop will have additional fee.<br>
                                    10. Any forms of Inappropriate Behaviour will be highly condemned and necessary actions will be taken.<br>
                                    11. All events will conclude by 3:00 pm on October 30th and the prize winners will be announced immediately at the valedictory event (October 30th 4:00 pm) of SRiSHTi 2k22.
                                    <br><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse47" aria-expanded="false" aria-controls="collapseThree">
                                    PRE - REQUISITE<span> </span></a>
                            </h4>
                        </div>
                        <div id="collapse47" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                <p>
                                <div class="bullet">An open mind determined to learn and grow!</p>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingone">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse48" aria-expanded="false" aria-controls="collapseone">
                                    DATE AND TIME
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapse48" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingone">
                            <div class="panel-body">
                                <p>
                                <h5>DATE</h5>
                                <div>29 October 2022</div><br>
                                <h5>TIME</h5>
                                <div>10.00AM - 4.00PM</div><br></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingfive">
                            <h4 class="panel-title">
                                <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse49" aria-expanded="false" aria-controls="collapsefive">
                                    CONTACTS
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapse49" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                            <div class="panel-body">

                                <ul>
                                    <li><a style="color: white;" href=" tel:+9176039 34166">DHIYANESHWARAN M - 76039 34166 </a></li>
                                    <li><a style="color: white;" href=" tel:+9173393 22852">SUNDHAR - 73393 22852</a></li>
                                    <li><a style="color: white;" href=" tel:+9194877 48935"> DHARANI K - 9487748935</a></li>
                                </ul><br>
                                <h5>RESOURCE PERSONS</h5>
                                <h4 style="color: #d1d7e0; font-size:18px; text-align:left!important;">Team from Schneider Electric India</h4>

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--<button class="coming_soon">Coming soon</button>-->
            <center><button type="button" class="submitBtn" id="btn_10"><b>Register</b></button></center>
        </div>

            <!--<button class="coming_soon">Coming soon</button>-->
            <center><button type="button" class="submitBtn" id="btn_10"><b>Register</b></button></center>
        </div>















        <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
















        <script type="text/javascript">
            var marker = document.querySelector('#sliding-bar');
            var item = document.querySelectorAll('nav a');

            function indicator(e) {
                marker.style.left = e.offsetLeft + "px";
                marker.style.width = e.offsetWidth + "px";
            }

            item.forEach(link => {
                link.addEventListener('click', (e) => {
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
        <script src="assets/js/workshop.js"></script>
        <script src="assets/js/main.js"></script>

</body>

</html>