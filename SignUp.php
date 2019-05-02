<!DOCTYPE html>
<html lang="kr">
<head>
  <meta charset="utf-8">
  <title>회원가입</title>
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./css/SignUp.css">
</head>

<body id="background">
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="./SignUp.html">회원가입</a>
  </nav>

  <section class="container" style="padding-top: 45px;">
      <p class="lead" style="font-size: 60px;">Make Your Own ID</p>
      <p class="lead" style="font-size: 14px; color: #4c4c4c;"><strong>* </strong> 란은 필수입니다.</p>
      <form class="" action="SignUpAction.php" onsubmit="return SubmitButtonClicked()" method="post" accept-charset="utf-8">
        <div class="form-group">
          <label for="ID">ID <strong>* </strong></label>
          <div class="row">
            <div class="col-lg-10">
            <input type="text" name="ID" class="form-control" placeholder="ID를 입력하세요" autofocus required>
            </div>
            <div class="col-lg-2">
            <button type="submit" class="btn btn-info btn-sm" style="margin-top: 5px;">중복확인</button>
            </div>
          </div>
        </div>
        <div class="form-group">
          <label for="PW">PW <strong>* </strong></label>
          <input type="password" name="PW" class="form-control" placeholder="비밀번호를 입력하세요" required>
        </div>
        <div class="form-group">
          <label for="PW_Confirm">PW 확인 <strong>* </strong></label>
          <input type="password" name="PW_Confirm" class="form-control" placeholder="비밀번호를 다시 한 번 입력하세요" required>
        </div>
        <div class="form-group">
          <label for="Address">주소</label>
          <input type="text" name="Address" class="form-control" placeholder="주소를 입력하세요">
        </div>
        <div class="form-group">
          <label for="PhoneNumber">핸드폰 번호</label>
          <input type="text" name="PhoneNumber" class="form-control" placeholder="핸드폰 번호를 입력하세요">
        </div>
        <button type="submit" class="btn btn-primary btn-lg" style="margin-top: 20px;">제출</button>
      </form>
  </section>

  <footer id="Copyright" class="bg-dark mt-4 p-5 text-center"> &copy; 2019 웹프로그래밍 </footer>

  <!-- 제이쿼리 자바스크립트 추가하기 -->
  <script src="./js/jquery-3.2.1.min.js"></script>
  <!-- Popper 자바스크립트 추가하기 -->
  <script src="./js/popper.min.js"></script>
  <!-- 부트스트랩 자바스크립트 추가하기 -->
  <script src="./js/bootstrap.min.js"></script>
  <!-- MDB 라이브러리 추가하기 -->
  <script src="./js/mdb.min.js"></script>
  <!-- 커스텀 자바스크립트 추가하기 -->
  <script src="./js/SignUp.js"></script>
</body>
</html>
