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
	$result = mysqli_query($conn, $sql);
	echo $conn->error;
	 while($row = mysqli_fetch_array($result)) {
   		$userRow = $row;
 }
	if ($userRow['userRole'] != 2){
	echo "<script>alert('You are Admin,not allow to change password!')</script>";
	echo "<script>window.open('index.php','_self')</script>";
	}
	$pass = "";
	$newPass = "";
	$passError = "";
	if ( isset($_POST['update']) ) {
	$pass = trim($_POST['pass1']);
	$pass = strip_tags($pass);
	$pass = htmlspecialchars($pass);
	$pass = mysqli_real_escape_string($conn, $pass);
	// password validation
	if (empty($pass)){
		$error = true;
		$passError = "Please enter password.";
	} else if(strlen($pass) < 6) {
		$error = true;
		$passError = "Password must have atleast 6 characters.";
	}
		
	// password encrypt using SHA256();
	$password = hash('sha256', $pass);
	
	$newPass = trim($_POST['pass2']);
	$newPass = strip_tags($newPass);
	$newPass = htmlspecialchars($newPass);
	$newPass = mysqli_real_escape_string($conn, $newPass);
	// password validation
	if (empty($newPass)){
		$error = true;
		$passError = "Please enter password.";
	} else if(strlen($newPass) < 6) {
		$error = true;
		$passError = "Password must have atleast 6 characters.";
	}
		
	// password encrypt using SHA256();
	$password1 = hash('sha256', $newPass);
	}
?>
<!DOCTYPE html>
<html>
<head>
<body>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome - <?php echo $userRow['userEmail']; ?></title>
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
	
<div id="wrapper">

	<div class="container">
    
    	<div class="page-header">
    	<h1><font size=100% color=black> Welcome to My Hotel</h1>
    	</div>
        <div class="row">
        <h1>  <table style='border:0px solid #000000;'>
<tr>
<form action="editprofile.php" method="POST">
<h2> <font size=6 color=black> User Profile </font><br></h2>
<span class="glyphicon glyphicon-user"></span>&nbsp;Hi, <?php echo $userRow['userName']; ?>&nbsp;</span></a> <br>
<div class="form-group">
<div class="input-group">
<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
<input type="password" name="pass1" class="form-control" placeholder="Enter Password" maxlength="15"/>
</div>
<span class="text-danger"><?php echo $passError; ?></span>
</div>
<div class="form-group">
<div class="input-group">
<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
<input type="password" name="pass2" class="form-control" placeholder="Enter Password" maxlength="15"/>
</div>
<span class="text-danger"><?php echo $passError; ?></span>
</div>
<tr align="center">
<td colspan="10"><input type="submit" name="update" value="Update Profile" /></td>
</tr>
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
<?php mysqli_close($conn); ?>