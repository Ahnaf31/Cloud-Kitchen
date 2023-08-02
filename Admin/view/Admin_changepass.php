<!DOCTYPE html>
<html>
<head>
    
	<title> Update Profile</title>
</head>
<body style="background-color:#ccffff;">
<fieldset>

Cloud Kitchen Management System
<div align=right>
<?php include 'C:/xampp/htdocs/project/CloudKitchen/Admin/Navigation/header.php';


$con = mysqli_connect('127.0.0.1', 'root', '', 'ck');
	$sql = "SELECT * FROM users where username = '".$_SESSION['username']."'"; 
	$results = mysqli_query($con,$sql);



?>
</div>
</fieldset>
<?php
if (isset($_SESSION['username'])) {
include 'C:/xampp/htdocs/project/CloudKitchen/Admin/Navigation/p_sidebar.php';}


?>
 <head>  
        <title></title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head> 
  
        <div class="container" style="width:1200px;">              
                <div  align=center class="table-responsive"> 
                     <table class="table table-bordered">  
					 
 <form action="../controller/Admin_updatepass_controller.php" method="post" onsubmit="return Rcheck();">
		
	
		<tr>
		<br>PASSWORD:<input type="password" name="password" placeholder="Password" id="password">
			<br><br>Confirm PASSWORD:<input type="password" name="Cpassword" placeholder="Confirm Your Password" id="Cpassword">
				<br><br><button style="cursor:move" type="submit" name="submit" id="submit" onclick="Rcheck()">Change</button>
		</tr>

		<tr>
			
		<?php	if (isset($_SESSION['username'])) {
			while($row = mysqli_fetch_array($results))
			{

				echo "<tr><form action=../controller/Update_profile_controller.php method=post>";
				echo "<input type=hidden name=ID value='".$row['id']."'>";
			
				
			
			
				echo "</form></tr>";
			}
		}			
		else{
			header('Location: /project/CloudKitchen/Admin/view/Admin_Login.php');
			}
		?>
		
		</tr>
		</table>
		</div>
                 </div>
	</form>
<script type="text/javascript">
			function Rcheck()
			{
				var pass=document.getElementById('password').value;
				var Cpass=document.getElementById('Cpassword').value;
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
		else
		{
				header("location: ../view/Admin_changepass.php");
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