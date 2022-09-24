<?php
@ob_start();
session_start();
include_once 'includes/dbh.inc.php'; 

// $_POST['name'] = "arul virumbi k";
// $_POST['email'] = "arul.virumbi@gmail.com";
// $_POST['number'] = "9499960424";
// $_POST['passwd'] = "arulv";
$email = $_SESSION['email'];

if(isset($email)){

    if(isset($_POST['name']) && isset($_POST['email']) &&  isset($_POST['number']) && isset($_POST['passwd'])){
        $id =  $_SESSION['login'];
        $name = $_POST['name'];
        $nemail = $_POST['email'];
        $number = $_POST['number'];
        $password = $_POST['passwd'];
        if(strlen($number)==10){
            $sql = "SELECT * FROM members WHERE id = '$id'";
            $result = mysqli_query($conn, $sql) or die(mysqli_error());
            $row = mysqli_fetch_array($result);

            if (password_verify($password, $row['password'])) {
                $query = "UPDATE members SET fname='$name', email='$nemail', mobile='$number' WHERE id='$id'";
                $update = mysqli_query($conn, $query) or die(mysqli_error());
                echo 'Details changed';
                // header("location:../profile.php ");
            }else{
                echo 'wrong password';
            }
        }else{
            echo 'Mobile Number must be 10 digits';
        }
    }else{
        echo 'Enter all the Details';
    }

}
else {
    // header("location:index.php ");
    echo 'Error: Try again later!';
  }
?>

