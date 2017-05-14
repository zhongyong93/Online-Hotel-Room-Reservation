<?php

require('dbconnect.php');
date_default_timezone_set("Asia/Kuala_Lumpur");
$dri=$_POST['rs_Id'];
$_SESSION['dri']=$dri;
echo '<form method="POST" action="deletesuccess1.php">';
?>
<table width ="600" align="center">

<tr align="center">
<td colspan="10"><h2><b>CANCEL this Reservation Id = <?php echo $_SESSION['dri'];?>? </b></h2></td>
</tr>

<tr align="center">
<td colspan="10"><h2><b>Are you sure? </b></h2></td>
</tr>

<tr align="center">
<td> <input name="yes" type="submit" value="YES!" />
</td>
</tr>

<tr align="center">
<td> <input name="no" type="submit" value="NO!" />

</td>
</tr>
</table>
</form>