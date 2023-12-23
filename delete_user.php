<?php 
include('server.php');
if(isset($_POST['user']))
{
    $username = $_POST['user'];
    $sql = "DELETE FROM user WHERE username = '$username'";
    $result = $db->query($sql);
    $sql = "DELETE FROM video WHERE username = '$username'";
    $result = $db->query($sql);
    $sql = "DELETE FROM saved_file WHERE username = '$username'";
    $result = $db->query($sql);
    echo "success";
}
?>