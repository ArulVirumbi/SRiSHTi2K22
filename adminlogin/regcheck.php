<?php
@ob_start();
session_start();

$email = $_SESSION['email'];

if (isset($email) && $email == 'arul.virumbi@gmail.com') {

include_once '../includes/dbh.inc.php'; 
$id = $_GET['id'];
//echo "<h1>" . $id . "</h1>";

$query = "SELECT * FROM members WHERE id = '$id'";
$result = mysqli_query($conn, $query) or die(mysqli_error());
$num_row = mysqli_num_rows($result);
$row = mysqli_fetch_array($result);

$fname = $row['fname'];
$email = $row['email'];
$mobile = $row['mobile'];
$department = $row['department'];
$cgname = $row['cgname'];
$events = $row['events'];
$workshops = $row['workshops'];
$paperpres = $row['paperpres'];
$flagship = $row['flagship'];
$fees = $row['genfee'];

echo "<h1>SRiSHTi22" . $id . "</h1>";
echo "<h2>" . $fname . "</h2>";
echo "<h2>" . $email . "</h2>";
echo "<h2>" . $mobile . "</h2>";
echo "<h2>" . $department . "</h2>";
echo "<h2>" . $cgname . "</h2>";
echo "<h2>" . $fees . "</h2>";





?>


<?php

} else {
    header("location:../index.php ");
}

?>