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
			  <span class="glyphicon glyphicon-user"></span>&nbsp;Hi, <?php echo 'admin'; ?>&nbsp;<span class="caret"></span></a>
              <ul class="dropdown-menu">
				<li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Profile</a></li>
                <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav> 
	<br><br>
<div id="page">
					<!-- start content -->
					<div id="content">
						<div class="post">
					
							<h1><br><br> <p style="color:Black" align="center" class="title">View Reservation Room</p></h1>
							<div class="entry" align="center">

								<table width="1100">
								<tr>
								<th align="center" bgcolor="silver">User ID</th>
								<th align="center" bgcolor="silver">UserName</th>
								<th align="center" bgcolor="silver">UserEmail</th>
								<th align="center" bgcolor="silver">Reserve Id</th>
								<th align="center" bgcolor="silver">Room Type</th>
								<th align="center" bgcolor="silver">Room Number</th>
								<th align="center" bgcolor="silver">Number Guest</th>
								<th align="center" bgcolor="silver">Date Check In</th>
								<th align="center" bgcolor="silver">Date Check Out</th>
								<th align="center" bgcolor="silver">Cost</th>
								</tr>
<?php
$sql1 = "SELECT * FROM reserve";
$result = mysqli_query($conn, $sql1);
if ($result !== FALSE) {
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$result=mysqli_query($conn,$sql1) or die("Can't Execute Query...");
if($result->num_rows > 0)
{
while($row = mysqli_fetch_assoc($result))
{
echo "<th>".$row["userId"]."</th>";
echo "<th>".$row["userName"]."</th>";
echo "<th>".$row["userEmail"]."</th>";
echo "<th>".$row["rs_Id"]."</th>";
echo "<th>".$row["rmType"]."</th>";
echo "<th>".$row["rmNum"]."</th>";
echo "<th>".$row["guest"]."</th>";
echo "<th>".$row["dateCi"]."</th>";
echo "<th>".$row["dateCo"]."</th>";
echo "<th>".$row["cost"]."</th>";
echo "<tr>".PHP_EOL;
}
}
}
else
{
echo "0 results";
}
?>
</table>
<br/>
<form method="POST" action="delete1.php">
<?php
$result = mysqli_query($conn, $sql1);
echo "Select Reservation Room to delete : ";
echo "<select name=\"rs_Id\">";
while($row=mysqli_fetch_array($result))
{
echo "<option value= '".$row['rs_Id']."' > ".$row['rs_Id']." </option>";
}
echo "</select>";
 echo "<br><br>";
 ?>
<p><input type="submit" value="Delete" name="delete"/></p>
</form>
</div>
</div>
</div>

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