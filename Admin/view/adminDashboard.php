<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>

</head>
<body style="background-color:#ccffff;">

<fieldset>
Cloud Kitchen Management System
<div align=right>
<?php include 'C:/xampp/htdocs/project/CloudKitchen/Admin/Navigation/header.php';
if(!isset($_SESSION['username'])){  
		header("location: Admin_Login.php");
		
	}
?>
</div>
</fieldset>


<fieldset>
Account <br>
___________<br>
<div align=left>
<?php include 'C:/xampp/htdocs/project/CloudKitchen/Admin/Navigation/sidebar.php';
?>

</div>

<center>
<?php
if (isset($_SESSION['username'])) {
    echo "<h3> Welcome ".$_SESSION['username']." to the Admin Panel </h3>";
} 

?>
</center>
</fieldset>


<fieldset>
 <div align=center>
<?php include 'C:/xampp/htdocs/project/CloudKitchen/Admin/Navigation/footer.php';?>
</div>
</fieldset>
</body>
</html>