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
<?php
$sql = "SELECT * FROM reserve WHERE userId=".$_SESSION['user'];
$result = mysqli_query($conn, $sql);
echo $conn->error;
while($row = mysqli_fetch_array($result)) {
$roomRow = $row;
}
$_SESSION['checkIn'];
$_SESSION['checkOut'];
$_SESSION['guest'];
$_SESSION['rmtype'];
$_SESSION['rmnum']
if ($_SESSION['checkIn'] == $roomRow['dateCi']) {
	$sql1 = "SELECT * FROM room";
	$result = mysqli_query($conn, $sql);
	echo $conn->error;
	while($row = mysqli_fetch_array($result)) {
	$typeRow = $row;
	}
	if ($typeRow['roomLeft'] == 0) {
	echo "<script>alert('Room Full! Please choose another date or room type.')</script>";
	echo "<script>window.open('newnew1.php','_self')</script>";
	}
	else {
	echo "<script>alert('Room Available.')</script>";
	echo "<script>window.open('newnew2.php','_self')</script>";
	}
}
else {
	echo "<script>alert('Room Available.')</script>";
	echo "<script>window.open('newnew2.php','_self')</script>";
	}
?>
<?php mysqli_close($conn); ?>