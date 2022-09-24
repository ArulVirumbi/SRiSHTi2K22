<?php
@ob_start();
session_start();

$email = $_SESSION['email'];

if (isset($email)) {

  include "phpqrcode/qrlib.php";
  include_once 'includes/dbh.inc.php';


  $query = "SELECT * FROM members WHERE email = '$email'";
  $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
  $num_row = mysqli_num_rows($result);
  $row = mysqli_fetch_array($result);

  if ($num_row >= 1) {

    $_SESSION['login'] = $row['id'];
    $id = $row['id'];
    $_SESSION['fname'] = $row['fname'];
    $_SESSION['mobile'] = $row['mobile'];
    $_SESSION['department'] = $row['department'];
    $_SESSION['cgname'] = $row['cgname'];
    $_SESSION['events'] = $row['events'];
    $_SESSION['workshops'] = $row['workshops'];
    $_SESSION['paperpres'] = $row['paperpres'];
    $_SESSION['flagship'] = $row['flagship'];
    $_SESSION['genfee'] = $row['genfee'];
    $location="qrimg/".$_SESSION['login'].".png";
    if (!file_exists($location)) {
      $text="http://localhost/srishti/adminlogin/regcheck.php?id=".$_SESSION['login'];
      QRcode::png($text, $location);
    }
   

  } else {
    echo 'false';
  }

?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>SRiSHTi 2K22 - PROFILE</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.ico" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a74d0f3882.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

    <link href="assets/css/profile.css" rel="stylesheet">
    <link href="assets/css/common-styles.css" rel="stylesheet">
    <link href="assets/css/background.css" rel="stylesheet">

    <script type="text/javascript">
          $(document).ready(function(){
        
			   $("#paybtn").click(function(){
					type="GEN";
					 $.ajax({
						type: "POST",
						url: "modules/pay_process.php",
						data: "type=" + type,
						success: function(html){
              if (html=='false') {
								$("#add_err1").html('<div class="alert alert-danger"> \
													<strong>Please Try Again Later.</strong> \ \
												</div>');
            
                window.location.href="profile.php";
						  
						  }else {
								window.location.href = html;
						  }
						},
						beforeSend:function()
						{
                            $("#add_err1").html("Loading...");
						}
					});
					 return false;
				});
      });
    </script>
    <script type="text/javascript">
          $(document).ready(function() {

            $("#save").click(function() {
              name = $("#name").val();
              email = $("#email").val();
              number = $("#number").val();
              passwd = $("#passwd").val();

              $.ajax({
                type: "POST",
                url: "edit_profile.php",
                data: "name=" + name + "&email=" + email + "&number=" + number + "&passwd=" + passwd,
                success: function(html){
                  alert(html);
                  window.location.href="profile.php";
                  
						},
                  
                  beforeSend: function() {
                  $("#add_err2").html("Loading...");
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
    <section>
    <header>

      <div id="header2" class="d-flex align-items-center header2 ">
        <div class="container d-flex align-items-center justify-content-center">

          <div class="logo">
            <h1>PROFILE</h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.php"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            <!--onclick="history.back()" -->
          </div>
        </div>
        <button class="homebtn" title="Home" onclick="history.back()"><i class="fas fa-reply" aria-hidden="true"></i></button>
      </div>

    </header>

    <div class="container">
      <div class="main-body">
        <!-- /Breadcrumb -->

        <div class="row gutters-sm">
          <div class="col-md-4 mb-3">
            <div class="card minheight">
              <div class="card-body d-flex align-items-center justify-content-center text-center">
                <div class="d-flex flex-column align-items-center text-center pad-15">
                  <img src="<?php echo $location ?>" class="img-radius" alt="User-Profile-Image">
                  <div class="mt-3">
                    <h4>
                      <?php echo $_SESSION['fname']; ?>
                    </h4>


                    <p class="text-muted font-size-sm">
                      <?php echo $_SESSION['cgname']; ?>
                    </p>
                    <div class="btns d-flex flex-row justify-content-center">
                      <button type="button" class="editBtn" data-toggle="modal" data-target="#Edit">Edit</button>
                      <a href = "logout.php" class="logoutbutton"><button  type= "button" class="logoutBtn">Logout</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card mb-3">
              <div class="card-body">

                <div class="row">
                  <div class="col-sm-4">
                    <h6 class="mb-0">Srishti ID</h6>
                  </div>
                  <div class="col-sm-8 text-secondary">
                    <?php echo "SRISHTI21" . $_SESSION['login']; ?>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-4">
                    <h6 class="mb-0">Email</h6>
                  </div>
                  <div class="col-sm-8 text-secondary">
                    <?php echo $_SESSION['email']; ?>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-4">
                    <h6 class="mb-0">Phone</h6>
                  </div>
                  <div class="col-sm-8 text-secondary">
                    <?php echo $_SESSION['mobile']; ?>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-4">
                    <h6 class="mb-0">Department</h6>
                  </div>
                  <div class="col-sm-8 text-secondary">
                    <?php echo $_SESSION['department']; ?>
                  </div>
                </div>
                </br>
              </div>
            </div>
          </div>

          <div class="col-md-8">
            <h4 class="d-flex align-items-center mb-3 justify-content-center"><i class="material-icons text-info mr-2">Payment Details</i></h4>
            <center>
              <p class="text-muted font-size-sm">Registered events will be displayed below*</p>
            </center>
            <div class="row gutters-sm">

              <div class="col-sm-6 mb-3">
                <div class="card h-100">
                  <div class="card-body">
                    <h4 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">
                        Payments</i></h4>
                    <hr>
                          <h5>Previous Payements</h5>
                    <?php
                    $query = "SELECT * FROM payment WHERE id = '$id' AND payment_status='Success'";
                    $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
                    $num_row = mysqli_num_rows($result);
                    if ($num_row > 0) {
                      echo '<table border=0 class="prevpayment">';
                      while ($row = mysqli_fetch_array($result)) {
                        echo "<tr>";
                        $date = date('d-m-Y  h:i:sa', strtotime($row['added_on']));
                        echo "<td>" . $date . "</td>";
                        echo "<td align='right'>" . $row['amount'] . " INR</td>";
                        echo "</tr>";
                      }
                      echo "</table>";
                      echo "<br/>";
                    } else {
                      echo "<p>None</p>";
                    }
                      ?>

                      <h5>Pending Payments</h5>

                      <?php
                    if ($_SESSION["genfee"] != 'paid') {
                      ?>
                      <p>General fee &emsp;&emsp; - &emsp;&emsp; Rs.<?php if(isset($_SESSION['cgname']) && $_SESSION['cgname']=="PSG College of Technology"){
                echo "100";
            }else{
                echo "150";
            } ?></p>
                        <div class="d-flex col-12 align-items-center justify-content-center">
                          <form method="post" id="payform">
                            <div id="add_err1" style="color: white"></div>
                            <input type="submit" name="paybtn" class="payBtn" id="paybtn" value="Pay Now" />
                          </form>
                        </div>
                    <?php }else{
                      echo"<p>None</p>";
                    }
                    ?>

                  </div>
                </div>
                </div>
              
              <div class="col-sm-6 mb-3">
                <div class="card h-100">
                  <div class="card-body">
                    <h5 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">General Events
                        (Covered under General Fee)</i></h5>
                    <hr>
                    <ul>
                      <?php
                      $ev_arr = explode(", ", $_SESSION['events']);
                      $num = count($ev_arr);
                      for ($i = 0; $i < $num - 1; $i++) {
                        echo '<li>' . $ev_arr[$i] . '</li>';
                      }
                      ?>
                    </ul>
                  </div>
                </div>
              </div>
              </div>
              <div class="row gutters-sm">
              <div class="col-sm-6 mb-3">
                <div class="card h-100">
                  <div class="card-body">
                    <h5 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Workshops</i></h5>
                    <hr>
                    <ul>
                      <?php
                      $query1 = "SELECT * FROM workshops WHERE email = '$email'";
                      $result1 = mysqli_query($conn, $query1) or die(mysqli_error($conn));
                      $row1 = mysqli_fetch_array($result1);
                      $ws_arr = explode(", ", $_SESSION['workshops']);
                      $num1 = count($ws_arr);
                      for ($i = 0; $i < $num1 - 1; $i++) {
                        $ws_name = $ws_arr[$i];
                        if ($row1[$ws_name] == "paid") {
                          echo '<li>' . $ws_name . '</li>';
                        }
                      }
                      ?>

                    </ul>
                    <h5 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Paper
                        Presentation</i></h5>
                    <hr>
                    <ul>
                      <?php
                      $query2 = "SELECT * FROM paperpres WHERE email = '$email'";
                      $result2 = mysqli_query($conn, $query2) or die(mysqli_error($conn));
                      $row2 = mysqli_fetch_array($result2);
                      $ps_arr = explode(", ", $_SESSION['paperpres']);
                      $num2 = count($ps_arr);  
                      for ($i = 0; $i < $num2 - 1; $i++) {
                        $ps_name = $ps_arr[$i];
                        if ($row2[$ps_name] == "yes") {
                          echo '<li>' . $ps_name . '</li>';
                        }
                      }
                      ?>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 mb-3">
                <div class="card h-100">
                  <div class="card-body">
                    <h5 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Flagship / Bot Events</i></h5>
                    <hr>
                    <ul>
                      <?php
                      $query3 = "SELECT * FROM flagship WHERE email = '$email'";
                      $result3 = mysqli_query($conn, $query3) or die(mysqli_error($conn));
                      $row3 = mysqli_fetch_array($result3);
                      $fs_arr = explode(", ", $_SESSION['flagship']);
                      $num3 = count($fs_arr);
                      for ($i = 0; $i < $num3 - 1; $i++) {
                        $fs_name = $fs_arr[$i];
                        if ($row3[$fs_name] == "yes") {
                          echo '<li>' . $fs_name . '</li>';
                        }
                      }
                      ?>
                    </ul>
                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

            
        </div>
      </div>

      <!--  MODAL  -->
      <div class="modal fade" id="Edit" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content ">
            <div class="modal-header">
              <h4>PROFILE EDIT</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <div class="modal-body">
              <form action="">
              <div id="add_err2" style="color: white"></div>
                <div class="mb-3" style="align-items:center">
                  <input type="text" class="form-control-lg" id="name" placeholder="Name" name="text" value="<?php echo $_SESSION['fname'] ?>">
                </div>
                <div class="mb-3 mt-3">
                  <input type="email" class="form-control-lg" id="email" placeholder="Enter email" name="email" value="<?php echo $_SESSION['email'] ?>">
                </div>
                <div class="mb-3">
                  <input type="number" class="form-control-lg" id="number" placeholder="Mobile No." name="mobile" value="<?php echo $_SESSION['mobile'] ?>">
                </div>
                <div class="mb-3">
                  <input type="password" class="form-control-lg" id="passwd" placeholder="Enter Password" name="password">
                </div>
                <div class="modal-footer justify-content-center">
                <button type="button" class="save-btn" id="save">Save changes</button>
                <button type="button" class="cancel-btn" data-dismiss="modal">Cancel</button>
            </div>
                
              </form>
              
          </div>
        </div>
      </div>
    </div>
    </section>
  </body>

  </html>

<?php

} else {
  header("location:login.php ");
}
?>