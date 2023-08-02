<fieldset>
Cloud Kitchen Management System
<div align=right>
<?php include 'C:/xampp/htdocs/project/CloudKitchen/Admin/Navigation/header.php';
if(!isset($_SESSION['username'])){  
		header("location: Admin_Login.php");
		
	}?>
</div>
<?php

	require('../model/model.php');
	$result = getAllUsers();
	
	$con = mysqli_connect('127.0.0.1', 'root', '', 'ck');
	$sql =	"SELECT * FROM `schedule`"; 
	$results = mysqli_query($con,$sql);

?>
<html>
<head>
	<title>Schedule Meeting</title>
	<style rel="stylesheet">
body 
{
	background: rgb(204, 255, 255)
}

td
{
  text-align: center;
  color: rgb(153, 0, 204);
  width: 700px;
  height: 35px;
  margin: 5px 10%;
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
<center>
	<br>
	<br>
		<table border="4">
			<tr><td colspan="4"><h1><b><center>Schedule Meeting For Delivery Man</center></b></h1></td></tr>
			<div align=right>
			<?php include 'C:/xampp/htdocs/project/CloudKitchen/Admin/Navigation/header.php';?>
			</div>
			
			<tr><center>
				<td><center><b>Delivery Man_NAME</b></center></td>
				<td><center><b>TIME</b></center></td>
				<td><center><b>STUDY_DAYS</b></center></td>
				<td colspan="4"><center><b>----------</b></center></td>
			</tr>
			
			<tr>
			
			<?php
			while($row = mysqli_fetch_array($results))
			{?>
			
			<tr>
			<td><?= $row['NAME'] ?></a></td>
			<td><?= $row['TIME'] ?></td>
			<td><?= $row['DAY'] ?></td>
			<td><?= "<a href=../controller/Delete_meeting.php?id=".$row['ID'].">Remove</a>" ?></td>
			</tr>		
			
	<?php   }?>
			</tr>
			<tr><center>
				<td colspan="4"><center><a href="Insert_meeting.php"><b>INSERT NEW TIMINGS FOR MEETING</b></a></center></td>
			</center></tr>
			
	</table>
	
</center></body>
<fieldset>
Sidebar <br>
___________<br>
<div align=left>
<?php include 'C:/xampp/htdocs/project/CloudKitchen/Admin/Navigation/sidebar.php';
?>

</div>
</html>
