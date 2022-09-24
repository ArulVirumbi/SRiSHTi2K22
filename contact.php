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

  <title>SRiSHTi 2k22 - CONTACT</title>
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

  <link href="assets/css/contact.css" rel="stylesheet">
  <link href="assets/css/faq.css" rel="stylesheet">
  <link href="assets/css/navbar.css" rel="stylesheet">
  <link href="assets/css/footer.css" rel="stylesheet">
  <link href="assets/css/common-styles.css" rel="stylesheet">
  <link href="assets/css/background.css" rel="stylesheet">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
	
	<script type="text/javascript">
        $(document).ready(function () {

            $("#contactbtn").click(function () {

                fname = $("#fname").val();
                email = $("#email").val();
                message = $("#message").val();

                $.ajax({
                    type: "POST",
                    url: "modules/sendmsg.php",
                    data: "fname=" + fname + "&email=" + email + "&message=" + message,
                    success: function (html) {
                        if (html == 'true') {

                            $("#add_err7").html('<div class="alert alert-success"> \
                                                 <strong>Message Sent!</strong> \ \
                                                 </div>');

                        } else if (html == 'fname_long') {
                            $("#add_err7").html('<div class="alert alert-danger"> \
                                                 <strong>First Name</strong> must cannot exceed 50 characters. \ \
                                                 </div>');
						
						} else if (html == 'fname_short') {
                            $("#add_err7").html('<div class="alert alert-danger"> \
                                                 <strong>First Name</strong> must exceed 2 characters. \ \
                                                 </div>');
												 
						} else if (html == 'email_long') {
                            $("#add_err7").html('<div class="alert alert-danger"> \
                                                 <strong>Email</strong> must cannot exceed 50 characters. \ \
                                                 </div>');
						
						} else if (html == 'email_short') {
                            $("#add_err7").html('<div class="alert alert-danger"> \
                                                 <strong>Email</strong> must exceed 2 characters. \ \
                                                 </div>');
												 
						} else if (html == 'eformat') {
                            $("#add_err7").html('<div class="alert alert-danger"> \
                                                 <strong>Email</strong> format incorrect. \ \
                                                 </div>');
												 
						} else if (html == 'message_long') {
                            $("#add_err7").html('<div class="alert alert-danger"> \
                                                 <strong>Message</strong> must cannot exceed 50 characters. \ \
                                                 </div>');
						
						} else if (html == 'message_short') {
                            $("#add_err2").html('<div class="alert alert-danger"> \
                                                 <strong>Message</strong> must exceed 2 characters. \ \
                                                 </div>');


                        } else {
                           $("#add_err7").html('<div class="alert alert-danger"> \
                                                 <strong>Error</strong> processing request. Please try again later. \ \
                                                 </div>');
                              //$("#add_err7").html(html);
                        }
                    },
                    beforeSend: function () {
                        $("#add_err7").html("loading...");
                    }
                });
                return false;
            });
        });
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

<i class="bi bi-list mobile-nav-toggle d-xl-none" ></i>

<header id="header" class="d-flex flex-column justify-content-center">

  <nav id="navbar" class="navbar nav-menu">
    <ul>

    <?php require_once 'user.php'; ?>
      
      <li><a href="index.php" class="nav-link scrollto"><i class="fas fa-home"></i> <span>Home</span></a></li>
      <li><a href="about.php" class="nav-link scrollto"><i class="fas fa-info-circle"></i> <span>About</span></a></li>
      <li><a href="events.php" class="nav-link scrollto"><i class="fas fa-calendar-day"></i> <span>Events</span></a></li>
      <li><a href="workshop.php" class="nav-link scrollto"><i class="fas fa-chalkboard-teacher"></i> <span>&nbsp &nbsp &nbsp Workshop /<br>Paper Presentation</span></a></li>
      <li><a href="team.php" class="nav-link scrollto"><i class="fas fa-users"></i> <span>Team</span></a></li>
        <li><a href="schedule.php" class="nav-link scrollto"><i class="fas fa-hourglass-half"></i><span>Schedule</span></a></li>
      <li><a href="#" class="nav-link scrollto active"><i class="fas fa-question"></i> <span>FAQ / Contact</span></a></li>
    </ul>
  </nav><!-- .nav-menu -->

</header>
<?php require_once 'header.php'; ?>

  <div id="header2" class="d-flex align-items-center header2 ">
    <div class="container d-flex align-items-center justify-content-center">

      <div class="logo">
        <h1>FAQ</h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
    </div>
  </div>
  <div class="container-fluid main-content">
  <div class="row padrl">
    
      <div class="col-lg-4 fav_list">
          <div class="nav nav-pills faq-nav" id="faq-tabs" role="tablist" aria-orientation="vertical">
              <a href="#tab1" class="nav-link active" data-toggle="pill" role="tab" aria-controls="tab1" aria-selected="true">
                  <i class="fa fa-question-circle"></i>&emsp;GENERAL HELP
              </a>
              <a href="#tab2" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab2" aria-selected="false">
            <i class="fa fa-question-circle"></i>&emsp;REGISTRATION AND PAYMENT
              </a>
              <a href="#tab3" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab3" aria-selected="false">
            <i class="fa fa-question-circle"></i>&emsp;EVENT RELATED QUERIES
              </a>
          <a href="#tab4" class="nav-link" data-toggle="pill" role="tab" aria-controls="tab4" aria-selected="false">
            <i class="fa fa-question-circle"></i>&emsp;ACCOMODATION AND OTHER AMENETIES
          </a>
          </div>
      </div>
      

      <!-- GENERAL HELP -->

      <div class="col-lg-8 padleft">
          <div class="tab-content" id="faq-tab-content">
              <div class="tab-pane show active" id="tab1" role="tabpanel" aria-labelledby="tab1">
            <h2 class=" text-white">General Help</h2>
                   <span class="loader pull-right"><span class="loader-inner"></span></span>
                  <hr></br>
            <h1><a></a></h1>
                 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a class="first collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                      Who can participate?
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                            <div class="panel-body">
                    <p>Any student currently pursuing their undergraduate degree is welcome to participate in Srishti 2K22. Eg: B. Sc, B.E/other programs.</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Can I participate in Srishti as an individual or as a team?
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                    <p>
                    <ul>
                      <li>It depends on the type of the event.</li>
                      <li>Some events require individual participation and some correspond to team participation. Do check out the event description for participation type.</li>
                    </ul>
                                       </p>
                                
                            </div>
                        </div>
                    </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Should all the participants in the team need to pay the general fee?
                      <span> </span>
                    </a>
                  </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                  <div class="panel-body">
                    <p>
                    <ul>
                      <li>Yes, each and every participant are required to register and pay the general fee.</li>
                      <li>All the participants will be given an individual Srishti ID after the payment. </li>
                      <li>General Fee for PSG Tech Students: Rs.100</li>
                      <li>General Fee for Non-PSG Tech Students: Rs.150</li>
                    </ul>
                    </p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                      Incase of outside college, whom should I contact after reaching PSG Tech?
                      <span> </span>
                    </a>
                  </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                  <div class="panel-body">
                    <p>Helpdesks will be present in the campus. You can approach them for further assistance.</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFive">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                      Are there any events that can be attended for free?
                      <span> </span>
                    </a>
                  </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                  <div class="panel-body">
                    <p>
                    <ul>
                      <li>After paying the general fees, you can participate in the technical and non technical events.</li>
                      <li>For workshops, paper presentations and flagship events, you need to pay an additional fee mentioned for the same. </li>
                    </ul>
                    </p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingSix">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                      What are the events that require additional fees?
                      <span> </span>
                    </a>
                  </h4>
                </div>
                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                  <div class="panel-body">
                    <p>All the flagship events, paper presentations and workshops require an additional fee along with the general fee.</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingSeven">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                      Where do I approach to know about the venue of a particular event?
                      <span> </span>
                    </a>
                  </h4>
                </div>
                <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                  <div class="panel-body">
                    <p>Information desk / Help desk will be available in front of the blocks to assist you.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
    
                    
                   
          <!-- REGISTRATION AND PAYMENT -->
                     
              <div class="tab-pane" id="tab2" role="tabpanel" aria-labelledby="tab2">
            <h2 class=" text-white">Registration And Payment</h2>
                   <span class="loader pull-right"><span class="loader-inner"></span></span>
                  <hr></br>
            <h1><a></a></h1>
                 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                       
                <div class="panel-heading" role="tab" id="heading8">
                            <h4 class="panel-title">
                    <a class="first collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="true" aria-controls="collapse8">
                      How can I make my payment for the events?
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                <div id="collapse8" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading8">
                            <div class="panel-body">
                    <p>Payment can be done through the website.</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading9">
                            <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="false" aria-controls="collapse9">
                      Can I make an on-spot registration for events?
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                <div id="collapse9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading9">
                            <div class="panel-body">
                    <p>Yes, you will be able to register for the events on spot on the day of the event.
                                       </p>
                  </div>
                </div>
              </div>
                                
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading10">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="false" aria-controls="collapse10">
                      Is there any refund if I am not attending the event due to any unavoidable situation?
                      <span> </span>
                    </a>
                  </h4>
                </div>
                <div id="collapse10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading10">
                  <div class="panel-body">
                    <p>Refunds will not be provided.</p>
                            </div>
                        </div>
                    </div>
    
                    <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading11">
                            <h4 class="panel-title">
                    <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="false" aria-controls="collapse11">
                      If my payment fails, what am I supposed to do?
                                    <span> </span>
                                </a>
                            </h4>
                        </div>
                <div id="collapse11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading11">
                            <div class="panel-body">
                    <p>Do not panic! If the payment fails:
                    <ul>
                      <li>Do retry after a few minutes.</li>
                      <li>Clear the browsing cache and try again.</li>
                      <li>In case if the above mentioned steps do not work, do contact us for further assistance or approach the helpdesk at the campus.</li>
                    </ul>
                    </p>
                            </div>
                        </div>
                    </div>

                    

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading13">
                  <h4 class="panel-title">
                    <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse13" aria-expanded="false" aria-controls="collapse13">
                      If I pay for one event, can I attend other events too?
                      <span> </span>
                    </a>
                  </h4>
                </div> 
                <div id="collapse13" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading13">
                  <div class="panel-body">
                    <p>Yes, you can attend all the technical and non technical events after paying the General Fee.</p>
              </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading14">
                  <h4 class="panel-title">
                    <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse14" aria-expanded="false" aria-controls="collapse14">
                      Whom should I contact for registration related queries or problems?
                      <span> </span>
                    </a>
                  </h4>
                </div>
                <div id="collapse14" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading14">
                  <div class="panel-body">
                    <p>
                    <ul>
                      <li>A help desk will be set up in the college campus for any help or queries regarding registration.</li>
                      <li>Students can contact us through mail or phone call. Contact details are available in the 'Contact Us' part of the website.</li>
                    </ul>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>


          <!-- EVENT RELATED QUERIES -->

              <div class="tab-pane" id="tab3" role="tabpanel" aria-labelledby="tab3">
            <h2 class=" text-white">Event Related Queries</h2>
                <span class="loader pull-right"><span class="loader-inner"></span></span>
               <hr></br>
            <h1><a></a></h1>
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                 <div class="panel panel-default">
                    
                <div class="panel-heading" role="tab" id="heading15">
                         <h4 class="panel-title">
                    <a class="first collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse15" aria-expanded="true" aria-controls="collapse15">
                      What will be the duration of the event?
                                 <span> </span>
                             </a>
                         </h4>
                     </div>
                <div id="collapse15" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="heading15">
                         <div class="panel-body">
                    <p> It will vary based upon the events, ranging from 45 mins to an hour, per round.</p>
                         </div>
                     </div>
                 </div>
 
                 <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading16">
                         <h4 class="panel-title">
                    <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse16" aria-expanded="false" aria-controls="collapse16">
                      Do we need to bring our laptops for attending particular events?
                                 <span> </span>
                             </a>
                         </h4>
                     </div>
                <div id="collapse16" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading16">
                         <div class="panel-body">
                    <p>Yes, you will be required to bring your own laptops.</p>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading17">
                  <h4 class="panel-title">
                    <a class="collapsed last" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse17" aria-expanded="false" aria-controls="collapse17">
                      If my teammate is absent on the day of the event, and I am the only one left in the team to attend the event, can I participate in the event in this case?
                      <span> </span>
                    </a>
                  </h4>
                </div>
                <div id="collapse17" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading17">
                  <div class="panel-body">
                    <p>Do not worry! You can attend the event, but make sure to inform the organizer of the event.</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading18">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse18" aria-expanded="false" aria-controls="collapse18">
                      If I am (or my team is) finalised for more than one event, what are we supposed to do when both events happen at the same time?
                      <span> </span>
                    </a>
                  </h4>
                </div>
                <div id="collapse18" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading18">
                  <div class="panel-body">
                    <p>In this case, you (or your team) can attend only one event at that time.</p>

                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading19">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse19" aria-expanded="false" aria-controls="collapse19">
                      Can I submit abstracts for multiple paper presentation events by paying the registration fee once?
                      <span> </span>
                    </a>
                  </h4>
                </div>
                <div id="collapse19" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading19">
                  <div class="panel-body">
                    <p>Yes, by paying the registration fee for paper presentation once, you can submit multiple abstracts.</p>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading20">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse20" aria-expanded="false" aria-controls="collapse20">
                      Will there be any cash prizes for winners?
                      <span> </span>
                    </a>
                  </h4>
                </div>
                <div id="collapse20" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading20">
                  <div class="panel-body">
                    <p>YES! Winners will be provided with cash prizes along with physical certificates.</p>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading21">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse21" aria-expanded="false" aria-controls="collapse21">
                      Will the certificates be provided for all participants or only for winners?
                      <span> </span>
                    </a>
                  </h4>
                </div>
                <div id="collapse21" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading21">
                  <div class="panel-body">
                    <p>
                    <ul>
                      <li>The physical certificates will be provided for event winners and for the final participants of Paper presentation, Project Expo and Workshop only.</li>
                      <li>E- certificates will be provided for all participants.</li>
                    </ul>
                                    </p>
                  </div>
                </div>
              </div>
                             
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading22">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse22" aria-expanded="false" aria-controls="collapse22">
                      When will the prizes for the winners be distributed?
                      <span> </span>
                    </a>
                  </h4>
                </div>
                <div id="collapse22" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading22">
                  <div class="panel-body">
                    <p>A valedictory ceremony will be held at the end of the symposium during which all the winners will be awarded. The time and venue will be announced later.</p>
                         </div>
                     </div>
                 </div>
 
                 <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading23">
                         <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse23" aria-expanded="false" aria-controls="collapse23">
                      Whom should I contact for event related queries or doubts?
                                 <span> </span>
                             </a>
                         </h4>
                     </div>
                <div id="collapse23" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading23">
                         <div class="panel-body">
                    <p>You can contact the event convenors and volunteers. The contact details of the are provided with the event description.</p>
                         </div>
                     </div>
                 </div>

                 <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading24">
                         <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse24" aria-expanded="false" aria-controls="collapse24">
                      Where can I get to know more about the event?
                                 <span> </span>
                             </a>
                         </h4>
                     </div>
                <div id="collapse24" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading24">
                         <div class="panel-body">
                    <p>Check out the <a href="#event.php" style="color:#9C02F5;">website</a> which contains different categories of events like technical, non technical, paper presentation and so on. Click on the name of the respective event to know more about it.</p>
                         </div>
                     </div>
                 </div>
             </div>
              </div>
              
          <!-- ACCOMODATION AND OTHER AMENETIES -->

          <div class="tab-pane" id="tab4" role="tabpanel" aria-labelledby="tab4">
            <h2 class=" text-white">ACCOMODATION AND OTHER AMENETIES</h2>
            <span class="loader pull-right"><span class="loader-inner"></span></span>
            <hr></br>
            <h1><a></a></h1>
            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
              <div class="panel panel-default">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading25">
                    <h4 class="panel-title">
                      <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse25" aria-expanded="false" aria-controls="collapse25">
                        Will other college participants be provided with accommodation?
                        <span> </span>
                      </a>
                    </h4>
                  </div>
                  <div id="collapse25" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading25">
                    <div class="panel-body">
                      <p>Yes, hostel accommodation will be provided for the participants from other colleges. You will be required to pay a separate accommodation fee for the same.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading26">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse26" aria-expanded="false" aria-controls="collapse26">
                      Are there any accommodation fees?
                      <span> </span>
                    </a>
                  </h4>
                </div>
                <div id="collapse26" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading26">
                  <div class="panel-body">
                    <p>Yes, the fees might vary depending on the type of room you choose.</p>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading27">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse27" aria-expanded="false" aria-controls="collapse27">
                      Is the food free incase accomodation is provided?
                      <span> </span>
                    </a>
                  </h4>
                </div>
                <div id="collapse27" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading27">
                  <div class="panel-body">
                    <p>Yes, you will be provided with food along with other amenities inclusive of the accommodation fee.</p>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading28">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse28" aria-expanded="false" aria-controls="collapse28">
                      Will there be any transport facility provided for outside college students?
                      <span> </span>
                    </a>
                  </h4>
                </div>
                <div id="collapse28" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading28">
                  <div class="panel-body">
                    <p>Participants will need to come to the venue at their own expense.</p>
                  </div>
                </div>
              </div>

              <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading29">
                  <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse29" aria-expanded="false" aria-controls="collapse29">
                      Will we be provided with refreshments?
                      <span> </span>
                    </a>
                  </h4>
                </div>
                <div id="collapse29" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading29">
                  <div class="panel-body">
                    <p>Participants attending the workshops will be provided with refreshments.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
      </div>
  </div>
</div>

  <div class="container-fluid">
  <section id="contact" class="contact section-bg">
    <div class="contact-title">Contact Us</div>
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4 effect7" id="contact">
              <i class="fas fa-phone" style="transform: scaleX(-1);"></i>
              <h3>Contact</h3>
              <p><a href="tel:7548826176">BHUVANESH G - 7548826176</a>&nbsp;<a href="https://api.whatsapp.com/send?phone=917548826176"><i class="bi bi-whatsapp"></i></a><br><a href="tel:7358733985">AJAY SHEKAR D - 7358733985</a>&nbsp;<a href="https://api.whatsapp.com/send?phone=917358733985"><i class="bi bi-whatsapp"></i></a></p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4 effect7">
              <i class="fas fa-envelope"></i>
              <h3>Email Us</h3>
              <a href= "mailto:teamsrishti22@gmail.com" target="_blank"><p>teamsrishti22@gmail.com<br></p></a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4 effect7">
              <i class="fab fa-instagram"></i>
              <h3>Instagram</h3>
              <a href="https://www.instagram.com/srishti_psgtech/" target="_blank"><p>srishti_psgtech<br></p></a>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-lg-6">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.1857162154984!2d76.99993861407107!3d11.024688692153305!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8582f1435fa59%3A0x137d95bfd8909293!2sPSG%20College%20Of%20Technology!5e0!3m2!1sen!2sin!4v1621768196145!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
          <div id="add_err7"></div>
            <form action="forms/contact.php" method="post" role="form" class="php-email-form  effect7">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="fname" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" id="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit" id="contactbtn">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
            </div>

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
