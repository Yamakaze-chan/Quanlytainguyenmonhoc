<?php 
include ('server.php');
    $id = $_GET['id'];
    $username = $_SESSION['username'];
    $db = mysqli_connect('localhost:3306', 'root', 'root', 'quanlytainguyenmonhoc');
    $get_vid_sql = "DELETE FROM video WHERE link = 'https://www.youtube.com/watch?v=$id' AND username='$username'";
    $return_sql_values=mysqli_query($db, $get_vid_sql);
?>