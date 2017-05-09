<?php
	
	require_once 'dbconnect.php';
	
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	$payment = "";
	$reserveRow['cost'] = "0";
	// select loggedin users detail
	$sql = "SELECT * FROM users WHERE userId=".$_SESSION['user'];
	$result = mysqli_query($conn, $sql);
	echo $conn->error;
	 while($row = mysqli_fetch_array($result)) {
   		$userRow = $row;
 }
	$sql1 = "SELECT * FROM reserve WHERE userId=".$_SESSION['user'];
	$res = mysqli_query($conn, $sql1);
	if (!$res){
	$reserveRow['cost'] = "0" ;
	}
	else if ($res) {
		echo $conn->error;
	 while($row1 = mysqli_fetch_array($res)) {
   		$reserveRow = $row1;
	 }
	 echo $reserveRow['cost'];
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
	<br><br><br>
	
	<div align="center">
<h1>Payment </h1>
<div class="form-group">
            	<hr />
            </div>
 <table width ="900" align="center">

<tr align="center">
<td colspan="10"><h2><b>As reminder, every cancellation by the users will be charged for RM100.00 as the cancellation fees </b></h2></td>
</tr>
<?php $payment = ($userRow['costPay'] - $reserveRow['cost']);?>
<tr align="center">
<td colspan="10"><h2><b>Currently,<?php echo $userRow['userName'];?> have to pay : RM<?php echo $userRow['costPay'];?> <br> include reservation fees : RM <?php echo $reserveRow['cost'];?> <br> and previous debt : RM<?php echo $payment ;?></b></h2></td>
</tr>

</table>
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