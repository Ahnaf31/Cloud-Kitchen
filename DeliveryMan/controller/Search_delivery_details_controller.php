<?php
	
	

	$search = $_GET['key'];

	$con = $con = mysqli_connect('127.0.0.1', 'root', '', 'ck');
	$sql = "select * from itemdelivered where NAME like '%{$search}%'";
	$result = mysqli_query($con, $sql);
	$count =mysqli_num_rows($result);
	

	
	if($count){

		$data = "<table border='5' BORDERCOLOR=#b515db>
									<tr>
										<td><span style='color:black '><b>CUSTOMER NAME</b></span></td>
										<td><span style='color:black '><b>DELIVERED TIME</b></span></td>
										<td><span style='color:black '><b>PAYMENT METHOD</b></span></td>
										
										</tr>
									";

		while($row = mysqli_fetch_assoc($result)){
			$data .= "<tr>
					<td><span style='color:#320531 '>{$row['NAME']}</span></td>
					<td><span style='color:#320531 '>{$row['TIME']}</span></td>
					<td><span style='color:#320531 '>{$row['PAYMENT']}</span></td>
			
			</tr>";
		}

		$data .= "</table>";
		echo $data;

	}else{
		echo "<span style=color:#db4731><b>No result found!!!!!</b></span>";
		
		
	}
?>