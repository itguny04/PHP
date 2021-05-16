<?php
    if(isset($_POST['id'])){
        $conn = mysqli_connect("localhost", "root", "1234", "webapp");
        $check_sql = "SELECT password FROM board WHERE id={$_POST['id']}";
        $check_result = mysqli_query($conn, $check_sql);
        $check_row = mysqli_fetch_array($check_result);
        
        if($check_row['password'] === $_POST['password']){
            $modify_sql = "UPDATE board SET title='{$_POST['title']}' , description='{$_POST['description']}' where id='{$_POST['id']}' ";
            $modify_result = mysqli_query($conn, $modify_sql);
            header("Location: view.php?id={$_POST['id']}");
        } else {
            echo "비밀번호가 틀립니다.<br>"."<a href=\"index.html\">메인화면으로 돌아가기</a><a>";
        }
    } else {
        echo "Error<br>"."<a href=\"index.html\">메인화면으로 돌아가기</a><a>";
    }
?>