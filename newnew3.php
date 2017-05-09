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
$checkIn = "";
$checkOut = "";
$guest = "";
$pay = "";
$roomtype="";
$roomNum="";
$pay1 = "";
$checkIn = ($_POST["checkIn"]);
$checkOut = ($_POST["checkOut"]);
$guest = ($_POST["guest"]);

if ($_POST["sBed"] == 0) {
	if ($_POST["tSBed"] == 0) {
		if ($_POST["dBed"] == 0) {
			if ($_POST["fBed"] != 0) {
				$roomtype = "fBed";
				$roomNum = $_POST["fBed"];
				$pay = $_POST["fBed"] * 30;
				$pay1 = $userRow['costPay'] +($_POST["fBed"] * 30);
			}
		}
		else {
			$roomtype = "dBed";
			$roomNum = $_POST["dBed"];
			$pay = $_POST["dBed"] * 140;
			$pay1 = $userRow['costPay'] +($_POST["dBed"] * 140);
		}
	}
	else {
			$roomtype = "tSBed";
			$roomNum = $_POST["tSBed"];
			$pay = $_POST["tSBed"] * 80;
			$pay1 = $userRow['costPay'] +($_POST["tSBed"] * 80);
		}
}
else {
			$roomtype = "sBed";
			$roomNum = $_POST["sBed"];
			$pay = $_POST["sBed"] * 55;
			$pay1 = $userRow['costPay'] +($_POST["sBed"] * 55);
		}
?>
<?php
$sql1 = "SELECT rmType,dateCi, SUM(rmNum) as total FROM reserve GROUP BY rmType,dateCi";
	$result = mysqli_query($conn,$sql1);
	while ($row1 = mysqli_fetch_assoc($result)) {
if ($row1['dateCi'] == $_SESSION['checkIn']){
if ($row1['rmType'] == 'sBed'){
	if ($row1['total'] >= 10) {
		echo "<script>alert('Single Bed Room is Full Occupied.')</script>";
		echo "<script>window.open('index.php','_self')</script>";
		exit;
	}
	else {
		echo "";
	}
}
if ($row1['rmType'] == 'tSBed'){
		if ($row1['total'] >= 10) {
		echo "<script>alert('Two Single Bed Room is Full Occupied'></script>";
		echo "<script>window.open('index.php','_self')</script>";
		exit;
	}
	else {
		echo "";
	}
}
if ($row1['rmType'] == 'dBed'){
		if ($row1['total'] >= 5) {
		echo "<script>alert('Double Bed Room is Full Occupied')</script>";
		echo "<script>window.open('index.php','_self')</script>";
		exit;
	}
	else {
		echo "";
	}
}
if ($row1['rmType'] == 'fBed'){
		if ($row1['total'] >= 12) {
		echo "<script>alert('Four-Bed Domitary Room is Full Occupied'></script>";
		echo "<script>window.open('index.php','_self')</script>";
		exit;
	}
	else {
		echo "";
	}
}
}
if ($row1['dateCi'] == $_SESSION['checkOut']){
if ($row1['rmType'] == 'sBed'){
	if ($row1['total'] >= 10) {
		echo "<script>alert('Single Bed Room is Full Occupied.')</script>";
		echo "<script>window.open('index.php','_self')</script>";
		exit;
	}
	else {
		echo "";
	}
}
if ($row1['rmType'] == 'tSBed'){
		if ($row1['total'] >= 10) {
		echo "<script>alert('Two Single Bed Room is Full Occupied'></script>";
		echo "<script>window.open('index.php','_self')</script>";
		exit;
	}
	else {
		echo "";
	}
}
if ($row1['rmType'] == 'dBed'){
		if ($row1['total'] >= 5) {
		echo "<script>alert('Double Bed Room is Full Occupied'></script>";
		echo "<script>window.open('index.php','_self')</script>";
		exit;
	}
	else {
		echo "";
	}
}
if ($row1['rmType'] == 'fBed'){
		if ($row1['total'] >= 12) {
		echo "<script>alert('Four-Bed Domitary Room is Full Occupied'></script>";
		echo "<script>window.open('index.php','_self')</script>";
		exit;
	}
	else {
		echo "";
	}
}
}
}
?>
<?php
$query = "INSERT INTO `reserve` (`userId`,`userName`,`userEmail`,`rmType`,`rmNum`,`guest`,`dateCi`,`dateCo`,`cost`) VALUES('".$userRow['userId']."','".$userRow['userName']."','".$userRow['userEmail']."','".$roomtype."','".$roomNum."','".$guest."','".$checkIn."','".$checkOut."','".$pay."')";			
			$res1 = mysqli_query($conn,$query);
			if($res1) {
$update = "UPDATE users SET costPay='$pay1' WHERE userId=".$_SESSION['user'];
			$run_up = mysqli_query($conn,$update);
		if($run_up){
		 echo "<script>alert('This process reservation has successful.')</script>";
		 echo "<script>window.open('index.php','_self')</script>";
	 }}
	else
	{
			echo "Error: " . $res . "<br>" . mysqli_error($conn);
}
mysqli_close($conn);
?>