<?php
@ob_start();
session_start();

if(!isset($_SESSION['email'])){

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SRiSHTi 2k22 - LOGIN</title>
    <link rel="stylesheet" href="assets/css/login.css" />
    <link rel="stylesheet" href="assets/css/common-styles.css" />
    <link rel="stylesheet" href="assets/css/background.css" />
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/a74d0f3882.js" crossorigin="anonymous"></script>

 
     
    <!-- Sign Up -->
    <script type="text/javascript">
        $(document).ready(function(){
        // Submit form data via Ajax
        $("#supForm").on('submit', function(e){
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: 'modules/adduser.php',
                data: new FormData(this),
                dataType: 'json',
                contentType: false,
                cache: false,
                processData:false,
                beforeSend: function(){
                    $('.submitBtn').attr("disabled","disabled");
                    $('#add_err2').html('<p>Loading...</p>');
                },
                success: function(response){ //console.log(response);
                    $('.statusMsg').html('');
                    if(response.status == 1){
                        $('#supForm')[0].reset();
                        $('#add_err2').html('<div class="alert alert-success"> \
                                                        <strong>'+response.message+'</strong> \ \
                                                    </div>');
                        window.location.href = "index.php";
                    }else{
                        $('#add_err2').html('<div class="alert alert-success"> \
                                                        <strong>'+response.message+'</strong> \ \
                                                    </div>');
                        alert(response.message);
                    }
                    $('#supForm').css("opacity","");
                    $(".submitBtn").removeAttr("disabled");
                }
            });
            });
        });
    </script>
    <!-- Login -->
    <script type="text/javascript">
                    $(document).ready(function(){
                
                $("#login").click(function(){
                    
                        email=$("#uemail").val();
                        password=$("#upassword").val();
                        $.ajax({
                            type: "POST",
                            url: "pcheck.php",
                            data: "email=" + email + "&password=" + password,
                            success: function(html){
                            if(html=='true')
                            {
                                
                                $("#add_err1").html('<div class="alert alert-success"> \
                                                        <strong>Authenticated</strong> \ \
                                                    </div>');

                                window.location.href = "index.php";
                            
                            } else if (html=='false') {
                                    $("#add_err1").html('<div class="alert alert-danger"> \
                                                        <strong>Email not found!</strong> \ \
                                                    </div>');
                                    
                            
                            } else if (html=='pass') {
                                    $("#add_err1").html('<div class="alert alert-danger"> \
                                                        <strong>Wrong Password!</strong> \ \
                                                    </div>');
                                    
                            
                            } else {
                                    $("#add_err1").html('<div class="alert alert-danger"> \
                                                        <strong>Error</strong> processing request. Please try again. \ \
                                                    </div>');
                            
                            }
                            },
                            beforeSend:function()
                            {
                                $("#add_err1").html("loading...");
                            }
                        });
                        return false;
                    });
        });
    </script>
    
    <!-- check box -->
    <script type="text/javascript">
        $(document).ready(function() {
        $("#cgcheck").click(
            function () {
                if ($("#cgcheck").is(":checked")) {
                    $("#cgname").val("PSG College of Technology");
                    $("#cgname").prop("readonly", true);
                }   
                else {
                    $('#cgname').val("");
                    $("#cgname").prop("readonly", false);
                }
            });
        });
    </script>


    <!-- reset password -->
    <script type="text/javascript">
                $(document).ready(function(){
                
                $("#request").click(function(){
                    
                        email=$("#remail").val();
                        
                        $.ajax({
                            type: "POST",
                            url: "includes/reset-req.inc.php",
                            data: "email=" + email,
                            success: function(html){
                            if(html=='true')
                            {
                                
                                $("#add_err4").html('<div class="alert alert-success"> \
                                                        <strong>Check your Email!</strong> \ \
                                                    </div>');

                                //window.location.href = "index.php";
                            
                            } else if (html=='false') {
                                    $("#add_err4").html('<div class="alert alert-danger"> \
                                                        <strong>Email not found!</strong> \ \
                                                    </div>');
                                    
                            
                            } else {
                                    $("#add_err4").html('<div class="alert alert-danger"> \
                                                        <strong>Error</strong> processing request. Please try again. \ \
                                                    </div>');
                            
                            }
                            },
                            beforeSend:function()
                            {
                                $("#add_err4").html("loading...");
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

<div id="container" class="container">
<a href="index.php"><button class="homebtn" title="Home"><i class="fas fa-home" aria-hidden="true"></i></button></a>
    <!-- FORM SECTION -->
    <div id="func" class="row">
        <!-- SIGN UP -->
        <div class="col align-items-center flex-col sign-up sign-up-div">
            <div class="form-wrapper align-items-center">
                <div class="form sign-up sign-up-wrap">
                <form id="supForm" enctype="multipart/form-data">
                    <div id="add_err2" ></div>
                    <div class="input-group">
                        <i class='bx bxs-user'></i>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Full Name">
                    </div>
                    <div class="input-group">
                        <i class='bx bx-mail-send'></i>
                        <input type="email"class="form-control" id="email" name="email" placeholder="Email">
                    </div>
                    <div class="input-group">
                        <i class='bx bxs-lock-alt'></i>
                        <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number">
                    </div>
                    <div class="input-group">
                        <i class='bx bxs-lock-alt'></i>
                        <input type="text" class="form-control" id="department" name="department" placeholder="Department">
                    </div>
                    <div class="input-group">
                        <label class="text-white">Are you a student of PSG TECH ?</label>
                            <input id="cgcheck" class="checkbox" type="checkbox" >                        
                    </div>
                    <div class="input-group">
                        <i class='bx bxs-lock-alt'></i>
                        <input type="text"class="form-control"  id="cgname" name="cgname" placeholder="Full College Name">
                    </div>
                    <div class="input-group">
                        <i class='bx bxs-lock-alt'></i>
                        <label>Accomodation Needed ?</label>
                        <input type="checkbox" class="form-control checkbox" id="accomodation" name="accomodation">
                        
                    </div>
                    <div class="input-group">
                        <i class='bx bxs-lock-alt'></i>
                        <input type="password"class="form-control" id="password" name="password" placeholder="Password">
                    </div>
    
                    <button class="submitBtn" name="submit" >
                            Sign Up
                        </button>
                     <!-- <input type="submit" name="submit" class="submitBtn" value="Sign-Up"><button> -->
                     </form>
                     <p>
							<span>
								Already have an account?
							</span>
							<b onclick="toggle()" class="pointer">
								Sign in here
							</b>
						</p>
                </div>
            </div>
        
        </div>
       

        <!-- END SIGN UP -->
        <!-- SIGN IN -->
      
        <div class="col align-items-center flex-col sign-in sign-in-div">
            <div class="form-wrapper align-items-center">
                <div class="form sign-in">
                    <form id="sign-in" style="display:block;">
                    <div id="add_err1"></div>
           <?php 

           if(isset($_GET["newpwd"])) {
             if($_GET["newpwd"] == "passwordupdated"){
               echo '<div class="rpwdsuccess" style="color: white">Your password has been reset!</div>';
             }
           }
           
           
           ?>
                    <div class="input-group">
                        <i class='bx-mail-send'></i>
                        <input type="email" id="uemail" placeholder="Email">
                    </div>
                    <div class="input-group " id="passwrd">
                        <i class='bx bxs-lock-alt'></i>
                        <input type="password" id="upassword" placeholder="Password">
                    </div>
                   
                  
                    <!-- <button>
                        <span id="signin" >Sign in</span><span id="sendlink" hidden>Send Link</span>
                    </button>
                   <span onclick="func()" class="pointer">Forgot password?</span>                  
                   <span onclick="ff()" class="pointer"id="close" hidden>Close</span>  
                   <span id="close" onclick="this.remove(); return false;">Close</span> -->
                   
                        <button class="submitBtn" id="login" >
                            Sign In
                        </button>
                <p>
                    <b>
                      <a  class ="box-btn" id="forgotpass" onclick ="openForm()">Forgot password?</a>
                    </b>
                </p>
         
                <p>
                        <span>
                            Don't have an account?
                        </span>
                        <b onclick="toggle()" class="pointer">
                            Sign up here
                        </b>
                </p>
                </form>
            
           
            
         <!-- <div class="form-wrapper">
		
        </div> 
     -->
            
       
             <div class="section default" id="fgtpassform" style="display:none;">
                <h3 class="text-muted enterlogin"><b>Please enter Registered mail ID to recieve reset link!</b></h3>
                <div id="add_err4"></div>
                <form>
                <!-- <div class="form-wrapper align-items-center">
                    <div class="form fgtpassform"> -->
                        <div class="input-group">  
                          <i class='bx bx-mail-send'></i>
                <input id="remail" type="remail" name="email" placeholder="Email">
            </div>
    
          
              <button id="request" class="btn submitBtn pad-ten" >Send Link</button>

            <!-- <button id="sendlink" class="btn submitBtn">Send Link</button> -->
        
         <p>
             <b>
            <a class="btn box-btn" onclick="closeform()">Close</a>
         </b>
        </p>
          </form>
            </div>
        </div>
             </div>
            </div>   
        </div>
           
        
            
    <!-- </div>
</div> -->





   

    <!--end sign in>-->
   
    <!-- END FORM SECTION -->
    <!-- CONTENT SECTION -->
    <div class="row content-row">
        <!-- SIGN IN CONTENT -->
        <div class="col align-items-center flex-col">
            <div class="text sign-in">
                <h2 id="welcome-h2">
                <img class="logo image img-fluid" id="welcome-logo" src="assets/img/hero1.png"></br>
                   <span> WELCOME</span>
                </h2>

            </div>
            <div class="img sign-in">
    
            </div>
        </div>
        <!-- END SIGN IN CONTENT -->
        <!-- SIGN UP CONTENT -->
        <div class="col align-items-center flex-col">
            <div class="img sign-up">
            
            </div>
            <div class="text sign-up">
            
                <h2 id="join-h2">
                <img class="logo image img-fluid" id="join-logo" src="assets/img/hero1.png"></br>
                <span>REGISTER</span>
                </h2>

            </div>
        </div>
        <!-- END SIGN UP CONTENT -->
    </div>
    <!-- END CONTENT SECTION -->
</div>
<script src="assets/js/login.js"></script>
<script>
    function openForm(){
        document.getElementById("fgtpassform").style.display="block";
        document.getElementById("sign-in").style.display="none";
    }
    function closeform(){
        document.getElementById("fgtpassform").style.display="none";
        document.getElementById("sign-in").style.display="block";
    }
</script>
  </body>
</html>

<?php 

  }else{
  if (isset($_SESSION['email'])){
    header("location:profile.php ");
  }
}

?>


