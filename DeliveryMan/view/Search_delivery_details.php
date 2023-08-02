<div align=right>
<?php include 'C:/xampp/htdocs/project/CloudKitchen/Admin/Navigation/header.php';?>
</div>
<?php
	
	
	
	require_once('../model/model.php');
	$result = getAllDeliveryMan();
	if(!isset($_SESSION['username'])){  
		header("location: DeliveryMan_Login.php");
		
	}
	
	$con = mysqli_connect('127.0.0.1', 'root', '', 'ck');
	$sql =	"SELECT * FROM `itemdelivered`"; 
	$results = mysqli_query($con,$sql);
	
?>

<html>
<head>
		<title>Delivered Item List</title>
		
</head>
<body style="background-color:#FFB6C1;">

<section class="main">
	
	<h1 id="abc"><span style=color:#239ed4><b>Search Your Delivered Details From Here :</b></span></h1>

	<form >
		<input type="text" id="sabaajax" name="sabaajax" placeholder="Custommer Name" onkeyup="selected_list()">
	</form>

	<br>
	<div id="result">
	
	<?php
		echo "<table border='5' BORDERCOLOR=#b515db>
									<tr>
										<td><span style='color:#004d4d '><b>CUSTOMER NAME</b></span></td>
										<td><span style='color:#004d4d '><b>DELIVERED TIME</b></span></td>
										<td><span style='color:#004d4d '><b>PAYMENT METHOD</b></span></td>
										</tr>
									";
		
		$con = $con = mysqli_connect('127.0.0.1', 'root', '', 'ck');
		$sql = "select * from itemdelivered";
		$result = mysqli_query($con, $sql);
		while($row=mysqli_fetch_array($result))
			{
					echo "<tr>
												<td>".$row['NAME']."</td>
												<td>".$row['TIME']."</span></td>
												<td>".$row['PAYMENT']."</span></td>
												</tr>";
							
			}
		?>
		</table>
	
	
	</div>

	<script type="text/javascript">
		
		function selected_list(){
			var search = document.getElementById("sabaajax").value;
			var xhttp = new XMLHttpRequest();	
			
			xhttp.onreadystatechange = function() {
			    if (this.readyState == 4 && this.status == 200){
			    	document.getElementById('result').innerHTML = this.responseText;
			    }
			};
			
			xhttp.open("GET", "../controller/Search_delivery_details_controller.php?key="+search, true);
			xhttp.send(); 
		}
	</script>		
		
</section>
	
</body>

</html>
