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
<title>Welcome - <?php echo $userRow[0]['userName']; ?></title>
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
				<li><a href="profile.php"><span class="glyphicon glyphicon-user"></span>&nbsp;Profile</a></li>
                <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav> 

	<div class="page-header">
<h1><br><p style="color:Black" align="center"><span class="glyphicon glyphicon-home"></span>&nbsp;About My Hotel</a></p></h1>
</div>
<TD vAlign=top colSpan=3 align="center">
<div style="width:1300px; height:110px" align="center">
<h2><p style="color:Black;">Welcome to My Hotel</p></h2>

<h3><p style="color:Black;">Malaysia is the one of the most enjoyable countries to travel. 
Many travelers like to travel to Malaysia because of various kinds of event and cultural activities. 
Travel spots which located in different states, such as Kedah, Penang, Perak, Kelantan and so on. 
Other than the travel spots, the generations of slow life in Malaysia attracts the travelers to pay a visit and enjoy their life vacation or staying in Malaysia. 
So, a lot of accommodations are set up to convenience the travelers to stay overnight safely. </p></h3>
<img src="hotel.jpg" width="550" height="300" style="margin:center;">';
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