<body style="background-color:#ccffff;">
<style>

.success-msg,
 {
  margin: 10px 0;
  padding: 10px;
  border-radius: 3px 3px 3px 3px;
}
.success-msg {
  color: #270;
  background-color: #DFF2BF;
}


</style>
<?php 
	include 'C:/xampp/htdocs/project/CloudKitchen/Admin/Navigation/header.php';
		
	$con = mysqli_connect('127.0.0.1', 'root', '', 'ck');
		
		if(!$con)
		{
			echo 'connection to server is denied';
			header("refresh:2;	url=../views/View_profile.php");
		}
		
		else
		{
 
        $sql ="UPDATE users SET fname = '$_POST[name]', email = '$_POST[email]', gender = '$_POST[gender]', nid = '$_POST[nid]' where username = '".$_SESSION['username']."' ";
        
			if(mysqli_query($con, $sql))
			{
				echo '<div class="success-msg"> <i class="fa fa-check"></i> Data is updated to ~users~ table successfully.</div>';
					
				header("refresh:4;	url=../view/Profile_Details.php");
			}
			else
			{
				echo "!! Error !!";
			}
		
		}
		
?>
