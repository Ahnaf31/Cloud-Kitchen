<?php
	
	
	

?>
<!DOCTYPE html>
<html>
<head>
    
	<title> Update Profile</title>
</head>
<body style="background-color:#FFB6C1;">
<fieldset>

Cloud Kitchen Management System
<div align=right>
<?php include 'C:/xampp/htdocs/project/CloudKitchen/DeliveryMan/Navigation/header.php';


$con = mysqli_connect('127.0.0.1', 'root', '', 'ck');
	$sql = "SELECT * FROM delivery where username = '".$_SESSION['username']."'"; 
	$results = mysqli_query($con,$sql);



?>
</div>
</fieldset>
<?php
if (isset($_SESSION['username'])) {
include 'C:/xampp/htdocs/project/CloudKitchen/DeliveryMan/Navigation/p_sidebar.php';}


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
					 
 <form action="../controller/Update_profile_controller.php" method="post">
		
	
		<tr>
				<td><center><b>NAME</b></center></td>
				<td><center><b>EmaiL</b></center></td>
				<td><center><b>GENDER</b></center></td>
				<td><center><b>NID</b></center></td>
		</tr>

		<tr>
			
		<?php	if (isset($_SESSION['username'])) {
			while($row = mysqli_fetch_array($results))
			{

				echo "<tr><form action=../controller/Update_profile_controller.php method=post>";
				echo "<input type=hidden name=ID value='".$row['id']."'>";
				echo "<td><input type=text name=name value='".$row['fname']."'></td>";
				echo "<td><input type=email name=email value='".$row['email']."'></td>";
				echo "<td><input type=text name=gender value='".$row['gender']."'></td>";
				echo "<td><input type=number_format name=nid value='".$row['nid']."'></td>";
				
				echo "<td><input type=submit value=UPDATE></td>";
				echo "</form></tr>";
			}
		}			
		else{
			header('Location: /project/CloudKitchen/DeliveryMan/view/DeliveryMan_Login.php');
			}
		?>
		
		</tr>
		</table>
		</div>
                 </div>
	</form>

 <fieldset>
 <div align=center>
<?php include 'C:/xampp/htdocs/project/CloudKitchen/DeliveryMan/Navigation/footer.php';?>
</div>
</fieldset>
</body>
</html>