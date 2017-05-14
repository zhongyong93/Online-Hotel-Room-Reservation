<?php
	
	require_once 'dbconnect.php';
	$_SESSION['dri'];
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
	$sql4 = "SELECT * FROM reserve WHERE userId=".$_SESSION['user'];
	$res4 = mysqli_query($conn, $sql4);
	if (!$res4){
	$reserveRow['cost'] = "0" ;
	}
	else if ($res4) {
		echo $conn->error;
	 while($row4 = mysqli_fetch_array($res4)) {
   		$reserveRow = $row4;
	 }
	}
	$sql3 = "SELECT * FROM `reserve` WHERE `userId` = ".$_SESSION['user'];
	$result3 = mysqli_query($conn,$sql3);
	$total = 0;
	$payment = "";
	while ($row3 = mysqli_fetch_assoc($result3)) {
	$total = $total + $row3['cost']; }
	$payment = $userRow['costPay'] - $total;
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
<h1><b>Payment </b></h1>
<div class="form-group">
            	<hr />
            </div>
 <table width ="900" align="center">

<tr align="center">
<td colspan="10"><h2>As reminder, every cancellation has to be done one day before check in date, else will be charged 50% of reservation fees as the cancellation fees.</h2></td>
</tr>
<table width="1100">
								<tr>
								<th align="center" bgcolor="silver">Reserve Id</th>
								<th align="center" bgcolor="silver">Room Type</th>
								<th align="center" bgcolor="silver">Room Number</th>
								<th align="center" bgcolor="silver">Number Guest</th>
								<th align="center" bgcolor="silver">Date Check In</th>
								<th align="center" bgcolor="silver">Date Check Out</th>
								<th align="center" bgcolor="silver">Cost</th>
								</tr>
<?php
$sql2 = "SELECT * FROM reserve WHERE userId=".$_SESSION['user'];
$res1 = mysqli_query($conn, $sql2);
if ($res1 !== FALSE) {
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$res1=mysqli_query($conn,$sql2) or die("Can't Execute Query...");
if($res1->num_rows > 0)
{
while($row1 = mysqli_fetch_assoc($res1))
{
echo "<th>".$row1["rs_Id"]."</th>";
echo "<th>".$row1["rmType"]."</th>";
echo "<th>".$row1["rmNum"]."</th>";
echo "<th>".$row1["guest"]."</th>";
echo "<th>".$row1["dateCi"]."</th>";
echo "<th>".$row1["dateCo"]."</th>";
echo "<th>".$row1["cost"]."</th>";
echo "<tr>".PHP_EOL;
}
}
}
?>
</table>
<form method="POST" action="delete1.php">
<?php
$result2 = mysqli_query($conn, $sql2);
echo "Select Reservation Room to delete : ";
echo "<select name=\"rs_Id\">";
while($row2=mysqli_fetch_array($result2))
{
echo "<option value= '".$row2['rs_Id']."' > ".$row2['rs_Id']." </option>";
}
echo "</select>";
 echo "<br><br>";
 ?>
<p><input type="submit" value="Delete" name="delete"/></p>
</form>
<?php 
?>
<tr align="center">
<td colspan="10"><h2><b>Currently,<?php echo $userRow['userName'];?> has to pay in total : RM<?php echo $userRow['costPay'];?> <br> and previous debt : RM<?php echo $payment;?></b></h2></td>
</tr>
<tr>
<form action="http://www.maybank2u.com.my/">
<td colspan="10"><h3><input type="submit" value="Credit Card" /></td><td colspan="10"><input type="submit" value="Bank Transfer"/></h3></td>
</form>
</tr>
<tr align="center">
<td colspan="10"><h3>Please feel free to <span><a href="contact.php">Contact Us</a> if there is any comment, question or suggestion you may have.</span></h3></td>
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