<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>LOGIN</title>
    </head>
    <body>
        <form method="post">
            <input name="ID" type="text">
            <input name="PW" type="password">
            <input type="submit">
        </form>
    </body>
</html>

<?php


$ID = $_POST['ID'];
$PW = $_POST['PW'];

$host = "localhost";
$user = "root";
$passwd = "1234";
$db = "phptest";

$sql = "SELECT NAME FROM LOGIN WHERE ID=\"{$ID}\" AND PW=\"{$PW}\";";
$conn = new mysqli($host, $user, $passwd, $db);
if($ID != NULL and $PW != NULL){
    if($conn->connect_errno) {
        echo "DB 접속 실패";
    } else {
        $result = $conn->query($sql);
        $username = $result->fetch_array()["NAME"];
        
        if(isset($username)){
            echo "{$username}님 환영합니다.";
        } else {
            echo "존재하지 않는 유저입니다.";
        }
    }
} else {
    echo "ID와 PW를 입력해주세요.";
}


mysqli_close($conn);

?>
