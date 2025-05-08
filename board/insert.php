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
  
  $user_name = $_POST['name'];
  $user_subject = $_POST['subject'];
  $user_cont = $_POST['contents'];

    // print $user_name;
    // print $user_subject; 
    // print $user_cont; 

    $sql = "INSERT INTO hong_board (name, subject, contents) VALUES ('$user_name', ' $user_subject', ' $user_cont')";
    $result = mysqli_query($conn , $sql);

    if($result === false){
        echo '저장하지 못했습니다';
        error_log(mysqli_error($conn)); //에러 로그 기록
    }else{
        echo "<script>alert('저장되었습니다'); location.href='index.php';</script>";
    }

  mysqli_close($conn);
  //print "<hr/><a href='index.php'>메인화면으로 이동</a>";

?>
</body>
</html>