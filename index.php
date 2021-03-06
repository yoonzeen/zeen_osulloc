<?php
  include "00_conn.php";
  session_cache_expire(200);
  session_start();
?>
<!DOCTYPE html>
<html lang="ko">
 <head>
  <meta charset="utf-8"/>
  <title> Jeju Osulloc - 우리 차의 역사와 문화를 알리다. </title>
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
      #container {width:100%; margin:0 auto;} /* 맥북 13인치 기준 꽉 채운 높이값 826px */
        #visual {width:100%; height:900px; background-color:#fff; margin:0 auto; text-align:center; color:#fff; position:relative;
		        background-repeat:no-repeat; background-size:cover; background-position:center top; background-image:url("img/visual.png"); }
          #visual div.text {width:100%; font-family:"arita_dodum-Light"; font-size:18px; position:absolute; top:40%; font-weight:100;}
            #visual div.text strong {width:100%; font-size:45px; line-height:80px; display:block; opacity:0; transition:opacity 1s ease-in .5s; font-weight:400; font-family:"arita-buriL";}
			         #visual div.text .subtitle {opacity:0; transition:opacity 1s ease-in 1s;}
          #visual .toBottom {width:100%; position:absolute; left:0; top:70%; text-align:center; animation:bottomBtnAni 1s infinite alternate; }
            #visual .toBottom a {display:block; width:50px; margin:0 auto;  height:50px; border:none; }
				#visual .toBottom a img {width:100%;}
			@keyframes bottomBtnAni {
				0% {transform:translatey(-5px);}
				100% {transform:translatey(5px);}
			}

    /* ########### content_0 ########## */
      #content_0 {width:100%; background-color:#f0f2e7; margin:0 auto; transition:all 1s;}
        #content_0 h3 {opacity:1;}
        #interesting {width:100%;  margin:0 auto;}
          #interesting .dropImgArea {width:300px; height:1650px; margin:0 auto; position:relative;}
          #interesting .dropImg {width:43px; height:43px; position:absolute; left:48%; top:100px; text-align:center; transform:rotate(0deg);}
          #interesting .dropImg img {opacity:0; }
          #interesting .cupImg {width:150px; position:absolute; left:25%; bottom:80px; cursor:pointer;}

		#content_0 .scroll {width:100%; height:70px; position:fixed; left:0; bottom:-82px; background-color:#fff; border-top:1px solid #ddd; transition:all .3s ease-in-out; z-index:20;}
			#content_0 .scroll p {width:32px; height:32px; margin:19px auto; }
				#content_0 .scroll p img {width:100%; }

          .fixed {position:fixed; top:10px;}
          .leafAni {-webkit-animation:leafani 3s infinite alternate;
          -ms-animation:leafani 3s infinite alternate;
          -moz-animation:leafani 3s infinite alternate;
          -o-animation:leafani 3s infinite alternate;}
          @keyframes leafani {
            0% {transform:rotate(6deg);}
            50% {transform:rotate(-6deg);}
            100% {transform:rotate(6deg);}
          }
	/* ########## content_0_sub ############ */
		#content_0_subWrap {width:100%; margin:0 auto;  background-color:#3d3d3f;}
		#content_0_sub {width:100%; height:100%; background-color:#F6F6F6; overflow:hidden; border-radius:0 0 80px 0;}
			#content_0_sub .teaIngr {width:100%; height:400px; margin:350px auto 300px; position:relative;}
				#content_0_sub .teaIngr p {margin:0 auto; position:absolute; top:0; margin-left:-100px; transition:all .5s;}
          #content_0_sub .teaIngr p img {width:100%; }
        #content_0_sub .teaIngr .largeText {font-size:70px; font-family:"arita-buriB"; left:50%; top:450px; color:rgba(150,150,150,0.1);}
        #content_0_sub .teaIngr .text {width:500px; font-family:"arita-buriL"; left:50%; top:500px; text-align:center; margin-left:-250px; line-height:27px; font-size:14px; }
        #content_0_sub .teaIngr .ingr {width:200px; right:35%}
				#content_0_sub .teaIngr .item {width:300px; left:50%; margin-left:-60px; }

		#content_0_sub_hover {width:100%; height:500px; position:relative; margin:0 auto 100px;  padding-bottom:200px; }
			#content_0_sub_hover .teaImg {width:200px; position:absolute; right:10%; bottom:100px; transform:translate3d(0,-30%,0); opacity:0; transition:all 1s ease-in-out;}
				#content_0_sub_hover .teaImg img {width:100%;}
			#content_0_sub_hover .ment {font-size:18px; font-family:"arita-buriL"; position:absolute; right:65%; bottom:60%; opacity:0; transform:translatex(0px); transition:all 1s ease-in-out .5s;}
      #content_0_sub_hover .mentEng {position:absolute; right:43%; bottom:61%; color:rgba(150,150,150,0.2); font-size:30px; font-family:"arita-buriL"; opacity:0; transform:translatex(0px); transition:all 1s ease-in-out;}

      #content_0_sub_hover:hover .ment, #content_0_sub_hover:hover .mentEng{opacity:1; transform:translatex(10px);}
    /* ########### content_1 ########## */
      #content_1 {width:100%; background-color:#F6F6F6; margin:0 auto;  }
        #content_1 h3 {color:#fff;}

        #hotMenu {width:100%; border-radius:80px 0 0 0; background-color:#3d3d3f; margin:0 auto; }
		  #hotMenunav {width:300px; height:1px;  margin:0 auto; position:relative;}
			#hotMenunav span {width:75px; height:1px; position:absolute; background-color:#b3ccb3; left:0; top:0; transition:left .5s ease-in-out;}

          #hotMenuMenu {width:300px; overflow:hidden; margin:0 auto; padding-bottom:10px;}
           #hotMenuMenu li {width:75px; float:left; line-height:40px; text-align:center; font-weight:100;}
              #hotMenuMenu li a {color:#fff; height:40px; font-family:"arita_dodum-Light"; display:block; padding:0 10px;}
            #hotMenuMenu li.selected a {color:#b3ccb3;}
            #hotMenuMenu .img {width:300px; margin:0 auto; padding-bottom:100px; }

          #hotMenuVideoWrap {width:300px;  margin:0 auto; padding-bottom:100px;  overflow:hidden; }
          #hotMenuVideo {width:1280px; transition:all .5s ease-in-out; }
          #hotMenuVideo:after {content:""; display:block; clear:both;}
            #hotMenuVideo li {width:300px; float:left; margin:0 10px; }
            #hotMenuVideo li:first-child {margin-left:0;}
            #hotMenuVideo li img {width:100%;}

          #content_1_sub {width:100%; color:#333; background-color:#3d3d3f; padding-bottom:150px;
              transition:background-color 2.5s ease-out; overflow:hidden;}
            #content_1_sub .lineArea {width:80px; margin:150px auto 0; position:relative;}
            #content_1_sub .line {opacity:0; width:0px; height:1px; background-color:#c1f4c1;
              transition:width .4s ease-out, opacity .4s ease-out, background-color .4s ease-in-out 1s; position:absolute; top:10px; }
            #content_1_sub h4 {width:100%; text-align:center; font-family:"arita_dodum-SemiBold"; color:#333; padding:40px 0 30px; font-weight:400; font-size:25px; transition:all .3s ease-in-out .8s; transform:translatey(-10px); opacity:0;}
            #content_1_sub .content_1_sub_intro {width:100%; text-align:center; font-family:"arita_dodum-Light"; padding-bottom:10px; font-size:13px; transition:all .3s ease-in-out 1s; transform:translatey(-10px); opacity:0;}

            #bestSeller {width:800px; overflow:hidden; margin:0 auto; padding-top:20px;}
              #bestSeller li {width:180px; margin:0 auto 9px; padding:20px 10px 10px; float:left; }
              #bestSeller li a {width:150px; display:block; font-size:13px; line-height:30px; padding:15px; color:#333;
                  text-align:center; font-weight:400; border:1px solid #fff;  /*border-radius:4px;*/ transform:translatey(-10px); opacity:0; font-family:"arita_dodum-Light";}

                #bestSeller li.bs0 a {transition:border .5s ease-in-out, transform .5s ease-in-out 1.8s, opacity .5s ease-in-out 1.8s;}
                #bestSeller li.bs1 a {transition:border .5s ease-in-out, transform .5s ease-in-out 1.9s, opacity .5s ease-in-out 1.9s;}
                #bestSeller li.bs2 a {transition:border .5s ease-in-out, transform .5s ease-in-out 2s, opacity .5s ease-in-out 2s;}
                #bestSeller li.bs3 a {transition:border .5s ease-in-out, transform .5s ease-in-out 2.1s, opacity .5s ease-in-out 2.1s;}

          #bestSeller li .imgArea {width:150px; height:140px; margin:15px auto 8px; display:block; overflow:hidden;}
            #bestSeller li .imgArea img {width:100%; transform:scale(1.1); transition:transform .5s ease-in-out;}
          #bestSeller li a .product {display:block; line-height:30px; padding-top:5px; font-family:"arita_dodum-Medium";}
          #bestSeller li a .original {text-decoration:line-through; font-size:12px; }


    /* ########### content_2 ########## */
      #content_2 {width:100%; background-color:#93ba93; margin:0 auto; transition:all 1.5s ease-in-out;}
        #quickWrap {max-width:1008px; width:100%; margin:0 auto; padding-bottom:10px;  position:relative;}
          #quick {max-width:1008px; width:100%; overflow:hidden; position:relative; }
          #quick ul {width:400%; }
			  #quick ul:after {content:""; display:block; clear:both;}
				#quick li {width:25%; float:left;}


          #quick .quickMain {width:100%; margin:100px auto; }
          #quick .quickMain:after {content:""; display:block; clear:both;}
          #quick span {width:50%; float:left;}
          #quick .quickMain .img {width:45%;  margin:0 auto; display:block; height:308px; transition:all .5s ease-in-out; overflow:hidden;}
          #quick .quickMain .img img {width:100%; transform:scale(1.1); transition:transform .5s ease-in-out;}

          #quick .descArea {width:45%; padding-right:5%; height:180px; font-size:14px; display:block; margin-top:80px;  color:#fff; position:relative; text-align:right;}
            #quick .descArea .desc {width:100%; display:block; transition:all .5s ease-in .4s; font-family:"arita_dodum-Light";}
              #quick .descArea .small {display:block; width:100%; font-size:12px; }
                  #quick .descArea .small a {color:#fff; font-family:"arita_dodum-Light";}
              #quick .descArea strong {display:block; width:100%; font-size:35px; font-weight:400; line-height:80px; font-family:"arita-buriL";}
              #quick .descArea .descMent {display:block; width:100%;}
              #quick .descArea a.direct {display:block; width:100px; height:40px; line-height:40px; position:absolute; right:12%; bottom:0; text-align:center; font-size:13px; color:#c1f4c1; border:1px solid #c1f4c1; font-family:"arita_dodum-Medium";
                transition:transform .5s ease-in 1.2s, opacity .5s ease-in 1.2s, background-color .5s ease-in; }


                #quickWrap .prev, #quickWrap .next {width:24px; height:24px; position:absolute; top:50%; margin-top:-12px;}
    						#quickWrap .prev {left:0;}
    						#quickWrap .next {right:0;}
    							#quickWrap .prev a, #quickWrap .next a {display:block; width:24px; height:24px; }
    								#quickWrap .prev a img, #quickWrap .next a img {width:100%;}


		#mobQuick {max-width:470px; width:100%; margin:0 auto; padding-bottom:50px; display:none; overflow:hidden; position:relative;}
              #mobQuick ul {width:400%; padding:50px 0;}
			  #mobQuick ul:after {content:""; display:block; clear:both;}
      				#mobQuick li {width:25%; float:left;}
                #mobQuick span {width:100%; }
      		  #mobQuick .mobQuickMain {width:100%; margin:0 auto; }
				#mobQuick .mobQuickMain .descArea {width:94%; margin:0 auto; display:block; font-size:14px; color:#fff; }
					#mobQuick .mobQuickMain .descArea .img {width:100%; height:200px; overflow:hidden; display:block; margin-bottom:10px; }
						#mobQuick .mobQuickMain .descArea .img img {width:100%; }
					#mobQuick .descArea .desc {display:block; font-family:"arita_dodum-Light";}
						#mobQuick .descArea .small {font-size:11px;}
							#mobQuick .descArea .small a {color:#fff; font-family:"arita_dodum-Light";}
						#mobQuick .descArea strong {width:100%; display:block; font-size:20px; line-height:50px; font-weight:400; font-family:"arita-buriL";}
						 #mobQuick .descArea .descMent {display:block; width:100%; font-size:12px; line-height:20px;}

                  #mobQuick .descArea a.direct {display:block; width:100px; height:40px; line-height:40px; text-align:center; font-size:13px; color:#c1f4c1; border:1px solid #c1f4c1;  font-family:"arita_dodum-Medium";
                 transition:transform .5s ease-in .3s, opacity .5s ease-in .5s; position:absolute; right:3%; bottom:50px;}


   /* ############# content_2_sub ###########  */
 	  #content_2_sub {width:100%; margin:0 auto; position:relative;}
    #content_2_sub .videoArea {width:100%; margin:0 auto; overflow:hidden;}
 		#content_2_sub .videoArea #mainVideo {width:100%; height:100%; background-repeat:no-repeat; background-position:center; background-size:auto 100%; background-image:url("img/brand_c0.jpg"); }
      #content_2_sub .con_2_sub_p0, #content_2_sub .con_2_sub_p1 {width:200px; padding:40px; word-wrap:break-word; position:absolute;  font-size:13px; font-family:"arita_dodum-Light"; border:1px solid #fff; color:#fff; z-index:8; line-height:25px; transform:translatey(50px);  }
        #content_2_sub .con_2_sub_p0 {right:15%; top:10px; transition:all 1s ease-in-out;}
        #content_2_sub .con_2_sub_p1 {left:10%; top:18%; transition:all 1s ease-in-out 1s;}
        #content_2_sub .con_2_sub_p2 {width:100%; padding:900px 0 350px; font-size:13px; font-family:"arita-buriL"; color:#666; line-height:25px; }
          #content_2_sub .con_2_sub_p2 span {display:block; width:100%; text-align:center;}
          #content_2_sub .con_2_sub_p2 span:last-child {padding-top:50px; opacity:0; transform:translatey(30px); transition:all 1s ease-in-out;}

        #content_2_sub .con_2_sub_p2 .korver {font-family:"arita-buriM"; font-size:16px; line-height:40px; }

        #content_2_sub .con_2_sub_p2 .imgArea img {display:inline-block; width:150px;}

    /* ########### content_3 ########## */
    #content_3 {width:100%; height:100%; z-index:5; margin:0 auto 1px; }
      #content_3 article {width:100%; height:100%;  margin:0 auto; position:relative;}
      #content_3 article .recoAreaWrap {width:1008px; height:100%; position:relative; margin:0 auto; }
    #content_3 article .recoLeftWrap {width:50%;  height:100%; float:left;}
    #content_3 article .recoRightWrap {width:50%; height:100%; float:left; position:relative; overflow:hidden;}
    #content_3 article .recoAreaWrap:after {content:""; display:block; clear:both;}

      #content_3 article .leftImgArea {width:350px; height:100%; position:relative;}
        #content_3 article .imgBg {width:350px; height:306px; background-color:rgba(250,250,250,0.3); position:absolute; left:10px; top:41%; }
        #content_3 article .imgArea_c_3 {width:100%; height:306px; position:absolute; left:10px; top:40%;}
          #content_3 article .imgArea_c_3 img {width:100%; }

      #content_3 article .recoRightWrap h4 {width:90%; padding-left:10%; position:absolute; right:0; top:40%; font-weight:400; font-family:"arita_dodum-Medium"; color:#dcf0ad;}
      #content_3 article .recoRightWrap .teaDesc {width:90%; position:absolute; right:10px; top:42%; font-family:"arita_dodum-Light"; font-size:14px; line-height:30px; color:#fff; padding-left:10%;}
        #content_3 article .recoRightWrap .teaDesc .teaName {font-style:normal; font-family:"arita-buriSB"; font-size:32px; line-height:50px; padding:20px 0; color:#fff; }
        #content_3 article .recoRightWrap .teaDesc a {display:block; margin-top:50px; width:100px; height:40px; text-align:center; line-height:40px; font-size:13px; color:#dcf0ad; border:1px solid #dcf0ad; transition:all .5s ease-in-out;}
      #content_3 article .recoRightWrap .realTeaArea {width:100%; overflow:hidden; position:absolute; right:0; bottom:0;}
        #content_3 article .recoRightWrap .realTeaArea img {width:100%;  transform:translate(-50px,0px);}

    /* ########### content_4 ########## */
      #content_4 {width:100%; height:470px; overflow:hidden; background-color:#fff; background-image:url("img/event.jpg"); background-repeat:no-repeat; background-size:cover; background-position:center top; background-attachment:fixed; }
        #content_4 h3 {opacity:0; transform:translatey(-20px); margin-top:50px; transition:all .4s ease-in-out;}
		    #content_4 h3 a {font-size:25px; font-weight:400; color:#fff;}
        #content_4 p.desc {width:300px; height:99px; color:#fff; border-top:1px solid #fff; font-family:"arita_dodum-Medium"; text-align:center; margin:0 auto; font-size:13px; font-weight:100; padding-top:20px; padding-bottom:85px; transition:all .5s ease-in-out .3s; opacity:0; transform:translatey(-20px);}
          #content_4 p.desc .date {font-size:14px; line-height:45px;}

    /* ########### content_5 ########## */
      #content_5 {width:100%; margin:0 auto 15px; }
        #content_5 p {width:100%; text-align:center; margin:0 auto; font-size:14px; font-family:"arita_dodum-Medium"; color:#999;  }
          #content_5 p a {display:block; width:150px; padding:10px 10px; border:1px solid #333; color:#333; font-size:13px;  margin:20px auto 30px; text-align:center; transition:all .3s ease-in-out;}
        #content_5_videoArea {width:1008px; height:1100px; margin:0 auto; position:relative; }
        .smallVideoArea {width:100%; height:100%; margin:10px auto 0; }
          .smallVideoArea ul {width:100%; height:100%;}
            .smallVideoArea ul li {width:337px; position:absolute; z-index:4;}
              #video0 {left:0; top:0;}
              #video1 {left:337px; top:0;}
              #video2 {left:674px; top:0;}

              #video3 {left:0; top:337px;}
              #video4 {left:337px; top:337px;}
              #video5 {left:674px; top:337px;}

              #video6 {left:0; top:674px;}
              #video7 {left:337px; top:674px;}
              #video8 {left:674px; top:674px;}
              .smallVideoArea ul li a {display:block; width:334px; height:334px; overflow:hidden;}
                .smallVideoArea ul li a img {width:334px; height:334px; transform:scale(1); transition:transform .5s ease-in-out;}
            .smallVideoAreaBrick {width:100%; height:100%; position:absolute; left:0; top:0; }
            .smallVideoAreaBrick ul li {width:334px; height:334px; position:absolute; z-index:2; border-right:3px solid #fff; border-bottom:3px solid #fff;}
            .smallVideoAreaBrick ul .right {border-right:0;}
            .smallVideoAreaBrick ul .bottom {border-bottom:0;}
            #bri0 {left:0; top:0;}
            #bri1 {left:337px; top:0;}
            #bri2 {left:674px; top:0;}

            #bri3 {left:0; top:337px;}
            #bri4 {left:337px; top:337px;}
            #bri5 {left:674px; top:337px;}

            #bri6 {left:0; top:674px;}
            #bri7 {left:337px; top:674px;}
            #bri8 {left:674px; top:674px;}

        #bigVideoArea {width:1008px; height:1008px; position:absolute; left:0; top:0; z-index:0; background-color:#333; }
          #bigVideo {width:100%; height:100%; background-repeat:no-repeat; background-size:100%; background-position:center; position:absolute; left:0; top:0; z-index:0; opacity:0.3; }




        #interesting img, #content_1 img, #content_2 img {width:100%;} /* footer속 img태그를 제외한 모든 img태그에 적용 */



    /* ############ 기능 ################ */


	#content_0_sub_hover:hover .teaImg{transform:translate3d(0,0,0); opacity:1;}


    #bestSeller li:hover a {border:1px solid #3d3d3f;}
    #bestSeller li:hover a img {transform:scale(1.2);}



    #quick .quickMain .img:hover img {transform:scale(1.13);}
	  #quick .descArea a.direct:hover, #quick .descArea a.direct:focus {background-color:#c1f4c1; color:#669966;}


	  #hotMenu li a:hover, #hotMenu li a:focus {color:#b3ccb3;}


    #content_2_sub .con_2_sub_p2:hover span:last-child {opacity:1; transform:translatey(0px);}



    #content_3:hover .leafArea {opacity:1; transform:rotate(180deg) translatex(10px);}
    /*#content_3 article:hover .imgBg {transform:translate(0,0);}*/
    #content_3 article .recoRightWrap .teaDesc a:hover, #content_3 article .recoRightWrap .teaDesc a:focus {background-color:#669966; color:#c1f4c1;}
    #content_4:hover h3, #content_4:hover p.desc{opacity:1; transform:translatey(0);}



    #content_5 p a:hover, #content_5 p a:focus {background-color:#669966; color:#fff; border:1px solid #669966;}



    /* ############## 공통 ################# */
      h3 {width:100%; height:50px; margin:0 auto; color:#666; font-size:20px; font-family:"arita_dodum-Light"; text-align:center; padding:100px 0 25px; font-weight:400; }
      h3 .green {font-size:22px; color:#669966;}


    /* ########## 스마트폰 세로 버전 ####### */
      @media all and (min-width:320px) and (max-width:480px) {

		/* visual 영역 */
        #visual {height:900px;}
          #visual div.text {font-size:13px; }
          #visual div.text strong {width:100%;  font-size:25px; line-height:50px; display:block; opacity:1; transition:none;}
          #visual div.text .subtitle { transition:none; opacity:1;}
            #visual .toBottom a {width:35px;}



        #hotMenuMenu li a {font-size:13px;}

        #content_1_sub h4 {font-size:20px; padding:30px 0 20px;}
        #content_1_sub .content_1_sub_intro {width:70%; padding:0 15% 10px; line-height:25px; }


        #bestSeller {width:300px; }
          #bestSeller li {width:145px; padding:20px 0 10px; margin-right:10px;}
          #bestSeller li.rightbs {margin-right:0;}

          #bestSeller li a {width:130px; padding:5px; }
          #bestSeller li .imgArea {width:120px; height:123px; }

          #quick {display:none; overflow:hidden;}
            #quick .prev, #quick .next {top:23%;}
          #mobQuick {display:block;}

          #content_2_sub .con_2_sub_p2  {width:90%; padding: 900px 5% 150px;  font-size:11px; line-height:21px; }
            #content_2_sub .con_2_sub_p2 .korver {font-size:13px; line-height:25px; }
          #content_2_sub .con_2_sub_p2 .imgArea img {width:90px;}


          #content_3 article .recoAreaWrap {width:300px;}

            #content_3 article .recoLeftWrap {float:none;  width:70%; height:50%; margin:0 auto; }
            #content_3 article .recoRightWrap {float:none; width:70%; height:50%; margin:0 auto; }
            #content_3 article .recoRightWrap .realTeaArea img {width:100%;  transform:translate(0px,0px);}

            #content_3 article .leftImgArea {width:100%; height:100%; position:relative;}
              #content_3 article .imgBg {width:100%; height:180px; background-color:rgba(250,250,250,0.3); position:absolute; left:10px; top:41%; }
              #content_3 article .imgArea_c_3 {width:100%; height:180px; position:absolute; left:10px; top:40%;}
                #content_3 article .imgArea_c_3 img {width:100%; }

            #content_3 article .recoRightWrap h4 {position:static; width:100%; text-align:center; padding-left:0; padding-top:20px; font-size:12px; }
            #content_3 article .recoRightWrap .teaDesc .teaName { font-size:20px; line-height:40px; padding:20px 0;}
            #content_3 article .recoRightWrap .teaDesc {position:static; width:100%; padding-left:0; text-align:center; font-size:13px; line-height:25px;}
            #content_3 article .recoRightWrap .teaDesc a {margin: 30px auto 0;}

            #content_4 {background-attachment:inherit;}


            #content_5 p {font-size:12px; }
              #content_5 p a {font-size:12px; }
          #content_5_videoArea {width:300px; height:310px;}
          .smallVideoArea ul li {width:101px }
          #video0 {left:0; top:0;}
          #video1 {left:101px; top:0;}
          #video2 {left:202px; top:0;}

          #video3 {left:0; top:101px;}
          #video4 {left:101px; top:101px;}
          #video5 {left:202px; top:101px;}

          #video6 {left:0; top:202px;}
          #video7 {left:101px; top:202px;}
          #video8 {left:202px; top:202px;}
          .smallVideoArea ul li a {display:block; width:100%; height:101px; }
            .smallVideoArea ul li a img {width:98px; height:98px;}
          .smallVideoAreaBrick ul li {width:98px; height:98px;}
          #bri0 {left:0; top:0;}
          #bri1 {left:101px; top:0;}
          #bri2 {left:202px; top:0;}

          #bri3 {left:0; top:101px;}
          #bri4 {left:101px; top:101px;}
          #bri5 {left:202px; top:101px;}

          #bri6 {left:0; top:202px;}
          #bri7 {left:101px; top:202px;}
          #bri8 {left:202px; top:202px;}

          #bigVideoArea {width:300px; height:300px;}



        h3 {font-size:14px;}
        h3 .green {font-size:17px;}

      }

	/* ########## 스마트폰 가로 버전 ####### */
      @media all and (min-width:481px) and (max-width:767px) {

		/* visual 영역 */

		#visual {height:900px; }
      #visual div.text {font-size:14px;}
      #visual div.text strong {font-size:24px; line-height:50px;}
      h3 {font-size:16px; }


  /*
		#hotMenu {height:400px;  position:relative; }
			#hotMenu h3 {width:180px; padding:0; text-align:left; position:absolute; right:50%; top:100px; }

		  #hotMenuMenu {width:77px; overflow:hidden; float:none; margin:0; padding:0;
		  position:absolute; right:50%; top:160px; }
           #hotMenuMenu li {width:75px; height:35px; float:none; line-height:35px; text-align:center; font-weight:100;}
              #hotMenuMenu li a {padding:0; font-size:15px;}
            #hotMenuMenu li.selected a {height:30px; color:#b3ccb3; border-top:none; border-right:2px solid #b3ccb3;}
            #hotMenuMenu .img {width:300px; margin:0 auto; padding-bottom:100px; }

          #hotMenuVideoWrap {width:180px; position:absolute; left:57%; top:50px; margin:0 auto 100px; overflow:hidden; }
          #hotMenuVideo {width:1280px;}
          #hotMenuVideo:after {content:""; display:block; clear:both;}
            #hotMenuVideo li {width:180px; float:left; margin:0 10px; }
				#hotMenuVideo li video {width:100%;}

 */

		#bestSeller {width:450px; }
          #bestSeller li {width:220px; padding:20px 0 10px; margin-right:10px;}
          #bestSeller li.rightbs {margin-right:0;}

          #bestSeller li a {width:208px; padding:5px; }
          #bestSeller li .imgArea {width:190px; height:123px; }

			#quick {display:none;}
			#mobQuick {display:block;}
      #content_3 article .recoAreaWrap {width:300px;}

        #content_3 article .recoLeftWrap {float:none;  width:70%; height:50%; margin:0 auto; }
        #content_3 article .recoRightWrap {float:none; width:70%; height:50%; margin:0 auto; }
        #content_3 article .recoRightWrap .realTeaArea img {width:100%;  transform:translate(0px,0px);}

        #content_3 article .leftImgArea {width:100%; height:100%; position:relative;}
          #content_3 article .imgBg {width:100%; height:180px; background-color:rgba(250,250,250,0.3); position:absolute; left:10px; top:41%; }
          #content_3 article .imgArea_c_3 {width:100%; height:180px; position:absolute; left:10px; top:40%;}
            #content_3 article .imgArea_c_3 img {width:100%; }

        #content_3 article .recoRightWrap h4 {position:static; width:100%; text-align:center; padding-left:0; padding-top:20px; font-size:12px; }
        #content_3 article .recoRightWrap .teaDesc .teaName { font-size:20px; line-height:40px; padding:20px 0;}
        #content_3 article .recoRightWrap .teaDesc {position:static; width:100%; padding-left:0; text-align:center; font-size:13px; line-height:25px;}
        #content_3 article .recoRightWrap .teaDesc a {margin: 30px auto 0;}

			#content_4 {height:300px;}
				#content_4 h3 {padding-top:30px; }


        #content_5_videoArea {width:450px; height:450px;}
        .smallVideoArea ul li {width:151px }
        #video0 {left:0; top:0;}
        #video1 {left:151px; top:0;}
        #video2 {left:302px; top:0;}

        #video3 {left:0; top:151px;}
        #video4 {left:151px; top:151px;}
        #video5 {left:302px; top:151px;}

        #video6 {left:0; top:302px;}
        #video7 {left:151px; top:302px;}
        #video8 {left:302px; top:302px;}
        .smallVideoArea ul li a {display:block; width:100%; height:151px; }
          .smallVideoArea ul li a img {width:148px; height:148px;}
        .smallVideoAreaBrick ul li {width:148px; height:148px;}
        #bri0 {left:0; top:0;}
        #bri1 {left:151px; top:0;}
        #bri2 {left:302px; top:0;}

        #bri3 {left:0; top:151px;}
        #bri4 {left:151px; top:151px;}
        #bri5 {left:302px; top:151px;}

        #bri6 {left:0; top:302px;}
        #bri7 {left:151px; top:302px;}
        #bri8 {left:302px; top:302px;}

        #bigVideoArea {width:450px; height:450px;}
	}

  /* ##### 태블릿 ##### */
  @media all and (min-width:768px) and (max-width:1024px) {

	#content_0_sub_hover .teaImg {width:200px; }
	/* bestseller */
    #bestSeller {width:450px; }
          #bestSeller li {width:220px; padding:20px 0 10px; margin-right:10px;}
          #bestSeller li.rightbs {margin-right:0;}

          #bestSeller li a {width:208px; padding:5px; }
          #bestSeller li .imgArea {width:190px; height:123px; }

    #lang {display:none;}
    #quickWrap {max-width:760px; }
        #quick {max-width:760px;}
          #quick .quickMain .img {height:200px;  }
          #quick .descArea {width:41%; height:200px; padding-right:3%; padding-left:6%; line-height:25px; margin-top:0; font-size:12px; }
            #quick .descArea strong {width:100%; padding:0; font-size:25px; line-height:50px; }
            #quick .descArea a.direct {right:5%;}
            #quickWrap .prev, #quickWrap .next {top:45%;}

        #mobQuick {display:none;}
        #content_3 article .leftImgArea {width:350px; height:100%; position:relative;}
          #content_3 article .imgBg {width:350px; height:200px; background-color:rgba(250,250,250,0.3); position:absolute; left:10px; top:41%; }
          #content_3 article .imgArea_c_3 {width:100%; height:200px; overflow:hidden; position:absolute; left:10px; top:40%;}
            #content_3 article .imgArea_c_3 img {width:100%; }

        #content_3 article .recoAreaWrap {width:700px;}
          #content_3 article .recoRightWrap {float:none; width:70%; height:50%; margin:0 auto; }
          #content_3 article .recoLeftWrap {float:none;  height:50%; margin:0 auto; }
          #content_3 article .recoRightWrap .realTeaArea li {text-align:center;}
          #content_3 article .recoRightWrap .realTeaArea img {width:200px;  transform:translate(0px,0px);}

          #content_3 article .recoRightWrap h4 {position:static; width:100%; text-align:center; padding-left:0; padding-top:40px; font-size:13px; }
          #content_3 article .recoRightWrap .teaDesc .teaName { font-size:30px; line-height:70px; padding:30px 0;}
          #content_3 article .recoRightWrap .teaDesc {position:static; width:100%; padding-left:0; text-align:center; font-size:15px; line-height:28px;}
          #content_3 article .recoRightWrap .teaDesc a {margin: 30px auto 0;}

          #content_5_videoArea {width:750px; height:750px;}
          .smallVideoArea ul li {width:251px }
          #video0 {left:0; top:0;}
          #video1 {left:251px; top:0;}
          #video2 {left:502px; top:0;}

          #video3 {left:0; top:251px;}
          #video4 {left:251px; top:251px;}
          #video5 {left:502px; top:251px;}

          #video6 {left:0; top:502px;}
          #video7 {left:251px; top:502px;}
          #video8 {left:502px; top:502px;}
          .smallVideoArea ul li a {display:block; width:100%; height:251px; }
            .smallVideoArea ul li a img {width:248px; height:248px;}
          .smallVideoAreaBrick ul li {width:248px; height:248px;}
          #bri0 {left:0; top:0;}
          #bri1 {left:251px; top:0;}
          #bri2 {left:502px; top:0;}

          #bri3 {left:0; top:251px;}
          #bri4 {left:251px; top:251px;}
          #bri5 {left:502px; top:251px;}

          #bri6 {left:0; top:502px;}
          #bri7 {left:251px; top:502px;}
          #bri8 {left:502px; top:502px;}

          #bigVideoArea {width:750px; height:750px;}

  }






  </style>
 </head>

 <body>
  <div id="wrap">
  	<header id="header">
      <div id="lHeader">
        <h1>
          <a href="index.html" title="osulloc">
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
<?php } echo"<meta http-equiv='Refresh' content='600; url=logout.php'/>";?>
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
<?php } echo"<meta http-equiv='Refresh' content='600; url=logout.php'/>";?>
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
  		<section id="visual">
  			<h2>비주얼 영역</h2>
  			<div class="text">
			    <strong>Jeju Osulloc,</strong>
				<span class="subtitle">우리 차의 역사와 문화를 알리다.</span>
		    </div>
			<div class="toBottom">
				<a href="#" title="to bottom"><img src="img/bottomBtn.png" alt="to bottom"/></a>
			</div>
  		</section>
  		<section id="content_0">
  			<h2>오설록에 대한 간단한 소개</h2>
			<h3>잎에서부터 시작된, <span class="green">오설록</span>.</h3>
			<div id="interesting">
				<div class="dropImgArea">
				  <p class="dropImg">
					   <img src="img/leaf.png" alt="떨어지는 잎"/>
				  </p>
				  <p class="cupImg">
					   <img src="img/whitecup.png" alt="white cup"/>
				  </p>
				</div>
			</div>
			<div class="scroll">
				<p>
					<img src="img/icon_scroll.gif" alt="scroll"/>
				</p>
			</div>
  		</section>
		<section id="content_0_subWrap">
			<h2>제주 오설록 sub</h2>
			<div id="content_0_sub">
				<div class="teaIngr">
          <p class="item">
						<img src="img/item.png" alt="item"/>
					</p>
					<p class="ingr">
						<img src="img/ingred.png" alt="ingredient"/>
					</p>
          <p class="largeText">
            Osulloc,
          </p>
          <p class="text">
            내면을 아름답게 가꾸고 일상에 삶의 멋을 더하며, <br/>
            관계를 따뜻하게 이어주는 가치있는 쉼.
          </p>
				</div>
				<div id="content_0_sub_hover">
					<p class="teaImg">
						<img src="img/tea.png" alt="tea"/>
					</p>
					<p class="ment">
						차와 제주가 선사하는 삶의 아름다움.
					</p>
          <p class="mentEng">
          The beauty of life provided by tea and Jeju.
          </p>
				</div>
			</div>
		</section>
  		<section id="content_1">
  			<h2>인기있는 메뉴</h2>
			<article id="hotMenu">
				<h3><span class="green">오설록</span>의 맛과 향기</h3>
				<p id="hotMenunav">
					<span></span>
				</p>
				<ul id="hotMenuMenu">
					<li class="selected">
						<a href="#none" title="Tea">Tea</a>
					</li>
					<li>
						<a href="#none" title="Ade">Ade</a>
					</li>
					<li>
						<a href="#none" title="Latte">Latte</a>
					</li>
					<li>
						<a href="#none" title="Ofredo">Ofredo</a>
					</li>
				</ul>
        <div id="hotMenuVideoWrap">
				  <ul id="hotMenuVideo">
					<li class="menu0">
            <img src="img/sejak.png" alt="tea"/>
            <!--
					  <video controls width="300">
						 <source src="video/tea1.mp4" type="video/mp4"/>
					  </video>
            -->
					</li>
					<li class="menu1">
            <img src="img/ade.png" alt="teaade"/>
            <!--
					  <video controls width="300">
						  <source src="video/teaade1.mp4" type="video/mp4"/>
					  </video>
          -->
					</li>
					<li class="menu2">
            <img src="img/latte.png" alt="tealatte"/>
            <!--
					  <video controls width="300">
						  <source src="video/tealatte1.mp4" type="video/mp4"/>
					  </video>
          -->
					</li>
					<li class="menu3">
            <img src="img/ofredo.png" alt="ofredo"/>
            <!--
					  <video controls width="300">
						  <source src="video/ofredo1.mp4" type="video/mp4"/>
					  </video>
          -->
					</li>
				  </ul>
				</div>
			</article>
			<article id="content_1_sub">
				<p class="lineArea">
				  <span class="line"></span>
				</p>
			  <h4>Best Seller</h4>
			  <p class="content_1_sub_intro">제주 오설록 티 카페에서 큰 사랑을 받고 있는 메뉴들을 소개합니다.</p>
			  <ul id="bestSeller">
				  <li class="bs0">
						  <a href="sub1_7.php" title="녹차 오프레도">
					  <span class="imgArea">
							<img src="img/m2_0.png" alt="녹차 오프레도"/>
					  </span>
					  <span class="product">녹차 오프레도</span>
  					  7,500원
  				  </a>
  				</li>
  				<li class="bs1 rightbs">

  				  <a href="sub1_3.php" title="한라봉 오프레도">
					  <span class="imgArea">
								 <img src="img/m2_1.png" alt="한라봉 오프레도"/>
					  </span>
					  <span class="product">한라봉 오프레도</span>
								<span class="original">7,500원</span>&nbsp;7,000원
  				  </a>
  				</li>
  				<li class="bs2">
  				  <a href="sub1_1.php" title="그린티 아이스크림">
					  <span class="imgArea">
								  <img src="img/m4_0.jpg" alt="그린티 아이스크림"/>
					  </span>
					  <span class="product">그린티 아이스크림</span>
					  5,000원
  				  </a>
  				</li>
  				<li class="bs3 rightbs">
    				<a href="sub1_13.php" title="롤케익">
					  <span class="imgArea">
						 <img src="img/m4_1.png" alt="롤케익"/>
					  </span>
  						<span class="product">롤케익</span>
    					5,500원, 18,000원
  				  </a>
  				</li>
			  </ul>
			</article>
  		</section>
  		<section id="content_2">
  			<h2>오설록의 즐거움</h2>
			<article id="quickWrap">
			  <h2>오설록의 즐거움</h2>
			  <div id="quick">
				  <ul>
  					<li>
  						<div class="quickMain">
  							<span class="descArea">
  								<span class="desc">
  									<span class="small"><a href="sub3.php" title="community page">커뮤니티</a> &gt; 이벤트</span>
  									<strong>여름을 준비하는 자세!</strong>
  									<span class="descMent">WATER + 20입 파우치로 6월에도 여유있는 티타임을 즐기세요.</span>
  								  </span>
  								<a class="direct" href="sub3.php" title="이벤트 바로가기">바로가기</a>
  							 </span>
  							 <span class="img">
  								<img src="img/img0_5th.jpg" alt="이벤트"/>
  							 </span>
  					  </div>
  					</li>
  					<li>
  					  <div class="quickMain">
  						<span class="descArea">
  							<span class="desc">
  								<span class="small"><a href="sub2.php" title="osulloc map">오설록 맵</a></span>
  								<strong>오설록에서의 초록빛 휴식.</strong>
  								<span class="descMent">제주 오설록에는 어떤 것들이 있을까요?</span>
  							  </span>
  							<a class="direct" href="sub2.php" title="오설록 맵 바로가기">바로가기</a>
  						</span>
  						<span class="img">
  							<img src="img/img1_5th.jpg" alt="오설록 맵"/>
  						</span>
  					  </div>
  					</li>
  					<li>
  						<div class="quickMain">
  							<span class="descArea">
  								<span class="desc">
  									<span class="small"><a href="sub1.php" title="event page">티 카페</a></span>
  										<strong>오설록의 달콤함.</strong>
  										<span class="descMent">제주 오설록 티 카페에서 판매되는 음식을 소개합니다.</span>
  									</span>
  								<a class="direct" href="sub1.php" title="오설록 티 카페 바로가기">바로가기</a>
  							</span>
  							<span class="img">
  								<img src="img/img2_5th.jpg" alt="오설록 카페 메뉴"/>
  							</span>
  						</div>
  					</li>
					<li>
  						<div class="quickMain">
  							<span class="descArea">
  								<span class="desc">
  									<span class="small"><a href="sub4.php" title="near tour page">근처 관광지</a></span>
  									<strong>오설록의 주변을 둘러보세요.</strong>
  									<span class="descMent">오설록의 근처에는 무엇이 있는지 알아볼까요?</span>
  								  </span>
  								<a class="direct" href="sub4.php" title="근처 관광지 바로가기">바로가기</a>
  							 </span>
  							 <span class="img">
  								<img src="img/img4_5th.jpg" alt="근처 관광지"/>
  							 </span>
  					  </div>
  					</li>
				  </ul>
			  </div>
			  <div id="mobQuick">
				  <ul>
					<li>
						<div class="mobQuickMain">
							<span class="descArea">
								<span class="img">
									<img src="img/img0_5th.jpg" alt="이벤트"/>
								</span>
								<span class="desc">
									<span class="small"><a href="sub3.php" title="community page">커뮤니티</a> &gt; 이벤트</span>
									<strong>여름을 준비하는 자세!</strong>
									<span class="descMent">WATER + 20입 파우치로 6월에도 여유있는 티타임을 즐기세요.</span>
								  </span>
								<a class="direct" href="sub3.php" title="이벤트 바로가기">바로가기</a>
							 </span>
					  </div>
					</li>
					<li>
					  <div class="mobQuickMain">
						<span class="descArea">
							<span class="img">
								<img src="img/img1_5th.jpg" alt="오설록 맵"/>
							</span>
							<span class="desc">
								<span class="small"><a href="sub2.php" title="osulloc map">오설록 맵</a></span>
								<strong>오설록에서의 초록빛 휴식.</strong>
								<span class="descMent">제주 오설록에는 어떤 것들이 있을까요?</span>
							  </span>
							<a class="direct" href="sub2.php" title="오설록 맵 바로가기">바로가기</a>
						</span>
					  </div>
					</li>
					<li>
						<div class="mobQuickMain">
							<span class="descArea">
								<span class="img">
									<img src="img/img2_5th.jpg" alt="오설록 카페 메뉴"/>
								</span>
								<span class="desc">
									<span class="small"><a href="sub1.php" title="event page">티 카페</a></span>
										<strong>오설록의 달콤함.</strong>
										<span class="descMent">제주 오설록 티 카페에서 판매되는 음식을 소개합니다.</span>
									</span>
								<a class="direct" href="sub1.php" title="오설록 티 카페 바로가기">바로가기</a>
							</span>
						</div>
					</li>
					<li>
						<div class="mobQuickMain">
							<span class="descArea">
								<span class="img">
									<img src="img/img4_5th.jpg" alt="근처 관광지"/>
								</span>
								<span class="desc">
									<span class="small"><a href="sub4.php" title="near tour page">근처 관광지</a></span>
										<strong>오설록의 주변을 둘러보세요.</strong>
										<span class="descMent">오설록의 근처에는 무엇이 있는지 알아볼까요?</span>
									</span>
								<a class="direct" href="sub4.php" title="근처 관광지 바로가기">바로가기</a>
							</span>
						</div>
					</li>
				  </ul>
			  </div>
			  <div class="prev">
				<a href="#none" title="prev button"><img src="img/prev.png" alt="이전"></a>
			  </div>
			  <div class="next">
				<a href="#none" title="next button"><img src="img/next.png" alt="다음"></a>
			  </div>
			</article>
  		</section>
      <section id="content_2_sub">
        <h2>비디오 영역</h2>
        <div class="videoArea">
          <div id="mainVideo">
          </div>
          <!--
          <video id="mainVideo">
            <source src="video/bg_brandstory.mp4"/>
          </video>
        -->
        </div>
        <p class="con_2_sub_p0">
            대한민국의 프리미엄 차 브랜드 오설록(Osulloc)은 바쁜 일상 속에서도
            내면을 아름답게 가꾸고 일상에 삶의 멋을 더하며, 관계를 따뜻하게 이어주는 가치있는 쉼을 선사합니다.
        </p>
        <p class="con_2_sub_p1">
            제주 자연과 정성을 오롯이 담은 최고 품질의 차는 우리나라에 고유의 차 문화를 다시 부흥시키겠다는 오설록의 노력이 이루어낸 결실입니다.
        </p>
        <p class="con_2_sub_p2">
          <span class="korver">
            제주의 유기농 녹차로, 내면과 외면의 아름다움과 건강을 경험해보세요.
          </span>
          <span class="engver">
          Experience and deeply nourish your inner and outer beauty and health,<br/>
          from the idyllic Jeju Island's healing organic green tea.
        </span>
        <span class="imgArea">
          <img src="img/now3.jpg" alt="제주의 유기농 녹차로, 내면과 외면의 아름다움과 건강을 경험해보세요."/>
          <img src="img/now4.jpg" alt="제주의 유기농 녹차로, 내면과 외면의 아름다움과 건강을 경험해보세요."/>
          <img src="img/now5.jpg" alt="제주의 유기농 녹차로, 내면과 외면의 아름다움과 건강을 경험해보세요."/>
        </span>
        </p>
      </section>
      <section id="content_4">
			  <h3><a href="wrongpage.html" title="오설록 햇차 페스티벌">오설록 햇차 페스티벌</a></h3>
  			<p class="desc">
  			  차와 제주가 선사하는 삶의 아름다움을 느껴보세요.<br/>
  			  <span class="date">2018.05.15</span>
  			</p>
  		</section>
      <!-- content_3 영역은 fixed이기 때문에 container 끝난 뒤 있음. -->
      <section id="content_5">
  			<h2>SNS 속 오설록</h2>
        <h3>오설록 인스타그램.</h3>
        <p>
          SNS 속 오설록을 살펴보아요.
          <a href="https://www.instagram.com/osulloc_official/" title="오설록 인스타그램 바로가기">오설록 인스타그램 바로가기</a>
        </p>
        <div id="content_5_videoArea">
          <div class="smallVideoArea">
      			<ul>
      				<li id="video0">
    					    <a href="https://www.instagram.com/p/BdMhVBhn5R5/" title="음~ 깊은 맛에 빠져버리는 #호지차라떼 집에서 마시는 아주 간단한 방법!">
                      <img src="video/poster/main0.jpg" id="smallV0" alt="음~ 깊은 맛에 빠져버리는 #호지차라떼 집에서 마시는 아주 간단한 방법!"/>
                  </a>
      				</li>
              <li id="video1">
    					    <a href="https://www.instagram.com/p/Bbs-zBTnozB/" title="오설록 티하우스 다연님의 정성스런 손길로 만들어진 따뜻한 녹차라떼 더블샷!">
                      <img src="video/poster/main1.jpg" alt="오설록 티하우스 다연님의 정성스런 손길로 만들어진 따뜻한 녹차라떼 더블샷!" id="smallV1" />
                  </a>
      				</li>
              <li id="video2" class="right">
    					    <a href="https://www.instagram.com/p/BbBQnl_H_8t/" title="오설록 #바나나밀크티 이렇게 만들어봐요.">
                      <img src="video/poster/main2.jpg" alt="오설록 #바나나밀크티 이렇게 만들어봐요." id="smallV2"/>
                  </a>
      				</li>
              <li id="video3">
    					    <a href="https://www.instagram.com/p/BbyRrTenO2o/" title="빵에도 비스켓에도 어디든 발라 먹으면 맛있어지는 마법. #오설록녹차스프레드">
                      <img src="video/poster/main3.jpg" alt="빵에도 비스켓에도 어디든 발라 먹으면 맛있어지는 마법. #오설록녹차스프레드" id="smallV3" />
                  </a>
      				</li>
              <li id="video4">
    					    <a href="https://www.instagram.com/p/BOL9IfEDGZ7/" title="정~말 정말 달콤하고 진한 행복이 녹차 시트 위에 사르르 녹아 내리는 오설록의 크리스마스 선물. 곧 만나러 갑니다!">
                      <img src="video/poster/main4.jpg" alt="정~말 정말 달콤하고 진한 행복이 녹차 시트 위에 사르르 녹아 내리는 오설록의 크리스마스 선물. 곧 만나러 갑니다!" id="smallV4"/>
                  </a>
      				</li>
              <li id="video5" class="right">
    					    <a href="https://www.instagram.com/p/BX7HCd2HlPP/" title="청정섬 제주의 풀내음 가득한 순수한 #오설록 #녹차섬 은 가방 속 #필수템 이지요">
                      <img src="video/poster/main5.jpg" alt="청정섬 제주의 풀내음 가득한 순수한 #오설록 #녹차섬 은 가방 속 #필수템 이지요" id="smallV5"/>
                  </a>
      				</li>
              <li id="video6" class="bottom">
    					    <a href="https://www.instagram.com/p/BV9I6u9H82e/" title="향기로운 삼다연과 녹차의 맛을 거품과 함께 더욱 진~하고 풍부하게 즐길 수 있는 오설록 '나이트로 티' 출시 ! ">
                      <img src="video/poster/main6.jpg" alt="향기로운 삼다연과 녹차의 맛을 거품과 함께 더욱 진~하고 풍부하게 즐길 수 있는 오설록 '나이트로 티' 출시 ! " id="smallV6"/>
                  </a>
      				</li>
              <li id="video7" class="bottom">
    					    <a href="https://www.instagram.com/p/BU0ye8-F5Il/" title="더운 여름, 오설록 티하우스가 추천하는 첫번째 메뉴. 상큼한 유자의 향과 깔끔한 녹차의 맛이 어우러진 '프레시 유자 그린티' :)">
                      <img src="video/poster/main7.jpg" alt="더운 여름, 오설록 티하우스가 추천하는 첫번째 메뉴. 상큼한 유자의 향과 깔끔한 녹차의 맛이 어우러진 '프레시 유자 그린티' :)" id="smallV7"/>
                  </a>
      				</li>
              <li id="video8" class="right bottom">
    					    <a href="https://www.instagram.com/p/BUMkWSMFdys/" title="꿈만같던 햇차페스티벌에서의 여유가 그리운 오늘. 오늘 밤에는 제주도의 오설록 녹차밭을 거니는 꿈을 꾸고 싶어요 :)">
                      <img src="video/poster/main8.jpg" alt="꿈만같던 햇차페스티벌에서의 여유가 그리운 오늘. 오늘 밤에는 제주도의 오설록 녹차밭을 거니는 꿈을 꾸고 싶어요 :)" id="smallV8"/>
                  </a>
      				</li>
      			</ul>
          </div>
          <div class="smallVideoAreaBrick">
      			<ul>
              <li id="bri0"></li>
              <li id="bri1"></li>
              <li id="bri2" class="right"></li>
              <li id="bri3"></li>
              <li id="bri4"></li>
              <li id="bri5" class="right"></li>
              <li id="bri6" class="bottom"></li>
              <li id="bri7" class="bottom"></li>
              <li id="bri8" class="right bottom"></li>
            </ul>
          </div>
          <div id="bigVideoArea">
              <div id="bigVideo">
              </div>
          </div>
        </div>
  		</section>

    </div>
		<section id="content_3">
			<h2>차 추천</h2>
			  <article>
          <h2>제주 난꽃향 그린티 추천</h2>
          <div class="recoAreaWrap">
            <div class="recoLeftWrap">
              <div class="leftImgArea">
                <p class="imgBg">
                </p>
                <ul class="imgArea_c_3">
                  <li class="recotea0">
                    <img src="img/c_3rd_0_2.jpg" alt="제주 난꽃향 그린 티"/>
                  </li>
                  <!-- <li class="recotea1">
                    <img src="img/c_3rd_4_0.jpg" alt="귤꽃향을 담은 우잣담"/>
                  </li>
                  <li class="recotea2">
                    <img src="img/c_3rd_5_2.jpg" alt="레드 파파야 블랙 티"/>
                  </li> -->
                </ul>
              </div>
            </div>
            <div class="recoRightWrap">
              <h4>오설록에서의 특별한 차를 소개합니다.</h4>
              <ul class="teaDesc">
                <li>
                  <em class="teaName">제주 난꽃향 그린 티</em><br/>
                  <span class="desc">제주한란의 은은향 향이 깃든 오리엔탈 녹차.</span>
                  <a href="sub1_6.php" title="제주 난꽃향 그린 티">
                    더 알아보기
                  </a>
                </li>
                <!-- <li>
                  <em class="teaName">귤꽃향을 담은 우잣담</em><br/>
                  제주 귤꽃향의 싱그러움에 감귤의 상큼함을 더한 블렌디드 티.
                </li>
                <li>
                  <em class="teaName">레드 파파야 블랙티</em><br/>
                  붉은 장미와 달콤한 파파야가 곁들여진 화려한 풍미의 홍차.
                </li> -->
              </ul>
              <ul class="realTeaArea">
                <li>
                  <img src="img/c_3rd_0_1.png" alt="제주 난꽃향 그린 티"/>
                </li>
                <!-- <li>
                  <img src="img/c_3rd_4_1.png" alt="귤꽃향을 담은 우잣담"/>
                </li>
                <li>
                  <img src="img/c_3rd_5_1.png" alt="레드 파파야 블랙 티"/>
                </li> -->
              </ul>
            </div>
          </div>
        </article>
		</section>
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
				<p class="copy">
					(주)아모레퍼시픽<br/>
					대표이사: 서경배&nbsp;&nbsp;주소: 서울특별시 용산구 한강대로 100(한강로2가)&nbsp;&nbsp;사업자등록번호: 106 86 43373<br/>
					통신판매업신고번호:2017 서울용산 1308호&nbsp;&nbsp;호스팅제공자: (주)아모레퍼시픽<br/>
					<b>&copy; 1979-2017 AMOREPACIFIC. ALL Rights Reserved, Yoon Ji-eun</b>
				</p>
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
      visual = jQuery("#visual");
      visualH = jQuery("#visual").height();
    // height가 window의 100%를 차지해야 하는 것들
    jQuery("#content_2_sub .videoArea").css({"height":jQuery(window).height()});

  	// visual의 높이 이후로 header 변화
		jQuery(window).scroll(function(){
			var nowScroll = jQuery(document).scrollTop();
			console.log(nowScroll);


			if(nowScroll >= visualH){
				jQuery("#header").css({"top":"-35px"});
				jQuery("#header h1, #header h1 a").css({"width":"70px","height":"23px","top":"10px"});
				jQuery("#mainInfo").css({"top":"38px"});
				jQuery("#mobGnbWrap").slideUp(500);
				jQuery("#mobHeader").css({"height":"50px"});
				jQuery("#mobQuickMenu").css({"right":"10px"});
			}
			else {
				jQuery("#header").css({"top":"0"});
				jQuery("#header h1, #header h1 a").css({"width":"100px","height":"40px","top":"0px"});
				jQuery("#mainInfo").css({"top":"0"});
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


		// visual에 마우스를 올리면 텍스트가 뜸.
		jQuery("#visual").bind("mouseover focusin",function(){
			jQuery("#visual:hover .text strong, #visual:hover .text .subtitle").css({"opacity":"1"});
		});

		// 나뭇잎이 떨어지는 효과 -> dropImg가 어느 지점에서부터 중간에 fix되고 스크롤하다가 컵이 나타나 컵과 충돌이 일어나면 컵 영상이 재생됨. 잎은 opacity 0으로
		// jQuery("#interesting").mouseover(function(){
		// 	jQuery("#interesting .dropImg").css({"top":"580px","opacity":"0","transition":"all 5s"});
		// });

		/*
		jQuery(".cupImg").click(function(){
			$(this).html("<video><source src='video/whitecup.mp4'/></video>")

		});
		*/




		// 나뭇잎 원상복귀

		jQuery("#visual, #content_1").mouseover(function(){
			jQuery("#interesting .dropImg").css({"transition":"none","opacity":"1"});
		});
		// 오설록의 맛과 향기 - 영상 탭

		jQuery("#hotMenuMenu li:first").click(function(){
			jQuery("#hotMenunav span").css({"left":"0px"});
			jQuery("#hotMenuVideo").css({"marginLeft":"0"});
		});
		jQuery("#hotMenuMenu li:eq(1)").click(function(){
			jQuery("#hotMenunav span").css({"left":"75px"});
			jQuery("#hotMenuVideo").css({"marginLeft":"-320px"});
		});
		jQuery("#hotMenuMenu li:eq(2)").click(function(){
			jQuery("#hotMenunav span").css({"left":"150px"});
			jQuery("#hotMenuVideo").css({"marginLeft":"-640px"});
		});
		jQuery("#hotMenuMenu li:last").click(function(){
			jQuery("#hotMenunav span").css({"left":"225px"});
			jQuery("#hotMenuVideo").css({"marginLeft":"-960px"});
		});

		jQuery("#hotMenuMenu li").click(function(){
			jQuery("#hotMenuMenu li").removeClass("selected");
			jQuery(this).addClass("selected");
		});

		// content_1_sub 영역에 닿으면 bestseller 생기도록

		jQuery("#content_1_sub").mouseover(function(){
			jQuery(this).css({"backgroundColor":"#fff"});
			jQuery("#content_1_sub h4, .content_1_sub_intro").css({"transform":"translatey(0)","opacity":"1"});
			jQuery(".line").css({"width":"80px","opacity":"1","backgroundColor":"#669966"});
			jQuery("#bestSeller li a").css({"transform":"translatey(0)","opacity":"1"});
		});

    //content_2 영역에서 슬라이딩 윈도우
    jQuery("#quick ul").prepend(jQuery("#quick li:last"));
    jQuery("#quick ul").css({"marginLeft":"-100%"});
    jQuery("#mobQuick ul").prepend(jQuery("#mobQuick li:last"));
    jQuery("#mobQuick ul").css({"marginLeft":"-100%"});

    var colorBox = ["#638950", "#60968c", "#c1ac7c", "#508589", "#728950", "#50895a", "#896e50", "#77a377","#859e2a","#999966"];

    jQuery(".next").click(function(){
      var index = Math.floor(Math.random()*10)%10;
      jQuery("#content_2").css({"backgroundColor":colorBox[index]});
      jQuery("#quick ul:not(:animated)").stop().animate({"marginLeft":"-=100%"},1500,"easeOutQuart",function(){
			jQuery("#quick ul").append(jQuery("#quick li:first"));
			jQuery("#quick ul").css({"marginLeft":"-100%"});
		  });
		  jQuery("#mobQuick ul:not(:animated)").stop().animate({"marginLeft":"-=100%"},1500,"easeOutQuart",function(){
			jQuery("#mobQuick ul").append(jQuery("#mobQuick li:first"));
			jQuery("#mobQuick ul").css({"marginLeft":"-100%"});
		  });
		});

	jQuery(".prev").click(function(){
	  var index2 = Math.floor(Math.random()*10)%10;
	  jQuery("#content_2").css({"backgroundColor":colorBox[index2]});
	  jQuery("#quick ul:not(:animated)").stop().animate({"marginLeft":"+=100%"},1500,"easeOutQuart",function(){
		jQuery("#quick ul").prepend(jQuery("#quick li:last"));
		jQuery("#quick ul").css({"marginLeft":"-100%"});
	  });
    jQuery("#mobQuick ul:not(:animated)").stop().animate({"marginLeft":"+=100%"},1500,"easeOutQuart",function(){
		jQuery("#mobQuick ul").prepend(jQuery("#mobQuick li:last"));
		jQuery("#mobQuick ul").css({"marginLeft":"-100%"});
	  });
	});


    // visual 영역에서 toBottom 버튼을 누르면 content_0으로 이동
	jQuery("#visual .toBottom a").bind("click focus",function(){
    var area1 = jQuery("#content_0").offset().top;
		//jQuery("#visual .toBottom a").attr("href","#content_0");
    jQuery("html,body").animate({scrollTop:area1},500);
	});

    // 떨어지는 잎 -> 비디오 연결
    jQuery(window).scroll(function(){
      var nowScroll3 = jQuery(document).scrollTop();
      if(nowScroll3 >= visualH && nowScroll3 < 1630){
        jQuery("#content_0").css({"backgroundColor":"#F6F6F6"});
        jQuery("#content_0 h3").addClass("fixed").html("잎에서부터 시작된, <span class='green'>오설록</span>.").css({"opacity":"1"}).show();
        jQuery("#interesting .dropImg").css({"top":"280px","position":"fixed"});
        jQuery("#interesting .dropImg img").addClass("leafAni").css({"opacity":"1","transition":"opacity 0.7s ease-in"});
        jQuery("#interesting .cupImg").html("<img src='img/whitecup.png' alt='white cup'>").show();

		jQuery("#content_0 .scroll").css({"bottom":"0px"});

      }
      else if(nowScroll3 >= 1630 && nowScroll3 < 2000){
        jQuery("#content_0").css({"backgroundColor":"#F6F6F6"});
        jQuery("#content_0 h3").addClass("fixed").html("잎에서부터 시작된, <span class='green'>오설록</span>.").css({"opacity":"1"}).show();
        jQuery("#interesting .dropImg").addClass("leafAni").css({"top":"280px","position":"fixed"});
        jQuery("#interesting .dropImg img").css({"opacity":"0","transition":"opacity 1.3s ease-in"});
        jQuery("#interesting .cupImg").html("<img src='img/whitecup.png' alt='white cup'>").show();

		jQuery("#content_0 .scroll").css({"bottom":"0px"});
      }
      else if(nowScroll3 >= 2000 && nowScroll3 < 2201){
        jQuery("#content_0").css({"backgroundColor":"#F6F6F6"});
        jQuery("#interesting .dropImg img").css({"opacity":"0","transition":"none"});
        jQuery("#content_0 h3").fadeIn(500).addClass("fixed").text("컵을 클릭해보세요!").css({"opacity":"1"});
		    jQuery("#interesting .cupImg").html("<img src='img/whitecup.png' alt='white cup'>").show();

        jQuery("#interesting .cupImg").click(function(){
            jQuery(this).html("<video autoplay width='150' height='150' poster='img/whitecup.png'><source src='video/whitecup.mp4'/></video>").show(0);
        });

		jQuery("#content_0 .scroll").css({"bottom":"0px"});
      }
      else if(nowScroll3 >= 2201 && nowScroll3 < 2300){
        jQuery("#content_0").css({"backgroundColor":"#F6F6F6"});
        jQuery("#interesting .dropImg img").css({"opacity":"0","transition":"none"});
        jQuery("#content_0 h3").fadeIn(500).addClass("fixed").text("컵을 클릭해보세요!").css({"opacity":"0"});
        jQuery("#interesting .cupImg").click(function(){
            jQuery(this).html("<video autoplay width='150' height='150' poster='img/whitecup.png'><source src='video/whitecup.mp4'/></video>").show(0);
        });

		jQuery("#content_0 .scroll").css({"bottom":"-82px"});
      }
      else if(nowScroll3 < visualH) {
        jQuery("#content_0").css({"backgroundColor":"#f0f2e7"});
        jQuery("#content_0 h3").html("잎에서부터 시작된, <span class='green'>오설록</span>.").removeClass("fixed").css({"opacity":"1"}).show();
		      jQuery("#interesting .dropImg img").css({"opacity":"0","transition":"none"});

		jQuery("#content_0 .scroll").css({"bottom":"-82px"});
      }
      else {
        jQuery("#content_0").css({"backgroundColor":"#F6F6F6"});
        jQuery("#content_0 h3").html("잎에서부터 시작된, <span class='green'>오설록</span>.").css({"opacity":"0"}).hide();
        jQuery("#interesting .dropImg").css({"top":"100px","position":"absolute"});
        jQuery("#interesting .dropImg img").css({"opacity":"0","transition":"none"});
        jQuery("#interesting .cupImg").html("<img src='img/whitecup.png' alt='white cup'>").hide();

		jQuery("#content_0 .scroll").css({"bottom":"-82px"});
      }
    });
    /*
    // content_0_sub 스크롤에 따라 개체 이동
    jQuery(window).scroll(function(){
 		  var nowScroll4 = jQuery(document).scrollTop();
      if(nowScroll4 == 2200){
        jQuery("#content_0_sub .teaIngr .ingr").css({"top":"30px"});
        jQuery("#content_0_sub .teaIngr .item").css({"top":"-30px"});
      }
      else if(nowScroll4 == 3100){
        jQuery("#content_0_sub .teaIngr .ingr").css({"top":"30px"}).animate({"top":"100px"},500,"easeOutQuart");
        jQuery("#content_0_sub .teaIngr .item").css({"top":"-30px"}).animate({"top":"-100px"},500,"easeOutQuart");
      }



    });
    */


    // 차 추천 부분 고정시키기 위한 작업
    jQuery(window).scroll(function(){
 		  var nowScroll5 = jQuery(document).scrollTop();

 		  heightV = jQuery("#visual").height();
 		  heightH0 = jQuery("#content_0").height();
 		  heightH0_1 = jQuery("#content_0_subWrap").height();
 		  heightH1 = jQuery("#content_1").height();
       heightH2 = jQuery("#content_2").height();

       heightA = heightV + heightH0 + heightH0_1 + heightH1 + (heightH2)/4;
 		  heightB = heightV + heightH0 + heightH0_1 + heightH1 + heightH2;
      if (nowScroll5 < heightA) {
         jQuery("#content_2_sub .con_2_sub_p0, #content_2_sub .con_2_sub_p1").show();
         jQuery("#content_3").css({"position":"static"}).hide();
      }
      else if (nowScroll5 >= heightA && nowScroll5 < heightB){
        jQuery("#content_2_sub .con_2_sub_p0").css({"transform":"translatey(-30px)"});
        jQuery("#content_2_sub .con_2_sub_p1").css({"transform":"translatey(-30px)"});
        jQuery("#content_3").css({"position":"static"}).hide();

        jQuery("#content_2_sub .videoArea").show();
      }
 		 else if(nowScroll5 >= heightB && nowScroll5 < heightB + 200){
          jQuery("#content_2_sub .con_2_sub_p0, #content_2_sub .con_2_sub_p1").hide();

 				 jQuery("#content_3").css({"position":"fixed","left":"0","top":"0","backgroundColor":"#fff"}).stop().animate({"backgroundColor":"#818e44"}).show();

          jQuery("#content_3 article .imgBg:not(:animated)").css({"left":"10px","top":"40%"}).stop().animate({"left":"20px","top":"43%"},1000,"easeOutQuart");

          jQuery("#content_3 .recoLeftWrap .imgArea_c_3:not(:animated)").css({"left":"10px","top":"39%"}).stop().animate({"left":"0px","top":"38%"},1000,"easeOutQuart")
          jQuery("#content_3 .recoLeftWrap .imgArea_c_3 .recotea0 img").attr("src","img/c_3rd_0_2.jpg");

          jQuery("#content_3 article .recoRightWrap .teaDesc:not(:animated)").css({"right":"10px"}).delay(800).stop().animate({"right":"0px"},1000,"easeOutQuart");

          jQuery("#content_3 .recoRightWrap .teaName").text("제주 난꽃향 그린 티");
          jQuery("#content_3 .recoRightWrap .desc").text("제주한란의 은은향 향이 깃든 오리엔탈 녹차.");
          jQuery("#content_3 .recoRightWrap a").attr("href","sub1_6.html");

          jQuery("#content_3 article .recoRightWrap .realTeaArea").css({"bottom":"-10px"}).stop().animate({"bottom":"0px"},1500,"easeOutQuart");
          jQuery("#content_3 article .recoRightWrap .realTeaArea img").attr("src","img/c_3rd_0_1.png");

 			  }
       else if(nowScroll5 >= heightB + 200 && nowScroll5 < heightB + 400){
           jQuery("#content_2_sub .con_2_sub_p0, #content_2_sub .con_2_sub_p1").hide();

   				 jQuery("#content_3").css({"position":"fixed","left":"0","top":"0","backgroundColor":"#818e44"}).stop().animate({"backgroundColor":"#b5964b"}).show();

            jQuery("#content_3 article .imgBg:not(:animated)").css({"left":"10px","top":"40%"}).stop().animate({"left":"20px","top":"43%"},1000);

            jQuery("#content_3 .recoLeftWrap .imgArea_c_3:not(:animated)").css({"left":"10px","top":"39%"}).stop().animate({"left":"0px","top":"38%"},1000,"easeOutQuart")
            jQuery("#content_3 .recoLeftWrap .imgArea_c_3 .recotea0 img").attr("src","img/c_3rd_4_0.jpg");

            jQuery("#content_3 article .recoRightWrap .teaDesc:not(:animated)").css({"right":"10px"}).delay(800).stop().animate({"right":"0px"},1000,"easeOutQuart",1000);

            jQuery("#content_3 .recoRightWrap .teaName").text("귤꽃향을 담은 우잣담");
            jQuery("#content_3 .recoRightWrap .desc").text("제주 귤꽃향의 싱그러움에 감귤의 상큼함을 더한 블렌디드 티.");
            jQuery("#content_3 .recoRightWrap a").attr("href","sub1_9.html");

            jQuery("#content_3 article .recoRightWrap .realTeaArea").css({"bottom":"-10px"}).stop().animate({"bottom":"0px"},1500,"easeOutQuart");
            jQuery("#content_3 article .recoRightWrap .realTeaArea img").attr("src","img/c_3rd_4_1.png");

   			  }
       else if(nowScroll5 >= heightB + 400 && nowScroll5 < heightB + 600){
           jQuery("#content_2_sub .con_2_sub_p0, #content_2_sub .con_2_sub_p1").hide();

   				 jQuery("#content_3").css({"position":"fixed","left":"0","top":"0","backgroundColor":"#b5964b"}).stop().animate({"backgroundColor":"#b47e7e"}).show();

            jQuery("#content_3 article .imgBg:not(:animated)").css({"left":"10px","top":"40%"}).stop().animate({"left":"20px","top":"43%"},1000,"easeOutQuart");

            jQuery("#content_3 .recoLeftWrap .imgArea_c_3:not(:animated)").css({"left":"10px","top":"39%"}).stop().animate({"left":"0px","top":"38%"},1000,"easeOutQuart")
            jQuery("#content_3 .recoLeftWrap .imgArea_c_3 .recotea0 img").attr("src","img/c_3rd_5_2.jpg");

            jQuery("#content_3 article .recoRightWrap .teaDesc:not(:animated)").css({"right":"10px"}).delay(800).stop().animate({"right":"0px"},1000,"easeOutQuart",1000);

            jQuery("#content_3 .recoRightWrap .teaName").text("레드 파파야 블랙 티");
            jQuery("#content_3 .recoRightWrap .desc").text("붉은 장미와 달콤한 파파야가 곁들여진 화려한 풍미의 홍차.");

            jQuery("#content_3 .recoRightWrap a").attr("href","sub1_14.html");

            jQuery("#content_3 article .recoRightWrap .realTeaArea").css({"bottom":"-10px"}).stop().animate({"bottom":"0px"},1500,"easeOutQuart");
            jQuery("#content_3 article .recoRightWrap .realTeaArea img").attr("src","img/c_3rd_5_1.png");


   			  }
 		  else {
         jQuery("#content_2_sub .con_2_sub_p0, #content_2_sub .con_2_sub_p1").show();
 				jQuery("#content_3").css({"position":"static"}).hide();
         jQuery("#content_2_sub .videoArea").hide();
 		  }
 	  });


    // sns 속 오설록 - 비디오를 hover하면 재생되게
  /*
    jQuery("#content_2_sub").bind("mouseover focusin",function(){
  		var mainVideo = document.getElementById("mainVideo");
  		mainVideo.play();
  	});
  */
  	/*.bind("mouseout focusout",function(){
  		var mainVideo = document.getElementById("mainVideo");
  		mainVideo.pause();
  	});
  	*/

    jQuery(".smallVideoArea ul li").bind("mouseover focusin",function(){
      jQuery(".smallVideoArea ul li").css({"zIndex":"0"});
      jQuery(this).css({"zIndex":"4"});
      var num = jQuery(this).attr("id").substring(5,6);
      jQuery("#bigVideo").css({"backgroundImage":"url('video/poster/main"+num+".jpg')"});
      jQuery(this).children("a").children("img").css({"transform":"scale(1.05)"});
      /*
      jQuery("#bigVideoArea").html("<video muted id='bigVideo'><source src='video/main"+num+".mp4' type='video/mp4'/></video>").css({"zIndex":"1"});
      */
      /*
      var bigVideo = document.getElementById("bigVideo");
      bigVideo.play();
      var smallVideo = document.getElementById("smallV"+num);
      smallVideo.play();
      */
    }).bind("mouseout focusout",function(){
      jQuery(".smallVideoArea ul li").css({"zIndex":"4"});
      var num = jQuery(this).attr("id").substring(5,6);
      jQuery(".smallVideoArea ul li a img").css({"transform":"scale(1)"});
      /*
      jQuery("#bigVideoArea").html("<video muted id='bigVideo'><source src='video/main"+num+".mp4' type='video/mp4'/></video>").css({"zIndex":"0"});
      */
      /*
      var bigVideo = document.getElementById("bigVideo");
      bigVideo.pause();
      var smallVideo = document.getElementById("smallV"+num);
      smallVideo.pause();
      */
    });
    jQuery("#content_5_videoArea").mouseover(function(){
      jQuery("#bigVideoArea, #bigVideo").css({"zIndex":"1"});
    }).mouseout(function(){
      jQuery("#bigVideoArea, #bigVideo").css({"zIndex":"0"});
    });



    });

    function langClick(){
      var lang = document.getElementById("lang");
      if (lang.value == "en"){
        location.href="wrongpage.html";
      }
      else {
        location.href="index.php";
      }
    }


  </script>
  <script>
	if(window.attachEvent){alert("구형 브라우저이기 때문에 업데이트가 필요합니다."); }
  </script>
 </body>
</html>
<!--
	1920px
-->
