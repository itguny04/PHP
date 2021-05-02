<?php
    //echo $_POST['id'];
    unlink("./data/{$_POST['delete_obj']}");
    header("Location: ./web_app.php");
?>