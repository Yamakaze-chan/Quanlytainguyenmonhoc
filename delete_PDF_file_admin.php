<?php 
    include('server.php');
    if(isset($_GET['user']) && isset($_GET['url'])){
        $username = $_GET['user'];
        $file = $_GET['url'];
        unlink("uploads/".$file.".pdf");
        $sql = "DELETE FROM saved_file WHERE username = '$username' AND file='$file.pdf'";
        $result = $db->query($sql);
        echo "success";
    }
?>