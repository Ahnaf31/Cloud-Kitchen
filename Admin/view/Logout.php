<body>
<head>
    <title>Log out</title>
	<style rel="stylesheet">
body 
{
	background: rgb(204, 255, 255)
}

.css
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

<fieldset>
<p class='css'> Cloud Kitchen Management System </P>
<div align=right>
<?php include 'C:/xampp/htdocs/project/CloudKitchen/Admin/Navigation/header.php';?>
</div>
</fieldset>
<fieldset>
<?php 
session_destroy();
$username = $pass = "";
setcookie('username', $username, time() -1);
setcookie('password', $pass, time() -1);
echo "<p class='css'>You successfully logout. click here to  <a href ='/project/CloudKitchen/Admin/view/Admin_Login.php'>Login Again</a></p>";
?>
</fieldset>


<fieldset>
 <div align=center>
<?php include 'C:/xampp/htdocs/project/CloudKitchen/Admin/Navigation/footer.php';?>
</div>
</fieldset>
</body>
</html>