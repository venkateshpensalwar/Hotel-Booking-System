<?php
session_start();

if(!$_SESSION['username'])
{
header("Location: Login.php");

}
?>
<!doctype html>
<html>
<head>
<script src="js/w3.js"></script>
 <link rel="stylesheet" href="CSS/index.css">
  <link rel="stylesheet" href="CSS/services.css">
  <link rel="stylesheet"  href="CSS/review.css">
<meta charset="UTF-8">
<title>
</title>
</head>
<body>
<div class="header">
    <h2 class="logo">HERITAGE HOTELS</h2>
    <input type="checkbox" id="chk">

    <ul class="menu">
      <a href="index.html" target="_blank">Home</a>
      <a href="book.html">accommodation</a>
      <a href="services.html">Services</a>
	<a href="logout.php">Logout</a>
    </ul>
  </div>
<h1>Welcome <?php
echo $_SESSION['username'];
?></h1>
<div class="slides" align="center">
<img class="nature" src="images\hotel1.jpeg" style="width: 100%;height:561px">
<img class="nature" src="images\hotel2.jpg" style="width: 100%;height: 561px">
<img class="nature" src="images\hotel4.jpg" style="width: 1501px;height: 561px">
<img class="nature" src="images\hotel5.jpg" style="width: 1501px;height: 561px">

<script>
w3.slideshow(".nature", 6000.0);
</script>
</div>
</body>
</html>