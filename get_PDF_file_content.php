<?php 
    $db = mysqli_connect('localhost:3306', 'root', 'root', 'quanlytainguyenmonhoc');
    if(!empty($_GET['user']))
    {
        $u_name = $_GET['user'];
        if(isset($_GET['keyword']))
        {
            $word = $_GET['keyword'];
            $get_pdf_sql = "SELECT * FROM saved_file WHERE share = '1' AND username='$u_name' AND file LIKE '%$word%'";
        }
        else{
        $get_pdf_sql = "SELECT * FROM saved_file WHERE share = '1' AND username='$u_name'";
        }
    }
    else{
    $get_pdf_sql = "SELECT * FROM saved_file WHERE share = '1'";
    }
    $return_sql_values=mysqli_query($db, $get_pdf_sql);
    $count = 0;
    if($result = $db->query($get_pdf_sql)){
        $count = $result->num_rows; 
    }
    while($row=$return_sql_values->fetch_row())
    {
        echo "$row[0]". ";" . "$row[1]" . ";" . $row[2]. "///splithere///";
    }
?>