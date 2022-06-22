<!DOCTYPE html>
<html lang="ko">
 <head>
  <meta charset="utf-8"/>
  <title> Osulloc Login </title>
  <link rel="stylesheet" type="text/css" href="css/reset.css"/>
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


	/* ############### wrap + formWrap ################ */
		#wrap {width:100%; margin:0 auto; }
      #section0 {width:100%; margin:0 auto; overflow:hidden; }
      #loginWrapArea {width:800px; margin:150px auto 0; border:1px solid #ddd; border-left:none; border-right:none; padding:50px 0; }
      #loginWrapArea:after {content:""; display:block; clear:both;}
      #photoWrap {width:50%; float:left;}
			#formWrap {width:50%; height:350px; float:left; }

      #wrap:after {content:""; display:block; clear:both;}
  /* ################ photoWrap ##################### */
      #photoWrap ul {width:350px; height:350px; position:relative; }
        #photoWrap li {width:350px; height:350px; position:absolute; left:10px; top:0; overflow:hidden;
        }
		  #photoWrap li img {height:100%; animation-timing-function:ease-in-out;}
		  #photoWrap .imgBg {left:45px;}
		  #photoWrap .imgBg img {height:50%; padding-top:100px; }
          #photoWrap .img0 img{ animation:photoani0 25s infinite;}
          #photoWrap .img1 img{ animation:photoani1 25s infinite;}
          #photoWrap .img2 img{ animation:photoani2 25s infinite;}
          #photoWrap .img3 img{ animation:photoani3 25s infinite;}
          #photoWrap .img4 img{ animation:photoani4 25s infinite;}

          @keyframes photoani0 {
            0% {transform:translatex(0); opacity:0;}
			20% {transform:translatex(-10px); opacity:1;}
            40% {transform:translatex(-20px); opacity:0;}
			100% {transform:translatex(-20px); opacity:0;}
          }
		  @keyframes photoani1 {
			0% {transform:translatex(0); opacity:0;}
            10% {transform:translatex(0); opacity:0;}
			30% {transform:translatex(-10px); opacity:1;}
            50% {transform:translatex(-20px); opacity:0;}
			100% {transform:translatex(-20px); opacity:0;}
          }
		  @keyframes photoani2 {
			0% {transform:translate(0); opacity:0;}
            40% {transform:translatex(0); opacity:0;}
            60% {transform:translatex(-10px); opacity:1;}
			80% {transform:translatex(-20px); opacity:0;}
			100% {transform:translatex(-20px); opacity:0;}
          }
		  @keyframes photoani3 {
			0% {transform:translatex(0); opacity:0;}
            60% {transform:translatex(0); opacity:0;}
            80% {transform:translatex(-10px); opacity:1;}
			100% {transform:translatex(-20px); opacity:0;}
          }
		  @keyframes photoani4 {
			0% {transform:translatex(0); opacity:0;}
            80% {transform:translatex(0); opacity:0;}
            90% {transform:translatex(-10px); opacity:1;}
			100% {transform:translatex(-20px); opacity:0;}
          }
	/* ################ formHeader #################### */
		#formHeader {width:100%;  }
			h1 {width:100%; text-align:center;}
				h1 a{display:block; width:200px; height:110px; overflow:hidden; margin:0 auto;}
					h1 a img {width:100%;}

	/* ################ formContainer ############# */
		#formContainer {width:100%; }
			#loginArea {width:100%; margin:0 auto;}
				#loginArea fieldset {width:100%; border:none; margin:0 auto; }
        #loginArea fieldset:after {content:""; display:block; clear:both;}
					#loginArea legend {width:100%; color:#669966; height:35px; line-height:35px; display:block; font-size:13px; text-align:center; padding-bottom:5px; font-family:"arita-buriSB";}

					#loginArea form p {height:45px; }
						#loginArea form p input {border:1px solid #ccc; width:290px; height:35px; font-family:"arita_dodum-Medium";}
            #loginArea form p input[type=text],#loginArea form p input[type=password] {text-indent:10px;}

     #loginArea form fieldset div {float:left; }
      #loginArea form fieldset #textArea {width:300px;}
      #loginArea form fieldset #btnArea {width:90px; }




	/* ################## .btn ##################### */
		#loginArea form .btn {width:90px; height:81px;}
			#loginArea form .btn input {width:100%; height:100%; border:none; background-color:#768152; color:#fff; font-size:15px; cursor:pointer; transition:all .5s ease-in-out; font-family:"arita_dodum-Medium";}

	/* ################# checkInfo + loginOn ######### */
		#loginArea .checkInfo {width:100%;  height:30px; }
			#loginArea .checkInfo input {width:15px; height:15px; vertical-align:middle;}
			#loginArea .checkInfo label {margin-left:7px; color:#666; font-size:12px; vertical-align:middle; font-family:"arita_dodum-Light";}

	/* ############## linkArea ################## */
		.linkArea {width:100%; padding:5px 0; text-align:center; }
			.linkArea li {display:inline;}
				.linkArea li a {color:#999; padding:0 3px; font-size:13px; font-family:"arita_dodum-Medium";}

	/* ############## formFooter ################### */
		#formFooter {width:100%; clear:both; padding-top:50px; }
			.footerLink {width:100%; margin:0 auto; text-align:center;}
				.footerLink li {display:inline-block; padding:0 5px;}
					.footerLink li a {color:#333; font-size:13px; font-family:"arita_dodum-Light";}
		.osullocCopy {width:100%; margin:0 auto; text-align:center; padding:5px 0;}
			.copy {width:100%; font-size:13px; line-height:30px; font-family:"arita_dodum-Light";}
          .copy img {width:50px; vertical-align:middle;}



    /* ############## 기능 ############# */
      #loginArea .checkInfo label:hover {color:#669966;}
      #loginArea form .btn input:hover {background-color:#5f6e21;}
      .linkArea li a:hover,.linkArea li a:focus {color:#333;}
      .footerLink li a:hover, .footerLink li a:focus {color:#669966;}
  </style>
 </head>

 <body>
  <div id="wrap">
    <section id="section0">
      <div id="loginWrapArea">
        <div id="photoWrap">
          <ul>
			<li class="imgBg">
			  <img src="img/bi_osulloc.png" alt="login page image5"/>
			</li>
            <li class="img0">
              <img src="img/l0.jpg" alt="login page image0"/>
            </li>
            <li class="img1">
              <img src="img/l1.jpg" alt="login page image1"/>
            </li>
            <li class="img2">
              <img src="img/l2.jpg" alt="login page image2"/>
            </li>
            <li class="img3">
              <img src="img/l3.jpg" alt="login page image3"/>
            </li>
            <li class="img4">
              <img src="img/l4.jpg" alt="login page image4"/>
            </li>

          </ul>
        </div>
    	  <div id="formWrap">
      		<div id="formHeader">
      			<h1>
      				<a href="index.php" title="오설록 로그인 사이트">
      					<img src="img/bi_osulloc.png" alt="오설록 로고"/>
      				</a>
      			</h1>
      		</div>
      		<div id="formContainer">
      			<div id="loginArea">
      				<form action="login_control.php" method="post">
      					<fieldset>
      						<legend>
      							오설록 회원이신가요?
      						</legend>
                  <div id="textArea">
        						<p class="idArea">
        							<input id="userid" type="text" name="userid" placeholder=" 아이디를 입력하세요." title="아이디 입력" autofocus autocomplete="off"/>
        						</p>
        						<p class="pwArea">
        							<input id="userpw" type="password" name="userpw" placeholder=" 비밀번호를 입력하세요." autocomplete="off" title="비밀번호 입력"/>
        						</p>
                  </div>
                  <div id="btnArea">
        						<p class="btn">
        							<input id="btn" type="submit" value="로그인" title="로그인"/>
        						</p>
                  </div>
      					</fieldset>
      					<div class="checkInfo">
      						<input type="checkbox" id="check" name="check"/><label for="check">로그인 상태 유지</label>
      					</div>
      					<ul class="linkArea">
      						<li>
      							<a href="#" title="아이디 찾기">아이디 찾기</a>
      						</li>
      						<li>
      							<a href="#" title="비밀번호 찾기">비밀번호 찾기</a>
      						</li>
      						<li>
      							<a href="join.php" title="회원가입">회원가입</a>
      						</li>
      					</ul>
      				</form>
      			</div>
      		</div>
    		</div>
	     </div>
     </section>
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
 </body>
</html>
