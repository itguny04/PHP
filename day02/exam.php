<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        
        <h2>
            <a href="exam.php">WEB</a>
        </h2>

        <ol>
            <li><a href="exam.php?id=html">HTML</a></li>
            <li><a href="exam.php?id=css">css</a></li>
            <li><a href="exam.php?id=js">js</a></li>
        </ol>

        <h2>
            <?php
                if(isset($_GET['id'])){ //isset은 매개변수로 들어온 것의 값의 유무를 판별하여 True/False를 리턴함
                    echo $_GET['id'];
                }
                else{
                    echo "Welcome";
                }
            
            ?>
        </h2>
    
        <?php
            if(isset($_GET['id'])){ 
                echo file_get_contents("data/".$_GET['id']);
            }
            else {
                echo "Welcome! My PHP Study Page~!";
            }
        ?>

    </body>
</html>