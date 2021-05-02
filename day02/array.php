<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <?php
            // 배열 선언
            $array1 = array('egoing', 'leezche', 'duru', 'taeho');
            echo "<h2>Array</h2>";

            for($i=0;$i<4;$i++){
                echo $array1[$i]."<br>";
            }
            echo "배열 요소: ".count($array1)."개<br>";

            // 배열 마지막에 값 추가
            array_push($array1, "new object");
            echo "<h2>array_push</h2>";

            for($i=0;$i<5;$i++){
                echo $array1[$i]."<br>";
            }
            echo "배열 요소: ".count($array1)."개<br>";

            // 배열의 마지막 값을 삭제
            array_pop($array1);
            echo "<h2>array_pop</h2>";

            for($i=0;$i<4;$i++){
                echo $array1[$i]."<br>";
            }
            echo "배열 요소: ".count($array1)."개<br>";
        ?>    
    </body>
</html>