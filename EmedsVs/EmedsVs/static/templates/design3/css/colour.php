<style>

html, body, div, span, applet, object, iframe, h1, h2, h3, h4, h5, h6, p, blockquote, pre, a, abbr, acronym, address, big, cite, code, del, dfn, em, font, ins, kbd, q, s, samp, small, strike, strong, sub, sup, tt, var, dl, dt, dd, ol, ul, li, fieldset, form, label, legend, table, caption, tbody, tfoot, thead, tr, th, td {
	border: 0;
	font-family: inherit;
	font-size: 100%;
	font-style: inherit;
	font-weight: inherit;
	margin: 0;
	outline: 0;
	padding: 0;
	vertical-align: baseline;
}

html {
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
	overflow-y: scroll;
	-webkit-text-size-adjust: 100%;
	-ms-text-size-adjust: 100%;
}

ol, ul {
	list-style: none;
}

blockquote:before, blockquote:after, q:before, q:after {
	content: "";
}

blockquote, q {
	-webkit-hyphens: none;
	-moz-hyphens: none;
	-ms-hyphens: none;
	hyphens: none;
	quotes: none;
}

a img {
	border: 0;
}

/*! normalize.css v3.0.2 | MIT License | git.io/normalize */

html {
  font-family: sans-serif; /* 1 */
  -ms-text-size-adjust: 100%; /* 2 */
  -webkit-text-size-adjust: 100%; /* 2 */
}

body {
  margin: 0;
}

article, aside, details, figcaption, figure, footer, header, hgroup, main, menu, nav, section, summary {
  display: block;
}

audio, canvas, progress, video {
  display: inline-block; /* 1 */
  vertical-align: baseline; /* 2 */
}

audio:not([controls]) {
  display: none;
  height: 0;
}

[hidden], template {
  display: none;
}

a {
  background-color: transparent;
}

a:active, a:hover {
  outline: 0;
}

abbr[title] {
  border-bottom: 1px dotted;
}

b, strong {
  font-weight: bold;
}

dfn {
  font-style: italic;
}

h1 {
  font-size: 2em;
  margin: 0.67em 0;
}

mark {
  background: #ff0;
  color: #000;
}

small {
  font-size: 80%;
}

sub, sup {
  font-size: 75%;
  line-height: 0;
  position: relative;
  vertical-align: baseline;
}

sup {
  top: -0.5em;
}

sub {
  bottom: -0.25em;
}

img {
  border: 0;
}

svg:not(:root) {
  overflow: hidden;
}

figure {
  margin: 1em 40px;
}

hr {
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  height: 0;
}

pre {
  overflow: auto;
}

code, kbd, pre, samp {
  font-family: monospace, monospace;
  font-size: 1em;
}

button, input, optgroup, select, textarea {
  color: inherit; /* 1 */
  font: inherit; /* 2 */
  margin: 0; /* 3 */
}

button {
  overflow: visible;
}

button, select {
  text-transform: none;
}

button, html input[type="button"], input[type="reset"], input[type="submit"] {
  -webkit-appearance: button; /* 2 */
  cursor: pointer; /* 3 */
}

button[disabled], html input[disabled] {
  cursor: default;
}

button::-moz-focus-inner, input::-moz-focus-inner {
  border: 0;
  padding: 0;
}

input {
  line-height: normal;
}

input[type="checkbox"], input[type="radio"] {
  box-sizing: border-box; /* 1 */
  padding: 0; /* 2 */
}

input[type="number"]::-webkit-inner-spin-button, input[type="number"]::-webkit-outer-spin-button {
  height: auto;
}

input[type="search"]::-webkit-search-cancel-button, input[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none;
}

fieldset {
  border: 1px solid #c0c0c0;
  margin: 0 2px;
  padding: 0.35em 0.625em 0.75em;
}

legend {
  border: 0; /* 1 */
  padding: 0; /* 2 */
}

textarea {
  overflow: auto;
}

optgroup {
  font-weight: bold;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
}

td,
th {
  padding: 0;
}

/* border box everything */
* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}
*:after, *:before {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

/* Contain floats */
.clearfix, blockquote, .row, hr, .clear {
  zoom: 1;
}
.clearfix:before, /*blockquote:before, */.row:before, hr:before, .clearfix:after, .blockquote:after, .row:after, hr:after, .clear:before, .clear:after {
  content: "";
  display: table;
}
.clearfix:after, blockquote:after, .row:after, hr:after, .clear:after {
  clear: both;
}

html {
  height: 100%;
  max-height: 100%;
  overflow-x: hidden !important;
}

body {
  overflow-x: hidden !important;
  overflow-y: auto;
}

div, article, aside, details, figcaption, figure, footer, header, hgroup, nav, section, summary { 
  -ms-word-wrap: break-word;
  word-wrap: break-word;
}


/**
 * 2.0 Typography
 * -----------------------------------------------------------------------------
 */

body {
	background: #ffffff;
}

body, button, input, select, textarea {
	color: #666666;
	font-family: 'Open Sans', sans-serif;
	font-size: 14px;
	line-height: 24px;
}

h1, h2, h3, h4, h5, h6 {
	clear: both;
	font-weight: normal;
	font-family: 'Raleway', sans-serif;
	color:#333333;
	margin-bottom: 20px;
	line-height: normal;
}

h1 {
	font-size:38px;
}

h2 {
	font-size:36px;
}

h3 {
	font-size:24px;
}

h4 {
	font-size:22px;
}

h5 {
	font-size:18px;
}

h6 {
	font-size:14px;
}

h1 span, h2 span, h3 span, h4 span, h5 span, h6 span {
	font-weight: 600;
}

p {
	margin-bottom: 15px;
	text-align:justify
}

b, strong {
	font-weight: 700;
}

dfn, cite, em, i {
	font-style: italic;
}

blockquote {
	color: #333333;
	font-size: 18px;
	line-height: 30px;
	font-weight: 500;
	margin-bottom: 10px;
	padding: 25px;	
}
blockquote q {
	width: 100%;
	display: inline-block;
}
blockquote.style1 {
	margin-left: 41px;
	position: relative;	
	padding-left: 100px;
	display: inline-block;
}
blockquote.style1:before {
	position: absolute;
	content: "\f10e";
	font-family: FontAwesome;
	left: -41px;
	top: 0;
	bottom: 0;
	margin: auto;
	width: 89px;
	height: 89px;
	font-size: 24px;
	line-height: 77px;
	text-align: center;
	color: #ffffff;
	border-radius: 89px;
	border: 6px solid #ffffff;
}

blockquote cite {
	color: #999999;
	font-size: 12px;
	text-transform: uppercase;
	clear: both;
	display: inline-block;	
}

blockquote em, blockquote i, blockquote cite { 
	font-style: normal;
	font-size: 12px;
}

address {
	font-style: italic;
	margin: 0 0 1.6em;
}

code, kbd, tt, var, samp, pre {
	font-family: Inconsolata, monospace;
	-webkit-hyphens: none;
	-moz-hyphens: none;
	-ms-hyphens: none;
	hyphens: none;
}

pre {
	background-color: transparent;
	background-color: rgba(0, 0, 0, 0.01);
	border: 1px solid #eaeaea;
	border: 1px solid rgba(51, 51, 51, 0.1);
	line-height: 1.2;
	margin-bottom: 1.6em;
	max-width: 100%;
	overflow: auto;
	padding: 0.8em;
	white-space: pre;
	white-space: pre-wrap;
	word-wrap: break-word;
}

abbr[title] {
	border-bottom: 1px dotted #eaeaea;
	border-bottom: 1px dotted rgba(51, 51, 51, 0.1);
	cursor: help;
}

mark, ins {
	background-color: #fff9c0;
	text-decoration: none;
}

sup, sub {
	font-size: 75%;
	height: 0;
	line-height: 0;
	position: relative;
	vertical-align: baseline;
}

sup {
	bottom: 1ex;
}

sub {
	top: .5ex;
}

small {
	font-size: 75%;
}

big {
	font-size: 125%;
}

blockquote, .testimnonial-meta p, .social-networks li p, ::-webkit-input-placeholder, :-moz-placeholder, ::-moz-placeholder, :-ms-input-placeholder, .blog-item .entry-meta .entry-author p, ol.comment-list li.comment .comment-author a {
	font-family: 'Raleway', sans-serif;
}

.testimonial blockquote, .testimnonial-meta p span, button, input[type="button"], input[type="reset"], input[type="submit"] {
	font-family: 'Open Sans', sans-serif;
}

/**
 * 3.0 Elements
 * -----------------------------------------------------------------------------
 */

hr {
	background-color: #eaeaea;
	background-color: rgba(51, 51, 51, 0.1);
	border: 0;
	height: 1px;
	margin-bottom: 1.6em;
}

ul, ol {
	margin: 0 0 1.6em 1.3333em;
}

ul {
	list-style: disc;
}

ol {
	list-style: decimal;
}

li > ul, li > ol {
	margin-bottom: 0;
}

dl {
	margin-bottom: 1.6em;
}

dt {
	font-weight: bold;
}

dd {
	margin-bottom: 1.6em;
}

table, th, td {
	border: 1px solid #eaeaea;
	border: 1px solid rgba(51, 51, 51, 0.1);
}

table {
	border-collapse: separate;
	border-spacing: 0;
	border-width: 1px 0 0 1px;
	margin: 0 0 1.6em;
	table-layout: fixed; 
	width: 100%;
}

caption, th, td {
	font-weight: normal;
	text-align: left;
}

th {
	border-width: 0 1px 1px 0;
	font-weight: 700;
}

td {
	border-width: 0 1px 1px 0;
}

th, td {
	padding: 0.4em;
}

img {
	-ms-interpolation-mode: bicubic;
	border: 0;
	height: auto;
	width: 100%;
	vertical-align: middle;
}

figure {
	margin: 0;
}

del {
	opacity: 0.8;
}

::-moz-selection {
	color:#fff;
	text-shadow:none
}

::selection {
	color:#fff;
	text-shadow:none
}

.alignleft {
	display: inline;
	float: left;
	text-align: left;
}

.alignright {
	display: inline;
	float: right;
	text-align: right;		
}

.aligncenter {
	display: block;
	margin-right: auto;
	margin-left: auto;
	text-align: center;
}
.row .position-bottom-right {
	position: absolute;
	bottom: 0;
	right: 0;
	margin-bottom: 0;
}
.row .position-bottom-left {
	position: absolute;
	bottom: 0;
	left: 0;
}

blockquote.alignleft, .wp-caption.alignleft, img.alignleft {
	margin: 0.4em 1.6em 1.6em 0;
}

blockquote.alignright, .wp-caption.alignright, img.alignright {
	margin: 0.4em 0 1.6em 1.6em;
}

blockquote.aligncenter, .wp-caption.aligncenter, img.aligncenter {
	clear: both;
	margin-top: 10px;
	margin-bottom: 10px;
}

.wp-caption.alignleft, .wp-caption.alignright, .wp-caption.aligncenter {
	margin-bottom: 10px;
}

/**
 * 4.0 Forms
 * -----------------------------------------------------------------------------
 */

input, select, textarea {
	background: none;
	border-radius: 0;
	font-size: 10px;
	text-transform: uppercase;
	margin: 0;
	width: 100%;
	vertical-align: baseline;
	box-sizing: border-box;
	padding: 15px;
	border: 1px solid #e9e9e9;
	color: #999999;
	margin-bottom: 30px;
}

button, input {
	line-height: normal;
}

input, textarea {
	background-image: -webkit-linear-gradient(rgba(255, 255, 255, 0), rgba(255, 255, 255, 0)); /* Removing the inner shadow on iOS inputs */	
}

input:focus, textarea:focus {
	border: 1px solid #dddddd;
	color: #cccccc;
}

input:focus, select:focus {
	outline: 2px solid #c1c1c1;
}

button[disabled], input[disabled], select[disabled], textarea[disabled] { 
	cursor: default;
	opacity: .5;
}

button, input[type="button"], input[type="reset"], input[type="submit"] { 
	-webkit-appearance: button;
	border: 0;
	color: #ffffff;
	cursor: pointer;
	font-size: 12px;
	font-weight: 600;
	padding: 14px 40px 12px;
	text-transform: uppercase;
	float: right;
	border-radius: 3px;
	width: auto;
	-webkit-transition:all 300ms linear; -moz-transition:all 300ms linear; -o-transition:all 300ms linear; -ms-transition:all 300ms linear; transition:all 300ms linear;
}

button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover, button:focus, input[type="button"]:focus, input[type="reset"]:focus, input[type="submit"]:focus {
	outline: 0;
}

input[type="search"] {
	-webkit-appearance: textfield;
}

input[type="search"]::-webkit-search-cancel-button, input[type="search"]::-webkit-search-decoration {
	-webkit-appearance: none;
}

button::-moz-focus-inner, input::-moz-focus-inner {
	border: 0;
	padding: 0;
}

input[type="text"], input[type="search"], input[type="email"], input[type="url"], input[type="tel"], input[type="number"], input[type="range"], input[type="password"], input[type="date"], textarea {
	padding: 15px 15px 14px;
	width: 100%;
}

textarea {
	overflow: auto;
	vertical-align: top;
}

input[type="text"]:focus, input[type="search"]:focus, input[type="email"]:focus, input[type="url"]:focus, input[type="tel"]:focus, input[type="number"]:focus, input[type="range"]:focus, input[type="password"]:focus, input[type="date"]:focus, textarea:focus {
	outline: 0;
}

.post-password-form {
	position: relative;
}

.post-password-form label {
	color: #707070;
	color: rgba(51, 51, 51, 0.7);
	display: block;
	font-family: "Raleway", sans-serif;
	font-size: 12px;
	font-size: 1.2rem;
	font-weight: 700;
	letter-spacing: 0.04em;
	line-height: 1.5;
	text-transform: uppercase;
}

.post-password-form input[type="submit"] {
	padding: 0.7917em;
	position: absolute;
	right: 0;
	bottom: 0;
}

input[type="checkbox"], input[type="radio"] {
	padding: 0;
}


/* Placeholder text color -- selectors need to be separate to work. */
::-webkit-input-placeholder, :-moz-placeholder, ::-moz-placeholder, :-ms-input-placeholder {
	color: #999999;
}

/**
 * 5.0 Links
 * -----------------------------------------------------------------------------
 */

#preloader {
	width:100%;
	height:100%;
	position:fixed;
	top:0;
	left:0;
	background-color:#fff;
	background-repeat:no-repeat;
	background-position:center;
	z-index:10002
}

a {
	text-decoration: none;
	webkit-transition:all .2s ease 10ms;
	-moz-transition:all .2s ease 10ms;
	-o-transition:all .2s ease 10ms;
	transition:all .2s ease 10ms;

}

a:hover/*, a:focus*/ {
	color: #333333;
}


/**
 * 6.0 Header
 * -----------------------------------------------------------------------------
 */

header#masthead, .search-container .search:before {
	-moz-transition:  .1s ease-in-out;
	-webkit-transition:  .1s ease-in-out;
	-o-transition:  .1s ease-in-out;
	-ms-transition:  .1s ease-in-out;
	transition:  .1s ease-in-out;
}

header#masthead {
	width: 100%;	
	padding: 30px 0;	
}
header#masthead.std-header {
	padding: 0;

}
.header-main {
	width: 100%;
	clear: both;
	float: left;
}

.transparent-header {
	position: fixed;
	z-index: 9999;
}
.no-sticky .transparent-header {
	position: absolute;
}

.transparent-header #logo {
	margin: 7px 0 0;
}
.transparent-header .header-main.sticky #logo { 
	margin: 8px 0;
}

.std-header #logo a {
	display: table-cell;
	padding: 0;
	line-height: 95px;
	height: 95px;
	vertical-align: middle;
}
#logo div{
	font-size:30px;
	text-transform:uppercase;
	color:#<?php echo $_SESSION['colour']; ?>;
	font-weight:800
}
.logo-dark, .header-main.sticky .logo-dark, .transparent-header .logo-light, #logo a.standard-logo {
	display: inline-block;
}
.logo-light, .header-main.sticky .logo-light, .transparent-header .logo-dark, #logo a.retina-logo {
	display: none;
}

.header-main.sticky {
	background: #ffffff;
	padding: 0;
	border-bottom: 1px solid #f0f0f0;
	z-index: 9999;
	top: 0;
	position: fixed;
}

.header-main.sticky .main-nav > ul > li > a {
	color: #333333;
}

.std-header .header-main.sticky .main-nav > ul > li > a {
	line-height: 60px;
}

.header-main.sticky .search-container .search:before {
	color: #333333;
	line-height: 60px;
}

.transparent-header .header-main.sticky .search-container .search:before {
	line-height: 62px;
}

.std-header .header-main.sticky #logo a {
	line-height: 55px;
	height: 60px;
}

.header-with-topbar a, .std-header .main-nav > ul > li > a, .std-header .search-container .search:before {
	color: #333333;
}

.std-header {
	padding: 0;
}
.header-with-topbar .header-top {
	float: left;
}
.header-with-topbar .header-top .header-contact {
	float: left;
	width: auto;
	margin: 0;
}
.header-with-topbar .header-top ul.header-contact li {
	border-left: 1px solid rgba(255, 255, 255, 0.3);
	margin: 0;
	padding: 10px 20px;
	float: left;
}
.header-with-topbar .header-top ul.header-contact li:last-child {
	border-right: 1px solid rgba(255, 255, 255, 0.3);
}
.header-with-topbar .header-top ul.header-contact li, .header-with-topbar .header-top ul.header-contact li a {
	color: #cccccc;
}
.header-top .social-links-container {
	float: right;
	color: #cccccc;
	font-size: 12px;
}
.header-top .social-links-container p {
	float: left;
	line-height: 44px;
	margin: 0;
}
.header-top .social-links {
	margin-left: 30px;
	float: left;
}
.header-top .social-links li a {
	border: none;
	background: none;
	border-radius: 0;
	margin: 0;
	border-left: 1px solid rgba(255, 255, 255, 0.3);
	width: 50px;
	text-align: center;
	height: 44px;
}
.header-top .social-links li a:before {
	border-radius: 0;
}
.header-top .social-links li:last-child a {
	border-right: 1px solid rgba(255, 255, 255, 0.3);
}
.header-top .social-links li i {
	color: #cccccc;
	line-height: 42px;
}
.header-top .social-links li a:hover i {
	color: #ffffff;
}
/*.header-with-topbar .header-main {
	padding: 30px 0;
}
.header-with-topbar .main-nav, .header-with-topbar .search-container {
	margin-top: 2px;
}*/

/* Left Side Header */
@media (min-width: 767px) and (max-width: 2000px) {
	.left-pos-header {
		padding-left: 260px;
	}

	.left-side-header #logo {
		text-align: center;
		margin: 40px 0 0;
	}
	.left-side-header #logo a {
		display: inline-block;
	}
	.left-side-header #logo  a.retina-logo {
		display: none;
	}

	#masthead.left-side-header {
		position: fixed;
		left: 0;
		top: 0;
		height: 100%;
		width: 260px;
		z-index: 9999;
		padding: 0;
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
		float: left;
	}
	.left-side-header .header-main, .left-side-header .container {
		width: 100%;
		height: 100%;
	}
	.left-side-header .header-main {
		background: #ffffff;
	}
	.left-side-header .header-main .row .col-10, .left-side-header .header-main .row .col-2 {
		width: 100%;
		position: inherit;
	}

	.left-side-header .main-nav {
	    float: left;    
	}
	.left-side-header .main-nav > ul {
		margin: 40px 0 0;
		width: 100%;
	}
	.left-side-header .main-nav > ul li {
		width: 100%;
	}
	.left-side-header .main-nav ul li a {
		color: #333333;
		padding: 0;
		border-top: 1px solid rgba(0, 0, 0, 0.05);
		width: 100%;
		padding: 15px 24px;
		line-height: normal;
	}
	.left-side-header .main-nav > ul > li:last-child a {
		border-bottom: 1px solid rgba(0, 0, 0, 0.05);
	}

	.left-side-header .std-header .main-nav ul li a, .left-side-header .std-header .header-main.sticky .main-nav > ul > li > a {
		padding-top: 14px;
		padding-bottom: 14px;
		line-height: normal;
	}
	.left-side-header .header-main .main-nav ul li > ul.sub-menu, .left-side-header .mega-menu-container {
		position: inherit;
		width: 100%;
		top: 0 !important;
		box-shadow: none;
		left: 0;
	} 
	.left-side-header .header-main .main-nav ul li > ul.sub-menu ul {
		left: 0;
		position: inherit;
		clear: both;
	}
	.left-side-header .header-main .main-nav ul li > ul.sub-menu ul li a {
		padding-left: 60px;
	}
	.left-side-header .header-main .main-nav ul li > ul.sub-menu ul ul li a {
		padding-left: 80px;
	}
	.left-side-header .main-nav ul li > ul.sub-menu li a {
		padding-left: 40px;
		padding-right: 40px;
	}
	.left-side-header .header-main .main-nav ul li > ul.sub-menu ul li:hover a, .left-side-header .main-nav ul li .mega-menu-container li ul li:hover > a {
		padding-left: 65px;
	}
	.left-side-header .header-main .main-nav ul li > ul.sub-menu ul ul li:hover a {
		padding-left: 85px;
	}
	.left-side-header .main-nav ul li > ul.sub-menu li a:hover, .left-side-header .main-nav ul li .mega-menu-container li:hover > a {
		padding-left: 45px;
	}
	.left-side-header .main-nav ul li > ul.sub-menu li:last-child a {
		padding-bottom: 10px;
	}
	.left-side-header .mega-menu-container, .left-side-header .mega-menu-container > ul {
		width: 100% !important;
	}
	.left-side-header .mega-menu-container > ul li.mega-menu-title > a {
		margin: 0;
	}
	.left-side-header  .mega-menu-container > ul {
		padding: 0;
	}
	.left-side-header .main-nav ul li .mega-menu-container a {
		padding: 13px 40px; 
		color: rgba(0, 0, 0, 0.4);
	}
	.left-side-header .mega-menu-container > ul li.mega-menu-title ul li a {
		padding-left: 60px;
	}

	.left-side-header .mega-menu-container > ul li ul {
		display: none;
	}
	.left-side-header .mega-menu-container > ul li:hover ul {
		display: block;
	}

	.left-side-header .has-sub-menu > a:before {
		content: "\f105";
		top: 18px;
	}
	.left-side-header .mega-menu-container .has-sub-menu > a:before {
		content: "\f105";
	}
	.left-side-header .has-sub-menu:hover > a:before, .left-side-header .mega-menu-container .has-sub-menu:hover > a:before {
		content: "\f107";
	}
	.left-side-header .main-nav ul li > ul.sub-menu li:first-child a:before, .left-side-header .main-nav ul li > ul.sub-menu li:last-child a:before {
		top: 12px;
	}
	.left-side-header .mega-menu-container .has-sub-menu > a:before {
		top: 16px;
	}
	.left-side-header .search-container .search:before {
		color: #333333;
	}

	.left-side-header .social-links {
		margin: 40px 0 0;
		float: left;
		clear: both;
		width: 100%;
		text-align: center;
	}
	.left-side-header .social-links li {
		float: none;
		display: inline-block;
	}
	.left-side-header .social-links li a {
		margin: 0 10px 10px;
	}
}

/**
 * 6.1 Menu
 * -----------------------------------------------------------------------------
 */

 .header-main .row .col-10 {
	position: inherit;
 }

.main-nav {
	width: 100%;
	margin: 0;
	padding: 0;
}

.main-nav > ul {
	float: right;
	margin: 0;
}

.main-nav > ul > li {
	float: left;
	margin: 0;
	padding: 0;
	display: inline;
	position: relative;
}

.main-nav > ul > li > a {
	color: #333333;
	font-size: 12px;
	line-height: 95px;
	text-transform: uppercase;
	font-weight: 600;
	padding: 0 10px;
	display: inline-block;
}

.transparent-header .main-nav > ul > li > a {	
	line-height: 43px;
	color: #ffffff;
}
.transparent-header .header-main.sticky .main-nav > ul > li > a {	
	line-height: 63px;
}

/* Sub Menu */
.main-nav ul li > ul.sub-menu {
	position: absolute;
	top: 95px;
	left: 0px;
	display: none;
	background: #ffffff;
	width: 230px;
	margin: 0;
	padding: 0;
	z-index: 9999;
	box-shadow: 0 1px 3px 2px rgba(0, 0, 0, 0.05);
}
.main-nav ul li:hover > ul.sub-menu {
	display: block;
}
.main-nav ul li > ul.sub-menu li, .mega-menu-container > ul li {
	display: block;
	clear: both;	
}
.main-nav ul li > ul.sub-menu li a, .mega-menu-container > ul li a {
	padding: 10px 20px;
	color: rgba(0, 0, 0, 0.6);
	font-size: 12px;
	font-weight: 600;
	text-transform: uppercase;
	float: left;
	width: 100%;
	box-sizing: border-box;
}
.main-nav ul li > ul.sub-menu li a:hover, .mega-menu-container > ul li a:hover {
	background: rgba(0, 0, 0, 0.03);
}
.main-nav ul li > ul.sub-menu li:first-child a {
	padding-top: 15px;
}
.main-nav ul li > ul.sub-menu li:last-child a {
	padding-bottom: 15px;
}
.main-nav ul li > ul.sub-menu li a:hover {
	padding-left: 25px;
}
.mega-menu-container ul li a:hover {
	padding-left: 15px;
}
.mega-menu-container > ul li.mega-menu-title > a:hover {
	padding-left: 10px;
}

.header-main .main-nav ul li > ul.sub-menu li.has-sub-menu {
	position: relative;
}
.header-main .main-nav ul li > ul.sub-menu ul {
	position: absolute;
	left: 230px;
	top: 0;
}
.transparent-header .header-main.sticky .main-nav ul li > ul.sub-menu ul {
	top: 0;
}
.has-sub-menu > a {
	position: relative;
}
.has-sub-menu > a:before {
	position: absolute;
	font-family: FontAwesome;
	right: 20px;
	top: 8px;
}
.sub-menu .has-sub-menu > a:before {
	content: "\f105";
}
.main-nav ul li > ul.sub-menu li:first-child a:before, .main-nav ul li > ul.sub-menu li:last-child a:before {
	top: 14px;
}
.mega-menu-container .has-sub-menu > a:before {
	content: "";
}

/* Mega Menu */
.main-nav > ul > li.mega-menu {
	position: inherit;
}
.mega-menu-container {
	position: absolute;
	top: 95px;
	display: none;
	width: 1170px;
	background: #ffffff;
	left: 0px;
	z-index: 9999;
	box-shadow: 0 1px 3px 2px rgba(0, 0, 0, 0.05);
}
.mega-menu-container > ul {
	float: left;
	border-right: 1px solid rgba(0, 0, 0, 0.05);
	box-sizing: border-box;
	padding: 20px;
	margin: 0;
}
.mega-menu-container.col-4 > ul {
	width: 25%;
}
.mega-menu-container.col-3 > ul {
	width: 33.33333333%;
}
.mega-menu-container.col-2 > ul {
	width: 50%;
}
.mega-menu-container > ul:last-child {
	border-right: 0px;
}
.main-nav ul li.mega-menu:hover .mega-menu-container {
	display: block;
}
.mega-menu-container > ul li a {
	padding: 10px;
	line-height: normal;
}
.mega-menu-container > ul li.mega-menu-title > a {
	color: #333333;
	margin-bottom: 5px;
	font-weight: bold;
}
.mega-menu-container > ul li.mega-menu-title ul {
	padding: 0;
	margin: 0;
}
.transparent-header .mega-menu-container, .transparent-header .main-nav ul li > ul.sub-menu { 
	top: 43px;
}
.transparent-header .header-main.sticky .mega-menu-container, .transparent-header .header-main.sticky .main-nav ul li > ul.sub-menu { 
	top: 63px;
}
.header-main.sticky .mega-menu-container, .header-main.sticky .main-nav ul li > ul.sub-menu {
	top: 60px;
}
/* Responsive Menu */
#responsive-menu-trigger {
	opacity: 0;
	pointer-events: none;
	cursor: pointer;
	font-size: 14px;
	position: absolute;
	top: 50%;
	margin-top: -25px;
	line-height: 38px;
	text-align: center;
	width: 60px;
	-webkit-transition: opacity .3s ease;
	-o-transition: opacity .3s ease;
	transition: opacity .3s ease;
}
#responsive-menu-trigger i {
	color: #333333;
}

/**
 * 6.2 Search
 * -----------------------------------------------------------------------------
 */

.search-container {
	float: right;
	margin: 0px 0 0 10px;
	position: relative;
}

.search-container .search:before {
	color: #ffffff;
	line-height: 44px;
}
.std-header .search-container .search:before {
	line-height: 96px;
}

.search {
  /*position: relative;*/
  display: inline-block;
  min-width: 15px;
}

.search:before { font-family:FontAwesome; content:"\f002"; position:absolute; left:0; top:0; font-size:13px; color:#ffffff; }
.search.search-is-visible:before { content:"\f057"; color: #ffffff; font-size: 14px; }

.search-form {
  position: absolute;
  height: 40px;
  width: 200px;
  top: 95px;
  right: 0;
  z-index: 9999;
  opacity: 0;
  visibility: hidden;
  -webkit-transition: opacity .3s 0s, visibility 0s .3s;
  -moz-transition: opacity .3s 0s, visibility 0s .3s;
  transition: opacity .3s 0s, visibility 0s .3s;
}
.search-form form {
  height: 100%;
  width: 100%;
}
.search-form input {
  border-radius: 0;
  border: none;
  background: #ffffff;
  height: 100%;
  width: 100%;
  padding: 0 7%;
  box-shadow: 0 0 6px rgba(0, 0, 0, 0.1);
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  -o-appearance: none;
  appearance: none;
}
.search-form input::-webkit-input-placeholder {
  color: #c9cbc4;
}
.search-form input::-moz-placeholder {
  color: #c9cbc4;
}
.search-form input:-moz-placeholder {
  color: #c9cbc4;
}
.search-form input:-ms-input-placeholder {
  color: #c9cbc4;
}
.search-form input:focus {
  outline: none;
}
.search-form.is-visible {
  opacity: 1;
  visibility: visible;
  -webkit-transition: opacity .3s 0s, visibility 0s 0s;
  -moz-transition: opacity .3s 0s, visibility 0s 0s;
  transition: opacity .3s 0s, visibility 0s 0s;
}
.sticky .search-container .search-form {
	top: 60px;
}
.transparent-header .search-container .search-form {
	top: 40px;
}
.transparent-header .sticky .search-container .search-form {
	top: 63px;
}

/**
 * 6.3 Header Top
 * -----------------------------------------------------------------------------
 */

.header-top {
	float: right;
	width: 100%;
}

.header-top ul.header-contact {
	margin: 0 0 5px;
	float: right;
}

.header-top ul.header-contact li {
	display: inline;
	color: #ffffff;
	margin-left: 15px;
}

.header-top ul.header-contact li a {
	color: #ffffff;
	font-size: 12px;
}

.header-top ul.header-contact li i {
	margin-right: 5px;
}

/**
 * 7.0 Page Title & Breadcrumb
 * -----------------------------------------------------------------------------
 */
.title-holder {
	width: 100%;
	float: left;
	clear: both;
	color: #ffffff;	
	padding: 45px 0;
	text-align: center;
}
.title-overlay {
	position: relative;
}
.title-overlay:before {
	content: "";
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
}
.title-holder h1 {
	color: #ffffff;
	font-weight: 800;
	letter-spacing: 0.5px;
	line-height: normal;
	margin: 0;
	text-transform: uppercase;
	position: relative;
}

/**
 * 8.0 Blog
 * -----------------------------------------------------------------------------
 */

.blog-thumb-style {
	width: 100%;
	color: #ffffff;
	overflow: hidden;
}
.blog-thumb-style a {
	color: #ffffff;
}
.blog-thumb-style .post-thumbnail {
	float: left;
	position: relative;
	width: 30%;
}
.blog-thumb-style .post-thumbnail:before {
	position: absolute;
	content: "";
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	opacity: 0;
	-webkit-transition: opacity 0.5s; 
	-moz-transition:opacity 0.5s; 
	-o-transition:opacity 0.5s;
}
.blog-thumb-style:hover .post-thumbnail:before {	
	opacity: 1;
	-webkit-transition: opacity 0.5s; 
	-moz-transition:opacity 0.5s; 
	-o-transition:opacity 0.5s;
}
.blog-thumb-style .entry-header {
	float: left;
	padding: 50px 10px 2000px 55px;
	width: 70%;
	height: 100%;
	margin-bottom: -2000px;
}
.blog-thumb-style .entry-header h4 {
	margin-bottom: 0;
}
.blog-thumb-style.alignright .entry-header {
	padding-left: 10px;
	padding-right: 55px;
}
.blog-thumb-style .entry-format {
	border: 1px solid #ffffff;
	width: 56px;
	height: 56px;
	border-radius: 56px;
	font-size: 22px;
	display: inline-block;
	text-align: center;
	line-height: 56px;
	margin-bottom: 20px;
}
.blog-thumb-style .posted-on {
	letter-spacing: 2px;
	font-size: 11px;
	text-transform: uppercase;
	margin-bottom: 10px;
}
.blog-thumb-style h4 {
	font-weight: 600;
	line-height: 30px;	
	clear: none;
	color: #ffffff;
	letter-spacing: 0.3px;
}
.blog-thumb-style.alignright {
	text-align: right;
}
.blog-thumb-style.alignright .post-thumbnail, .blog-thumb-style.alignright .entry-header {
	float: right;
}


.blog-thumb-style2 {
	float: left;
	width: 100%;
	position: relative;
	overflow: hidden;
}
.blog-thumb-style2 .post-thumbnail img {
	-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
	transition: opacity 0.35s, transform 0.35s;
 	-webkit-transform: scale(1.12);
	transform: scale(1.12);
 }
 .blog-thumb-style2:hover .post-thumbnail img {
	opacity: 0.2;
	-webkit-transform: scale(1);
	transform: scale(1);
 }
.blog-thumb-style2 .entry-header {
	padding: 20px;
	height: 100%;
	width: 100%;
	left: 0;
	top: 0;
	position: absolute;
	background:-moz-linear-gradient(top,  rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.6) 100%); /* FF3.6+ */
	background:-webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(0, 0, 0,0)), color-stop(100%,rgba(0, 0, 0, 0.6))); /* Chrome,Safari4+ */
	background:-webkit-linear-gradient(top,  rgba(0, 0, 0, 0) 0%,rgba(0, 0, 0, 0.6) 100%); /* Chrome10+,Safari5.1+ */
	background:-o-linear-gradient(top,  rgba(0, 0, 0, 0) 0%,rgba(0, 0, 0, 0.6) 100%); /* Opera 11.10+ */
	background:-ms-linear-gradient(top,  rgba(0, 0, 0, 0) 0%,rgba(0, 0, 0, 0.6) 100%); /* IE10+ */
	background:linear-gradient(to bottom,  rgba(0, 0, 0, 0) 0%,rgba(0, 0, 0, 0.6) 100%); /* W3C */
	filter:progid:DXImageTransform.Microsoft.gradient( startColorstr='#000000', endColorstr='#00000000',GradientType=0 ); /* IE6-9 */
}

.blog-thumb-style2 .entry-header .blog-meta {
	position: absolute;
	bottom: 20px;
	padding: 0 20px 0 0;
}
.blog-thumb-style2 .entry-header .blog-meta h4 {
	font-size: 18px;
	font-weight: 600;
	text-transform: uppercase;	
	margin: 0;
	letter-spacing: 0.5px;
}
.blog-thumb-style2 .entry-header .blog-meta h4 a {
	color: #ffffff;
}
.blog-thumb-style2 .entry-format {
	border: 1px solid #ffffff;
	width: 58px;
	height: 58px;
	border-radius: 50%;
	float: left;
	font-size: 22px;
	line-height: 56px;
	text-align: center;
	color: #ffffff;
	opacity: 0;
	-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
	transition: opacity 0.35s, transform 0.35s;
	-webkit-transform: scale(1.5);
	transform: scale(1.5);
}
.blog-thumb-style2:hover .entry-format {
	opacity: 1;
	-webkit-transform: scale(1);
	transform: scale(1);
}
.blog-thumb-style2 .entry-header .blog-meta .posted-on {
	font-size: 11px;
	color: #ffffff;
	letter-spacing: 2px;
	margin-bottom: 10px;
	opacity: 0;
	-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
	transition: opacity 0.35s, transform 0.35s;
	-webkit-transform: translate3d(-40px,0,0);
	transform: translate3d(-40px,0,0);
}
.blog-thumb-style2:hover .entry-header .blog-meta .posted-on {
	opacity: 1;
	-webkit-transform: translate3d(0,0,0);
	transform: translate3d(0,0,0);
}


.blog-item {
	width: 100%;
	float: left;
	padding: 0 0 0 145px;
	margin: 0 0 80px;
	box-sizing: border-box;
	position: relative;
}
.blog-item .entry-meta {
	position: absolute;
	left: 0;
	top: 0;
	width: 100px;
}
.blog-item .entry-meta .entry-author {
	border-bottom: 1px solid #e9e9e9;
	padding: 0 0 25px;
}
.blog-item .entry-meta .entry-author img {
	background: #f6f6f6;
	padding: 10px;
	max-width: 100px;
	border-radius: 100px;
}
.blog-item .entry-meta .entry-author p {
	font-size: 11px;
	letter-spacing: 2px;
	color: #999999;
	font-weight: 500;
	text-transform: uppercase;
	margin: 10px 0 0;
}
.blog-item .entry-meta .entry-author p span {
	font-weight: 700;
	color: #333333;
	position: relative;
	top: -3px;
}
.blog-item .entry-meta .posted-on {
	margin: 25px 0 0;
}
.blog-item .entry-meta .posted-on time {
	font-size: 11px;
	letter-spacing: 1px;
	color: #999999;
	text-transform: uppercase;
}
.blog-item .entry-meta .posted-on time span {
	font-weight: 700;
	font-size: 30px;
}
.blog-item .post-thumbnail {
	margin-bottom: 50px;
	position: relative;
}
.blog-item .entry-header, .blog-item .entry-content, .blog-item .post-thumbnail, .blog-item .entry-footer, .blog-item .entry-footer .entry-readmore, .blog-item .entry-footer .entry-metadata {
	float: left;
	clear: both;
	width: 100%;
	box-sizing: border-box;
}
.blog-item .entry-header h4 {
	margin-bottom: 30px;
	font-weight: 700;
}
.blog-item .entry-header h4 a {
	color: #333333;
}
.blog-item .entry-content {
	margin: 0 0 10px;
}
.blog-item .entry-footer .entry-metadata {
	padding: 10px 0px 25px;
}
.blog-item .entry-footer p {
	padding: 0;
	display: inline;
	color: #999999;
	margin-right: 20px;
}
.blog-item .entry-footer p i {
	margin-right: 5px;
	font-size: 14px;
}
.blog-item .entry-footer p a {
	color: #999999;
	font-size: 10px;
	text-transform: uppercase;
	letter-spacing: 1px;
	display: inline-block;
	margin: 0 0 0 2px;
}
.blog-item .entry-footer .entry-readmore a {
	letter-spacing: 1px;
}

.paging-navigation {
	float: left;
	width: 100%;
	clear: both;
	text-align: center;
	margin: 20px 0 0;
}
.paging-navigation .pagination .page-numbers {
	color: #999999;
	font-weight: 600;
	font-size: 12px;
	line-height: 30px;
	width: 30px;
	height: 30px;
	display: inline-block;
	border-radius: 30px;
	border: 1px solid transparent;
	margin: 0 3px;
}
.paging-navigation .pagination .page-numbers.current, .paging-navigation .pagination .page-numbers.current:hover, .paging-navigation .pagination .page-numbers.prev, .paging-navigation .pagination .page-numbers.next {
	border-color: #dddddd;
}
.paging-navigation .pagination .page-numbers.prev i, .paging-navigation .pagination .page-numbers.next i {
	font-size: 16px;
}
.paging-navigation .pagination .page-numbers:hover {
	color: #ffffff;
}
.paging-navigation .pagination .page-numbers.current:hover {
	background: none;
}

.blog-details {
	margin: 0;
}

.related-articles {
	clear: both;
}
.related-articles .heading H5 {
	font-size: 14px;
	letter-spacing: 0.5px;
	font-weight: 700;
}
.related-articles img {
	margin-bottom: 30px;
}
.related-articles h6 {
	font-size: 12px;
	font-weight: 600;
	text-transform: uppercase;
	margin: 0;
}

.blog-item .post-thumbnail .post-format {
	position: absolute;
	right: 20px;
	bottom: -39px;
	border: 8px solid #ffffff;
	height: 78px;
	width: 78px;
	border-radius: 78px;
	text-align: center;
	line-height: 70px;
}
.blog-item .post-thumbnail .post-format i {
	color: #ffffff;
	font-size: 24px;
}

/*
Blog Comments
 */
.comments-area, ol.comment-list {
	float: left;
	clear: both;
	width: 100%;
	margin: 0;
}
.comments-area .heading H5 {
	font-size: 16px;
	letter-spacing: 0.5px;
	font-weight: 700;
	text-transform: uppercase;
}
ol.comment-list {
	margin: 0;
	padding: 0;
}
ol.comment-list li.comment {
	display: inline-block;
	padding: 0 0 50px;
	clear: both;
	width: 100%;
	box-sizing: border-box;
}
ol.comment-list li.comment ol {
	padding: 50px 0 0 110px;
}
ol.comment-list li.comment .comment-author .avatar {
	background: #f6f6f6;
	padding: 10px;
	max-width: 90px;
	border-radius: 90px;
	float: left;
	margin-right: 20px;
}
ol.comment-list li.comment .comment-author h6 {
	display: inline;
	margin-bottom: 0;
}
ol.comment-list li.comment .comment-author a {
	font-size: 14px;
	color: #333333;
	text-transform: uppercase;
	letter-spacing: 0.5px;
	font-weight: 600;
	float: left;
	margin: 0 20px 0 0;
}
ol.comment-list li.comment .comment-metadata time {
	font-size: 11px;
	color: #999999;
	letter-spacing: 2px;
}
ol.comment-list li.comment .comment-metadata {
	float: left;
	margin: 0 20px 0 0;
}
ol.comment-list li.comment .reply a {
	text-transform: uppercase;
	border: 1px solid #e9e9e9;
	padding: 5px 20px;
	font-size: 10px;
}
ol.comment-list li.comment .reply a:hover {
	color: #ffffff;
}
ol.comment-list li.comment .comment-content {
	margin: 15px 0 0;
}
ol.comment-list li.comment:last-child {
	padding-bottom: 0;
}
#respond {
	clear: both;
}
#respond form {
	margin: 20px 0 0;
	display: inline-block;
	width: 100%;	
}
#respond input {
	text-align: center;
}
#respond textarea {
	min-height: 160px;
}
#respond input[type="submit"] {
	margin-top: 15px;
}

/**
 * 9.0 Widgets
 * -----------------------------------------------------------------------------
 */

.widget {
	margin: 0 0 70px;
	width: 100%;
	float: left;
	clear: both;
}
.widget ul {
	margin: 0;
}
.widget ul li {
	float: left;
	width: 100%;
	box-sizing: border-box;
	border-bottom: 1px solid #e9e9e9;
	padding: 0 0 10px;
	display: inline;;
	margin: 0 0 10px;
}
.widget ul li a {
	color: #666666;
}
.widget ul li:last-child {
	margin: 0;
}

.widget h2.widget-title {
	font-size: 16px;
	font-weight: 600;
	letter-spacing: 1px;
	position: relative;
	text-transform: uppercase;
	margin-bottom: 60px;
}
.widget h2.widget-title:before {
	position: absolute;
	content: "";
	bottom: -15px;
	width: 50px;
	height: 1px;
}

.widget.widget_categories ul li {
	position: relative;
}
.widget.widget_categories ul li:before {
	position: absolute;
	content: "\f105";
	font-size: 16px;
	color: #999999;
	font-family: FontAwesome;
	right: 0;
	top: 0;
}

.widget.widget_recent_entries ul li {
	display: inline;
	width: 100%;
	margin-bottom: 15px;
	clear: both;
	float: left;
}
.widget.widget_recent_entries ul li:last-child {
	margin-bottom: 0;
}
.widget.widget_recent_entries ul li .post-thumbnail {
	float: left;
	margin: 0 20px 10px 0;
	max-width: 50px;
	border-radius: 50px;
}
.widget.widget_recent_entries ul li a {
	color: #333333;
	font-weight: 600;
	letter-spacing: 0.5px;
	position: relative;
	top: 3px;
}
.widget.widget_recent_entries ul li .post-date {
	color: #999999;
	letter-spacing: 2px;
	font-size: 10px;
	clear: both;
	display: inline-block;
	margin: 2px 0 0;
}

.widget.flickr-widget ul li {
	float: left;
	display: inline;
	margin: 0 15px 18px 0;
	padding: 0;
	border: 0px;
	clear: none;
	width: auto;
	position: relative;
}
.widget.flickrflickr-widget_widget ul li a {
	position: relative;
	float: left;
	max-width: 70px;
}
.widget.flickr-widget ul li a:after {
	content: "\f0c1";
	left: 0;
	top: 0;
	position: absolute;
	width: 100%;
	height: 100%;
	font-family: FontAwesome;
	font-size: 0;
	text-align: center;
	line-height: 78px;
	color: #ffffff;
	-webkit-transition:all 200ms linear; -moz-transition:all 200ms linear; -o-transition:all 200ms linear; -ms-transition:all 200ms linear; transition:all 200ms linear;
}
.widget.flickr-widget ul li a:hover:after {
	font-size: 16px;
}
.widget.flickr-widget ul li a:hover:before {	
	height: 80%;
	width: 80%;
}
.widget.flickr-widget ul li a:before {
	content: "";
	position: absolute;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	margin: auto;
	width: 0;
	height: 0;	
	-webkit-transition:all 300ms linear; -moz-transition:all 300ms linear; -o-transition:all 300ms linear; -ms-transition:all 300ms linear; transition:all 300ms linear;
}

.search-form .search-submit {
	position: absolute;
	right: 0px;
	width: 50px;
	padding: 0;
	height: 44px;
	background: none;
}
.search-form input[type="search"] {
	margin-bottom: 0;
	padding-right: 40px;
}
.search-form {
	position: relative;
}
.search-form:before {
	position: absolute;
	content: "\f002";
	right: 15px;
	top: 12px;
	font-family: FontAwesome;
	font-size: 14px;
	color: #999999;
	cursor: pointer;
}
.search-submit {
	margin: 0;
}
.search-submit:hover, .search-submit:focus {
	background: none !important;
}
.widget.widget_tag_cloud .tagcloud a {
	color: #666666;
	font-size: 11px;
	text-transform: uppercase;
	border: 1px solid #e9e9e9;
	margin: 0 10px 10px 0;
	padding: 8px 16px 6px;
	display: inline-block;
}
.widget.widget_tag_cloud .tagcloud a:hover {
	color: #ffffff;
}
.widget.widget_text p {
	margin: 0;
}
.widget .social-links li {
	padding-bottom: 0;
	margin: 0;
	border: 0;
	clear: none;
	width: auto;
}
.widget .social-links li a {
	border-radius: 0;
	margin: 0;
	border: 0;
	border-right: 1px solid #e9e9e9;
	color: #999999;
	font-size: 16px;
	height: 40px;
	line-height: 40px;
	width: auto;
	padding: 0 20px;
}
.widget .social-links li a:hover {
	color: #ffffff;
}
.widget .social-links li a:before {
	border-radius: 0;
}
.widget .social-links li:first-child a {
	border-left: 1px solid #e9e9e9;
}

.sidebar-holder .widget .newsletter {
	position: relative;
	margin: 0;
}
.sidebar-holder .widget .newsletter input[type="email"] {
	margin: 0;
}
.sidebar-holder .widget .newsletter input[type="submit"] {
	position: absolute;
	right: 1px;
	margin: 0;
	background: none;
	border-bottom: 4px solid;
	border-radius: 0px;
	padding: 16px 15px 11px;
	font-size: 10px;
	color: #000000;
	text-transform: uppercase;
	font-weight: 700;
	letter-spacing: 1px;
}
.sidebar-holder .widget .newsletter input[type="submit"]:hover {
	color: #ffffff;
}

/* Twiiter Widget */

.emeds_twitter_widget ul.tweets-list li {
	position: relative;
	padding-left: 32px;
}
.emeds_twitter_widget ul.tweets-list li:before {
	content: "\f099";
	position: absolute;
	left: 0px;
	top: 0px;
	font-size: 20px;
	font-family: FontAwesome;
	color: #5ea9dd;
}
.emeds_twitter_widget ul.tweets-list li a:hover {
	color: #000000;
}
.emeds_twitter_widget ul.tweets-list li small a {
	color: #999999;
	display: block;
	clear: both;
}

/**
 * 10.0 Footer
 * -----------------------------------------------------------------------------
 */
footer#footer {	
	width: 100%;
}

/*
Footer Widgets
 */
footer#footer .footer-widgets {
	padding: 80px 0 10px;
	width: 100%;
	clear: both;
	float: left;
	color: #ffffff;
	font-size: 13px;
}
footer#footer .footer-widgets p {
	color: #999999;
}

.footer-widgets h2.widget-title {
	color: #ffffff;
	font-size: 14px;
	margin-bottom: 70px;
}
.footer-widgets h2.widget-title:before {
	bottom: -20px;
	width: 40px;
}
.footer-widgets .widget.widget_recent_entries ul li {
	border: 0px;
	padding-bottom: 0px;
}
.footer-widgets .widget.widget_recent_entries ul li a {
	color: #ffffff;
}

.footer-widgets input[type="text"], .footer-widgets input[type="search"], .footer-widgets input[type="email"], .footer-widgets input[type="url"], .footer-widgets input[type="tel"], .footer-widgets input[type="number"], .footer-widgets input[type="range"], .footer-widgets input[type="password"], .footer-widgets input[type="date"], .footer-widgets select, .footer-widgets textarea  {
	border-color: rgba(255, 255, 255, 0.2);
	margin-bottom: 15px;
}
.footer-widgets input:focus, .footer-widgets textarea:focus {
	color: rgba(255, 255, 255, 0.3);
}
.footer-widgets button:hover, .footer-widgets input[type="button"]:hover, .footer-widgets input[type="reset"]:hover, .footer-widgets input[type="submit"]:hover {
	background-color: #ffffff;
	color: #333333;
}
.footer-widgets .contact {
	color: #ffffff;
}
.footer-widgets .contact abbr a {
	color: #ffffff;
}
/*
Footer Copyrights
 */
.copyrights  {
	width: 100%;
	clear: both;
	padding: 25px 0;
	float: left;
	background-color: #1D1D1D;
}
.copyrights p {
	float: left;
	font-size: 12px;
	line-height: 30px;
	color: #ffffff;
	margin: 0;
}
.copyrights .social-links {
	float: right;
}

/* 11.0 Additional Options */

/**
 * 11.1 One Page Vertical Navigation
 * -----------------------------------------------------------------------------
 */
.vertical-section {
  min-height: 100%;
  position: relative;
  width: 100%;
  float: left;
  clear: both;
}
.vertical-scroll-down {
  position: absolute;
  left: 50%;
  right: auto;
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  transform: translateX(-50%);
  bottom: 20px;
  width: 38px;
  height: 44px;
  background: url("img/cd-arrow-bottom.html") no-repeat center center;
}

/* No Touch devices */
.vertical-nav-trigger {
  display: none;
}

#vertical-nav {
  position: fixed;
  right: 40px;
  top: 50%;
  bottom: auto;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  z-index: 9999;
}
#vertical-nav li {
  text-align: right;
  display: inherit;
}
#vertical-nav a {
  display: inline-block;
  /* prevent weird movements on hover when you use a CSS3 transformation - webkit browsers */
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}
#vertical-nav a:after {
  content: "";
  display: table;
  clear: both;
}
#vertical-nav a span {
  float: right;
  display: inline-block;
  -webkit-transform: scale(0.6);
  -moz-transform: scale(0.6);
  -ms-transform: scale(0.6);
  -o-transform: scale(0.6);
  transform: scale(0.6);
}
#vertical-nav a:hover span {
  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1);
}
#vertical-nav a:hover .vertical-nav-label {
  opacity: 1;
}
#vertical-nav a.is-selected .vertical-nav-dot {
  /*background-color: white;*/
  -webkit-transform: scale(1);
  -moz-transform: scale(1);
  -ms-transform: scale(1);
  -o-transform: scale(1);
  transform: scale(1);
  border: 1px solid;
  background: none;
}
#vertical-nav .vertical-nav-dot {
  position: relative;
  /* we set a top value in order to align the dot with the label. If you change label's font, you may need to change this top value*/
  top: 8px;
  height: 12px;
  width: 12px;
  border-radius: 50%;
  background-color: #ffffff;
  /*box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);*/
  -webkit-transition: -webkit-transform 0.2s, background-color 0.5s;
  -moz-transition: -moz-transform 0.2s, background-color 0.5s;
  transition: transform 0.2s, background-color 0.5s;
  -webkit-transform-origin: 50% 50%;
  -moz-transform-origin: 50% 50%;
  -ms-transform-origin: 50% 50%;
  -o-transform-origin: 50% 50%;
  transform-origin: 50% 50%;
}
#vertical-nav .vertical-nav-label {
  position: relative;
  margin-right: 10px;
  padding: 5px 15px;
  border-radius: 3px;
  color: white;
  font-size: 14px;
  font-size: 0.875rem;
  -webkit-transition: -webkit-transform 0.2s, opacity 0.2s;
  -moz-transition: -moz-transform 0.2s, opacity 0.2s;
  transition: transform 0.2s, opacity 0.2s;
  opacity: 0;
  -webkit-transform-origin: 100% 50%;
  -moz-transform-origin: 100% 50%;
  -ms-transform-origin: 100% 50%;
  -o-transform-origin: 100% 50%;
  transform-origin: 100% 50%;
}

/**
 * 11.2 Go to Top
 * -----------------------------------------------------------------------------
 */
.top {
  display: inline-block;
  height: 40px;
  width: 40px;
  position: fixed;
  bottom: 20px;
  right: 20px;
  text-align: center;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
  overflow: hidden;
  background: rgba(0, 0, 0, 0.25);
  cursor: pointer;
  display: none;
}
.top:before {
	content: "\f106";
	position: absolute;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	font-family: FontAwesome;
	color: #ffffff;
	font-size: 14px;
	line-height: 40px;
}

/**
 * 11.3 Zoom Out Header Image
 * -----------------------------------------------------------------------------
 */
.content-wrap.zoomout-effect {
	margin-top: 1080px;
	background: #ffffff;

}
.zoomout-header {
	position: fixed;   
	/*top: 70px;*/
	left: 0;
	width: 100%;
	height: 1080px;
	margin-top: 0;
}
.zoomout-header .zoomout-background {
	height: 100%;
	width: 100%;
	background: url("images/showcase/zoomout-image.jpg") no-repeat center center;
	background-size: cover;
	box-shadow: 0 0 30px rgba(0, 0, 0, 0.5);
}

/**
 * 11.4 Infinite Scroll
 * -----------------------------------------------------------------------------
 */
#infscr-loading,
#portfolio-ajax-loader {
	position: fixed;
	z-index: 20;
	top: 50%;
	left: 50%;
	width: 48px;
	height: 48px;
	margin: -24px 0 0 -24px;
	background-color: rgba(0,0,0,0.7);
	border-radius: 3px;
	line-height: 48px;
	font-size: 24px;
	color: #FFF;
	text-align: center;
}

#infscr-loading img,
#portfolio-ajax-loader img {
	display: none;
	width: 24px;
	height: 24px;
	margin: 12px;
}

#portfolio-ajax-loader { display: none; }

#portfolio-ajax-loader img { display: block; }

/**
 * 12.0 Error 404
 * -----------------------------------------------------------------------------
 */
 .error404 {
 	width: 100%;
 	text-align: center;
 	margin: 0;
 }
 .error404 .search-form {
	display: inline-block; 	
	min-width:270px;
	max-width:270px;
 }
 .error404 .error-info {
 	font-weight: bold;
 	font-size: 150px;
 	line-height: 50px;
 	color: #000000;
 }
 .error404 .error-info i {
 	font-style: normal;
 }
 .error404 .error-info span {
 	font-size: 26px;
 	text-transform: uppercase;
 	clear: both;
 	display: inline-block;
 	width: 100%;
 }
 .error404 .heading h2 {
 	font-size: 30px;
 	letter-spacing: 0.5px;
 }
 .error404 .heading h6 {
 	line-height: 30px;
 }
 .error404 .content-wrap {
 	margin-bottom: 0px;
 }
 .video-wrap {
  overflow: hidden;
  width: 100%;
  position: relative;
  max-height: 100%;
  height: 100%;
}
.video-wrap video {
  position: relative;
  width: 100%;
}
.video-wrap .youtube-wrap {
	width: 100%;
	height: 100%;
}

.row-fw.info-bar-bg {
	background-color: #051f27; 
	padding: 50px 0;
}
.fw-btm-border {
	border-bottom: 1px solid #f0f0f0;
}
.row-fw.fw-no-padding {
	padding: 0;
}
.row-fw.fw-padding-top-80 {
	padding: 80px 0 0;
}
.row-fw.fw-padding-top-90 {
	padding: 90px 0 0;
}
.no-main-btm-margin {
	margin-bottom:-100px;
}
.row-fw.parallax-polygon-dark {
	background: url(images/parallax/polygon3.jpg) no-repeat; 
	padding: 50px 0 40px; 
	margin-bottom: -100px;
}
.fw-btm-border-colored {
	border-bottom: 6px solid #<?php echo $_SESSION['colour']; ?>;
}
.fw-btm-border-colored2 {
	border-bottom: 8px solid #<?php echo $_SESSION['colour']; ?>;
}
.bg-dark {
	background-color: #051f27;
}
.bg-color {
	background-color: #<?php echo $_SESSION['colour']; ?>;
}
.title-bg {
	background: url(images/title-bg.jpg) left 70% no-repeat;
}
.custom-para {
	font-size: 15px; 
	line-height: 26px;
}
h2.custom-head {
	font-size: 40px;
}
h2.custom-head2 {
	font-size: 30px;
}
h2.custom-head3 {
	font-size: 34px; 
	font-weight: 700; 
	line-height: normal; 
	text-transform: uppercase;
}
.client-bg {
	background-color: #f0f0f0; 
	padding: 50px 0; 
	margin-bottom: -100px;
}

/**
 * 14.0 Switcher
 * -----------------------------------------------------------------------------
 */

 #switcher-container {
 	width: 270px;
 	position: fixed;
 	top: 80px;
 	right: 0px;
 	z-index: 9999;
 	background: #ffffff;
 	border: 1px solid rgba(0, 0, 0, 0.08);
 	padding: 30px;
 	text-align: center;
 }
 #switcher-container h6 {
 	text-transform: uppercase;
 	font-weight: 500;
 	letter-spacing: 0.5px;
 	text-align: center;
 	position: relative;
 }
 #switcher-container h6:before {
 	position: absolute;
 	content: "";
 	width: 50px;
 	height: 1px;
 	background: #000000;
 	left: 0;
 	right: 0;
 	bottom: -15px;
 	margin: auto; 	
 }
 #switcher-controller {
 	position: absolute;
 	left: -52px;
 	top: 0;
 	bottom: 0;
 	margin: auto;
 	width: 52px;
 	height: 57px;
 	background: #ffffff url(images/switcher-control.png) center center no-repeat;
 	border: 1px solid rgba(0, 0, 0, 0.08);
 	border-right: 0px;
 	cursor: pointer;
 }
 #switcher-colors-controller ul {
 	margin: 10px 0 0;
 	padding: 0;
 	display: inline-block;
 }
 #switcher-colors-controller li {
 	display: inline-block;
 	width: 57px;
 	height: 40px;
 	margin: 0 14px 10px 0;
 	position: relative;
 	cursor: pointer;
 }
 #switcher-colors-controller li:nth-child(3n) {
 	margin-right: 0;
 }
 #switcher-colors-controller li:before {
 	position: absolute;
 	content: "";
 	left: 0;
 	bottom: 0;
 	width: 100%;
 	height: 2px;
 	background: rgba(0, 0, 0, 0.1);
 	-moz-transition:  .3s ease-in-out;
	-webkit-transition:  .3s ease-in-out;
	-o-transition:  .3s ease-in-out;
	-ms-transition:  .3s ease-in-out;
	transition:  .3s ease-in-out;
 }
 #switcher-colors-controller li:hover:before {
 	height: 100%;
 }
 #switcher-reset {
 	border: 1px solid #dddddd;
 	border-radius: 3px;
 	padding: 3px 15px;
 	color: #999999;
 	display: inline-block;
 	margin: 10px 0 0;
 }
 #switcher-reset:hover {
 	color: #ffffff;
 	background: #000000;
 	border-color: #000000;
 }
 #switcher-colors-controller li.selected:after {
 	content: "";
 	position: absolute;
 	left: 2px;
 	top: 2px;
 	width: 53px;
 	height: 36px;
 	border: 1px dashed #ffffff;
 }
 #switcher-colors-controller li.selected:before {
 	background: none;
 }

@charset "utf-8";
::selection {
	background:#<?php echo $_SESSION['colour']; ?>; 
}

::-moz-selection {
	background:#<?php echo $_SESSION['colour']; ?>; 
}

a, .portfolio-item:hover figure figcaption h6 a:hover, .portfolio-item:hover figure figcaption p a:hover, .facts .facts-icon-holder i, .list li:before, .contact address:before, .contact abbr:before, .contact abbr a:hover, .header-with-topbar .header-top ul.header-contact li a:hover, .blog-item .entry-meta .posted-on time span, .blog-item .entry-footer p a:hover, .blog-item .entry-header h4 a:hover, .widget.widget_recent_entries ul li a:hover, .widget ul li a:hover, .widget.widget_categories ul li:hover:before, .paging-navigation .pagination .page-numbers.current, .portfolio-meta-details li.links a:hover, .icon-with-title.style3 .icon-holder i, .team h6, .team .social-links li a:hover i, .icon-with-title.style5 .icon-holder i, .error404 .error-info i, .emeds_twitter_widget ul.tweets-list li a {	
	color:#<?php echo $_SESSION['colour']; ?>;
}

.header-top ul li i, .header-top ul li a:hover {
	color:#<?php echo $_SESSION['colour']; ?>; 
}

.main-nav > ul > li > a:hover, .header-main.sticky .main-nav > ul > li > a:hover, .main-nav > ul > li.current_page_item > a, .header-main.sticky .main-nav > ul > li.current_page_item > a, .main-nav ul.sub-menu li.current_page_item > a, .mega-menu-container ul li.current_page_item a {
	color:#<?php echo $_SESSION['colour']; ?>; 
}

.heading h1:before, .heading h2:before, .heading h3:before, .heading h4:before, .heading h5:before, .portfolio-details-slideshow-nav a:hover {
	background:#<?php echo $_SESSION['colour']; ?>; 
}

button, input[type="button"], input[type="reset"], input[type="submit"], .icon-with-title.style1 .icon-holder, .icon-with-title h6:before, .button, .facts:hover .facts-icon-holder, .icon-with-title.style2:hover .icon-holder, .blog-thumb-style.skin, .widget h2.widget-title:before, .widget.widget_tag_cloud .tagcloud a:hover, .sidebar-holder .widget .newsletter input[type="submit"]:hover, .paging-navigation .pagination .page-numbers:hover, blockquote.style1:before, ol.comment-list li.comment .reply a:hover, .contact-with-large-icon .contact-icon-holder, .portfolio-filter ul li a:hover, .portfolio-filter ul li a.current, .blog-item .post-thumbnail .post-format, .tabs-boxed .tabs-nav li a:hover, .tabs-boxed .tabs-nav li a.current, .icon-with-title.style4:hover .icon-holder, .team .social-links:before, .facts.style2 h6:before, .blog-thumb-style2, ol.planner-list > li h6:before, ol.planner-list > li:hover:before, .progress-bar-wrapper .progress-bar, .accordion-holder .accordion-panel.current .accordion-title .accordion-arrow, .accordion-holder .accordion-panel:hover .accordion-title .accordion-arrow, .hvr-shutter-out-horizontal:before, .icon-with-title.style7 .icon-holder, .button.stroke-style:hover, #vertical-nav .vertical-nav-dot, #vertical-nav .vertical-nav-label, .top:hover, .owl-carousel-custom-nav a:hover, #infscr-loading, #portfolio-ajax-loader {
	background-color:#<?php echo $_SESSION['colour']; ?>; 
}

.icon-with-title.style2 .icon-holder, .widget.widget_tag_cloud .tagcloud a:hover, .sidebar-holder .widget .newsletter input[type="submit"], .paging-navigation .pagination .page-numbers:hover, ol.comment-list li.comment .reply a:hover, .portfolio-filter ul li a:hover, .portfolio-filter ul li a.current, .tabs-boxed .tabs-nav li, ol.planner-list > li:hover:before, .accordion-holder .accordion-panel.current .accordion-title .accordion-arrow, .accordion-holder .accordion-panel:hover .accordion-title .accordion-arrow, .button.stroke-style:hover, #vertical-nav a.is-selected .vertical-nav-dot, .owl-carousel-custom-nav a:hover, #masthead.left-side-header, .portfolio-details-slideshow-nav a:hover {
	border-color:#<?php echo $_SESSION['colour']; ?>; 
}

.widget.flickr-widget ul li a:before {
	background-color:rgba(80,193,233,0.7); 
}

.blog-thumb-style .post-thumbnail:before {
	background:rgba(80,193,233,0.6); 
}

.blog-thumb-style.dark, footer#footer .footer-widgets, button:hover, input[type="button"]:hover, input[type="reset"]:hover, input[type="submit"]:hover, button:focus, input[type="button"]:focus, input[type="reset"]:focus, input[type="submit"]:focus, .header-with-topbar .header-top, .blog-item:hover .post-thumbnail .post-format, .button.stroke-style.light:hover {
	background-color:#051f27; 
}

.button.stroke-style.light:hover {
	border-color:#051f27; 
}

.icon-with-title.style1:hover .icon-holder, .icon-with-title.style3:hover .icon-holder {
	background:#051f27; 
}

.portfolio-item figure figcaption, .row-overlay:before {
	background:rgba(5,31,39,0.8); 
}

blockquote {
	background-color:#edf9fd; 
}

.testimonial blockquote:before {
	border-top-color:#edf9fd; 
}

.title-overlay:before {
	background:rgba(22,96,122,0.85); 
}

</style>