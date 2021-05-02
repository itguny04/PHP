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
                echo "<a href=\"./update.php?id={$_GET['id']}\">update</a>";
            } else {
                header("Location: ./web_app.php");
            }
        ?>

        <form action="update_process.php" method="post"> 
            <input name="old_title" type="hidden" value="<?php echo $_GET['id']; ?>">
            <p><input name="new_title" type="text" value="<?php print_title();?>"></p>
            <p><textarea name="description" cols="100" rows="25"><?php print_list_value();?></textarea></p>
            <p><input type="submit" value="게시물 수정하기"></p>
        </form>

    </body>
</html>