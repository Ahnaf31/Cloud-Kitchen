<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
<style rel="stylesheet">
body
{
	background: rgb(204, 255, 255);
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

<fieldset>
Cloud Kitchen Management System
<div align=right>
<?php include 'C:/xampp/htdocs/project/CloudKitchen/DeliveryMan/Navigation/header.php';

if(!isset($_SESSION['username'])){  
		header("location: DeliveryMan_Login.php");
		
	}
	?>
</div>
</fieldset>


<fieldset>
Account <br>
___________<br>
<div align=left>
<?php include 'C:/xampp/htdocs/project/CloudKitchen/DeliveryMan/Navigation/sidebar.php';
?>

</div>

<center>
<?php
if (isset($_SESSION['username'])) {
    echo "<h3> Welcome ".$_SESSION['username']." to the DeliveryMan Panel </h3>";
} 

?>
</center>
</fieldset>


<fieldset>
 <div align=center>
<?php include 'C:/xampp/htdocs/project/CloudKitchen/DeliveryMan/Navigation/footer.php';?>
</div>
</fieldset>
</body>
</html>