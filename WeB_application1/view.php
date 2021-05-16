<?php
    if(isset($_GET['id'])){
        $conn = mysqli_connect("localhost", "root", "1234", "webapp");
        $sql = "select * from board where id=$_GET[id]";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);

        if(!(isset($row))){
            header("Location: index.html");
        }
        
    } else {
        header("Location: index.html");
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $row['title'];?></title>
    <link rel="stylesheet" href="./css/view.css">
</head>
    <body>
        <div id="header">
            <h2><a href="index.html">WEB_application</a></h2>
        </div>

        <div>
            <center>
                <table border="1">
                    <thead>
                        <tr>
                            <th width="70px">id : <?php echo $row['id']; ?></th>
                            <th width="700px"><textarea name="title" cols="120" rows="1" style="resize: none;"><?php echo $row['title']; ?></textarea></th>
                        </tr>
                        <tr>
                            <th><?php echo $row['time']; ?></th>
                            <th width="700px">본문</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <textarea cols="150" rows="40" style="resize: none;"><?php echo $row['description']; ?></textarea>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </center>
        </div>
        <!--
        <form action="board_modify.php" method="POST">
            <input name="id" type="hidden" value="</?php echo $row['id']; ?>">
            <input name="title" type="hidden" value="</?php echo $row['title']; ?>">
            <input name="description" type="hidden" value="</?php echo $row['description']; ?>">
            <input name="password" type="password" placeholder="수정 시 password가 필요합니다." required>
            <input type="submit" value="수정">
        </form>
        -->

        <form action="delete_process.php" method=POST>
            <input name="id" type="hidden" value="<?php echo $row['id']; ?>">
            <input name="password" type="password" placeholder="삭제 시 password가 필요합니다." required>
            <input type="submit" value="삭제">
        </form>
    </body>
</html>