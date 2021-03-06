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


    /* ########## section0 ########## */
		#section0 {width:100%; margin:0 auto;}
			#bg {width:600px; height:200px;  overflow:hidden; margin:150px auto 0; }
				#bg img {height:100%; }
			#section0 p {width:80%; text-align:center; margin:0 auto; font-size:15px; padding:30px 10% 50px; font-family:"arita_dodum-Medium"; color:#333; }
  			#section0 p a {display:block; width:150px; height:40px; line-height:40px; margin:0 auto; background-color:#fff;   border:1px solid #333; color:#333; transition:all .3s ease-in-out;}
        #section0 p strong {font-weight:400; font-family:"arita_dodum-Semibold"; color:#669966;}

    /* ############ 기능 ################ */
	#section0 p a:hover, #section0 p a:focus {background-color:#669966; border:1px solid #669966; color:#fff; }

    /* ############## 공통 ################# */
      h3 .green {font-size:25px; color:#669966;}



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
			<h2>티 카페 먹고 싶은 잔 선택 완료 창</h2>
			<div id="bg">
				<img src="img/top.jpg" alt="티 카페"/>
			</div>
			<p>
<?php if(empty($_SESSION['userid'])){?>

<?php }else{ ?>
				<strong><?=$_SESSION['userid']?></strong>님,
<?php } ?>
				오설록을 직접 방문하셔서 음료 및 디저트를 즐겨보세요!
			</p>
			<p>
				<a href="sub1.php" title="티 카페">티 카페로 돌아가기</a>
			</p>
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
  <div id="full">
  </div>
  <div id="view">
  </div>
  <script>
    var now = 0;
  	jQuery(document).ready(function(){
      // 스크롤을 함에 따라 header 변경

	jQuery("#section0").css({"height":jQuery(window).height()});

      visualH =parseInt(jQuery("#topMenu").css("marginTop"));
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
