
<?php

	session_start();
	include('../model/model.php');

	if(isset($_POST['submit']))
	{

		$username = $_POST['username'];
		$password = $_POST['password'];
		$user = (validate($username, $password));
			 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
  }

  $username=$password="";
  $flag=1;


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


if(!empty($_POST["password"])) 
    {
    $password = test_input($_POST["password"]);
    if (strlen($_POST["password"]) < '8') 
    {
        $passwordErr = "Your Password Must Contain At Least 8 Characters!";
    }
	elseif(!preg_match("#[a-z]+#",$password)) 
    {
        $passwordErr = "Your Password Must Contain At Least 1 Lowercase Letter!";
    }
	}
elseif(!empty($_POST["password"])) 
{
    $passwordErr = "Please enter password   ";
} 

		if(($user) > 0)
		{
			if(isset($_POST['remember'])) {
		setcookie("username", $_POST["username"], time()+1000);
		setcookie("password", $_POST["password"], time()+1000);
		}
		
			$_SESSION['username'] = $username;
			
			header("location: ../view/DeliveryManDashboard.php");
		}
		else
		{
			echo "<center><h2>!! INVALID USERNAME/PASSWORD !!";
			header("refresh:3;	url=../view/DeliveryMan_Login.php");
		}

	}
	else
	{
		header("location: ../view/DeliveryMan_Login.php");
	}
if(!empty($_POST["remember"])) {
  setcookie ("username",$_POST["username"],time()+ 1000);
  setcookie ("password",$_POST["password"],time()+ 1000);
  echo "Cookies Set Successfuly <br>";
} else {
  setcookie("username","");
  setcookie("password","");
}
?>
