<?php
    $conn = mysqli_connect("localhost", "root", "1234", "webapp");
    $sql = "SELECT * FROM board";
    $result = mysqli_query($conn, $sql);

    function echo_list($result){
        $count = 1;
        while($row = mysqli_fetch_array($result)){
            echo "  <tr>
                        <td>{$count}</td>
                        <td><center><a href=\"view.php?id={$row['id']}\">{$row['title']}</a></center></td>
                        <td>{$row['time']}</td>
                    </tr>";
            $count+=1;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Board</title>
    <link rel="stylesheet" href="./css/board.css">
</head>
    <body>
        <div id="header">
            <h2><a href="index.html">WEB_application</a></h2>
            <nav>
                <ul type="None">
                    <li><a href="./create.php">글쓰기</a></li>
                </ul>
            </nav>
        </div>

        <div id="echo_board">
            <center>
                <table border="1">
                    <thead>
                        <tr>
                            <th colspan="3">게시글 목록</th>                
                        </tr>
                        <tr>
                            <th width="20">id</th>
                            <th width="800">title</th>
                            <th width="150">date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php echo_list($result)?>
                    </tbody>
                </table>
            </center>
        </div>

    </body>
</html>