<fieldset>
Cloud Kitchen Management System
<div align=right>
<?php include 'C:/xampp/htdocs/project/CloudKitchen/Admin/Navigation/header.php';
if(!isset($_SESSION['username'])){  
		header("location: Admin_Login.php");
		
	}?>
</div>
</fieldset>

<!DOCTYPE html>
<html>
<head>
	<title>Insert Meeting</title>
<style rel="stylesheet">
body
{
	background: rgb(204, 255, 255);
}
#Tinsert_form h1 
{
  text-align: center;
  margin: 10px auto;
  color: white;
  background: black;
}
#Tinsert_form 
{
  width: 1200px;
  margin: 0px auto;
  border: 1px solid #918274;
  border-radius: 20px;
  color: blue;
  font-family: "Comic Sans MS", Times, serif;
  font-size: 30px;
  background: rgb(196,188,150);
}
#Tinsert_form input 
{
  
  width: 600px;
  height: 35px;
  margin: 5px 10%;
  color: blue;
  font-family: "Comic Sans MS", Times, serif;
  font-size: 25px;
}
#submit 
{
  height: 60px;
  width: 400px;
  margin: 10px 10%; 
  font-family: "IMPACT";
  font-size: 35px;
  color: white;
  background: rgb(255,0,0);
  border: none;
  border-radius: 5px;
}

#dayss
{
  text-align: left;
  width: 900px;
  color: blue;
  font-family: "Comic Sans MS", Times, serif;
  font-size: 20px; 
  border: 1px solid black;
  border-radius: 10px;
  background-color: white;
}

#dayss input 
{
  text-align: left;
  width: 35px;
  height: 25px;
  font-family: "Comic Sans MS", Times, serif;
  font-size: 20px;
}
a
{

 height: 60px;
  width: 100px;
  margin: 5px 10%; 
  font-size: 35px;
  color: greenyellow;
  background-color:	midnightblue ;
  text-decoration: underline-bold;
  border-radius: 2px;

}


</style>
</head>
<body>
	
	<form name="daycheck" id="Tinsert_form" action="../controller/Insert_meeting_controller.php" method="post" onsubmit="return Dcheck();">
		
		
		<center><h1>ADD NEW SCHEDULES</h1>
		<div>
			Delivery Man NAME: <input type="text" id="tname" name="tname" placeholder="Delivery Man Name" />
		</div>
		<div>
			TIME/SCHEDULE: <input type="time" id="stime" name="stime" placeholder="TIME OF ARRIVAL" />
		</div>
		<div id="dayss">
    	<h2><b>SCHEDULE DATE</b></h2>
			<input type="checkbox" name="day" value=">> " required />
			<input type="checkbox" name="days[]" value="SATURDAY" />SAT
			<input type="checkbox" name="days[]" value="SUNDAY" />SUN<br>
------------------------------------------------------------------------------------------------------			
			<input type="checkbox" name="days[]" value="MONDAY" />MON
			<input type="checkbox" name="days[]" value="TUESDAY" />TUE
			<input type="checkbox" name="days[]" value="WEDNESDAY" />WED<br>
------------------------------------------------------------------------------------------------------
			<input type="checkbox" name="days[]" value="THURSDAY" />THURS
			<input type="checkbox" name="days[]" value="FRIDAY" />FRI
			</h2>
		</div>
		<div>
			<button style="cursor:move" type="submit" name="submit" id="submit" onclick="Dcheck()">INSERT NEW SCHEDULES</button>
			<br><a href="../view/Schedule_Meeting.php">AVAILABLE SCHEDULES</a>
		</center></div>
		
	</form>
	
	<script type="text/javascript">

		"use strict"
		
		function Dcheck()
		{
			var DeliveryMan = document.getElementById('tname').value;
			var timings = document.getElementById('stime').value;
			var dayss = document.getElementById('dayss');
			
			if(DeliveryMan == "")
			{
				alert('PLEASE FILL THE Delivery Man NAME to proceed');
				return false;
			}
			
			if(timings == "")
			{
				alert('PLEASE FILL THE SCHEDULE HOUR to proceed');
				return false;
			}
			
			if(dayss == "")
			{
				alert('PLEASE FILL THE Checkbox to proceed');
				return false;
			}
			
			if(DeliveryMan.length<4)
			{
				alert('Delivery Man NAME must be at least 4 characters to be valid in this field');
				return false;
			}
			if(DeliveryMan.length>15)
			{
				alert('Delivery Man NAME must be less than 15 characters to be valid in this field');
				return false;
			}

			else
			{
				header("location: ../Schedule_Meeting.php");
				return true;
			}
			
		}
	</script>	
	<fieldset>
<div align=left>
<?php include 'C:/xampp/htdocs/project/CloudKitchen/Admin/Navigation/sidebar.php';
?>

	
</body>
</html>
