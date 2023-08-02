
<?php 
session_start();
if (isset($_SESSION['username'])) {
    echo '<span>Logged in as '.$_SESSION['username'] .'</span> | ';
    echo '<a href="/project/CloudKitchen/DeliveryMan/view/Logout.php">Logout</a> |';
    echo '<hr>';
} else {
    echo '
    <a href="/project/CloudKitchen/Home.php">Home</a> |
    <a href="/project/CloudKitchen/DeliveryMan/view/DeliveryMan_login.php">Login</a> |
  <hr>
';

}
?>


