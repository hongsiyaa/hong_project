<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>글쓰기</title>    
    <link rel="stylesheet" href="./assets/css/borad.css" />
</head>
<body>

    <div class="write-container">
    <h2>글쓰기</h2>
    <form action="insert.php" method="POST">
        <div class="form-group">
            <label for="name">이름:</label>
            <input type="text" id="name" name="name" required>
        </div>

        <div class="form-group">
            <label for="subject">제목:</label>
            <input type="text" id="subject" name="subject" required>
        </div>

        <div class="form-group">
            <label for="contents">내용:</label>
            <textarea id="contents" name="contents" cols="30" rows="10" required></textarea>
        </div>

        <button type="submit" class="submit-btn">글쓰기</button>
    </form>
</div>
</body>
</html>