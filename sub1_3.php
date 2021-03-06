<?php
  include "00_conn.php";
  session_cache_expire(30);
  session_start();
?>
<!DOCTYPE html>
<html lang="ko">
 <head>
  <meta charset="utf-8"/>
  <title> 티 카페 - 한라봉 오프레도 | Jeju Osulloc </title>
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
		#section0 {width:100%; margin:80px auto; }
      #section0 h3 {width:100%; height:130px;
        /* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#f6f4f2+0,ffffff+100 */
          background: rgb(246,244,242); /* Old browsers */
          background: -moz-linear-gradient(top, rgba(246,244,242,1) 0%, rgba(255,255,255,1) 100%); /* FF3.6-15 */
          background: -webkit-linear-gradient(top, rgba(246,244,242,1) 0%,rgba(255,255,255,1) 100%); /* Chrome10-25,Safari5.1-6 */
          background: linear-gradient(to bottom, rgba(246,244,242,1) 0%,rgba(255,255,255,1) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
          filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f6f4f2', endColorstr='#ffffff',GradientType=0 ); /* IE6-9 */
         text-align:center; margin:0 auto; color:#333; font-size:20px; line-height:150px; font-family:"arita_dodum-Light"; font-weight:400;}

      #menuIntro {width:700px; margin:0 auto;}
      #menuIntro:after {content:""; display:block; clear:both;}

        #leftWrap {width:40%; margin-right:10%; float:left;}
          #leftWrap .smallnav {width:100%; height:15px; padding:0 10px 10px 0; color:#aaa; font-size:10px;}
            #leftWrap .smallnav a {display:inline-block; font-size:12px; color:#333; padding-left:10px;  font-family:"arita_dodum-Medium";}
            #leftWrap .smallnav a.sub1 {padding-right:10px; }
          #leftWrap .imgIntro {width:100%; height:240px;  overflow:hidden; outline:1px solid #ccc; }
            #leftWrap .imgIntro img {width:100%; transform:scale(1); transition:all .5s ease-in-out;}

        #rightWrap {width:50%; float:left;}
          #rightWrap .desc {width:100%; margin:0 auto; font-family:"arita-buriL"; font-size:14px; position:relative;}
            #rightWrap .desc strong {display:block; width:100%; height:40px; padding:25px 0 10px; font-size:30px; font-weight:400; position:absolute; left:0; z-index:2;}
            #rightWrap .desc em {display:block; width:100%; padding:65px 0 15px; /* margin값과 strong의 높이값 합친 것이 padding-top */ font-size:20px; color:#999; }
            #rightWrap .desc .price {display:block; width:100%; font-size:20px; padding:10px 0; color:#333; }
            #rightWrap .linethrough {display:block; width:210px; height:13px; position:absolute; left:0; top:35px; background-color:rgba(145,190,120,0.3); z-index:0;}
          #rightWrap .numbering {width:100%; }
            #rightWrap .numbering label {display:inline-block; width:50%; font-family:"arita-buriL"; font-size:14px; }

          #rightWrap .btnArea {width:100%; padding:15px 0 5px;}
            #rightWrap #btn {padding:0 15px; height:30px; border-radius:10px; line-height:30px; font-size:14px; border:1px solid #669966; color:#669966; cursor:pointer; background-color:#fff; font-family:"arita_dodum-Light"; transition:all .4s;}
          #rightWrap .calcul {width:100%; padding:10px 0 5px; font-size:15px; font-family:"arita-buriL";}
            #rightWrap .calcul #total1, #rightWrap .calcul #total2 {width:60px; border:none; font-size:15px; line-height:27px; padding:0 2px;}
            #rightWrap .calcul #total1 {text-align:right;}

    /* ########## section1 ########## */
      #section1 {width:100%; margin:150px auto 0; }
        #infoHeader {width:800px; margin:0 auto; position:relative; }
          #infoHeader h3 {width:100%; border-top:1px solid #f2e7dd; padding-top:160px; text-align:center; font-size:26px; line-height:60px; font-weight:400; font-family:"arita-buriL";}
          #infoHeader em {width:100%; text-align:center;  font-style:normal; font-family:"arita-buriL"; font-size:50px; color:rgba(150,150,150,0.1); display:block;  position:absolute; left:0; top:140px; }
        #info {width:800px; margin:0 auto; }
          #info .descArea0 {width:100%; height:215px; margin:70px auto 0; position:relative;}
            #info .descArea0 .desctitle {width:100%; font-size:20px;   font-family:"arita_dodum-Thin"; text-align:center; display:block; position:absolute; letter-spacing:20px; left:50%; margin-left:-390px; top:0; z-index:2; color:#666;}
            #info .descArea0 .desc { width:100%; padding-top:50px; text-align:center; display:block; font-family:"arita_dodum-Medium"; color:#999; font-size:14px;}
            #info .descArea0 .real { display:block; margin:0 auto; width:300px; height:150px; background-image:url("img/m1_0_ing.jpg"); background-position:center bottom; background-size:100%; background-repeat:no-repeat;}



        #photos {width:100%; margin:1px auto; }
          #photos .imgArea {width:100%; margin:0 auto; }
          #photos .imgArea:after {content:""; display:block; clear:both;}
            #photos .imgArea span {width:33%; display:block; margin-right:1px; float:left;}
            #photos .imgArea span:last-child {margin-right:0;}
              #photos .imgArea span img {width:100%;}

        #info1 {width:100%; text-align:center; margin:0 auto; padding:80px 0; background-color:rgba(246,244,242,1);}
          #info1 img {width:300px;}

    /* ############ 기능 ################ */
      #leftWrap .smallnav a:hover, #leftWrap .smallnav a:focus {color:#669966;}
        #leftWrap .imgIntro:hover img {transform:scale(1.06);}

        #rightWrap #btn:hover {background-color:#669966; color:#fff; }


    /* ############## 공통 ################# */
      h3 .green {font-size:25px; color:#669966;}
	#rightWrap .desc .price  {padding:7px 0;}
	#rightWrap .calcul #total1, #rightWrap .calcul #total2 {width:30px; color:#333;}

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
    		<h3>티 카페 메뉴 소개</h3>
        <div id="menuIntro">
          <div id="leftWrap">
            <p class="smallnav">
              <span class="smallnavheader">∙</span><a href="sub1.php" title="티 카페" class="sub1">티 카페</a>&gt;<a href="#none" title="한라봉 오프레도">한라봉 오프레도</a>
            </p>
            <p class="imgIntro">
              <img src="img/m2_1.png" alt="한라봉 오프레도"/>
            </p>
          </div>
          <div id="rightWrap">
            <p class="desc">
              <strong id="teaname" title="한라봉 오프레도">한라봉 오프레도</strong>
              <em>Hanrabong O Fredo</em>
              한라봉퓨레 슬러쉬에 제주우유아이스크림을 얹은 음료.
              <span class="price"><span id="price_th">7</span>,<span id="price_rem">500</span>원</span>
              <span class="linethrough"></span>
            </p><!-- parseInt(document.getElementById("price_th") * 1000 + document.getElementById("price_rem")) -->
            <p class="numbering">
              <label for="num">몇 잔을 드시고 싶으신가요?</label>
              <input id="num" type="number" name="num" autocomplete="off" min="0" max="50"/>
              <!-- 51잔 이상은 alert 띄우기 - 50잔까지만 가능합니다. -->
            </p>
            <p class="btnArea">
              <input id="btn" type="button" name="btn" title="계산" value="이곳을 눌러 총 금액을 알아보세요!" onclick="totalcal();"/>
            </p>
            <p class="calcul">
              <span>총 <input id="total1" type="text" name="total1" title="총 금액" readonly="readonly" autocomplete="off"/>,<input id="total2" type="text" name="total2" title="총 금액" readonly="readonly" autocomplete="off"/> 원</span>
            </p>
			<input type="text" id="price" name="price" title="price" value="7500" style="display:none;"/>
			<input type="text" id="total" name="total" title="total" style="display:none;"/>
            <!-- <p class="like">
              <img src="img/heart_not.png" alt="like"/>
            </p> -->
          </div>
        </div>
      </section>
      <section id="section1">
          <h2>메뉴 정보</h2>
        <div id="infoHeader">
          <h3>한라봉 오프레도</h3>
          <em>Hanrabong O Fredo</em>
        </div>
        <div id="info">
          <p class="descArea0">
             <span class="desctitle">O FREDO</span>
             <span class="desc">한라봉 오프레도는, 다양한 재료가 들어간 쉐이크에 부드러운 아이스크림 토핑을 얹은 아이스 음료인 O FREDO 입니다. </span>
             <!-- <span class="real"></span> -->
          </p>
        </div>
        <div id="info1">
          <img src="img/ofredo1.png" alt="ofredo"/>
          <!--
          <video controls><source src="video/teaade1.mp4" title="video"/></video>
        -->
        </div>
        <div id="photos">
          <p class="imgArea">
            <span>
              <img src="img/m2_1_real.jpg" alt="img"/>
            </span>
            <span>
              <img src="img/m3_0_real0.jpg" alt="img"/>
            </span>
            <span>
              <img src="img/m_tea14.jpg" alt="img"/>
            </span>
          </p>
        </div>
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
	jQuery(document).ready(function(){
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
  function totalcal(){
	var price = document.getElementById("price");
	var price_th = document.getElementById("price_th");
	var price_rem = document.getElementById("price_rem");
	var num = document.getElementById("num");
	var total = document.getElementById("total");
	var total1 = document.getElementById("total1");
	var total2 = document.getElementById("total2");
	var teaname = document.getElementById("teaname");

	total.value = price.value * num.value;

	if(num.value == ""){
		alert("잔 수를 선택하세요.");
		return false;
	}

	total1.value = Math.floor(total.value/1000);
	total2.value = total.value % 1000;
	if(total2.value == 0){
		total2.value = "000";
	}
	setTimeout(function(){
		var i = confirm(teaname.title+"를 "+num.value+"잔 선택하셔서 \n"+total1.value+","+total2.value+"원 입니다.");
		if(i == true){
			location.href="result.php";
		}
		else {
			history.go(-1);
		}
	},1000);
  }
  </script>
 </body>
</html>
<!--
	1920px
-->
