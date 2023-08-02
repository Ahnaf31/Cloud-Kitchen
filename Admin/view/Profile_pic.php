<!DOCTYPE html>
<html>
<head>
    <title>Change Profile Picture</title>

</head>
<body>

<fieldset>
Cloud Kitchen Management System
<div align=right>
<?php include 'C:/xampp/htdocs/project/CloudKitchen/Admin/Navigation/header.php';?>
</div>
</fieldset>


<fieldset>
Account <br>
___________<br>
<div align=left>
<?php include 'C:/xampp/htdocs/project/CloudKitchen/Admin/Navigation/p_sidebar.php';
?>
</div>

<fieldset>
<?php include 'C:/xampp/htdocs/project/CloudKitchen/Admin/controller/Change_pp_controller.php';?>
        <legend><b>Change Profile Picture</b></legend>
    <img src="<?php echo $pp_path;?>" width="150" height="150"> <br>  <br>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">
            <input type="file" id="image_to_up" name="image_to_up"><br>
            <span class="error"> <?php echo $imgErr;?></span> <br>

            <input type="submit" value="Upload Image" name="submit">

        </form><br>

</fieldset><br>

<fieldset>
 <div align=center>
<?php include 'C:/xampp/htdocs/project/CloudKitchen/Admin/Navigation/footer.php';?>
</div>
</fieldset>
</body>
</html>