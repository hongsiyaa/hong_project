<?php
    include 'db.php';


    //조회하기
    $view_idx = $_GET['idx'];
    $sql = "SELECT * FROM hong_board WHERE idx = $view_idx";
    $result = mysqli_query($conn , $sql);
            
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>수정하기</title>    
    <link rel="stylesheet" href="./assets/css/borad.css" />
</head>
<body>

    <div class="write-container">
    <h2>수정하기</h2>
    <?php
         while($row = mysqli_fetch_array($result)){
          
    ?>
    <form action="insert_edit.php" method="POST">
        <input type="hidden" name="idx" value="<?= $view_idx ?>">
        <div class="form-group">
            <label for="name">이름:</label>
            <input type="text" id="name" name="name"  value="<?= $row['name'] ?>" required>
        </div>

        <div class="form-group">
            <label for="subject">제목:</label>
            <input type="text" id="subject" name="subject" value="<?= $row['subject'] ?>"  required>
        </div>

        <div class="form-group">
            <label for="contents">내용:</label>
            <textarea id="contents" name="contents" cols="30" rows="10" required><?= $row['contents'] ?></textarea>
        </div>

        <button type="submit" class="submit-btn">수정하기</button>
    </form>
    <?php 
        }
    mysqli_close($conn);
    ?>
</div>
</body>
</html>