<?php

require('dbconnect.php');

$dri=$_POST['userId'];
$_SESSION['dri']=$dri;
echo '<form method="POST" action="deletesuccess1.php">';
?>
<table width ="600" align="center">

<tr align="center">
<td colspan="10"><h2><b>CANCEL this Reservation? </b></h2></td>
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