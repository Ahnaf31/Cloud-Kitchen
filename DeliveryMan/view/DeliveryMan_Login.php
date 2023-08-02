<!DOCTYPE html>
<html>
<head>


    <title>Log in</title>

<style rel="stylesheet">

body
{
	background: rgb(128,128,128);
}
#LOGIN_form h1
{

  text-align: center;
}
#LOGIN_form
{
  width: 700px;
  margin: 100px auto;
  padding-bottom: 30px;
  border: 1px solid #918274;
  border-radius: 20px;
  color: hotpink;
  font-family: "Elephant", Times, serif;
  font-size: 30px;
  background: rgb(123,104,238);
}
#LOGIN_form input
{

  width: 500px;
  height: 35px;
  margin: 5px 10%;
  font-family: "Comic Sans MS", Times, serif;
  font-size: 35px;
}
#submit
{
  height: 60px;
  width: 200px;
  margin: 5px 10%;
  font-family: "Algerian";
  font-size: 35px;
  color: white;
  background: rgb(0,255,0);
  border: none;
  border-radius: 5px;
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
.reg
{

  font-size: 40px;
  color: white;
  background-color: rgb(255,154,53);
  text-decoration: underline-bold;
}


</style>

</head>
<body style="background-color:#FFB6C1;">

Cloud Kitchen Management System
<div align=right>
<?php include 'C:/xampp/htdocs/project/CloudKitchen/DeliveryMan/Navigation/header.php';?>
</div>



 
 <form id="LOGIN_form" action="../controller/login_controller.php" method="post" onsubmit="return Lcheck();"/>


		<center><h1>L O G I N</h1>
		<div>
			<input type="text" id="name" name="username" placeholder="Username" onkeypress='return onlyalphabets(event)'/>
		</div>
		<div>
			<input type="password" id="password" name="password" placeholder="Password">
		</div>
		<div>
		<input type="checkbox" id="reme" name="remember" value="remember">
			<label for="reme" > Remember Me</label><br>
			
			<button type="submit" name="submit" id="submit" onclick="Lcheck()">L O G I N</button>
			<a href="../view/DeliveryMan_signup.php">REGISTRATION</a>
		</center></div>

	</form>

<script defer src="../js/DeliveryMan_login.js"></script>

 <div align=center>
<?php include 'C:/xampp/htdocs/project/CloudKitchen/DeliveryMan/Navigation/footer.php';?>
</div>

</body>
</html>