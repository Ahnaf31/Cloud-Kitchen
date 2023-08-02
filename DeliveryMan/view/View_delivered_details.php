<div align=right>
<?php include 'C:/xampp/htdocs/project/CloudKitchen/Admin/Navigation/header.php';?>
</div>
<?php
	
	
	
	require_once('../model/model.php');
	$result = getAllDeliveryMan();
	if(!isset($_SESSION['username'])){  
		header("location: DeliveryMan_Login.php");
		
	}
	
	$con = mysqli_connect('127.0.0.1', 'root', '', 'ck');
	$sql =	"SELECT * FROM `itemdelivered`"; 
	$results = mysqli_query($con,$sql);
	
?>
<html>
<head>
	<title>Delivery History</title>
	<style rel="stylesheet">
body
{
	background: rgb(204, 255, 255);
}

td
{
  text-align: center;
  color: rgb(153, 0, 100);
  width: 200px;
  height: 60px;
  margin: 5px 10%;
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
<center>
	<br>
	<br>
		<table border="4">
			<tr><td colspan="4"><h1><b><center>Delivery History</center></b></h1></td></tr>
			<div align=right>
			<?php include 'C:/xampp/htdocs/project/CloudKitchen/DeliveryMan/Navigation/header.php';?>
			</div>
			
			<tr><center>
				<td><center><b>CUSTOMER NAME</b></center></td>
				<td><center><b>TIME</b></center></td>
				<td><center><b>PAYMENT METHOD</b></center></td>
				
			</tr>
			
			<tr>
			
			<?php
			while($row = mysqli_fetch_array($results))
			{?>
			
			<tr>
			<td><?= $row['NAME'] ?></a></td>
			<td><?= $row['TIME'] ?></td>
			<td><?= $row['PAYMENT'] ?></td>
			</tr>		
			
	<?php   }?>
			</tr>
			<tr><center>
				<td colspan="4"><center><a href="Add delivered item.php"><b>Add New Delivered Items</b></a></center></td>
			</center></tr>
			
	</table>
	
</center></body>
<fieldset>
Sidebar <br>
___________<br>
<div align=left>
<?php include 'C:/xampp/htdocs/project/CloudKitchen/DeliveryMan/Navigation/sidebar.php';
?>

</div>
</html>
