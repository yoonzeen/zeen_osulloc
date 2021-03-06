<?php
  include "00_conn.php";
  session_cache_expire(30);
  session_start();
?>
<!DOCTYPE html>
<html lang="ko">
 <head>
  <meta charset="utf-8"/>
  <title> 근처 관광지 | Jeju Osulloc </title>
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
		#section0 {width:100%; margin:0 auto; padding-bottom:80px; padding-top:80px; }
    #section0 h3 {width:100%; margin:0 auto; font-size:19px; padding:50px 0 0; font-weight:400; line-height:40px; text-align:center; font-family:"arita_dodum-Medium"; color:#333; }
    #section0 .intro {width:100%; margin:0 auto; font-size:14px; font-family:"arita_dodum-Light"; text-align:center; color:rgba(135,177,136,0); transition:color .5s ease-in-out; padding:15px 0 30px; }

    #mapAreaWrap {width:100%; margin:0 auto; }
	  #intro {width:100%; height:490px; margin:0 auto; }
	  #intro .introImg {width:230px; height:230px; margin:30px auto 5px; overflow:hidden; border-radius:120px; animation:introani 1.5s infinite alternate; cursor:pointer; border:1px solid #aaa; }
	  #intro .introClick {width:100px; height:100px; margin:0 auto; transition: opacity .3s;}


      #mapArea {width:1025px; margin:0 auto; overflow:hidden; position:relative; outline:1px solid #ccc; }
		#mapArea .mapbg {width:1025px; height:520px; overflow:hidden; margin:0 auto; text-align:center;}
			#mapArea .mapbg img {width:100%;}


        #mapArea .markers {width:100%; }
          #mapArea .markers li {width:25px; position:absolute; left:0; top:0; cursor:pointer;}
		  #mapArea .markers li.spot0 {left:285px; top:30px;}
			#mapArea .markers li .markerHover {width:30px; transform:translate(-3px,-44px); display:none;}
		  #mapArea .markers li.spot1 {left:230px; top:130px;}
		  #mapArea .markers li.spot2 {left:288px; top:110px;}
		  #mapArea .markers li.spot3 {left:330px; top:150px;}
		  #mapArea .markers li.spot4 {left:200px; top:300px;}
		  #mapArea .markers li.spot5 {left:530px; top:350px;}
		  #mapArea .markers li.spot6 {left:680px; top:380px;}
		  #mapArea .markers li.spot7 {left:910px; top:425px;}

            #mapArea .markers li img {width:100%;}
			#mapArea .markers li .markerNum {position:absolute; left:8px; top:9px; font-size:15px;  color:#fff; font-family:"arita_dodum-SemiBold";}

    #infoOfLeft .spotNum, #infoOfRight .spotNum {padding-right:10px; font-size:20px;  }


		#infoOfLeft {width:40%; height:100%; position:absolute; right:-500px; top:0; transition:all .5s ease-in-out; background-color:#fff; outline:1px solid #ccc; } /* 오른쪽에 떠야 함. */
		#infoOfRight {width:40%; height:100%; position:absolute; left:-500px; top:0;
    transition:all .5s ease-in-out;
    background-color:#fff; outline:1px solid #ccc;} /* 왼쪽에 떠야 함. */

		#infoOfLeft li, #infoOfRight li {width:92%; height:100%; padding:45px 4% 0; position:absolute; right:0; top:0; }

		#infoOfLeft h4, #infoOfRight h4 {width:92%; padding:10px 4% 10px; font-size:18px; line-height:30px; font-weight:400; font-family:"arita-buriSB";}
    #infoOfLeft .spotNum, #infoOfRight .spotNum { font-size:20px; font-family:"arita-buriL";}
    #infoOfLeft .spotNum:after, #infoOfRight .spotNum.after {content:"."; padding-right:5px; }
		#infoOfLeft dl, #infoOfRight dl {width:90%; margin:0 5%; padding-top:20px; border-top:1px solid #ccc;  font-family:"arita_dodum-Medium";}

    #infoOfLeft dl dt, #infoOfRight dl dt {width:100%; height:140px; overflow:hidden; outline:1px solid #ccc}
    #infoOfLeft dl dt img, #infoOfRight dl dt img {width:100%; ;}
    #infoOfLeft dd, #infoOfRight dd {font-size:13px; padding-top:20px; line-height:25px;}
      #infoOfLeft dd .origin, #infoOfRight dd .origin {width:100%; font-size:11px; display:block; line-height:20px; font-family:"arita_dodum_Light"; color:#999;}


    #infoOfLeft p.closeBtn, #infoOfRight p.closeBtn {width:20px; height:20px; position:absolute; top:15px; cursor:pointer;}
      #leftcloseBtn, #rightcloseBtn {width:20px; height:20px; }
    #infoOfLeft p.closeBtn {left:15px;}
    #infoOfRight p.closeBtn {right:15px;}



    /* ############ 기능 ################ */
      #section0:hover .intro {color:#999;}
	  #intro:hover .introImg img {transition:all .5s ease-in-out;}
		@keyframes introani {
			0% {transform:translatey(0);}
			50% {transform:translatey(3px);}
			100% {transform:translatey(0);}
		}
	  @keyframes markerani {
			0% {transform:translatey(0);}
			50% {transform:translatey(5px);}
			100% {transform:translatey(0);}
		}
	  #mapArea .markers li:hover  {animation:markerani 1s infinite alternate;}
	  #mapArea .markers li:hover .markerHover {display:inline;}
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
  					<li><a href="sub3.php" title="커뮤니티">커뮤니티</a></li>
  					<li class="selected"><a href="sub4.php" title="근처 관광지">근처 관광지</a></li>
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
    			<li><a href="sub3.php" title="커뮤니티">커뮤니티</a></li>
    			<li class="selected"><a href="sub4.php" title="근처 관광지">근처 관광지</a></li>
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
        <h3>제주 오설록 근처 관광지</h3>
        <p class="intro">
          제주 오설록의 주변을 살펴보세요.
        </p>
        <div id="mapAreaWrap">
		  <div id="intro">
			<p class="introImg">
				<img src="img/sub4_intro.jpg" alt="제주 오설록"/>
			</p>
			<p class="introClick">
				<img src="img/click.png" alt="클릭"/>
			</p>
		  </div>
          <div id="mapArea">
			<p class="mapGuide">
				<span></span>
			</p>
			<p class="mapbg">
			  <img src="img/map_tour_real.png" alt="map"/>
			</p>
            <ul class="markers">
              <li class="spot0 leftSpot">
                <img src="img/marker_on_the_map.png" class="markerOnMap" alt="저지예술인마을"/>
        				<img src="img/marker_hover.png" alt="저지예술인마을" class="markerHover"/>
        				<span class="markerNum">1</span>
              </li>
              <li class="spot1 leftSpot">
                <img src="img/marker_on_the_map.png" class="markerOnMap" alt="생각하는 정원"/>
        				<img src="img/marker_hover.png" alt="생각하는 정원" class="markerHover"/>
        				<span class="markerNum">2</span>
              </li>
              <li class="spot2 leftSpot">
                <img src="img/marker_on_the_map.png" class="markerOnMap" alt="환상의 숲 곶자왈 공원"/>
        				<img src="img/marker_hover.png" alt="환상의 숲 곶자왈 공원" class="markerHover"/>
        				<span class="markerNum">3</span>
              </li>
              <li class="spot3 leftSpot">
                <img src="img/marker_on_the_map.png" class="markerOnMap" alt="유리의 성"/>
        				<img src="img/marker_hover.png" alt="유리의 성" class="markerHover"/>
        				<span class="markerNum">4</span>
              </li>
              <li class="spot4 leftSpot">
                <img src="img/marker_on_the_map.png" class="markerOnMap" alt="제주 전쟁역사 평화박물관"/>
        				<img src="img/marker_hover.png" alt="제주 전쟁역사 평화박물관" class="markerHover"/>
        				<span class="markerNum">5</span>
              </li>
              <li class="spot5 rightSpot">
                <img src="img/marker_on_the_map.png" class="markerOnMap" alt="제주항공우주박물관"/>
        				<img src="img/marker_hover.png" alt="제주항공우주박물관" class="markerHover"/>
        				<span class="markerNum">6</span>
              </li>
              <li class="spot6 rightSpot">
                <img src="img/marker_on_the_map.png" class="markerOnMap" alt="소인국 테마파크"/>
        				<img src="img/marker_hover.png" alt="소인국 테마파크" class="markerHover"/>
        				<span class="markerNum">7</span>
              </li>
              <li class="spot7 rightSpot">
                <img src="img/marker_on_the_map.png" class="markerOnMap" alt="카멜리아 힐"/>
        				<img src="img/marker_hover.png" alt="카멜리아 힐" class="markerHover"/>
        				<span class="markerNum">8</span>
              </li>
            </ul>
			  <div id="infoOfLeft">
  				<ul>
  					<li class="infoSpot0">
  						<h4><span class="spotNum">1</span>저지예술인마을</h4>
  						<dl>
							<dt><img src="img/sub4_0.png" alt="저지예술인마을"/></dt>
							<dd>
								제주특별자치도 제주시 한경면 저지리에 있는 문화 예술인 마을.<br/>
								저지예술인마을은 문화예술관, 공동 작업장, 야외 전시장, 전통문화 공간, 개인 작업장 등으로 구성되어 있습니다. <br/>
								문화예술관은 권위적인 배치 방식을 탈피하여 광장축 중심선상에서 비켜서 배치되었습니다.
								<span class="origin">[네이버 지식백과] 저지예술인마을(한국향토문화전자대전, 한국학중앙연구원)</span>
							</dd>
  						</dl>
  					</li>
  					<li class="infoSpot1">
  						<h4><span class="spotNum">2</span>생각하는 정원</h4>
  						<dl>
							<dt><img src="img/sub4_1.jpg" alt="생각하는 정원"/></dt>
							<dd>
								생각하는 정원은 1968년부터 전기도 수도도 없는 제주도 오지인 한경면 저지리 일대 돌투성이 황무지 36,000m2를 한 농부인 성범영 혼자만의 힘으로 반세기에 걸쳐 세계에서 가장 아름다운 정원으로 조성한 곳입니다. <br/>
								제주의 오름을 모티브로 한국의 돌, 물, 나무로 조화를 이룬 창조와 예술, 철학이 융합된 독창적인 정원입니다.
								<span class="origin">[네이버 지식백과] 생각하는 정원-(주)청원 (과학관 여행 길라잡이)</span>
							</dd>
  						</dl>
  					</li>
  					<li class="infoSpot2">
  						<h4><span class="spotNum">3</span>환상의 숲 곶자왈 공원</h4>
  						<dl>
							<dt><img src="img/sub4_2.jpg" alt="환상의 숲 곶자왈 공원"/></dt>
							<dd>
								제주특별자치도 한경면 저지리에 있는 천연 원시림 곶자왈 공원.<br/>
								환상 숲 곶자왈 공원 내 체험 길로는 오시록한 길, 생이소리 길, 갈등의 길, 아바타 길, 빌렛못 길이 있습니다. <br/>
								환상 숲 지질 관측소에서는 겹겹이 쌓인 아아 용암의 층 무늬와 용암돔, 부가 용암구 등을 관찰할 수 있습니다.
								<span class="origin">[네이버 지식백과] 환상 숲 곶자왈 공원(한국향토문화전자대전, 한국학중앙연구원)</span>
							</dd>
  						</dl>
  					</li>
  					<li class="infoSpot3">
  						<h4><span class="spotNum">4</span>유리의 성</h4>
  						<dl>
							<dt><img src="img/sub4_3.jpeg" alt="유리의 성"/></dt>
							<dd>
								'제주 유리의 성'은 제주시 한경면 저지리 35,978㎡ 부지에 전시관과 화원, 미로, 조형물 등이 온통 유리로 꾸며져 환상적인 분위기를 연출하는 유리조형물 테마파크입니다. <br/>
								6개의 테마조형파크에 250여 점의 조형물이 배치된 이 곳에서는 세계 최초로 조성된 유리 미로, 세계 최대 크기의 유리구(球)와 유리 다이아몬드 등과 이탈리아와 체코 등 세계 유명작가의 유리예술품을 감상할 수 있습니다.
								<span class="origin">[네이버 지식백과] 제주 유리의성 (대한민국 구석구석, 한국관광공사)</span>
							</dd>
  						</dl>
  					</li>
  					<li class="infoSpot4">
  						<h4><span class="spotNum">5</span>제주 전쟁역사 평화박물관</h4>
  						<dl>
							<dt><img src="img/sub4_4.png" alt="제주 전쟁역사 평화박물관"/></dt>
							<dd>
								제주특별자치도 제주시 한경면에 있는 사립 특수박물관.<br/>
								일제강점기 강제동원 되어 노역한 이성찬의 아들 이영근이 일제강점기의 아픈 역사를 되짚어보기 위한 목적으로 2004년 3월 29일 개관하였습니다. <br/>
								이곳에는 일본군이 군사기지로 사용했던 지하요새가 남아 있으며, 강제로 징용당한 지역주민들의 노역으로 만들어진 땅굴진지는 일본군의 잔혹상을 잘 보여주고 있습니다.
								<span class="origin">[네이버 지식백과] 제주전쟁역사평화박물관(두산백과)</span>
							</dd>
  						</dl>
  					</li>
  				</ul>
				  <p class="closeBtn">
					<input type="image" src="img/close.png" id="leftcloseBtn" alt="close" title="close"/>
				  </p>
			  </div>
			  <div id="infoOfRight">
  				<ul>
  					<li class="infoSpot5">
  						<h4><span class="spotNum">6</span>제주항공우주박물관</h4>
  						<dl>
							<dt><img src="img/sub4_5.jpg" alt="제주항공우주박물관"/></dt>
							<dd>
								항공과 우주를 테마로 한 제주항공우주박물관이 2014년 4월 24일 개관을 했습니다. <br/>
								최첨단 기술과 멀티미디어를 활용한 신개념 에듀테인먼트 시설을 표방하는 제주항공우주박물관은 내용이나 규모면에서 아시아 최대로 꼽힙니다.
								<span class="origin">[네이버 지식백과] 제주항공우주박물관 - 신비로운 우주 세계로! (한국관광공사의 아름다운 대한민국 이야기)</span>
							</dd>
  						</dl>
  					</li>
  					<li class="infoSpot6">
  						<h4><span class="spotNum">7</span>소인국 테마파크</h4>
  						<dl>
							<dt><img src="img/sub4_6.jpeg" alt="소인국 테마파크"/></dt>
							<dd>
								제주특별자치도 서귀포시 안덕면에 있는 미니어처 공원.<br/>
								전시물은 세계 각국의 유명한 건축물을 선별해 일정한 비율로 축소해 만들었기 때문에 형태는 똑같고, 재질과 크기만 다릅니다. <br/>
								공원에 들어서면 마치 걸리버가 소인국에 온 것처럼 세계의 유명 건축물들을 한눈에 바라다볼 수 있도록 전시물을 배치하였습니다.
								<span class="origin">[네이버 지식백과] 소인국 테마파크(두산백과)</span>
							</dd>
  						</dl>
  					</li>
  					<li class="infoSpot7">
  						<h4><span class="spotNum">8</span>카멜리아 힐</h4>
  						<dl>
							<dt><img src="img/sub4_7.png" alt="카멜리아 힐"/></dt>
							<dd>
								안덕면 상창리 172,000㎡에 조성된 카멜리아힐은 세계에서 가장 큰 동백꽃을 비롯하여 가장 일찍 피는 동백꽃, 향기를 내는 동백꽃에 이르기까지 전세계 500여 종 6000여 그루의 동백나무가 한데 모여 있는 곳입니다.<br/>
								카멜리아힐은 동백과 함께 야자수 등 각종 조경수가 함께 어우러진 수목원이기도 합니다.
								<span class="origin">[네이버 지식백과] 카멜리아힐 (대한민국 구석구석, 한국관광공사</span>
							</dd>
  						</dl>
  					</li>
  				</ul>
				  <p class="closeBtn">
					<input type="image" src="img/close.png" id="rightcloseBtn" alt="close" title="close"/>
				  </p>
			  </div>
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
  <ul>
	<li>
		<span></span>
	</li>
  </ul>
  <script>
    var now = 0;
    jQuery(document).ready(function(){
      // 스크롤을 함에 따라 header 변경
      visualH = 40;
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
	/*
		$(".spot0").mouseover(function(){
			$(".tooltip").css({"left":$(this).offset().left , "top":$(this).offset().top});
		});
	*/
		// 초기화
	  jQuery("#intro .introClick").css({"opacity":"0"});
	  jQuery("#mapArea").hide();

		// introImg 마우스오버하면 이미지 크게, 누르면 지도 열림
	  jQuery("#intro .introImg").mouseover(function(){
		jQuery("#intro .introImg img").css({"transform":"scale(1.05)"});
		jQuery("#intro .introClick").css({"animation":"introani 0.5s infinite alternate","opacity":"1"});
	  }).mouseout(function(){
		jQuery("#intro .introImg img").css({"transform":"scale(1)","transition":"all .5s ease-in-out"});
		jQuery("#intro .introClick").css({"opacity":"0"});
	  }).click(function(){
		  jQuery("#intro").fadeOut(1000);
		  jQuery("#mapArea").delay(1000).fadeIn(1000);
		  jQuery("#intro .introClick").css({"animation":"none"});
	  });


      jQuery(".markers li").click(function(){
        jQuery(".markers li .markerOnMap").attr({"src":"img/marker_on_the_map.png"});
        jQuery(this).children(".markerOnMap").attr({"src":"img/marker_hover.png"});
        jQuery(".markers li").css({"animation":"none"}).mouseover(function(){
          jQuery(this).css({"animation":"markerani 1s infinite alternate"});
        }).mouseout(function(){
          jQuery(this).css({"animation":"none"});
        });
        jQuery(this).css({"animation":"markerani 1s infinite alternate"});
      });
      jQuery("#mapArea .mapbg").click(function(){
        jQuery("#infoOfRight").css({"left":"-500px"});
        jQuery("#infoOfLeft").css({"right":"-500px"});
        jQuery(".markers li .markerOnMap").attr({"src":"img/marker_on_the_map.png"});
        jQuery(".markers li").css({"animation":"none"});
      });

      jQuery(".markers .spot0").click(function(){
        jQuery(".infoSpot0").siblings().hide();
        jQuery("#infoOfLeft, .infoSpot0").show().css({"right":"0"});
        jQuery("#infoOfRight").css({"left":"-500px"});
      });
      jQuery(".markers .spot1").click(function(){
        jQuery(".infoSpot1").siblings().hide();
        jQuery("#infoOfLeft, .infoSpot1").show().css({"right":"0"});
        jQuery("#infoOfRight").css({"left":"-500px"});
      });
      jQuery(".markers .spot2").click(function(){
        jQuery(".infoSpot2").siblings().hide();
        jQuery("#infoOfLeft, .infoSpot2").show().css({"right":"0"});
        jQuery("#infoOfRight").css({"left":"-500px"});
      });
      jQuery(".markers .spot3").click(function(){
        jQuery(".infoSpot3").siblings().hide();
        jQuery("#infoOfLeft, .infoSpot3").show().css({"right":"0"});
        jQuery("#infoOfRight").css({"left":"-500px"});
      });
      jQuery(".markers .spot4").click(function(){
        jQuery(".infoSpot4").siblings().hide();
        jQuery("#infoOfLeft, .infoSpot4").show().css({"right":"0"});
        jQuery("#infoOfRight").css({"left":"-500px"});
      });
      jQuery(".markers .spot5").click(function(){
        jQuery(".infoSpot5").siblings().hide();
        jQuery("#infoOfRight, .infoSpot5").show().css({"left":"0"});
        jQuery("#infoOfLeft").css({"right":"-500px"});
      });
      jQuery(".markers .spot6").click(function(){
        jQuery(".infoSpot6").siblings().hide();
        jQuery("#infoOfRight, .infoSpot6").show().css({"left":"0"});
        jQuery("#infoOfLeft").css({"right":"-500px"});
      });
      jQuery(".markers .spot7").click(function(){
        jQuery(".infoSpot7").siblings().hide();
        jQuery("#infoOfRight, .infoSpot7").show().css({"left":"0"});
        jQuery("#infoOfLeft").css({"right":"-500px"});
      });

      jQuery("#infoOfLeft .closeBtn").click(function(){
        jQuery("#infoOfLeft").css({"right":"-500px"});
        jQuery(".markers li .markerOnMap").attr({"src":"img/marker_on_the_map.png"});
      });
      jQuery("#infoOfRight .closeBtn").click(function(){
        jQuery("#infoOfRight").css({"left":"-500px"});
        jQuery(".markers li .markerOnMap").attr({"src":"img/marker_on_the_map.png"});
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
