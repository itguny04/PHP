<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <h2>scandir</h2>
        scandir은 디렉터리를 스캔하는 함수이다.
        <?php

            $dir_path = "./exam_image";
            $dir_list = scandir($dir_path);

            //var_dump($dir_list);

            echo "<br>";

            if($dir_list==FALSE or count($dir_list) == 2){ //디렉터리가 존재하지 않거나, 내부의 파일이 없을 경우
                echo "디렉터리가 존재하지 않거나, 비어있습니다.";
            }else{
                for($i=2;$i<count($dir_list);$i++){
                    echo $dir_list[$i]."<br>";
                }
            }
        ?>
    </body>
</html>