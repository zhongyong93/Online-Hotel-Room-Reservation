<?php
require('dbconnect.php');
$pay="";
$cancel="";
$_SESSION['dri'];
date_default_timezone_set("Asia/Kuala_Lumpur");
$dayBefore = date("Y-m-d",strtotime(' +1 day'));
if(isset($_POST['yes']))
{	
	$sql5 = "SELECT * FROM reserve WHERE rs_Id='".$_SESSION['dri']."'";
	$result5 = mysqli_query($conn, $sql5);
	while($row5 = mysqli_fetch_array($result5)) {
	$userRow5 = $row5;
	}
	$_SESSION['uid'] = $userRow5['userId'];
	if ($userRow5['dateCi'] == $dayBefore) {
	$cancel = $userRow5['cost'] / 2 ;
	}
	else {
	$cancel = 0;
	}
	$dsql="DELETE FROM reserve where rs_Id= '".$_SESSION['dri']."'";
	$run_dsql = mysqli_query($conn,$dsql);
	
if($run_dsql)
	 {	
		$sql = "SELECT * FROM users WHERE userId='".$_SESSION['uid']."'";
		$result = mysqli_query($conn, $sql);
		echo $conn->error;
		while($row = mysqli_fetch_array($result)) {
   		$userRow = $row;
		}
		echo "<script>alert('This process cancellation has successful.')</script>";
		echo "<script>window.open('index.php','_self')</script>";
	 }
	 else
	{
			echo "Error: " . $dsql . "<br>" . mysqli_error($conn);
}	
}   
if(isset($_POST['no']))
{
	 echo "<script>alert('This process cancellation has failed to cancel.')</script>";
	 echo "<script>window.open('index.php','_self')</script>";
}

		$userRow['cancel']= $userRow['cancel'] + $cancel;
		$cancel1 = $userRow['cancel'];
		$update1 = "UPDATE users SET cancel=".$cancel1." WHERE userId='".$_SESSION['uid']."'";
		$run_up1 = mysqli_query($conn,$update1);
		$sql1 = "SELECT * FROM `reserve` WHERE `userId` = ".$_SESSION['uid'];
		$result1 = mysqli_query($conn,$sql1);
		$total = 0;
		while ($row1 = mysqli_fetch_assoc($result1)) {
		$total = $total + $row1['cost']; }
		$userRow['costPay'] = $total + $userRow['cancel'];
		$pay=$userRow['costPay'];
	 $update = "UPDATE users SET costPay='$pay' WHERE userId='".$_SESSION['uid']."'";
	 $run_up = mysqli_query($conn,$update);
	 if($run_up){
		 echo '<br>'.$pay.'<br>'.$total.'<br>'.$userRow['cancel'].'<br>'.$cancel1.'<br>'.$cancel;
	}
mysqli_close($conn);
?>