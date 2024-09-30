<?php
// Include the database connection file
require_once("config/dbconn.php");

if (isset($_POST['submit'])) {
    $fname =  $_POST['fname'];
    $lname =  $_POST['lname'];
    $email =  $_POST['email'];
    $password = $_POST['upassword'];
    $phone =  $_POST['phone'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    
    


    $q = "INSERT INTO `faizan`( `fname`, `lname`, `email`, `upassword`, `phone`, `dob`, `gender`) VALUES ('$fname','$lname','$email','$password','$phone','$dob','$gender')";

    $res = mysqli_query($mysqli,$q);
    
 if($res){
     
     echo "<a href='home.php'>Go to Home Page</a>";
    
 }
 else{
     echo"Not found";
 }
}
?>
