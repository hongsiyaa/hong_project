<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>    
    <link rel="stylesheet" href="./assets/css/borad.css" />
  </head>
  <body>
  <?php
    include 'db.php';
    ?>
    <ul>
    <?php

        //조회하기
        $sql = "SELECT * FROM hong_board";
        $result = mysqli_query($conn , $sql);
        $list = '';

        // while($row = mysqli_fetch_array($result)){
        //   $list = $list."<li>{$row['idx']} <a href=\"view.php?idx={$row['idx']}\">{$row['subject']}</a></li>";
        // }
        // echo $list;
       
    ?>
    </ul>

    <div class="board-container">
    <div class="board-header">
        <h2>게시판 목록</h2>
        <a href="write.php" class="write-btn">글쓰기</a>
    </div>

    <table class="board-table">
        <thead>
            <tr>
                <th>번호</th>
                <th>제목</th>
                <th>삭제</th>
            </tr>
        </thead>
        <tbody>
        <?php

      
        // while($row = mysqli_fetch_array($result)){
        //   $list = $list."<li>{$row['idx']} <a href=\"view.php?idx={$row['idx']}\">{$row['subject']}</a></li>";
        // }
        // echo $list;

        while($row = mysqli_fetch_array($result)){
          echo "<tr>";
          echo "<td>" . $row['idx'] . "</td>";
          echo "<td> <a href='view.php?idx=" . $row['idx'] ."'>" . htmlspecialchars($row['subject']) . "</a></td>";
          echo "<td> <a href='delete.php?idx=" . $row['idx'] . "'class='delete-btn' onclick='return confirm(\"정말 삭제하시겠습니까?\")'>삭제</a></td>";
          echo "</tr>";
        }
        ?>
        </tbody>
    </table>
</div>
  </body>
</html>
