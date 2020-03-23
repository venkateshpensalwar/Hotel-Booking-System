<?php
include "config.php";

$a=$_POST['fname'];
$b=$_POST['lname'];
$c=$_POST['pass'];
$d=$_POST['email']; 
$e=$_POST['mob'];


if($_POST['sub'])  
{  
 $s="insert into user values ('$a','$b','$c','$d','$e')";  
 
 mysqli_query($conn,$s); 
header("Location: welcome.php");  
} 
