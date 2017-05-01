<?php
	ob_start();
	session_start();
	require_once 'dbconnect.php';
	
	// if session is not set this will redirect to login page
	if( !isset($_SESSION['user']) ) {
		header("Location: index.php");
		exit;
	}
	// select loggedin users detail
	$res=mysql_query("SELECT * FROM users WHERE userId=".$_SESSION['user']);
	$userRow=mysql_fetch_array($res);
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
				<li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Profile</a></li>
                <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav> 

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("dbconnect.php");
						?>
					</div>
				</div>

			<!-- end header -->

			<!-- start page -->

				<div id="page">
					<!-- start content -->
							<div id="content">
								<div class="post">
									<div class="entry">
									<?php
									$_SESSION['user'];
									$query = "SELECT userId FROM users where userId = '".$_SESSION['user']."'";
									$result = mysqli_query($conn,$query);
									if ( ($result) == true)
									{
										$rows = array();
										$r = mysqli_fetch_row($result);
										$rid=$r[0];
										$_SESSION['rid']=$rid;

									$get_user = "SELECT * FROM users where userId = '".$_SESSION['rid']."'";
									$run_user = mysqli_query ($conn,$get_user);
									$row_user = mysqli_fetch_array($run_user);

									$name = $row_user['userName'];
									$password = $row_user['userPass'];
									$email = $row_user['userEmail'];
									}
									?>

									<?php

										$_SESSION['user'];
										$query = "SELECT userEmail FROM users where userEmail = '".$_SESSION['user']."'";
										$result = mysqli_query($conn,$query);
										if ( ($result) == true)
										{
											$rows = array();
											$r = mysqli_fetch_row($result);
											$rid=$r[0];
											$_SESSION['rid']=$rid;

										$sql="SELECT * FROM `users` where userId = '".$_SESSION['rid']."'";
										$res=mysqli_query($conn,$sql) or die("Can't Execute Query...");
										if (mysqli_num_rows($res) > 0)
										{
											while($row = mysqli_fetch_assoc($res))
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
										include("dbconnect.php");
										$query = "SELECT rs_id FROM `appointment` WHERE u_id='".$_SESSION['rid']."'";
										$result = mysqli_query($conn,$query);
										echo "Select Reservation ID to delete : ";
										echo "<select name=\"rs_id\">";
										 while($row=mysqli_fetch_array($result))
										 {
											  echo "<option value= '".$row['rs_id']."' > ".$row['rs_id']." </option>";
										 }
										 echo "</select>";
										 echo "<br><br>";
										 ?>
										 <p><input type="submit" value="Delete" name="delete"/></p>
						 				</form>


							</div>
							<?php						
$con = mysqli_connect("localhost","root","","register")or die("Can't Connect...");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $res=mysql_query("SELECT userId, userName, userPass FROM users WHERE userEmail='$email'");
  $row=mysql_fetch_array($res);

if ($result->userId > 0) {
     // output data of each row
     while($userrow = $result->fetch_assoc()) {
         echo "<br> id: ". $userRow['userId']. " - Email: ". $userRow['userEmail']. " " . "<br>";
		 
     }
} else {
     echo "0 results";
}

?>  
<?php
										$res=mysql_query("SELECT * FROM users WHERE userEmail=".$_SESSION['user']);
										$userRow=mysql_fetch_array($res);
										$result = mysqli_query($conn,$query);
										if ( ($result) == true)
										{
											$rows = array();
											$r = mysqli_fetch_row($result);
											$rid=$r[0];
											$_SESSION['rid']=$rid;

										$sql="SELECT * FROM `appointment` where u_id = '".$_SESSION['rid']."'";
										$res=mysqli_query($conn,$sql) or die("Can't Execute Query...");
										if (mysqli_num_rows($res) > 0)
										{
											while($row = mysqli_fetch_assoc($res))
											{
												echo "<th>".$row["rs_id"]."</th>";
												echo "<th>".$row["doc_name"]."</th>";
												echo "<th>".$row["booking_date"]."</th>";
												echo "<th>".$row["appointment_date"]."</th>";
												echo "<th>".$row["time_nm"]."</th>";
												echo "<tr>".PHP_EOL;
											}
										}
										}
										else
										{
											echo "0 results<br>";
										}
										?>
										
										<?php
										$query = "SELECT userEmail FROM users WHERE userEmail='".$_SESSION['$userEmail']."'";
										$result = mysql_query($query);
										$count = mysql_num_rows($result);
										echo "Select Reservation ID to delete : ";
										echo "<select name=\"user\">";
										 while($row=mysqli_fetch_array($result))
										 {
											  echo "<option value= ".$userRow['userId']." > ".$userRow['userEmail']." </option>";
										 }
										 echo "</select>";
										 echo "<br><br>";
										 ?>
										 <p><input type="submit" value="Delete" name="delete"/></p>
							

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