<?php 
if(isset($_POST['delete_file'])){
    $file = $_POST['delete_file'];
    unlink("uploads/".$file);
    $username = $_SESSION['username'];
    $sql = "DELETE FROM saved_file WHERE username = '$username' AND file='$file'";
    $result = $db->query($sql);
    header('Location: save_file.php');
}
?>