<?php
  include "00_conn.php";
  session_cache_expire(30);
  session_start();
?>
<!DOCTYPE html>
<html lang="ko">
 <head>
  <meta charset="utf-8"/>
  <title> 오설록 맵 | Jeju Osulloc </title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1"/>
  <link rel="stylesheet" type="text/css" href="css/reset.css"/>
  <link rel="stylesheet" type="text/css" href="css/header.css"/>
  <link rel="stylesheet" type="text/css" href="css/sub2_style.css"/>
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
  					<li><a href="sub1.php" title="티 카페">티 카페</a></li>
  					<li class="selected"><a href="sub2.php" title="오설록 맵">오설록 맵</a></li>
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
    			<li><a href="sub1.php" title="티 카페">티 카페</a></li>
    			<li class="selected"><a href="sub2.php" title="오설록 맵">오설록 맵</a></li>
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
        <h3>제주 오설록 맵</h3>
        <p class="intro">제주 오설록에는 어떤 것들이 있을까요?</p>
        <div id="content">
          <div id="mapArea">
            <div id="mapImg">
              <img src="img/osullocmap_bg.png" alt="map image"/>
            </div>
            <div id="mapMarker">
              <ul>
                <li class="spot0">
                  <img src="img/map_marker.png" alt="서광다원"/>
                  <span class="markerNum">1</span>
                </li>
                <li class="spot1">
                  <img src="img/map_marker.png" alt="제주 오설록 티뮤지엄"/>
                  <span class="markerNum">2</span>
                </li>
                <li class="spot2">
                  <img src="img/map_marker.png" alt="오설록 티스톤"/>
                  <span class="markerNum">3</span>
                </li>
                <li class="spot3">
                  <img src="img/map_marker.png" alt="곶자왈"/>
                  <span class="markerNum">4</span>
                </li>
                <li class="spot4">
                  <img src="img/map_marker.png" alt="이니스프리 제주하우스"/>
                  <span class="markerNum">5</span>
                </li>
                <li class="spot5">
                  <img src="img/map_marker.png" alt="오설록농장"/>
                  <span class="markerNum">6</span>
                </li>
                <li class="spot6">
                  <img src="img/map_marker.png" alt="만수길 &amp; 동백숲"/>
                  <span class="markerNum">7</span>
                </li>
                <li class="spot7">
                  <img src="img/map_marker.png" alt="추사 유배길 안내도"/>
                  <span class="markerNum">8</span>
                </li>
                <li class="spot8">
                  <img src="img/map_marker.png" alt="올레길 14-1"/>
                  <span class="markerNum">9</span>
                </li>
              </ul>
            </div>
            <div id="mapMore">
              <ul>
                <li class="spot0">
                  <img src="img/magnifier.png" alt="돋보기 이미지"/>
                </li>
                <li class="spot1">
                  <img src="img/magnifier.png" alt="돋보기 이미지"/>
                </li>
                <li class="spot2">
                  <img src="img/magnifier.png" alt="돋보기 이미지"/>
                </li>
                <li class="spot3">
                  <img src="img/magnifier.png" alt="돋보기 이미지"/>
                </li>
                <li class="spot4">
                  <img src="img/magnifier.png" alt="돋보기 이미지"/>
                </li>
                <li class="spot5">
                  <img src="img/magnifier.png" alt="돋보기 이미지"/>
                </li>
                <li class="spot6">
                  <img src="img/magnifier.png" alt="돋보기 이미지"/>
                </li>
                <li class="spot7">
                  <img src="img/magnifier.png" alt="돋보기 이미지"/>
                </li>
                <li class="spot8">
                  <img src="img/magnifier.png" alt="돋보기 이미지"/>
                </li>
              </ul>
              <div id="direct">
                <p class="spot6">
                  <img src="img/osullocmap_7.png" alt="만수길 &amp; 동백숲"/>
                </p>
                <p class="spot8">
                  <img src="img/osullocmap_9.png" alt="올레길 14-1"/>
                </p>
              </div>
            </div>
          </div>
          <div id="mapDesc">
            <ul>
              <li class="spot0">
                <h4><span class="spotNum">1</span>서광차밭<span class="engName">SeogwangTea Garden</span></h4>
                <dl>
                  <dt><img src="img/spot0.jpg" alt="서광차밭"/></dt>
                  <dd>
                    오설록 유기농 차밭인 서광차밭은 제주 서귀포시 서광리에 조성된 광활한 유기농 차밭입니다. <br/>
                    애초에 이 지역은 돌밭이어서 작물재배가 불가능한 곳이었지만, 오설록이 1983년부터 20여 년간 개간하여 척박한 땅을 웅비의 땅으로 변모시켜 현재는 우리나라에서 가장 광활한 유기농 차밭이 되었습니다.
                  </dd>
                </dl>
              </li>
              <li class="spot1">
                <h4><span class="spotNum">2</span>제주 오설록 티뮤지엄<span class="engName">Jeju OSULLOC Tea Museum</span></h4>
                <dl>
                  <dt><img src="img/spot1.jpg" alt="제주 오설록 티뮤지엄"/></dt>
                  <dd>
                    '제주 오설록 티뮤지엄은 사라져가는 우리의 차 문화를 계승, 발전시키고 보다 많은 이들에게 우리 차 문화의 가치와 우수성을 널리 전파하려는 '아름다운 집념'이 집약된 한국 차 문화의 발상지이자 국내 최대 규모의 차 종합 전시관입니다. <br/>
                    2002년 개관 이래 매년 150만명 이상 찾는 관광명소인 이곳은, 우리나라 차 문화의 전통과 역사를 볼 수 있는 공간, 제주의 자연 속에서 편히 쉴 수 있는 휴식공간 등 특별한 경험들이 기다리고 있습니다.
                  </dd>
                </dl>
              </li>
              <li class="spot2">
                <h4><span class="spotNum">3</span>오설록 티스톤<span class="engName">OSULLOC Tea Stone</span></h4>
                <dl>
                  <dt><img src="img/spot2.jpg" alt="오설록 티스톤"/></dt>
                  <dd>
                    문화의 즐기는것. 제주 오설록 티스톤은 생활 속 멋진 차문화를 경험하는 차문화 체험공간입니다. 티 스톤이 서있는 땅 위(상층)에는 추사 김정희 선생의 세한도와 추사체를 주제로한 미디어 아트를 비롯해 멋스러운 티타임 공간이 마련되어 있습니다. <br/>
                    그리고 티스톤이 뿌리 내린 땅 아래(하층)에는 제주의 자연과 시간으로 빚어내는 오설록의 시그니처 발효차 ‘삼다연’의 숙성고 체험공간이 위치해 있습니다.
                  </dd>
                </dl>
              </li>
              <li class="spot3">
                <h4><span class="spotNum">4</span>곶자왈<span class="engName">Gotjawal Forest</span></h4>
                <dl>
                  <dt><img src="img/spotd.jpg" alt="곶자왈"/></dt>
                  <dd>
                    제주 오설록 티뮤지엄과 이니스프리 제주하우스를 둘러싸고 있는 곶자왈은 숲이라는 의미로 '곶'과 암석과 가시덤불이 뒤엉킨 모습을 뜻하는 '자왈'의 제주도 방언을 말하는 것으로 지나는 이들에게 목가적인 느낌을 선사하는 하늘 아래 정원 같은 곳입니다.
                  </dd>
                </dl>
              </li>
              <li class="spot4">
                <h4><span class="spotNum">5</span>이니스프리 제주하우스<span class="engName">Innisfree Jeju House</span></h4>
                <dl>
                  <dt><img src="img/spot4.jpg" alt="이니스프리 제주하우스"/></dt>
                  <dd>
                    청정섬 제주 자연의 혜택을 담은 화장품을 만드는 이니스프리는 보다 많은 분들이 제주의 아름다움을 다양하게 체험하고 즐기실 수 있도록 이니스프리 제주하우스를 만들었습니다. <br/>
                    이니스프리 제주하우스는 청정섬 제주 원료로 만든 화장품, 천연 비누 만들기 체험공간, 제주의 신선한 식재료로 만든 오가닉 카페등 제주 자연 속에서 오감을 만족시키는 다양한 체험과 제주 자연의 편안한 휴식을 즐길 수 있는 공간입니다.
                  </dd>
                </dl>
              </li>
              <li class="spot5">
                <h4><span class="spotNum">6</span>오설록 농장<span class="engName">OSULLOC Farm</span></h4>
                <dl>
                  <dt><img src="img/spot5.jpg" alt="오설록 농장"/></dt>
                  <dd>
                    오설록 농장은 차(TEA) 나무의 품종개발에서부터 차에 대한 연구, 재배, 가공에 이르는 모든 단계에서 최고 수준의 인적, 물적 자원을 갖춘 차원료 전문기업입니다. <br/>
                    세계적인 차 재배지인 제주땅에 총 3개(서광,도순,한남차밭), 전남 강진에 1개(강진차밭) 등 총 4개의 유기농 차밭을 과학적으로 관리하며 세계 최고 품질의 차를 생산하는 오설록 농장은 국내에서 아모레퍼시픽 오설록에 양질의 차원료를 공급하는 것은 물론, 일본과 미국은 물론 유럽의 국가에도 차원료를 수출합니다.
                  </dd>
                </dl>
              </li>
              <li class="spot6">
                <h4><span class="spotNum">7</span>만수길 &amp; 동백숲<span class="engName">Mansu-Gil &amp; Camellia Forest</span></h4>
                <dl>
                  <dt><img src="img/spotd.jpg" alt="만수길 &amp; 동백숲"/></dt>
                  <dd>
                    오설록 만수길이란, 세계 10대 건강식품인 녹차와 수백 년을 산다는 동백나무 100여 그루가 이루는 길입니다. <br/>
                    방문하신 모든 분들이 이길을 걸음으로 써 무병장수를 누리시길 바라는 오설록의 마을을 담은 길이기도 합니다. 만수길을 거닐다보면 드넒은 서광차밭과 저 멀리 한라산이 이루는 멋진 배경으로 사진을 촬영할 수 있는 '만수길포토존'이 마련되어 있습니다.
                  </dd>
                </dl>
              </li>
              <li class="spot7">
                <h4><span class="spotNum">8</span>추사 유배길 안내도<span class="engName">Chusa's Exile Road Guide Map</span></h4>
                <dl>
                  <dt><img src="img/spotd.jpg" alt="추사 유배길 안내도"/></dt>
                  <dd>
                    '추사유배길'에는 추사 김정희의 유배생활을 느낄 수 있습니다.<br/>
                    추사 유배길은 3코스로 나뉘는데 제1코스는 '집념의 길'로 제주 추사관에서 시작해 정난주 마리아묘, 다정항교를 거쳐 다시 제주 추사관으로 돌아오는 약 8km의 순환코스로 약 3시간이 소요됩니다. 제 2코스 '인연의 길'은 추사의 인연들을 떠올리는 길입니다. 마지막 제3코스 '사색의길'은 산방산과 안덕계곡을 따라 걸으면 제주의 바다와 오름, 계곡의 경치를 느낄 수 있는 길입니다.
                  </dd>
                </dl>
              </li>
              <li class="spot8">
                <h4><span class="spotNum">9</span>올레길 14-1<span class="engName">Jeju Olle Trail Course 14-1</span></h4>
                <dl>
                  <dt><img src="img/spotd.jpg" alt="올레길 14-1"/></dt>
                  <dd>
                    저지에서 무릉까지 이어지는 제주 올레 14-1코스(18.8km)는 제주만의 독특한 숲 '곶자왈'을 비롯해 광활한 푸르름과 시원함을 선사하는 오설록 서광차밭등 자연의 무한한 생명력을 느낄 수 있는 인기 올레길 코스입니다.
                  </dd>
                </dl>
              </li>
            </ul>
          </div>
        </div>
      </section>
  	</div>
  	<footer id="footerWrap">
  		<h2>푸터</h2>
		<div id="footer">
			<div class="leftWrap">
				<p class="img">
				  <a href="index.html" title="오설록"><img src="img/logo_black.png" alt="오설록 로고"/></a>
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
  <div id="black">
  </div>
  <div id="view">
    <div class="closeBtnArea">
      <p class="closeBtn">
        <img src="img/close.png" alt="close"/>
      </p>
    </div>
    <ul>
      <li class="spot0">
        <h4><span class="spotNum">1</span>서광차밭<span class="engName">SeogwangTea Garden</span></h4>
        <dl>
          <dt><img src="img/spot0.jpg" alt="서광차밭"/></dt>
          <dd>
            오설록 유기농 차밭인 서광차밭은 제주 서귀포시 서광리에 조성된 광활한 유기농 차밭입니다. <br/>
            애초에 이 지역은 돌밭이어서 작물재배가 불가능한 곳이었지만, 오설록이 1983년부터 20여 년간 개간하여 척박한 땅을 웅비의 땅으로 변모시켜 현재는 우리나라에서 가장 광활한 유기농 차밭이 되었습니다.
          </dd>
        </dl>
      </li>
      <li class="spot1">
        <h4><span class="spotNum">2</span>제주 오설록 티뮤지엄<span class="engName">Jeju OSULLOC Tea Museum</span></h4>
        <dl>
          <dt><img src="img/spot1.jpg" alt="제주 오설록 티뮤지엄"/></dt>
          <dd>
            '제주 오설록 티뮤지엄은 사라져가는 우리의 차 문화를 계승, 발전시키고 보다 많은 이들에게 우리 차 문화의 가치와 우수성을 널리 전파하려는 '아름다운 집념'이 집약된 한국 차 문화의 발상지이자 국내 최대 규모의 차 종합 전시관입니다. <br/>
            2002년 개관 이래 매년 150만명 이상 찾는 관광명소인 이곳은, 우리나라 차 문화의 전통과 역사를 볼 수 있는 공간, 제주의 자연 속에서 편히 쉴 수 있는 휴식공간 등 특별한 경험들이 기다리고 있습니다.
          </dd>
        </dl>
      </li>
      <li class="spot2">
        <h4><span class="spotNum">3</span>오설록 티스톤<span class="engName">OSULLOC Tea Stone</span></h4>
        <dl>
          <dt><img src="img/spot2.jpg" alt="오설록 티스톤"/></dt>
          <dd>
            문화의 즐기는것. 제주 오설록 티스톤은 생활 속 멋진 차문화를 경험하는 차문화 체험공간입니다. 티 스톤이 서있는 땅 위(상층)에는 추사 김정희 선생의 세한도와 추사체를 주제로한 미디어 아트를 비롯해 멋스러운 티타임 공간이 마련되어 있습니다. <br/>
            그리고 티스톤이 뿌리 내린 땅 아래(하층)에는 제주의 자연과 시간으로 빚어내는 오설록의 시그니처 발효차 ‘삼다연’의 숙성고 체험공간이 위치해 있습니다.
          </dd>
        </dl>
      </li>
      <li class="spot3">
        <h4><span class="spotNum">4</span>곶자왈<span class="engName">Gotjawal Forest</span></h4>
        <dl>
          <dt><img src="img/spotd.jpg" alt="곶자왈"/></dt>
          <dd>
            제주 오설록 티뮤지엄과 이니스프리 제주하우스를 둘러싸고 있는 곶자왈은 숲이라는 의미로 '곶'과 암석과 가시덤불이 뒤엉킨 모습을 뜻하는 '자왈'의 제주도 방언을 말하는 것으로 지나는 이들에게 목가적인 느낌을 선사하는 하늘 아래 정원 같은 곳입니다.
          </dd>
        </dl>
      </li>
      <li class="spot4">
        <h4><span class="spotNum">5</span>이니스프리 제주하우스<span class="engName">Innisfree Jeju House</span></h4>
        <dl>
          <dt><img src="img/spot4.jpg" alt="이니스프리 제주하우스"/></dt>
          <dd>
            청정섬 제주 자연의 혜택을 담은 화장품을 만드는 이니스프리는 보다 많은 분들이 제주의 아름다움을 다양하게 체험하고 즐기실 수 있도록 이니스프리 제주하우스를 만들었습니다. <br/>
            이니스프리 제주하우스는 청정섬 제주 원료로 만든 화장품, 천연 비누 만들기 체험공간, 제주의 신선한 식재료로 만든 오가닉 카페등 제주 자연 속에서 오감을 만족시키는 다양한 체험과 제주 자연의 편안한 휴식을 즐길 수 있는 공간입니다.
          </dd>
        </dl>
      </li>
      <li class="spot5">
        <h4><span class="spotNum">6</span>오설록 농장<span class="engName">OSULLOC Farm</span></h4>
        <dl>
          <dt><img src="img/spot5.jpg" alt="오설록 농장"/></dt>
          <dd>
            오설록 농장은 차(TEA) 나무의 품종개발에서부터 차에 대한 연구, 재배, 가공에 이르는 모든 단계에서 최고 수준의 인적, 물적 자원을 갖춘 차원료 전문기업입니다. <br/>
            세계적인 차 재배지인 제주땅에 총 3개(서광,도순,한남차밭), 전남 강진에 1개(강진차밭) 등 총 4개의 유기농 차밭을 과학적으로 관리하며 세계 최고 품질의 차를 생산하는 오설록 농장은 국내에서 아모레퍼시픽 오설록에 양질의 차원료를 공급하는 것은 물론, 일본과 미국은 물론 유럽의 국가에도 차원료를 수출합니다.
          </dd>
        </dl>
      </li>
      <li class="spot6">
        <h4><span class="spotNum">7</span>만수길 &amp; 동백숲<span class="engName">Mansu-Gil &amp; Camellia Forest</span></h4>
        <dl>
          <dt><img src="img/spotd.jpg" alt="만수길 &amp; 동백숲"/></dt>
          <dd>
            오설록 만수길이란, 세계 10대 건강식품인 녹차와 수백 년을 산다는 동백나무 100여 그루가 이루는 길입니다. <br/>
            방문하신 모든 분들이 이길을 걸음으로 써 무병장수를 누리시길 바라는 오설록의 마을을 담은 길이기도 합니다. 만수길을 거닐다보면 드넒은 서광차밭과 저 멀리 한라산이 이루는 멋진 배경으로 사진을 촬영할 수 있는 '만수길포토존'이 마련되어 있습니다.
          </dd>
        </dl>
      </li>
      <li class="spot7">
        <h4><span class="spotNum">8</span>추사 유배길 안내도<span class="engName">Chusa's Exile Road Guide Map</span></h4>
        <dl>
          <dt><img src="img/spotd.jpg" alt="추사 유배길 안내도"/></dt>
          <dd>
            '추사유배길'에는 추사 김정희의 유배생활을 느낄 수 있습니다.<br/>
            추사 유배길은 3코스로 나뉘는데 제1코스는 '집념의 길'로 제주 추사관에서 시작해 정난주 마리아묘, 다정항교를 거쳐 다시 제주 추사관으로 돌아오는 약 8km의 순환코스로 약 3시간이 소요됩니다. 제 2코스 '인연의 길'은 추사의 인연들을 떠올리는 길입니다. 마지막 제3코스 '사색의길'은 산방산과 안덕계곡을 따라 걸으면 제주의 바다와 오름, 계곡의 경치를 느낄 수 있는 길입니다.
          </dd>
        </dl>
      </li>
      <li class="spot8">
        <h4><span class="spotNum">9</span>올레길 14-1<span class="engName">Jeju Olle Trail Course 14-1</span></h4>
        <dl>
          <dt><img src="img/spotd.jpg" alt="올레길 14-1"/></dt>
          <dd>
            저지에서 무릉까지 이어지는 제주 올레 14-1코스(18.8km)는 제주만의 독특한 숲 '곶자왈'을 비롯해 광활한 푸르름과 시원함을 선사하는 오설록 서광차밭등 자연의 무한한 생명력을 느낄 수 있는 인기 올레길 코스입니다.
          </dd>
        </dl>
      </li>
    </ul>
  </div>
  <script>
    var now = 0;
    jQuery(document).ready(function(){
      // 스크롤을 함에 따라 header 변경
      var w = jQuery("#section0").width();
      jQuery(window).scroll(function(){
        var nowScroll = jQuery(document).scrollTop();
        console.log(nowScroll);


        if(nowScroll >= 40){
          jQuery("#header").css({"top":"-35px"});
          jQuery("#header h1, #header h1 a").css({"width":"70px","height":"23px","top":"10px"});
          jQuery("#mainInfo").css({"top":"38px"});
        }
        else {
          jQuery("#header").css({"top":"0"});
          jQuery("#header h1, #header h1 a").css({"width":"100px","height":"40px","top":"0px"});
          jQuery("#mainInfo").css({"top":"0"});
        }
        if(nowScroll >= 40){
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

      // 해당하는 marker를 클릭하면 정보 표현
      jQuery("#mapMore li, #direct .spot6, #direct .spot8, #mapDesc li, #black, #view, #view li, #mapDesc").hide();
      if(w <= 1014) {
        jQuery("#mapDesc").hide();
        jQuery("#mapArea").css({"marginLeft":"auto"});
      }
      else {
        jQuery("#black, #view, #mapDesc").hide();
        jQuery("#mapArea").css({"marginLeft":"162px"});
      }
      jQuery("#black, .closeBtn").click(function(){
        jQuery("#black,#view").hide();
      });

      jQuery("#mapMarker li").click(function(){
        if (w >= 1015) {
        jQuery("#mapArea").css({"marginLeft":"0"});
        }
        jQuery("#mapMarker li").children("img").attr({"src":"img/map_marker.png"});
        jQuery(this).children("img").attr({"src":"img/map_marker_click.png"});

        jQuery("#mapMarker li").css({"animation":"none"});
        jQuery(this).css({"animation":"markerani 1s infinite alternate"});
      });

      jQuery("#mapMarker .spot0").hover(function(){
        jQuery("#mapMore .spot0").show();
      },function(){
        jQuery("#mapMore .spot0").hide();
      }).click(function(){
        if (w <= 1014) {
          jQuery("#view li, #mapDesc, #mapDesc .spot0").hide();
          jQuery("#black, #view, #view .spot0").show();
        }
        else {
          jQuery("#black, #view, #mapDesc, #mapDesc li").hide();
          jQuery("#mapDesc").delay(500).fadeIn(500);
          jQuery("#mapDesc .spot0").fadeIn(500);
      }
      });

      jQuery("#mapMarker .spot1").hover(function(){
        jQuery("#mapMore .spot1").show();
      },function(){
        jQuery("#mapMore .spot1").hide();
      }).click(function(){
        if (w <= 1014) {
          jQuery("#view li, #mapDesc, #mapDesc .spot1").hide();
          jQuery("#black, #view, #view .spot1").show();
        }
        else {
          jQuery("#mapDesc li, #mapDesc, #mapDesc li").hide();
          jQuery("#mapDesc").delay(500).fadeIn(500);
          jQuery("#mapDesc .spot1").fadeIn(500);
        }
      });

      jQuery("#mapMarker .spot2").hover(function(){
        jQuery("#mapMore .spot2").show();
      },function(){
        jQuery("#mapMore .spot2").hide();
      }).click(function(){
        if (w <= 1014) {
          jQuery("#view li, #mapDesc, #mapDesc .spot2").hide();
          jQuery("#black, #view, #view .spot2").show();
        }
        else {
          jQuery("#black, #view, #mapDesc, #mapDesc li").hide();
          jQuery("#mapDesc").delay(500).fadeIn(500);
          jQuery("#mapDesc .spot2").fadeIn(500);
        }
      });

      jQuery("#mapMarker .spot3").hover(function(){
        jQuery("#mapMore .spot3").show();
      },function(){
        jQuery("#mapMore .spot3").hide();
      }).click(function(){
        if (w <= 1014) {
          jQuery("#view li, #mapDesc, #mapDesc .spot3").hide();
          jQuery("#black, #view, #view .spot3").show();
        }
        else {
          jQuery("#black, #view, #mapDesc, #mapDesc li").hide();
          jQuery("#mapDesc").delay(500).fadeIn(500);
          jQuery("#mapDesc .spot3").fadeIn(500);
        }
      });

      jQuery("#mapMarker .spot4").hover(function(){
        jQuery("#mapMore .spot4").show();
      },function(){
        jQuery("#mapMore .spot4").hide();
      }).click(function(){
        if (w <= 1014) {
          jQuery("#view li, #mapDesc, #mapDesc .spot4").hide();
          jQuery("#black, #view, #view .spot4").show();
        }
        else {
          jQuery("#black, #view, #mapDesc, #mapDesc li").hide();
          jQuery("#mapDesc").delay(500).fadeIn(500);
          jQuery("#mapDesc .spot4").fadeIn(500);
        }
      });

      jQuery("#mapMarker .spot5").hover(function(){
        jQuery("#mapMore .spot5").show();
      },function(){
        jQuery("#mapMore .spot5").hide();
      }).click(function(){
        if (w <= 1014) {
          jQuery("#view li, #mapDesc, #mapDesc .spot5").hide();
          jQuery("#black, #view, #view .spot5").show();
        }
        else {
          jQuery("#black, #view, #mapDesc, #mapDesc li").hide();
          jQuery("#mapDesc").delay(500).fadeIn(500);
          jQuery("#mapDesc .spot5").fadeIn(500);
        }
      });

      jQuery("#mapMarker .spot6").hover(function(){
        jQuery("#mapMore .spot6").show();
        jQuery("#direct .spot6").show();
      },function(){
        jQuery("#mapMore .spot6").hide();
        jQuery("#direct .spot6").hide();
      }).click(function(){
        if (w <= 1014) {
          jQuery("#view li, #mapDesc, #mapDesc .spot6").hide();
          jQuery("#black, #view, #view .spot6").show();
        }
        else {
          jQuery("#black, #view, #mapDesc, #mapDesc li").hide();
          jQuery("#mapDesc").delay(500).fadeIn(500);
          jQuery("#mapDesc .spot6").fadeIn(500);
        }
      });

      jQuery("#mapMarker .spot7").hover(function(){
        jQuery("#mapMore .spot7").show();
      },function(){
        jQuery("#mapMore .spot7").hide();
      }).click(function(){
        if (w <= 1014) {
          jQuery("#view li, #mapDesc, #mapDesc .spot7").hide();
          jQuery("#black, #view, #view .spot7").show();
        }
        else {
          jQuery("#black, #view, #mapDesc, #mapDesc li").hide();
          jQuery("#mapDesc").delay(500).fadeIn(500);
          jQuery("#mapDesc .spot7").fadeIn(500);
        }
      });

      jQuery("#mapMarker .spot8").hover(function(){
        jQuery("#mapMore .spot8").show();
        jQuery("#direct .spot8").show();
      },function(){
        jQuery("#mapMore .spot8").hide();
        jQuery("#direct .spot8").hide();
      }).click(function(){
        if (w <= 1014) {
          jQuery("#view li, #mapDesc, #mapDesc .spot8").hide();
          jQuery("#black, #view, #view .spot8").show();
        }
        else {
          jQuery("#black, #view, #mapDesc, #mapDesc li").hide();
          jQuery("#mapDesc").delay(500).fadeIn(500);
          jQuery("#mapDesc .spot8").fadeIn(500);
        }
      });

      jQuery(window).resize(function(){
  			var bW = jQuery("body").width();
        jQuery("#mapMore li, #direct .spot6, #direct .spot8, #mapDesc li, #black, #view, #view li, #mapDesc").hide();

        if(bW <= 1014) {
          jQuery("#mapArea").css({"marginLeft":"auto"});
          jQuery("#mapDesc").hide();
          jQuery("#mapMarker .spot0").hover(function(){
            jQuery("#mapMore .spot0").show();
          },function(){
            jQuery("#mapMore .spot0").hide();
          }).click(function(){
            jQuery("#mapDesc, #mapDesc .spot8").fadeOut(0);
            jQuery("#black, #view, #view li, #mapDesc, #mapDesc .spot0").hide();
            jQuery("#black, #view, #view .spot0").show();
          });

          jQuery("#mapMarker .spot1").hover(function(){
            jQuery("#mapMore .spot1").show();
          },function(){
            jQuery("#mapMore .spot1").hide();
          }).click(function(){
            jQuery("#mapDesc, #mapDesc .spot8").fadeOut(0);
            jQuery("#black, #view, #view li, #mapDesc, #mapDesc .spot1").hide();
            jQuery("#black, #view, #view .spot1").show();
          });

          jQuery("#mapMarker .spot2").hover(function(){
            jQuery("#mapMore .spot2").show();
          },function(){
            jQuery("#mapMore .spot2").hide();
          }).click(function(){
            jQuery("#mapDesc, #mapDesc .spot8").fadeOut(0);
            jQuery("#black, #view, #view li, #mapDesc, #mapDesc .spot2").hide();
            jQuery("#black, #view, #view .spot2").show();
          });

          jQuery("#mapMarker .spot3").hover(function(){
            jQuery("#mapMore .spot3").show();
          },function(){
            jQuery("#mapMore .spot3").hide();
          }).click(function(){
            jQuery("#mapDesc, #mapDesc .spot8").fadeOut(0);
            jQuery("#black, #view, #view li, #mapDesc, #mapDesc .spot3").hide();
            jQuery("#black, #view, #view .spot3").show();
          });

          jQuery("#mapMarker .spot4").hover(function(){
            jQuery("#mapMore .spot4").show();
          },function(){
            jQuery("#mapMore .spot4").hide();
          }).click(function(){
            jQuery("#mapDesc, #mapDesc .spot8").fadeOut(0);
            jQuery("#black, #view, #view li, #mapDesc, #mapDesc .spot4").hide();
            jQuery("#black, #view, #view .spot4").show();
          });

          jQuery("#mapMarker .spot5").hover(function(){
            jQuery("#mapMore .spot5").show();
          },function(){
            jQuery("#mapMore .spot5").hide();
          }).click(function(){
            jQuery("#mapDesc, #mapDesc .spot8").fadeOut(0);
            jQuery("#black, #view, #view li, #mapDesc, #mapDesc .spot5").hide();
            jQuery("#black, #view, #view .spot5").show();
          });

          jQuery("#mapMarker .spot6").hover(function(){
            jQuery("#mapMore .spot6").show();
          },function(){
            jQuery("#mapMore .spot6").hide();
          }).click(function(){
            jQuery("#mapDesc, #mapDesc .spot8").fadeOut(0);
            jQuery("#black, #view, #view li, #mapDesc, #mapDesc .spot6").hide();
            jQuery("#black, #view, #view .spot6").show();
          });

          jQuery("#mapMarker .spot7").hover(function(){
            jQuery("#mapMore .spot7").show();
          },function(){
            jQuery("#mapMore .spot7").hide();
          }).click(function(){
            jQuery("#mapDesc, #mapDesc .spot8").fadeOut(0);
            jQuery("#black, #view, #view li, #mapDesc, #mapDesc .spot7").hide();
            jQuery("#black, #view, #view .spot7").show();
          });

          jQuery("#mapMarker .spot8").hover(function(){
            jQuery("#mapMore .spot8").show();
          },function(){
            jQuery("#mapMore .spot8").hide();
          }).click(function(){
            jQuery("#mapDesc, #mapDesc .spot8").fadeOut(0);
            jQuery("#black, #view, #view li, #mapDesc, #mapDesc .spot8").hide();
            jQuery("#black, #view, #view .spot8").show();
          });
        }
        else if(bW >= 1015) {
          jQuery("#black, #view, #mapDesc").hide();
          jQuery("#mapArea").css({"marginLeft":"162px"});

          jQuery("#mapMarker .spot0").hover(function(){
            jQuery("#mapMore .spot0").show();
          },function(){
            jQuery("#mapMore .spot0").hide();
          }).click(function(){
            jQuery("#black, #view, #mapDesc, #mapDesc li").hide();
            jQuery("#mapDesc").delay(500).fadeIn(500);
            jQuery("#mapDesc .spot0").fadeIn(500);
          });

          jQuery("#mapMarker .spot1").hover(function(){
            jQuery("#mapMore .spot1").show();
          },function(){
            jQuery("#mapMore .spot1").hide();
          }).click(function(){
            jQuery("#black, #view, #mapDesc, #mapDesc li").hide();
            jQuery("#mapDesc").delay(500).fadeIn(500);
            jQuery("#mapDesc .spot1").fadeIn(500);
          });

          jQuery("#mapMarker .spot2").hover(function(){
            jQuery("#mapMore .spot2").show();
          },function(){
            jQuery("#mapMore .spot2").hide();
          }).click(function(){
            jQuery("#black, #view, #mapDesc, #mapDesc li").hide();
            jQuery("#mapDesc").delay(500).fadeIn(500);
            jQuery("#mapDesc .spot2").fadeIn(500);
          });

          jQuery("#mapMarker .spot3").hover(function(){
            jQuery("#mapMore .spot3").show();
          },function(){
            jQuery("#mapMore .spot3").hide();
          }).click(function(){
            jQuery("#black, #view, #mapDesc, #mapDesc li").hide();
            jQuery("#mapDesc").delay(500).fadeIn(500);
            jQuery("#mapDesc .spot3").fadeIn(500);
          });

          jQuery("#mapMarker .spot4").hover(function(){
            jQuery("#mapMore .spot4").show();
          },function(){
            jQuery("#mapMore .spot4").hide();
          }).click(function(){
            jQuery("#black, #view, #mapDesc, #mapDesc li").hide();
            jQuery("#mapDesc").delay(500).fadeIn(500);
            jQuery("#mapDesc .spot4").fadeIn(500);
          });

          jQuery("#mapMarker .spot5").hover(function(){
            jQuery("#mapMore .spot5").show();
          },function(){
            jQuery("#mapMore .spot5").hide();
          }).click(function(){
            jQuery("#black, #view, #mapDesc, #mapDesc li").hide();
            jQuery("#mapDesc").delay(500).fadeIn(500);
            jQuery("#mapDesc .spot5").fadeIn(500);
          });

          jQuery("#mapMarker .spot6").hover(function(){
            jQuery("#mapMore .spot6").show();
          },function(){
            jQuery("#mapMore .spot6").hide();
          }).click(function(){
            jQuery("#black, #view, #mapDesc, #mapDesc li").hide();
            jQuery("#mapDesc").delay(500).fadeIn(500);
            jQuery("#mapDesc .spot6").fadeIn(500);
          });

          jQuery("#mapMarker .spot7").hover(function(){
            jQuery("#mapMore .spot7").show();
          },function(){
            jQuery("#mapMore .spot7").hide();
          }).click(function(){
            jQuery("#black, #view, #mapDesc, #mapDesc li").hide();
            jQuery("#mapDesc").delay(500).fadeIn(500);
            jQuery("#mapDesc .spot7").fadeIn(500);
          });

          jQuery("#mapMarker .spot8").hover(function(){
            jQuery("#mapMore .spot8").show();
          },function(){
            jQuery("#mapMore .spot8").hide();
          }).click(function(){
            jQuery("#black, #view, #mapDesc, #mapDesc li").hide();
            jQuery("#mapDesc").delay(500).fadeIn(500);
            jQuery("#mapDesc .spot8").fadeIn(500);
          });
        }

        jQuery("#black, .closeBtn").click(function(){
          jQuery("#black, #view").hide();
        });

        jQuery("#mapMarker li").click(function(){
          if (bW >= 1015) {
            jQuery("#mapArea").css({"marginLeft":"0"});
          }
          jQuery("#mapMarker li").children("img").attr({"src":"img/map_marker.png"});
          jQuery(this).children("img").attr({"src":"img/map_marker_click.png"});

          jQuery("#mapMarker li").css({"animation":"none"});
          jQuery(this).css({"animation":"markerani 1s infinite alternate"});
        });

      });

    });
    function langClick(){
      var lang = document.getElementById("lang");
      if (lang.value == "en"){
        location.href="wrongpage.html";
      }
      else {
        location.href="index.html";
      }
    }
  </script>
 </body>
</html>
<!--
	1920px
-->
