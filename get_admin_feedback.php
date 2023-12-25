<?php 
    $db = mysqli_connect('localhost:3306', 'root', 'root', 'quanlytainguyenmonhoc');
    $get_feedback = "SELECT * FROM feedback;";
    $return_feedback=mysqli_query($db, $get_feedback);
    while($feedback=$return_feedback->fetch_assoc())
    {
        echo $feedback['username']. ";" . $feedback['time'] . ";" . $feedback['content'].";" . $feedback['point']. "///splithere///";
    }
?>