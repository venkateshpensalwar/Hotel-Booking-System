<?php
session_start();
include("loginserv.php"); // Include loginserv for checking username and password
?>
 
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<style>
@import "https://use.fontawesome.com/releases/v5.5.0/css/all.css";
body{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  background: url(background.jpg) no-repeat;
  background-size: cover;
}
.login-box{
  width: 280px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%,-50%);
  color: white;
}
.login-box h1{
  font-family:'Permanent Marker',cursive;
  float: left;
  font-size: 40px;
  border-bottom: 6px solid #4caf50;
  margin-bottom: 50px;
  padding: 13px 0;
}
.textbox{
  width: 100%;
  overflow: hidden;
  font-size: 20px;
  padding: 8px 0;
  margin: 8px 0;
  border-bottom: 1px solid #4caf50;
}
.textbox i{
  width: 26px;
  float: left;
  text-align: center;
}
.textbox input{
  border: none;
  outline: none;
  background: none;
  color: white;
  font-size: 18px;
  width: 80%;
  float: left;
  margin: 0 10px;
}
.btn{
  width: 100%;
  background: none;
  border: 2px solid #4caf50;
  color: white;
  padding: 5px;
  font-size: 18px;
  cursor: pointer;
  margin: 12px 0;
}

</style>
</head>
<body>
<div class="login-box">
<h1>Login</h1>
<div class="textbox">
<i class="fas fa-user"></i>
<form action="" method="post">
<input type="text" placeholder="Username"  name="fname">
</div>
<div class="textbox">
<i class ="fas fa-lock"></i>
<input type="password" placeholder="Password"name="pass">
</div>
<input type="submit" class="btn"value="Login" name="submit">
<a href="http://localhost/HOTEL/reg.html">Not Yet Member ?</a>
<span><?php echo $error ?></span>
</div>
</div>
</body>
</html>