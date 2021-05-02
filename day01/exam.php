<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        
        <h2>
            WEB
        </h2>

        <ol>
            <li><a href="exam.php?id=html">HTML</a></li>
            <li><a href="exam.php?id=css">css</a></li>
            <li><a href="exam.php?id=js">js</a></li>
        </ol>

        <h2>
            <?php
                echo $_GET['id'];
            ?>
        </h2>
    
            <?php
                echo file_get_contents("data/".$_GET['id']);
            ?>
        

    </body>
</html>