<?php 
    include('server.php');
    $db = mysqli_connect('localhost:3306', 'root', 'root', 'quanlytainguyenmonhoc');
    $get_user = "SELECT DISTINCT username, id, nickname, admin FROM user;";
    $return_user=mysqli_query($db, $get_user);
    while($user=$return_user->fetch_row())
    {
        $return_user_file=mysqli_query($db, "SELECT COUNT(file) AS number_of_file FROM saved_file WHERE username='$user[0]' AND share='1';")->fetch_row();
        $return_user_vid=mysqli_query($db, "SELECT COUNT(link) AS number_of_vid FROM video WHERE username='$user[0]'")->fetch_row();
        echo "$user[1]".";"."$user[0]". ";"."$user[2]".";" . "$return_user_file[0]" . ";" . $return_user_vid[0].";" . $user[3]. "///splithere///";
    }
?>