<?php
    session_start();
    $username = "";
    $error = array();
    //connect to database
    $db = mysqli_connect('localhost:3306', 'root', 'root', 'quanlytainguyenmonhoc');

    //Register
    if(isset($_POST['register']))
    {
        $username = $_POST['username'];
        $password1 = $_POST['password_1'];
        $password2 = $_POST['password_2'];
        $nickname = $_POST['nickname'];
    
        //ensure form has been filled
        if(empty($username))
        {
            array_push($error, "Username không được trống");
        }
        else
        {
            $sql = "SELECT * FROM user WHERE username='$username'";
            $result = mysqli_query($db, $sql);
            if(mysqli_num_rows($result) != 0)
            {
                array_push($error, "Username đã tồn tại, vui lòng chọn Username khác");
            }
        }
        if(empty($password1))
        {
            array_push($error, "Mật khẩu không được trống");
        }
        if(empty($nickname))
        {
            $nickname = $username;
        }
        if($password1!=$password2)
        {
            array_push($error, "Hai mật khẩu không tương thích");
        }
        //if there is no error
        if(count($error) == 0)
        {
            $password = md5($password1); //encrypt password
            $sql = "INSERT INTO user (username, password, nickname, admin) VALUES ('$username', '$password', '$nickname', '0')";
            mysqli_query($db, $sql);
            $_SESSION['username']=$username;
            $_SESSION['admin']="0";
            $_SESSION['success']="You are now logged in";
            header('location: index.php'); //redirect to index.php
        }
    }

    //Log in
    if(isset($_POST['login']))
    {
        $username = $_POST['username'];
        $password = $_POST['password'];
    
        //ensure form has been filled
        if(empty($username))
        {
            array_push($error, "Vui lòng nhập Username");
        }
        if(empty($password))
        {
            array_push($error, "Vui lòng nhập mật khẩu");
        }
        //if there is no error
        if(count($error) == 0)
        {
            $password = md5($password); //encrypt password
            $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
            $result = mysqli_query($db, $sql);
            if(mysqli_num_rows($result) == 1)
            {
                $data=$result->fetch_assoc();
                $_SESSION['username'] = $username;
                $_SESSION['admin'] = $data['admin'];
                $_SESSION['success'] = "You are logged in";
                header('location: index.php');
            }
            else
            {
                array_push($error, "Sai Username hoặc mật khẩu");
            }
        }
    }

    //Log out
    if(isset($_GET['logout']))
    {
        session_destroy();
        unset($_SESSION['username']);
        unset($_SESSION['admin']);
        header('location: index.php');
    }
?>