<head>
    <title>Create Account for DeliveryMan</title>
<style rel="stylesheet">	

body 
{
	background: rgb(200,104,40);
}

#register_form h2 
{
  text-align: center;
  border-radius: 150px;
  border-top: 100px;
  color: red;
  background: black;
	
}

#register_form 
{
  text-align:left;
  width: 850px;
  margin: 40px auto;
  border: 3px solid #918274;
  border-radius: 50px;
  border-top: 100px;
  color: white;
  font-size: 30px;
  background: rgb(199,21,133);
}
#register_form input 
{
  text-align: center;
  color: blue;
  width: 700px;
  height: 35px;
  margin: 5px 10%;
  font-family: "Comic Sans MS", Times, serif;
  font-size: 30px;
}

#submit 
{
  height: 60px;
  width: 300px;
  margin: 5px 10%; 
  font-family: "Algerian";
  font-size: 35px;
  color: white;
  background: rgb(153,50,204);
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

#gender 
{

  width: 800px;
  color: blue;
  font-family: "Comic Sans MS", Times, serif;
  font-size: 30px; 
  border: 1px solid blue;
  border-radius: 10px;
  border-right: 20px;
  background-color: white;
}

#gender input 
{
  text-align: left;
  width: 30px;
  height: 35px;
  font-family: "Comic Sans MS", Times, serif;
  font-size: 20px;
}

#type 
{

  width: 800px;
  color: blue;
  font-family: "Comic Sans MS", Times, serif;
  font-size: 30px; 
  border: 1px solid black;
  border-radius: 10px;
  border-right: 20px;
  background-color: white;
}


</style>
</head>
<body style="background-color:#FFB6C1;">

<fieldset>
Cloud Kitchen Management System
<div align=right>
<?php include 'C:/xampp/htdocs/project/CloudKitchen/DeliveryMan/Navigation/header.php';?>
</div>
</fieldset>


<h1> Create Account for Delivery Man </h1>



 <fieldset>
 <script defer src="../js/DeliveryMan_registration.js"></script>
<form id="register_form" action="../controller/DeliveryMan_signup_controller.php" method="post" name="regform" onsubmit="return Rcheck();">
      <h1 style="color: white; font-size: 30px; text-align:center"; > Delivery Man Registration</h1>
			FULL NAME:<input type="text" name="fname" placeholder="Full Name" value="" onkeypress='return onlyalphabets(event)'/><div id="fname" class="val"></div>
			<span></span>
			<br>USERNAME:<input type="text" name="username" placeholder="Name" id="username" onkeypress='return onlyalphabets2(event)'/>
			<span></span>
			<br>PASSWORD:<input type="password" name="password" placeholder="Password" id="password">
			<br>Confirm PASSWORD:<input type="password" name="Cpassword" placeholder="Confirm Your Password" id="Cpassword">
			<br>EMAiL:<input type="email" id="email" name="email" placeholder="Email" >
			<br>NID:<input type="nid" name="nid" placeholder="Nid" id="nid" onsubmit="return Rcheck();">
			
			<span></span>
			<br><br>
			GENDER:
		<div id="gender">
			MALE ->><input type="radio"  name="gender" value="MALE" required />
					<input type="radio"  name="gender" value="FEMALE"> <<- FEMALE
		</div>
			<br>
		<br>
			<button style="cursor:move" type="submit" name="submit" id="submit" onclick="Rcheck()">Registration</button>
			
		</center>


</form>
 </fieldset>

<fieldset>
 <div align=center>
<?php include 'C:/xampp/htdocs/project/CloudKitchen/DeliveryMan/Navigation/footer.php';?>
</div>
</fieldset>
</body>
</html>