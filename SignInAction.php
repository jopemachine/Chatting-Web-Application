<?php
  // DB 연결
  $database_host = "localhost";
  $database_user = "root";
  $database_password = "ttdance4902";
  $database_name = "";

  $connect_object = mysqli_connect($database_host, $database_user, $database_password, $database_name);
  if(mysqli_connect_error($connect_object)){
    echo "MySQL 접속 오류";
    echo "오류 원인 : ", mysqli_connect_error();
    exit();
  }

  // Post 방식으로 유저 데이터를 가져옴
  $ID = $_POST["ID"];
  $PW = $_POST["PW"];

  $useDB = "
    USE chattingdb;
  ";

  $ret = mysqli_query($connect_object, $useDB);

  // DB에서 PK (ID) 를 찾음
  $searchUserID = "
    SELECT * FROM usersinfotbl WHERE ID = '$ID'
  ";

  $ret = mysqli_query($connect_object, $searchUserID);

  $row = mysqli_fetch_array($ret)

  if(empty(row)){
    echo ("<script language=javascript>alert('존재하지 않는 계정입니다.')</script>");
    echo ("<script>location.href='SignIn.html';</script>");
    exit();
  }

  else if($row['PW'] != $PW){
    echo ("<script language=javascript>alert('입력하신 ID의 비밀번호가 일치하지 않습니다.')</script>");
    echo ("<script>location.href='SignIn.html';</script>");
    exit();
  }

  echo ("<script>location.href='ChattingWindowSelector.html';</script>");

?>
