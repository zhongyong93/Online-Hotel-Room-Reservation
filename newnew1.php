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
<?php
$checkIn = "";
$checkOut = "";
$guest = "";

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?> 
<br>
<br>
<br>
<div align="center">
<h1>Welcome to reserve the room in our hotel. </h1>
<table width ="800" align="center">
<div class="form-group">
            	<hr />
            </div>
<form method="post" action="newnew2.php">  
<label for="meeting">Check In : </label><input align="center" id="meeting" type="date" name="checkIn" min=<?php echo  ''.date("Y-m-d")?> value="<?php echo $checkIn;?>"><br>
<label for="meeting">Check Out : </label><input align="center" id="meeting" type="date" name="checkOut" min=<?php echo  ''.date("Y-m-d",strtotime(' +1 day'))?> value="<?php echo $checkOut;?>"><br>
<label for="meeting">Guest : </label>
<select id="meeting" align="center" name="guest" id="max_adults" value="<?php echo $guest;?>"> <br>
<option value="1" selected="selected">1&nbsp;</option>
<option value="2">2&nbsp;</option>
<option value="3">3&nbsp;</option>
<option value="4">4&nbsp;</option>
<option value="5">5&nbsp;</option>
<option value="6">6&nbsp;</option>
<option value="7">7&nbsp;</option>
<option value="8">8&nbsp;</option></select>&nbsp;</td></tr><br>
<tr><td style="height:7px"></td></tr>
 <input type="submit" name="submit" value="Check Availability">  
</form>
</table>
</body>
</html>
</div>
    <script src="assets/jquery-1.11.3-jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</style>				
</body>
</head>
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
<?php mysqli_close($conn); ?>

