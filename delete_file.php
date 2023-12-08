<?php 

if(isset($_POST['delete_file'])){
    ob_start();
    $file = $_POST['delete_file'];
    unlink("uploads/".$file);
    $username = $_SESSION['username'];
    $sql = "DELETE FROM saved_file WHERE username = '$username' AND file='$file'";
    $result = $db->query($sql);
    ob_end_flush();
    header('Location: save_file.php');
    //header( "Refresh:10; url=save_file.php", true, 303);
}

?>