<?php

    function print_title() {
        if(isset($_GET['img'])){
            return $_GET['img'];
        } else {
            return "Welcome Image CRUD";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>
        <?php
            echo print_title();
        ?>
    </title>
</head>
<body>
    
    <h2>
        <?php
            echo print_title();
        ?>
    </h2>

    <h3><a href="./index.php">image list</a></h3>
    
    <a href="up_image.php"><button>업로드</button></a>
    
    <form action="del_image.php" method="post">
        <input name="del_img" type="hidden" value="<?php echo $_GET['img'];?>">
        <input type="submit" value="삭제">
    </form>
    

    <ol>
        <?php
            $img_list = scandir("./img");
            for($i=2;$i<count($img_list);$i++){
                echo "<li><a href=\"index.php?img={$img_list[$i]}\">{$img_list[$i]}</a></li>";
            }
        ?>
    </ol>

    <p>
        <?php
            if(isset($_GET['img'])){
                echo "<img src=\"./img/{$_GET['img']}\" style=\"max-width: 50%; height: auto;\">";
            } 
        ?>
    </p>

</body>
</html>