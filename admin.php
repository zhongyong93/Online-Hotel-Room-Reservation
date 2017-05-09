<?php
	require_once 'dbconnect.php';
	// if session is not set this will redirect to login page
if( isset($_SESSION['user']) ) {
$sql = "SELECT * FROM users WHERE userId=".$_SESSION['user'];
	$result = mysqli_query($conn, $sql);
	echo $conn->error;
	 while($row = mysqli_fetch_array($result)) {
   		$userRow = $row;
}}
if($userRow['userRole'] != 1){
	echo "<script>alert('You are not Admin,not allow to enter here!')</script>";
	echo "<script>window.open('index.php','_self')</script>";
}
?>


<!DOCTYPE html>
<html>
<head>
<body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome Admin - <?php echo ''; ?></title>
<link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css"  />
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>

	<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="home.php">My Hotel</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li><a href="reserve.php">Reservation</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact Us</a></li>
			<li><a href="payment.php">Payment</a></li>
			<li><a href="admin.php">Admin</a></li>
          </ul>
          
        </div><!--/.nav-collapse -->
      </div>
    </nav> 
<div class="page-header">
<h1><br><br><p style="color:Black" align="center"><span class="glyphicon glyphicon-user"></span>&nbsp;<?php echo "Admin Control Center"?></p></h1>
</div>
<div class="row">
        <h1>  <table style='border:0px solid #000000;'>
<tr>
<TD vAlign=top colSpan=3 align="center">
<div style="width:1500px; height:110px" align="center">
<h2><p style="color:Black;">Admin only are allowed to choose the choice as shown below.</p></h2>
<form method="POST" action="admin1.php">
<table width ="800" align="center">
<tr align="center">
<td> <input align="left" name="edit" type="submit" value="Delete User" />
</td>
<td> <input align="right" name="edit1" type="submit" value="Delete Reservation" />
</tr>
</div>
</div>
</form>
	
	<script src="assets/jquery-1.11.3-jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>
<?php ob_end_flush(); ?>
<?php
$url = '6.jpg';
?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
 "http://www.w3.org/TR/html4/strict.dtd"> 
<html lang="en">
<head>
<title>Homepage</title>
<style type="text/css">
body
{
background-image:url('<?php echo $url ?>');	
}
</style>
</head>
<body>
</body>
</html>
<?php 	mysqli_close($conn); ?>