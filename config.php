<?php

$hostname="localhost";
$username="root";
$password="";

$conn=mysqli_connect("$hostname","$username","$password");

if(!$conn){

	die("CONNECTION FAILD" .mysqli_connect_error());
}
mysqli_select_db($conn,"rgform");
?>