<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>User login system using PHP and MySQL</title>
    </head>
    <body>
        <div class="header">
            <h2>Log In</h2>
        </div>
        <form method="post" action="login.php">
            <?php include('errors.php'); ?>
            
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username">
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <div class="input-group">
                <button type="submit" name="login" class="btn">Log in</button>
            </div>
            <a href="register.php">Sign Up</a>
        </form>
    </body>
</html>