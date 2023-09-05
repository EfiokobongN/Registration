<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
  <?php
  if ($user) {
    echo'<div class="alert alert-danger" role="alert">
    <strong> Oop! Sorry </strong>Email alresdy exist.
    <button type="button" class="close" data-dismiss="alert" aria-label="close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>';
}
?>

<?php
if ($success) {
    echo'<div class="alert alert-success" role="alert">
    <strong> Success </strong>You are successfully Signed up.
    <button type="button" class="close" data-dismiss="alert" aria-label="close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>';
}
?>
<h1 class="reg">Sign up</h1>
<form action="includes/signup-inc.php" method="post">
<input type="text" name="username" placeholder="Username">
<input type="text" name="email" placeholder="E-mail">
<input type="password" name="password" placeholder="PassWord">
<input type="password" name="confirmPassword" placeholder="Confirm PassWord">
    <button type="submit" name="submit" class="btn">Register</button>
</form>
<p class="text">Alredy Have An Account? <a href="login.php">Login!</a></p>
</div>
</body>
</html>