
<head>
    <title>Create Account for Admin</title>
<style rel="stylesheet">	

body 
{
	background: rgb(204, 255, 255)
}

#register_form h1 
{
  text-align: center;
  border-radius: 150px;
  border-top: 100px;
  color: green;
  background: orange;
	
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
  background: rgb(0,0,112);
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
  background: rgb(255,0,0);
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

#type input 
{
  text-align: left;
  width: 30px;
  height: 35px;
  font-family: "Comic Sans MS", Times, serif;
  font-size: 20px;
}

</style>

</head>
<body style="background-color:#ccffff;">

<fieldset>
Cloud Kitchen Management System
<div align=right>
<?php include 'C:/xampp/htdocs/project/CloudKitchen/Admin/Navigation/header.php';?>
</div>
</fieldset>


<h1>Create Account for Admin</h1>


 <fieldset>
<form id="register_form" action="../controller/Admin_signup_controller.php" method="post" name="regform" onsubmit="return Rcheck();">
      <h1 style="color: Green; font-size: 30px; text-align:center"; > Admin Registration</h1>
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

<script type="text/javascript">
"use strict"
	
	function onlyalphabets(e)
	{
		var name=e.which||e.keycode;
		
		if((name>=65 && name<=90) || (name==95) || (name==32) || (name>=97 && name<=122) || (name==8))
		{
			return true;
		}
		else
		{
			return false;
		}	
	
	}
	
	function onlyalphabets2(e)
	{
		var name=e.which||e.keycode;
		
		if((name>=65 && name<=90) || (name==95) || (name>=97 && name<=122) || (name==8))
		{
			return true;
		}
		else
		{
			return false;
		}	
	
	}


		var fname=document.forms["regform"]["fname"];
		
		var fname_error=document.getElementById("fname");
		
		fname.addEventListener("blur",fnameVarify,true);
		
	function Rcheck()
	{
		
		//var fname=document.getElementById('fname').value;
		var username=document.getElementById('username').value;
		var pass=document.getElementById('password').value;
		var Cpass=document.getElementById('Cpassword').value;
		var email=document.getElementById('email').value;
		var gender=document.getElementById('gender').value;
		var nid=document.getElementById('nid').value;
		


									if(fname.value == "" )
									{
										alert('required to fill up all the fields');
										return false;
									}
									if(WordCount(fname.value)<2)
									{
										alert('full name must contain at least 2 words');
										return false;
									}
								
								function fnameVarify()
						{
							if(fname.value !== "" )
									{
										alert('required to fill up all the fields');
										fname_error.textContent="";
										return true;
										
									}
							
						}
						function WordCount(str)
									{ 
									  return str.split(" ").length;
									}
									
		if(fname.length<4)
		{
			alert('Name must be at least 4 characters to be valid in this field');
			return false;
		}
		if(fname.length>15)
		{
			alert('Name must be less than 15 characters to be valid in this field');
			return false;
		}



		/*if(fname == "")
		{
			alert('PLEASE FILL THE FULLNAME to proceed');
			return false;
		}*/
		if(username == "")
		{
			alert('PLEASE FILL THE USERNAME to proceed');
			return false;
		}
		if(username.length<4)
		{
			alert('Name must be at least 4 characters to be valid in this field');
			return false;
		}
		if(username.length>15)
		{
			alert('Name must be less than 15 characters to be valid in this field');
			return false;
		}
		if(pass == "")
		{
			alert('PLEASE FILL THE password to proceed');
			return false;
		}
		if(Cpass == "")
		{
			alert('PLEASE CONFIRM THE password to proceed');
			return false;
		}
		if(pass != Cpass)
		{
			alert('PLEASE Confirm that You entered the same password twice to proceed');
			return false;
		}
		if(pass.length<6)
		{
			alert('PASSWORD must contain at least 6 characters to be valid in this field');
			return false;
		}
		if(pass.length>15)
		{
			alert('15 characters are STRONG enough to make PASSWORD valid in this field');
			return false;
		}
		if(email == "")
		{
			alert('PLEASE FILL THE email to proceed');
			return false;
		}
		if((email.charAt(email.length-4) != '.') && (email.charAt(email.length-3) != '.'))
		{
			alert('WARNING:  [[[ .com  ]]] should be given to make email valid');
			return false;
		}
		
		if(gender == "")
		{
			alert('PLEASE FILL THE gender to proceed');
			return false;
		}
		if(nid == "")
		{
			alert('PLEASE FILL THE nid to proceed');
			return false;
		}
		if(nid.length<12)
		{
			alert('12 characters required for NID');
			return false;
		}
		
		else
		{
				header("location: ../view/adminDashboard.php");
		}
			
	}
		
	</script>

<fieldset>
 <div align=center>
<?php include 'C:/xampp/htdocs/project/CloudKitchen/Admin/Navigation/footer.php';?>
</div>
</fieldset>
</body>
</html>