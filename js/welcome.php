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
<meta charset="UTF-8">
<title>
</title>
</head>
<body>
<h1>Welcome</h1>
<?php
echo $_SESSION['username'];
?>
<a href="index.html" target="_blank">HERITAGE HOTEL</a>
<h1><a href="logout.php">Logout</a></h1>
</body>
</html>