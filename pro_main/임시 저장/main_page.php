<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>메인페이지</title>
  <link rel="stylesheet" href="css/main.css">
  <script src="https://kit.fontawesome.com/35a40717bb.js" crossorigin="anonymous"></script>
</head>
<body>
  <div id="container">
    <header id="top"><!--로고 누르면 메인페이지로 이동, 해당 부분은 항상 top에 위치-->
      <div class="top_logo"><a href="main_page.php"><i class="fa-solid fa-seedling fa-3x" id="logo_icon" style="color:#fff"></i></a></div>
      <div class="lg_join"><!--로그인 상태일때는 내글보기/내정보/로그아웃-->
      <?php if(isset($_SESSION["login_user"])){ ?>
        <a href="#"><button>INFO</button></a>
        <a href="logout.php"><button>LOGOUT</button></a>
      <?php } else { ?>
        <a href="login_page.php"><button>LOGIN</button></a>
        <a href="join_page.php"><button>JOIN</button></a>
      <?php } ?>
      </div>
    </header>

    <div id="bn">
      <div id="bn_left">
        <div class="left_txt">
          <p>Hello, Gardener!</p>
          <h1>베란다 가든에 어서오세요.</h1>
          <h4>반려식물을 모시는 식집사들의 친목활동, 정보공유를 위한 커뮤니티입니다.</h4>
        </div>

        <div id="search_bar">
          <form action="result_search_all.php" method="get">
          <input type="text" placeholder="무엇이든 물어보세요" name="search">
          <input type="submit" value="FIND" class="icon_search">
          </form>
        </div>
      </div>

      <div id="bn_right">
        <h1>오늘의 매거진</h1>
        <div class="right_item">
          <div class="item-inner clearfix">
            <h2 class="inner_title">
            <a href="https://magazine.brique.co/brq-news/%ec%8b%9d%eb%ac%bc%ec%83%9d%ed%99%9c%ea%b0%80%ec%a0%84-lg-%ed%8b%94%ec%9a%b4-%ec%b6%9c%ec%8b%9c/" class="inner_a">
            뉴스: LG전자, 실내 식물 키워주는 생활가전 ‘LG 틔운tiiun’ 출시 </a>
            </h2>
            <div class="post-summary">
              에디터. 윤정훈&nbsp; 자료. LG 전자
              서랍장의 손잡이를 당기니 싱그러운 꽃과 채소가 나타난다. 공상과학 영화 속 한 장면 같은 이야기일까?
              LG전자가 꽃, 채소, 허브 등 다양한 식물을 누구나…
            </div>
            
            <div class="post-meta">
              <span class="time"><time class="post-published updated" datetime="2021-10-17T20:22:46+09:00">2021-10-17</time></span>
            </div>
          </div>
        </div>

        <div class="item-inner clearfix">
          <h2 class="inner_title">
            <a href="https://magazine.brique.co/article/%ec%a7%80%ea%b5%ac%ec%9d%b8%ec%9d%98-%ec%a0%95%ec%9b%90/" class="inner_a">
              기사: 지구인의 정원
            </a>
          </h2>
          <div class="post-summary">
            에디터. 김지아&nbsp; 사진. 윤현기&nbsp; 자료. 서울가드닝클럽
            서울가드닝클럽은 식물과 정원을 기반으로 공간을 만들고 콘텐츠를 기획하는 크리에이티브 스튜디오이다. 흔히 아는 정원뿐 아니라 모르는 정원까지… </div>
          <div class="post-meta">
            <span class="time"><time class="post-published updated" datetime="2021-09-28T15:32:51+09:00">2021-09-28</time></span>
          </div>
        </div>
      </div>
    </div>
    
    <div id ="main_contents">
      <div id="board_contents">
          <div id="gell_box">
            <div class="board_title">
              <h4>우리집 초록이를 자랑해요</h4>
              <p><a href="#">더보기</a></p>
            </div>  
            
            <div id="box_inner">
              <ul class="box_list">
                <li class="box_list_item">
                  <img src="img/icon1.png"><!--최신글 이미지-->
                  <div class="info">
                    <span class="info_title"> 새싹이 났어요~<!--게시글 제목--></span>
                    <span class="user_name"> 작성자 </span>
                  </div>
                </li>

                <li>
                  <img src="img/icon1.png"><!--최신글 이미지-->
                  <div class="info">
                    <span class="info_title"> 새싹이 났어요~<!--게시글 제목--></span>
                    <span class="user_name"> 작성자 </span>
                  </div>
                </li>

                <li>
                  <img src="img/icon1.png"><!--최신글 이미지-->
                  <div class="info">
                    <span class="info_title"> 새싹이 났어요~<!--게시글 제목--></span>
                    <span class="user_name"> 작성자 </span>
                  </div>
                </li>

                <li>
                  <img src="img/icon1.png"><!--최신글 이미지-->
                  <div class="info">
                    <span class="info_title"> 새싹이 났어요~<!--게시글 제목--></span>
                    <span class="user_name"> 작성자 </span>
                  </div>
                </li>

                <li>
                  <img src="img/icon1.png"><!--최신글 이미지-->
                  <div class="info">
                    <span class="info_title"> 새싹이 났어요~<!--게시글 제목--></span>
                    <span class="user_name"> 작성자 </span>
                  </div>
                </li>

                <li>
                  <img src="img/icon1.png"><!--최신글 이미지-->
                  <div class="info">
                    <span class="info_title"> 새싹이 났어요~<!--게시글 제목--></span>
                    <span class="user_name"> 작성자 </span>
                  </div>
                </li>

                <li>
                  <img src="img/icon1.png"><!--최신글 이미지-->
                  <div class="info">
                    <span class="info_title"> 새싹이 났어요~<!--게시글 제목--></span>
                    <span class="user_name"> 작성자 </span>
                  </div>
                </li>

                <li>
                  <img src="img/icon1.png"><!--최신글 이미지-->
                  <div class="info">
                    <span class="info_title"> 새싹이 났어요~<!--게시글 제목--></span>
                    <span class="user_name"> 작성자 </span>
                  </div>
                </li>

                <li>
                  <img src="img/icon1.png"><!--최신글 이미지-->
                  <div class="info">
                    <span class="info_title"> 새싹이 났어요~<!--게시글 제목--></span>
                    <span class="user_name"> 작성자 </span>
                  </div>
                </li>

                <li>
                  <img src="img/icon1.png"><!--최신글 이미지-->
                  <div class="info">
                    <span class="info_title"> 새싹이 났어요~<!--게시글 제목--></span>
                    <span class="user_name"> 작성자 </span>
                  </div>
                </li>
              </ul>
            </div>
          </div>

          <div id="total_board">
            <div class="board_title">
              <h4>전체글보기</h4>
              <p><a href="board_list.php">더보기</a></p>
            </div>

            <table>
              <tr>
                <td>게시판이름</td>
                <td>게시글 제목</td>
                <td>작성자</td>
                <td>작성일시</td>
                <td>조회수</td>
              </tr>
            </table>
          </div>
      </div>
      
      <div id="main_side">
        <div id="lg_side">
          <div class="user_ins">
            <!--로그인 상태면 유저정보/ 아니면 "유저정보가 없습니다. (로그인/회원가입)"-->
          </div>
        </div>
          
        <nav id="menu_bar">
          <ul class="main_menu">
            <li>
              <span>필독공지</span>
              <ul class="sub_menu">
                <li><a href="notice_board.php">공지사항</a></li>
                <li><a href="#">건의사항</a></li>
              </ul>
            </li>

            <li>
              <span>가든 가꾸기</span>
              <ul class="sub_menu">
                <li><a href="#">가든용품</a></li>
                <li><a href="#">화원 / 마켓 정보</a></li>
                <li><a href="tip_board.php">나만의 꿀팁</a></li>
                <li><a href="#">식물이 아파요</a></li>
                <li><a href="#">묻고 답하기</a></li>
              </ul>
            </li>

            <li>
              <span>자랑해요</span>
              <ul class="sub_menu">
                <li><a href="img_board.php">반려식물</a></li>
                <li><a href="#">우리집 정원</a></li>
                <li><a href="#">성장일기</a></li>
              </ul>
            </li>

            <li>
              <span>식물집사</span>
              <ul class="sub_menu">
                <li><a href="#">식집사님들의 일상</a></li>
                <li><a href="#">수다방</a></li>
              </ul>
            </li>
            <li>
              <span>나눔해요</span>
              <ul class="sub_menu">
                <li><a href="#">나눔/교환</a></li>
                <li><a href="#">나눔/교환 후기</a></li>
                <li><a href="#">공동구매</a></li>
                <li><a href="#">공동구매 후기</a></li>
              </ul>
            </li>
            
          </ul>
        </nav>
      </div>

    </div>


    <div id="footer">
      <p>식집사들의 이야기 https://www.veranda.com </p>
      <p>VERANDA GARDEN</p>
    </div>
  </div>
</body>
</html>