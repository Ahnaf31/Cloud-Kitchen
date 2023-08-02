<fieldset>
Cloud Kitchen Management System
<div align=right>
<?php include 'C:/xampp/htdocs/project/CloudKitchen/DeliveryMan/Navigation/header.php';
	if(!isset($_SESSION['username'])){  
		header("location: DeliveryMan_Login.php");
		
	}?>
</div>
</fieldset>

<!DOCTYPE html>
<html>
<head>
	<title>Add Delivered Items</title>
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
  background: rgb(200,39,225);
}
#Tinsert_form 
{
  width: 1200px;
  margin: 0px auto;
  border: 1px solid #918274;
  border-radius: 20px;
  color: rgb(173,100,235);
  font-family: "arial", Times, serif;
  font-size: 30px;
  background: rgb(234,182,241);
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
  color: rgb(21,219,216);
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
  
   height: 80px;
  width: 100px;
  margin: 5px 10%;
  font-size: 35px;
  color: goldenrod;
  background-color: rgb(245,245,220);
  text-decoration: underline-bold;
  border-radius: 5px;
}


</style>
</head>
<body style="background-color:#FFB6C1;">
	
	<form name="daycheck" id="Tinsert_form" action="../controller/Delivered_item_controller.php" method="post" onsubmit="return Dcheck();">
		
		
		<center><h1>ADD Delivered Item</h1>
		<div>
			CUSTOMER NAME: <input type="text" id="tname" name="tname" placeholder="CUSTOMER NAME" />
		</div>
		<div>
			DELIVERY TIME: <input type="time" id="stime" name="stime" placeholder="TIME OF DELIVERY" />
		</div>
		<div id="dayss">
    	<h2><b>PAYMENT METHOD</b></h2>
			<input type="checkbox" name="day" value=">> " required />
			<input type="checkbox" name="days[]" value="CASH" />CASH
			<input type="checkbox" name="days[]" value="ONLINE" />ONLINE<br>
------------------------------------------------------------------------------------------------------			
			</h2>
		</div>
		<div>
			<button style="cursor:move" type="submit" name="submit" id="submit" onclick="Dcheck()">INSERT DELIVERY DETAILS</button>
			<br><br><a href="../view/View_delivered_details.php">PREVIOUS DELIVERED HISTORY</a><br>
		</center></div>
		
	</form>
	
	<script type="text/javascript">

		"use strict"
		
		function Dcheck()
		{
			var Customername = document.getElementById('tname').value;
			var timings = document.getElementById('stime').value;
			//var dayss = document.getElementById('dayss');
			
			if(Customername == "")
			{
				alert('PLEASE FILL THE CUSTOMER_NAME to proceed');
				return false;
			}
			
			if(timings == "")
			{
				alert('PLEASE FILL THE Delivery Time to proceed');
				return false;
			}
			
			/*if(dayss == "")
			{
				alert('PLEASE FILL THE Checkbox to proceed');
				return false;
			}*/
			
			if(Customername.length<4)
			{
				alert('CUSTOMER Name must be at least 4 characters to be valid in this field');
				return false;
			}
			if(Customername.length>15)
			{
				alert('CUSTOMER Name must be less than 15 characters to be valid in this field');
				return false;
			}

			else
			{
				header("location: ../View_delivered_details.php");
				return true;
			}
			
		}
	</script>	
	<fieldset><br>
<div align=center>
<?php echo " <a href ='/project/CloudKitchen/DeliveryMan/view/DeliveryManDashboard.php'>Dashboard</a>";
?>

	
</body>
</html>
