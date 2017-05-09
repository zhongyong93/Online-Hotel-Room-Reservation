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
	$pass = "";
	$newPass = "";
	$password ="";
	$password1 = "";
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

<?php
$sql1 = "SELECT * FROM users WHERE userId=".$_SESSION['user'];
$result = mysqli_query($conn, $sql1);
echo $conn->error;
while($row = mysqli_fetch_array($result)) {
$userRow = $row;
}
if($password != $userRow['userPass']){
	
	echo "<script>alert('The password is wrong.')</script>";
	echo "<script>window.open('profile.php','_self')</script>";
	
}
else if (($pass) != ($newPass)){
		
		$_SESSION['user'];
		$query = "SELECT userId FROM users where userId = '".$_SESSION['user']."'";
		$result = mysqli_query($conn,$query);
		if ( ($result) == true)
		{	
			$sql = "SELECT * FROM users WHERE userId=".$_SESSION['user'];
			$result = mysqli_query($conn, $sql);
			echo $conn->error;
			while($row = mysqli_fetch_array($result)) {
				$userRow = $row;
			}

		$update_u = "UPDATE users SET userPass='$password1' WHERE userId=".$_SESSION['user'];

		$run_update = mysqli_query($conn,$update_u);
	
		if($run_update)
		{	
			echo "<script>alert('Your profile have been updated successfully!')</script>";
			echo "<script>window.open('profile.php','_self')</script>";
		}
	}
else {
	echo "<script>alert('The password is same. Please change another')</script>";
	echo "<script>window.open('profile.php','_self')</script>";
	}
}
?>