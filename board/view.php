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
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>글 보기</title>
    
    <link rel="stylesheet" href="./assets/css/borad.css" />
  </head>
  <body>

  <div class="view-container">
  <?php
         while($row = mysqli_fetch_array($result)){
          
    ?>
    <h2><?= $row['subject'] ?></h2>
    <p><strong>작성자:</strong> <?= $row['name'] ?></p>
    <div class="post-content">
        <?= $row['contents'] ?>
    </div>

   
    <a href="index.php" class="back-btn">목록으로</a>
    <a href="edit.php?idx=<?=$row['idx']?>" class="edit-btn">수정하기</a>
    <?php
        }
        mysqli_close($conn);
    ?>
</div>
   
  </body>
</html>
