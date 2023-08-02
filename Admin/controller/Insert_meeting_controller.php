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
			header("refresh:6;	url=../view/Schedule_Meeting.php");
		}		
		else
		{
		
		$sql = "INSERT INTO `schedule` (`NAME`,`TIME`,`DAY`) VALUES ('$tname','$stime','$days')";
				
			if(mysqli_query($con, $sql))
			{
				echo "COngraTS !! New User is inserTed successfully!";
				header("refresh:3;	url=../view/Schedule_Meeting.php");
			}
			else
			{
				echo "!! ERROR to store in database !!";
				header("refresh:7;	url=../view/Insert_meeting.php");
			}
			
		}
		
	}
	else
	{
		echo "ERROR!";
		header("refresh:3;	url=../view/Schedule_Meeting.php");
	}
	
?>