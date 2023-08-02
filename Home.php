<!DOCTYPE html>
<html>
<head>
    <title>Home</title>

</head>
<body style="background-color:#ccffff;">
<fieldset>
Cloud Kitchen Management System
 </fieldset>
 


<fieldset>
<!--<div align=center><img src="logo.png" alt="HM Management" width="200" height="200"></div>-->
<h2 style="text-align:center"; >Welcome to The Cloud Kitchen Management System</h2>
 <br>
 <h3 style="text-align:center"; >Please Select Your Position</h3>
 <div align=center>
 <button onclick= "location.href='/project/CloudKitchen/Admin/view/Admin_home.php'" type="button">ADMIN</button>&nbsp;&nbsp;
 <!-- <button  type="button">MANAGER</button>&nbsp;&nbsp;-->
 <button onclick= "location.href='/project/CloudKitchen/DeliveryMan/view/DeliveryMan_home.php'" type="button">DELIVERY-MAN</button>&nbsp;&nbsp;
<!--  <button onclick= "location.href='/project/CloudKitchen/Security/Security_home.php'" type="button">SECURITY</button>&nbsp;&nbsp;-->
  <br><br> <br><br>
 </div>
 </fieldset>
 
 <fieldset>
 <div align=center>
<?php include 'Navigation/footer.php';?>
</div>
</fieldset>
</body>
</html>