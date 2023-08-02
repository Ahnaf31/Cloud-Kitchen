<!DOCTYPE html>
<html>
<head>

<script type="text/javascript" src="../js/forget_pass.js"></script>
    <title>Forget Pass</title>
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
  color: purple;
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

  height: 80px;
  width: 100px;
  margin: 5px 10%;
  font-size: 35px;
  color: blue;
  background-color: rgb(255,255,33);
  text-decoration: underline-bold;
  border-radius: 5px;

}


</style>
</head>
<body style="background-color:#ccffff;">

Cloud Kitchen Management System
<div align=right>
<?php include 'C:/xampp/htdocs/project/CloudKitchen/Admin/Navigation/header.php';?>
</div>
<form id="LOGIN_form" action="../controller/Admin_forget_pass_controller.php" method="post" onsubmit="return Lcheck();"/>


		<center><h2>Enter Your Username</h2>
		
			<br><input type="text" name="username" placeholder="username" id="username" onkeypress='return onlyalphabets2(event)'/>
			<span class="error" id="usernameErr"><?php if(!empty($_GET['userNameErr'])){echo $_GET['userNameErr'];}?></span>
		
		
<button style="cursor:move" type="submit" name="submit" id="submit" onclick="Rcheck()">Submit</button>
		</center>
	</form>

 
 <div align=center>
<?php include 'C:/xampp/htdocs/project/CloudKitchen/Admin/Navigation/footer.php';?>
</div>

</body>
</html>