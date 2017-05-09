<?php
require('dbconnect.php');

$_SESSION['dui'];
if(isset($_POST['yes']))
{
	$dsql="DELETE FROM users where userId = '".$_SESSION['dui']."'";
	$run_dsql = mysqli_query($conn,$dsql);

	 if($run_dsql)
	 {
		 echo "<script>alert('This user has been deleted successfully!')</script>";
		 echo "<script>window.open('admin.php','_self')</script>";
	 }
	else
	{
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

if(isset($_POST['no']))
{
	header("location:edit.php");
}
?>
