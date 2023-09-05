<?php
session_start();
if(!isset($_SESSION['email'])){
    header('Location: login.php');
}
?>
<h1>Welcome home
    <?php echo $_SESSION['uersname'];?>
</h1>

<div>
    <a href="signout.php">Sign Out</a>
</div>