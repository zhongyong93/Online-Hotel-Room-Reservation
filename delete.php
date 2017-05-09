<?php

require('dbconnect.php');

$dui=$_POST['userId'];
$_SESSION['dui']=$dui;
echo '<form method="POST" action="deletesuccess.php">';
?>
<table width ="600" align="center">

<tr align="center">
<td colspan="10"><h2><b>CANCEL this User? </b></h2></td>
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