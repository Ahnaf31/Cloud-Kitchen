<?php 

	
		$con = mysqli_connect('127.0.0.1', 'root', '', 'ck');
		
		if(!$con)
		{
			echo "<center><h2><b>!! CONNECTION ERROR !!</h2></center>";
			header("refresh:3;	url=../view/Schedule_Meeting.php");
		}

		else
		{
			$sql = "DELETE  FROM schedule WHERE ID='$_GET[id]'";
        
			if(mysqli_query($con,$sql))
			{	
				echo "<center><h2><b>!! DATA is DELETED !!</h2></center>";
			}
			else
			{
				echo "!! Error TO delete !!";
			}
			
			header("refresh:3;	url=../view/Schedule_Meeting.php");
		}
		
?>