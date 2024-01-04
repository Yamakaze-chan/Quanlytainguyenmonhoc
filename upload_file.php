<?php
if( isset($_POST['upload_file'])){
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if file existed
    if (file_exists("uploads/".$_FILES["fileToUpload"]["name"])) {
        echo "This name has been taken\n";
        $uploadOk = 0;
        }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 16777215) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "pdf" && $imageFileType != "docx" && $imageFileType != "docs") {
    echo "Sorry, only PDF, docs, docx files are allowed.";
    $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        $username = $_SESSION['username'];
        $share = $_POST['share'];
        $file = $_FILES["fileToUpload"]["name"];
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $time = date("Y-m-d H:i:s"); 
        $sql = "INSERT INTO saved_file (username, file, time, share) VALUES ('$username', '$file','$time', '$share')";
        mysqli_query($db, $sql);
        unset($_POST['upload_file']);
        header('Location: save_file.php');
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
    }
}

if(isset($_POST['save_vid']) ) {
    if(isset($_POST['input_Youtube_vid']) && !empty($_POST['input_Youtube_vid']))
    {
        $link_youtube = $_POST['input_Youtube_vid'];
        $curlSession = curl_init();
            curl_setopt($curlSession, CURLOPT_URL, 'https://noembed.com/embed?url='.$_POST['input_Youtube_vid']);
            curl_setopt($curlSession, CURLOPT_RETURNTRANSFER, true);
            $jsonData = json_decode(curl_exec($curlSession));
            curl_close($curlSession);
            $title = $jsonData->title;
        $username = $_SESSION['username'];
        $sql = "INSERT INTO video (title, link, username) VALUES ('$title', '$link_youtube', '$username')";
        $result = $db->query($sql);
        $del_dup_value = $db->query("delete t1 FROM video t1 INNER JOIN video t2 WHERE t1.id < t2.id AND t1.title = t2.title AND t1.link = t2.link AND t1.username = t2.username;");
        header('Location: save_file.php');
    }
    else
    {
        echo "something wrong";
    }
}
?>