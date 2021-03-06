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
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>
            <?php
                print_title();
            ?>    
        </title>
    </head>
    <body>
        
        <!--제목 출력-->
        <h2>
            <a href="web_app.php">WEB</a>
        </h2>

        <ol>
            <?php
                $dir_list = scandir("./data");

                for($i=2;$i<count($dir_list);$i++){
                    echo "<li><a href=\"./web_app.php?id={$dir_list[$i]}\">$dir_list[$i]</a></li>";
                }
            ?>
        </ol>
        
        <a href="create.php">create</a>
        <?php 
            if(isset($_GET['id'])){
                echo "<a href=\"./update.php?id={$_GET['id']}\">update</a> ";
                echo "<form action=\"./delete_process.php\" method=\"POST\">";
                    echo "<input name=\"delete_obj\" type=\"hidden\" value=\"{$_GET['id']}\">";
                    echo "<input type=\"submit\" value=\"글 삭제\">";
                echo "</form>";
            }
        ?>

        <!--상세 정보 출력-->
        <h2>
            <?php
                print_title();
            ?>
        </h2>

        <p>
        <?php
            print_list_value();
        ?>
        </p>

    </body>
</html>