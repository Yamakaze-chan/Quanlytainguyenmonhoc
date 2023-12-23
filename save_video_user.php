<?php 
include ('server.php');
if(isset($_POST['input_Youtube_vid']))
{
    $link_youtube = $_POST['input_Youtube_vid'];
    $title =  explode('</title>', explode('<title>', file_get_contents($_POST['input_Youtube_vid']))[1])[0];
    $string = htmlspecialchars_decode($title);
    $string = str_replace("'","\'",$string);
    $username = $_SESSION['username'];
    $sql = "INSERT INTO video (title, link, username) VALUES ('$string', '$link_youtube', '$username')";
    $result = $db->query($sql);
    $del_dup_value = $db->query("delete t1 FROM video t1 INNER JOIN video t2 WHERE t1.id < t2.id AND t1.title = t2.title AND t1.link = t2.link AND t1.username = t2.username;");
    header('Location: video_content.php');
}
else
{
    echo "something wrong";
}
?>