<?php
    file_put_contents("./data/{$_POST['title']}", $_POST['description']);
    header("Location: ./web_app.php?id={$_POST['title']}");
?>