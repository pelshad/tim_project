
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>회원가입</title>
  <link rel="stylesheet" href="css/join.css">
</head>
<body>
  <div id="join_page">
    <div class="header">
      <h1 class="header_txt"><a href="main_page.php">베란다가든</a></h1>
    </div>
  
      <form action="join_proc.php" method="post" id="join_form">
        <div class="user_ins">
          <input type="text" name="nm" placeholder="이름(닉네임)">
          <!--id,nm 중복확인-->
          <input class="uid" type="text" name="user_id" placeholder="아이디">
          <input type="password" name="user_pw" placeholder="비밀번호">
          <input type="password" name="confirm_pw" placeholder="비밀번호 확인">
        </div>
        <div class="user_birth">
          <input type="text" id="yy" maxlength="4" placeholder="생년(4자)">
          <select id="mm" aria-label="월">
            <option>월</option>
            <option value="01">1</option>
            <option value="02">2</option>
            <option value="03">3</option>
            <option value="04">4</option>
            <option value="05">5</option>
            <option value="06">6</option>
            <option value="07">7</option>
            <option value="08">9</option>
            <option value="09">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
          </select>
          <input type="text" id="dd" placeholder="일">
        </div>

        <div class="gender_ck">
          <label>여성<input type="radio" name="gender" value="0" checked></label>
          <label>남성<input type="radio" name="gender" value="1" checked></label>
          <label>선택하지 않음<input type="radio" name="gender" value="none" checked></label>
        </div>

        <div class="join_btn">
          <input type="submit" value="가입하기">
        </div>
      </form>
  </div>
</body>
</html>