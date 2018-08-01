<style>
body{
  background: #fff;
 font-family: 'Roboto Slab', serif;
}

.header-top {
	padding: 1px 0px 1px 0;
	background: #fff;
	box-shadow: inset 0px 0px 3px 0px #969595;
	-webkit-box-shadow: inset 0px 0px 4px 0px #969595;
	-o-box-shadow: inset 0px 0px 4px 0px #969595;
	-moz-box-shadow: inset 0px 0px 4px 0px #969595;
}
.top-icons {
	float:left;
	margin-top: 3px;
}
	.welcom-grid-img img {
	margin-top:.4em
	}

.top-icons ul {
padding: 0;
}
.top-icons ul li a.gp span{
	background-position:-108px 1px;
}
.top-icons ul li a.gp span:hover{
	background-position:-108px -26px;
}
.top-icons ul li a.tw span{
	background-position: -156px 0px;
}
.top-icons ul li a.tw span:hover{
	background-position: -156px -28px;
}
.top-icons ul li a.fb span{
	background-position: -198px 0px;
}
.top-icons ul li a.fb span:hover{
	background-position: -198px -26px;
}
.top-icons ul li a.rss span{
	background-position: -236px 0px;
}
.top-icons ul li a.rss span:hover{
	background-position: -236px -28px;
}
ul.left-icons {
	float: right;
}
.header-bottom ul li{
	display:inline-block;
	float:left;
	list-style: none;
}
.header-bottom{
	background: url("images/icons.png") no-repeat;
	min-height: 32px;
	width: 100%;
	background-size: cover;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	margin-bottom: 2.5em;
}
.header-slider {
	border-top: 3px solid #DEDEDE;
}
.icon{
	float:left;
	margin-right:5px;
}
.icon-data{
	float:left;
}
.icon-data p,.icon-data p a{
	font-size:14px;
	font-weight:500;
	color: #C6C4C4;
	margin:0;
}
i.location{
	width: 20px;
	height: 20px;
	background: url('images/icons.png') no-repeat -0px 1px;
	display: inline-block;
}
i.message{
	width: 20px;
	height: 20px;
	background: url('images/icons.png') no-repeat -68px 0px;
	display: inline-block;
}
i.telephone{
	width: 20px;
	height: 20px;
	background: url('images/icons.png') no-repeat -27px 0px;
	display: inline-block;
}
/*-----sub-head-section------*/
.logo{
	height: 75px;
	width: 180px;
	float: left;
	margin-top:10px;
	font-size:32px;
	font-weight:700;
	text-transform:uppercase;
	color:#<?php echo $_SESSION['colour']; ?>
}
.logo img{
	margin-top:8px;
}

.logo h1,.logo-2  h3{
	
	margin: 0;
	padding: 0;
		
	
}
.logo h1 a,.logo-2  h3 a{
	font-size: 1em;
	color:#109E06;
	font-weight: 400;
	
}
.logo-2  h3 a{
	color: #fff;
}
.logo h1 a, .logo-2  h3 a{
	text-decoration:none;

}
.search-box {
float: right;
width: 32%;
margin: 2em 0;
}
span.menu{
	display:none;
}
.b-search{
	position: relative;
	border: 1px solid #C0BCBC;
	padding: 0.5em 0;
	background: #fff;
	width: 99%;
}
.b-search input[type="text"]{
	width: 80%;
	outline: none;
	padding: 0em 0.6em;
	font-size: 1em;
	color: #999;
	position: relative;
	border: none;
}
.b-search input[type="submit"]{
	background: url(images/search.png) no-repeat 0px 2px;
	border: none;
	height: 26px;
	width: 26px;
	position: absolute;
	outline: none;
	top: 6px;
	right: 2px;
}
/*------------------ Slider Part starts Here----------*/

#slider2,
#slider3 {
  box-shadow: none;
  -moz-box-shadow: none;
  -webkit-box-shadow: none;
  margin: 0 auto;
}
.rslides_tabs li:first-child {
  margin-left: 0;
}
.rslides_tabs .rslides_here a {
  background: rgba(255,255,255,.1);
  color: #fff;
  font-weight: bold;
}
.events {
  list-style: none;
}
.callbacks_container {
  position: relative;
  float: left;
  width: 100%;
}
.callbacks {
  position: relative;
  list-style: none;
  overflow: hidden;
  width: 100%;
  padding: 0;
  margin: 0;
}
.callbacks li {
  position: absolute;
  width: 100%;
}
.callbacks img {
  position: relative;
  z-index: 1;
  height: auto;
  border: 0;
}
.callbacks .caption {
	display: block;
	position: absolute;
	z-index: 2;
	font-size: 20px;
	text-shadow: none;
	color: #fff;
	left: 0;
	right: 0;
	padding: 10px 20px;
	margin: 0;
	max-width: none;
	top: 10%;
	text-align: center;
}
.callbacks_nav {
  	position: absolute;
	-webkit-tap-highlight-color: rgba(0,0,0,0);
	top: 81%;
	left: 0;
	opacity: 0.7;
	z-index: 3;
	text-indent: -9999px;
	overflow: hidden;
	text-decoration: none;
	height: 61px;
	width: 55px;
	background: transparent url("images/arrows.png") no-repeat left top;
	margin-top: -65px;
}
 .callbacks_nav:hover{
  	opacity: 0.5;
  }
.callbacks_nav.next {
  left: auto;
  background-position: right top;
  right: 41px;
 }
 .callbacks_nav.prev {
	right: auto;
	background-position:left top;
	left: 41px;
}
#slider3-pager a {
  display: inline-block;
}
#slider3-pager span{
  float: left;
}
#slider3-pager span{
	width:100px;
	height:15px;
	background:#fff;
	display:inline-block;
	border-radius:30em;
	opacity:0.6;
}
#slider3-pager .rslides_here a {
  background: #FFF;
  border-radius:30em;
  opacity:1;
}
#slider3-pager a {
  padding: 0;
}
#slider3-pager li{
	display:inline-block;
}
.rslides {
  position: relative;
  list-style: none;
  overflow: hidden;
  width: 100%;
  padding: 0;
  margin: 0;
}
.rslides li {
  -webkit-backface-visibility: hidden;
  position: absolute;
  display: none;
  width: 100%;
  left: 0;
  top: 0;
}
.rslides li{
  position: relative;
  display: block;
  float: left;
}
.rslides img {
  height: auto;
  border: 0;
  }
.callbacks_tabs{
	list-style: none;
	position: absolute;
	bottom: 22%;
	z-index: 999;
	left:47.5%;
	padding: 0;
	margin: 0;
}
.slider-top {
position: absolute;
top:20%;
width:70%;
left:16%;
margin: 0 auto;
z-index: 999;
text-align: center;
}
.slider-top h2 {
color: #777777;
font-size:3.7em;
margin: 0em 0;
font-weight:700;
background: #e4e2e0;
padding: 21px 2px;
}
.slider-top p {
color: #fff;
font-size: 3em;
font-weight: 600;
background: rgba(134, 132, 133, 0.65);
padding: 12px 0;
width: 26%;
margin: 4% auto;
}
.callbacks_tabs li{
	display:inline-block;
}
@media screen and (max-width: 600px) {
  .callbacks_nav {
    top: 47%;
    }
}
.callbacks_tabs a{
 visibility: hidden;
}
.callbacks_tabs a:after {
  content: "\f111";
  font-size:0;
  font-family: FontAwesome;
  visibility: visible;
  display: block;
  height:18px;
  width:18px;
  display:inline-block;
  border:2px solid #fff;
  border-radius: 30px;
  -webkit-border-radius: 30px;
  -moz-border-radius: 30px;
  -o-border-radius: 30px;
  -ms-border-radius: 30px;
  background: #fff;
}
.callbacks_here a:after{
	border: 2px solid #0b8203;
	background: #<?php echo $_SESSION['colour']; ?>;
}
/*----Navgation------*/
ul.left-icons {
float: right;
padding:7px 0 0 0;
margin: 0;
}
.top-icons ul li,ul.left-icons li{
	display:inline-block;
	margin-right: 7px;
	list-style: none;
}
.top-icons ul li a span{
	width:24px;
	height:24px;
	display: inline-block;
	background: url('images/blue-link.png') no-repeat;
	vertical-align: middle;
	-webkit-transition: all 0.3s ease;
			-moz-transition: all 0.3s ease;
			-o-transition: all 0.3s ease;
			transition: all 0.3s ease;
}
.top-nav{
	float:none;
	text-align: center;
}
.top-nav:before,
.top-nav:after {
    content: " ";
    display: table;
}
.top-nav:after {
    clear: both;
}
.top-nav ul li{
	display: inline-block;
	list-style: none;
	margin-right: 25px;
}
.top-nav ul li:nth-child(5){
	margin-right:0;
	}
.top-nav ul li a {
color: #444;
text-decoration: none;
font-size: 1.3em;
font-weight:500;
padding: 10px 18px 10px;
display: block;
}
.top-nav ul li.active a, .top-nav ul li a:hover {
border-top: 4px solid #<?php echo $_SESSION['colour']; ?>;
border-bottom: 4px solid #<?php echo $_SESSION['colour']; ?>;
}
nav {
	position: relative;
	float: right;
	padding: 0 15px;
}
nav ul {
	padding: 0;
	float: right;
	margin: 0;
}
nav li {
	display: inline;
	position:relative;
}
nav a {
	display: inline-block;
	text-decoration: none;
	line-height: 40px;
}
nav a:hover{
	text-decoration:none;
}
nav a#pull {
	display: none;
}
/*Styles for screen 600px and lower*/
@media screen and (max-width: 768px) {
	nav { 
  		height: auto;
  		float:none;
  	}
  	nav ul {
  		width: 100%;
  		display: block;
  		height: auto;
  	}
  	nav li {
  		width:100%;
  		position: relative;
  		float: none;
  		font-size: 0.9em
  	}
  	nav li a {
	margin: 0px;
	}
  	nav a {
	  	text-align: left;
	  	width: 100%;
  	}
}
/*Styles for screen 515px and lower*/
@media only screen and (max-width : 768px) {
	nav {
		border-bottom: 0;
		float:none;
	}
	nav ul {
		display: none;
		height: auto;
		margin:48px 0 0 0;
		background: #A6AAAD;
	}
	nav a#pull {
		display: block;
		position: relative;
		color: #F26D7D;
		text-align: right;
		position: absolute;
		top: 0px;
		right: 0px;
		background: #<?php echo $_SESSION['colour']; ?>;
		padding: 3px 0 5px 0;
	}
	nav a#pull:after {
		content:"";
		background: url('nav-icon.png') no-repeat;
		width: 30px;
		height: 30px;
		display: inline-block;
		position: absolute;
		right: 15px;
		top: 10px;
	}
	nav a#pull img{
		margin-right:2%;
	}
	.top-nav ul li a {
		color: #fff;
		padding: 0em 0;
		font-size:1.2em;
		text-align: center;
		}
		.top-nav ul li {
	display: block;
	 margin-right:0px;
	}
	nav a#pull h6{
		font-size:1.5em;		
		font-weight: 600;
		position: absolute;
		left: 16px;
		top: 3px;
		color: #fff;
	}
	.top-nav ul li a:hover {
		border-top:none;
		border-bottom:none;
	}
	.top-nav ul li.active a{
	border-top:3px solid#<?php echo $_SESSION['colour']; ?>;
	border-bottom:3px solid#<?php echo $_SESSION['colour']; ?>;
	}
}
/*-----welcome-section---------*/
.welcome-section{
	padding: 4em 0 2em 0
}
.welcom-grid-text h3,.welcom-grid-list h3{
	color:#<?php echo $_SESSION['colour']; ?>;
	font-size: 2.2em;
	margin: 0em 0;
}
.welcom-grid-img img{
	width: 100%;
}
.welcom-grid-list h3{
	color: #3c4042;
	font-size:2em;
	font-weight:200;
}
.welcom-grid-text p{
	color: #555;
	font-size: 1em;
	margin: 1em 0;
	font-weight: 400;
	line-height: 1.9em;
}
/*------new-projects-------*/
/*--project--*/
ul.project_top{
	padding:0;
	list-style:none;
	text-align:center;
}
ul.project_top li{
	width: 33.2%;
	float:left;
}
ul.project_top li.project1{
	position:relative;
}
h3.phead{
	color: #<?php echo $_SESSION['colour']; ?>;
	font-size: 2.2em;
	margin: 0em 0 0 16px;
	font-weight: 400;
	padding-bottom: 1em;
}
ul.project_top li.project1 h3, ul.project_top li.project2 h3, ul.project_top li.project3 h3, ul.project_top li.project5 h3{
	color: #5B5858;
	font-size: 1.1em;
	font-weight: 500;
	text-align: center;
	text-transform: uppercase;
}
ul.project_top h5 {
text-align: left;
color: #555;
font-weight: 500;
}
ul.project_top li.project4 h3{
	color: #fff;
	font-size: 2.5em;
	text-transform: uppercase;
	font-weight: bold;
}
ul.project_top li.project2,ul.project_top li.project3{
	padding: 0;
}
ul.project_top li.project4{
	padding: 3em 0em;
	min-height: 275px;
}
menu#cl-effect-8 {
	margin: 0;
	padding:0;
}
.view {
   overflow: hidden;
   position: relative;
   text-align: center;
   cursor: default;
   min-height: 232px;
   padding: 0em 1em;
}
.view .mask,.view .content {
	position: absolute;
	overflow: hidden;
	top: -4px;
	left: 1px;
	cursor: pointer;
	width: 379px;
	height: 212px;
}
.view img {
   display: block;
   position: relative;
}
.mask{
	position: relative;
}
.info {
    display: inline-block;
	text-decoration: none;
	background: none;
 	margin:3.5em 0 1em;
}
.view-first img {
   -webkit-transition: all 0.2s linear;
   -moz-transition: all 0.2s linear;
   -o-transition: all 0.2s linear;
   -ms-transition: all 0.2s linear;
   transition: all 0.2s linear;
   width: 100%;
}
.mask_desc {
	width: 70%;
	margin: 0 auto;
	position: absolute;
	top: 14%;
	left: 15%;
}
.mask_desc p{
	color: #fff;
	font-size: 1.4em;
	margin: 0;
	text-align: left;
	font-weight: 300;
}
.mask_desc h4{
	color:#fff;
	font-size:1.7em;
	line-height: 1.5em;
	font-weight: 500;
	margin: 0;
	text-transform: uppercase;
	text-align: left;
}
.mask_desc h6{
	color: #fff;
	font-size: 0.85em;
	line-height: 1.5em;
	font-weight: 400;
	margin: 0;
	text-align: left;
	font-family: 'Roboto Slab', serif;
}
.view-first .mask {
   -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=0)";
   filter: alpha(opacity=0);
   opacity: 0;
   background-color:rgba(11, 83, 6, 0.55);
   -webkit-transition: all 0.4s ease-in-out;
   -moz-transition: all 0.4s ease-in-out;
   -o-transition: all 0.4s ease-in-out;
   -ms-transition: all 0.4s ease-in-out;
   transition: all 0.4s ease-in-out;
}
.view-first ul.mask_img {
   -webkit-transform: translateY(100px);
   -moz-transform: translateY(100px);
   -o-transform: translateY(100px);
   -ms-transform: translateY(100px);
   transform: translateY(100px);
   -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=0)";
   filter: alpha(opacity=0);
   opacity: 0;
   -webkit-transition: all 0.2s linear;
   -moz-transition: all 0.2s linear;
   -o-transition: all 0.2s linear;
   -ms-transition: all 0.2s linear;
   transition: all 0.2s linear;
}
.view-first:hover img {
   -webkit-transform: scale(1.1,1.1);
   -moz-transform: scale(1.1,1.1);
   -o-transform: scale(1.1,1.1);
   -ms-transform: scale(1.1,1.1);
   transform: scale(1.1,1.1);
}
.view-first a.info {
   -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=0)";
   filter: alpha(opacity=0);
   opacity: 0;
   -webkit-transition: all 0.2s ease-in-out;
   -moz-transition: all 0.2s ease-in-out;
   -o-transition: all 0.2s ease-in-out;
   -ms-transition: all 0.2s ease-in-out;
   transition: all 0.2s ease-in-out;
}
.view-first:hover .mask {
   -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=100)";
   filter: alpha(opacity=100);
   opacity: 1;
}
.view-first:hover h2,
.view-first:hover ul.mask_img,
.view-first:hover a.info {
   -ms-filter: "progid: DXImageTransform.Microsoft.Alpha(Opacity=100)";
   filter: alpha(opacity=100);
   opacity: 1;
   -webkit-transform: translateY(0px);
   -moz-transform: translateY(0px);
   -o-transform: translateY(0px);
   -ms-transform: translateY(0px);
   transform: translateY(0px);
}
.view-first:hover ul.mask_img {
   -webkit-transition-delay: 0.1s;
   -moz-transition-delay: 0.1s;
   -o-transition-delay: 0.1s;
   -ms-transition-delay: 0.1s;
   transition-delay: 0.1s;
}
a.view-btn {
padding: 0.2em 1em;
text-decoration: none;
border:1px solid #fff;
margin-top: 0.8em;
display: inline-block;
color: #fff;
font-size: 1.2em;
font-weight:400;
text-align: center;
-webkit-appearance: none;
transition: 0.5s all;
-webkit-transition: 0.5s all;
-moz-transition: 0.5s all;
-o-transition: 0.5s all;
background: none;
}

a.offer-btn span {
background: url(images/right-arrow.png) no-repeat 0px 0px;
width:10px;
height: 10px;
display: inline-block;
cursor: pointer;
vertical-align: middle;
margin:5px 8px 4px 4px;
}
.view-btn {
text-align: left;
}
/*-------About-section------*/
nav.top-nav.two {
background: #ddd;
}
.about-head h3 {
	color: #<?php echo $_SESSION['colour']; ?>;
	font-size: 2.8em;
	margin: 0.6em 0;
	font-weight:400;
}
.about-head h4 {
	color: #0C5E06;
	font-size: 1.25em;
	margin: 0em 0;
	font-weight: 400;
	text-transform: uppercase;
	line-height: 1.7em;
	text-decoration: underline;
}
.about-head p {
color: #555;
font-size: 1.1em;
margin: 0.6em 0;
font-weight: 400;
line-height: 1.9em;
}
.about-grids {
	padding: 2em 0;
}
.About-section {
	padding: 2em 0;
}
.about-head h4 {
color: #<?php echo $_SESSION['colour']; ?>;
font-size: 1.2em;
margin: 0em 0;
font-weight: 400;
text-transform: uppercase;
line-height: 1.9em;
text-decoration: underline;
}
.about-grid h3 {
	color: #<?php echo $_SESSION['colour']; ?>;
	font-size: 1.7em;
	margin: 0.6em 0;
	font-weight: 400;
}
.about-grid p{
	color: #555;
	font-size: 1.1em;
	margin:0;
	font-weight:400;
	line-height: 1.8em;
}
.about-head {
padding-bottom: 12px;
}
 /*------start-slider-------*/
 #testimonials{
	background:url(images/slide.jpg)no-repeat 0px 0px;
	-webkit-background-size:cover;
	-o-background-size:cover;
	-moz-background-size:cover;
	min-height: 300px;
}
article > div {
	text-align: center;
}
.wmuSlider {
	position: relative;
	overflow: hidden;
	min-height:330px;
	text-align: center;
}
.wmuSlider .wmuSliderWrapper article {
	position: relative;
	text-align: center;
}
.wmuGallery .wmuGalleryImage {
	position: relative;
	text-align: center;
}
.wmuGallery .wmuGalleryImage img {
	max-width: 100%;
	width: auto;
	height: auto;
}
/* Default Skin */
.wmuGallery .wmuGalleryImage {
	margin-bottom: 10px;
}
.wmuSliderPrev, .wmuSliderNext {
	position: absolute;
	width:41px;
	height: 51px;
	text-indent: -9999px;
	top: 40%;
	z-index: 2;
	cursor: pointer;
	-webkit-transition: all 0.3s ease;
			-moz-transition: all 0.3s ease;
			-o-transition: all 0.3s ease;
			transition: all 0.3s ease;
}
.wmuSliderPrev {
	background: url(images/Prev.png) no-repeat;
	left:170px;
}
.wmuSliderNext {
	background: url(images/Next.png) no-repeat;
	right: 155px;
}
.client-main{
	margin:0 auto;
	width: 80%;
	padding:10% 0;
}
.slide-text{
	width:72%;
	margin: 0 auto;
}
.slide-text p {
	color: #fff;
	font-size: 1.4em;
	text-align:center;
	line-height: 1.9em;
	font-weight: 400;
}
article > div > span{
	text-align: center;
	padding: 1em 0 0 0;
	display:block;
}
 article:nth-child(2) > div > span > a {
	color:#585C67;
	cursor: pointer;
	font-size:1.2em;
}
article:nth-child(2) > div > span > a:hover{
color:#C0B9CD;
}
/*Services*/
.boxes h2{
	margin-bottom: 0;
}
.boxes li p{

}
.lb-album .btn1{
	margin-top: 10px;
}
.boxes li.btn1{
	padding: 0 10px 10px;
}
.lb-album {
margin: 0 auto;

padding: 0;
}
.lb-album li{
	float: left;
	padding: 15px;
	width: 23.5%;
	margin: 1% 0 5% 2%;
	background: #FFF;
	box-shadow: 0px 0px 6px #808080;
	-moz-box-shadow: 0px 0px 6px #808080;
	-webkit-box-shadow: 0px 0px 6px #808080;
	-o-box-shadow: 0px 0px 5px #808080;
	position: relative;
	list-style: none;
}
.lb-album li a img{
		width:100%;
	}
.lb-album li:first-child{
	margin-left:0;
}
.lb-album li > a,
.lb-album li > a img{
	display: block;
}
.lb-album li > a img{
	border:1px solid #f1f1f1;
}
.lb-album li > a{
	position: relative;
}
.lb-album li > a span{
	position: absolute;
	bottom:70px;
	left:110px;
	width:36px;
	height:36px;
	opacity: 0;
	-webkit-transition: opacity 0.3s linear;
	-moz-transition: opacity 0.3s linear;
	-o-transition: opacity 0.3s linear;
	-ms-transition: opacity 0.3s linear;
	transition: opacity 0.3s linear;
}
.lb-album li > a img:hover{
	opacity:0.6;
}
.lb-album li > a:hover span{
	opacity:1;
	background:url(images/zoom.png) no-repeat;
	filter: alpha(opacity=99); /* internet explorer */
    -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(opacity=99)"; /*IE8*/
}
.lb-overlay{
	width: 0px;
	height: 0px;
	position: fixed;
	overflow: hidden;
	left: 0px;
	top: 0px;
	padding: 0px;
	z-index: 99;
	text-align: center;
	background:rgba(24, 23, 23, 0.91);
}
.lb-overlay a.lb-close{
	background: rgba(27,54,81,0.8);
	z-index: 1001;
	position: absolute;
	right: 27%;
	top:13%;
	width:27px;
	height:27px;
	background:url('images/close.png') no-repeat;
	overflow: hidden;
	opacity: 0;
	filter: alpha(opacity=0); /* internet explorer */
    -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(opacity=0)";
	-webkit-transition: opacity 0.3s linear 1.2s;
	-moz-transition: opacity 0.3s linear 1.2s;
	-o-transition: opacity 0.3s linear 1.2s;
	-ms-transition: opacity 0.3s linear 1.2s;
	transition: opacity 0.3s linear 1.2s;
}
.lb-overlay img{
	/* height: 100%; For Opera max-height does not seem to work */
	position: relative;
	-webkit-box-shadow: 1px 1px 4px rgba(0,0,0,0.3);
	-moz-box-shadow: 1px 1px 4px rgba(0,0,0,0.3);
	box-shadow: 0px 2px 7px rgba(0,0,0,0.2);
}
.lb-overlay:target {
	width: auto;
	height: auto;
	bottom: 0px;
	right: 0px;
	padding: 8em 1em;
}
.lb-overlay:target img {
	-webkit-animation: scaleDown 1.2s ease-in-out;
	-moz-animation: scaleDown 1.2s ease-in-out;
	-o-animation: scaleDown 1.2s ease-in-out;
	-ms-animation: scaleDown 1.2s ease-in-out;
	animation: scaleDown 1.2s ease-in-out;
}
.boxes p {
font-size: 0.934em;
line-height: 1.8em;
font-family: 'Roboto Slab', serif;
padding-top: 10px;
}
.lb-overlay:target a.lb-close,
.lb-overlay:target > div{
	opacity: 1;
	filter: alpha(opacity=99); /* internet explorer */
    -ms-filter:"progid:DXImageTransform.Microsoft.Alpha(opacity=99)"; /*IE8*/
}
@-webkit-keyframes scaleDown {
  0% { -webkit-transform: scale(10,10); opacity: 0; }
  100% { -webkit-transform: scale(1,1); opacity: 1; }
}
@-moz-keyframes scaleDown {
  0% { -moz-transform: scale(10,10); opacity: 0; }
  100% { -moz-transform: scale(1,1); opacity: 1; }
}
@-o-keyframes scaleDown {
  0% { -o-transform: scale(10,10); opacity: 0; }
  100% { -o-transform: scale(1,1); opacity: 1; }
}
@-ms-keyframes scaleDown {
  0% { -ms-transform: scale(10,10); opacity: 0; }
  100% { -ms-transform: scale(1,1); opacity: 1; }
}
@keyframes scaleDown {
  0% { transform: scale(10,10); opacity: 0; }
  100% { transform: scale(1,1); opacity: 1; }
}
.btn1 a{
	padding: 0.2em 1em;
	text-decoration: none;
	border:double#0b8203;
	margin-top: 0.8em;
	display: inline-block;
	color: #fff;
	font-size: 1.2em;
	font-weight: 400;
	-webkit-appearance: none;
	transition: 0.5s all;
	-webkit-transition: 0.5s all;
	-moz-transition: 0.5s all;
	-o-transition: 0.5s all;
	background:#0b8203;
}
.btn1 a:hover{
	border:double#fff;
}
.boxes h2{
font-size: 2.2em;
margin: 0.6em 0;
color: #<?php echo $_SESSION['colour']; ?>;
font-weight: 400;
}
.content {
padding: 1em 0 0em 0;
}
/*-- blog --*/
.blog{
	
}
.blog a{
	text-decoration:none;
}
.blog-head-left{
	float:left;
}
.blog-head-left h3{
	color:#FFF;
	font-size:2em;
}
.blog-head-right{
	float:right;
	margin-top: 0.7em;
}
.blog-head-right ul li{
	display:inline-block;
}
.blog-head-right ul li a{
	color:#69BAE9;
}
.blog-head-right ul li a span{
	height:13px;
	width:10px;
	background:url(images/nav-arrow.png) no-repeat 0px 0px;
	display:inline-block;
	vertical-align: middle;
	margin:0 0.5em;
}
/*----*/
.blog-content-left{
	float:left;
}
.blog-content-right{
	float:right;
	width: 23.5%;
}
.blog-artical-info-head h2 a, .blog-artical-info-head h2{
font-size: 0.87em;
margin: 0.5em 0;
display: block;
font-weight: 500;
text-transform: uppercase;
text-decoration: none;
color: #0B8203;
}
.b-tag-weight ul{
	margin:0;
	padding:0;
}
.blog-artical-basicinfo{
	float:left;
	width: 10%;
}
.blog-artical-basicinfo ul{
	margin:0;
	padding:0;
}
.blog-artical-basicinfo li{
	width:106px;
height: 138px;
border: 1px solid#0b8203;
text-align: center;
list-style: none;
background: #0b8203;
border-bottom: 1px dashed#fff;
margin-left: 10px;

}
.blog-artical-info{
	float:right;
	width:90%;
}
.post-date span{
display: block;
color: #fff;
font-size: 1.6em;
margin-top: 1em;
	
}
.post-date label{
	font-size: 16px;
color: #fff;
margin-top:0.6em;
display: block;
font-weight: 500;
}
.post-date p{
	padding: 0.7em 0 0 0;
}

.blog-content{
	margin: 3em 0 6em;
}
.blog-artical-info-head ul li{
	display:inline-block;
}
.blog-artical-info-head ul li a:hover{
	color:#93c53e;
}
.blog-poast-info {
	background: #0B8203;
	padding: 0.9em 1em 0.2em;
	text-align: left;
}
.blog-poast-info ul li {
	margin-right: 1em;
}
.blog-poast-info ul li a,.blog-poast-info ul li {
	color: #FFF;
	text-transform: uppercase;
	font-size: 0.875em;
	transition: 0.5s all;
	-webkit-transition: 0.5s all;
	-moz-transition: 0.5s all;
	-o-transition: 0.5s all;
	float: left;
}
.blog-poast-info ul li a{
	margin-top: 2px;
}
.blog-poast-info ul li a:hover {
	text-decoration:none;
	opacity: 0.8;
}

i.admin {
	width: 20px;
	height: 20px;
	background: urlimages/img-sprite.png) no-repeat 1px 0px;
   float: left;
   margin-top: 1px;
}
i.date {
	width: 20px;
	height: 20px;
	background: url(images/img-sprite.png) no-repeat -26px 0px;
	float: left;
	margin-top: 1px;
}
i.comment {
	width: 20px;
	height: 20px;
	background: url(images/img-sprite.png) no-repeat -58px 0px;
	float: left;
	margin-top: 1px;
}
.blog-artical-info-text p{
	color: #555;
	font-size: 1.1em;
	line-height: 1.7em;
	margin:0;
	font-weight:400;
	text-align:justify
}
.blog-artical-info-text p a{
	color: #0B8203;
	margin-left: 0.4em;
	font-size: 1.1em;
	vertical-align: middle;
}
.blog-artical{
	margin-bottom:2em;
}
.blog-artical-info-img img{
	width:100%;
	margin-top:10px
}
.blog-pagenat ul li{
	display: inline-block;
}
.blog-pagenat ul li a{
	display: block;
	background:#<?php echo $_SESSION['colour']; ?>;
	padding:8px 1.1em;
	font-size: 0.9em;
	text-transform: uppercase;
	color: #FFF;
	font-weight:400;
	display: inline-block;
	margin-top: 1em;
	text-decoration: none;
}
.blog-pagenat ul li a:hover{
	background: #444;
}
.blog-pagenat{
	text-align:center;
}
a.offer-btn.two{
	font-size: 1.4em;
	margin-bottom: 1.3em;
}
.blog-artical-info-text {
margin-bottom: 2em;
}
.product-head{
	padding: 0.5em 0;
	border-top: 1px solid #E0DDDD;
	border-bottom: 1px solid #E0DDDD;
	margin-bottom: 1em;
}
.product-head li{
	display:inline-block;
}
.product-head li a{
	color:#444;
	font-weight:400;
	font-size: 0.875em;
	padding-bottom: 0.2em;
	display: inline-block;
	text-transform: uppercase;
	transition:0.5s all;
	-webkit-transition:0.5s all;
	-moz-transition:0.5s all;
	-o-transition:0.5s all;
}
.product-head li a span{
	font-weight:700;
}
.product-head li.active-page{
	color:#<?php echo $_SESSION['colour']; ?>;
	font-size: 0.875em;
	padding-bottom: 0.2em;
	text-transform: uppercase;
	transition:0.5s all;
	-webkit-transition:0.5s all;
	-moz-transition:0.5s all;
	-o-transition:0.5s all;
	font-weight:700;
}
.blog-artical-info-head h2 {
font-size: 1.9em;
color: #109E06;
font-weight: 300;
}
/*----/single----*/
.comments-main {
	border: 1px solid #D5D4D4;
	padding: 17px 0px;
	margin: 15px 0px;
}
.cmts-main-right h5 {
	font-size: 1em;
	color: #4e4e4b;
	margin: 0px;
	font-weight: 600;
}
.comments h4 {
	font-size: 1.6em;
	margin-bottom: 1.2em;
	color: #4e4e4b;
	font-weight: 600;
}
.cmts-main-right p{
	font-size: 15px;
	color: #555;
	margin:15px 0px;
}
.cmnts-left p {
	font-size: 13px;
	color:#999;
	font-weight:400;
}
.cmnts-right a {
	padding: 6px 12px;
	color: #fff;
	font-weight: 600;
	font-size: 14px;
	background: #999;
	transition: 0.5s all;
	-webkit-transition: 0.5s all;
	-moz-transition: 0.5s all;
	-ms-transition: 0.5s all;
	-o-transition: 0.5s all;
	outline: none;
}
.Archives {
margin-bottom:3em;
}
.cmts-main-left img{
	border: 3px solid#ccc;
	width:100%;
}
.cmnts-right a:hover{
	background: #333;
	text-decoration:none;
}
.col-md-6.cmnts-left {
	padding: 0px;
}
.col-md-6.cmnts-right {
	text-align: right;
	padding: 0px;
}
.comments {
	margin-top: 3em;
}
#commentform p {
	position: relative;
	padding: 8px 0;
	font-family: 'Roboto Slab', serif;
	font-size: 1em;
}
h4.leave {
color: #109E06;
font-size: 2.3em;
margin: 0.6em 0;
font-weight: 400;
}
.offer-btn {
text-align: left;
}
a.offer-btn {
text-decoration: none;
color: #<?php echo $_SESSION['colour']; ?>;
font-size: 1em;
border: none;
font-weight: 400;
}
#commentform label {
	display: block; 
	font-size:1em; 
	margin-top:15px;
	color:#888;
}
#commentform span {
	color: #A60000;
	position: absolute;
}
#commentform input[type="text"] {
	padding: 13px 20px;
	width: 60%;
	color: #444;
	font-size:0.85em;
	border: 1px solid #eee;
	background: #eee;
	outline: none;
	display: block;
	-webkit-appearance: none;
}
#commentform textarea {
	padding: 13px 20px;
	width:60%;
	color: #444;
	font-size:0.85em;
	outline: none;
	height:150px;
	display: block;
	resize: none;
	-webkit-appearance: none;
	font-weight:400;
	border: 1px solid #eee;
	background: #eee;
}
#commentform input[type="submit"] {
	padding: 16px 80px;
	color: #FFF;
	background: #444;
	outline: none;
	border: none;
	text-transform: uppercase;
	-webkit-appearance: none;
	font-size: 1.3em;
	font-weight: 600;
}
#commentform input[type="submit"]:hover {
	background:#222;
}
/*---contact-section----*/
.contact-section iframe{
	width:100%;
	min-height: 400px;
}
.contact-head {
padding: 1em 0 2.4em 0;
}
.contact-inner p {
font-size: 1.1em;
line-height: 1.8em;
text-align: left;
color: #555;
margin: 2% 0;
}
.contact-head h3,.contact-inner h4 {
color: #<?php echo $_SESSION['colour']; ?>;
font-size: 2em;
margin: 0em 0;
font-weight: 400;
}
form.con {
text-align:left;
margin-top: 1em;
}
form.con input[type="text"],form.con input[type="email"],form.con textarea {
	padding:12px;
	width: 80%;
	font-size: 15px;
	margin:8px 0px;
	border: 1px solid #eee;
	color: #555;
	background: none;
	background: #eee;
	-webkit-appearance: none;
	outline: none;
	font-weight: 400;
	-webkit-transition: all 0.3s ease-out;
	-moz-transition: all 0.3s ease-out;
	-ms-transition: all 0.3s ease-out;
	-o-transition: all 0.3s ease-out;
	transition: all 0.3s ease-out;
}
form.con input[type="text"]:hover,form.con textarea:hover{
	border: 1px solid  #9F9FA0;
}
form.con textarea {
	height:200px;
	resize: none;
	width: 80%;
}
form.con input[type="submit"] {
	margin-bottom: 1em;
	color: #fff;
	font-size: 1.2em;
	padding: 0.8em 1em;
	-webkit-appearance: none;
	-webkit-transition: all 0.3s ease-out;
	-moz-transition: all 0.3s ease-out;
	-ms-transition: all 0.3s ease-out;
	-o-transition: all 0.3s ease-out;
	transition: all 0.3s ease-out;
	font-weight:500;
	border:double#fff;
	text-transform: uppercase;
	outline: none;
	background:#<?php echo $_SESSION['colour']; ?>;
	width:15%;
}
form.con input[type="submit"]:hover{
	border:double#109E06;
}
.contact-section {
padding: 1.4em 0 3em 0;
}
/*--login--*/
.dreamcrub {
border-top: 1px solid #C9C9C9;
padding: 0.6em 0;
border-bottom: 1px solid #C9C9C9;
}
ul.breadcrumbs {
padding: 0;
list-style: none;
float: left;
}
ul.breadcrumbs li {
display: inline-block;
font-size: 1.1em;
color: #3F3F3F;
text-transform: uppercase;
}
li.home a {
font-size: 0.9em;
color:#44B139;
text-decoration: none;
font-weight: 600;
}
ul.previous {
padding: 0;
list-style: none;
float: right;
}
ul.previous li a {
color: #999;
font-size: 1em;
}
.col-md-6.login-left {
	width: 45%;
	float: left;
	border: 1px solid#CDCED1;
	padding: 0em 2em 2em 2em;
	margin: 3% 3%;
}
.login-left h3, .login-right h3 {
	color: #66ce5b;
	font-size: 1.3em;
	padding-bottom: 0.5em;
	font-weight:500;
	border-bottom: 1px solid#CDCED1
}
.login-left p, .login-right p {
	color: #555;
	display: block;
	font-size: 1.1em;
	margin: 0 0 0.5em 0;
	line-height: 1.5em;
}
 .login-right input[type="submit"]:hover{
	background: #109E06;
	text-decoration:none;
	color:#fff;
}
.login-right form {
	padding: 1em 0;
}
.login-right form div {
	padding: 0 0 1.1em 0;
}
.login-right span,.login-left span{
	color: #555;
	font-size:1em;
	padding-bottom: 0.2em;
	display: block;
	text-transform: uppercase;
}
.login-right input[type="text"],.login-left input[type="text"] {
	border: 1px solid #EEE;
	outline-color:#66ce5b;
	width: 75%;
	font-size:0.8125em;
	padding:11px 10px;
}
.login-left input[type="text"]{
	width:70%;
	margin: 6px 0 16px 0;
	padding:10px 10px;
}
.login-right input[type="submit"] {
	background:#444;
	color: #FFF;
	font-size: 1em;
	padding: 0.55em 1.5em;
	transition: 0.5s all;
	-webkit-transition: 0.5s all;
	-moz-transition: 0.5s all;
	-o-transition: 0.5s all;
	text-transform: uppercase;
	border:none;
	outline:none;
	}
a.forgot {
		font-size: 1em;
		margin-right: 11px;
	}
.col-md-6.login-right {
	width: 43%;
	float: right;
	border: 1px solid#CDCED1;
	margin: 3% 3%;
}
.account_grid {
padding: 2em 0;
}
/*--register--*/
.register{
	padding:3em 0 5em 0;
}
.register-top-grid h3, .register-bottom-grid h3 {
	color: #555;
font-size: 1.4em;
padding-bottom: 15px;
margin: 0;
font-weight: 500;
}
.register-top-grid div, .register-bottom-grid div {
	width: 48%;
	float: left;
	margin: 10px 0;
}
.register-top-grid span, .register-bottom-grid span {
	color:#555;
	font-size: 1.1em;
	padding-bottom: 0.2em;
	display: block;
	text-transform: uppercase;
}
.register-top-grid input[type="text"], .register-bottom-grid input[type="text"] {
	border: 1px solid #E8E3E3;
	outline-color:#FF5B36;
	width: 96%;
	font-size: 1em;
	padding: 0.5em;
}
.checkbox {
	margin-bottom: 4px;
	padding-left: 27px;
	font-size: 1.1em;
	line-height: 27px;
	cursor: pointer;
}
.checkbox {
	float: left;
	position: relative;
	font-size: 0.85em;
	color:#555;
}
.checkbox:last-child {
	margin-bottom: 0;
}
.news-letter {
	color: #555;
	font-weight:600;
	font-size: 0.85em;
	margin-bottom: 1em;
	display: block;
	text-transform: uppercase;
	transition: 0.5s all;
	-webkit-transition: 0.5s all;
	-moz-transition: 0.5s all;
	-o-transition: 0.5s all;
	clear: both;
}
.checkbox i {
	position: absolute;
	bottom: 5px;
	left: 0;
	display: block;
	width:20px;
	height:20px;
	outline: none;
	border: 2px solid #999;
}
.checkbox input + i:after {
	content: '';
	background: url("images/tic1.png") no-repeat 1px 2px;
	top: -1px;
	left: -1px;
	width: 15px;
	height: 15px;
	font: normal 12px/16px FontAwesome;
	text-align: center;
}
.checkbox input + i:after {
	position: absolute;
	opacity: 0;
	transition: opacity 0.1s;
	-o-transition: opacity 0.1s;
	-ms-transition: opacity 0.1s;
	-moz-transition: opacity 0.1s;
	-webkit-transition: opacity 0.1s;
}
.checkbox input {
	position: absolute;
	left: -9999px;
}
.checkbox input:checked + i:after {
	opacity: 1;
}
.news-letter:hover {
	color:#00BFF0;
}
.register-but{
	margin-top:1em;
}
.register-but form input[type="submit"] {
	background:#444;
	color: #FFF;
	font-size: 1.2em;
	padding: 0.6em 2em;
	transition: 0.5s all;
	-webkit-transition: 0.5s all;
	-moz-transition: 0.5s all;
	-o-transition: 0.5s all;
	text-transform: uppercase;
	border:none;
	outline:none;

}
.register-but input[type="submit"]:hover {
	background: #109E06;
}
div.register-bottom-grid {
	margin-top:3em;
}
a.button.rotate {
display: inline-block;
-webkit-transition-duration: 0.3s;
transition-duration: 0.3s;
-webkit-transition-property: transform;
transition-property: transform;
-webkit-transform: translateZ(0);
transform: translateZ(0);
box-shadow: 0 0 1px rgba(0, 0, 0, 0);
padding: 0.8em 1.1em;
background: #109E06;
color: #fff;
font-size: 1.1em;
text-transform: uppercase;
text-decoration: none;
}
/*-- Article --*/
 .article{
 	text-align:center;
 	margin-top:1em;
 }
 .article h3{
 	text-align: left;
 	color: #109E06;
	font-size: 1.5em;
	margin: 0em 0 0 16px;
	font-weight: 400;
	padding-bottom: 1em;
 }
 ul#slider3-pager {
		margin: 1em 0;
		padding: 0;
	}
/*--------error-page----------*/
.Error-found {
padding: 0em 0 6em 0;
text-align: center;
}
.Error-found h3 {
	color: #109E06;
	font-size: 20em;
	font-weight: 400;
	font-family: 'Abril Fatface', cursive;
	padding: 0;
}
.Error-found h3 span {
	color:#777;
	font-family: 'Abril Fatface', cursive;
}
.Error-found h4{
	color: #109E06;
	font-size: 3em;
	margin: 0em 0;
	font-weight: 400;
}
.Error-found p{
	font-weight: 400;
	font-size: 5em;
	color: #109E06;
	padding: 0;
	margin: 0 0 0.5em 0;
	font-family: 'Abril Fatface', cursive;
}
a.back {
outline: none;
font-size: 1.2em;
font-weight: 400;
padding: 0;
border: none;
color: #fff;
padding: 0.7em 1em;
background: #777;
}
a.back:hover {
background: #109E06;
text-decoration: none;
}
/*-------/footer------*/
.footer {
	padding: 0.7em 0;
	background:#4b4f5a;
	margin-top: 25px;
}
.logo-2 {
margin-top:2em;
}
ul.bottom-nav {
	padding: 0;
	margin: 0;
}
ul.bottom-nav  li{
	display:block;
	margin:0;
	list-style: none;
	}
ul.bottom-nav li a{
	font-size:0.98em;
	text-decoration: none;
	color: #fff;
	font-weight:500;
	line-height:1.8em;	
	display: block;
}
.footer-grid h3 {
	font-size: 1.35em;
	font-weight:400;
	color: #fff;
	text-transform: uppercase;
}
p.copy-right {
	font-size: 1.2em;
	color: #fff;
	font-weight: 400;
	margin-top: 1.3em;
}
p.copy-right a{
	color: #<?php echo $_SESSION['colour']; ?>;
	transition: 0.5s all;
	-webkit-transition: 0.5s all;
	-moz-transition: 0.5s all;
	-o-transition: 0.5s all;
}
.copy-right p a:hover{
	color: #fff;
}
.list.styled.arrow-list3 ul{
padding: 0;
}
.list.styled.arrow-list3 li {
	list-style: none;
}
ul.soc_icons3 li {
list-style: none;
}
.list.styled.arrow-list3 ul li a{
	display:inline-block;
	position: relative;
	vertical-align: middle;
	text-decoration: none;
	color: #fff;
	font-weight:500;
	line-height: 1.9em;
	font-size:0.98em;
}
.list.styled.arrow-list3  img {
margin-right:10px;
}
.list.styled.arrow-list3 ul li a:hover,ul.bottom-nav li a:hover{
	opacity: 0.5;
}
#toTop {
	display: none;
	text-decoration: none;
	position: fixed;
	bottom: 6px;
	right: 3%;
	overflow: hidden;
	width:38px;
	height:25px;
	border: none;
	text-indent: 100%;
	background: url("images/move-up.png") no-repeat 0px 0px;
}
#toTopHover {
	width:38px;
	height:25px;
	display: block;
	overflow: hidden;
	float: right;
	opacity: 0;
	-moz-opacity: 0;
	filter: alpha(opacity=0);
}
/*----Responsive-----*/
@media(max-width:1440px){
	.lb-overlay a.lb-close {
		right: 24%
		top: 15%;
	}
	
}
@media(max-width:1366px){
	.callbacks_tabs {
	bottom: 22%;
	left: 45%;
	}
	.slider-top {
		top: 20%;
		width: 70%;
		left: 14%;
	}
	.lb-overlay a.lb-close{
	right: 23%;
	top:15%;
	}
}
@media(max-width:1280px){

	
}
@media(max-width:1024px){
	.callbacks_tabs {
	bottom: 22%;
	z-index: 999;
	left: 45.5%;
	}
	.slider-top p {
	font-size: 3em;
	padding: 6px 0;
	width: 28%;
	margin: 4% auto;
	}
	.slider-top h2 {
	font-size: 3.1em;
	padding: 20px 0;
	}
	.welcom-grid-text p {
	font-size: 1.1em;
	margin: 1em 0 0 0;
	overflow: hidden;
	max-height: 200px;
	}
	.welcom-grid-img img {
	width: 98%;
	}
	.logo-2 img {
	width: 98%;
	}
	.about-head h4 {
	font-size: 1.15em;
	}
	ul.project_top li.project1 h3, ul.project_top li.project2 h3, ul.project_top li.project3 h3, ul.project_top li.project5 h3 {
	font-size: 0.96em;
	}
	.lb-album li > a span {
		bottom:35px;
		left:75px;
	}
	.lb-album li > a {
		padding:5px;
	}
	.lb-overlay a.lb-close {
		right:16%;
	}
	.about-head p {
	font-size: 1.1em;
	padding-bottom: 1em;
	}
	.wmuSlider {
	min-height: 289px;
	}
	.slide-text p {
	font-size: 1.3em;
	}
	.about-grid img {
	width: 100%;
	}
	.about-grid p {
	font-size: 1em;
	}
	.blog-artical-info {
	float: right;
	width: 88%;
	}
	.blog-artical-info-text {
		margin-bottom: 2em;
		width: 90%;
	}
}
@media(max-width:768px){
	.contact-head {
	padding: 4em 0 2.4em 0;
	}
	.contact-section iframe {
	width: 100%;
	min-height: 300px;
	}
	.slider-top p {
	font-size: 2.4em;
	padding: 6px 0;
	width: 30%;
	margin: 6% auto;
	}
	.view .mask, .view .content {
	width: 379px;
	height: 196px;
	}
	.slider-top h1 {
	font-size: 2.3em;
	padding: 20px 0;
	}
	.slider-top h2 {
	font-size: 2.3em;
	}
	.slide-text {
	width: 90%;
	margin: 0 auto;
	}
	.About-section {
	padding: 4em 0 2em 0;
	}
	.wmuSliderPrev, .wmuSliderNext {
	position: absolute;
	width: 41px;
	height: 51px;
	text-indent: -9999px;
	top: 36%;
	}
	.wmuSliderNext {
	background: url(images/Next.png) no-repeat;
	right: 73px;
	}
	.wmuSliderPrev {
	background: url(images/Prev.png) no-repeat;
	left: 70px;
	}
	#testimonials {
	background: url(images/slide.jpg)no-repeat 0px 0px;
	-webkit-background-size: cover;
	-o-background-size: cover;
	-moz-background-size: cover;
	min-height: 221px;
	}
	.wmuSlider {
	min-height: 257px;
	}
	.client-main {
	margin: 0 auto;
	width: 80%;
	padding: 12% 0;
	}
	.callbacks_tabs {
	bottom: 21%;
	left: 44.5%;
	}
	.about-grid img {
	width:65%;
	margin-top: 1.5em;
	}
	.logo-2 img {
	width: 32%;
	}
	.container {
	width: 707px;
	}
	.lb-album li {
		width: 47%;
		margin: 1% 3% 1% 0%;
	}
	.blog-artical-basicinfo li {
	width: 105px;
	height: 117px;
	}
	.blog-artical-info-text p {
	font-size: 1em;
	}
	.blog-artical-info {
	float: right;
	width: 83%;
	}
	.post-date span {
	margin-top: 0.5em;
	}
	.lb-overlay a.lb-close {
		right: 2%;
	}
	.welcome-section {
	padding: 5em 0;
	}
	ul.project_top li {
	width: 52%;
	float: left;
	}
	.blog-artical-info-head h2 a, .blog-artical-info-head h2 {
	font-size: 0.85em;
	}

	.blog-artical-info-text p {
	font-size: 1em;
	overflow: hidden;
	height: 126px;
	}
	#commentform p {
	position: relative;
	padding: 0px 0px;
	font-family: 'Roboto Slab', serif;
	font-size: 1em;
	height: 118px;
	margin: 0;
	}
	#commentform label {
	font-size: 1em;
	margin-top: 8px;
	}
	form.con input[type="submit"] {
	margin-bottom: 1em;
	font-size: 1.2em;
	padding: 0.7em 0.6em;
	background: #0c5e06;
	width: 25%;
	}
	.cmts-main-left img {
	width: 40%;
	}
	#commentform input[type="submit"] {
	padding: 11px 50px;
	margin-top: 1em;
	}
	.blog-artical-info-text p {
		font-size: 1em;
		overflow: hidden;
		height: 48px;
		margin: 8px 0;
	}
	.cmts-main-right {
	text-align: center;
	}
	.Error-found p {
	font-size: 4em;
	}
	.Error-found h3 {
	font-size: 17em;
	}
	.main {
	margin-top: 4em;
	}
	.welcom-grid-img img {

	margin-bottom: 0.9em;
	}
	.view {
	margin-top: 1em;
	}
	.cmnts-left p {
		height: 0;
	}
	.content {
	padding: 3em 0 0em 0;
	}
	.search-box {
	margin: 1.2em 0;
	}
	.logo h1 a, .logo-2 h3 a {
		font-size: 1.27em;
	}
	.logo {
	padding: 4px 0;
	}
	.welcome-section {
	padding: 3em 0;
	}
	.welcom-grid-img {
		margin-top: 4em;
	}
	h3.phead {
	font-size: 2.6em;
	}
	.welcom-grid-text h3, .welcom-grid-list h3,.boxes h2 {
	font-size: 2.6em;
	}
	.about-head h3 {
	font-size: 2.5em;
	}
	.about-head h4 {
		font-size: 1.1em;
	}
	.col-md-6.cmnts-right {
	text-align: center;
	}
	.col-md-2.cmts-main-left {
	 text-align: center;
	margin: 15px;
	}
	.article {
		margin-top: 4em;
	}
}
@media(max-width:640px){
	.container {
	width: 587px;
	}
	.view .mask, .view .content {
	width: 379px;
	height: 207px;
	}
	.slider-top h1 {
	font-size: 2em;
	padding: 18px 0;
	}
	.col-md-6.cmnts-right {
	padding-bottom: 10px;
	}
	.slider-top h1 {
		font-size: 2em;
		padding: 18px 0;
	}
	.slider-top h2 {
	font-size: 2em;
	}
	.callbacks_tabs {
		bottom:52px;
		z-index: 999;
		left: 43.5%;
	}
	.lb-overlay:target img {
	width: 65%;
	margin-top: 5em;
	}
	.top-icons {
	float: none;
	margin-top: 3px;
	text-align: center;
	}
	ul.left-icons {
	float: none;
	padding: 7px 0 0 0;
	margin: 0;
	text-align: center;
	}
	.blog-artical-basicinfo li {
	width: 100px;
	height: 112px;
	margin-left: -10px;
	}
	.blog-artical-info {
	float: right;
	width: 84%;
	}
	.blog-artical-info-head h2 a, .blog-artical-info-head h2 {
	font-size: 0.75em;
	}
	.lb-album li {
		width: 47%;
		margin: 1% 3% 1% 0%;
	}
	.lb-overlay a.lb-close {
		right:18%;
	}
	.lb-album li > a span {
		bottom:45px;
		left:85px;
	}
	.lb-album li > a {
		padding:5px;
	}
	.lb-overlay:target {
		padding:70px 15px 70px 15px;
	}
	ul.project_top li {
	width: 67%;
	float: left;
	}
	.client-main {
	margin: 0 auto;
	width: 90%;
	padding: 12% 0;
	}
	.wmuSlider {
		min-height: 207px;
	}
	.slide-text p {
		font-size: 1.2em;
	}
	.wmuSliderPrev {
	background: url(images/Prev.png) no-repeat;
	left: 20px;
	}
	.wmuSliderNext {
	background: url(images/Next.png) no-repeat;
	right: 33px;
	}
	#commentform label {
	font-size: 1em;
	float: none;
	margin-top: -8px;
	margin-right: 0;
	}
	#commentform p {
		position: relative;
		padding: 8px 0;
		font-family: 'Roboto Slab', serif;
		font-size: 1em;
		height: 99px;
		margin: 0;
	}
	.cmts-main-right h5 {
	margin: 16px 0;
	}
	#commentform textarea {
	padding: 13px 20px;
	width: 99%;
	}
	#commentform input[type="text"] {
	padding: 10px 20px;
	width: 78%;
	}
	.cmnts-left p {
		height: 0;
	}
	.content {
	padding: 3em 0 1em 0;
	}
	.article h3{
		font-size:1em;
	}
	.rslides img{
		width:100%;
	}
}
@media(max-width:480px) {
	.container {
	width: 426px;
	}
	.post-date span {
	font-size: 1.1em;
	}
	.lb-album li {
		width: 47%;
		margin: 1% 3% 1% 0%;
	}
	.lb-overlay a.lb-close {
		right: 17%;
		top: 15%;
	}
	.lb-album li > a span {
		bottom:45px;
		left:85px;
	}
	.lb-album li > a {
		padding:5px;
	}
	.lb-overlay:target {
		padding:70px 15px 70px 15px;
	}
	.post-date label {
	font-size: 11px;
	}
	.blog-artical-basicinfo li {
		width: 74px;
		height: 86px;
		margin-left: -11px;
	}
	.sub-header {
	padding: 0em 0;
	}
	.footer-grid h3 {
	font-size: 1.1em;
	}
	.search-box {
	float: right;
	width: 40%;
	}
	.blog-artical-info-head h2 a, .blog-artical-info-head h2{
	font-size: 0.7em;
	}
	li.span-2.phone{
	display:none;
	}
	.slider-top p {
	font-size: 1.8em;
	padding: 4px 0;
	width: 34%;
	margin: 2% auto;
	}
	.callbacks_tabs {
	bottom: 33px;
	z-index: 999;
	left: 39%;
	}
	.slider-top h2 {
		font-size: 1.4em;
		padding: 18px 0;
		margin-top: 1em;
	}
	.logo h1 {
	font-size: 2em;
	}
	ul.left-icons {
	float: none;
	padding: 0px 0 0 0;
	}
	div#project {
	padding: 0em 0 2em 0;
	}
	ul.project_top li {
		width: 90%;
		float: left;
	}
	.logo-2 img {
		width: 46%;
	}
	.mask_desc h4 {
	font-size: 1.3em;
	}
	.about-head h4 {
		font-size: 1.05em;
	}
	.slide-text p {
		font-size: 1.1em;
	}
	#testimonials {
		background: url(images/slide.jpg)no-repeat 0px 0px;
		-webkit-background-size: cover;
		-o-background-size: cover;
		-moz-background-size: cover;
		min-height: 184px;
	}
	.about-head h3 {
		font-size: 2.2em;
	}
	.about-head p {
	font-size: 1em;
	padding-bottom: 1em;
	}
	.boxes p {
	font-size: 0.934em;
	line-height: 1.8em;
	overflow: hidden;
	height: 49px;
	}
	.btn1 a {
	padding: 0.2em 1em;
	margin-top:0em;
	font-size: 1.1em;
	}
	#commentform input[type="submit"] {
	padding: 7px 30px;
	font-size: 1em;
	}
	.blog-artical-info-text p {
	font-size: 1em;
	overflow: hidden;
	height: 182px;
	}
	.cmnts-left p {
		height: 0;
	}
	form.con textarea {
	height: 151px;
	resize: none;
	width: 89%;
	}
	form.con input[type="submit"] {
	margin-bottom: 1em;
	font-size: 1em;
	padding: 0.7em 0.6em;
	background: #0c5e06;
	width: 28%;
	}
	.logo {
	padding: 10px 0;
	}
	.Error-found p {
	font-size: 3em;
	}
	.welcom-grid-text h3, .welcom-grid-list h3 {
	font-size: 1.8em;
	}
	h3.phead {
	font-size: 1.8em;
	}
	.logo h1 a, .logo-2 h3 a {
	font-size: 1.35em;
	}
	.comments h4 {
	font-size: 1.4em;
	}
	.cmts-main-right h5 {
	font-size: 0.9em;
	}
	.about-grid h3 {
	font-size: 1.4em;
	}
	.view .mask, .view .content {
	width: 379px;
	height: 198px;
	}
	ul#slider3-pager li a img {
		width: 66%;
	}
	#slider3-pager li{
		margin:0 -8px;
	}
}
@media(max-width:320px) {
	.container {
		width: 265px;
	}
	ul.left-icons {
	float: none;
	padding: 0px 0 0 0;
	display: none;
	}
	h3.phead {
	font-size: 1.3em;
	margin-bottom:-12px;
	}
	.logo h1 a, .logo-2 h3 a {
	font-size: 1.3em;
	}
	.slider-top h2 {
	font-size: 1em;
	padding: 12px 2px 10px 1px;
	margin-top: 1.7em;
	}
	.b-search {
	padding: 0.5em 0;
	width: 129%;
	}
	.sub-header {
	padding: 0em 0;
	}
	.slider-top p {
	font-size: 1.3em;
	padding: 4px 0;
	width: 45%;
	margin: -4% auto;
	}
	.slider-top h1 {
	font-size: 0.9em;
	padding: 13px 7px;
	margin-top: 1.1em;
	}
	.b-search input[type="text"] {
	font-size: 0.85em;
	}
	.b-search input[type="text"] {
	width: 80%;
	outline: none;
	padding: 0em 0.6em;
	font-size: 0.9em;
	}
	.callbacks_tabs a:after {
	height: 12px;
	width: 12px;
	}
	.search-box {
	float: right;
	width: 41%;
	display: none;
	}
	.list.styled.arrow-list3 ul li a {
	font-size: 0.9em;
	}
	.logo {
	float: none;
	padding-top: 2px;
	text-align: center;
	}
	.lb-album li {
		width:100%;
		margin: 2% 0% 2% 0%;
	}
	.lb-overlay a.lb-close {
		right: 15%;
		top: 21%;
	}
	.lb-overlay:target {
		padding:70px 15px 70px 15px;
	}
	.callbacks_tabs {
	bottom: 17%;
	z-index: 999;
	left: 38%;
	}
	nav a#pull h6 {
		font-size: 1.4em;
	}
	.welcom-grid-text h2, .welcom-grid-list h3,h3.phead {
	font-size: 1.5em;
	}
	.welcom-grid-text p {
	font-size: 0.9em;
	}
	.welcome-section {
	padding: 5em 0 2em 0;
	}
	.index_img img {
	width: 100%;
	}
	ul.project_top li {
	width: 100%;
	float: left;
	}
	.view .mask, .view .content {
		top: -4px;
	left: 4px;
	cursor: pointer;
	width: 226px;
	height: 126px;
	}
	.mask_desc p {
	font-size: 0.95em;
	}
	.mask_desc h4 {
		font-size: 0.9em;
	}
	.mask_desc h6 {
	font-size: 0.85em;
	overflow: hidden;
	height: 17px;
	}
	a.view-btn {
		padding: 0.1em 0.8em;
		margin-top: 7px;
		font-size: 1em;
	}
	.view {
	min-height: 232px;
	padding: 0em 1em;
	}
	.about-head h3 {
		font-size: 1.5em;
	}
	ul.project_top li.project1 h3, ul.project_top li.project2 h3, ul.project_top li.project3 h3, ul.project_top li.project5 h3 {
	font-size: 0.9em;
	line-height: 1.6em;
	}
	.about-head h4 {
	font-size: 0.82em;
	}
	.about-head p {
	font-size: 0.9em;
	}
	.slide-text p {
		font-size: 0.9em;
		overflow: hidden;
		height: 41px;
	}
	.client-main {
	margin: 0 auto;
	width: 90%;
	padding: 15% 0 0 0;
	}
	.wmuSlider {
	min-height: 106px;
	}
	#testimonials {
	background: url(images/slide.jpg)no-repeat 0px 0px;
	-webkit-background-size: cover;
	-o-background-size: cover;
	-moz-background-size: cover;
	min-height: 122px;
	}
	.logo-2 img {
	width: 60%;
	}
	.about-grid h3 {
	font-size: 1.2em;
	}
	p.copy-right {
	margin-top: 0.6em;
	font-size: 1.1em;
	}
	.client-main {
	margin: 0 auto;
	width: 74%;
	padding: 15% 0 0 0;
	}
	.wmuSliderNext {
	background: url(images/Next.png) no-repeat;
	right: 2px;
	}
	.wmuSliderPrev {
	background: url(images/Prev.png) no-repeat;
	left: -3px;
	}
	.blog-poast-info {
	background: #0B8203;
	padding: 0.5em 0em 0.2em;
	text-align: left;
	}
	.blog-artical-basicinfo li {
	width: 74px;
	height: 76px;
	margin-left: -36px;
	}
	.blog-content {
	margin: 1em 0 1em;
	}
	h4.leave {
	font-size: 1.5em;
	}
	.blog-artical-info-head h2 a, .blog-artical-info-head h2 {
	font-size: 0.5em;
	}
	div#project {
	padding: 0em 0 0em 0;
	}
	.comments h4 {
	font-size: 1.2em;
	}
	.blog-artical-info-text p {
	font-size: 0.9em;
	overflow: hidden;
	height: 159px;
	}
	.blog-poast-info{
	margin-left: -5px;
	}
	a.offer-btn.two {
	font-size: 1.1em;
	margin-bottom: 0em;
	}
    .blog-pagenat ul li a {
	padding: 3px 0.8em;
	font-size: 0.8em;
	margin-top: 1em;
	}
	#commentform input[type="text"] {
	padding: 6px 14px;
	width: 100%;
	}
	#commentform p {
	padding: 8px 0;
	font-size: 0.9em;
	height: 85px;
	margin: 0;
	}
	.comments {
	margin-top: -1em;
	}
	.cmts-main-right p {
	font-size: 0.8em;
	}
	.col-md-6.cmnts-left {
	height: 0;
	}
	.cmts-main-right p {
	font-size: 0.8em;
	overflow: hidden;
	height: 40px;
	}
	.col-md-6.cmnts-right {
	text-align: left;
	padding: 28px 0 0 0;
	}
	.cmnts-right a {
		padding: 4px 15px;
		font-size: 13px;
	}
	.cmts-main-left img {
	width: 45%;
	}
	.contact-head h3, .contact-inner h4 {
	font-size: 1.5em;
	}
	.contact-head {
	padding: 3em 0 1.4em 0;
	}
	.contact-section iframe {
	width: 100%;
	min-height: 158px;
	}
	form.con input[type="text"],form.con textarea {
	padding: 8px;
	width: 82%;
	font-size: 14px;
	margin: 3px 0px;
	}
	form.con textarea {
		height: 90px;
		resize: none;
		width: 99%;
	}
	form.con input[type="submit"] {
	margin-bottom: 1em;
	font-size: 0.9em;
	padding: 0.6em 0.6em;
	background: #0c5e06;
	width:44%;
	}
	.contact-section {
	padding: 1.4em 0 1em 0;
	}
	.contact-inner p {
	font-size: 0.9em;
	}
	.login-left p, .login-right p {
	font-size: 0.9em;
	}
	.login-right span, .login-left span {
		font-size: 0.9em;
	}
	a.button.rotate {
	font-size: 0.9em;
	}
	.Error-found h3 {
	font-size:9em;
	}
	.post-date p {
	padding: 0.4em 0 0 0;
	}
	.Error-found p {
	font-size: 2em;
	margin: 0 0 0.7em 0;
	}
	.Error-found h4 {
	font-size: 2em;
	}
	.col-md-6.login-left {
	width: 98%;
	padding: 0em 2em 2em 2em;
	margin: 1% 0%;
	}
	.col-md-6.login-right{
	width: 97%;
	float: none;
	margin: 347px 0% 0 0;
	}
	.Error-found {
	padding: 2em 0 3em 0;
	}
	a.back {
	font-size: 1em;
	padding: 0.6em 0.8em;
	}
	.welcom-grid-img {
	margin-top: 1em;
	}
	.login-right input[type="submit"] {
		font-size: 0.9em;
		padding: 0.4em 1em;
		margin-top: 0.4em;
	}
	.login-right input[type="text"], .login-left input[type="text"] {
	width: 91%;
	font-size: 0.8125em;
	padding: 7px 10px;
	}
	.login-left h3, .login-right h3 {
		font-size: 1em;
	}
	.register-top-grid h3, .register-bottom-grid h3 {
		font-size: 1em;
	}
	.register-top-grid span, .register-bottom-grid span {
	font-size: 0.9em;
	}
	.register-top-grid div, .register-bottom-grid div {
	width: 99%;
	float:none;
	margin: 4px 0;
	}
	.register-but form input[type="submit"] {
	font-size: 1em;
	}
	.register {
	padding: 2em 0 2em 0;
	}
	.welcom-grid-text h3, .welcom-grid-list h3, .boxes h2 {
	font-size: 1.7em;
	}
	.about-grid img {
	width: 85%;
	}
	.header-top{
		box-shadow: none;
	}
	.rslides img {
	
	}
}

.unstyled{
	margin-top: 20px;
	line-height: 34px;
	color:#666666
}


</style>