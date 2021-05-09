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
            <a href="./web_app.php">WEB</a>
        </h2>

        <ol>
            <?php print_list();?>
        </ol>
        
        <a href="create.php">create</a>
        <form action="create_process.php" method="post">
                <p><input type="text" name="title" placeholder="title"></p>
                <p><textarea name="description" placeholder="Description" cols="100" rows="25"></textarea></p>
                <p><input type="submit" value="게시물 올리기"></p>
        </form>

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