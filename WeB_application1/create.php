<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CREATE</title>
    <link rel="stylesheet" href="css/create.css">
</head>
<body>
    <div id="header">
        <h2><a href="./index.html">WEB_application</a></h2>
        <nav>
            <ul type="None">
                <li><a href="./board.php"><strong>게시판</strong></a></li>
            </ul>
        </nav>
    </div>

    <form action="create_process.php" method="POST">
        <p><input type="text" name="title" maxlength="40" placeholder="제목" style="width:720px;" required></p>
        <p><textarea name="description" cols="100" rows="30" placeholder="내용을 입력해주세요." wrap="hard" style="resize: none;"></textarea></p>
        <p><input type="password" name="password" maxlength="40" placeholder="비밀번호" style="width:720px;" required></p>
        <p><input type="submit" value="업로드" style="width:720px;"></p>
    </form>

</body>
</html>