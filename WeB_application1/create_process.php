<?php
    if(isset($_POST['title']) and isset($_POST['password'])){
        //echo $_POST['title'].$_POST['description'].$_POST['password'];

        $conn = mysqli_connect("localhost", "root", "1234", "webapp");

        $title = $_POST['title'];
        $description = $_POST['description'];
        $password = $_POST['password'];
        
        //echo $title."<br>";
        //echo $description."<br>";
        //echo $password."<br>";

        $sql = "INSERT INTO board(title, description, time, password) VALUE('{$title}', '{$description}', NOW(), '{$password}')";
        echo $sql;

        $result = mysqli_query($conn, $sql);
        
        if($result == false){
            echo "저장하는 과정에서 문제가 생겼습니다.";
            error_log(mysqli_error($conn));
        } else {
            header("Location: ./board.php");
        }

    } else {
        echo "누락된 값이 있습니다.";
    }
?>