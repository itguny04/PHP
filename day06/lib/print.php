<?php
    function print_title(){
        if(isset($_GET['id'])){
            echo $_GET['id'];
        } else {
            echo "Welcome";
        }
    }

    function print_list_value(){
        if(isset($_GET['id'])){ 
            echo "<b>".file_get_contents("data/".$_GET['id'])."</b>";
        }
    }


    function print_list(){
        $dir_list = scandir("./data");
        for($i=2;$i<count($dir_list);$i++){
            echo "<li><a href=\"./web_app.php?id={$dir_list[$i]}\">$dir_list[$i]</a></li>";
        }
    }
?>

