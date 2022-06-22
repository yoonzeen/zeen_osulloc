<!DOCTYPE html>
<html lang="ko">
 <head>
  <meta charset="utf-8"/>
  <title> 회원가입 | Jeju Osulloc </title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1"/>
  <link rel="stylesheet" type="text/css" href="css/reset.css"/>
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
    #wrap {width:100%; margin:0 auto; max-width:1920px; position:relative;  }

    /* ########### container ########## */
      #container {width:100%; margin:0 auto; }


    /* ########## section0 ########## */
    /*section_bg_2001.jpg*/
    #section0 {width:100%; margin:0 auto; position:relative; }
      #content {width:100%; margin:0 auto; background-image:url("img/section_bg_2001.jpg");  background-repeat:no-repeat; background-size:auto 100%; }
      #content:after {content:""; display:block; clear:both;}
        #content div {float:left; }

    /* ######### leftWrap ######## */
    #leftWrap {width:50%;  margin:0 auto;   }
      #leftWrap .illust {width:200px; padding:50px; border:1px solid #fff; position:absolute; left:15%; top:50%; margin-top:-100px; }
        #leftWrap .illust img {width:100%; }
      #leftWrap .darkening {width:100%; height:100%; background-color:rgba(100,100,100,0.4); position:absolute; left:0; top:0; }
      #leftWrap .whiteline0 {width:98%; height:96%; border:1px solid #fff; position:absolute; left:1%; top:2%; }
      #leftWrap .whiteline1 {width:80px; height:80px; border:1px solid #fff; position:absolute; left:150px; top:150px; }
      #leftWrap .whiteline2 {width:100px; height:5px; border-bottom:1px solid #fff; position:absolute; left:35%; bottom:80px; }

    /* ######## rightWrap ####### */
    #rightWrap {width:40%; padding:15px 0 0 2%; height:90%;position:absolute; right:35px; top:35px; background-color:#fff; }
      #rightWrap h3 {width:100%; margin-top:14px; font-size:40px; line-height:65px; font-family:"arita_dodum-Light"; font-weight:400; color:#333; }
      #rightWrap .intro {width:100%; font-size:14px; color:#333; font-family:"arita_dodum-Light";}

      form {width:100%; padding-top:50px; }
        legend {display:none;}
        fieldset {border:none; width:100%; }
        form p {width:100%; padding:10px 0; font-family:"arita_dodum-Light"; color:#333;}
        form p label {width:100px; font-size:16px; font-family:"arita_dodum-Light"; display:inline-block;}
          form p input {width:150px; display:inline-block; line-height:22px; font-family:"arita_dodum-Medium"; text-indent:5px; }
          form p input[type="button"] {width:100px; font-family:"arita_dodum-Light"; color:#999; background-color:#fff; border:1px solid #999; text-indent:0px; transition:all .3s ease-in-out;}
            form p input[type="button"]:hover {background-color:#999; color:#fff; cursor:pointer;}
          form #button {padding-top:30px; }
          form #button input {width:80px; text-indent:0px;  font-family:"arita_dodum-Light";  padding:5px;  transition:all .3s ease-in-out; margin-right:15px; }


          form #button input[type="submit"] {background-color:#669966; color:#fff; border:1px solid #669966; }
            form #button input[type="submit"]:hover {background-color:#fff; color:#669966; cursor:pointer;}
          form #button input[type="reset"] {background-color:#fff; border:1px solid #669966; color:#669966; }
            form #button input[type="reset"]:hover {background-color:#aaa; color:#fff; border:1px solid #aaa; cursor:pointer; }

          form #userdomainSel {height:28px; border:1px solid #333; vertical-align:middle;}


    /* ############## formFooter ################### */
  		#formFooter {width:100%; height:60px; position:absolute; left:0; bottom:30px; clear:both;}
  			.footerLink {width:100%; margin:0 auto; text-align:center;}
  				.footerLink li {display:inline-block; padding:0 5px;}
  					.footerLink li a {color:#333; font-size:13px; font-family:"arita_dodum-Light";}
  		.osullocCopy {width:100%; margin:0 auto; text-align:center; padding:5px 0;}
  			.copy {width:100%; font-size:13px; line-height:30px; font-family:"arita_dodum-Light";}
            .copy img {width:50px; vertical-align:middle;}

    /* ############ 기능 ################ */

    /* ############## 공통 ################# */
      h3 .green {font-size:25px; color:#669966;}


  </style>
 </head>

 <body>
  <div id="wrap">
  	<div id="container">
  	  <section id="section0">
        <h2>회원가입</h2>
        <div id="content">
          <div id="leftWrap">
            <p class="darkening">
            </p>
            <p class="whiteline0">
            </p>
            <p class="whiteline1">
            </p>
            <p class="whiteline2">
            </p>
            <p class="illust">
              <img src="img/intro_museum.png" alt="오설록"/>
            </p>
          </div>
          <div id="rightWrap">
            <h3>반갑습니다.</h3>
            <p class="intro">
              간단한 회원가입으로 오설록과 더욱 가까운 사이가 되어요.
            </p>
            <form action="join_control.php" method="post">
              <legend>회원가입</legend>
              <fieldset>
                <p>
                  <label for="userid">아이디</label><input id="userid" type="text" name="userid" required autocomplete="off" placeholder="아이디 10자 이하" maxlength="10"/>
                  <input id="IDchkBtn" type="button" name="IDchkBtn" value="아이디 중복 확인" onclick="IDchkBtns();"/><span id="IDchkDesc"></span>
                </p>
                <p>
                  <label for="userpw">비밀번호</label><input id="userpw" type="password" name="userpw" required autocomplete="off" placeholder="비밀번호 8자 이하" maxlength="8"/>
                </p>
                <p>
                  <label for="username">이름</label><input id="username" type="text" name="username" required autocomplete="off" />
                </p>
                <p>
                  <label for="userbirth">생일</label><input id="userbirth" type="text" name="userbirth" required autocomplete="off" placeholder="ex)19930926" />
                </p>
                <p>
                  <label for="useremailid">이메일</label><input id="useremailid" type="text" name="useremailid" required autocomplete="off"/>@<input id="userdomain" type="text" name="userdomain"/>
                  <select id="userdomainSel" onchange="resultEmail();">
                    <option value="emailMenu" selected="selected">이메일 선택</option>
                    <option value="naver.com">naver.com</option>
                    <option value="daum.net">daum.net</option>
                    <option value="google.co.kr">google.co.kr</option>
                    <option value="nate.com">nate.com</option>
                    <option value="direct">직접입력</option>
                  </select>
                </p>
                <p>
                  <label for="userphone">전화번호</label><input id="userphone" type="text" name="userphone" required autocomplete="off" placeholder="010-1111-1111" pattern="\d{3}-\d{3,4}-\d{4}"/>
                </p>
                <p id="button">
                    <input type="submit" value="가입하기" title="가입하기" onclick="allfulled();"/>
                    <input type="reset" value="다시 작성" title="다시 작성"/>
                </p>
              </fieldset>
            </form>
          </div>
        </div>
      </section>
  	</div>
    <div id="formFooter">
    <ul class="footerLink">
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
    <div class="osullocCopy">
      <p class="copy">
        Copyright © <a href="index.php" title="osulloc"><img src="img/logo_black.png" alt="osulloc logo"/></a> Corp. All Rights Reserved. Yoon Ji-eun.
      </p>
    </div>
  </div>
  </div>
  <ul>
	<li>
		<span></span>
	</li>
  </ul>
  <script>
    jQuery(document).ready(function(){
      jQuery("#wrap").css({"height":jQuery(window).height()});
      jQuery("#leftWrap, #leftWrap .darkening").css({"height":jQuery(window).height()-110+"px"});
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
    function resultEmail(){
      var userdomain = document.getElementById("userdomain");
      var userdomainSel = document.getElementById("userdomainSel");

      switch(userdomainSel.value){
        case "emailMenu" : userdomain.value=""; break;
        case "naver.com" : case "daum.net" : case "google.co.kr" : case "nate.com" : userdomain.value = userdomainSel.value; break;
        case "direct" : userdomain.focus(); userdomain.value=""; break;
      }
    }
	function IDchkBtns(){
		var userid = document.getElementById("userid");
		var IDchkDesc = document.getElementById("IDchkDesc");

		if(userid.value == "") {
			alert("아이디를 입력하세요.");
			userid.focus();
		}
		else {
			xmlhttp = new XMLHttpRequest();
			xmlhttp.open("GET","idDoubleChk.php?q="+userid.value,true);

			xmlhttp.onreadystatechange = function(){
				if(xmlhttp.readyState == 4 && xmlhttp.status == 200) {
					IDchkDesc.innerHTML = xmlhttp.responseText;
				}
			};
			xmlhttp.send();
		}
	}
	function allfulled(){
		var userdomainSel = document.getElementById("userdomainSel");

		if(userdomainSel.value == ""){
			alert("이메일 도메인을 입력하세요.");
			return false;
		}
	}
  </script>
 </body>
</html>
<!--
	1920px
-->
