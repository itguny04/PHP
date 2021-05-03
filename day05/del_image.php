<?php
    unlink("./img/{$_POST['del_img']}");
    header("Location: ./index.php");
?>