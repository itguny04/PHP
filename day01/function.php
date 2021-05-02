<!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <h2>function</h2>
        <?php
            $string = "hello everyone, my name is Geon Hui Kim";
            echo $string;
        ?>

        <h2>strlen</h2>
        <?php
            echo strlen($string)."자 입니다.";
        ?>

        <h2>nl2br</h2>
        <?php
            echo nl2br($string);
        ?>

        <h2>var_dump</h2>
        <?php
            var_dump($_GET['var_dump']);
        ?>
        <p>var_dump는 입력된 자료형을 판별하여 출력하는 함수다.</p>

    </body>
</html>