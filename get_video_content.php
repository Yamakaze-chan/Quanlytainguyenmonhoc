<?php 
    $search = $_GET['search_value'];
    $db = mysqli_connect('localhost:3306', 'root', 'root', 'quanlytainguyenmonhoc');
    $get_vid_sql = "SELECT MIN(id), MIN(title), link, MIN(username) FROM video WHERE title LIKE '%$search%' GROUP BY link";
    $return_sql_values=mysqli_query($db, $get_vid_sql);
    while($row=$return_sql_values->fetch_row())
    {
        echo "$row[0]". ";" . "$row[1]" . ";" . $row[2]. "///splithere///";
    }
?>