<?php


	require('../model/model.php');
	
	if(isset($_POST['submit']))
	{
		$tname = $_POST['tname'];
		$stime = $_POST['stime'];
		$a = $_POST['days'];
		$days = implode(',',$a);
		
		$con = mysqli_connect('127.0.0.1', 'root', '', 'ck');
		
		if(!$con)
		{
			echo 'connection to server is denied';
			header("refresh:6;	url=../view/View_delivered_details.php");
		}		
		else
		{
		
		$sql = "INSERT INTO `itemdelivered` (`NAME`,`TIME`,`PAYMENT`) VALUES ('$tname','$stime','$days')";
				
			if(mysqli_query($con, $sql))
			{
				echo "COngraTS !! New Detials is inserTed successfully!";
				header("refresh:3;	url=../view/View_delivered_details.php");
			}
			else
			{
				echo "!! ERROR to store in database !!";
				header("refresh:7;	url=../view/Add delivered item.php");
			}
			
		}
		
	}
	else
	{
		echo "ERROR!";
		header("refresh:3;	url=../view/View_delivered_details.php");
	}
	
?>