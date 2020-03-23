<?php

$hostname="localhost";
$username="root";
$password="";

$conn=mysqli_connect("$hostname","$username","$password");

if(!$conn){

	die("CONNECTION FAILD" .mysqli_connect_error());
}
mysqli_select_db($conn,"rgform");
echo "ve";
$e=$_POST['checkin'];
$f=$_POST['checkout'];
$a=$_POST['firstname'];
$b=$_POST['lastname'];
$c=$_POST['Contact'];
$d=$_POST['Proof']; 
$G=$_POST['room'];

//if($_POST['sub'])  
{  
 $s="insert into book(Check_In,Check_Out,FirstName,LastName,Contanct_No,Identity_Proof,Room_Type) values('$e','$f','$a','$b','$c','$d','$G')";  
 mysqli_query($conn,$s); 
header("Location: index.html");  
} 
//$sql = "INSERT INTO book(Check_In,Check_Out,FirstName,LastName,Contanct_No,Identity_Proof,Room_Type) values(\'1999-8-16\',\'1999-8-16\',\'ven\',\'pen\',\'789564\',\'addhar\',\'single\')";