<?php
require('dbconnect.php');
$pay="";
$cancellation = "100";
$_SESSION['dri'];
if(isset($_POST['yes']))
{
	$dsql="DELETE FROM reserve where userId = '".$_SESSION['dri']."'";
	$run_dsql = mysqli_query($conn,$dsql);

if($run_dsql)
	 {
		$sql = "SELECT * FROM users WHERE userId='".$_SESSION['dri']."'";
		$result = mysqli_query($conn, $sql);
		echo $conn->error;
		while($row = mysqli_fetch_array($result)) {
   		$userRow = $row;
		}
	 $pay=$userRow['costPay'] + 100;
	 $update = "UPDATE users SET costPay='$pay' WHERE userId='".$_SESSION['dri']."'";
	 $run_up = mysqli_query($conn,$update);
	 if($run_up){
		 echo "<script>alert('This process cancellation has successful.')</script>";
		 echo "<script>window.open('admin.php','_self')</script>";
	}
	}
	else
	{
			echo "Error: " . $dsql . "<br>" . mysqli_error($conn);
}
}

if(isset($_POST['no']))
{
	header("location:edit1.php");
}
mysqli_close($conn);
?>