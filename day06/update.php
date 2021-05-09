<?php
    require("lib/print.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>
            <?php print_title();?>    
        </title>
    </head>
    <body>
        
        <!--제목 출력-->
        <h2>
            <a href="web_app.php">WEB</a>
        </h2>

        <ol>
            <?php print_list();?>
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