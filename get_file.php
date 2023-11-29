<?php 
    $username = $_SESSION['username'];
    $sql = "SELECT * FROM saved_file WHERE username = '$username'";
    $result = $db->query($sql);
    if($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc())
        {
            echo "<tr>";
            echo "<td>".$row['file']."</td>";
            echo "<td>".$row['time']."</td>";
            echo "<td><a href='uploads/".$row['file']. "' class='btn btn-info' download>Download</a><button class='btn btn-info' onclick='del(this,\"". $row['file']."\")' name='delete_file' type='submit' value='". $row['file']."'>DELETE</button></td>";
            echo "</tr>";
        }
    }
    else{
        echo "<tr><td colspan='3'> Nothing found </td></tr>";
    }
?>