<!DOCTYPE html>
<html>
<head>
    <title>Profile</title>

</head>
<body style="background-color:#ccffff;">

<fieldset>
Cloud Kitchen Management System
<div align=right>
<?php include 'C:/xampp/htdocs/project/CloudKitchen/Admin/Navigation/header.php';?>
</div>
</fieldset>


<fieldset>
	<!--<div align=left><img src='/project/CloudKitchen/logo.png' alt="CK Management" width="70" height="70"></div>-->

Account <br>
___________<br>
<div align=left>
<?php include 'C:/xampp/htdocs/project/CloudKitchen/Admin/Navigation/p_sidebar.php';
?>

</div>

<center>
<?php
if (isset($_SESSION['username'])) {
    echo "<h3> Welcome ".$_SESSION['username']." &nbsp; You are in Profile Section </h3>";
} 
else{
     header("Location: /project/CloudKitchen/Admin/view/Admin_Login.php");
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