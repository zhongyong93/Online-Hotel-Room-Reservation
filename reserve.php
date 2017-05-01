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
				<li><a href="logout.php?logout"><span class="glyphicon glyphicon-user"></span>&nbsp;Profile</a></li>
                <li><a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Sign Out</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav> 

<div id="wrapper">

	<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
<link rel="stylesheet" href="new/bootstrap-iso.css" /> 

<!--Font Awesome (added because you use icons in your prepend/append)-->
<link rel="stylesheet" href="new/font-awesome.min.css" />

<!-- Inline CSS based on choices in "Settings" tab -->
<style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

<!-- HTML Form (wrapped in a .bootstrap-iso div) -->
<div class="bootstrap-iso">
 <div class="container-fluid">
  <div class="row">
   <div class="col-md-6 col-sm-6 col-xs-12">
    <form class="form-horizontal" method="post">
     <div class="form-group ">
      <label class="control-label col-sm-2 requiredField" for="date">
       Date
       <span class="asteriskField">
        *
       </span>
      </label>
      <div class="col-sm-10">
       <div class="input-group">
        <div class="input-group-addon">
         <i class="fa fa-calendar">
         </i>
        </div>
        <input class="form-control" id="date" name="date" placeholder="DD/MM/YYYY" type="text"/>
       </div>
      </div>
     </div>
     <div class="form-group">
      <div class="col-sm-10 col-sm-offset-2">
       <button class="btn btn-primary " name="submit" type="submit">
        Submit
       </button>
      </div>
     </div>
    </form>
   </div>
  </div>
 </div>
</div>


<!-- Extra JavaScript/CSS added manually in "Settings" tab -->
<!-- Include jQuery -->
<script src="new/jquery-1.11.3.min.js"></script>

<!-- Include Date Range Picker -->
<script src="new/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="new/bootstrap-datepicker3.css"/>

<script>
	$(document).ready(function(){
		var date_input=$('input[name="date"]'); //our date input has the name "date"
		var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
		date_input.datepicker({
			format: 'mm/dd/yyyy',
			container: container,
			todayHighlight: true,
			autoclose: true,
		})
	})
</script>


<div class="container">
<div class="page-header">
<h1> <font size=50% color=black>Date to choose </font><br></h1>
    	</div>
<div class="left_box_container">
<h3 class="side_box_heading">Reservation</h3>
<div class="side_box_content left">
<link rel="stylesheet" type="text/css" href="calendar.css">
		<form target="" action="http://www.apphp.com/php-hotel-site/examples/sample2/index.php?page=check_availability" id="reservation-form" name="reservation-form" method="post">
		<input type="hidden" name="room_id" value="">
		<input type="hidden" name="p" id="page_number" value="1">
		<input type="hidden" name="token" value="b6ef40b51b1018b040c2b12f0f415bad"><table cellspacing="2" border="0">
				<tbody><tr><td><label>Check In:</label></td></tr>
				<tr><td nowrap="nowrap"><select id="checkin_day" name="checkin_monthday" class="checkin_day" onchange="cCheckDateOrder(this,'checkin_monthday','checkin_year_month','checkout_monthday','checkout_year_month');cUpdateDaySelect(this);">
						<option class="day prompt" value="0">Day</option>
						<option value="1" >1</option>
						<option value="2" >2</option>
						<option value="3" >3</option>
						<option value="4" >4</option>
						<option value="5" >5</option>
						<option value="6" >6</option>
						<option value="7" >7</option>
						<option value="8" >8</option>
						<option value="9" >9</option>
						<option value="10" >10</option>
						<option value="11" >11</option>
						<option value="12" >12</option>
						<option value="13" >13</option>
						<option value="14" >14</option>
						<option value="15" >15</option>
						<option value="16" >16</option>
						<option value="17" >17</option>
						<option value="18" >18</option>
						<option value="19" >19</option>
						<option value="20" >20</option>
						<option value="21" >21</option>
						<option value="22" >22</option>
						<option value="23" >23</option>
						<option value="24" >24</option>
						<option value="25" >25</option>
						<option value="26" >26</option>
						<option value="27" >27</option>
						<option value="28" >28</option>
						<option value="29" >29</option>
						<option value="30" selected="selected">30</option>
						<option value="31">31</option></select>
					<select id="checkin_year_month" name="checkin_year_month" class="checkin_year_month" onchange="cCheckDateOrder(this,'checkin_monthday','checkin_year_month','checkout_monthday','checkout_year_month');cUpdateDaySelect(this);">
						<option class="month prompt" value="0">Month</option>
						<option value="2017-4" selected="selected">April '17</option>
						<option value="2017-5">May '17</option>
						<option value="2017-6">June '17</option>
						<option value="2017-7">July '17</option>
						<option value="2017-8">August '17</option>
						<option value="2017-9">September '17</option>
						<option value="2017-10">October '17</option>
						<option value="2017-11">November '17</option>
						<option value="2017-12">December '17</option>
						<option value="2018-1">January '18</option>
						<option value="2018-2">February '18</option>
						<option value="2018-3">March '18</option>
						</select><a class="calendar" onclick="cShowCalendar(this,'calendar','checkin');" href="javascript:void(0);"><img title="Open calendar and pick a date" alt="calendar" src="calendar1.jpg" width="21" height="18"></a></td></tr>
				<tr><td><label>Check Out:</label></td></tr>
				<tr><td nowrap="nowrap">
				<select id="checkout_monthday" name="checkout_monthday" class="checkout_day" onchange="cCheckDateOrder(this,'checkout_monthday','checkout_year_month');cUpdateDaySelect(this);">
						<option class="day prompt" value="0">Day</option>
						<option value="1">1</option>
						<option value="2">2</option>
						<option value="3">3</option>
						<option value="4">4</option>
						<option value="5">5</option>
						<option value="6">6</option>
						<option value="7">7</option>
						<option value="8">8</option>
						<option value="9">9</option>
						<option value="10">10</option>
						<option value="11">11</option>
						<option value="12">12</option>
						<option value="13">13</option>
						<option value="14">14</option>
						<option value="15">15</option>
						<option value="16">16</option>
						<option value="17">17</option>
						<option value="18">18</option>
						<option value="19">19</option>
						<option value="20">20</option>
						<option value="21">21</option>
						<option value="22">22</option>
						<option value="23">23</option>
						<option value="24">24</option>
						<option value="25">25</option>
						<option value="26">26</option>
						<option value="27">27</option>
						<option value="28">28</option>
						<option value="29">29</option>
						<option value="30" selected="selected">30</option>
						<option value="31">31</option></select>
					<select id="checkout_year_month" name="checkout_year_month" class="checkout_year_month" onchange="cCheckDateOrder(this,'checkout_monthday','checkout_year_month');cUpdateDaySelect(this);">
						<option class="month prompt" value="0">Month</option>
						<option value="2017-4" selected="selected">April '17</option>
						<option value="2017-5">May '17</option>
						<option value="2017-6">June '17</option>
						<option value="2017-7">July '17</option>
						<option value="2017-8">August '17</option>
						<option value="2017-9">September '17</option>
						<option value="2017-10">October '17</option>
						<option value="2017-11">November '17</option>
						<option value="2017-12">December '17</option>
						<option value="2018-1">January '18</option>
						<option value="2018-2">February '18</option>
						<option value="2018-3">March '18</option>
						</select><a class="calendar" onclick="cShowCalendar(this,'calendar','checkout');" href="javascript:void(0);"><img title="Open calendar and pick a date" alt="calendar" src="calendar1.jpg" width="21" height="18"></a></td></tr>
				<tr><td style="height:5px"></td></tr>
				<tr><td nowrap="nowrap">Adults:
					<select class="max_occupation" name="max_adults" id="max_adults">
					<option value="1" selected="selected">1&nbsp;</option>
					<option value="2">2&nbsp;</option>
					<option value="3">3&nbsp;</option>
					<option value="4">4&nbsp;</option>
					<option value="5">5&nbsp;</option>
					<option value="6">6&nbsp;</option>
					<option value="7">7&nbsp;</option>
					<option value="8">8&nbsp;</option></select>&nbsp;</td></tr>
				<tr><td style="height:7px"></td></tr>
				<tr><td><input class="button" type="button" onclick="document.getElementById('reservation-form').submit()" value="Check Availability"></td></tr>	
				</tbody></table></form>
				
			<div id="calendar" style="left: 210px; top: 477px; display: block;">
		<table class="caltable" border="0" cellspacing="0"><tbody><tr>
		<td class="calheader monthYear" colspan="4">
		<select name="ym" class="ym_month" onchange="cGoYearMonth( this.options[this.selectedIndex].value );">
		<option value="2017-4" selected="selected">April 2017</option>
		<option value="2017-5">May 2017</option>
		<option value="2017-6">June 2017</option>
		<option value="2017-7">July 2017</option>
		<option value="2017-8">August 2017</option>
		<option value="2017-9">September 2017</option>
		<option value="2017-10">October 2017</option>
		<option value="2017-11">November 2017</option>
		<option value="2017-12">December 2017</option>
		<option value="2018-1">January 2018</option>
		<option value="2018-2">February 2018</option>
		<option value="2018-3">March 2018</option> </select></td>
		<td class="calheader monthYear" colspan="2">
		<a class="calPrevMonth" href="javascript:void(0)"><img src="templates/default/images/butPrevMonth2.gif" width="16" height="24" alt="Previous"></a>
		<a class="calNextMonth" href="" onclick="cNextMonth( 2017,4 ); return false;" title="Next">
		<img src="templates/default/images/butNextMonth.gif" width="16" height="24" alt="Next"></a></td>
		<td class="calheader monthYear"><a class="calCloseLink" href="#" onclick="cCloseCal(); return false;">
		<img src="templates/default/images/delete.gif" width="16" height="24" alt="icon" title="Close"></a></td></tr>
		<tr class="dayNames"><td class="">Mon</td><td class="">Tue</td><td class="">Wed</td>
		<td class="">Thu</td><td class="">Fri</td><td class=" weekend">Sat</td>
		<td class=" weekend">Sun</td></tr><tr class="days"><td class="">&nbsp;</td>
		<td class="">&nbsp;</td><td class="">&nbsp;</td><td class="">&nbsp;</td>
		<td class="">&nbsp;</td><td class=" weekend past">1</td>
		<td class=" weekend past">2</td></tr><tr class="days">
		<td class=" past">3</td>
		<td class=" past">4</td>
		<td class=" past">5</td>
		<td class=" past">6</td>
		<td class=" past">7</td>
		<td class=" weekend past">8</td>
		<td class=" weekend past">9</td></tr>
		<tr class="days">
		<td class=" past">10</td>
		<td class=" past">11</td>
		<td class=" past">12</td>
		<td class=" past">13</td>
		<td class=" past">14</td>
		<td class=" weekend past">15</td>
		<td class=" weekend past">16</td></tr>
		<tr class="days">
		<td class=" past">17</td>
		<td class=" past">18</td>
		<td class=" past">19</td>
		<td class=" past">20</td>
		<td class=" past">21</td>
		<td class=" weekend past">22</td>
		<td class=" weekend past">23</td></tr>
		<tr class="days">
		<td class=" past">24</td>
		<td class=" past">25</td>
		<td class=" past">26</td>
		<td class=" past">27</td>
		<td class=" past">28</td>
		<td class=" weekend past">29</td>
		<td class=" weekend selected today">
		<a href="#" onclick="cPickDate( 2017,4,30,'checkin' ); return false;">30</a></td></tr>
		<tr class="days">
		<td class="">&nbsp;</td><td class="">&nbsp;</td><td class="">&nbsp;</td><td class="">&nbsp;</td>
		<td class="">&nbsp;</td><td class=" weekend">&nbsp;</td><td class=" weekend">&nbsp;</td></tr></tbody></table></div></div>
<div class="shadow"></div>
		
</div>
</div>
</div>
    <div class="container">
    	<div class="page-header">
    	<h1> <font size=50% color=black>Room Choice </font><br></h1>
    	</div>

<table>
  <tr>
    <th><font size=4 color=black>Room Type</font></th>
    <th><font size=4 color=black>Description</font></th>
    <th><font size=4 color=black>Room(Cost)</font></th>
    <th><font size=4 color=black>Date</font></th>
  </tr>
  <tr>
    <td><img src="1.jpg" width="100" height="100" border="0"></td>
    <td><p style="color:Black;"><span class="glyphicon glyphicon-bed"></span>&nbsp;Single Bed</a></p>
    <font size=3 color=black>-Only provide 1 single bed.<br>
    -Max for 1 guest only.</font></td>
<td><select name="available_rooms" class="available_rooms_ddl">
<option value="1-55">1 (55.00$)</option>
<option value="2-110">2 (110.00$)</option>
<option value="3-165">3 (165.00$)</option>
<option value="4-220">4 (220.00$)</option>
<option value="5-275">5 (275.00$)</option>
<option value="6-330">6 (330.00$)</option>
<option value="7-385">7 (385.00$)</option>
<option value="8-440">8 (440.00$)</option>
<option value="9-495">9 (495.00$)</option>
<option value="10-550">10 (550.00$)</option></td>
    <td><input type="submit" class="form_button_middle" style="margin-top:10px;" value="Book Now!"></td></tr>
     <td><img src="2.jpg" width="100" height="100" border="0"></td>
    <td><p style="color:Black;"><span class="glyphicon glyphicon-bed"></span>&nbsp;2 Single Bed</a></p>
    <font size=3 color=black>-Provide 2 single bed.<br>
    -Max for 2 guest only.</font></td>
    <td><select name="available_rooms" class="available_rooms_ddl">
<option value="1-80">1 (80.00$)</option>
<option value="2-160">2 (160.00$)</option>
<option value="3-240">3 (240.00$)</option>
<option value="4-320">4 (320.00$)</option>
<option value="5-400">5 (400.00$)</option>
<option value="6-480">6 (480.00$)</option>
<option value="7-560">7 (560.00$)</option>
<option value="8-640">8 (640.00$)</option>
<option value="9-720">9 (720.00$)</option>
<option value="10-800">10 (800.00$)</option></select></td>
    <td><input type="submit" class="form_button_middle" style="margin-top:10px;" value="Book Now!"></td></tr>
   <tr>
    <td><img src="3.jpg" width="100" height="100" border="0"></td>
    <td><p style="color:Black;"><span class="glyphicon glyphicon-bed"></span>&nbsp;Double Bed</a></p>
    <font size=3 color=black>-Only provide 1 double bed.<br>
    -Max for 2 guest only.</font></td>
    <td><select name="available_rooms" class="available_rooms_ddl">
<option value="1-140">1 (140.00$)</option>
<option value="2-280">2 (280.00$)</option>
<option value="3-420">3 (420.00$)</option>
<option value="4-560">4 (560.00$)</option>
<option value="5-700">5 (700.00$)</option></select></td>
    <td><input type="submit" class="form_button_middle" style="margin-top:10px;" value="Book Now!"></td></tr>
   <tr>
    <td><img src="4.jpg" width="100" height="100" border="0"></td>
    <td><p style="color:Black;"><span class="glyphicon glyphicon-bed"></span>&nbsp;4-Bed Domitary</a></p>
    <font size=3 color=black>-Provide 4 single bed.<br>
    -Max for 4 guest only.</font></td>
    <td><select name="available_rooms" class="available_rooms_ddl">
<option value="1-190">1 (190.00$)</option>
<option value="2-380">2 (380.00$)</option>
<option value="3-570">3 (570.00$)</option></select></td>
    <td><input type="submit" class="form_button_middle" style="margin-top:10px;" value="Book Now!"></td></tr>
</table>
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
<?php ob_end_flush(); ?>