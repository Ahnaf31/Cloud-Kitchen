<body>
<head>
    <title>Log out</title>

</head>
<body style="background-color:#FFB6C1;">

<fieldset>
Cloud Kitchen Management System
<div align=right>
<?php include 'C:/xampp/htdocs/project/CloudKitchen/DeliveryMan/Navigation/header.php';?>
</div>
</fieldset>
<fieldset>
<?php 
session_destroy();
$username = $pass = "";
setcookie('username', $username, time() -1);
setcookie('password', $pass, time() -1);
echo "You successfully logout. click here to <a href ='/project/CloudKitchen/DeliveryMan/view/DeliveryMan_Login.php'>Login Again</a>";

?>
</fieldset>


<fieldset>
 <div align=center>
<?php include 'C:/xampp/htdocs/project/CloudKitchen/DeliveryMan/Navigation/footer.php';?>
</div>
</fieldset>
</body>
</html>