<?php
  include "00_conn.php";
  session_cache_expire(30);
  session_start();
?>
<!DOCTYPE html>
<html lang="ko">
 <head>
  <meta charset="utf-8"/>
  <title> 소개 | Jeju Osulloc </title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1"/>
  <link rel="stylesheet" type="text/css" href="css/reset.css"/>
  <link rel="stylesheet" type="text/css" href="css/header.css"/>
  <link rel="stylesheet" type="text/css" href="css/sub0_style.css"/>
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

	    #section0, #section1, #section2, #section3 {width:100%; margin:0 auto; }


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
  					<li class="selected"><a href="sub0.php" title="소개">소개</a></li>
  					<li><a href="sub1.php" title="티 카페">티 카페</a></li>
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
    			<li class="selected"><a href="sub0.php" title="소개">소개</a></li>
    			<li><a href="sub1.php" title="티 카페">티 카페</a></li>
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
  			<h2>제주 오설록</h2>
  			<article id="article0">
  				<h2>제주 오설록 소개 1</h2>
  				<div class="imgArea0">
  					<div class="darkening">
						<h3>Osulloc in Jeju.</h3>
  					</div>
      		</div>
        </article>
        <article id="article1">
					<div id="textArea1">
							<div id="leftWrap1">
									<h3>제주 오설록</h3>
									<p class="imgArea1">
									  <img src="img/leaf1.png" alt="leaf" id="leaf"/>
									</p>
                  <p class="imgArea2">
                    <img src="img/cup0.png" alt="cup0" id="cup0"/>
                    <img src="img/cup1.png" alt="cup0" id="cup1"/>
                  </p>
							</div>
  					  <div id="rightWrap1">
  							<div id="rightWrap1_0">
  									<p>
  										오설록은 생산에서 재배, 그리고 판매까지 한 곳에서 이루어지는 세계적으로도 손꼽히는 최대 규모의 국산 차 브랜드입니다. 오설록은 제주라는 천혜의 자연 안에서 오설록의 자연과의 상생을 통한 따뜻한 과학영농을 통해 최상의 찻잎을 얻기 위해 노력하고 있습니다.
  									</p>
  									<p>
  										오설록은 제주의 푸른 차밭, 차문화의 깊이를 느낄 수 있는 티스톤과 티뮤지엄, 도심 속 티하우스와 정신없이 바쁜 현대인들에게 제주 자연과 정성을 담은 차를 통해 내면을 아름답게 가꾸고 일상에 삶의 멋을 더하며, 관계를 따뜻하게 이어주는 가치있는 쉼을 선사합니다.
  									</p>
  							</div>
  							<div id="rightWrap1_1">
  									<p>
  										제주 오설록 서광 차밭과 맞닿아 있는 오설록 티뮤지엄은 아모레퍼시픽이 차와 한국 전통차 문화를 소개하고, 널리 보급하고자 2001년 9월에 개관한 국내 최초의 차 박물관입니다. <br/>
  										동양과 서양, 전통과 현대가 조화를 이룬 문화공간으로 차 유물관, 자연친화적인 휴식공간, 2013년 티클래스를 더해 21세기형 차 박물관으로 발돋움했습니다.
  									</p>
  									<p>
  										세계적인 디자인 건축 전문사이트인 ‘디자인붐’이 선정한 세계 10대 미술관에 오를만큼 안팎으로 아름다운 풍광을 뽐내는 티뮤지엄은 연간 150만 명의 관람객이 방문하는 제주 최고 명소이자 문화 공간입니다.
  									</p>
  							</div>
              </div>
						</div>
          </article>
  	  </section>
      <section id="section2">
        <h2>제주 오설록 오시는 길</h2>
        <article id="article2">
          <h2>제주 오설록 소개 2</h2>
          <div class="mapArea">
            <img src="img/map.png" alt="map image - 구글맵으로 변경 예정"/>
          </div>
          <div class="mapDesc">
            <div id="leftWrap2">
                <h4>자가용 이용 시</h4>
                <p>
                  제주시/공항 &gt; 1135번 평화로 &gt; 동광 육거리 &gt; 구억 방면(신화역사로) &gt; 오설록 티뮤지엄 (50분 소요)
                </p>
                <p>
                  중문관광단지 &gt; 1116번 극도 &gt; 동광 육거리 &gt; 구억 방면(신화역사로) &gt; 오설록 티뮤지엄 (30분 소요)
                </p>
                <p>
                  한림 &gt; 1132번 중산간 도로 &gt; 생각하는 정원 &gt; 유리의 성 &gt; 오설록 티뮤지엄 (30분 소요)
                </p>
            </div>
            <div id="rightWrap2">
                <h4>대중교통 이용 시</h4>
                <p>
                  <em>공항 &amp; 제주시터미널 출발</em><br/>
                  버스 150-1번, 255번 &gt; 도청(신제주로터리) &gt; 한라병원 &gt; 동광환승센터 &gt; 오설록 하차
                </p>
                <p>
                  <em>운진항(모슬포) 출발</em><br/>
                  버스 150-1번, 255번 &gt; 인성리 &gt; 구억리 &gt; NLCS제주 &gt; 오설록 하차
                </p>
                <p>
                  <em>서귀포 터미널 출발</em><br/>
                  버스 181번, 282번 &gt; 중문우체국 &gt; 창천삼거리 &gt; 동광환승센터에서 하차 후 버스 771-1번, 771-2번, 784-1번, 820-1번, 820-2번 중 환승 - NLCS제주 - 오설록 하차
                </p>
                <p>
                  <em>한림2리 출발</em><br/>
                  버스 784-1번 &gt; 한림리 &gt; 협재해변 &gt; 저지리사무소 &gt; 오설록 하차<br/>
                  버스 784-2번 &gt; 한림리 &gt; 협재해변 &gt; 조수리 &gt; 오설록 하차
                </p>
            </div>
          </div>
        </article>
      </section>
  		<section id="section3">
			<h2>제주 오설록 정보</h2>
			<article id="article3">
				<h2>제주 오설록 소개 3</h2>
					<div class="darkening">
						<div id="textArea3">
							<div id="leftWrap3">
								<strong>09:00 - 19:00</strong>
								<p>
									<em>제주 서귀포시 안덕면 신화역사로 15</em><br/>
									064-794-5312~3<br/>
									연중무휴&nbsp;&nbsp;관람 <em>무료</em>
								</p>
							</div>
						  <div id="rightWrap3">
								<p>
								- 폭우, 폭설 등 기상 상태에 따라 지연 개관 및 조기 폐관할 수 있습니다.<br/>
								- 관람객이 많은 휴일이나 휴가철에는 입장정원제를 실시할 수 있습니다. (대기 순서에 따라 입장)<br/>
								- 박물관 내부 및 야외에 외부음식물 반입이 금지되어 있습니다.<br/>
								- 애완견은 뮤지엄 내부로 데려오실 수 없습니다.
							  </p>
						  </div>
						</div>
					</div>
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
    jQuery("#article0").css({"height":jQuery(window).height()});
    visualH = jQuery("#article0").height();
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

    jQuery(window).scroll(function(){
      var nowScroll1 = jQuery(document).scrollTop();
        if(nowScroll1 >= visualH + 50 && nowScroll1 <= visualH + 350){
          jQuery("#leaf").attr("src","img/leaf2.png");
        }
        else {
          jQuery("#leaf").attr("src","img/leaf1.png");
        }
        if(nowScroll1 >= visualH + 550 && nowScroll1 <= visualH + 800) {
          jQuery("#cup0").css({"transform":"rotate(15deg)"});
          jQuery("#cup1").css({"transform":"rotate(-15deg)"});
        }
        else {
          jQuery("#cup0").css({"transform":"rotate(0deg)"});
          jQuery("#cup1").css({"transform":"rotate(0deg)"});
        }

    });
  });

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
