<?php
  include "00_conn.php";
  session_cache_expire(30);
  session_start();
?>
<!DOCTYPE html>
<html lang="ko">
 <head>
  <meta charset="utf-8"/>
  <title> 커뮤니티 | Jeju Osulloc </title>
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
		#section0 {width:100%; margin:0 auto; overflow:hidden; }
      #topMenu {width:1008px; margin:100px auto 0; padding:50px 0 15px; }
        #topMenu ul {width:300px; text-align:center; margin:0 auto;}
          #topMenu li {width:100px; height:30px; text-align:center; float:left; position:relative;}
        #topMenu ul:after {content:""; display:block; clear:both; }
            #topMenu li a {width:100px; padding-top:10px; display:block; font-size:14px; font-family:"arita_dodum-Medium"; transition:color .2s ease-in-out;}
            #topMenu li .whiteBar {width:0%; height:1px; display:block; background-color:#fff;
              position:absolute; left:0; top:0; transition:all .3s ease-in-out;}
            #topMenu li .greenBar {width:0%; height:1px; display:block; position:absolute; left:0; top:0; background-color:#94a516; transition:all .3s ease-in-out;}
            #topMenu li.selectedMenu .greenBar {width:100%; }
            #topMenu li.selectedMenu a {color:#94a516;}


      #contentWrap {width:1008px; height:550px; overflow:hidden; margin:0 auto; position:relative;}
        #content {width:3024px; position:absolute; left:0; top:0; transition:all .5s ease-in-out;}
        #noticeWrap {width:1008px; height:100%; float:left; }
        #reviewWrap {width:1008px; height:100%; float:left;}
        #eventWrap {width:1008px; height:100%; float:left;}
        .bgTitle {width:100%; font-size:100px; line-height:100px; position:absolute; left:0; bottom:20px; font-family:"arita_dodum-Bold"; letter-spacing:-10px; color:rgba(184,191,127,0.2);}
        /* 메뉴 클릭함에 따라 left값 조정, bgtitle 수정 */
		#content:after {content:""; display:block; clear:both;}

    /* ############# noticeWrap ####### */
      #notice {width:750px; padding-top:30px; margin:0 auto; }
        #notice caption {width:1px; height:1px; line-height:0; position:absolute; left:-9999px; overflow:hidden; font-size:0;}
        #notice tbody {width:100%; line-height:35px; text-indent:10px; color:#666; font-size:14px; font-family:"arita_dodum-Light";}
          #notice th {width:10%; font-weight:400; display:block; float:left; font-family:"arita_dodum-Medium";  text-indent:0;}
          #notice td {width:22.5%; display:block; float:left; }
          #notice td.noticeLink {width:45%; }
          #notice td.cen {text-align:center;}
		  #notice td.cont {display:none;}
        #notice tbody:after {content:""; display:block; clear:both;}

          #notice tr {width:100%; display:block; float:left; border-bottom:1px solid rgba(110,122,23,0.2);}
          #notice tr:first-child {border-top:1px solid rgba(110,122,23,0.2);}
            #noticeWrap .pageBtn {width:100%; text-align:center; margin:80px auto 0; }
              #noticeWrap .pageBtn a {width:10px; margin-right:30px; padding:0 3px; border:1px solid #ddd; border-radius:5px; display:inline-block; }
                #noticeWrap .pageBtn a:last-child {margin-right:0;}
                #noticeWrap .pageBtn a img {width:100%; }


    /* notice 부분 모달 팝업 */
      #full {position:fixed; background-color:rgba(0,0,0,0.3); width:100%; height:100%; left:0; top:0; z-index:12;}
      #view {position:fixed; background-color:#fff; width:700px; height:600px; left:50%; top:50%; margin-left:-400px; margin-top:-300px; z-index:13; padding:0 50px;}
		#view h3 {width:100%; padding:45px 0 20px; word-wrap:break-word; font-weight:400; font-family:"arita_dodum-Medium"; font-size:20px; border-bottom:1px solid rgba(110,122,23,0.2); }
		#view .noticeHead {width:100%; padding:15px 0; font-size:13px; color:#666; font-family:"arita_dodum-Medium"; text-align:right; }
			#view .noticeHead span {display:inline-block; }
			#view .noticeHead .divide {padding:0 10px; color:#ccc;}
			#view #noticeContents {width:92%; padding:20px 4%;  height:330px;  margin-top:30px;  outline:1px solid rgba(110,122,23,0.2); color:#333; font-family:"arita_dodum-Medium"; font-size:14px; line-height:27px; word-wrap:break-word; overflow:auto; }

	#view #viewHead {width:100%; height:20px; text-align:right;}
	.closeBtn {width:100%; height:20px; padding-top:30px; text-align:right; cursor:pointer;}
				.closeBtn img {width:20px; }

    /* ########### reviewWrap ############## */
      #reviewArea {width:830px; height:450px;  position:relative; margin:30px auto 0;}
      #reviewArea .review {width:150px; height:200px; padding:0 25px; border-radius:10px; border:1px solid #ddd; color:#666; overflow:hidden; position:absolute; cursor:pointer; font-family:"arita_dodum-Medium"; transition:all .6s ease-in-out;}
        #reviewArea .review0 {left:0; top:210px; }
        #reviewArea .review1 {left:630px; top:0; }
        #reviewArea .review2 {left:420px; top:0;}
        #reviewArea .review3 {left:210px; top:0;}
        #reviewArea .review4 {left:0; top:0;}
      #reviewArea .review .textArea {width:100%; height:20px; margin-top:70px; line-height:20px; overflow:hidden; white-space:nowrap; text-overflow:ellipsis; font-size:14px; }
      #reviewArea .review .reviewInfo {width:100%; margin-top:30px; font-size:13px; text-align:center; font-family:"arita_dodum-Light";}
        #reviewArea .review .reviewInfo .divide {padding:0 10px; color:#eee; }

      #reviewWrap .pageBtn {width:100%; text-align:center; position:absolute; left:0; bottom:0;}
        #reviewWrap .pageBtn a {width:10px; margin-right:30px; padding:0 3px; border:1px solid #ddd; border-radius:5px; display:inline-block; }
          #reviewWrap .pageBtn a:last-child {margin-right:0;}
          #reviewWrap .pageBtn a img {width:100%; }


	/* ########### eventWrap ################ */
		#eventMenu {width:100%; margin:30px auto; }
			#eventMenu ul {width:250px; margin:0 auto; }
				#eventMenu ul li {width:120px; height:35px; line-height:35px; float:left; margin-right:10px; }
					#eventMenu ul li a {display:block; width:100%; height:100%; font-size:14px;  font-family:"arita_dodum-Light"; text-align:center;  border-radius:25px; position:relative;}
					#eventMenu ul li a.selectedMenu {background-color:#94a516; color:#fff; border-radius:25px; }
				#eventMenu ul li:last-child {margin-right:0;}
				#eventMenu ul:after {content:""; display:block; clear:both;}
					#eventMenu ul li a .hoverBar {width:0px; height:7px; position:absolute; left:25px; bottom:15px;
					z-index:-100; background-color:rgba(204,204,153,0.6); transition:all .5s ease-in-out;  }

      #eventContentWrap {width:100%; height:400px; overflow:auto;}
      #eventContent {width:100%; margin:0 auto; padding-top:5px;}
      #nowEvent, #lastEvent {width:100%; margin:0 auto; }
        #eventContent li {width:94%; margin:0 3% 5px; position:relative; }
        #eventContent li:last-child {margin-bottom:0;}
          #eventContent li a {display:block; width:100%; transition:all .4s ease-in-out; outline:1px solid #fff;}
            #eventContent li a .img {display:block; width:100%; height:230px; overflow:hidden; text-align:center; }
              #eventContent li a img {width:100%;}
            #eventContent li a .desc {display:block; width:95%; position:absolute; left:0; top:70px; font-size:14px; padding-left:5%; font-family:"arita_dodum-Light"; line-height:20px; color:#333; transition:all .5s;}

            #eventContent .eventTitle { width:100%; font-size:18px; font-family:"arita-buriM"; display:block; line-height:50px; }
            #eventContent .period {display:block; width:100%; font-size:13px; font-weight:bold; line-height:24px; }


    /* ############ 기능 ################ */
      #topMenu li a:hover, #topMenu li a:focus {color:#94a516;}
      #topMenu li.selectedMenu a:hover, #topMenu li.selectedMenu a:focus {color:#94a516;}
      /* 어떤 한 메뉴를 선택하면 다른 메뉴 whiteBar가 0에서 100% 그치만 그 한 메뉴는 greenBar가 0에서 100% */


      #notice tbody a:hover, #notice tbody a:focus {color:#94a516;}
      #reviewArea .review:hover {background-color:#9f8a61; color:#fff; }

	  #eventMenu ul li a:hover, #eventMenu ul li a:focus {color:#333; }
	  #eventMenu ul li a:hover .hoverBar, #eventMenu ul li a:focus .hoverBar {width:65px;}
	  #eventMenu ul li a.selectedMenu:hover, #eventMenu ul li a.selectedMenu:focus {color:#fff;}

    #eventContent li a:hover, #eventContent li a:focus {outline:1px solid #94a516;}
    #eventContent li:hover a .desc {color:#777;}
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
  					<li><a href="sub1.php" title="티 카페">티 카페</a></li>
  					<li><a href="sub2.php" title="오설록 맵">오설록 맵</a></li>
  					<li class="selected"><a href="sub3.php" title="커뮤니티">커뮤니티</a></li>
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
    			<li><a href="sub1.php" title="티 카페">티 카페</a></li>
    			<li><a href="sub2.php" title="오설록 맵">오설록 맵</a></li>
    			<li class="selected"><a href="sub3.php" title="커뮤니티">커뮤니티</a></li>
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
			<h2>공지사항과 방문후기</h2>
			<div id="topMenu">
				<ul>
					<li class="noticeMenu selectedMenu">
						<span class="greenBar"></span>
						<span class="whiteBar"></span>
						<a href="#none" title="공지사항">
							공지사항
						</a>
					</li>
					<li class="reviewMenu">
						<span class="greenBar"></span>
						<span class="whiteBar"></span>
						<a href="#none" title="방문후기">
							방문후기
						</a>
					</li>
					<li class="eventMenu">
						<span class="greenBar"></span>
						<span class="whiteBar"></span>
						<a href="#none" title="이벤트">
							이벤트
						</a>
					</li>
				</ul>
			</div>
			<div id="contentWrap">
			  <div id="content">
  				<div id="noticeWrap">
  					<table id="notice">
  						<caption>notice</caption> <!-- 사라지게 만들기, 모달팝업으로 자세한 공지 띄우기 -->
						<tbody>
  							<tr id="notice05">
  								<th class="no05">05</th>
  								<td class="noticeLink">
  									<a href="#none" title="녹차밭 체험 운영 시간 조정 안내" id="noti05">녹차밭 체험 운영 시간 조정 안내</a>
  								</td>
  								<td class="cen">
  									관리자
  								</td>
  								<td class="cen date">
  									<span id="date05">18.04.26</span>
  								</td>
  								<td class="cont">
									<span id="cont05">
										안녕하세요. 오설록 입니다.<br/>
										따뜻한 봄이 옴에 따라 해가 길어진 관계로, 녹차밭 체험 운영 시간이 오후 2시에서 오후 3시로 늦춰졌습니다.<br/>
										착오 없으시길 바랍니다.<br/>
										감사합니다.<br/>
										오설록 드림.
									</span>
  								</td>
  							</tr>
  							<tr id="notice04">
  								<th class="no04">04</th>
  								<td class="noticeLink">
  									<a href="#none" title="오설록이 새해 인사 드립니다." id="noti04">오설록이 새해 인사 드립니다.</a>
  								</td>
  								<td class="cen">
  									관리자
  								</td>
  								<td class="cen date">
  									<span id="date04">18.01.01</span>
  								</td>
  								<td class="cont">
									<span id="cont04">
										안녕하세요. 오설록 입니다.<br/>
										2018년 새해가 밝았습니다.<br/>
										새해 복 많이 받으시고, 올 한 해에도 좋은 일만 가득하시길 진심으로 기원합니다.<br/>
										또한, 사랑하는 사람들과 건강하고 따뜻한 겨울 보내시길 바랍니다.<br/>
										감사합니다.<br/>
										오설록 드림.
									</span>
  								</td>
  							</tr>
  							<tr id="notice03">
  								<th class="no03">03</th>
  								<td class="noticeLink">
  									<a href="#none" title="반려견 출입 문제 안내" id="noti03">반려견 출입 문제 안내</a>
  								</td>
  								<td class="cen">
  									관리자
  								</td>
  								<td class="cen date">
  									<span id="date03">17.09.26</span>
  								</td>
  								<td class="cont">
									<span id="cont03">
										안녕하세요. 오설록 입니다.<br/>
										요즈음 이슈가 되고 있는 반려견 문제에 관해 고객님들의 질문이 많아 공식적으로 답변을 해드리겠습니다.<br/>
										반려견은 제주 오설록 건물 내로 출입이 불가능합니다.<br/><br/>

										녹차밭으로 반려견 출입 시 반려견에게 입마개를 해주셔야 하며,<br/>
										다른 고객님들께 피해가 가지 않도록 유의 부탁드립니다.<br/>
										감사합니다.<br/>
										오설록 드림.
									</span>
  								</td>
  							</tr>
  							<tr id="notice02">
  								<th class="no02">02</th>
  								<td class="noticeLink">
  									<a href="#none" title="장마 철에 찾아 오실 때 당부의 말씀" id="noti02">장마 철에 찾아 오실 때 당부의 말씀</a>
  								</td>
  								<td class="cen">
  									관리자
  								</td>
  								<td class="cen date" >
  									<span id="date02">17.07.15</span>
  								</td>
  								<td class="cont">
									<span id="cont02">
										안녕하세요. 오설록 입니다.<br/>
										장마 철에 찾아오시는 고객님들께 당부의 말씀을 올립니다.<br/>
										제주 오설록 건물 내로 입장하실 때,<br/>
										바닥이 미끄러져 사고가 일어나지 않도록 우산은 반드시 비닐에 넣고 입장하시길 바랍니다.<br/>
										또한, 오설록 내에 우산꽂이가 없습니다. <br/>
										우산 분실 건에 대해 저희 오설록에서의 책임이 없다는 것을 말씀드립니다.<br/>
										감사합니다.<br/>
										오설록 드림.
									</span>
  								</td>
  							</tr>
  							<tr id="notice01">
  								<th class="no01">01</th>
  								<td class="noticeLink" id="noticeLink01">
  									<a href="#none" title="하절기, 운영시간 변경 안내" id="noti01">하절기, 운영시간 변경 안내</a>
  								</td>
  								<td class="cen">
  									관리자
  								</td>
  								<td class="cen date">
  									<span id="date01">17.06.12</span>
  								</td>
  								<td class="cont">
  									<span id="cont01">
										안녕하세요. 오설록 입니다.<br/>
										하절기 운영시간이 오전 9시 - 오후 6시에서 오전 9시 - 오전 7시로 변경되었음을 알립니다.<br/>
										감사합니다.<br/>
										오설록 드림.
									</span>
  								</td>
  							</tr>
  						</tbody>
  					</table>
				<div class="pageBtn">
				  <a href="#none" title="prev button"><img src="img/prev_black.png" alt="prev button"/></a>
				  <a href="#none" title="next button"><img src="img/next_black.png" alt="next button"/></a>
				</div>
  				</div>
  				<div id="reviewWrap">
				  <div id="reviewArea">
    					<div class="review review0">
    						<p class="textArea">
    							좋았습니다 시음회도 좋았구요 맘껏 녹차향을 즐길수 았어서 좋았습니다. 다만 사람들이 많아서 좀 번잡하고 주변이 조금 지저분해서 좀....그랬습니다 하지만 다시 방문하고 싶은것이네요
    						</p>
    						<p class="reviewInfo">
    							<span class="reviewId">pir****</span><span class="divide">|</span><span class="reviewDate">2018.04.02</span>
    						</p>
    					</div>
    					<div class="review review1">
    						<p class="textArea">
    							시간이 지났지만 넘 화가나 글까지 올립니다. <br/><br/>

    							4월초 제주여행 중 오설록 티뮤지엄에 방문을 하였습니다. 지인들에게 선물할 차를 샵에서 고르는데 종류가 너무 많아 고민이 되더군요. 그러던 중 시음을 무료로 해주는 시음 코너 같은 곳이 있어 맛을 보고 사가야겠다고 생각을 하고 시음 차례를 기다렸습니다. 사람들이 어느정도 모여 있었지만 직원분은 5분후에 다시 와달라고 기계적으로 말을 하고 한참이 지나도 시음은 안해주셨습니다. (차에 대한 정보는 없고 할인가라는 얘기만 했습니다. 여기가 박물관이 아니고 마트인 듯한 느낌이었네요;) 몇몇 질문에도 너무 노골적으로 무시하고, 불친절한 모습에 기분이 언짢았습니다.. 시음이 끝나고 뒤돌아 가는데 직원들끼리 얘기하는 소리가 들렸는데<br/><br/>

    							‘아 시음 거지들..’’ ‘이라는 소리가 등뒤에서 들렸습니다.<br/><br/>

    							저를 비롯한 시음을 위해 기다리던 고객 모두가 차 한잔을 구걸하는 거지 취급받던 순간이었습니다. 녹차 한잔 구걸하기 위해 저는 티뮤지엄에 방문한 것이 아닙니다. 너무나 불쾌하여 그자리에서 따지지도 못했고 사려던 차 모두 그냥 두고 그 길로 그곳을 나왔습니다. 녹차밭의 멋진 풍경조차 하나도 위로가 되지 않더군요…오설록 직원들 불친절하다는 글들이 많이 보이긴 합니다만,,,이처럼 모욕적이고 기분나쁜일을 또 겪을 사람이 있을까요……………불행히도 이런일이 또 생길 것 같아 귀찮지만 오설록 홈페이지에 굳이 가입까지 하면서 글 남깁니다…..<br/><br/>

    							매번 제주 여행때 마다 들르는 곳이였는데…다시는 안갈 것 같습니다.<br/><br/>

    							서울 곳곳에 있는 오설록 샵들을 보면 그때 제주 뮤지엄에서 잊지못할 불쾌감이 떠올라요,<br/><br/>

    							제발 제발 직원 교육좀 잘 시켜주시길,,,,,,,,,,
    						</p>
    						<p class="reviewInfo">
    							<span class="reviewId">sum****</span><span class="divide">|</span><span class="reviewDate">2018.04.28</span>
    						</p>
    					</div>
    					<div class="review review2">
    						<p class="textArea">
    							숙소로 가는중에 들렸어요<br/>
    							아이들은 자서 남편이랑 케익하고 라떼를 먹고 사진도 찍고 큰아이가 께서 녹차밭에서 멋진사진도 찍었답니다
    						</p>
    						<p class="reviewInfo">
    							<span class="reviewId">eyo****</span><span class="divide">|</span><span class="reviewDate">2018.05.06</span>
    						</p>
    					</div>
    					<div class="review review3">
    						<p class="textArea">
    							5월 초 (5월 2일, 3일) 두 차례 오설록에 방문하였습니다.<br/><br/><br/>


    							근처 평화박물관에 일정이 있어 지인분들을 모시고 가던 중 차 박물관에 가고 싶어 하셔서 들르게 되었습니다.<br/><br/>

    							녹차밭도 멋지고 뮤지엄 내부 인테리어도 너무나 인상깊었습니다.<br/><br/>

    							거기까지는 정말 좋았으나, 차 시음부스에서 너무나도 불친절한 직원들의<br/><br/>

    							태도와 표정에 지인분들을 모시고 간 제가 얼굴이 붉어지더군요.<br/><br/>


    							발효차 시음을 하고 있던거 같아 "발효차 말고 전통 녹차를 맛볼 순 없나요?" 라고<br/><br/>

    							묻는 제 말에 "좀 이따 오세요." 라고 퉁명스레 대답하여 너무나 무안했습니다.<br/><br/><br/>


    							언짢은 기분을 누르고 근처에서 차를 고르며 아무리 기다렸지만 녹차시음은 안해주시더군요.<br/><br/><br/>


    							그리고 기다리면서 지켜보니 시음하는 사람들이 위생모, 마스크도 착용하지 않고<br/><br/>

    							맨손으로 차를 만지고 있더군요.  또한 그 손으로 머리도 만지고 다시 차를 만지고...<br/><br/><br/>


    							거기서 말을 하다보면 자연스럽게 침도 튈 텐데... 위생에도 신경을 썼으면 합니다. 너무 더러워 보였어요!!!<br/><br/>

    							기다리다 '발효차라도 맛을 봐야지' 하고 차를 받았는데 찻잔도 정말 더러웠습니다.<br/><br/><br/>


    							이전에 만족스럽고 즐거운 기분이 한 순간에 날아갔습니다. 지인분들께서 한국의 전통 차에 관심이 많고<br/><br/>

    							한국에 차 박물관이 있다는 것도 흥미로워하셨는데 일하는 직원들의 태도와 위생이 영 아닌 것 같다며<br/><br/>

    							다들 너무 실망스러워하시는 모습에 제가 다 민망하고 부끄러웠습니다.<br/><br/><br/>


    							시음이 불가하면 죄송하다고 안된다고 말을 해주시면 기다리지도 않았을텐데,<br/><br/>

    							기다리는 사람 민망하게 무시하는 태도는 정말 아니라고 봅니다!!!<br/><br/><br/>


    							시음을 하는데도 퉁명스럽게 친절함이라고는 전혀 느낄 수 없었어요. 빨리 마시고 가란 듯이...<br/><br/><br/>


    							이틀 연속으로 그러는거 보면 정말 직원 교육이 제대로 안되어 있는 것 같네요.<br/><br/>

    							지난 글을 읽어보니 시음을 기다리는 손님한테 시음거지라는 말을 하질 않나... 참.... 너무 화가납니다!<br/><br/>

    							한달 전에도 상황이 다르지 않았던 것 같은데 왜 개선되지 않는 것인가요?<br/><br/>

    							오설록 박물관 관장님은 이런 상황을 알고도 그냥 방치하시는 건가요??<br/><br/><br/>


    							직원이름을 알았으면 시정요구를 할 텐데 그럴 수가 없네요. 남자분이셨는데...<br/><br/>

    							고객센터에 전화하려다가 모두가 보는 이곳에 글을 남깁니다.
    						</p>
    						<p class="reviewInfo">
    							<span class="reviewId">kal****</span><span class="divide">|</span><span class="reviewDate">2018.05.09</span>
    						</p>
    					</div>
    					<div class="review review4">
    						<p class="textArea">
    							차밭도 쫙 펼쳐져 있어 아름답고<br/><br/>

    							차 시음도 할수있어서 좋았어요.<br/><br/>

    							저는 제주도 갈때 마다 거의 항상 갑니다.
    						</p>
    						<p class="reviewInfo">
    							<span class="reviewId">jej****</span><span class="divide">|</span><span class="reviewDate">2018.06.01</span>
    						</p>
    					</div>
					  <div class="pageBtn">
						<a href="#none" title="prev button"><img src="img/prev_black.png" alt="prev button"/></a>
						<a href="#none" title="next button"><img src="img/next_black.png" alt="next button"/></a>
					  </div>
				   </div>
  				</div>
  				<div id="eventWrap">
  					<div id="eventMenu">
						<ul>
							<li>
								<a href="#none" title="진행중인 이벤트" class="selectedMenu nowEvent">
									진행중인 이벤트
									<span class="hoverBar"></span>
								</a>
							</li>
							<li>
								<a href="#none" title="지난 이벤트" class="lastEvent">
									지난 이벤트
									<span class="hoverBar"></span>
								</a>
							</li>
						</ul>
					</div>
          <div id="eventContentWrap">
    					<div id="eventContent">
    						<div id="nowEvent" class="selected">
    							<ul>
    								<li>
    									<a href="#none" title="event0">
    										<span class="img">
    											<img src="img/event0.jpg" alt="event0"/>
    										</span>
    										<span class="desc">
    											<span class="eventTitle">여름을 준비하는 자세, WATER + </span>
    											20입 파우치로 6월에도 여유있는 티타임을 즐기세요.
    											<span class="period">2018.06.04 ~ 2018.07.15</span>
    										</span>
    									</a>
    								</li>
    								<li>
    									<a href="#none" title="event1">
    										<span class="img">
    											<img src="img/event1.jpg" alt="event1"/>
    										</span>
    										<span class="desc">
    											<span class="eventTitle">[앵콜이벤트] 피라미드 20입 11종 3,000원 할인! </span>
    											20입 파우치로 6월에도 여유있는 티타임을 즐기세요.
    											<span class="period">2018.06.04 ~ 2018.07.08</span>
    										</span>
    									</a>
    								</li>
    								<li>
    									<a href="#none" title="event2">
    										<span class="img">
    											<img src="img/event2.jpg" alt="event2"/>
    										</span>
    										<span class="desc">
    											<span class="eventTitle">여름준비는 아이스블렌디드 티로 시원하게! </span>
    											이벤트기간 내 구입 시 아이스보틀 증정
    											<span class="period">2018.06.04 ~ 2018.07.08</span>
    										</span>
    									</a>
    								</li>
    								<li>
    									<a href="#none" title="event3">
    										<span class="img">
    											<img src="img/event3.jpg" alt="event3"/>
    										</span>
    										<span class="desc">
    											<span class="eventTitle">6월 출석체크 </span>
    											오설록 티타임과 함께 여름 피크닉 어떠세요?
    											<span class="period">2018.06.01 ~ 2018.06.30</span>
    										</span>
    									</a>
    								</li>
    								<li>
    									<a href="#none" title="event4">
    										<span class="img">
    											<img src="img/event4.jpg" alt="event4"/>
    										</span>
    										<span class="desc">
    											<span class="eventTitle">GREEN의 에너지를 피부에 전해주세요. </span>
    											내추럴 그린 상품 단품 구매시, 선착순 피라미드 1입 증정
    											<span class="period">2018.05.21 ~ 2018.06.24</span>
    										</span>
    									</a>
    								</li>
    							</ul>
    						</div>
    						<div id="lastEvent">
    							<ul>
    								<li>
    									<a href="#none" title="event0">
    										<span class="img">
    											<img src="img/last_event0.jpg" alt="event0"/>
    										</span>
    										<span class="desc">
    											<span class="eventTitle">2018년 두번째 오설록 라운지로 초대합니다. </span>
    											우수고객님을 위한 특별한 공간으로-
    											<span class="period">2018.05.28 ~ 2018.06.10</span>
    										</span>
    									</a>
    								</li>
    								<li>
    									<a href="#none" title="event1">
    										<span class="img">
    											<img src="img/last_event1.jpg" alt="event1"/>
    										</span>
    										<span class="desc">
    											<span class="eventTitle">연극 &lt;극적인 하룻밤&gt; 초대이벤트 </span>
    											작년 봄, 당첨에 실패했다면 다시 도전하세요 ~
    											<span class="period">2018.05.28 ~ 2018.06.10</span>
    										</span>
    									</a>
    								</li>
    								<li>
    									<a href="#none" title="event2">
    										<span class="img">
    											<img src="img/last_event2.jpg" alt="event2"/>
    										</span>
    										<span class="desc">
    											<span class="eventTitle">5월 출석체크</span>
    											감사선물은 매일매일 출석체크하고, 쿠폰받아 할인받기!
    											<span class="period">2018.05.01 ~ 2018.05.31</span>
    										</span>
    									</a>
    								</li>
    								<li>
    									<a href="#none" title="event3">
    										<span class="img">
    											<img src="img/last_event3.jpg" alt="event3"/>
    										</span>
    										<span class="desc">
    											<span class="eventTitle">오설록닷컴 단독 할인 이벤트</span>
    											행복특가! 온라인몰 단독할인 3종
    											<span class="period">2018.05.08 ~ 2018.05.20</span>
    										</span>
    									</a>
    								</li>
    								<li>
    									<a href="#none" title="event4">
    										<span class="img">
    											<img src="img/last_event4.jpg" alt="event4"/>
    										</span>
    										<span class="desc">
    											<span class="eventTitle">감사의 달, 5월의 특별한 선물 </span>
    											정성을 담은 차 한잔으로 표현하지 못했던 마음을 전해보세요!
    											<span class="period">2018.04.30 ~ 2018.05.27</span>
    										</span>
    									</a>
    								</li>
    							</ul>
    						</div>
    					</div>
            </div>
				  </div>
				</div>
				<div class="bgTitle">
					NOTICE
				</div>
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
  <div id="full">
  </div>
  <div id="view">
	<div id="viewHead"><p class="closeBtn"><img src="img/close.png" alt="close"/></p></div>
	<h3>_</h3>
	<p class="noticeHead">
		<span id="noticeWriter">관리자</span>
		<span class="divide">|</span>
		<span id="noticeDate"></span>
	</p>
	<p id="noticeContents">
	</p>
  </div>
  <div class="closeBtn"><img src="img/close.png" alt="close"/></div>
  <script>
    var now = 0;
  	jQuery(document).ready(function(){
      // 스크롤을 함에 따라 header 변경

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
      // 해당하는 메뉴를 들어가면 내용이 바뀜
  		jQuery("#topMenu li").click(function(){
  			jQuery(this).siblings().removeClass("selectedMenu");
  			jQuery(this).children(".whiteBar").css({"width":"0"});
  			jQuery(this).addClass("selectedMenu");
  			jQuery(this).siblings().children(".whiteBar").css({"width":"100%"});
  		});
  		jQuery("#topMenu li:first-child").click(function(){
  			jQuery("#content").css({"left":"0"});
  			jQuery(".bgTitle").text("NOTICE");
        jQuery("#contentWrap").css({"height":"550px"});
  		});
  		jQuery("#topMenu li:eq(1)").click(function(){
  			jQuery("#content").css({"left":"-1008px"});
  			jQuery(".bgTitle").text("REVIEW");
        jQuery("#contentWrap").css({"height":"600px"});
  		});
  		jQuery("#topMenu li:last-child").click(function(){
  			jQuery("#content").css({"left":"-2016px"});
  			jQuery(".bgTitle").text("EVENT");
        jQuery("#contentWrap").css({"height":"950px"});
        jQuery("#eventContentWrap").css({"height":"700px"});
  		});


      jQuery("#eventContent .selected").siblings().hide();

  		jQuery("#eventMenu li a").click(function(){
        jQuery("#eventMenu li a").removeClass("selectedMenu");
        jQuery(this).addClass("selectedMenu");

  		});
      jQuery("#eventMenu li:first a").click(function(){
        jQuery("#eventContent div").removeClass("selected").hide();
        jQuery("#eventContent div:first").addClass("selected").show();
      });
      jQuery("#eventMenu li:last a").click(function(){
        jQuery("#eventContent div").removeClass("selected").hide();
        jQuery("#eventContent div:last").addClass("selected").show();
      });

      /* notice 모달 팝업 */
        jQuery("#full, #view").hide();
        jQuery("td a").click(function(){
          var num = jQuery(this).parent().siblings("th").attr("class").substring(2,4);
    	  var title = document.getElementById("noti"+num);
		  var date = document.getElementById("date"+num);
		  var cont = document.getElementById("cont"+num);

    	  jQuery("#full,#view").show();
		  jQuery("#view h3").html(title);
		  jQuery("#view #noticeDate").html(date);
		  jQuery("#view #noticeContents").html(cont);


			jQuery("#full,.closeBtn").click(function(){
    			jQuery("#full,#view").hide();
				jQuery("#notice"+num+" .noticeLink").html(title);
				jQuery("#notice"+num+" .date").html(date);
				jQuery("#notice"+num+" .cont").html(cont);
				console.log(title);
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
