<?php
    function write_board(){
        if(isset($_POST['title']) and isset($_POST['description'])){
            file_put_contents("./form_board/{$_POST['title']}", $_POST['description']);
        }
    }

    write_board();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>FORM</title>
</head>
<body>
    <form action="./form.php" method="post">
        <p>
            <input type="text" name="title" placeholder="title">
        </p>
        <p>
            <textarea name="description"></textarea>
        </p>
        <p>
            <input type="submit">
        </p>
    </form>
</body>
</html>