<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <h2>Dynamic List</h2>
        
        <ol>
            <?php
                $dir_path = "./dir_list/";
                $dir_array = scandir($dir_path);

                for($i=2;$i<count($dir_array);$i++){
                    echo "<li>{$dir_array[$i]}</li>";
                }
            ?>
        </ol>

    </body>
</html>