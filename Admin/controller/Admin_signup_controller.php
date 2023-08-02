<?php
	session_start();
	require('../model/model.php');
	
	if(isset($_POST['submit']))
	{
	 $fname = $email = $nid ="";
	  $username=$password="";
	 $Cpassword="";
	 $flag=1;
	 function test_input($data) {
	   $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	 }
	 
		 
		  if (empty($_POST["fname"])) {
		echo "Name is required";
		$flag=0;
	  }
	  else {

		   $fname = test_input($_POST["fname"]);

		  if (!preg_match("/^[a-zA-Z-. ]*$/",$fname)) {
			 echo "Only letters and white space allowed";
			 $flag=0;
		   }
		else  {
				 if(str_word_count($fname)<2)
			  {
			  echo "Name must contains at least two words ";
			   $flag=0;

			  }
		}
	  }
	  
	   if (empty($_POST["username"])) {
      echo "User Name is required";
      $flag=0;
    }
    else {
     $username = test_input($_POST["username"]);

      if (!preg_match("/^[a-zA-Z-. ]*$/",$username)) {
         echo "Only letters and white space allowed";
         $flag=0;
       }
       else {
         if(strlen($username)<2)
         {
            echo "Name must contains at least two character ";
            $flag=0;
         }

       }
    }
	  
	  
	  if (empty($_POST["nid"])) {
    echo "NID is required";
     $flag=0;
   }
   else {
    $id = test_input($_POST["nid"]);

    if (strlen($_POST["nid"]) > '12') 
    {
        $nidErr = "Your id can contain maximun 12 Characters!";
    }
    elseif(!preg_match("#[0-9]+#",$id)) 
    {
        $nidErr = "Your nid Must Contain Number!";

   }
  }
	  
	  
	  
	    if (empty($_POST["email"])) {
    echo "Email is required";
    $flag=0;
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Invalid email format";
      $flag=0;
    }
  }
  
  if(!empty($_POST["password"]) && ($_POST["password"] == $_POST["Cpassword"])) 
    {
    $password = test_input($_POST["password"]);
    $Cpassword = test_input($_POST["Cpassword"]);
    if (strlen($_POST["password"]) < '8') 
    {
        $passwordErr = "Your Password Must Contain At Least 8 Characters!";
    }
    elseif(!preg_match("#[0-9]+#",$password)) 
    {
        $passwordErr = "Your Password Must Contain At Least 1 Number!";
    }
    elseif(!preg_match("#[A-Z]+#",$password)) 
    {
        $passwordErr = "Your Password Must Contain At Least 1 Capital Letter!";
    }
    elseif(!preg_match("#[a-z]+#",$password)) 
    {
        $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
    }
    elseif(!empty($_POST["password"])) 
    {

    $confirmpassErr = "Please Check You've Entered Or Confirmed Your Password!";
     
     } 
}
else {
     $passwordErr = "Please enter password   ";
}
  
  
	  
	  
	  
		if($flag==1)
			{	
		$fname = $_POST['fname'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$gender = $_POST['gender'];
		$nid = $_POST['nid'];
		
		$con = mysqli_connect('127.0.0.1', 'root', '', 'ck');
		
		if(!$con)
		{
			echo 'connection to server is denied';
			header("refresh:6;	url=../view/Admin_signup.php");
		}		
		else
		{
		
		$sql = "INSERT INTO `users` (`fname`,`username`,`password`,`email`,`nid`,`gender`) VALUES ('$fname','$username','$password','$email','$nid','$gender')";
				
			if(mysqli_query($con, $sql))
			{
				echo ' "COngraTS !! New User is inserTed successfully! Now You can Login <a href="/project/CloudKitchen/Admin/view/Admin_Login.php">Login</a> |
  <hr>
';
				
				
				  echo '
    <a href="/project/CloudKitchen/Home.php">Home</a> |
    <a href="/project/CloudKitchen/Admin/view/Admin_login.php">Login</a> |
  <hr>
';

				header("url=../view/adminDashboard.php");
			}
			else
			{
				echo "!! ERROR to store in database !!";
				header('Location: /project/CloudKitchen/Admin/view/Admin_signup.php');
			}
			
		}
			}
			else {
				echo " PHP Validation Error ";
			}
	}
	else
	{
		echo "ERROR!";
		header('Location: /project/CloudKitchen/Admin/view/Admin_signup.php');
	}
	
?>