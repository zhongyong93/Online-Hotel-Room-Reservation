<table cellspacing="2" border="0">
				<tbody><tr><td><label>Check In:</label></td></tr>
				<tr><td nowrap="nowrap"><select id="checkin_day" name="checkin_monthday" class="checkin_day" onchange="cCheckDateOrder(this,'checkin_monthday','checkin_year_month','checkout_monthday','checkout_year_month');cUpdateDaySelect(this);">
						<option class="day prompt" value="0">Day</option><option value="1" disabled="">1</option><option value="2" disabled="">2</option><option value="3" disabled="">3</option><option value="4" disabled="">4</option><option value="5" disabled="">5</option><option value="6" disabled="">6</option><option value="7" disabled="">7</option><option value="8" disabled="">8</option><option value="9" disabled="">9</option><option value="10" disabled="">10</option><option value="11" disabled="">11</option><option value="12" disabled="">12</option><option value="13" disabled="">13</option><option value="14" disabled="">14</option><option value="15" disabled="">15</option><option value="16" disabled="">16</option><option value="17" disabled="">17</option><option value="18" disabled="">18</option><option value="19" disabled="">19</option><option value="20" disabled="">20</option><option value="21" disabled="">21</option><option value="22" disabled="">22</option><option value="23" disabled="">23</option><option value="24" disabled="">24</option><option value="25" disabled="">25</option><option value="26" disabled="">26</option><option value="27" disabled="">27</option><option value="28" disabled="">28</option><option value="29" disabled="">29</option><option value="30" selected="selected">30</option><option value="31">31</option></select>
					<select id="checkin_year_month" name="checkin_year_month" class="checkin_year_month" onchange="cCheckDateOrder(this,'checkin_monthday','checkin_year_month','checkout_monthday','checkout_year_month');cUpdateDaySelect(this);">
						<option class="month prompt" value="0">Month</option><option value="2017-4" selected="selected">April '17</option><option value="2017-5">May '17</option><option value="2017-6">June '17</option><option value="2017-7">July '17</option><option value="2017-8">August '17</option><option value="2017-9">September '17</option><option value="2017-10">October '17</option><option value="2017-11">November '17</option><option value="2017-12">December '17</option><option value="2018-1">January '18</option><option value="2018-2">February '18</option><option value="2018-3">March '18</option></select><a class="calendar" onclick="cShowCalendar(this,'calendar','checkin');" href="javascript:void(0);"><img title="Open calendar and pick a date" alt="calendar" src="templates/default/images/button-calendar.png" width="21" height="18"></a></td></tr>
				<tr><td><label>Check Out:</label></td></tr>
				<tr><td nowrap="nowrap"><select id="checkout_monthday" name="checkout_monthday" class="checkout_day" onchange="cCheckDateOrder(this,'checkout_monthday','checkout_year_month');cUpdateDaySelect(this);">
						<option class="day prompt" value="0">Day</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30" selected="selected">30</option><option value="31">31</option></select>
					<select id="checkout_year_month" name="checkout_year_month" class="checkout_year_month" onchange="cCheckDateOrder(this,'checkout_monthday','checkout_year_month');cUpdateDaySelect(this);">
						<option class="month prompt" value="0">Month</option><option value="2017-4" selected="selected">April '17</option><option value="2017-5">May '17</option><option value="2017-6">June '17</option><option value="2017-7">July '17</option><option value="2017-8">August '17</option><option value="2017-9">September '17</option><option value="2017-10">October '17</option><option value="2017-11">November '17</option><option value="2017-12">December '17</option><option value="2018-1">January '18</option><option value="2018-2">February '18</option><option value="2018-3">March '18</option></select><a class="calendar" onclick="cShowCalendar(this,'calendar','checkout');" href="javascript:void(0);"><img title="Open calendar and pick a date" alt="calendar" src="templates/default/images/button-calendar.png" width="21" height="18"></a></td></tr>
				<tr><td style="height:5px"></td></tr>
				<tr><td nowrap="nowrap">Adults:
					<select class="max_occupation" name="max_adults" id="max_adults"><option value="1" selected="selected">1&nbsp;</option><option value="2">2&nbsp;</option><option value="3">3&nbsp;</option><option value="4">4&nbsp;</option><option value="5">5&nbsp;</option><option value="6">6&nbsp;</option><option value="7">7&nbsp;</option><option value="8">8&nbsp;</option></select>&nbsp;</td></tr>
				<tr><td style="height:7px"></td></tr>
				<tr><td><input class="button" type="button" onclick="document.getElementById('reservation-form').submit()" value="Check Availability"></td></tr>	
				</tbody></table>