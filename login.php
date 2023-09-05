<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogIn Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div>
    <?php
    if ($user) {
        echo'<div class="alert alert-danger" role="alert">
        <strong> Error! </strong>Invalid email or password.
        <button type="button" class="close" data-dismiss="alert" aria-label="close">
        <span aria-hidden="true">&times;</span>
        </button>
        </div>';
    }
    ?>
<h1>Sign In</h1>


<form action="Includes/login-inc.php" method="post">
<input type="text" name="email" placeholder="E-mail">
<input type="password" name="password" placeholder="PassWord">
    <button type="submit" name="submit">Login</button>
</form>
<p class="text">No Account? <a href="signup.php">Sign Up here!</a></p>
</div>
</body>
</html>
