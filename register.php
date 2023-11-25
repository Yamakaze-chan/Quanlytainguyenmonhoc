<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>User registration system using PHP and MySQL</title>
    </head>
    <body>
        <div class="header">
            <h2>Register</h2>
        </div>
        <form method="post" action="register.php">
            <?php include('errors.php'); ?>
            
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username">
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password_1">
            </div>
            <div class="input-group">
                <label>Confirm Password</label>
                <input type="password" name="password_2">
            </div>
            <div class="input-group">
                <label>Name</label>
                <input type="text" name="nickname">
            </div>
            <div class="input-group">
                <button type="submit" name="register" class="btn">Register</button>
            </div>
            <a href="login.php">Sign in</a>
        </form>
    </body>
</html>