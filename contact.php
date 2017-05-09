<?php
	ob_start();
	require_once 'dbconnect.php';

	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	// select loggedin users detail
	$sql = "SELECT * FROM users WHERE userId=".$_SESSION['user'];
	$result = $conn->query($sql);
	echo $conn->error;
	 while($row = $result->fetch_array()) {
   		$userRow[] = $row;
 }

	
	mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
<body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow[0]['userEmail']; ?></title>
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
          <ul class="nav navbar-nav navbar-right">
            
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
			  <span class="glyphicon glyphicon-user"></span>&nbsp;Hi, <?php echo $userRow[0]['userEmail']; ?>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
				<li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Profile</a></li>
                <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav> 
<div class="page-header">
<h1><br><br><p style="color:Black" align="center"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp;<?php echo "Contact Us"?></p></h1>
</div>
<div class="row">
        <h1>  <table style='border:0px solid #000000;'>
<tr>
<TD vAlign=top colSpan=3 align="center">
<div style="width:1500px; height:110px" align="center">
<h2><p style="color:Black;">Customers are welcome to contact as shown below.</p></h2>

<h3><p style="color:Black" align="center"><span class="glyphicon glyphicon-earphone"></span>&nbsp;<?php echo "Contact number : 017 5997718"?></p>
	<p style="color:Black" align="center"><span class="glyphicon glyphicon-envelope"></span>&nbsp;<?php echo "Email		   : zhongyong5575@yahoo.com"?><br>
	<p style="color:Black" align="center"><span class="glyphicon glyphicon-home"></span>&nbsp;<?php echo "Address	 	   : University Malaysia Perlis"?><br></p></h3>
</div>
</div>
	<script src="assets/jquery-1.11.3-jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>
</html>

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