<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h2>function</h2>

    <form action="function2.php" method="POST">
        <input name="email" type="email">
        <input type="submit">
    </form>
    <?php

        function save_file($email){
            file_put_contents("./save_file/information",$email);
            echo file_get_contents("./save_file/information")."<br>";
            echo "저장완료!";
        }

        $email = $_POST['email'];
        if(isset($email)){
            save_file($email);
        }

    ?>
</body>
</html>