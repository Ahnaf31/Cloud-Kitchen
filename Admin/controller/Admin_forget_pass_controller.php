<style>
.success-msg,
.warning-msg, {
  margin: 10px 0;
  padding: 10px;
  border-radius: 3px 3px 3px 3px;
}

.success-msg {
  color: #270;
  background-color: #DFF2BF;
}
.warning-msg {
  color: #9F6000;
  background-color: #FEEFB3;
}


</style>
<?php
require_once '../model/model.php';

if (isset($_POST['submit'])) 
{
 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
  }

$username=$usernameErr=$usernameFromDB="";
$msg=$msg1="";
$flag=1;

    if (empty($_POST["username"])) {
     $usernameErr = "User Name is required";
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

  if($flag==0){
	  echo "Pleae ! Insert Username Correctly";
  header('Location: ../view/Admin_forget_pass.php');
}

if($flag==1)
  {
      $data = searchUsername($username);
      if($data!=NULL)
      {
        foreach ($data as $i => $user):

             $usernameFromDB= $user['username'] ;
        endforeach;
        if($username==$usernameFromDB){
          if (getPassword($username)) {
            $msg1= $user['password'];
			echo '<div class="success-msg"> Your password is "'.$msg1.'"</div>';
				
          

        }
 
          }
		  else {
			  echo '<div class="warning-msg"> <i class="fa fa-check"></i> Sorry ! Username not found.</div>';
     
		header("refresh:4;	url=../view/Admin_forget_pass.php");
      }

          }
  }
		  
	else {
        echo "Error";
		header("refresh:4;	url=../view/Admin_forget_pass.php");
      }
    }
      
	
else {
echo "Error";	
				header("refresh:4;	url=../view/Admin_forget_pass.php");
	}
      
      

?>