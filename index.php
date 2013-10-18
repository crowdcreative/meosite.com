<?php /*** begin the session ***/
			ob_start();  
			session_start();
			
?>


 
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-Type" content="text/html; charset=iso-8859-1" /> 
<title>MeoSite | Seu site feito por uma rede de profissionais criativos</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Highly unique creative theme built with Bootstrap">
<meta name="author" content="MeoSite">






<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <link href="stylesheets/ie8.css" rel="stylesheet">
    <![endif]-->

<link rel="shortcut icon" href="assets/ico/favicon.ico">

<style>
    
	@charset utf-8;

/* CSS Document */
/*
Theme Name: Renova.
Description: Unique Creative Portfolio Responsive HTML5 Theme.
Version: 1.4 - updated release
Author: Designova
Website: http://designova.net/
Credits: Design, Coding and Development by Jean P Johnson at Designova
*/


/* ===================================*/
/* TABLE OF CONTENTS: */
/* ===================================*/
/* 01 - LAYOUT INITIALIZATION */
/* 02 - HEADER & NAVIGATION */
/* 03 - COMMON ELEMENTS & STYLES */
/* 04 - PAGES & SECTIONS SETUP*/
/* 05 - INDIVIDUAL PAGES AND ELEMENTS*/
/* 06 - FOOTER*/
/* 07 - RESETS : FRAMEWORK RESETS & PLUGIN RESETS*/
/* 08 - RESPONSIVE RULES : MOBILE OPTIMIZATION*/



/* ===================================*/
/* CONTENTS: */
/* ===================================*/

/* 01 - LAYOUT INITIALIZATION */

*, *:after, *:before { -webkit-box-sizing: border-box; -moz-box-sizing: border-box; box-sizing: border-box; }
body, html { font-size: 15px; padding: 0; margin: 0; font-family: arial}

@font-face {
  font-family:'FontAwesome';
  src:url('../font/fontawesome-webfont.html');
  src:url('../font/fontawesome-webfontd41d.html?#iefix') format('embedded-opentype'),
    url('../font/fontawesome-webfont-2.html') format('woff'),
    url('../font/fontawesome-webfont-3.html') format('truetype');
  font-weight:normal;
  font-style:normal
}

[class^="fa-icon-"],[class*=" fa-icon-"]{font-family:FontAwesome;font-weight:normal;font-style:normal;text-decoration:inherit;display:inline;width:auto;height:auto;line-height:normal;vertical-align:baseline;background-image:none!important;background-position:0 0;background-repeat:repeat}[class^="fa-icon-"]:before,[class*=" fa-icon-"]:before{text-decoration:inherit;display:inline-block;speak:none}a [class^="fa-icon-"],a [class*=" fa-icon-"]{display:inline-block}.fa-icon-large:before{vertical-align:-10%;font-size:1.3333333333333333em}.btn [class^="fa-icon-"],.nav [class^="fa-icon-"],.btn [class*=" fa-icon-"],.nav [class*=" fa-icon-"]{display:inline;line-height:.6em}.btn [class^="fa-icon-"].fa-icon-spin,.nav [class^="fa-icon-"].fa-icon-spin,.btn [class*=" fa-icon-"].fa-icon-spin,.nav [class*=" fa-icon-"].fa-icon-spin{display:inline-block}li [class^="fa-icon-"],li [class*=" fa-icon-"]{display:inline-block;width:1.25em;text-align:center}li [class^="fa-icon-"].fa-icon-large,li [class*=" fa-icon-"].fa-icon-large{width:1.5625em}ul.fa-icons{list-style-type:none;text-indent:-0.75em}ul.fa-icons li [class^="fa-icon-"],ul.fa-icons li [class*=" fa-icon-"]{width:.75em}.fa-icon-muted{color:#eee}.fa-icon-border{border:solid 1px #eee;padding:.2em .25em .15em;-webkit-border-radius:3px;-moz-border-radius:3px;border-radius:3px}.fa-icon-2x{font-size:2em}.fa-icon-2x.fa-icon-border{border-width:2px;-webkit-border-radius:4px;-moz-border-radius:4px;border-radius:4px}.fa-icon-3x{font-size:3em}.fa-icon-3x.fa-icon-border{border-width:3px;-webkit-border-radius:5px;-moz-border-radius:5px;border-radius:5px}.fa-icon-4x{font-size:4em}.fa-icon-4x.fa-icon-border{border-width:4px;-webkit-border-radius:6px;-moz-border-radius:6px;border-radius:6px}.pull-right{float:right}.pull-left{float:left}[class^="fa-icon-"].pull-left,[class*=" fa-icon-"].pull-left{margin-right:.35em}[class^="fa-icon-"].pull-right,[class*=" fa-icon-"].pull-right{margin-left:.35em}.btn [class^="fa-icon-"].pull-left.fa-icon-2x,.btn [class*=" fa-icon-"].pull-left.fa-icon-2x,.btn [class^="fa-icon-"].pull-right.fa-icon-2x,.btn [class*=" fa-icon-"].pull-right.fa-icon-2x{margin-top:.35em}.btn [class^="fa-icon-"].fa-icon-spin.fa-icon-large,.btn [class*=" fa-icon-"].fa-icon-spin.fa-icon-large{height:.75em}.btn.btn-small [class^="fa-icon-"].pull-left.fa-icon-2x,.btn.btn-small [class*=" fa-icon-"].pull-left.fa-icon-2x,.btn.btn-small [class^="fa-icon-"].pull-right.fa-icon-2x,.btn.btn-small [class*=" fa-icon-"].pull-right.fa-icon-2x{margin-top:.45em}.btn.btn-large [class^="fa-icon-"].pull-left.fa-icon-2x,.btn.btn-large [class*=" fa-icon-"].pull-left.fa-icon-2x,.btn.btn-large [class^="fa-icon-"].pull-right.fa-icon-2x,.btn.btn-large [class*=" fa-icon-"].pull-right.fa-icon-2x{margin-top:.2em}.fa-icon-spin{display:inline-block;-moz-animation:spin 2s infinite linear;-o-animation:spin 2s infinite linear;-webkit-animation:spin 2s infinite linear;animation:spin 2s infinite linear}@-moz-keyframes spin{0%{-moz-transform:rotate(0deg)}100%{-moz-transform:rotate(359deg)}}@-webkit-keyframes spin{0%{-webkit-transform:rotate(0deg)}100%{-webkit-transform:rotate(359deg)}}@-o-keyframes spin{0%{-o-transform:rotate(0deg)}100%{-o-transform:rotate(359deg)}}@-ms-keyframes spin{0%{-ms-transform:rotate(0deg)}100%{-ms-transform:rotate(359deg)}}@keyframes spin{0%{transform:rotate(0deg)}100%{transform:rotate(359deg)}}.fa-icon-glass:before{content:"\f000"}.fa-icon-music:before{content:"\f001"}.fa-icon-search:before{content:"\f002"}.fa-icon-envelope:before{content:"\f003"}.fa-icon-heart:before{content:"\f004"}.fa-icon-star:before{content:"\f005"}.fa-icon-star-empty:before{content:"\f006"}.fa-icon-user:before{content:"\f007"}.fa-icon-film:before{content:"\f008"}.fa-icon-th-large:before{content:"\f009"}.fa-icon-th:before{content:"\f00a"}.fa-icon-th-list:before{content:"\f00b"}.fa-icon-ok:before{content:"\f00c"}.fa-icon-remove:before{content:"\f00d"}.fa-icon-zoom-in:before{content:"\f00e"}.fa-icon-zoom-out:before{content:"\f010"}.fa-icon-off:before{content:"\f011"}.fa-icon-signal:before{content:"\f012"}.fa-icon-cog:before{content:"\f013"}.fa-icon-trash:before{content:"\f014"}.fa-icon-home:before{content:"\f015"}.fa-icon-file:before{content:"\f016"}.fa-icon-time:before{content:"\f017"}.fa-icon-road:before{content:"\f018"}.fa-icon-download-alt:before{content:"\f019"}.fa-icon-download:before{content:"\f01a"}.fa-icon-upload:before{content:"\f01b"}.fa-icon-inbox:before{content:"\f01c"}.fa-icon-play-circle:before{content:"\f01d"}.fa-icon-repeat:before{content:"\f01e"}.fa-icon-refresh:before{content:"\f021"}.fa-icon-list-alt:before{content:"\f022"}.fa-icon-lock:before{content:"\f023"}.fa-icon-flag:before{content:"\f024"}.fa-icon-headphones:before{content:"\f025"}.fa-icon-volume-off:before{content:"\f026"}.fa-icon-volume-down:before{content:"\f027"}.fa-icon-volume-up:before{content:"\f028"}.fa-icon-qrcode:before{content:"\f029"}.fa-icon-barcode:before{content:"\f02a"}.fa-icon-tag:before{content:"\f02b"}.fa-icon-tags:before{content:"\f02c"}.fa-icon-book:before{content:"\f02d"}.fa-icon-bookmark:before{content:"\f02e"}.fa-icon-print:before{content:"\f02f"}.fa-icon-camera:before{content:"\f030"}.fa-icon-font:before{content:"\f031"}.fa-icon-bold:before{content:"\f032"}.fa-icon-italic:before{content:"\f033"}.fa-icon-text-height:before{content:"\f034"}.fa-icon-text-width:before{content:"\f035"}.fa-icon-align-left:before{content:"\f036"}.fa-icon-align-center:before{content:"\f037"}.fa-icon-align-right:before{content:"\f038"}.fa-icon-align-justify:before{content:"\f039"}.fa-icon-list:before{content:"\f03a"}.fa-icon-indent-left:before{content:"\f03b"}.fa-icon-indent-right:before{content:"\f03c"}.fa-icon-facetime-video:before{content:"\f03d"}.fa-icon-picture:before{content:"\f03e"}.fa-icon-pencil:before{content:"\f040"}.fa-icon-map-marker:before{content:"\f041"}.fa-icon-adjust:before{content:"\f042"}.fa-icon-tint:before{content:"\f043"}.fa-icon-edit:before{content:"\f044"}.fa-icon-share:before{content:"\f045"}.fa-icon-check:before{content:"\f046"}.fa-icon-move:before{content:"\f047"}.fa-icon-step-backward:before{content:"\f048"}.fa-icon-fast-backward:before{content:"\f049"}.fa-icon-backward:before{content:"\f04a"}.fa-icon-play:before{content:"\f04b"}.fa-icon-pause:before{content:"\f04c"}.fa-icon-stop:before{content:"\f04d"}.fa-icon-forward:before{content:"\f04e"}.fa-icon-fast-forward:before{content:"\f050"}.fa-icon-step-forward:before{content:"\f051"}.fa-icon-eject:before{content:"\f052"}.fa-icon-chevron-left:before{content:"\f053"}.fa-icon-chevron-right:before{content:"\f054"}.fa-icon-plus-sign:before{content:"\f055"}.fa-icon-minus-sign:before{content:"\f056"}.fa-icon-remove-sign:before{content:"\f057"}.fa-icon-ok-sign:before{content:"\f058"}.fa-icon-question-sign:before{content:"\f059"}.fa-icon-info-sign:before{content:"\f05a"}.fa-icon-screenshot:before{content:"\f05b"}.fa-icon-remove-circle:before{content:"\f05c"}.fa-icon-ok-circle:before{content:"\f05d"}.fa-icon-ban-circle:before{content:"\f05e"}.fa-icon-arrow-left:before{content:"\f060"}.fa-icon-arrow-right:before{content:"\f061"}.fa-icon-arrow-up:before{content:"\f062"}.fa-icon-arrow-down:before{content:"\f063"}.fa-icon-share-alt:before{content:"\f064"}.fa-icon-resize-full:before{content:"\f065"}.fa-icon-resize-small:before{content:"\f066"}.fa-icon-plus:before{content:"\f067"}.fa-icon-minus:before{content:"\f068"}.fa-icon-asterisk:before{content:"\f069"}.fa-icon-exclamation-sign:before{content:"\f06a"}.fa-icon-gift:before{content:"\f06b"}.fa-icon-leaf:before{content:"\f06c"}.fa-icon-fire:before{content:"\f06d"}.fa-icon-eye-open:before{content:"\f06e"}.fa-icon-eye-close:before{content:"\f070"}.fa-icon-warning-sign:before{content:"\f071"}.fa-icon-plane:before{content:"\f072"}.fa-icon-calendar:before{content:"\f073"}.fa-icon-random:before{content:"\f074"}.fa-icon-comment:before{content:"\f075"}.fa-icon-magnet:before{content:"\f076"}.fa-icon-chevron-up:before{content:"\f077"}.fa-icon-chevron-down:before{content:"\f078"}.fa-icon-retweet:before{content:"\f079"}.fa-icon-shopping-cart:before{content:"\f07a"}.fa-icon-folder-close:before{content:"\f07b"}.fa-icon-folder-open:before{content:"\f07c"}.fa-icon-resize-vertical:before{content:"\f07d"}.fa-icon-resize-horizontal:before{content:"\f07e"}.fa-icon-bar-chart:before{content:"\f080"}.fa-icon-twitter-sign:before{content:"\f081"}.fa-icon-facebook-sign:before{content:"\f082"}.fa-icon-camera-retro:before{content:"\f083"}.fa-icon-key:before{content:"\f084"}.fa-icon-cogs:before{content:"\f085"}.fa-icon-comments:before{content:"\f086"}.fa-icon-thumbs-up:before{content:"\f087"}.fa-icon-thumbs-down:before{content:"\f088"}.fa-icon-star-half:before{content:"\f089"}.fa-icon-heart-empty:before{content:"\f08a"}.fa-icon-signout:before{content:"\f08b"}.fa-icon-linkedin-sign:before{content:"\f08c"}.fa-icon-pushpin:before{content:"\f08d"}.fa-icon-external-link:before{content:"\f08e"}.fa-icon-signin:before{content:"\f090"}.fa-icon-trophy:before{content:"\f091"}.fa-icon-github-sign:before{content:"\f092"}.fa-icon-upload-alt:before{content:"\f093"}.fa-icon-lemon:before{content:"\f094"}.fa-icon-phone:before{content:"\f095"}.fa-icon-check-empty:before{content:"\f096"}.fa-icon-bookmark-empty:before{content:"\f097"}.fa-icon-phone-sign:before{content:"\f098"}.fa-icon-twitter:before{content:"\f099"}.fa-icon-facebook:before{content:"\f09a"}.fa-icon-github:before{content:"\f09b"}.fa-icon-unlock:before{content:"\f09c"}.fa-icon-credit-card:before{content:"\f09d"}.fa-icon-rss:before{content:"\f09e"}.fa-icon-hdd:before{content:"\f0a0"}.fa-icon-bullhorn:before{content:"\f0a1"}.fa-icon-bell:before{content:"\f0a2"}.fa-icon-certificate:before{content:"\f0a3"}.fa-icon-hand-right:before{content:"\f0a4"}.fa-icon-hand-left:before{content:"\f0a5"}.fa-icon-hand-up:before{content:"\f0a6"}.fa-icon-hand-down:before{content:"\f0a7"}.fa-icon-circle-arrow-left:before{content:"\f0a8"}.fa-icon-circle-arrow-right:before{content:"\f0a9"}.fa-icon-circle-arrow-up:before{content:"\f0aa"}.fa-icon-circle-arrow-down:before{content:"\f0ab"}.fa-icon-globe:before{content:"\f0ac"}.fa-icon-wrench:before{content:"\f0ad"}.fa-icon-tasks:before{content:"\f0ae"}.fa-icon-filter:before{content:"\f0b0"}.fa-icon-briefcase:before{content:"\f0b1"}.fa-icon-fullscreen:before{content:"\f0b2"}.fa-icon-group:before{content:"\f0c0"}.fa-icon-link:before{content:"\f0c1"}.fa-icon-cloud:before{content:"\f0c2"}.fa-icon-beaker:before{content:"\f0c3"}.fa-icon-cut:before{content:"\f0c4"}.fa-icon-copy:before{content:"\f0c5"}.fa-icon-paper-clip:before{content:"\f0c6"}.fa-icon-save:before{content:"\f0c7"}.fa-icon-sign-blank:before{content:"\f0c8"}.fa-icon-reorder:before{content:"\f0c9"}.fa-icon-list-ul:before{content:"\f0ca"}.fa-icon-list-ol:before{content:"\f0cb"}.fa-icon-strikethrough:before{content:"\f0cc"}.fa-icon-underline:before{content:"\f0cd"}.fa-icon-table:before{content:"\f0ce"}.fa-icon-magic:before{content:"\f0d0"}.fa-icon-truck:before{content:"\f0d1"}.fa-icon-pinterest:before{content:"\f0d2"}.fa-icon-pinterest-sign:before{content:"\f0d3"}.fa-icon-google-plus-sign:before{content:"\f0d4"}.fa-icon-google-plus:before{content:"\f0d5"}.fa-icon-money:before{content:"\f0d6"}.fa-icon-caret-down:before{content:"\f0d7"}.fa-icon-caret-up:before{content:"\f0d8"}.fa-icon-caret-left:before{content:"\f0d9"}.fa-icon-caret-right:before{content:"\f0da"}.fa-icon-columns:before{content:"\f0db"}.fa-icon-sort:before{content:"\f0dc"}.fa-icon-sort-down:before{content:"\f0dd"}.fa-icon-sort-up:before{content:"\f0de"}.fa-icon-envelope-alt:before{content:"\f0e0"}.fa-icon-linkedin:before{content:"\f0e1"}.fa-icon-undo:before{content:"\f0e2"}.fa-icon-legal:before{content:"\f0e3"}.fa-icon-dashboard:before{content:"\f0e4"}.fa-icon-comment-alt:before{content:"\f0e5"}.fa-icon-comments-alt:before{content:"\f0e6"}.fa-icon-bolt:before{content:"\f0e7"}.fa-icon-sitemap:before{content:"\f0e8"}.fa-icon-umbrella:before{content:"\f0e9"}.fa-icon-paste:before{content:"\f0ea"}.fa-icon-lightbulb:before{content:"\f0eb"}.fa-icon-exchange:before{content:"\f0ec"}.fa-icon-cloud-download:before{content:"\f0ed"}.fa-icon-cloud-upload:before{content:"\f0ee"}.fa-icon-user-md:before{content:"\f0f0"}.fa-icon-stethoscope:before{content:"\f0f1"}.fa-icon-suitcase:before{content:"\f0f2"}.fa-icon-bell-alt:before{content:"\f0f3"}.fa-icon-coffee:before{content:"\f0f4"}.fa-icon-food:before{content:"\f0f5"}.fa-icon-file-alt:before{content:"\f0f6"}.fa-icon-building:before{content:"\f0f7"}.fa-icon-hospital:before{content:"\f0f8"}.fa-icon-ambulance:before{content:"\f0f9"}.fa-icon-medkit:before{content:"\f0fa"}.fa-icon-fighter-jet:before{content:"\f0fb"}.fa-icon-beer:before{content:"\f0fc"}.fa-icon-h-sign:before{content:"\f0fd"}.fa-icon-plus-sign-alt:before{content:"\f0fe"}.fa-icon-double-angle-left:before{content:"\f100"}.fa-icon-double-angle-right:before{content:"\f101"}.fa-icon-double-angle-up:before{content:"\f102"}.fa-icon-double-angle-down:before{content:"\f103"}.fa-icon-angle-left:before{content:"\f104"}.fa-icon-angle-right:before{content:"\f105"}.fa-icon-angle-up:before{content:"\f106"}.fa-icon-angle-down:before{content:"\f107"}.fa-icon-desktop:before{content:"\f108"}.fa-icon-laptop:before{content:"\f109"}.fa-icon-tablet:before{content:"\f10a"}.fa-icon-mobile-phone:before{content:"\f10b"}.fa-icon-circle-blank:before{content:"\f10c"}.fa-icon-quote-left:before{content:"\f10d"}.fa-icon-quote-right:before{content:"\f10e"}.fa-icon-spinner:before{content:"\f110"}.fa-icon-circle:before{content:"\f111"}.fa-icon-reply:before{content:"\f112"}.fa-icon-github-alt:before{content:"\f113"}.fa-icon-folder-close-alt:before{content:"\f114"}.fa-icon-folder-open-alt:before{content:"\f115"}


/* Clearfix hack by Nicolas Gallagher: http://nicolasgallagher.com/micro-clearfix-hack/ */
.clearfix:before, .clearfix:after { content: " "; display: table; }
.clearfix:after { clear: both; }
p{
    color: #111111;
    font-family: "Open_Sans_L";
    font-size: 14px;
    line-height: 30px;
    text-align: justify;
}

#cortina{
	position:fixed;
	background:rgba(0,0,0,0.97);
	width:100%;
	height:100%;
	z-index:99999;
}

#cortina-texto{
	font-family:"Open_Sans_L";
	width:200px;
	position:absolute;
	top:50%;
	left:50%;
	margin-left:-100px;
	margin-top:-15px;
	text-align:center;
	color:#ffffff;
}

#texto-a{
    color: #FFFFFF;
    font-family: Open_Sans_L;
    left: 50%;
    margin-left: -470px;
    padding: 6px;
    position: absolute;
    text-align: left;
    text-shadow: 1px 1px 2px #000000;
    top: 30px;
    width: 310px;
    z-index: 999;
}

#texto-a i{
    color: #FFCC00;
    font-style: normal;
    font-weight: 600;
}

#facebook{
    color: #FFFFFF;
    font-family: Open_Sans_L;
    left: 70px;
    margin-left: 110px;
    padding: 6px;
    position: absolute;
    text-align: left;
    text-shadow: 1px 1px 2px #000000;
    top: 0;
    width: 100px;
    z-index: 999;
}

#orcamento-home{
    background: none repeat scroll 0 0 #FFC000;
    border-radius: 3px 3px 3px 3px;
    box-shadow: 0 4px 0 #9A7706, 0 9px 25px rgba(0, 0, 0, 0.7);
    color: #000000;
    cursor: pointer;
    display: block;
    font-family: Open_Sans_B;
    font-size: 11px;
    font-style: normal;
    left: 50%;
    margin-left: 260px;
    padding: 8px 12px;
    position: absolute;
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
    top: 35px;
    transition: all 0.1s ease 0s;
    z-index: 999;
}

#orcamento-home:active {
    box-shadow: 0px 1px 0px #9A7706, 0px 3px 6px rgba(0,0,0,.9);
	top:38px;
}

#orcamento-home:hover{
	box-shadow: 0px 3px 0px #9A7706, 0px 6px 15px rgba(0,0,0,.7);
	top:36px;
}

#orcamento-follow{
    background: none repeat scroll 0 0 #000000;
    border-radius: 3px 3px 3px 3px;
    color: #FFFFFF;
    cursor: pointer;
    font-family: Open_Sans_B;
    font-size: 11px;
    font-style: normal;
    left: 50%;
    margin-left: 370px;
    padding: 8px 12px;
    position: fixed;
    text-align: center;
    text-decoration: none;
    text-transform: uppercase;
    top: -55px;
    transition: all 0.1s ease 0s;
    z-index: 999;
}

#orcamento-follow:active {

}

#orcamento-follow:hover{
	font-style:italic;
}

#endereco{
    bottom: 10px;
    color: #ffffff;
    font-family: Open_Sans_L;
    font-size: 11px;
    left: 50%;
    margin-left: -455px;
    opacity: 1;
    position: fixed;
    z-index: 99;
}

.lazy {
  display: none;
}


.container{
max-width:1080px;
padding-left: 30px;
}
.main-wrapper{
	height: auto;
	min-height: 100%;
	position: relative;
	/*max-width:1350px;*/
	width: 100%;
	height:100%;
	min-width: 1200px;
}

.wrapper{
	width:100%;
	float:left;
}

#content{
height: 100%;
position: relative;
z-index: 2;
}

.overflowhide{
	overflow:hidden;
}
.add-top-main{
	margin-top: 85px !important;
}
.add-bottom-main{
	margin-bottom: 100px !important;
}


/* 02 - HEADER & NAVIGATION */

/*Sticky Elements*/
#badge{
	position: fixed;
	top: 0px;
	height: 171px;
	width: 100%;
	text-align: center;
	z-index: 100 !important;
}
#badge > img{
	z-index: 1001 !important;
}
#scroll{
    background: url("../images/scroll.png") no-repeat scroll center 0 rgba(0, 0, 0, 0);
    bottom: 0;
    height: 36px;
    margin-bottom: 15px;
    position: fixed;
    width: 100%;
    z-index: 90;
}

#scroll:hover{
	background-position:center -36px;
}

/*** NAV ***/
.navigation{
	background: #FFC000;
	position: absolute;
	z-index: 102 !important;
	width:100%;
	display: none;
	height:115px;
	bottom: 0px;
}
.sticky{
	position: fixed;
	width:100%;
	height:115px;
	top: 0px;
}
#main-nav{
    left: -52px;
    margin: auto;
    position: relative;
    width: 850px;
}
#main-nav li{
	display: inline-block;
	width: 130px;
	text-align: center;
}
#main-nav li a{
	color: #000;
	font-size: 20px;
font-family:"Open_Sans_L";
margin-left: 10px;
margin-right: 10px;
text-decoration: none !important;
}
#main-nav li a:hover{
	color: #fff;
	text-decoration: none !important;
}
#main-nav li a.lighted{
	color: #fff !important;
	border-top: solid 4px #fff;
}

.logo-wrap{
	width: 150px !important;
}
.logo{
	text-align:center;
	min-width:100%;
	text-transform:uppercase;
	font-size:26px;
	font-weight:700;
	z-index: 999 !important;
}
.logo:hover{
	color:#E67E22;
	text-decoration:none;
	text-shadow: 1px 1px 0px rgba(255, 255, 255, 0.5), -1px -1px 0px rgba(0, 0, 0, 1);
}


/* 03 - COMMON ELEMENTS & STYLES */

/**Typography & Common Elements**/
.btn-renova{
	margin-top: 15px;
	padding: 12px 20px;
	background: #fff;
	color: #000;
	border: solid 3px #000;
	border-radius: 0px;
	text-shadow:none;
	font-size: 14px;
	font-family:"Open_Sans_B";
	text-transform: uppercase;
}
.btn-renova:hover{
	color: #000;
	background: #FFC000;

}
.btn-renova-alt{
    background: none repeat scroll 0 0 #111111;
    border: 0 none;
    border-radius: 0 0 0 0;
    box-shadow: none;
    color: #FFFFFF;
    font-family: "Open_Sans_L";
    font-size: 14px;
    margin-bottom: 5px;
    margin-top: 5px;
    padding: 15px 20px;
    text-shadow: none;
    text-transform: uppercase;
}
.btn-renova-alt:hover{
	color: #fff;
	background: #FFC000;
	font-weight:bold;
	border:0;
}
.main-heading{
    font-family: "Open_Sans_L";
    font-size: 35px;
    font-weight: normal;
    line-height: 35px;
    text-align: center;
    text-transform: uppercase;
}
.main-heading span{
	color: #000;
}
.main-heading-white span{
	color: #fff;
}
.inner-heading{
	color: #000;
	font-size: 24px;
	line-height: 31px;
font-family:"Open_Sans_B";
margin-bottom: 30px;
}
.inner-heading span{
border-bottom: double 4px #FFC000;
padding-bottom: 10px;
}
.thumb-icon{
	text-align: center;
}
.thumb-icon > img{
	width: 97px;
	height: 97px;
}
.promo-text{
	padding-top: 26px;
	text-align: center;
	margin-bottom: 60px;
	background: url('../images/slants/yellow-v.png') no-repeat center top;
}
.promo-text > span{
	font-size: 24px;
	line-height: 31px;
	color: #fff;
	font-weight: normal;
	font-family:"Open_Sans_L";
	padding: 10px;
	background: #FFC000;
	border-bottom: double 8px #fff;
}
.promo-text-alt{
	padding-top: 26px;
	text-align: center;
	margin-bottom: 30px;
	background: url('../images/slants/white-v.png') no-repeat center top;
}
.promo-text-alt.darken > span{
	font-size: 24px;
	line-height: 31px;
	color: #000;
	font-weight: normal;
	font-family:"Open_Sans_L";
	padding: 10px;
	background: #fff;
	border-bottom: double 8px #FFC000;
}
.promo-text-inv{
	padding-bottom: 26px;
	text-align: center;
	margin-bottom: 30px;
	background: url('../images/slants/white-v-inv.png') no-repeat center bottom;
}
.promo-text-inv.darken > span{
	font-size: 24px;
	line-height: 31px;
	color: #000;
	font-weight: normal;
	font-family:"Open_Sans_L";
	padding: 10px;
	background: #fff;
	border-top: double 8px #FFC000;
}
.promo-text-inv-yellow{
	padding-bottom: 26px;
	text-align: center;
	margin-bottom: 30px;
	background: url('../images/slants/dark-v-inv.png') no-repeat center bottom;
}
.promo-text-inv-yellow.darken > span{
	font-size: 24px;
	line-height: 31px;
	color: #fff;
	font-weight: normal;
	font-family:"Open_Sans_L";
	padding: 10px;
	background: #111;
}

.wrap-pad{
	padding: 10px;
}


/* 04 - PAGES & SECTIONS SETUP*/

.intro{
	text-align: center;
	height: 664px;
	padding-top: 225px;
	
}

#showcase{
	padding: 10px 0px;
    background: #FFC000;
	position:relative;
}

#fazemos{
    background: none repeat scroll 0 0 #000000;
    color: #FFFFFF;
    padding: 12px;
    position: absolute;
    right: 45px;
    top: 45px;
    z-index: 60;
}

#fazemos span{
    clear: both;
    float: left;
    font-family: Open_Sans_L;
    font-size: 14px;
}

#pacote-esconde{
	display:none;
}

#pacote-ver{
    background: none repeat scroll 0 0 #000000;
    border-radius: 3px 3px 3px 3px;
    color: #FFFFFF;
    cursor: pointer;
    font-family: Open_Sans_B;
    font-size: 9px;
    left: 50%;
    margin-left: 215px;
    padding: 3px 6px;
    position: absolute;
    text-transform: uppercase;
    top: -21px;
}

#pacote-ver:hover{
	color:#ffc000;
}

#about{
	background: #fff url('../images/slants/yellow.png') center top no-repeat;
}
#about-mid{
    background: none repeat scroll 0 0 rgba(255, 192, 0, 0.8);
    padding-bottom: 0;
    padding-top: 0;
}
#about-end{
	background: #fff;
	padding: 30px 0 80px;
}

#about-end a:hover{
	text-decoration:none;
	background:#000000;
	color:#ffffff;
}

#dica{
    font-family: Open_Sans_L;
    font-size: 11px;
    left: 50%;
    margin-left: 92px;
    position: absolute;
    top: 1px;
    width: 82px;
}

#about .inner{
	
}

.span8 a{
    background: none repeat scroll 0 0 #FFC000;
    color: #000000;
    padding: 0 3px;
}

#avatar{
    background: url("../images/avatar.png") no-repeat scroll 0 0 transparent;
    float: left;
    height: 180px;
    margin-bottom: 25px;
    margin-right: 25px;
    width: 180px;
	position:relative;
}

#services{
	background: #FFC000;
}
	
.service-thumb > img{
	width: 160px;
	height: 160px;
}

#services p{
	text-align:center;
}

#services-mid{
	background:#FFC000;
}

#services .inner{
	
}

#newsreel{
	background: #fff url('../images/slants/yellow.png') center top no-repeat;
}
#newsreel .inner{
	
}


#portfolio{
	background: #FFC000 url('../images/slants/white.png') center top no-repeat;
}
#portfolio .inner{
	
}

#contato{
	background: #fff;
    padding-bottom: 0 !important;
}
#contato .inner{
    
    border-top: 1px solid rgba(0, 0, 0, 0.1);
    padding: 60px 0 100px;
}

#explicacao{
    float: left;
    font-family: Open_Sans_L;
    font-size: 12px;
    margin: 30px 100px 0;
    text-align: center;
}

#small p{
    font-size: 12px;
    line-height: 20px;
}

/* 05 - INDIVIDUAL PAGES AND ELEMENTS*/

/**INTRO**/
.intro h1{
	text-align: center;
}
.intro h1 > span{
	padding: 10px 10px 5px 15px;
	font-size: 64px;
	line-height: 72px;
	font-family:"Ostrich_Sans_Black";
	color: #fff;
	background: #FFC000;
}
#intro-nav{
	margin-top: 30px;
	text-align: center;
}
#intro-nav ul{
	margin:0;
	padding:0;
}
#intro-nav ul li{
	margin-bottom: 5px;
	display: inline-block;
}

#intro-nav ul li:hover{

}
.intro-nav-thumb{
	position: absolute;
}
.intro-nav-info{
	background: #000;
	position: absolute;
	display: inline-block;
	font-size: 18px;
	font-weight: normal;
	color: #fff;
}

/*** showcase ***/
.zoom-info{
	display: block;
}
#container-folio{
	padding-top: 0px;
	padding-bottom: 0px;
	margin-bottom: 0px;
	background: #FFC000;
}


.folio-image-box {
float: left;
width: 25%;
color: #fff;
padding:0px;	
margin:0px;
border:none;
display:block;
height:200px;
overflow:hidden;
-moz-box-sizing:border-box;
}

.folio-image-box > a{
	overflow:hidden;
	height:200px;
}

.folio-image-box a > img{
	max-width:auto;
	min-height:100%;
	-webkit-transition: all 0.3s ease;
-moz-transition: all 0.3s ease-in-out;
-o-transition: all 0.3s ease-in-out;
-ms-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;
}

.og-loading omg{
	width:100%;
	height:auto;
}

.folio-image-box:hover {
z-index: 11;
}

.folio-image-box:hover .folio-image-box img {
background: #FFC000;
position: absolute;
width: 100%;
height: 100%;
text-shadow: 1px 1px 0 rgba(75,75,75, .7);
text-align: center;
z-index: 10;
left:100%;

}


.folio-image-info {
background:#FFC000;
position: absolute;
text-align: center;
width: 100%;
height: 100%;
top: 0px;
left: -100%;
-webkit-transition: all 0.3s ease;
-moz-transition: all 0.3s ease-in-out;
-o-transition: all 0.3s ease-in-out;
-ms-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;

}

.folio-image-info h3{
	padding-top:20px;
}

.folio-image-info span{
	color:#fff;
	text-decoration:none;
	position:relative;
	
}
.folio-image-info span.plus{
	
	
	width: 40px;
	height: 40px;
	margin-top:10px;
	cursor: pointer;
	background: url(../img/plus.html) 0px 0px;
	display:inline-block;
		-webkit-transition: all 0.3s ease;
		-moz-transition: all 0.3s ease-in-out;
		-o-transition: all 0.3s ease-in-out;
		-ms-transition: all 0.3s ease-in-out;
		transition: all 0.3s ease-in-out;
}

.folio-image-info span.plus:hover{
	
	background: url(../img/plus.html) 0px -40px;
	width: 40px;
	height: 40px;
}

.folio-image-box:hover .folio-image-info {
background: #FFC000;
position: absolute;
width: 100%;
height: 100%;
text-shadow: 1px 1px 0 rgba(75,75,75, .7);
text-align: center;
z-index: 10;
left:0%;

}

.folio-image-info .title {

-webkit-box-shadow: inset 0 -1px 0 rgba(255, 255, 255, 0.3);
-moz-box-shadow: inset 0 -1px 0 rgba(255, 255, 255, 0.3);
box-shadow: inset 0 -1px 0 rgba(255, 255, 255, 0.3);
}
.image-info .description {
padding: 11px 40px;
}

.folio-link{
	position: absolute;
}


/*ajax project view*/
.project_page
{
    background-color:#fff;
    width:960px;
    padding:30px;
}

.project_content
{
    width:auto;
}
.project_content h3{
	margin-top: 20px;
}


/**ABOUT**/
.shoutout{
    border-left: 10px solid #FFC000;
    color: #000000;
    font-family: "Open_Sans_L";
    font-size: 14px;
    line-height: 30px;
    margin-left: -10px;
    padding-bottom: 10px;
    padding-left: 20px;
    text-align: justify;
}
.shoutout h4{
	font-family: "Open_Sans_L";
    margin-top: 6px;
}
.inner-sub-heading{
	padding:5px;
	color: #000;	
	font-family:"Open_Sans_B";
	margin-bottom: 10px;
}
.about-promo > p{
	margin-top: 30px;
	font-family:"Open_Sans_L";
	font-size: 21px;
	line-height: 43px;
	color: #000;
	text-align: center;
	padding: 0px 120px;
}
.about-promo > p > span{
	padding:5px;
	background: rgba(255,255,255,0.8);
	line-height: 50px;
}
.about-promo > h3{
	padding-left: 80px;
	padding-right: 80px;
	margin-top: 30px;
	font-family:"Open_Sans_B";
	font-size: 148px;
	line-height: 155px;
	color: #000;
	text-transform: uppercase;
	text-align: center;
}
.banner-screen{
	margin-top: 40px;
	width: 800px;
	height: 400px;
}
.banner-screen-inner{

}
.testimonial-block{
	margin-bottom: 20px; 
	background:#FFC000;
}
.testimonial-content{
	background:#FFC000;
}
.tes-text{
	padding: 20px 15px 20px 25px;
	font-size: 16px;
	line-height: 23px;
font-family:"Open_Sans_L";
	color: #000;
}
.tes-client{
	font-size: 18px;
	line-height: 25px;
	padding: 0px 15px 20px 25px;
	font-variant: normal;
font-family:"Open_Sans_B";
	color: #FFF;
}
.tes-client > span{
	font-size: 14px;
	font-variant: normal;
font-family:"Open_Sans_L";
	color: #FFF;
}
.team-block {
	padding: 13px;
}
.team-block-inner{
	background: #FFC000;
}
.team-block h3 {
	color: #fff;
    font-size: 18px;
    line-height: 24px;
    margin-bottom: 0;
    margin-top: 40px;
}
.team-block h6 {
    color: #000000;
    font-size: 13px;
    line-height: 16px;
    margin-top: 5px;
    padding-top: 5px;
}
.team-block h6 > span {
    padding-top: 5px;
}
.team-block p {
    color: #000000;
}
.team-social {
    margin-top: 20px;
    padding-bottom: 40px;
}
.team-social a > img {
    height: 36px;
    opacity: 1;
    width: 36px;
}

.skillset h3{
	font-size: 20px;
	line-height: 26px;
font-family:"Open_Sans_B";
	color: #000;
}
.progress{
	height: 25px;
    border-radius: 0px !important;
	box-shadow: none !important;
    background: #111111 url('../images/dark-bg.png') repeat !important;
}
.width80{
	width: 80% !important;
}

.width100{
	width: 100% !important;
}

.width88{
	width: 88% !important;
}

.width75{
	width: 75% !important;
}
.bar{
	background: #FFC000 !important;
	box-shadow: none !important;
}

/*SERVICES*/
.service-block{
	padding: 50px 20px;
	background: #ffffff;
}

.img-responsive{
display: block;
height: auto;
max-width: 100%;
}

.add-bottom-services{
	margin-bottom: 30px;
}
.service-block:hover{
	padding: 50px 20px;
	background: #111;
	color: #fff !important;
    transition: all 0.4s ease 0s;
}
.service-block:hover > .inner-heading, .service-block:hover > p{
	color: #fff !important;
}

/*NEWS*/

.news-block{
}
.news-block-wrap{
	background: #FFC000;
}
.news-pad{
	padding: 15px;
}
.news-block-content{
	padding: 30px;
	background: #eee;
	border: solid 1px #E5E5E5;
}
.news-block-content p{
	color: #444 !important;
	margin-bottom: 10px;
}
.news-heading{
	font-size: 24px;
	line-height: 31px;
	color: #000;
	margin-top: 0px;
	margin-bottom: 10px;
	font-weight: normal;
font-family:"Open_Sans_B";
}
.news-heading p{
	color: #444;
}
.news-specs{
	padding: 30px;
	background: #FFC000;
}
.news-specs nav a{
	text-decoration: none;
	margin-right: 10px;
}
.news-specs nav a > img{
	width: 28px;
	height: 28px;
}
.news-specs-info{
	color: #000;
font-family:"Open_Sans_L";
}
.news-btn{
	border: solid 2px #000;
	background: #fff;
	padding: 5px 10px;
	float: left;
	margin-top: 5px !important;
	margin-bottom: 5px !important;
	color: #fff;
font-family:"Open_Sans_R";
text-transform: uppercase;
}
.news-btn:hover{
	background: #fff;
	color: #000;
	text-decoration: none;
}
.add-top-news{
	margin-top: 30px;
}
.news-date{
	text-align: center;
	width: 100px;
	background: #FFC000;
	position: absolute;
	padding: 10px 15px;
}
.news-date h2{
	margin-top: 0px;
	color: #fff;
	font-size: 64px;
	line-height: 68px;
	margin-bottom: 0px;
}
.news-date h5{
	margin-top: 0px;
	color: #000;
	font-size: 24px;
	line-height: 28px;
}
.news-date h4{
	margin-top: 0px;
	color: #fff;
	background: #000;
	font-size: 20px;
	line-height: 20px;
	padding: 10px 0px;
font-family:"Open_Sans_L";
}


/*PORTFOLIO*/

.element{
   background: #000; 
}

.remove-zoom{
     transition: all 0.7s ease-in-out 0s;
   transform: scale(1);
}
.folio-item{
    background: #fff;
}
.folio-title{
    display: none;
font-family:"Open_Sans_B";
    color: #000;
    font-size: 36px;
    position: absolute;
    bottom: 50px;
    left: 20px;
    transition: all 0.7s ease-in-out 0s;
    vertical-align: middle;
}
.height-01 .folio-subtitle{
    color: #000000;
    display: none;
    font-family: georgia,sans-serif;
    font-size: 17px;
    font-style: italic;
    font-weight: 100;
    position: relative;
    text-align: center;
    top: 120px;
}
.height-01 .icon-zoom-sosa{
    position: absolute;
    left: 70px;
    top: 70px;
    font-family:"sosa";
    font-size: 36px;
    color: #fff;
    background: url('../images/zoom.png') no-repeat center center;
}
.height-01 .icon-link-sosa{
    position: absolute;
    left: 130px;
    top: 70px;
    font-family:"sosa";
    font-size: 36px;
    color: #fff;
    background: url('../images/info.png') no-repeat center center;
}
.height-02 .folio-subtitle{
    color: #000000;
    display: none;
    font-family: georgia,sans-serif;
    font-size: 17px;
    font-style: italic;
    font-weight: 100;
    position: relative;
    text-align: center;
    top: 180px;
}
.height-02 .icon-zoom-sosa{
    position: absolute;
    left: 70px;
    top: 120px;
    font-family:"sosa";
    font-size: 36px;
    color: #fff;
    background: url('../images/zoom.png') no-repeat center center;
}
.height-02 .icon-link-sosa{
    position: absolute;
    left: 130px;
    top: 120px;
    font-family:"sosa";
    font-size: 36px;
    color: #fff;
    background: url('../images/info.png') no-repeat center center;
}
.folio-trigger-icon{
    display: none;
    position: absolute;
    width: 60px;
    height: 60px;
}
.folio-trigger-icon:hover{
    opacity: 0.7;
}


#filters li{
line-height: 43px;
}
#filters li a{
    border-radius: 0px;
  padding: 6px 9px;
  margin-right: 3px;
color: #fff;
text-decoration: none;
font-weight: normal;
font-family:"Open_Sans_B";
font-size: 14px;
text-transform: uppercase;
}

.inner-link a.selected{
  background: #fff !important;
  color: #000 !important;
  border: solid 3px #000;
}



/*CONTACT*/

input
{
    background: none repeat scroll 0 0 rgba(0, 0, 0, 0.01);
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 0 0 0 0 !important;
    box-shadow: none !important;
    color: #000000 !important;
    font-family: "Open_Sans_R" !important;
    font-size: 22px !important;
    height: 50px !important;
    margin-bottom: 10px;
    padding: 12px 3%;
    width: 100%;
}

input:focus, textarea:focus
{
    color:#fff !important;
    background: #111 !important;
	border:0;
}

textarea
{
	background:rgba(0,0,0,0.01);
    border-radius: 0 0 0 0;
	border: 1px solid rgba(0, 0, 0, 0.1);
    box-shadow: none !important;
    color: #555555 !important;
    font-family: "Open_Sans_R" !important;
    font-size: 22px !important;
    height: 180px;
    margin-top: 0;
    padding: 12px 3%;
    resize: none;
    width: 100%;
}

textarea:focus
{
    color:gray;
	border:0;
}

input.send_message
{
    background:none repeat scroll 0 0 #EF4A4A;
    color:#FFF;
    cursor:pointer;
    float:left;
    font-size:12px;
    font-weight:400;
    margin:0;
    width:120px;
}

input.send_message:hover
{
    background:none repeat scroll 0 0 #262932;
}

.error_message
{
    background-color:#FFE9E9;
    border-color:#FBC4C4;
    border-image:none;
    border-style:solid;
    border-width:1px 1px 1px 5px;
    color:#DE5959;
    float:none;
    font-size:12px;
    line-height:18px;
    margin-bottom:15px;
    padding:15px 40px 15px 18px;
    position:relative;
    width:auto;
}

fieldset
{
    border:0 none;
    float:left;
    padding:0;
    position:relative;
    width:100%;
}

fieldset h1
{
    color:#000;
    font-size:24px;
}
#address-block{
    text-align: center;
}
#address-block > p{
    text-align: left;
    padding: 10px 200px;
}
#address-block > h2{
    color: #fff;
font-family:"Open_Sans_B";
font-size: 64px;
line-height: 72px;
}
#address-block > h3{
    color: #fff;
font-family:"Open_Sans_L";
font-size: 18px;
line-height: 23px;
}
#address-block > h5 > span{
    color: #fff;
    padding: 5px 0px;
    font-weight: normal;
    font-family:"Open_Sans_L";
}
.address-wrap{
    margin-top: 60px;
    padding: 60px 0px;
    background: #050505;
}
.footer{
	border-top: solid 4px #000;
	border-bottom: solid 1px #000;
	padding-top: 80px;
	background: #111111 url('../images/dark-bg.png') repeat;
}
.footer-social
{
	background-color:#363942;
	border-radius:50px;
	bottom:20px;
	float:left;
	height:50px;
	margin-right:30px;
	width:50px;
}

.footer-social:hover
{
	background-color:#FFC000;
}

.footer-social img
{
	opacity:1;
	padding:10px;
}

.contactus
.contactus article
{
	color:#FFF;
	display:block;
	float:left;
	font-size:32px;
	font-weight:700;
	line-height:35px;
	margin-right:50px;
}

.contactus article.mail:after
{
	background:url(../images/mail.html) no-repeat transparent;
	content:"";
	height:24px;
	left:0;
	position:absolute;
	top:7px;
	width:36px;
}

.contactus article.mail
{
	padding-left:50px;
	position:relative;
}

.contactus article.phone:after
{
	background:url(../images/phone.html) no-repeat transparent;
	content:"";
	height:27px;
	left:0;
	position:absolute;
	top:5px;
	width:10px;
}

.contactus article.phone
{
	color:#FFF;
	padding-left:21px;
	position:relative;
}

.copyright
{
	width:100%;
}

.copyright p
{
	color:#fff;
	opacity:0.3;
}
.copyright a
{
	color:#fff;
	opacity:1 !important;
}
.copyright a:hover
{
	color:#FFC000;
	opacity: 1 !important;
	text-decoration: none;
}
.social-links
{
	margin-bottom:20px;
	margin-top:30px;
}

.social-links a
{
	background:#181818;
	height:30px !important;
	margin-left:5px;
	margin-right:5px;
	padding:20px 15px;
	width:20px !important;
	border-radius: 30px;
	-webkit-transition: all 0.3s ease;
-moz-transition: all 0.3s ease-in-out;
-o-transition: all 0.3s ease-in-out;
-ms-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;
}

.social-links a:hover
{
	background:#FFC000;
	height:30px;
	margin-left:5px;
	margin-right:5px;
	padding:20px 15px;
	width:30px;
	-webkit-transition: all 0.3s ease;
-moz-transition: all 0.3s ease-in-out;
-o-transition: all 0.3s ease-in-out;
-ms-transition: all 0.3s ease-in-out;
transition: all 0.3s ease-in-out;
}
.social-links a.facebook:hover
{
	background:#4470CF;
}
.social-links a.twitter:hover
{
	background:#5DAED5;
}
.social-links a.google:hover
{
	background:#DA2713;
}
.social-links a.linkedin:hover
{
	background:#4470CF;
}
.social-links a.dribbble:hover
{
	background:#D07EAD;
}
.social-links a.pinterest:hover
{
	background:#C53942;
}
.social-links a.rss:hover
{
	background:#FF8800;
}

.contactus h1
{
	color:#fff!important;
font-family:"Open_Sans_L";
	font-size:24px;
	line-height:31px;
	margin-bottom:20px;
	padding-bottom:0px;
	text-decoration:none;
}

.contactus h1 > span
{
	color:#777!important;
	font-family:Ostrich_Sans_Regular;
}

.contactus h2,.contactus a
{
	color:#fff;
	font-family:Open_Sans_R;
	font-size:28px;
	font-weight:400;
	line-height:34px;
	text-decoration:none;
}

.contactus a:hover
{
	color:#FFC000;
}


/* 06 - FOOTER*/

.tweet-wrap{
	background: none repeat scroll 0 0 rgba(255, 255, 255, 0.8);
    padding: 100px 0px 60px 0px;
}
.footer-down{
    background: none repeat scroll 0 0 #FFFFFF;
    border-top: 1px solid rgba(0, 0, 0, 0.1);
    padding-bottom: 20px;
    padding-top: 20px;
	
}

.footer-down p{
	color:#333333;
	opacity:1.0;
}

.foot-soc{
	padding-bottom: 80px;
}

#pagseguro{
    float: right;
    margin-top: 25px;
    width: 550px;
}

#pagseguro span{
    float: left;
    font-family: Open_Sans_L;
    font-size: 12px;
    padding-bottom: 7px;
}

#pagseguro span a{
    color: #EEB809;
    font-weight: bold;
}

/* 07 - FRAMEWORK RESET & PLUGIN RESETS*/

/*BOOTSTRAP RESETS & OVER-RIDES*/
.carousel-control {
    background: none;
    border: 3px solid #FFFFFF;
    border-radius: 60px 60px 60px 60px;
    color: #FFFFFF;
    font-size: 70px;
    font-weight: 100;
    height: 60px;
    left: 15px;
    line-height: 36px;
    margin-top: -20px;
    opacity: 0.5;
    position: absolute;
    text-align: center;
    top: 50%;
    width: 60px;
}
.alert-danger, .alert-error {
    background-color: #F44F2E;
    border-color: #EED3D7;
    padding: 15px 8px;
    color: #fff;
    border-radius: 0px;
    border: none;
    font-family:"Open_Sans_R" !important;
    font-size:22px !important;
    text-shadow:none;
}

/*PLUGINS CSS RESETS*/
div.dark_square .pp_left, div.dark_square .pp_middle, div.dark_square .pp_right, div.dark_square .pp_content {
    
	background: rgba(0,0,0,0.8);
}
#fancybox-close {
    right: -35px;
    top: -10px;
}
#fancybox-title-float-left {
    background: none;
}
#fancybox-title-float-right {
    background: none;
}
#fancybox-title-float-main {
    color: #FFFFFF;
    font-weight: bold;
    line-height: 40px;
    padding: 0 0 3px;
    font-size: 32px;
font-family:"Open_Sans_L";
}
#fancybox-title-float-main {
    background: none;
}
#cboxLoadingGraphic{
	background: #fff url('../images/loader.gif') center center no-repeat;
}




/* 08 - RESPONSIVE RULES : MOBILE OPTIMIZATION*/

@media only screen and (max-width: 1570px){
.folio-image-info .title  {
padding: 5px 7px 0;
}
.folio-image-info .description p{
padding: 2px 8px 0;
line-height:16px
}
}


@media (min-width: 2000px) and (max-width: 3000px){
	body, html{
		overflow-x: hidden !important;
	}
	.da-thumbs {
    width: 100%;
	}
	.folio-image-box{
    width: 10%;
    height: 200px;
	}

}

@media (min-width: 1382px) and (max-width: 2000px){
	body, html{
		overflow-x: hidden !important;
	}
	.da-thumbs {
    width: 100%;
	}
	.folio-image-box{
    width: 20%;
    height: 200px;
	}

}

@media (min-width: 979px) and (max-width: 1382px){
	body, html{
		max-width: 1366px !important;
		overflow-x: hidden !important;
	}
	.da-thumbs {
    width: 100%;
	}
	.folio-image-box{
    width: 25%;
    height: 200px;
	}

}


@media (max-width: 979px){
	body, html{
		max-width: 979px !important;
		overflow-x: hidden !important;
	}
	.da-thumbs {
    width: 960px;
	}
	.folio-image-box{
    width: 320px;
    height: 200px;
	}

}

@media (min-width: 768px) and (max-width: 960px){
  #badge{
    display: none;
  }
  .project_page
    {
    width:920px;
    }

}

@media (min-width: 640px) and (max-width: 960px){
  #badge{
    display: none;
  }
  .project_page
    {
    width:740px;
    }

}

@media (max-width: 767px){
	body, html{
		max-width: 767px !important;
		overflow-x: hidden !important;
	}
	.container{
		padding-left: 35px !important;
		padding-right: 35px !important;
	}
	
	#badge, #scroll{
		display: none;
	}

	.intro{
		min-height: 664px;
		height: 664px;
		padding-top: 225px;
	}
	.da-thumbs {
    width: 740px;
	}
	.folio-image-box{
    width: 370px;
    height: 200px;
	}
	.project_page
    {
    width:740px;
    }
    #cboxTitle {
    font-size: 24px;
    }
    .testimonial-block {
		padding-top: 20px;
    text-align: center;
	}
	.testimonial-block img{
		width: 155px;
		height: 200px;
	}
	.testimonial-content {
    text-align: center;
	}
	.news-block,.news-heading{
		text-align: center;
	}

	.team-block-inner{
		padding-top: 60px;
		padding-bottom: 20px;
		text-align: center;
	}
	.mob-bg-remove{
	background: none !important;
	}
	.service-block{
		margin-bottom: 20px;
	}
	.add-bottom-services {
    margin-bottom: 0px;
	}
	.news-block{
		margin-bottom: 20px;
	}
	.news-img{
		background: #FFC000;
		padding-top: 30px !important;
	}
}

@media (max-width: 640px){
	body, html{
		max-width: 640px !important;
		overflow-x: hidden !important;
	}
	.container{
		padding-left: 35px !important;
		padding-right: 35px !important;
	}
	.da-thumbs {
    width: 620px;
	}
	.folio-image-box{
    width: 310px;
    height: 200px;
	}

	.intro{
		min-height: 750px;
		padding-top: 50px !important;
	}
	#badge, #scroll{
		display: none;
	}
	.intro{
		min-height: 1000px;
		padding-top: 50px !important;
	}
	.promo-text > span, .promo-text-alt.darken > span, 
	.promo-text-inv-yellow.darken > span, .promo-text-inv.darken > span{
    font-size: 16px;
    line-height: 31px;
	}
	.main-heading {
    font-size: 48px;
    line-height: 55px;
	}
	.about-promo > p {
    padding: 0 20px;
    font-size: 22px;
	}
	.about-promo > p > span {
    line-height: 45px;
	}
	.banner-screen {
    height: 200px;
	}
	.shoutout{
		text-align: center;
	}
	.skillset h3 {
    text-align: center;
	}
	.cbp_tmtimeline > li .cbp_tmtime span:last-child {
    font-size: 2.0em !important;
	}
	.cbp_tmlabel h2{
		font-size: 26px;
		line-height: 31px;
	}
	.cbp_tmlabel a{
		font-weight:bold;
		color:#111111;
	}
	.cbp_tmtimeline > li .cbp_tmicon {
    font-size: 2.08em !important;
    height: 60px !important;
    left: 40%;
    line-height: 60px !important;
    width: 60px !important;
    margin-left: -95px !important;
	}
	.cbp_tmtimeline > li .cbp_tmtime span:last-child {
    margin-top: 25px !important;
	}
	.team-block-inner{
		padding-top: 60px;
		text-align: center;
	}
	.mob-bg-remove{
	background: none !important;
	}
	.service-block{
		margin-bottom: 20px;
	}
	.add-bottom-services {
    margin-bottom: 0px;
	}
	.news-block{
		margin-bottom: 20px;
	}
	.add-top-news{
		margin-top: 0px;
	}
	textarea{
		background: #eee !important;
	}
	.social-links a {
    background: none;
    padding: 0px;
	}
	.social-links a:hover {
    background: none !important;
    padding: 0px;
    opacity: 0.4;
	}
	.banner-screen {
    margin-top: 40px;
    width: auto;
	}
	.project_page
    {
    width:580px;
    }
    #cboxTitle {
    font-size: 16px;
    }

	.testimonial-block {
		padding-top: 20px;
    text-align: center;
	}
	.testimonial-block img{
		width: 155px;
		height: 200px;
	}
	.testimonial-content {
    text-align: center;
	}
	.news-block,.news-heading{
		text-align: center;
	}
}

@media (max-width: 480px){
	body, html{
		max-width: 480px !important;
		overflow-x:480px hidden !important;
	}
	.container{
		padding-left: 30px !important;
		padding-right: 30px !important;
	}
	.da-thumbs {
    width: 460px;
	}
	.folio-image-box{
    width: 460px;
    height: 200px;
	}
	.intro{
		min-height: 1000px;
		padding-top: 50px !important;
	}
	#badge, #scroll{
		display: none;
	}
	.promo-text > span, .promo-text-alt.darken > span, 
	.promo-text-inv-yellow.darken > span, .promo-text-inv.darken > span{
    font-size: 16px;
    line-height: 31px;
	}
	.main-heading {
    font-size: 48px;
    line-height: 55px;
	}
	.about-promo > p {
    padding: 0 20px;
    font-size: 22px;
	}
	.about-promo > p > span {
    line-height: 45px;
	}
	.banner-screen {
    height: 200px;
	}
	.shoutout, p{
		text-align: center;
	}
	.skillset h3 {
    text-align: center;
	}
	.cbp_tmtimeline > li .cbp_tmtime span:last-child {
    font-size: 2.0em !important;
	}
	.cbp_tmlabel h2{
		font-size: 18px;
		line-height: 25px;
	}
	.cbp_tmtimeline > li .cbp_tmicon {
    font-size: 2.08em !important;
    height: 60px !important;
    left: 40%;
    line-height: 60px !important;
    width: 60px !important;
    margin-left: -75px !important;
	}
	.cbp_tmtimeline > li .cbp_tmtime span:last-child {
    margin-top: 25px !important;
	}
	.team-block-inner{
		padding-top: 60px !important;
		padding-bottom: 30px !important;
		text-align: center;
	}
	.mob-bg-remove{
	background: none !important;
	}
	.service-block{
		margin-bottom: 20px;
	}
	.add-bottom-services {
    margin-bottom: 0px;
	}
	.news-block{
		margin-bottom: 20px;
	}
	.news-date{
		display: none !important;
		visibility: hidden !important;
	}
	.add-top-news{
		margin-top: 0px;
	}
	textarea{
		background: #eee !important;
	}
	.social-links a {
    background: none;
    padding: 0px;
	}
	.social-links a:hover {
    background: none !important;
    padding: 0px;
    opacity: 0.4;
	}
    .project_page
    {
    width:460px;
    }
    #cboxTitle {
    font-size: 16px;
    }
    .contactus h1{
    	font-size: 18px;
    	line-height: 25px;
    }
    .shoutout{
    	text-align: left;
	}
	.shoutout h4{
    	text-align: left;
	}
	.inner-sub-heading{
		text-align: center;
	}
	.testimonial-block {
		padding-top: 20px;
    text-align: center;
	}
	.testimonial-block img{
		width: 155px;
		height: 200px;
	}
	.testimonial-content {
    text-align: center;
	}
	.news-block,.news-heading{
		text-align: center;
	}
	.tweet-wrap{
		padding: 100px 0;
	}

	.tweet_list li {
    color: #000000;
    font-family: "Open_Sans_L";
    font-size: 14px !important;
    line-height: 20px;
    list-style-type: none;
    overflow: hidden;
	}
	/*Masonry Relayout*/
	.element{
		width: 190px !important;
	}
	.height-01{
		height: 190px !important;
	}
	.height-02{
		height: 285px !important;
	}
	.height-02 .icon-zoom-sosa{
		top: 100px !important;
		left: 30px !important;
	}
	.height-02 .icon-link-sosa{
		top: 100px !important;
		left: 100px !important;
	}
	.height-02 .folio-subtitle{
		top: 180px !important;
		width: 190px !important;
	}
	.height-01 .icon-zoom-sosa{
		top: 50px !important;
		left: 30px !important;
	}
	.height-01 .icon-link-sosa{
		top: 50px !important;
		left: 100px !important;
	}
	.height-01 .folio-subtitle{
		top: 120px !important;
		width: 190px !important;
	}

}





@media (max-width: 320px){
	body, html{
		max-width: 320px !important;
		overflow-x:320px hidden !important;
		font-size: 12px;
	}
	.container{
		padding-left: 30px !important;
		padding-right: 30px !important;
	}
	.da-thumbs {
    width: 300px;
	}
	.folio-image-box{
    width: 300px;
    height: 200px;
	}
	.ca-menu li {
    height: 155px;
    width: 124px;
	}
	.ca-sub{
		display: none;
	}
	.ca-main {
    font-size: 14px;
	}
	.intro{
		min-height: 620px;
		padding-top: 50px !important;
	}
	#badge, #scroll{
		display: none;
	}

	.promo-text, .promo-text-inv-yellow{
		margin-top: 20px !important;
		background: #FFC000 !important;
		color: #000 !important;
		line-height: 20px !important;
		padding: 20px 5px !important;
	}
	.promo-text-alt, .promo-text-inv{
		margin-top: 20px !important;
		background: #fff !important;
		color: #fff !important;
		line-height: 20px !important;
		padding: 20px 5px !important;
	}
	.promo-text > span, .promo-text-alt.darken > span, 
	.promo-text-inv-yellow.darken > span, .promo-text-inv.darken > span{
    font-size: 21px !important;
    line-height: 33px !important;
    background: transparent !important;
    color: #000 !important;
    border: none !important;
	}

	.main-heading {
    font-size: 48px;
    line-height: 55px;
	}
	.about-promo > p {
    padding: 0 20px;
    font-size: 22px;
	}
	.about-promo > p > span {
    line-height: 45px;
	}
	.banner-screen {
    height: 140px;
	}
	.shoutout, p{
		text-align: center;
	}
	.skillset h3 {
    text-align: center;
	}
	.cbp_tmtimeline > li .cbp_tmtime span:last-child {
    font-size: 2.0em !important;
	}
	.cbp_tmlabel h2{
		font-size: 18px;
		line-height: 25px;
	}
	.cbp_tmtimeline > li .cbp_tmicon {
		display: none !important;
	}
	.cbp_tmtimeline > li .cbp_tmtime span:last-child {
    margin-top: 25px !important;
	}

	.team-block-inner{
		padding-top: 0px !important;
		text-align: center;
	}
	.mob-bg-remove{
	background: none !important;
	}
	.service-block{
		margin-bottom: 20px;
	}
	.add-bottom-services {
    margin-bottom: 0px;
	}
	.news-block{
		margin-bottom: 20px;
	}
	.news-date{
		display: none !important;
		visibility: hidden !important;
	}
	.add-top-news{
		margin-top: 0px;
	}
	textarea{
		background: #eee !important;
	}
	.social-links a {
    background: none;
    padding: 0px;
	}
	.social-links a:hover {
    background: none !important;
    padding: 0px;
    opacity: 0.4;
	}
    .project_page
    {
    width:460px;
    }
    #cboxTitle {
    font-size: 16px;
    }
    .contactus h1{
    	font-size: 18px;
    	line-height: 25px;
    }
    .shoutout{
    	text-align: left;
    	font-size: 18px;
    	line-height: 25px;
	}
	.shoutout h4{
    	text-align: left;
	}
	.inner-sub-heading{
		text-align: center;
	}
	.testimonial-block {
		padding-top: 20px;
    text-align: center;
	}
	.testimonial-block img{
		width: 155px;
		height: 200px;
	}
	.testimonial-content {
    text-align: center;
	}
	.ca-icon img{
		margin-top: -40px;
	}
	.ca-main{
		margin-top: 10px;
	}

	.tweet-wrap{
		padding: 100px 0 !important;
	}
	.tweet_list li {
    color: #000000;
    font-family: "Open_Sans_L";
    font-size: 14px !important;
    line-height: 20px;
    list-style-type: none;
    overflow: hidden;
	}
	.about-promo > p > span{
		display: none !important;
	}
}



.ca-menu{
    padding:0;
    margin:20px auto;
    width: 100%;
}
.ca-menu li{
    height: 210px;
    position: relative;
    transform: rotate(0deg);
    transition: all 300ms linear 0s;
    width: 160px;
}
.ca-menu li:last-child{
    margin-right: 0px;
}
.ca-menu li a{
    color: #333333;
    display: block;
    height: 100%;
    position: relative;
    text-align: left;
    width: 100%;
}
.ca-icon{
    font-size: 60px;
    color: #333;
    text-shadow: 0px 0px 1px #333;
    position: absolute;
    width: 100%;
    left: 0px;
    top: 0px;
    text-align: center;
    -webkit-transition: all 400ms linear;
    -moz-transition: all 400ms linear;
    -o-transition: all 400ms linear;
    -ms-transition: all 400ms linear;
    transition: all 400ms linear;
}

#black{
    background: none repeat scroll 0 0 #000000;
    height: 137px;
    left: 50%;
    margin-left: -68px;
    position: absolute;
    width: 137px;
    z-index: 1;
	-moz-transform:scale(0) rotate(45deg);
	-webkit-transform:scale(0) rotate(
	-ms-transform:scale(0) rotate(
	transition: all 0.3s cubic-bezier(0.680, -0.550, 0.265, 1.550);
}

.ca-icon img{
}

.ca-icon#heart{
    color: #f7002f;
    text-shadow: 0px 0px 1px #f7002f;
}
.ca-content{
    height: 25%;
    left: 0;
    position: absolute;
    top: 130px;
    width: 100%;
	z-index:2;
}
.ca-main {
    color: #FFFFFF;
    font-family: "Open_Sans_L";
    font-size: 16px;
    opacity: 1;
    text-align: center;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.1);
    transition: all 200ms linear 0s;
}
.ca-sub {
    bottom: 0;
    color: #FFC000;
    display: none;
    font-family: open_sans_l;
    font-size: 12px;
    left: 25px;
    line-height: 15px;
    opacity: 1;
    padding: 10px 15px 0 0;
    position: absolute;
    text-align: center;
    transition: all 200ms linear 0s;
    width: 160px;
}
.ca-menu li:hover{
    z-index:999;
}
.ca-menu li:hover .ca-icon{
    color: #ccff00;
    font-size: 90px;
    opacity:1;
}
.ca-menu li:hover .ca-icon#heart{
    -webkit-animation: smallToBig 900ms alternate infinite ease;
    -moz-animation: smallToBig 900ms alternate infinite ease;
    -ms-animation: smallToBig 900ms alternate infinite ease;
}
.ca-menu li:hover .ca-main{
	margin-top:-110px;
	color:#ffffff;
}
.ca-menu li:hover #black{
	-webkit-transform: scale(1) rotate(45deg);
    -ms-transform: scale(1) rotate(45deg);
	-moz-transform: scale(1) rotate(45deg);
}

.ca-menu li:hover .ca-sub{
	display:block;
	top:-95px;
}

.ca-menu li:hover .ca-sub{
    color: #FFC000;
    -webkit-animation: moveFromBottom 500ms ease;
    -moz-animation: moveFromBottom 500ms ease;
    -ms-animation: moveFromBottom 500ms ease;
}

@-webkit-keyframes cresce{
    from {
        -webkit-transform: scale(0.1) rotate(45deg);
    }
    to {
        -webkit-transform: scale(1) rotate(45deg);
    }
}
@-moz-keyframes cresce{
    from {
		opacity:0;
        -moz-transform: scale(0.1) rotate(45deg);
    }
    to {
		opacity:1;
        -moz-transform: scale(1) rotate(45deg);
    }
}
@-ms-keyframes cresce{
    from {
		-ms-transform: rotate(45deg);
        -ms-transform: scale(0.1);
    }
    to {
		-ms-transform: rotate(45deg);
        -ms-transform: scale(1);
    }
}

@-webkit-keyframes smallToBig{
    from {
        -webkit-transform: scale(0.1);
    }
    to {
        -webkit-transform: scale(1);
    }
}
@-moz-keyframes smallToBig{
    from {
        -moz-transform: scale(0.1);
    }
    to {
        -moz-transform: scale(1);
    }
}
@-ms-keyframes smallToBig{
    from {
        -ms-transform: scale(0.1);
    }
    to {
        -ms-transform: scale(1);
    }
}

@-webkit-keyframes moveFromBottom {
    from {
        -webkit-transform: translateY(100%);
    }
    to {
        -webkit-transform: translateY(0%);
    }
}
@-moz-keyframes moveFromBottom {
    from {
        -moz-transform: translateY(100%);
    }
    to {
        -moz-transform: translateY(0%);
    }
}
@-ms-keyframes moveFromBottom {
    from {
        -ms-transform: translateY(100%);
    }
    to {
        -ms-transform: translateY(0%);
    }
}


    
</style>

</head>

<body id="body">

<div style="display:none;">
	<img src="images/bg1.jpg"/>
	<img src="images/bg2.jpg"/>
</div>



<!--MAIN WRAPPER--> 
<div class="main-wrapper">


    

<div id="badge">
	<img alt="MeoSite" title="" src="images/badge.png"/>
</div>

<!-- INTRO SPLASH -->
	<section class="intro master-section">
	
		<div id="texto-a">
			<span><i>Rede</i> de profissionais criativos especializados em <i>marketing</i> e <i>web</i> que trabalham na presença e desenvolvimento de marcas e organizações na <i>internet</i>.</span>
		</div>
		
		
		
		<div id="endereco">Rua Rivadávia Correia, 08/204 Partenon - Porto Alegre RS</div>
		
		<a class="scroll-link" href="#contato" data-soffset="100"><div id="orcamento-home">Solicite um orçamento grátis</div></a>
		
		<a class="scroll-link" href="#contato" data-soffset="100"><div id="orcamento-follow">Solicite um orçamento grátis</div></a>
		
	
        <nav id="intro-nav">
            <ul class="ca-menu">
                    <li>
                        <a class="scroll-link" href="#showcase" data-soffset="100">
                            <span class="ca-icon"><div id="black"></div><img alt="MeoSite" title="" src="images/icons/14.png"/></span>
                            <div class="ca-content">
                                <h2 class="ca-main">Fazemos</h2>
                                <h3 class="ca-sub">os produtos que desenvolvemos</h3>
                            </div>
                        </a>
                    </li>
					
					<li>
                        <a class="scroll-link" href="#about-mid" data-soffset="100">
                            <span class="ca-icon"><div id="black"></div><img alt="MeoSite" title="" src="images/icons/03.png"/></span>
                            <div class="ca-content">
                                <h2 class="ca-main">Serviços</h2>
                                <h3 class="ca-sub">os serviços que executamos</h3>
                            </div>
                        </a>
                    </li>
					
					<li>
                        <a class="scroll-link" href="#newsreel" data-soffset="100">
                            <span class="ca-icon"><div id="black"></div><img alt="MeoSite" title="" src="images/icons/06.png"/></span>
                            <div class="ca-content">
                                <h2 class="ca-main">Processo</h2>
                                <h3 class="ca-sub">como é feito o trabalho em rede</h3>
                            </div>
                        </a>
                    </li>
					
					 <li>
                        <a class="scroll-link" href="#portfolio" data-soffset="100">
                            <span class="ca-icon"><div id="black"></div><img alt="MeoSite" title="" src="images/icons/04.png"/></span>
                            <div class="ca-content">
                                <h2 class="ca-main">A Rede</h2>
                                <h3 class="ca-sub">os criativos que desenvolvem os produtos</h3>
                            </div>
                        </a>
                    </li>
					
                    <li>
                        <a class="scroll-link" href="#about" data-soffset="100">
                            <span class="ca-icon"><div id="black"></div><img alt="MeoSite" title="" src="images/icons/01.png"/></span>
                            <div class="ca-content">
                                <h2 class="ca-main">Trustee</h2>
                                <h3 class="ca-sub">o cara que faz acontecer os projetos</h3>
                            </div>
                        </a>
                    </li>
                    
                    
                   
                    <li>
                        <a class="scroll-link" href="#contato" data-soffset="100">
                            <span class="ca-icon"><div id="black"></div><img alt="MeoSite" title="" src="images/icons/13.png"/></span>
                            <div class="ca-content">
                                <h2 class="ca-main">Contato</h2>
                                <h3 class="ca-sub">vamos fazer um projeto?</h3>
                            </div>
                        </a>
                    </li>
                </ul>
            
        </nav>

        <a class="scroll-link" href="#showcase" data-soffset="100"><div id="scroll"></div></a>
	</section>


<!-- Desktop Only NAVIGATION -->
<div class="navigation hidden-phone hidden-tablet">
	<ul id="main-nav">
		<li>
            <a class="scroll-link" href="#showcase" id="showcase-linker" data-soffset="100">fazemos</a>
        </li>
		<li>
            <a class="scroll-link" href="#about-mid" id="services-linker" data-soffset="100">serviços</a>
        </li>
		
		<li>
            <a class="scroll-link" href="#newsreel" id="newsreel-linker" data-soffset="100">processo</a>
        </li>
		
		<li class="logo-wrap">
            <a class="scroll-link logo" href="#body" data-soffset="100"><img alt="MeoSite" title="" src="images/logo.png"/></a>
        </li>
		
		<li>
            <a class="scroll-link" href="#portfolio" id="portfolio-linker" data-soffset="100">a rede</a>
        </li>
		
		<li>
            <a class="scroll-link" href="#about" id="about-linker" data-soffset="100">trustee</a>
        </li>
		

	</ul>
</div>
			


<!-- showcase BLOCK -->
<section id="showcase" class="clearfix master-section">	

<div id="fazemos">
	<span style="font-weight: bold; font-size: 15px; padding: 0px 0px 4px;">Fazemos:</span>
	<span>template</span>
	<span>logotipo</span>
	<span>blog</span>
	<span>website</span>
	<span>e-commerce</span>
	<span>landingpage</span>
	<span>anúncio</span>
	<span>link Patrocinado</span>
	<span>fanpage</span>
	<span>tipografia</span>
	<span>ilustração</span>
	<span>fotografia</span>
	<span>animação</span>
</div>


<div class="wrapper">
	<div id="container-folio" class="scroll-content beneath-intro">	


<ul id="og-grid" class="og-grid da-thumbs">
			
<!-- FOLIO ITEM -->
<li class="folio-image-box box">
	<a class="fancythumb" href="images/showcase/full/01.jpg" title="Template">
		<img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/showcase/thumbs/01.jpg"/>
		<div><span>Template</span></div>
	</a>
</li>
<!-- FOLIO ITEM -->

<!-- FOLIO ITEM -->
<li class="folio-image-box box">
    <a class="fancythumb" href="images/showcase/full/02.jpg" title="logotipo">
		<img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/showcase/thumbs/02.jpg"/>
		<div><span>Logotipo</span></div>
	</a>
</li>

<!-- FOLIO ITEM -->
<li class="folio-image-box box">
    <a class="fancythumb" href="images/showcase/full/03.jpg" title="E-commerce">
		<img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/showcase/thumbs/03.jpg"/>
		<div><span>E-commerce</span></div>
	</a>
</li>

<!-- FOLIO ITEM -->
<li class="folio-image-box box">
	<a class="fancythumb" href="images/showcase/full/04.jpg" title="Branding">
		<img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/showcase/thumbs/04.jpg"/>
		<div><span>Branding</span></div>
	</a>
</li>

<!-- FOLIO ITEM -->
<li class="folio-image-box box">
    <a class="fancythumb" href="images/showcase/full/06.jpg" title="Fotografia">
		<img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/showcase/thumbs/06.jpg"/>
		<div><span>Fotografia</span></div>
	</a>
</li>
<!-- FOLIO ITEM -->

<!-- FOLIO ITEM -->
<li class="folio-image-box box">
    <a class="fancythumb" href="images/showcase/full/05.jpg" title="Tipografia">
		<img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/showcase/thumbs/05.jpg"/>
		<div><span>Tipografia</span></div>
	</a>
</li>

<!-- FOLIO ITEM -->
<li class="folio-image-box box">
    <a class="fancythumb" href="images/showcase/full/07.jpg" title="Ilustração">
		<img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/showcase/thumbs/07.jpg"/>
		<div><span>Ilustração</span></div>
	</a>
</li>

<!-- FOLIO ITEM -->
<li class="folio-image-box box">
    <a class="fancythumb" href="images/showcase/full/08.jpg" title="Blog">
		<img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/showcase/thumbs/08.jpg"/>
		<div><span>Blog</span></div>
	</a>
</li>

<!-- FOLIO ITEM -->
<li class="folio-image-box box">
    <a class="fancythumb" href="images/showcase/full/09.jpg" title="Revista Digital">
		<img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/showcase/thumbs/09.jpg"/>
		<div><span>Revista Digital</span></div>
	</a>
</li>
<!-- FOLIO ITEM -->
			
<!-- FOLIO ITEM -->
<li class="folio-image-box box">
	<a class="fancythumb" href="images/showcase/full/01.jpg" title="Template">
		<img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/showcase/thumbs/01.jpg"/>
		<div><span>Template</span></div>
	</a>
</li>
<!-- FOLIO ITEM -->

<!-- FOLIO ITEM -->
<li class="folio-image-box box">
    <a class="fancythumb" href="images/showcase/full/02.jpg" title="logotipo">
		<img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/showcase/thumbs/02.jpg"/>
		<div><span>Logotipo</span></div>
	</a>
</li>

<!-- FOLIO ITEM -->
<li class="folio-image-box box">
    <a class="fancythumb" href="images/showcase/full/03.jpg" title="E-commerce">
		<img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/showcase/thumbs/03.jpg"/>
		<div><span>E-commerce</span></div>
	</a>
</li>

<!-- FOLIO ITEM -->
<li class="folio-image-box box">
	<a class="fancythumb" href="images/showcase/full/04.jpg" title="Branding">
		<img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/showcase/thumbs/04.jpg"/>
		<div><span>Branding</span></div>
	</a>
</li>

<!-- FOLIO ITEM -->
<li class="folio-image-box box">
    <a class="fancythumb" href="images/showcase/full/06.jpg" title="Fotografia">
		<img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/showcase/thumbs/06.jpg"/>
		<div><span>Fotografia</span></div>
	</a>
</li>
<!-- FOLIO ITEM -->

<!-- FOLIO ITEM -->
<li class="folio-image-box box">
    <a class="fancythumb" href="images/showcase/full/05.jpg" title="Tipografia">
		<img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/showcase/thumbs/05.jpg"/>
		<div><span>Tipografia</span></div>
	</a>
</li>

<!-- FOLIO ITEM -->
<li class="folio-image-box box">
    <a class="fancythumb" href="images/showcase/full/07.jpg" title="Ilustração">
		<img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/showcase/thumbs/07.jpg"/>
		<div><span>Ilustração</span></div>
	</a>
</li>

	
			</ul>	
	</div><!-- CONTAINER FOLIO-->
</div><!-- WRAPPER -->
</section><!-- CONTENT-->





<section id="services" class="bg-dark master-section">

	<section class="container-fluid inner mob-bg-remove">
    <div class="row-fluid">
        <section class="container">
		
		<div class="row add-top-main">
                <article class="span12">
                	
                	<h1 class="main-heading"><span>Serviços</span></h1>
                	
                </article>
        </div>
            
			<div class="row add-top add-bottom-services">
                <article class="span4 service-block text-center">
                	<div class="service-thumb text-center">
                	<img alt="MeoSite" title="" class="lazy " src="images/grey.gif" data-original="images/icons-big/11.png"/>
                	</div>
                	<h3 class="inner-heading"><span>Front-end</span></h3>
                	<p>Desenvolvimento de websites responsivos usando se as boas práticas de SEO</p>
                	
                </article>
                <article class="span4 service-block text-center">
                	<div class="service-thumb text-center">
                	<img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/icons-big/07.png"/>
                	</div>
                	<h3 class="inner-heading"><span>Design Gráfico</span></h3>
                	<p>Identidade corporativa para a criação da imagem e sentimento da marca</p>
                
                </article>
                <article class="span4 service-block text-center">
                	<div class="service-thumb text-center">
                	<img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/icons-big/10.png"/>
                	</div>
                	<h3 class="inner-heading"><span>Ilustração</span></h3>
                	<p>Criação de mascotes e desenhos gráficos por grandes nomes do mercado</p>
                
                </article>
            </div>

            <div class="row add-top add-bottom-services">
                <article class="span4 service-block text-center">
                	<div class="service-thumb text-center">
                	<img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/icons-big/08.png"/>
                	</div>
                	<h3 class="inner-heading"><span>WordPress</span></h3>
                	<p>Criação e personalização de websites e blogs com a tecnologia Wordpress</p>
                	
                </article>
                <article class="span4 service-block text-center">
                	<div class="service-thumb text-center">
                	<img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/icons-big/13.png"/>
                	</div>
                	<h3 class="inner-heading"><span>Marketing Digital</span></h3>
                	<p>Criação e gerenciamento de contas de propaganda no Google Adwords</p>
                
                </article>
                <article class="span4 service-block text-center">
                	<div class="service-thumb text-center">
                	<img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/icons-big/12.png"/>
                	</div>
                	<h3 class="inner-heading"><span>E-commerce</span></h3>
                	<p>Criação de lojas online, sistemas de pedidos e reservas</p>
                
                </article>
            </div>


            <div class="row add-bottom">
                <article class="span4 service-block text-center">
                	<div class="service-thumb text-center">
                	<img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/icons-big/06.png"/>
                	</div>
                	<h3 class="inner-heading"><span>Mídias Socias</span></h3>
                	<p>Integração do website com Facebook, Twitter e demais mídias socias</p>
                	
                </article>
                <article class="span4 service-block text-center">
                	<div class="service-thumb text-center">
                	<img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/icons-big/09.png"/>
                	</div>
                	<h3 class="inner-heading"><span>Email</span></h3>
                	<p>Criação de email personalizado usando se a tecnologia Gmail</p>
                	
                </article>
                <article class="span4 service-block text-center">
                	<div class="service-thumb text-center">
                	<img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/icons-big/05.png"/>
                	</div>
                	<h3 class="inner-heading"><span>Branding</span></h3>
                	<p>Criação e manutenção da marca online para ela se tornar uma lovemark <3</p>
                	
                </article>
            </div>
        </section><!--/ container-->        
    </div><!--/ row-fluid-->  



    <div class="row-fluid" style="border-top: 1px solid rgba(0, 0, 0, 0.1); margin: 60px 0px; padding: 10px;">
        <section class="container">


            <div class="row add-top-more">
                <article class="span12" style="position:relative">
                    <h3 class="promo-text-inv darken"><span>Pacotes especiais para ONGs, Startups, Negócios Sociais e E.I.</span></h3>
					<span id="pacote-ver">Clique p/ saber mais</span>
                </article>
            </div>

			<div id="pacote-esconde">
			
			<span style="width: 100%; float: left; padding: 5px 35px; text-align: center; color: rgb(255, 255, 255); margin-bottom: 15px; font-size: 12px;">O importante aqui é que os serviços e direitos sociais disponibilizados por estes segmentos alcance o maior número de pessoas possíveis para que possam ter acesso a estes. Pacotes com preços "base" para setores e nichos que a rede MeoSite julga de grande importância para o desenvolvimento economico e social do país e local. Os valores são exemplos para cada pacote de serviços, não estando aqui serviços de alta técnica de programação e artística, que podem ser adicionados, caso solicitado, no briefing do cliente. Todos os pacotes possuem briefing via email para análise simples de mercado e conceito da marca.</span>
			
            <div class="row add-bottom-main">
                    <article class="span3 pricing bg-red">
                        <p class="p-name">Básico</p>
                        <p class="p-price">R$360,00 <span class="p-small">/em até 6x</span></p>
                        <ul>
                            <li>Desenho do Layout</li>
                            <li>Desenvolvimento do Site</li>
                        </ul>
                        <div class="signup"><a href="#contato" class="btn btn-renova remove-top">Quero este</a></div>
                    </article>

                    <article class="span3 pricing bg-green">
                        <p class="p-name">Básico +</p>
                        <p class="p-price">R$460,00 <span class="p-small">/em até 6x</span></p>
                        <ul>
                            <li>Desenho do Layout</li>
                            <li>Desenvolvimento do Site</li>
                            <li>Registro de domínio (.com ou .com.br)</li>
                        </ul>
                        <div class="signup"><a href="#contato" class="btn btn-renova remove-top">Quero este</a></div>
                    </article>

                    <article class="span3 pricing bg-blue">
                        <p class="p-name">Completo</p>
                        <p class="p-price">R$540,00 <span class="p-small">/em até 6x</span></p>
                        <ul>
                            <li>Desenho do Layout</li>
                            <li>Desenvolvimento do Site</li>
                            <li>Registro de domínio (.com ou .com.br)</li>
                            <li>Email personalizado (nome@empresa.com.br)</li>
                        </ul>
                        <div class="signup"><a href="#contato" class="btn btn-renova remove-top">Quero este</a></div>
                    </article>

                    <article class="span3 pricing bg-orange">
                        <p class="p-name">Completo +</p>
                        <p class="p-price">R$620,00 <span class="p-small">/em até 6x</span></p>
                        <ul>
                            <li>Desenho do Layout</li>
                            <li>Desenvolvimento do Site</li>
                            <li>Registro de domínio (.com ou .com.br)</li>
                            <li>Email personalizado (nome@empresa.com.br)</li>
							<li>Um ano de anúncio no Google (Institucional)</li>
                        </ul>
                        <div class="signup"><a href="#contato" class="btn btn-renova remove-top">Quero este</a></div>
                    </article>
                 </div>
				 
			</div><!-- pacote Esconde Fim -->
				 
        </section><!--/ container-->        
    </div><!--/ row-fluid-->  
</section><!--/ container-->        
</section><!--/ page-->







<section id="newsreel" class="bg-dark master-section">

	<section class="container-fluid inner mob-bg-remove">
    <div class="row-fluid">
        <section class="container" style="margin-bottom:55px;">
		
		<div class="row add-top-main">
                <article class="span12">
                   
                    <h1 class="main-heading"><span>Processo</span></h1>
                  
                </article>
            </div>
            
			
			 <div class="row add-top-more hidden-phone hidden-ie8">
                <article class="span12">
                    <h3 class="promo-text-inv-yellow darken"><span>Entenda como funciona o trabalho em rede e como será entregue nossos projetos</span></h3>
                </article>
            </div>

            <div class="row add-bottom hidden-phone hidden-ie8">
                <article class="span12">
                    <div>
                <ul class="cbp_tmtimeline">
                    <li>
                        <time class="cbp_tmtime"><span>1º</span></time>
                        <div class="cbp_tmicon cbp_tmicon-mail"></div>
                        <div class="cbp_tmlabel">
                            <h2>Conversa com o nosso Trustee</h2>
                            <p>Aqui será feito nosso primeiro <a class="scroll-link" href="#contato" data-soffset="100">contato</a> via email para entender o que você necessita para a sua empresa ou projeto e quais suas expectativas. Aqui também é hora de sanar dúvidas em relação aos nossos serviços. Normalmente, se for por email, será feita uma troca de 3 emails ou até que tenhamos confiança de passar para a próxima etapa, se o projeto for aceito por nós e se você mostrar interesse.</p>
                        </div>
                    </li>
                    <li>
                        <time class="cbp_tmtime"><span>2º</span></time>
                        <div class="cbp_tmicon cbp_tmicon-brifar"></div>
                        <div class="cbp_tmlabel col-white">
                            <h2>É hora de brifar</h2>
                            <p>Depois da conversa com o nosso Trustee é hora de coletar as informações para a realização do projeto, ações digitais e para o envio do orçamento base. Cores, mercado, estratégia, usuários, formatos, identidade, essência, objetivos. </p>
                        </div>
                    </li>
                    <li>
                        <time class="cbp_tmtime"> <span>3º</span></time>
                        <div class="cbp_tmicon cbp_tmicon-rede"></div>
                        <div class="cbp_tmlabel">
                            <h2>Interagir com a rede</h2>
                            <p>Depois de recebido o briefing, materiais gráficos e de feito ajustes; o Trustee começa a criar a equipe que irá desenvolver o projeto e apresentará a você possíveis recursos e artes para tornar o projeto mais eficiente. Para cada projeto, se necessário, será preciso ilustradores, animadores, programadores, especialistas em mídias sociais e por aí vai. </p>
                        </div>
                    </li>
                    <li>
                        <time class="cbp_tmtime"><span>4º</span></time>
                        <div class="cbp_tmicon cbp_tmicon-screen"></div>
                        <div class="cbp_tmlabel col-white">
                            <h2>É hora de cocriarmos</h2>
                            <p>Esta é a parte mais divertida. Começamos a dar vida ao projeto, com feedback contínuo de você, para criarmos o website/projeto ideal e efetivarmos as ações seguindo o briefing. Depois de tudo pronto, testado e aprovado por você, é hora de colocar no ar. =)</p>
                        </div>
                    </li>
               
                </ul>
            </div>
                </article>
            </div>
			
            
        </section><!--/ container-->        
    </div><!--/ row-fluid-->   
    </section><!--/ container-->       

</section><!--/ page-->



<section id="portfolio" class="bg-dark master-section">

    <section class="container-fluid inner mob-bg-remove">
    <div class="row-fluid add-bottom-main">
        <section class="container">
            <div class="row add-top-main">
                <article class="span12" style="position:relative">
                   
                    <h1 class="main-heading"><span>a rede</span></h1>
					<span id="dica" style="margin-left: 77px; width: 122px;">os artistas que cocriam os projetos</span>
                </article>
            </div>

            <div class="row">
            <article class="span12">
            <section id="options" class="clearfix">
                <ul id="filters" class="option-set clearfix" data-option-key="filter">
                <li class="inner-link"><a href="#filter" data-option-value="*" class="selected">todos</a></li>
                <li class="inner-link"><a href="#filter" data-option-value=".ilustracao">ilustração</a></li>
                <li class="inner-link"><a href="#filter" data-option-value=".tipografia">tipografia</a></li>
                <li class="inner-link"><a href="#filter" data-option-value=".ux">ux design</a></li>

                </ul>
            </section> <!-- #options -->
            </article><!-- span12 : ends -->
        </div><!-- row : ends -->


        <div class="row">
                <article class="span12">

                    <div id="container" class="clearfix portfolio">
    
      
          
    
    <div class="element ilustracao height-02 folio-item">
            <img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/portfolio/p01.jpg"/>
            
           
            <h5 class="folio-subtitle titles">Laura Bohill</h5>
        </div>



        <div class="element ilustracao height-01 folio-item">
            <img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/portfolio/p02.jpg"/>
           
            <h5 class="folio-subtitle titles">Daniel Djanie</h5>
        </div>



        <div class="element tipografia height-01 folio-item">
            <img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/portfolio/p03.jpg"/>
           
            <h5 class="folio-subtitle titles">Gabriela Benavides</h5>
        </div>
    


        <div class="element ilustracao height-02 folio-item">
            <img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/portfolio/p07.jpg"/>
            
            <h5 class="folio-subtitle titles">Krzysztof Nowak</h5>
        </div>


        <div class="element ilustracao height-02 folio-item">
            <img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/portfolio/p04.jpg"/>
            
            <h5 class="folio-subtitle titles">Jonathan Quintin</h5>
        </div>


        <div class="element ilustracao height-01 folio-item">
            <img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/portfolio/p06.jpg"/>
            
            <h5 class="folio-subtitle titles">Andrea Manzati</h5>
        </div>



        <div class="element ilustracao height-01 folio-item">
            <img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/portfolio/p05.jpg"/>
           
            <h5 class="folio-subtitle titles">Tomba Lobos</h5>
        </div>



        <div class="element ilustracao height-01 folio-item">
            <img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/portfolio/p08.jpg"/>
           
            <h5 class="folio-subtitle titles">Clint Reid</h5>
        </div>
    
    
      <div class="element ux height-01 folio-item">
            <img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/portfolio/p09.jpg"/>
            
            <h5 class="folio-subtitle titles">Enes Danis</h5>
        </div>


        <div class="element ilustracao height-01 folio-item">
            <img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/portfolio/p10.jpg"/>
           
            <h5 class="folio-subtitle titles">Cody Small</h5>
        </div>



        <div class="element ux height-02 folio-item">
            <img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/portfolio/p11.jpg"/>
            
            <h5 class="folio-subtitle titles">Moe Slah</h5>
        </div>
      
        

        <div class="element ux height-01 folio-item">
            <img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/portfolio/p12.jpg"/>
            
            <h5 class="folio-subtitle titles">s-pov</h5>
        </div>



        <div class="element ilustracao height-01 folio-item">
            <img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/portfolio/p13.jpg"/>
            
            <h5 class="folio-subtitle titles">Martin Wisniewski</h5>
        </div>



        <div class="element ilustracao height-01 folio-item">
            <img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/portfolio/p14.jpg"/>
            
            <h5 class="folio-subtitle titles">Matt Williams</h5>
        </div>



        <div class="element ux height-01 folio-item">
            <img alt="MeoSite" title="" class="lazy" src="images/grey.gif" data-original="images/portfolio/p15.jpg"/>
           
            <h5 class="folio-subtitle titles">Eugene Rudyy</h5>
        </div>



      

    
  </div> <!-- #container -->
                    
                </article><!-- span12 : ends -->
            </div><!-- row : ends -->   


            
        </section><!--/ container-->        
    </div><!--/ row-fluid--> 
</section>
</section><!--/ page-->





<section id="about" class="master-section">

	<section class="container-fluid inner mob-bg-remove">
    <div class="row-fluid">
        <section class="container">
            <div class="row add-top-main">
                <article class="span12" style="position:relative">
                	
                	<h1 class="main-heading"><span>trustee</span></h1>
                	<span id="dica" style="margin-left: 85px;">o cara que faz acontecer</span>
                </article>
            </div>
        </section><!--/ container-->        
    </div><!--/ row-fluid-->   
    </section><!--/ container-->       

</section><!--/ page-->

<section id="about-end">

    <section class="container-fluid inner mob-bg-remove">
    <div class="row-fluid">
        <section class="container">

            

            <div class="row add-top">
                <article class="span8">
				
					<div id="avatar">
						
						<a href="http://www.facebook.com/jonataseduardo" style="float:left"><div style="background: url('./images/social/02.png') repeat scroll 0px 0px transparent; height: 30px; width: 30px; position: absolute; right: 28px; top: 20px;"></div></a>
						<a href="http://www.lastfm.com.br/user/jottaee" style="float:left"><div style="background: url('./images/social/08.png') repeat scroll 0px 0px transparent; height: 30px; width: 30px; position: absolute; right: 28px; top: 75px;"></div></a>
						<a href="http://pinterest.com/CreativeBoy/" style="float:left"><div style="background: url('./images/social/05.png') repeat scroll 0px 0px transparent; height: 30px; width: 30px; position: absolute; right: 28px; top: 130px;"></div></a>
						
					
					</div>
				
                    <div class="wrap-pad">
                        <h3 class="inner-sub-heading">Jonatas Eduardo</h3>
                        <p>Estudante de Administração linha de formação Marketing na Pontifícia Universidade Católica do Rio Grande do Sul - <a href="http://www.pucrs.br/">PUCRS</a>; co-fundador na startup <a href="https://vimeo.com/52399249">PortoAlegreVC</a> e Netweaver na rede de empreendedorismo e inovação <a href="http://the.crowdcreative.org/">CrowdCreative</a>.<br/><br/>Já passou por empresas como <a href="http://cadastra.com.br/">Cadastra</a>; <a href="http://www.dbg.com.br/">Digital Branding Group</a>; Gringo e <a href="http://perestroika.com.br/">Perestroika</a>. Trabalhou para clientes como <a href="http://www.livrariasaraiva.com.br/">Livraria Saraiva</a>; <a href="http://colombo.com.br/">Colombo</a> e <a href="http://www.lojasmm.com/">LojasMM</a> gerenciando suas contas de Marketing Digital. Participa regularmente de eventos no <a href="http://estaleiroliberdade.com.br/">Estaleiro Liberdade</a> e possui certificado <a href="http://www.google.com/intl/pt-BR/adwords/professionals/">Google Adwords Professional</a>. Concluiu cursos em Atelier de Novos Negócios da <a href="http://sementenegocios.com.br/">Semente Negócios</a> e Negócios Sociais da <a href="http://www.artemisia.org.br/">Artemisia</a>, hoje é aluno da <a href="http://www.arataacademy.com/port/">Arata Academy</a> e <a href="http://escoladeredes.net/">Escola de Redes</a>.</p>
                    </div>
                    
                </article>
                <article class="span4" style="margin-top: 60px;">
                    <div class="wrap-pad">
                        <article class="skillset">

                            <h3>Marketing</h3>
                            <div class="progress progress-danger">
                                <div class="bar width80"></div>
                            </div>

                            <h3>Web Design</h3>
                            <div class="progress progress-danger">
                                <div class="bar width100"></div>
                            </div>

                            <h3>SEM</h3>
                            <div class="progress progress-danger">
                                <div class="bar width88"></div>
                            </div>

                            <h3>Redes Sociais</h3>
                            <div class="progress progress-danger">
                                <div class="bar width75"></div>
                            </div>

                        </article>
                    </div>
                </article>
            </div>
			
			<div class="row add-top">
                <article class="span12">
                    <div class="wrap-pad">
                        <div class="shoutout">De nada adianta ter um belo website com inúmeros recursos se ele não estiver em sintonia com o seu público alvo; além de um website funcional, é preciso conhecer o mercado que a empresa/projeto atua ou irá atuar, para atingir em cheio seus potenciais clientes, senão, o website virá apenas mais um www para se colocar no cartão de visitas.
                        <h4>- Jonatas Eduardo</h4>
                        </div>
                    </div>
                </article>
            </div>


           

         

            
        </section><!--/ container-->        
    </div><!--/ row-fluid-->   
    </section><!--/ container-->       

</section><!--/ page-->







<section id="contato" class="bg-dark master-section">

    <section class="container-fluid inner mob-bg-remove">
    <div class="row-fluid">
        <section class="container">
            <div class="row add-top-main">
                <article class="span12" style="position:relative">
                    
                    <h1 class="main-heading"><span>Contato</span></h1>
                   <span id="dica">pré-orçamento gratuíto</span>
                </article>
				<div id="explicacao">Este será nosso primeiro contato. Nele precisamos saber o que você deseja? Se criar um site institucional, um blog, vender online, ganhar curtidores no facebook... Após, lhe retornaremos em até 24h com um pré-orçamento.</div>
            </div>

            <div class="row">
                    <article class="span12 text-center">
                        <div id="fname"  class="alert alert-error error add-top">
                        O nome não pode ficar vazio
                        </div>
                        <div id="fmail" class="alert alert-error  error add-top">
                        Por favor, coloque um email válido
                        </div>
                        <div id="fmsg" class="alert alert-error  error add-top">
                        O campo de mensagem não pode ficar vazio. =)
                        </div>
                    </article>
                </div>

				
			<?php  

			/*** create the form token ***/
			$form_token = uniqid();

			/*** add the form token to the session ***/
			$_SESSION['form_token'] = $form_token;
				
			?>
				
				
            <div class="row add-bottom-main">
                    <form name="myform" id="contactForm" action="sendcontact.php" enctype="multipart/form-data" method="post">  
					
					<input type="hidden" name="form_token" value="<?php echo $form_token; ?>" />
					
                    <article class="span6">
                        <textarea  id="msg" rows="3" cols="40" name="mensagem" placeholder="O que você deseja?"></textarea>
                    </article>

                    <article class="span6">
                        <input size="100" type="text" name="nome" id="name" placeholder="Nome">
                        <input type="text"  size="30" id="email" name="email" placeholder="Email">
                        <button type="submit" name="submit" id="submit" class="btn btn-renova-alt add-top-half">Enviar Mensagem</button>
                    </article>
                        
                    </form>
            </div>
            
        </section><!--/ container-->        
    </div><!--/ row-fluid-->   
    </section><!--/ container-->       

</section><!--/ page-->






  



    <section class="footer-down container-fluid section">
        <div class="row-fluid">

            <section class="container">
                 <div class="row" style="width: 45%; float: left;">
                    <article class="span12">
                        <div class="copyright" style="position:relative"> 
							<div id="facebook"><iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fwww.facebook.com%2FMeoSite&amp;width=100&amp;height=21&amp;colorscheme=light&amp;layout=button_count&amp;action=like&amp;show_faces=true&amp;send=false&amp;appId=236068809754091" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe></div>
                            <p>Copyleft &copy; 2013 MeoSite.</p><br/>
							<span id="small"><p>Rua Rivadávia Correia, 08/204 - Partenon</p>
							<p>Porto Alegre RS | Brasil | CEP 91530-370</p>
							<P>sac@meosite.com</p></span>
                        </div>
                    </article>
                 </div>
				 
				<div id="pagseguro">
					<span>Todos os pagamentos são feitos de forma segura usando o Pagseguro. <a href="https://pagseguro.uol.com.br/" target="_blank">Saiba mais</a>.</span>
					<img class="lazy" src="images/grey.gif" data-original="https://p.simg.uol.com.br/out/pagseguro/i/banners/pagamento/todos_animado_550_50.gif"/>
				</div>

            </section>
        </div>
    </section>
    <!--page:ends-->


</div>
<!--main-wrapper:ends-->


<!-- Le javascript
    ================================================== --> 
<!-- Placed at the end of the document so the pages load faster --> 

<link href="assets/css/bootstrap.css" rel="stylesheet">
<link href="assets/css/extension.css" rel="stylesheet">
<link href="assets/css/typography.css" rel="stylesheet">
<link href="assets/css/font-awesome.min.css" rel="stylesheet"> 
<link href="stylesheets/portfolio.css" rel="stylesheet"/>
<link href="stylesheets/isotope.css" rel="stylesheet">
<link href="stylesheets/colorbox.css" rel="stylesheet"/> 
<link href="stylesheets/hoverdir.css" rel="stylesheet"/>
<link href="stylesheets/jquery.fancybox-1.3.4.css" media="screen" rel="stylesheet"/>
<link href="stylesheets/price-table.css" rel="stylesheet" />
<link href="stylesheets/timeline.css" rel="stylesheet" />

<script src="javascripts/jquery.js" type="text/javascript"></script> 
<script src="javascripts/jquery.lazyload.min.js" type="text/javascript"></script> 
<script src="assets/js/bootstrap-transition.js" type="text/javascript"></script>  
<script src="javascripts/modernizr.custom.js" type="text/javascript"></script>
<script src="javascripts/waypoints.min.js" type="text/javascript"></script>
<script src="javascripts/jquery.hoverdir.js" type="text/javascript"></script>
<script src="javascripts/jquery.backstretch.min.js" type="text/javascript"></script>	 
<script src="javascripts/jquery.colorbox.js" type="text/javascript"></script>  
<script src="javascripts/jquery.isotope.min.js" type="text/javascript"></script> 
<script src="javascripts/jquery.fancybox-1.3.4.js" type="text/javascript" ></script>
<script type="text/javascript" src="javascripts/jquery.tweet.js"></script>
<script src="javascripts/form-validation.js" type="text/javascript"></script>   
<script src="javascripts/scroll.js" type="text/javascript"></script> 
<script src="javascripts/script.js" type="text/javascript"></script> 





    <script>
        var navigation = responsiveNav("#nav", { // Selector: The ID of the wrapper
          animate: true, // Boolean: Use CSS3 transitions, true or false
          transition: 400, // Integer: Speed of the transition, in milliseconds
          label: "Menu", // String: Label for the navigation toggle
          insert: "after", // String: Insert the toggle before or after the navigation
          customToggle: "", // Selector: Specify the ID of a custom toggle
          openPos: "relative", // String: Position of the opened nav, relative or static
          jsClass: "js", // String: 'JS enabled' class which is added to <html> el
          init: function(){}, // Function: Init callback
          open: function(){}, // Function: Open callback
          close: function(){} // Function: Close callback
        });
    </script>


		<!-- Full Screen Background Images are defined via JS here: -->
    <script>
        $.backstretch([
          "images/bg1.jpg",
          "images/bg2.jpg"
        ], {
            fade: 3000,
            duration: 8000
        });
    </script>   
	
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-44905053-1', 'meosite.com');
	  ga('send', 'pageview');

	</script>

</body>
</html>
