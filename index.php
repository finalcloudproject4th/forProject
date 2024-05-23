<?php
session_start();
?>


<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./images/fav/192.png">
    <script src="js/slide.js"></script>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Classlab</title>
</head>
<script src="http://code.jquery.com/jquery-3.5.1.min.js"></script>
<body>
    <div id="wrap">
        <div id="wrap-center">
            <!--header-->    
            <div class="header">
                <div id="top">
                    <a id="h-logo" href="index.html"><img src="images/logo.png" alt="logo"></a>
                    <ul>
			if (!isset($_SESSION['uid'])) {
                        	<li><a href="login.html">회원로그인  |</a></li>
			} else {
				<li><a href="logout.php">로그아웃  |</a></li>
				}
				<li><a href="instructorlogin.html">강사로그인</a></li>
                        <li><a href="register.html">회원가입</a></li>
                        <li><a href="mypage.php">마이페이지</a></li>
                    </ul>
                </div>
            </div>
                      
            <!--search--> 
            <div id="search">
                <form action="">
                    <a id="s-logo" href="index.html"><img src="images/fav/512.png" alt="search-logo" ></a>
                    <label for="search-input"></label>
                    <input id="search-input" type="text" placeholder="강의 검색">
                    <div id="search-rt">
                        <button id="search-btn">
                            <div></div>
                        </button>
                    </div>
                </form>
            </div>
            
            <!--navi--> 
            <nav id="nav">
                <ul>
                    <li>
                        <a href="#">
                            <div><img src="images/AI.png" width="50", height="40":></div>
                            <span>AI</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="#">
                            <div><img src="images/bigdata.png" width="50", height="40":></div>
                            <span>빅데이터</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div><img src="images/game.png" width="50", height="40":></div>
                            <span>게임</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div><img src="images/mobile.png" width="50", height="40":></div>
                            <span>모바일</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div><img src="images/uxui.png" width="50", height="40":></div>
                            <span>UX UI</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div><img src="images/security.png" width="50", height="40":></div>
                            <span>보안</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div><img src="images/ms.png" width="50", height="40":></div>
                            <span>MSoffice</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div><img src="images/cote.png" width="50", height="40":></div>
                            <span>코딩</span>
                            <span>테스트</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div><img src="images/cloud.png" width="50", height="40":></div>
                            <span>클라우드</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <div><img src="images/new.png" width="50", height="40":></div>
                            <span>신규강의</span>
                        </a>
                    </li>
                </ul>
            </nav>

            <main id="main">
                <!--ad_bar-->
                <div class="slider">
                    <div class="slide">
                        <img src="images/banner1.png" alt="ad img 1">
                    </div>
                    <div class="slide">
                        <img src="images/banner2.png" alt="ad img 2">
                    </div>
                    <div class="slide">
                        <img src="images/banner3.png" alt="ad img 3">
                    </div>
                </div>

                <div id="lecture">
                    <div><img src="images/lecture-demo.png" width="1200", height="300":></div>
                    <div><img src="images/lecture-demo2.png" width="1200", height="300":></div>
                    <div><img src="images/lecture-demo3.png" width="1200", height="300":></div>
                    <div><img src="images/lecture-demo.png" width="1200", height="300":></div>
                </div>
            </main>
            
            <!--footer-->
            <footer class="footer">
                <div id="footer-top">
                    <div id="menu_list">
                        <div id="list_title">클래스랩</div>
                        <a href="#" class="list_link">클래스랩 소개</a>
                        <a href="#" class="list_link">수강평 모아보기</a>
                        <a href="#" class="list_link">블로그</a>
                    </div>
                    <div id="menu_list">
                        <div id="list_title">패밀리 사이트</div>
                        <a href="#" class="list_link">추가 중</a>
                        <a href="#" class="list_link">추가 중</a>
                        <a href="#" class="list_link">추가 중</a>
                        <a href="#" class="list_link">추가 중</a>
                        <a href="#" class="list_link">추가 중</a>
                    </div>
                    <div id="menu_list">
                        <div id="list_title">서비스</div>
                        <a href="#" class="list_link">기업 교육</a>
                        <a href="#" class="list_link">멘토링</a>
                        <a href="#" class="list_link">제휴</a>
                    </div>
                    <div id="menu_list">
                        <div id="list_title">고객센터</div>
                        <a href="#" class="list_link">공지사항</a>
                        <a href="#" class="list_link">자주묻는 질문</a>
                        <a href="#" class="list_link">신고센터</a>
                        <a href="#" class="list_link">수료증 확인</a>
                        <a href="#" class="list_link">강의 요청</a>
                    </div>
                </div>

                <address id="footer-bottom">
                    <a id="f-logo" href="index.html"><img src="images/footer_logo.png" alt="f-logo"></a>
                    <div id="ad_info">
                        (주)클래스랩 | 대표자: ㅇㅇㅇ | 사업자번호: 000-00-00000 <a href="#">[사업자정보확인]</a><br>
                        통신판매업: 2024-대한민국B-0000 | 개인정보보호책임자: ㅇㅇㅇ | 이메일: info@classlab<br>
                        전화번호: 070-0000-0000 | 주소: 경기도 ㅇㅇ ㅇㅇ구 ㅇㅇ로123번길 10 2동 3층<br>
                        ©CLASSLAB. ALL RIGHTS RESERVED
                    </div>
                </address>
                <div class="icons">
                    <a href="" target="_blank">
                    <i class="fab fa-instagram"></i></a>
                    <a href="" target="_blank">
                    <i class="fab fa-facebook-square"></i></a>
                    <a href="" target="_blank">
                    <i class="fab fa-brands fa-square-x-twitter"></i>
                    <a href="" target="_blank">
                    <i class="fab fa-youtube-square"></i></a>
                </div>
            </footer>
        </div>
    </div>
</body>
</html>

