<?php 
    $db = mysqli_connect('localhost:3306', 'root', 'root', 'quanlytainguyenmonhoc');
    $submit_feedback = "INSERT INTO `feedback` (`username`,`time`, `content`, `point`) VALUES ('".$_GET['username']."', NOW(), '".$_GET['content']."', '".$_GET['point']."');";
    $feedback=mysqli_query($db, $submit_feedback);
    echo "submit success";
?>