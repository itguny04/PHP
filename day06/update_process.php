<?php
    /*
    echo $_POST['old_title'];
    echo $_POST['new_title'];
    */
    rename("./data/{$_POST['old_title']}", "./data/{$_POST['new_title']}");
    file_put_contents("./data/{$_POST['new_title']}", $_POST['description']);
    header("Location: ./web_app.php?id={$_POST['title']}");
?>
