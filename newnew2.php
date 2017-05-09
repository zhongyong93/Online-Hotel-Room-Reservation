<?php
	
	require_once 'dbconnect.php';
	
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	// select loggedin users detail
	$res=mysqli_query($conn,"SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysqli_fetch_array($res);
if ($userRow['userRole'] != 2){
	echo "<script>alert('You are Admin,not allow to reserve room!')</script>";
	echo "<script>window.open('index.php','_self')</script>";
	}
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
				<li><a href="profile.php"><span class="glyphicon glyphicon-user"></span>&nbsp;Profile</a></li>
                <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav> 	
?>
<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<div align="center">
<table width ="800" align="center">
<br>
<?php
$checkIn = test_input($_POST["checkIn"]);
$checkOut = test_input($_POST["checkOut"]);
$guest = test_input($_POST["guest"]);
$_SESSION['checkIn']= $checkIn;
$_SESSION['checkOut']= $checkOut;
?>
    	<h1> <font size=20% color=black>Room Choice </font><br></h1>
    	</div>
<div class="form-group">
            	<hr />
            </div>
<form method="post" action="newnew3.php">  
<table width ="1100" align="center">
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
<td><select name="sBed" class="available_rooms_ddl">
<option value="0">0 (0.00$)</option>
<option value="1">1 (55.00$)</option>
<option value="2">2 (110.00$)</option>
<option value="3">3 (165.00$)</option>
<option value="4">4 (220.00$)</option>
<option value="5">5 (275.00$)</option>
<option value="6">6 (330.00$)</option>
<option value="7">7 (385.00$)</option>
<option value="8">8 (440.00$)</option>
<option value="9">9 (495.00$)</option>
<option value="10">10 (550.00$)</option></select></td>
    <td>From:<?php echo $checkIn = test_input($_POST["checkIn"]); ?><br> To:<?php echo $checkOut = test_input($_POST["checkOut"]); ?> </td></tr>
     <td><img src="2.jpg" width="100" height="100" border="0"></td>
    <td><p style="color:Black;"><span class="glyphicon glyphicon-bed"></span>&nbsp;2 Single Bed</a></p>
    <font size=3 color=black>-Provide 2 single bed.<br>
    -Max for 2 guest only.</font></td>
    <td><select name="tSBed" class="available_rooms_ddl">
<option value="0">0 (0.00$)</option>
<option value="1">1 (80.00$)</option>
<option value="2">2 (160.00$)</option>
<option value="3">3 (240.00$)</option>
<option value="4">4 (320.00$)</option>
<option value="5">5 (400.00$)</option>
<option value="6">6 (480.00$)</option>
<option value="7">7 (560.00$)</option>
<option value="8">8 (640.00$)</option>
<option value="9">9 (720.00$)</option>
<option value="10">10 (800.00$)</option></select></td>
     <td>From:<?php echo $checkIn = test_input($_POST["checkIn"]); ?><br> To:<?php echo $checkOut = test_input($_POST["checkOut"]); ?> </td></tr>
   <tr>
    <td><img src="3.jpg" width="100" height="100" border="0"></td>
    <td><p style="color:Black;"><span class="glyphicon glyphicon-bed"></span>&nbsp;Double Bed</a></p>
    <font size=3 color=black>-Only provide 1 double bed.<br>
    -Max for 2 guest only.</font></td>
    <td><select name="dBed" class="available_rooms_ddl">
<option value="0">0 (0.00$)</option>
<option value="1">1 (140.00$)</option>
<option value="2">2 (280.00$)</option>
<option value="3">3 (420.00$)</option>
<option value="4">4 (560.00$)</option>
<option value="5">5 (700.00$)</option></select></td>
     <td>From:<?php echo $checkIn = test_input($_POST["checkIn"]); ?><br> To:<?php echo $checkOut = test_input($_POST["checkOut"]); ?> </td></tr>
   <tr>
    <td><img src="4.jpg" width="100" height="100" border="0"></td>
    <td><p style="color:Black;"><span class="glyphicon glyphicon-bed"></span>&nbsp;4-Bed Domitary</a></p>
    <font size=3 color=black>-Provide 4 single bed.<br>
    -Max for 4 guest only.</font></td>
    <td><select name="fBed" class="available_rooms_ddl">
<option value="0">0 (0.00$)</option>
<option value="1">1 (30.00$)</option>
<option value="2">2 (60.00$)</option>
<option value="3">3 (90.00$)</option>
<option value="4">4 (120.00$)</option>
<option value="5">5 (150.00$)</option>
<option value="6">6 (180.00$)</option>
<option value="7">7 (210.00$)</option>
<option value="8">8 (240.00$)</option>
<option value="9">9 (270.00$)</option>
<option value="10">10 (300.00$)</option>
<option value="11">11 (330.00$)</option>
<option value="12">12 (360.00$)</option></select></td>
     <td>From:<?php echo $checkIn = test_input($_POST["checkIn"]); ?><br> To:<?php echo $checkOut = test_input($_POST["checkOut"]); ?> </td></tr>
	<td></td><td></td><td></td>
<td>
<input type="hidden" value = "<?php echo $checkIn;?>" name= "checkIn">
<input type="hidden" value = "<?php echo $checkOut;?>" name= "checkOut">
<input type="hidden" value = "<?php echo $guest;?>" name= "guest">
<tr align="center">
<td></td>
<td> <input type="submit" name="submit" value="Book Now!">
</td>
</table>
</form>
</div>
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
<?php mysqli_close($conn); ?>