<?php
	ob_start();
	require_once 'dbconnect.php';
	
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	// select loggedin users detail
	$res=mysqli_query($conn,"SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html>
<head>
<body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['userName']; ?></title>
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
			  <span class="glyphicon glyphicon-user"></span>&nbsp;Hi, <?php echo $userRow['userEmail']; ?>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
				<li><a href="logout.php?logout"><span class="glyphicon glyphicon-user"></span>&nbsp;Profile</a></li>
                <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav> 

<div id="wrapper">

	<!DOCTYPE html>
<html>
<head>
<style>
table,th, td 
{
    border:1px solid black;
}
</style>
</head>
<body>
    <div class="container">
    	<div class="page-header">
    	<h1> <font size=50% color=black>Room Choice for Display </font><br></h1>
    	</div>

<table width="800" align="center">
  <tr>
    <th><font size=4 color=black>Room Type</font></th>
    <th><font size=4 color=black>Description</font></th>
    <th><font size=4 color=black>Room(Cost)</font></th>
    <th><font size=4 color=black>Date</font></th>
  </tr>
  <tr>
    <td><img src="1.jpg" width="100" height="100" border="0"></td>
    <td><p style="color:Black;"><span class="glyphicon glyphicon-bed"></span>&nbsp;Single Bed</a></p>
    <font size=3 color=black>-Only provide 1 single bed.<br>
    -Max for 1 guest only.</font></td>
<td><select name="available_rooms" class="available_rooms_ddl">
<option value="1-55">1 (55.00$)</option>
<option value="2-110">2 (110.00$)</option>
<option value="3-165">3 (165.00$)</option>
<option value="4-220">4 (220.00$)</option>
<option value="5-275">5 (275.00$)</option>
<option value="6-330">6 (330.00$)</option>
<option value="7-385">7 (385.00$)</option>
<option value="8-440">8 (440.00$)</option>
<option value="9-495">9 (495.00$)</option>
<option value="10-550">10 (550.00$)</option></select></td>
    <td>From <br> To </td></tr>
     <td><img src="2.jpg" width="100" height="100" border="0"></td>
    <td><p style="color:Black;"><span class="glyphicon glyphicon-bed"></span>&nbsp;2 Single Bed</a></p>
    <font size=3 color=black>-Provide 2 single bed.<br>
    -Max for 2 guest only.</font></td>
    <td><select name="available_rooms" class="available_rooms_ddl">
<option value="1-80">1 (80.00$)</option>
<option value="2-160">2 (160.00$)</option>
<option value="3-240">3 (240.00$)</option>
<option value="4-320">4 (320.00$)</option>
<option value="5-400">5 (400.00$)</option>
<option value="6-480">6 (480.00$)</option>
<option value="7-560">7 (560.00$)</option>
<option value="8-640">8 (640.00$)</option>
<option value="9-720">9 (720.00$)</option>
<option value="10-800">10 (800.00$)</option></select></td>
    <td>From <br> To </td></tr>
   <tr>
    <td><img src="3.jpg" width="100" height="100" border="0"></td>
    <td><p style="color:Black;"><span class="glyphicon glyphicon-bed"></span>&nbsp;Double Bed</a></p>
    <font size=3 color=black>-Only provide 1 double bed.<br>
    -Max for 2 guest only.</font></td>
    <td><select name="available_rooms" class="available_rooms_ddl">
<option value="1-140">1 (140.00$)</option>
<option value="2-280">2 (280.00$)</option>
<option value="3-420">3 (420.00$)</option>
<option value="4-560">4 (560.00$)</option>
<option value="5-700">5 (700.00$)</option></select></td>
    <td>From <br> To </td></tr>
   <tr>
    <td><img src="4.jpg" width="100" height="100" border="0"></td>
    <td><p style="color:Black;"><span class="glyphicon glyphicon-bed"></span>&nbsp;4-Bed Domitary</a></p>
    <font size=3 color=black>-Provide 4 single bed.<br>
    -Max for 4 guest only.</font></td>
    <td><select name="available_rooms" class="available_rooms_ddl">
<option value="1-30">1 (30.00$)</option>
<option value="2-60">2 (60.00$)</option>
<option value="3-90">3 (90.00$)</option>
<option value="4-120">4 (120.00$)</option>
<option value="5-150">5 (150.00$)</option>
<option value="6-180">6 (180.00$)</option>
<option value="7-210">7 (210.00$)</option>
<option value="8-240">8 (240.00$)</option>
<option value="9-270">9 (270.00$)</option>
<option value="10-300">10 (300.00$)</option>
<option value="11-330">11 (330.00$)</option>
<option value="12-360">12 (360.00$)</option></select></td>
    <td>From <br> To </td></tr>
	</table>
	<tr><td><form method="POST" align="center" action="newnew1.php" >
<input type="submit" class="form_button_middle" style="margin-top:10px;" align= center value="Click here to reserve the room !">
</form></td></tr>
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
<?php ob_end_flush(); ?>