
<!DOCTYPE html>
        <head>
            <meta charset="UTF-8">
            <title>form</title>
        </head>
        <body>

            <h2>POST</h2>
            <form action="form_exam.php" method="POST">
                <input name="post_data" type="text">
                <input type="submit">
            </form>

            <?php
                $post_data = $_POST["post_data"];
                echo "당신이 POST로 전달한 문자열: {$post_data}";
            ?>

            <h2>GET</h2>
            <form action="form_exam.php" method="get">
                <input name="get_data" type="text">
                <input type="submit">
            </form>
            
            <?php
                $get_data = $_GET["get_data"];
                echo "당신이 GET으로 전달한 문자열: {$get_data}"
            ?>

        </body>
</html>