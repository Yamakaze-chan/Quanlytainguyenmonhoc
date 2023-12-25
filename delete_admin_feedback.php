<?php 
    $db = mysqli_connect('localhost:3306', 'root', 'root', 'quanlytainguyenmonhoc');
    $sql = "DELETE FROM feedback WHERE username = '".$_GET['username']."' AND time = '".$_GET['time']."' AND content = '".$_GET['content']."' AND point = '".$_GET['point']."'";
    $result = $db->query($sql);
?>