<?php
    include 'db.php'; 

    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
</head>
<body>
<?php
  
  $idx = $_POST['idx'];
  $user_name = $_POST['name'];
  $user_subject = $_POST['subject'];
  $user_cont = $_POST['contents'];


    $sql = "UPDATE hong_board SET name = '$user_name', subject = '$user_subject', contents = '$user_cont' WHERE idx = '$idx'";

    $result = mysqli_query($conn , $sql);

    if($result === false){
        echo '수정하지 못했습니다';
        error_log(mysqli_error($conn)); //에러 로그 기록
    }else{
        echo "<script>alert('수정되었습니다'); location.href='index.php';</script>";
    }

  mysqli_close($conn);
  //print "<hr/><a href='index.php'>메인화면으로 이동</a>";

?>
</body>
</html>