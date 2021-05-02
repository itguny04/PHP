<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <h2>Function</h2>    
        <h4>sum calculator</h4>
        
        <form action="function.php" method="GET">
            a: <input name="a" type="text"><br>
            b: <input name="b" type="text"><br>
            <input type="submit"><br>
        </form>

        <?php
            function sum($a, $b){
                return $a+$b;
            }

            $a = $_GET['a']; $b =$_GET['b'];

            if(isset($a)){
                echo "{$a} + {$b} = ".sum($a, $b)."";
            } else {
                echo "<p><b>hello! please input value!</b></p>";
            }  
        ?>

    </body>
</html>