<?php

    $conn = mysqli_connect('localhost', 'root', '1234', 'opentutorials');
    $sql = "SELECT * FROM topic";

    $result = mysqli_query($conn, $sql);
    $list = '';

    while( $row = mysqli_fetch_array($result)){
        $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
    }

    $article = array(
        'title' => "Welcome",
        'description' => "Hello web!"
    );

    if(isset($_GET['id'])){
        $fintered_id = mysqli_real_escape_string($conn, $_GET['id']);
        $sql = "SELECT * FROM topic WHERE id={$fintered_id}";
        $row = mysqli_fetch_array($result);
        $article['title'] = $row['title'];
        $article['description'] = $row['description'];
    }

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>DAY07</title>
    </head>
    <body>
        <h1><a href="index.php">WEB</a></h1>
        <ol><?= $list ?></ol>
        <form action="create_process.php" method="POST">
            <p><input type="text" name="title" placeholder="tilte"></p>
            <p><textarea name="description" placeholder="description"></textarea></p>
            <p><input type="submit"></p>
        </form>

        <a href="create.php">create</a>
        <h2>Welcome</h2>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit,
    </body>
</html>