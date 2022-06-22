<?php
  include "00_conn.php";
  session_cache_expire(30);
  session_start();
?>
<!DOCTYPE html>
<html lang="ko">
 <head>
  <meta charset="utf-8"/>
  <title> 티 카페 | Jeju Osulloc </title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1"/>
  <link rel="stylesheet" type="text/css" href="css/reset.css"/>
  <link rel="stylesheet" type="text/css" href="css/header.css"/>
  <link rel="stylesheet" type="text/css" href="css/sub1_style.css"/>
  <link rel="stylesheet" type="text/css" href="css/footer.css"/>
  <script type="text/javascript" src="js/jquery-1.12.4.js"></script>
  <script src="js/jquery-ui.min.js"></script>
  <style>
    @font-face {
      font-family:"arita_dodum-Bold";
      src:url("fonts/arita_dodum-Bold.woff");
    }
    @font-face {
      font-family:"arita_dodum-Light";
      src:url("fonts/arita_dodum-Light.woff");
    }
    @font-face {
      font-family:"arita_dodum-Medium";
      src:url("fonts/arita_dodum-Medium.woff");
    }
    @font-face {
      font-family:"arita_dodum-SemiBold";
      src:url("fonts/arita_dodum-SemiBold.woff");
    }
    @font-face {
      font-family:"arita_dodum-Thin";
      src:url("fonts/arita_dodum-Thin.woff");
    }
    @font-face {
      font-family:"arita-buriB";
      src:url("fonts/arita-buriB.woff");
    }
    @font-face {
      font-family:"arita-buriHL";
      src:url("fonts/arita-buriHL.woff");
    }
    @font-face {
      font-family:"arita-buriL";
      src:url("fonts/arita-buriL.woff");
    }
    @font-face {
      font-family:"arita-buriM";
      src:url("fonts/arita-buriM.woff");
    }
    @font-face {
      font-family:"arita-buriSB";
      src:url("fonts/arita-buriSB.woff");
    }
    #wrap {width:100%; margin:0 auto; max-width:1920px; }

    /* ########### container ########## */
      #container {width:100%; margin:0 auto; }




  </style>
 </head>

 <body>
  <div id="wrap">
    <header id="header">
      <div id="lHeader">
        <h1>
          <a href="index.php" title="osulloc">
            <img src="img/logo_black.png" alt="osulloc logo"/>
          </a>
        </h1>
    		<ul id="mainInfo">
<?php if(empty($_SESSION['userid'])){?>
    			<li><a href="login.php" title="로그인">로그인</a></li>
    			<li><a href="join.php" title="회원가입">회원가입</a></li>
<?php }else{ ?>
          <li style="font-size:12px; color:#333; font-family:'arita_dodum-Thin';">
            <strong style="font-size:14px; font-weight:400; color:#669966; font-family:'arita_dodum-Medium';"><?=$_SESSION['userid']?></strong>님
            <a href="logout.php" title="로그아웃">로그아웃</a>
          </li>
<?php } echo"<meta http-equiv='Refresh' content='60; url=logout.php'/>";?>
  				<li>
  					<select id="lang" onchange="langClick();">
  						<option value="ko">한국어</option>
  						<option value="en">English</option>
  					</select>
  				</li>
    		</ul>
  			<div id="gnbWrap">
  				<ul id="gnb">
  					<li><a href="sub0.php" title="소개">소개</a></li>
  					<li class="selected"><a href="sub1.php" title="티 카페">티 카페</a></li>
  					<li><a href="sub2.php" title="오설록 맵">오설록 맵</a></li>
  					<li><a href="sub3.php" title="커뮤니티">커뮤니티</a></li>
  					<li><a href="sub4.php" title="근처 관광지">근처 관광지</a></li>
  				</ul>
  			</div>
      </div>
  	</header>
  	<div id="mobHeader">
      <h1>
        <a href="index.php" title="osulloc">
          <img src="img/logo_black.png" alt="osulloc logo"/>
        </a>
      </h1>
  		<div id="mobGnbWrap">
  		  <ul id="mobGnb">
    			<li><a href="sub0.php" title="소개">소개</a></li>
    			<li class="selected"><a href="sub1.php" title="티 카페">티 카페</a></li>
    			<li><a href="sub2.php" title="오설록 맵">오설록 맵</a></li>
    			<li><a href="sub3.php" title="커뮤니티">커뮤니티</a></li>
    			<li><a href="sub4.php" title="근처 관광지">근처 관광지</a></li>
  		  </ul>
  		</div>
  	</div>
    <div id="mobQuickMenuDesc">
      <p class="logoArea">
        <img src="img/bi_osulloc.png" alt="오설록"/>
      </p>
      <p class="loginArea">
<?php if(empty($_SESSION['userid'])){?>
		  <a href="login.php" title="로그인">로그인</a>
      <a href="join.php" title="회원가입">회원가입</a>
<?php }else{ ?>
		  <span style="font-family:'arita_dodum-Thin'; font-size:13px;"><strong style="font-size:14px; font-weight:400; color:#669966; font-family:'arita_dodum-Medium';"><?=$_SESSION['userid']?></strong>님</span>
		  <a href="logout.php" title="로그아웃">로그아웃</a>
<?php } echo"<meta http-equiv='Refresh' content='60; url=logout.php'/>";?>
      </p>
      <ul id="mobMenuGnb">
        <li><a href="sub0.php" title="소개">소개</a></li>
        <li><a href="sub1.php" title="티 카페">티 카페</a></li>
        <li><a href="sub2.php" title="오설록 맵">오설록 맵</a></li>
        <li><a href="sub3.php" title="커뮤니티">커뮤니티</a></li>
        <li><a href="sub4.php" title="근처 관광지">근처 관광지</a></li>
      </ul>
    </div>
    <div id="mobQuickMenu">
      <img src="img/quickmenu.png" alt="quick menu"/>
    </div>
  	<div id="container">
      <section id="section0">
		    <h2>비주얼 영역</h2>
        <div id="visual">
          <ul>
            <li class="sliding1">
              <div class="imgArea">
                <img src="img/visual_tea_cafe1.png" alt="main"/>
              </div>
              <div class="imgDesc">
                <div class="desc">
  				   <h3>Osulloc Green Tea Ice-cream</h3>
                  <span class="ment">시원한 녹차향을 즐겨보세요.<br/>
                  오설록만의 특별한 아이스크림으로 초록빛 기분을 만끽하세요.</span>
                  <a href="sub1_1.html" title="녹차 아이스크림">더 보기</a>
                </div>
              </div>
            </li>
            <li class="sliding2">
              <div class="imgArea">
                <img src="img/visual_tea_cafe2.png" alt="main"/>
              </div>
              <div class="imgDesc">
                <div class="desc">
                  <h3>O cream TEA</h3>
                  <span class="ment">꽃과 과일에서 오설록의 향기를 느껴보세요.<br/>
                  새롭게 준비한 오크림티, 오설록이 드리는 선물입니다.</span>
                  <a href="wrongpage.html" title="오크림티">더 보기</a>
                </div>
              </div>
            </li>
            <li class="sliding3">
              <div class="imgArea">
                <img src="img/visual_tea_cafe3.png" alt="main"/>
              </div>
              <div class="imgDesc">
                <div class="desc">
                  <h3>Osulloc Tea Ade</h3>
                  <span class="ment">여름과 잘 어울리는 오설록만의 에이드는 어떠세요?<br/>
                  프레시 한라봉 그린티와 프레시 유자 그린티를 추천해드려요.</span>
                  <span>
                    <a href="sub1_10.html" title="에이드">프레시 한라봉 그린티 더 보기</a>
                    <a href="sub1_0.html" title="에이드">프레시 유자 그린티 더 보기</a>
                  </span>
                </div>
              </div>
            </li>
			<li class="sliding4">
              <div class="imgArea">
                <img src="img/visual_tea_cafe4.png" alt="main"/>
              </div>
              <div class="imgDesc">
                <div class="desc">
                  <h3>Osulloc Roll Cake</h3>
                  <span class="ment">차와 잘 어울리는 롤케익.<br/>
                  푹신한 빵 속의 마스카포네 치즈크림의 부드러움을 느껴보세요.</span>
                  <span>
                    <a href="sub1_13.html" title="롤 케익">더 보기</a>
                  </span>
                </div>
              </div>
            </li>
          </ul>
          <!--
      		<div class="prev">
      			<a href="#none" title="prev button"><img src="img/prev_yellowgreen.png" alt="이전"></a>
      		</div>
      		<div class="next">
      			<a href="#none" title="next button"><img src="img/next_yellowgreen.png" alt="다음"></a>
      		</div>
        -->
          <div class="guideBtn">
              <span class="selected"></span>
              <span></span>
              <span></span>
              <span></span>
          </div>
        </div>
      </section>
      <section id="section1">
    		<h2>티 카페 메뉴 분류</h2>
    		<article id="menuSortArea">
    			<h3>제주 오설록 티 카페</h3>
				<p class="headDesc">제주 오설록 티 카페에서 판매되는 메뉴를 소개합니다.</p>
    			<ul class="menuSort">
    			  <li class="selMenu menu0">
      				<div class="topBar"></div>
      				<a href="#none" title="all">전체</a>
    			  </li>
    			  <li class="menu1">
      				<div class="topBar"></div>
      				<a href="#none" title="pure tea">퓨어 티</a>
    			  </li>
    			  <li class="menu2">
      				<div class="topBar"></div>
      				<a href="#none" title="tea latte">티 라떼</a>
    			  </li>
    			  <li class="menu3">
      				<div class="topBar"></div>
      				<a href="#none" title="o fredo">오프레도</a>
    			  </li>
    			  <li class="menu4">
      				<div class="topBar"></div>
      				<a href="#none" title="jeju special tea">제주 스페셜 티</a>
    			  </li>
    			  <li class="menu5">
      				<div class="topBar"></div>
      				<a href="#none" title="tea food">티 푸드</a>
    			  </li>
    			  <li class="menu6">
      				<div class="topBar"></div>
      				<a href="#none" title="ade">에이드</a>
    			  </li>
    			</ul>
    		</article>
			<article id="menuList">
    		  <h2>티 카페 메뉴 리스트</h2>
              <ul>
        				<li id="m0" class="menu6">
        				  <a href="sub1_0.php" title="프레시 유자 그린티">
        					<img src="img/m5_1.png" alt="프레시 유자 그린 티"/>
        					<span class="desc">
        					  <strong>프레시 유자 그린 티</strong>
        					  Fresh Citron Green Tea
        					</span>
        				  </a>
        				</li>
        				<li id="m1" class="menu5">
        				  <a href="sub1_1.php" title="그린티 아이스크림">
        					<img src="img/m4_0.jpg" alt="그린티 아이스크림"/>
        					<span class="desc">
        					  <strong>그린티 아이스크림</strong>
        					  Green Tea Ice-cream
        					</span>
        				  </a>
        				</li>
                <li id="m2" class="menu1">
        				  <a href="sub1_2.php" title="세작">
        					<img src="img/m0_1.png" alt="세작"/>
        					<span class="desc">
        					  <strong>세작</strong>
        					  Sejak Green Tea
        					</span>
        				  </a>
                </li>
        				<li id="m3" class="menu3">
        				  <a href="sub1_3.php" title="한라봉 오프레도">
        					<img src="img/m2_1.png" alt="한라봉 오프레도"/>
        					<span class="desc">
        					  <strong>한라봉 오프레도</strong>
        					  Hanrabong O Fredo
        					</span>
        				  </a>
        				</li>
                <li id="m4" class="menu1">
                  <a href="sub1_4.php" title="삼다연">
        					<img src="img/m0_2.png" alt="삼다연"/>
        					<span class="desc">
        					  <strong>삼다연</strong>
        					  Samdayeon Fermented Tea
        					</span>
        				  </a>
                </li>
        				<li id="m5" class="menu2">
        				  <a href="sub1_5.php" title="녹차 라떼">
        					 <img src="img/m1_0.png" alt="녹차 라떼"/>
        					 <span class="desc">
        					  <strong>녹차 라떼</strong>
        					  Green Tea Latte
        					</span>
        				  </a>
        				</li>
                <li id="m6" class="menu1">
                  <a href="sub1_6.php" title="제주 난꽃향 그린 티">
            		    <img src="img/m0_3.png" alt="제주 난꽃향 그린 티"/>
                    <span class="desc">
            					  <strong>제주 난꽃향 그린 티</strong>
            					  Jeju Orchid Green Tea
          					</span>
        				  </a>
                </li>
        				<li id="m7" class="menu3">
        				  <a href="sub1_7.php" title="녹차 오프레도">
        					<img src="img/m2_0.png" alt="녹차 오프레도"/>
        					<span class="desc">
        					  <strong>녹차 오프레도</strong>
        					  Green Tea O Fredo
        					</span>
        				  </a>
        				</li>
        				<li id="m8" class="menu2">
        				  <a href="sub1_8.php" title="제주 영귤 밀크티">
        					<img src="img/m1_1.jpg" alt="제주 영귤 밀크티"/>
        					<span class="desc">
        					  <strong>제주 영귤 밀크 티</strong>
        					  Jeju Tangerine Milk Tea
        					</span>
        				  </a>
        				</li>
        				<li id="m9" class="menu1">
                  <a href="sub1_9.php" title="귤꽃향을 품은 우잣담">
                    <img src="img/m0_4.png" alt="귤꽃향을 품은 우잣담"/>
                    <span class="desc">
        					    <strong>귤꽃향을 품은 우잣담</strong>
        					    Stone fence enveloped in Tangerine flower
        					  </span>
        				  </a>
                </li>
        				<li id="m10" class="menu6">
        				  <a href="sub1_10.php" title="프레시 한라봉 그린티">
        					<img src="img/m5_0.PNG" alt="프레시 한라봉 그린 티"/>
        					 <span class="desc">
        					  <strong>프레시 한라봉 그린 티</strong>
        					  Fresh Hanrabong Tangerine Green Tea
        					</span>
        				  </a>
        				</li>
        				<li id="m11" class="menu1">
                  <a href="sub1_11.php" title="일로향">
          					<img src="img/m0_0.jpg" alt="일로향"/>
          					<span class="desc">
          					  <strong>일로향</strong>
          					  Illohyang Green Tea
          					</span>
        				  </a>
                </li>
        				<li id="m12" class="menu4">
        				  <a href="sub1_12.php" title="제주 아일랜드 그린티">
          					<img src="img/m3_0.jpg" alt="제주 아일랜드 그린 티"/>
          					<span class="desc">
          					  <strong>제주 아일랜드 그린 티</strong>
          					  Jeju Island Green Tea
          					</span>
        				  </a>
        				</li>
        				<li id="m13" class="menu5">
        				  <a href="sub1_13.php" title="롤케익">
          					<img src="img/m4_1.png" alt="롤케익"/>
          					<span class="desc">
          					  <strong>롤케익</strong>
          					  Roll Cake
          					</span>
        				  </a>
        				</li>
                <li id="m14" class="menu1">
                  <a href="sub1_14.php" title="레드 파파야 블랙 티">
            		    <img src="img/m0_5.jpg" alt="레드 파파야 블랙 티"/>
                    <span class="desc">
        					  <strong>레드 파파야 블랙 티</strong>
        					  Red Papaya Black Tea
        					</span>
                  </a>
                </li>
        				<li id="m15" class="menu5">
        				  <a href="sub1_15.php" title="다쿠아즈">
        					<img src="img/m4_2.jpg" alt="다쿠아즈"/>
        					<span class="desc">
        					  <strong>다쿠아즈</strong>
        					  Dacquoise
        					</span>
        				  </a>
        				</li>
              </ul>
            </article>
          </section>
  	</div>
  	<footer id="footerWrap">
  		<h2>푸터</h2>
		<div id="footer">
			<div class="leftWrap">
				<p class="img">
				  <a href="index.php" title="오설록"><img src="img/logo_black.png" alt="오설록 로고"/></a>
				</p>
			</div>
			<div class="rightWrap">
				<ul>
					<li>
						<a href="https://www.beautypoint.co.kr/content/beautypoint/ko-kr/footer/terms/agreement.html" title="이용약관">이용약관</a>
					</li>
					<li>
						<a href="http://www.apgroup.com/int/ko" title="회사소개">회사소개</a>
					</li>
					<li>
						<a href="https://www.beautypoint.co.kr/content/beautypoint/ko-kr/footer/privacy/personal.html" title="개인정보보호정책">개인정보보호정책</a>
					</li>
					<li>
						<a href="http://www.apgroup.com/int/ko/misc/terms/cctv-policies-and-procedures.html" title="영상정보처리방침">영상정보처리방침</a>
					</li>
					<li>
						<a href="https://www.beautypoint.co.kr/beautypoint/about.html" title="뷰티포인트">뷰티포인트</a>
					</li>
					<li>
						<a href="#none" title="사이트맵">사이트맵</a>
					</li>
				</ul>
				<address class="copy">
					(주)아모레퍼시픽<br/>
					대표이사: 서경배&nbsp;&nbsp;주소: 서울특별시 용산구 한강대로 100(한강로2가)&nbsp;&nbsp;사업자등록번호: 106 86 43373<br/>
					통신판매업신고번호:2017 서울용산 1308호&nbsp;&nbsp;호스팅제공자: (주)아모레퍼시픽<br/>
					<b>&copy; 1979-2017 AMOREPACIFIC. ALL Rights Reserved, Yoon Ji-eun</b>
				</address>
				<p class="sns">
					<a href="https://www.facebook.com/Jeju.OSULLOC/" title="오설록 페이스북"><img src="img/sns0.png" alt="오설록 페이스북"/></a>&nbsp;&nbsp;<a href="https://www.instagram.com/osulloc_official/?hl=ko" title="오설록 인스타그램"><img src="img/sns1.png" alt="오설록 인스타그램"/></a>
				</p>
			</div>
		</div>
	</footer>
  </div>
  <script>
  var now = 0;
  jQuery(document).ready(function(){
    // 스크롤을 함에 따라 header 변경
    visualH = jQuery("#section0").height()+parseInt(jQuery("#section0").css("marginTop"));
    jQuery(window).scroll(function(){
      var nowScroll = jQuery(document).scrollTop();
      console.log(nowScroll);


      if(nowScroll >= visualH){
        jQuery("#header").css({"top":"-35px"});
        jQuery("#header h1, #header h1 a").css({"width":"70px","height":"23px","top":"10px"});
        jQuery("#mainInfo").css({"top":"38px"});
      }
      else {
        jQuery("#header").css({"top":"0"});
        jQuery("#header h1, #header h1 a").css({"width":"100px","height":"40px","top":"0px"});
        jQuery("#mainInfo").css({"top":"0"});
      }
      if(nowScroll >= visualH){
        jQuery("#mobGnbWrap").slideUp(500);
        jQuery("#mobHeader").css({"height":"50px"});
        jQuery("#mobQuickMenu").css({"right":"10px"});

      }
      else {
        jQuery("#mobGnbWrap").slideDown(500);
        jQuery("#mobHeader").css({"height":"80px"});
        jQuery("#mobQuickMenu").css({"right":"-50px"});
        jQuery("#mobQuickMenuDesc").css({"right":"-1000px"});
        jQuery("#mobQuickMenu").children("img").attr("src","img/quickmenu.png");
        now = 0;
      }
    });

    jQuery("#mobQuickMenu").click(function(){

      if(now == 0) {
        jQuery("#mobQuickMenuDesc").stop().animate({"right":"0"},100,"linear");
        // 버튼도 x자 모양으로 나오도록 만들기
        jQuery(this).children("img").attr("src","img/quickclose.png");
        now = 1;
      }
      else {
        jQuery("#mobQuickMenuDesc").stop().animate({"right":"-1000px"},100,"linear");
        // 버튼도 x자 모양으로 나오도록 만들기
        jQuery(this).children("img").attr("src","img/quickmenu.png");
        now = 0;
      }
    });

    // sliding-window - visual
    /*jQuery("#visual ul").prepend(jQuery("#visual ul li:last"));
    jQuery("#visual ul").css({"marginLeft":"-100%"});

    jQuery(".next").click(function(){
        jQuery("#visual ul:not(:animated)").animate({"marginLeft":"-=100%"},1500,"easeOutQuart",function(){
          jQuery("#visual ul").append(jQuery("#visual ul li:first"));
          jQuery("#visual ul").css({"marginLeft":"-100%"});
        });
    });
    jQuery(".prev").click(function(){
        jQuery("#visual ul:not(:animated)").animate({"marginLeft":"+=100%"},1500,"easeOutQuart",function(){
          jQuery("#visual ul").prepend(jQuery("#visual ul li:last"));
          jQuery("#visual ul").css({"marginLeft":"-100%"});
        });
    });
    */
    jQuery("#visual .guideBtn span").click(function(){
      var btnIndex = jQuery(this).index();
      jQuery("#visual .guideBtn span").removeClass();
      jQuery("#visual .guideBtn span:eq("+btnIndex+")").addClass("selected");

      width = jQuery("#visual").width();

      for(var i = 0; i < width; i++){
        if(btnIndex == i){
          jQuery("#visual ul").animate({"marginLeft":"-"+width*btnIndex+"px"},500);
        }
      }
    });


    jQuery(".menuSort li").on("click focusin",function(){
      jQuery(".menuSort li").removeClass("selMenu");
      jQuery(this).addClass("selMenu");
    });
    var w = jQuery("#visual").width();
    jQuery("#menuSortArea .menu0").on("click focusin",function(){
      jQuery("#menuList ul li").show();
      if(w <= 1014 && w >= 758){
        jQuery("#m0").css({"left":"1px","top":"0"});
        jQuery("#m1").css({"left":"173px","top":"0"});
        jQuery("#m2").css({"left":"345px","top":"0"});
        jQuery("#m3").css({"left":"517px","top":"0"});

        jQuery("#m4").css({"left":"1px","top":"152px"});
        jQuery("#m5").css({"left":"173px","top":"152px"});
        jQuery("#m6").css({"left":"345px","top":"152px"});
        jQuery("#m7").css({"left":"517px","top":"152px"});

        jQuery("#m8").css({"left":"1px","top":"304px"});
        jQuery("#m9").css({"left":"173px","top":"304px"});
        jQuery("#m10").css({"left":"345px","top":"304px"});
        jQuery("#m11").css({"left":"517px","top":"304px"});

        jQuery("#m12").css({"left":"1px","top":"456px"});
        jQuery("#m13").css({"left":"173px","top":"456px"});
        jQuery("#m14").css({"left":"345px","top":"456px"});
        jQuery("#m15").css({"left":"517px","top":"456px"});
      }
      else if (w <= 757 && w >= 471){
        jQuery("#m0").css({"left":"0","top":"0"});
        jQuery("#m1").css({"left":"151px","top":"0"});
        jQuery("#m2").css({"left":"302px","top":"0"});

        jQuery("#m3").css({"left":"0","top":"131px"});
        jQuery("#m4").css({"left":"151px","top":"131px"});
        jQuery("#m5").css({"left":"302px","top":"131px"});

        jQuery("#m6").css({"left":"0","top":"262px"});
        jQuery("#m7").css({"left":"151px","top":"262px"});
        jQuery("#m8").css({"left":"302px","top":"262px"});

        jQuery("#m9").css({"left":"0","top":"393px"});
        jQuery("#m10").css({"left":"151px","top":"393px"});
        jQuery("#m11").css({"left":"302px","top":"393px"});

        jQuery("#m12").css({"left":"0","top":"524px"});
        jQuery("#m13").css({"left":"151px","top":"524px"});
        jQuery("#m14").css({"left":"302px","top":"524px"});

        jQuery("#m15").css({"left":"0","top":"655px"});
      }
      else if (w <= 470 && w >= 310) {
        jQuery("#m0").css({"left":"0","top":"0"});
        jQuery("#m1").css({"left":"101px","top":"0"});
        jQuery("#m2").css({"left":"202px","top":"0"});

        jQuery("#m3").css({"left":"0","top":"86px"});
        jQuery("#m4").css({"left":"101px","top":"86px"});
        jQuery("#m5").css({"left":"202px","top":"86px"});

        jQuery("#m6").css({"left":"0","top":"172px"});
        jQuery("#m7").css({"left":"101px","top":"172px"});
        jQuery("#m8").css({"left":"202px","top":"172px"});

        jQuery("#m9").css({"left":"0","top":"258px"});
        jQuery("#m10").css({"left":"101px","top":"258px"});
        jQuery("#m11").css({"left":"202px","top":"258px"});

        jQuery("#m12").css({"left":"0","top":"344px"});
        jQuery("#m13").css({"left":"101px","top":"344px"});
        jQuery("#m14").css({"left":"202px","top":"344px"});

        jQuery("#m15").css({"left":"0","top":"430px"});
      }
      else {
        jQuery("#m0").css({"left":"0","top":"0"});
        jQuery("#m1").css({"left":"254px","top":"0"});
        jQuery("#m2").css({"left":"508px","top":"0"});
        jQuery("#m3").css({"left":"762px","top":"0"});

        jQuery("#m4").css({"left":"0","top":"222px"});
        jQuery("#m5").css({"left":"254px","top":"222px"});
        jQuery("#m6").css({"left":"508px","top":"222px"});
        jQuery("#m7").css({"left":"762px","top":"222px"});

        jQuery("#m8").css({"left":"0","top":"444px"});
        jQuery("#m9").css({"left":"254px","top":"444px"});
        jQuery("#m10").css({"left":"508px","top":"444px"});
        jQuery("#m11").css({"left":"762px","top":"444px"});

        jQuery("#m12").css({"left":"0","top":"666px"});
        jQuery("#m13").css({"left":"254px","top":"666px"});
        jQuery("#m14").css({"left":"508px","top":"666px"});
        jQuery("#m15").css({"left":"762px","top":"666px"});

    }
    });

    jQuery("#menuSortArea .menu1").on("click focusin", function(){
      jQuery("#menuList ul li").show();
      jQuery("#menuList .menu2, #menuList .menu3, #menuList .menu4, #menuList .menu5, #menuList .menu6").hide();
      if(w <= 1014 && w >= 758){
        jQuery("#m2").css({"left":"1px","top":"0"});
        jQuery("#m4").css({"left":"173px","top":"0"});
        jQuery("#m6").css({"left":"345px","top":"0"});
        jQuery("#m11").css({"left":"517px","top":"0"});

        jQuery("#m9").css({"left":"1px","top":"152px"});
        jQuery("#m14").css({"left":"173px","top":"152px"});
      }
      else if (w <= 757 && w >= 471){
        jQuery("#m2").css({"left":"0","top":"0"});
        jQuery("#m4").css({"left":"151px","top":"0"});
        jQuery("#m6").css({"left":"302px","top":"0"});

        jQuery("#m11").css({"left":"0","top":"131px"});
        jQuery("#m9").css({"left":"151px","top":"131px"});
        jQuery("#m14").css({"left":"302px","top":"131px"});
      }
      else if (w <= 470 && w >= 310) {
        jQuery("#m2").css({"left":"0","top":"0"});
        jQuery("#m4").css({"left":"101px","top":"0"});
        jQuery("#m6").css({"left":"202px","top":"0"});

        jQuery("#m11").css({"left":"0","top":"86px"});
        jQuery("#m9").css({"left":"101px","top":"86px"});
        jQuery("#m14").css({"left":"202px","top":"86px"});
      }
      else {
        jQuery("#m2").css({"left":"0","top":"0"});
        jQuery("#m4").css({"left":"254px","top":"0"});
        jQuery("#m6").css({"left":"508px","top":"0"});
        jQuery("#m11").css({"left":"762px","top":"0"});

        jQuery("#m9").css({"left":"0","top":"222px"});
        jQuery("#m14").css({"left":"254px","top":"222px"});
      }
    });

    jQuery("#menuSortArea .menu2").on("click focusin",function(){
      jQuery("#menuList ul li").show();
      jQuery("#menuList .menu1, #menuList .menu3, #menuList .menu4, #menuList .menu5, #menuList .menu6").hide();
      if(w <= 1014 && w >= 758){
        jQuery("#m5").css({"left":"1px","top":"0"});
        jQuery("#m8").css({"left":"173px","top":"0"});
      }
      else if (w <= 757 && w >= 471){
        jQuery("#m5").css({"left":"0","top":"0"});
        jQuery("#m8").css({"left":"151px","top":"0"});
      }
      else if (w <= 470 && w >= 310) {
        jQuery("#m5").css({"left":"0","top":"0"});
        jQuery("#m8").css({"left":"101px","top":"0"});
      }
      else {
        jQuery("#m5").css({"left":"0","top":"0"});
        jQuery("#m8").css({"left":"254px","top":"0"});
      }
    });

    jQuery("#menuSortArea .menu3").on("click focusin", function(){
      jQuery("#menuList ul li").show();
      jQuery("#menuList .menu1, #menuList .menu2, #menuList .menu4, #menuList .menu5, #menuList .menu6").hide();
      if(w <= 1014 && w >= 758){
        jQuery("#m7").css({"left":"1px","top":"0"});
        jQuery("#m3").css({"left":"173px","top":"0"});
      }
      else if (w <= 757 && w >= 471){
        jQuery("#m7").css({"left":"0","top":"0"});
        jQuery("#m3").css({"left":"151px","top":"0"});
      }
      else if (w <= 470 && w >= 310) {
        jQuery("#m7").css({"left":"0","top":"0"});
        jQuery("#m3").css({"left":"101px","top":"0"});
      }
      else {
        jQuery("#m7").css({"left":"0px","top":"0"});
        jQuery("#m3").css({"left":"254px","top":"0"});
      }
    });

    jQuery("#menuSortArea .menu4").on("click focusin", function(){
      jQuery("#menuList ul li").show();
      jQuery("#menuList .menu1, #menuList .menu2, #menuList .menu3, #menuList .menu5, #menuList .menu6").hide();
      if(w <= 1014 && w >= 758){
        jQuery("#m12").css({"left":"1px","top":"0"});
      }
      else if (w <= 757 && w >= 471){
        jQuery("#m12").css({"left":"0","top":"0"});
      }
      else if (w <= 470 && w >= 310) {
        jQuery("#m12").css({"left":"0","top":"0"});
      }
      else {
        jQuery("#m12").css({"left":"0","top":"0"});
      }
    });

    jQuery("#menuSortArea .menu5").on("click focusin", function(){
      jQuery("#menuList ul li").show();
      jQuery("#menuList .menu1, #menuList .menu2, #menuList .menu3, #menuList .menu4, #menuList .menu6").hide();
      if(w <= 1014 && w >= 758){
        jQuery("#m1").css({"left":"1px","top":"0"});
        jQuery("#m13").css({"left":"173px","top":"0"});
        jQuery("#m15").css({"left":"345px","top":"0"});
      }
      else if (w <= 757 && w >= 471){
        jQuery("#m1").css({"left":"0","top":"0"});
        jQuery("#m13").css({"left":"151px","top":"0"});
        jQuery("#m15").css({"left":"302px","top":"0"});
      }
      else if (w <= 470 && w >= 310) {
        jQuery("#m1").css({"left":"0","top":"0"});
        jQuery("#m13").css({"left":"101px","top":"0"});
        jQuery("#m15").css({"left":"202px","top":"0"});
      }
      else {
        jQuery("#m1").css({"left":"0","top":"0"});
        jQuery("#m13").css({"left":"254px","top":"0"});
        jQuery("#m15").css({"left":"508px","top":"0"});
      }
    });

    jQuery("#menuSortArea .menu6").on("click focusin",function(){
      jQuery("#menuList ul li").show();
      jQuery("#menuList .menu1, #menuList .menu2, #menuList .menu3, #menuList .menu4, #menuList .menu5").hide();
      if(w <= 1014 && w >= 758){
        jQuery("#m10").css({"left":"1px","top":"0"});
        jQuery("#m0").css({"left":"173px","top":"0"});
      }
      else if (w <= 757 && w >= 471){
        jQuery("#m10").css({"left":"0","top":"0"});
        jQuery("#m0").css({"left":"151px","top":"0"});
      }
      else if (w <= 470 && w >= 310) {
        jQuery("#m10").css({"left":"0","top":"0"});
        jQuery("#m0").css({"left":"101px","top":"0"});
      }
      else {
        jQuery("#m10").css({"left":"0","top":"0"});
        jQuery("#m0").css({"left":"254px","top":"0"});
      }
    });

    if (w <= 757) {
      jQuery(".sliding1 .ment").text("시원한 녹차향을 즐겨보세요.");
      jQuery(".sliding2 .ment").text("꽃과 과일에서의 오설록은 어떠세요?");
      jQuery(".sliding3 .ment").text("여름과 잘 어울리는 오설록만의 에이드 입니다.");
      jQuery(".sliding4 .ment").text("푹신한 빵 속의 마스카포네 치즈크림을 느껴보세요.");
    }

  	});
    function langClick(){
      var lang = document.getElementById("lang");
      if (lang.value == "en"){
        location.href="wrongpage.html";
      }
      else {
        location.href="index.html"
      }
    }
  </script>
 </body>
</html>
<!--
	1920px
-->
