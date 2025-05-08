<?php
     $conn = mysqli_connect("localhost", "hong", "1234", "hong");

     if(!$conn){
       echo 'db에 연결하지 못했습니다.'.mysqli_connect_error();
     }else{
       //echo 'db에 접속했습니다.';
     }
?>