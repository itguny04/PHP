<?php
    //echo $_POST['id'];
    unlink("./data/". basename($_POST['delete_obj']));
    header("Location: ./web_app.php");
?>