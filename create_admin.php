<?php 
$error = array();
$db = mysqli_connect('localhost:3306', 'root', 'root', 'quanlytainguyenmonhoc');
$username = $_POST['username'];
$password1 = $_POST['pass1'];
$password2 = $_POST['pass2'];
$nickname = $_POST['nickname'];
$admin = (int)$_POST['admin'];

//ensure form has been filled
if(empty($username))
{
    array_push($error, "Username id required");
}
if(empty($password1))
{
    array_push($error, "Password id required");
}
if(empty($nickname))
{
    $nickname = $username;
}
if($password1!=$password2)
{
    array_push($error, "Two passwords do not match");
}
//if there is no error
if(count($error) == 0)
{
    $password = md5($password1); //encrypt password
    $sql = "INSERT INTO user (username, password, nickname, admin) VALUES ('$username', '$password', '$nickname', '$admin')";
    mysqli_query($db, $sql);
    echo "success";
}
?>