<!DOCTYPE html>
<html>
<head>


    <title>Log in</title>

<style rel="stylesheet">

body
{
	background: rgb(0,128,128);
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
  color: black;
  font-family: "Elephant", Times, serif;
  font-size: 30px;
  background: rgb(192,192,192);
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

 height: 60px;
  width: 100px;
  margin: 5px 10%; 
  font-size: 35px;
  color: greenyellow;
  background-color:	midnightblue ;
  text-decoration: underline-bold;
  border-radius: 2px;

}
.reg
{

  font-size: 40px;
  color: white;
  background-color: rgb(255,124,53);
  text-decoration: underline-bold;
}
.forget
{

  font-size: 20px;
  color: red;
  background-color: rgb(255,154,53);
  text-decoration: underline-bold;
}
label {
	
	color: #a64dff;
  font-size: 20px;
  float: center;

}
.error {
	color: #FF0000;
	font-size: 15px;
	}

</style>

</head>
<body style="background-color:#ccffff;">

Cloud Kitchen Management System
<div align=right>
<?php include 'C:/xampp/htdocs/project/CloudKitchen/Admin/Navigation/header.php';?>
</div>



 
 <form id="LOGIN_form" action="../controller/login_controller.php" method="post" onsubmit="return Lcheck();"/>


		<center><h1>L O G I N</h1>
		<div>
			<input type="text" id="name" name="username" placeholder="Username" onkeypress='return onlyalphabets(event)'/>
		</div>
		<div>
			<input type="password" id="password" name="password" placeholder="Password">
			  <span class="error" id="passwordErr"><?php if(!empty($_GET['passwordErr'])){echo $_GET['passwordErr'];}?></span>
		</div>
		<div>
			<input type="checkbox" id="reme" name="remember" value="remember">
			<label for="reme" > Remember Me</label><br>
			
			<button type="submit" name="submit" id="submit" onclick="Lcheck()">L O G ! N</button>
			<a href="../view/Admin_signup.php">REGISTRATION</a> <br> <br>
			
				<a href="../view/Admin_forget_pass.php">Forget Pass</a>
		</center></div>
	</form>

<script defer src="../js/Admin_login.js"></script>

 <div align=center>
<?php include 'C:/xampp/htdocs/project/CloudKitchen/Admin/Navigation/footer.php';?>
</div>

</body>
</html>