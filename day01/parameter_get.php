<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Document</title>
    </head>
    
    <body>
        <ol>
            <ul><a href="index.php?data=1">one</a></ul>
            <ul><a href="index.php?data=2">two</a></ul>
            <ul><a href="index.php?data=3">three</a></ul>
        </ol>

        <?php
            echo $_GET['data'];
        ?>    
    </body>
</html>
