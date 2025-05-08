<?php
    include 'db.php';            
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    $user_contdel = (int)$_GET['idx'];
    $sql = "DELETE FROM hong_board WHERE idx = $user_contdel";
    $result = mysqli_query($conn, $sql);
    
    if ($result) {
        echo "<script>alert('삭제되었습니다.'); location.href='index.php';</script>";
        exit();
    } else {
        echo "<script>alert('삭제 실패'); history.back();</script>";
    }

    ?>
    <!-- <p>
        <?php
            echo $user_contdel.'번째 데이터가 삭제되었습니다.';
        ?>
    </p> -->
</body>
</html>