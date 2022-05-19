<!-- 게시판별 넘버링(임시)
    팁 0
    사진 1
    폼 2 -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>리스트</title>
  <link rel="stylesheet" href="board_list.css">
</head>
<body>
<div id="board_body">
    <header>
      <div class="top">
        <h1 class="top_logo"><a href="main_page.php">베란다가든</a></h1>
        <div class="top_menu"><!--로그인 상태에 따라 다르게-->
          <a href="#">내정보</a>
          <a href="write.php">글쓰기</a>
          <a href="#">로그아웃</a>
        </div>
      </div>

      <div class="top_bn"><!--이미지--></div>
    </header>

    <section>
      <div class="contents">
        <h1>게시판</h1><!--선택한 게시판 이름 뜨게-->
        <table>
          <thead>
            <tr class="table_title">
              <th width="80px"><!--NO.--></th>
              <th width="400px">제목</th>
              <th width="100px">작성자</th>
              <th width="130px">작성일</th>
              <th width="90px">조회</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>제목영역</td>
              <td>홍길동</td>
              <td>2020.03.05</td>
              <td>13213</td></td>
            </tr>
          </tbody>
        </table>
      </div>

      <?php include_once "menubar.php";?>
 
    
    </section>

    
  </div>
  
</body>
</html>
<!-- tgretrtr -->