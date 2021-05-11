<?php
    $conn = mysqli_connect('localhost',  'root', '1234', 'opentutorials'); 
    $sql = "SELECT * FROM topic";
    $result = mysqli_query($conn, $sql);
    var_dump($result);
?>