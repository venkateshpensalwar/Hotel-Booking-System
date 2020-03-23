<?php
require 'config.php';
$error=''; //Variable to Store error message;
if(isset($_POST['submit']))
{
 if(empty($_POST['fname']) || empty($_POST['pass'])){
 $error = "Username or Password is Invalid!!!";
 }
 else
 {
 //Define $user and $pass
 $user=$_POST['fname'];
 $pass=$_POST['pass'];

 //Selecting Database
 $db = mysqli_select_db($conn, "rgform");
 //sql query to fetch information of registerd user and finds user match.
 $query = mysqli_query($conn, "SELECT * FROM user WHERE Password='$pass' AND Username='$user'");
 
 $rows = mysqli_num_rows($query);
 if($rows == 1)
{
$_SESSION["username"]= $user;

header("Location: welcome.php"); // Redirecting to other page
	

 
 }
 else
 {
 $error = "Username of Password is Invalid!!!";
 }
  mysqli_close($conn);// Closing connection
 }
}
 
?>