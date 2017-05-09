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
					
							<h1><br><br> <p style="color:Black" align="center" class="title">View User List</p></h1>
							<div class="entry" align="center">

								<table width="600">
								<tr>
								<th align="center" bgcolor="silver">Reservation ID</th>
								<th align="center" bgcolor="silver">userName</th>
								<th align="center" bgcolor="silver">userEmail</th>
								</tr>
<?php
$sql1 = "SELECT * FROM users WHERE userId=".$_SESSION['user'];
$result = mysqli_query($conn, $sql1);
if ($result !== FALSE) {
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$sql1="SELECT * FROM `users` WHERE userRole != 1";
$result=mysqli_query($conn,$sql1) or die("Can't Execute Query...");
if($result->num_rows > 0)
{
while($row = mysqli_fetch_assoc($result))
{
echo "<th>".$row["userId"]."</th>";
echo "<th>".$row["userName"]."</th>";
echo "<th>".$row["userEmail"]."</th>";
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
<form method="POST" action="delete.php">
<?php
$result = mysqli_query($conn, $sql1);
echo "Select Reservation Email to delete : ";
echo "<select name=\"userId\">";
while($row=mysqli_fetch_array($result))
{
echo "<option value= '".$row['userId']."' > ".$row['userEmail']." </option>";
}
echo "</select>";
 echo "<br><br>";
 ?>
<p><input type="submit" href="delete.php" value="Delete" name="delete"/></p>
</form>
</div>
</div>
</div>
<?php 	mysqli_close($conn); ?>
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