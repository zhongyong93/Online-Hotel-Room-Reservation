<?php
	
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

	mysqli_close($conn);
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

	<div id="wrapper" style="width: 100%;">

	<div class="container">
    
    	<div class="page-header">
    	<h3><font size=100% color=black> Welcome to My Hotel</h3>
    	</div>
		
<tr>
<div style="float:right; width: 35%" font size=3>
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
<table>
<form method="post" action="newnew2.php">  
<font size=5><label for="meeting" >Check In : </label><input id="meeting" type="date" required name="checkIn" min=<?php echo  ''.date("Y-m-d")?> value="<?php echo $checkIn;?>"></font><br>
<font size=5><label for="meeting">Check Out : </label><input id="meeting" type="date" required name="checkOut" min=<?php echo  ''.date("Y-m-d",strtotime(' +1 day'))?> value="<?php echo $checkOut;?>"></font><br>
<font size=5><label for="meeting">Guest : </font></label>
<font size=5><select id="meeting" name="guest" id="max_adults" value="<?php echo $guest;?>"> <br>
<option value="1" selected="selected">1&nbsp;</option>
<option value="2">2&nbsp;</option>
<option value="3">3&nbsp;</option>
<option value="4">4&nbsp;</option>
<option value="5">5&nbsp;</option>
<option value="6">6&nbsp;</option>
<option value="7">7&nbsp;</option>
<option value="8">8&nbsp;</option></select>&nbsp;</td></tr><br>
<tr><td style="height:7px"></font></td></tr>
 <font size=5><input type="submit" name="submit" value="Check Availability"></font>
</form>
</table>
</body>
</html>
</div>
<div style="float:right; width: 65%">
<?php
date_default_timezone_set("Asia/Kuala_Lumpur");
echo "Local Time is " . date("Y/m/d") . " " . date("h:i:sa");

?>
<div id="page">
<div id="content">
<TD vAlign=top colSpan=3 align="center">
              <div style="width:590px; height:110px" align="right">
			  
			   <font size=50% color=black> Room Choice </font><br>
			  
                                <marquee direction="left" behavior="scroll" scrollamount="3" id="shopItem" onMouseOver="shopItem.stop()" onmouseout='shopItem.start()'>
                                <table width="590" border="0" cellpadding="5px" cellspacing="0">
                                  <tr>
                                    
                                    <td align="center"><a href="reserve.php" target="blank">
                                      
                                      <img src="1.jpg" width="100" height="100" border="0">
                                      
                                      </a><BR>
                                       <p> <font size=5 color=black> Single Bed </td></p>
                                    
                                    <td align="center"><a href="reserve.php" target="blank">
                                      
                                      <img src="2.jpg" width="100" height="100" border="0">
                                      
                                      </a><BR>
                                      <p> <font size=5 color=black> 2 Single Bed </td></p>

									<td align="center"><a href="reserve.php" target="blank">
                                      
                                      <img src="3.jpg" width="100" height="100" border="0">
                                      
                                      </a><BR>
                                      <p> <font size=5 color=black> Double Bed </td></p>

									<td align="center"><a href="reserve.php" target="blank">
                                      
                                      <img src="4.jpg" width="100" height="100" border="0">
                                      
                                      </a><BR>
                                      <p> <font size=5 color=black> 4-Bed Domitary </td></p>
			 </div></h1>
        </div>
    </div>
	</div>
</div>
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