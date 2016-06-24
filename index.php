<!DOCTYPE html>
<html class="no-js" ng-app="ideum">

<script>
  // this script gets the Browser and OS info and adds it into the html tag 
  var b = document.documentElement;
    b.setAttribute('data-useragent',  navigator.userAgent);
    b.setAttribute('data-platform', navigator.platform );
    b.className += ((!!('ontouchstart' in window) || !!('onmsgesturechange' in window))?' touch':'');
</script>

<head>

<meta charset="UTF-8"/>
<meta name="robots" content="noindex, nofollow">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">

<link rel="shortcut icon" href="http://ideum.com/wp-content/themes/ideum/images/favicon.ico"/>
<link rel="apple-touch-icon" href="http://ideum.com/wp-content/themes/ideum/images/iPhoneIcon.png"/>

<title>Tangible Engine - Object Recognition System for Multitouch Tables</title>

<meta name="description" content="Tangible Engine is a highly optimized authoring package supporting the use of fiducial object recognition - the first of its kind to work with projected-capacitive touch screens.">
<meta property="og:site_name" content="Tangible Engine - Object Recognition System for Multitouch Tables">
<meta property="og:type" content="website">
<meta property="og:url" content="http://tangibleengine.com">
<meta property="og:title" content="Tangible Engine - Object Recognition System for Multitouch Tables">
<meta property="og:image" content="http://ideum.com/wp-content/uploads/2016/06/Engine-for-Blog-Post.jpg">
<meta property="og:description" content="Tangible Engine is a highly optimized authoring package supporting the use of fiducial object recognition - the first of its kind to work with projected-capacitive touch screens."/>

<link href="https://fonts.googleapis.com/css?family=Electrolize|Work+Sans:Thin,Extra-Light,Light,Regular,Medium,Semi-Bold,Bold" media="all" rel="stylesheet" type="text/css">

<style>
	body {background-color:#292929; color:#FFFFFF; font-family:'Work Sans', sans-serif; font-size:16px; line-height:36px; margin:0; padding:0; width:100%;}
	div, section, header, footer {box-sizing:border-box;}
	header, #header {margin:0; padding:0; width:100%;}
	
	#prenav{background-color: #5fffa9; position:fixed; top:0; width:100%; z-index:400;}
	.prenav-interior {margin:0 auto; min-height:30px; padding:0 15.5% 0 0; max-width:1920px; width:100%;}
	#prenav nav {display:block; float:right; width: auto;}
	#prenav nav ul {height:30px; padding:0; width:100%;}
	#prenav nav ul li {float:left; height:30px; list-style:none; list-style-image:none; padding:0 20px;}
	#prenav nav ul li a {color:#252523; display:block; font-family:'Work Sans', sans-serif; font-size:12px; }
	#prenav nav ul li a {letter-spacing:+1px; opacity:0.75; text-decoration:none; text-transform:uppercase;}
	#prenav nav ul li a.txt {line-height:30px;}
	#prenav nav ul li a:hover {opacity:1;}
	
	#mainnav {background: url('media/images/main-nav-bg.png') repeat; height: 123px; padding:0 15.5%; position:fixed; top:30px; width:100%; z-index: 100;}
	#mainnav nav {display:block; float:right; width: auto;}
	#mainnav nav ul {padding:0; width:100%;}
	#mainnav nav ul li {float:left; list-style:none; list-style-image:none; padding:0 20px;}
	#mainnav nav ul li a {color:#FFFFFF; display:block; font-family:'Work Sans', sans-serif; font-size:14px; }
	#mainnav nav ul li a {letter-spacing:+1px; opacity:.99; text-decoration:none; text-transform:uppercase;}
	#mainnav nav ul li a:hover {overflow:hidden; text-decoration:underline;}
	
	#header .logo {-webkit-box-flex:1; -moz-box-flex:1; box-flex:1; -webkit-flex:1; -moz-flex:1; -ms-flex:1; flex:1; float:left; margin:0; min-width:288px;}
	#header .logo a {background: url("media/images/TangibleEngineLogo.png") no-repeat center center; display:inline-block; height:68px;}
	#header .logo a {overflow:hidden; position:relative; width:288px; z-index:200;}
	#header .logo a:before {content:""; display:block; width:0; height:100%;}
	
	nav ul {margin:0;}
	
	#video-block {background-image:url('media/images/tangible-hero-bg.jpg'); background-position:top center; background-repeat:no-repeat; background-size:cover;}
	#video-block {display:block; height:auto; width:100%;}
	#video-block h1 {font-family:'Electrolize', sans-serif; font-size:48px; font-size:3vw; font-weight:100; line-height:60px; line-height:4vw;}
	.video-content-wrap {padding:20%; text-align:center;}
	#video-block a.button {border:1px solid #FFFFFF; color:#FFFFFF; display:block; font-family:'Work Sans Light', sans-serif; font-size:18px; font-weight: 200;}
	#video-block a.button {letter-spacing:+2px; line-height:70px; margin:auto; max-width:90%; text-decoration:none; width:333px;}
	#video-block a.button:hover {opacity:.65;}
	#content {margin:auto; max-width:1920px; width:100%;}
	hr {color:#5fffa9;height:2px;}
		hr.full {max-width:30%; width:400px;}
		hr.half {max-width:20%; width:230px;}
	
	.content-block {border-left:1px solid #293030; border-right:1px solid #293030; height:480px; overflow:hidden; width:100%;}
	.content-block.configurator .content-img  {background:#fff url('media/images/TE_configurator.jpg') no-repeat center center;}
	.content-block.tangible-engine .content-img  {background:#fff url('media/images/TE_starbucks.jpg') no-repeat center center;}
	.content-block.tangible-engine-sdk .content-img  {background:#fff url('media/images/TE_code.jpg') no-repeat center center;}
	.content-block.tangible-markers .content-img  {background:#fff url('media/images/TE_3D_printed_markers.jpg') no-repeat center center;}
	.content-block.ideum-touch-tables .content-img  {background:#fff url('media/images/TE_platform65.jpg') no-repeat center center;}
	.content-block.tangible-engine-in-action .content-img  {background:#fff url('media/images/TE_JCB.jpg') no-repeat center center;}
	.content-block .content-img {float:left; height:480px; max-width:100%; width:50%;}
	.content-block.imgLeft-txtRight .content-img {float:left;}
	.content-block.imgRight-txtLeft .content-img {float:right;}
	.content-block .conent-img:hover {opacity:.75;}
	.content-block .content-img a {display:block; height:100%; width:100%; word-wrap:break-word; word-break:break-word;}
	.content-block .content-txt {height:480px; max-width:100%; width:50%;}
	.content-block .content-txt a {color:#FFFFFF; text-decoration:none; border-bottom:1px dotted #FFFFFF;}
	.content-block .content-txt a:hover {border-bottom:1px solid #FFFFFF;}
	.content-block .content-txt .content-txt-interior { padding:0 6vw;}
	.content-block .content-txt p {font-weight:400; letter-spacing:+1px;}
	.content-block.imgLeft-txtRight .content-txt {float:right;}
	.content-block.imgRight-txtLeft .content-txt {float:left;}

	.content-block .content-txt .content-txt-interior button#learn-more-button {font-size:1em; font-weight:300; line-height:1.95em; text-transform:capitalize; width:13.3em;}

	a.anchor {display:block; position:relative; top:-150px;}

	
	footer, #footer {background-color:#000000; padding:2% 2%; position:relative; top:32px; text-align:center; width:100%;}
	footer ul, #footer ul {display:inline-block; height:25px; list-style-type:none; margin:0 auto; padding:0; text-decoration:none;}
	footer ul li, #footer ul li {float:left; line-height:20px;}
	footer ul li a, #footer ul li a {color:#FFFFFF; font-size:14px; font-weight:400; padding:0 10px; text-decoration:none;}
	footer ul li a:hover, #footer ul li a:hover {opacity:0.75;}
	footer p#copyright, #footer p#copyright {color:#CCCCCC; font-size:12px; font-weight:400; margin:.25%;}
	footer p#copyright a {color:#CCCCCC; text-decoration:none; border-bottom:1px dotted #FFFFFF;}
	footer p#copyright a:hover {border-bottom:1px solid #FFFFFF;}
	
	#support_container {background-color:#333; overflow:hidden; padding:2% 1% 1%; width:100%;}
	#support_container-interior { margin:0 auto; max-width:800px; overflow:hidden; width:100%;}
	#support_text {float:left; padding-left:5%; text-align:left; width:60%;}
	#support_text h1 {color:#FFFFFF; font-size:24px; font-weight:200; margin-top:0;}
	#support_text p:last-of-type, #support_data p:last-of-type {margin:0;}
	#support_innercontainer p, #support_text p, #support_data p {color:#FFFFFF; font-weight:200; max-width:90%; width:740px;}
	#support_data {float:left; padding-left:5%; text-align:left; width:40%;}
	#support_innercontainer p a, #support_text p a, #support_data p a {border-bottom:1px dotted #FFFFFF; color:#FFFFFF; text-decoration:none;}
	#support_innercontainer p a, #support_text p a:hover, #support_data p a:hover {border-bottom:1px solid #FFFFFF;}
	
	.vcenter-container {
    -webkit-box-pack: center;
    -webkit-box-align: center;
    -moz-box-pack: center;
    -moz-box-align: center;
    -ms-box-pack: center;
    -ms-box-align: center;
    box-pack: center;
    box-align: center;
    justify-content: center;
    align-items: center;
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flebox;
    display: -ms-box;
	}
	
	
	.v-center {
		height: 100vh;
		width: 100%;
		display: table;
		position: relative;
		text-align: center;
	}

	.v-center > div {
		display: table-cell;
		vertical-align: middle;
		position: relative;
		top: -10%;
	}

	

	.btn-small {
		padding: .75em 1em;
		font-size: 0.8em;
	}

	.modal-box {
		display: none;
		position: absolute;
		z-index: 1000;
		width: 98%;
		background: white;
		border-bottom: 1px solid #aaa;
		border-radius: 4px;
		box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
		border: 1px solid rgba(0, 0, 0, 0.1);
		background-clip: padding-box;
	}
	@media (min-width: 32em) {

	.modal-box { width: 70%; }
	}

	.modal-box header,
	.modal-box .modal-header {
		padding: 1.25em 1.5em;
		border-bottom: 1px solid #ddd;
	}

	.modal-box header h3,
	.modal-box header h4,
	.modal-box .modal-header h3,
	.modal-box .modal-header h4 { margin: 0; }

	.modal-box .modal-body { padding: 2em 1.5em; }

	.modal-box footer,
	.modal-box .modal-footer {
		padding: 1em;
		border-top: 1px solid #ddd;
		background: rgba(0, 0, 0, 0.02);
		text-align: right;
		top:-0px;
	}

	.modal-overlay {
		opacity: 0;
		filter: alpha(opacity=0);
		position: absolute;
		top: 0;
		left: 0;
		z-index: 900;
		width: 100%;
		height: 100%;
		background: rgba(0, 0, 0, 0.3) !important;
	}
	
	.btn {
  font-size: 3vmin;
  padding: 0.75em 1.5em;
  background-color: #fff;
  border: 1px solid #bbb;
  color: #333;
  text-decoration: none;
  display: inline;
  border-radius: 4px;
  -webkit-transition: background-color 1s ease;
  -moz-transition: background-color 1s ease;
  transition: background-color 1s ease;
}

.btn:hover {
  background-color: #ddd;
  -webkit-transition: background-color 1s ease;
  -moz-transition: background-color 1s ease;
  transition: background-color 1s ease;
}

.btn-small {
  padding: .75em 1em;
  font-size: 0.8em;
}

	a.close {
		line-height: 1;
		font-size: 1.5em;
		position: absolute;
		top: 1.5%;
		right: 2%;
		text-decoration: none;
		color: #bbb;
	}

	a.close:hover {
		color: #222;
		-webkit-transition: color 1s ease;
		-moz-transition: color 1s ease;
		transition: color 1s ease;
	}
	
	#video-container {
    position: relative;
    padding-bottom: 56.25%;
    padding-top: 35px;
    height: 0;
    overflow: hidden;
	}
	
	#video-container iframe {
    position: absolute;
    top:0;
    left: 0;
    width: 100%;
    height: 100%;
}
	
	
	/* msie fixes */
	/* html[data-useragent*='Trident'] */
	html[data-useragent*='Trident'] .vcenter-container { 
		display: table; 
		vertical-align: middle;
	}
	html[data-useragent*='Trident'] .vcentered-content { 
		display: table-cell; 
		vertical-align: middle; 
	}
	
	/* Firefox Fixes */
	/* html[data-useragent*='Firefox'] */
	html[data-useragent*='Firefox'] .vcenter-container { 
		display: table; 
		vertical-align: middle;
	}
	html[data-useragent*='Firefox'] .vcentered-content { 
		display: table-cell; 
		vertical-align: middle; 
	}
	html[data-useragent*='Firefox'] .logo.vcentered-content { 
		float:none !important; 
	}
	html[data-useragent*='Firefox'] #mainnav nav { 
		padding-top:43px; 
	}
	
	/* Safari Fixes */
	/* html[data-useragent*='Safari']  */
	html[data-useragent*='Safari'] .vcentered-content { 
		display: block;
	}
	
	*{
		-webkit-font-smoothing: antialiased;
		-moz-osx-font-smoothing: grayscale;
		text-shadow:none;
		text-rendering: optimizeLegibility;
	}
	
	@font-face {
		font-family: 'Work Sans Light';
		src: url('media/fonts/work-sans/WorkSans-Light.eot?#iefix') format('embedded-opentype'), 
			url('media/fonts/work-sans/WorkSans-Light.woff') format('woff'), 
			url('media/fonts/work-sans/WorkSans-Light.ttf')  format('truetype'),
			/*url('myfont-webfont.svg#svgFontName') format('svg');*/
	}
	@font-face {
		font-family: 'Work Sans Thin';
		src: url('media/fonts/work-sans/WorkSans-Thin.eot?#iefix') format('embedded-opentype'), 
			url('media/fonts/work-sans/WorkSans-Thin.woff') format('woff'), 
			url('media/fonts/work-sans/WorkSans-Thin.ttf')  format('truetype'),
			/*url('myfont-webfont.svg#svgFontName') format('svg');*/
	}
	@font-face {
		font-family: 'Work Sans Hairline';
		src: url('media/fonts/work-sans/WorkSans-Hairline.eot?#iefix') format('embedded-opentype'), 
			url('media/fonts/work-sans/WorkSans-Hairline.woff') format('woff'), 
			url('media/fonts/work-sans/WorkSans-Hairline.ttf')  format('truetype'),
			/*url('myfont-webfont.svg#svgFontName') format('svg');*/
	}
	@font-face {
		font-family: 'Work Sans ExtraLight';
		src: url('media/fonts/work-sans/WorkSans-ExtraLight.eot?#iefix') format('embedded-opentype'), 
			url('media/fonts/work-sans/WorkSans-ExtraLight.woff') format('woff'), 
			url('media/fonts/work-sans/WorkSans-ExtraLight.ttf')  format('truetype'),
			/*url('myfont-webfont.svg#svgFontName') format('svg');*/
	}
	@font-face {
		font-family: 'Work Sans Medium';
		src: url('media/fonts/work-sans/WorkSans-Medium.eot?#iefix') format('embedded-opentype'), 
			url('media/fonts/work-sans/WorkSans-Medium.woff') format('woff'), 
			url('media/fonts/work-sans/WorkSans-Medium.ttf')  format('truetype'),
			/*url('myfont-webfont.svg#svgFontName') format('svg');*/
	}
	@font-face {
		font-family: 'Work Sans Regular';
		src: url('media/fonts/work-sans/WorkSans-Regular.eot?#iefix') format('embedded-opentype'), 
			url('media/fonts/work-sans/WorkSans-Regular.woff') format('woff'), 
			url('media/fonts/work-sans/WorkSans-Regular.ttf')  format('truetype'),
			/*url('myfont-webfont.svg#svgFontName') format('svg');*/
	}
	@font-face {
		font-family: 'Work Sans';
		src: url('media/fonts/work-sans/WorkSans-Regular.eot?#iefix') format('embedded-opentype'), 
			url('media/fonts/work-sans/WorkSans-Regular.woff') format('woff'), 
			url('media/fonts/work-sans/WorkSans-Regular.ttf')  format('truetype'),
			/*url('myfont-webfont.svg#svgFontName') format('svg');*/
	}
	@font-face {
		font-family: 'Work Sans SemiBold';
		src: url('media/fonts/work-sans/WorkSans-SemiBold.eot?#iefix') format('embedded-opentype'), 
			url('media/fonts/work-sans/WorkSans-SemiBold.woff') format('woff'), 
			url('media/fonts/work-sans/WorkSans-SemiBold.ttf')  format('truetype'),
			/*url('myfont-webfont.svg#svgFontName') format('svg');*/
	}
	@font-face {
		font-family: 'Work Sans Bold';
		src: url('media/fonts/work-sans/WorkSans-Bold.eot?#iefix') format('embedded-opentype'), 
			url('media/fonts/work-sans/WorkSans-Bold.woff') format('woff'), 
			url('media/fonts/work-sans/WorkSans-Bold.ttf')  format('truetype'),
			/*url('myfont-webfont.svg#svgFontName') format('svg');*/
	}
	
	@media screen and (max-width: 1199px) { /* begin large tablet media query */
		.content-block .content-txt {width:60%;}
		.content-block .content-img {width:40%;}
		.content-block .content-txt p {font-size:14px; line-height:24px;}
	}
	@media screen and (max-width: 800px) { /* begin small tablet and phone media query */
		#video-block .video-content-wrap {display:block; padding:20% 6%; margin-top:153px;}
		.prenav-interior {padding:0 1% 0;}
		#prenav nav {float:none;}
		#mainnav {padding:0 2%;}
		#header .logo {min-width:175px;}
		#mainnav nav ul li {padding:0 10px;}
		#mainnav nav ul li a {font-size:11.5px; position:relative; top:-3px;}
		#header .logo a {background-size:contain; width:176px;}
		#prenav nav ul li {padding:0 10px;}
		#video-block h1 {font-size:18px; font-size:4.5vw; line-height:6vw;}
		.content-block {height:auto;}
		.content-block .content-img {height:330px; width:100%;}
		.content-block .content-txt {height:auto; padding:6% 2%; width:100%;}
		.content-block .content-txt p {font-size:16px; line-height:26px;}
		#support_container {padding:5%;}
		#support_text {float:none; margin-bottom:6%; width:100%;}
		#support_data {float:none; width:100%;}
		footer p#copyright, #footer p#copyright {font-size:10px; font-weight:400;}
	}

	@media screen and (max-width: 415px) { /* begin very small phone media query */
		header, #header {height:63px;}
		#prenav nav ul li {padding:0 10px;}
		#prenav nav ul li a {font-size:9px !important; letter-spacing:+0px;}
		#prenav nav ul li a img {position:relative; top:-3px; width:30px;}
		#mainnav nav ul li a {font-size:9px !important;}
		#header .logo a {height:30px;; width:110px;}
		#mainnav {height:34px !important;}
		#header .logo, #header .logo a {min-width:110px;}
		#mainnav nav ul li {padding:0 5px;}
		#video-block .video-content-wrap {margin-top:0;}
		a.anchor {top:-63px;}
	}

	@media screen and (max-width: 300px) { /* begin very,very small phone media query */
		footer ul li a, #footer ul li a {font-size:10px;}
	}

	@media screen and (max-height: 600px) { /* begin vertically-challenged landscape media query */
		header, #header {height:63px;}
		#video-block {max-height:calc(100vh - 63px);}
		#prenav nav ul li {padding:0 10px;}
		#prenav nav ul li a {font-size:9px !important; letter-spacing:+0px;}
		#prenav nav ul li a img {position:relative; top:-3px; width:30px;}
		#mainnav nav ul li a {font-size:9px !important;}
		#header .logo a {height:30px;; width:110px;}
		#mainnav {height:34px !important;}
		#header .logo, #header .logo a {min-width:110px;}
		#mainnav nav ul li {padding:0 5px;}
		#video-block .video-content-wrap {margin-top:0;}
		a.anchor {top:-63px;}
		.content-block .content-img {max-height:calc(100vh - 63px);}
		#support_container {padding-bottom:7%;}
		#support_text h1 {font-size:16px;}
		#support_container p {font-size:4vh; line-height:6vh;}
	}
	@media screen and (max-height: 500px) {
		#video-block {max-height:calc(100vh - 63px);}
		#video-block .video-content-wrap {padding:3% 6%; height:100vh;}
		#video-block h1 {font-size:3.5vw; line-height:4.5vw;}
	}
</style>

</head>

<body class="tabgible">

<header id="header" ng-controller="headerCtrl">

	<section id="prenav">
		<div class="prenav-interior">
			<nav>
				<ul>
					<li><a class="txt" href="http://gestureworks.com">Gestureworks</a></li>
					<li><a class="txt" href="http://openexhibits.org">Open Exhibits</a></li>
					<li><a class="img" href="http://ideum.com"><img src="media/images/logo-ideum-black.png" alt="Ideum" name="Ideum" title="Ideum"></a></li>
				</ul>
			</nav><!-- /.tabs -->
		</div><!-- /.prenav-interior -->
	</section><!-- /#prenav -->

	<div id="mainnav" class="vcenter-container">
		<h1 class="logo vcentered-content">
			<a href="/" title="Return to Home Page">Tangible Engine - Object Recognition System for Multitouch Tables</a>
		</h1>
		<nav>
			<ul>
				<!-- <li><a href="/pricing/">Pricing</a></li> -->
				<li><a href="#features">Features</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
		</nav>
	</div>

</header>


<!-- /// Begin Video Block \\\ -->
	
<section id="video-block" class="vcenter-container">

	<div class="video-content-wrap vcentered-content">
	
		<h1>OBJECT RECOGNITION FOR THE NEXT GENERATION OF MULTITOUCH TABLES</h1>

		<a class="button js-open-modal" href="#" data-modal-id="popup1">Watch video</a>
	
	</div>
	
	<img src="media/images/tangible-hero-bg.jpg" style="display:none; height:auto; margin-top:183px; visibility:hidden; width:100%;">

</section><!-- /#video-block -->
	
<!-- /// End Video Block \\\ -->

<div id="content" role="main" class="content-wrapper" style="position:relative;">
	
	<a class="anchor" name="features"></a>
	
	<!-- /// Begin Content Block - tangible-engine \\\ -->
	
	<section class="content-block imgLeft-txtRight tangible-engine">
	
		<div class="content-img"><a href="http://ideum.com/touch-tables"><!-- background image --></a></div>
		
		<div class="content-txt vcenter-container">
		
			<div class="content-txt-interior vcentered-content">
	
				<!-- <h3>
					Tangible Engine
				</h3> -->

				<p>
					Tangible Engine is a highly optimized authoring package supporting the use of fiducial object recognition on select <a href="http://ideum.com/touch-tables">Ideum multitouch tables</a>. This software allows for the unique recognition of objects with 3D printed conductive patterns. Tangible Engine is the first authoring system of its kind to work with projected-capacitive touch screens. The system does not need or use cameras or optical devices. 
				</p>
				
			</div><!-- /.content-txt-interior.vcentered-content -->
			
		</div><!-- /.content-txt.vcenter-container -->
	
	</section><!-- /.content-block .imgLeft-txtRight -->
	
	<!-- /// End Content Block - Tangible Engine \\\ -->
	
	
	
	<!-- /// Begin Content Block - Configurator / Visualizer \\\ -->
	
	<section class="content-block imgRight-txtLeft configurator">
		
		<div class="content-img"><a href="http://ideum.com/2016/06/22/ideum-introduces-tangible-engine/"><!-- background image --></a></div>
		
		<div class="content-txt vcenter-container">
		
			<div class="content-txt-interior vcentered-content">
	
				<!-- <h3>
					Configurator / Visualizer
				</h3> -->

				<p>
					Tangible Engine consists of a Configurator / Visualizer utility and an SDK which allows developers to connect events within their application to objects on the touch table surface. The Configurator / Visualizer enables developers to customize tangible objects used in prospective applications. Developers can introduce new tangibles and assign properties to the objects. We provide the source code of the Configurator / Visualizer, allowing developers to better understand how the system works.
				</p>
				
			</div><!-- /.content-txt-interior.vcentered-content -->
			
		</div><!-- /.content-txt.vcenter-container -->
	
	</section><!-- /.content-block .imgRight-txtLeft -->
	
	<!-- /// End Content Block - Configurator / Visualizer \\\ -->
	
	
	
	<!-- /// Begin Content Block - Tangible Engine SDK \\\ -->
	
	<section class="content-block imgLeft-txtRight tangible-engine-sdk">
	
		<div class="content-img"><a href="http://ideum.com/2016/06/22/ideum-introduces-tangible-engine/"><!-- background image --></a></div>
		
		<div class="content-txt vcenter-container">
		
			<div class="content-txt-interior vcentered-content">
	
				<!-- <h3>
					Tangible Engine SDK
				</h3> -->

				<p>
					Tangible Engine SDK allows C++ and Unity3D developers to easily add support for fiducial objects into their workflow. The SDK is highly optimized for efficiency providing a low-latency solution for tangible object recognition and tracking. 
				</p>
				
			</div><!-- /.content-txt-interior.vcentered-content -->
			
		</div><!-- /.content-txt.vcenter-container -->
	
	</section><!-- /.content-block .imgLeft-txtRight -->
	
	<!-- /// End Content Block - Tangible Engine SDK \\\ -->
	
	
	
	<!-- /// Begin Content Block - 3D Printed Tangible Markers \\\ -->
	
	<section class="content-block imgRight-txtLeft tangible-markers">
		
		<div class="content-img"><a href="http://ideum.com/2016/06/22/ideum-introduces-tangible-engine/"><!-- background image --></a></div>
		
		<div class="content-txt vcenter-container">
		
			<div class="content-txt-interior vcentered-content">
	
				<!-- <h3>
					3D Printed Tangible Markers
				</h3> -->

				<p>
					Tangible objects are included with each purchase, allowing developers to get started right away. In addition, instructions for 3D printing, including 3D files and a list of conductive printing materials, is provided.
				</p>
				
			</div><!-- /.content-txt-interior.vcentered-content -->
			
		</div><!-- /.content-txt.vcenter-container -->
	
	</section><!-- /.content-block .imgRight-txtLeft -->
	
	<!-- /// End Content Block - 3D Printed Tangible Markers \\\ -->
	
	
	
	<!-- /// Begin Content Block - Ideum Touch Tables \\\ -->
	
	<section class="content-block imgLeft-txtRight ideum-touch-tables">
	
		<div class="content-img"><a href="http://ideum.com/touch-tables"><!-- background image --></a></div>
		
		<div class="content-txt vcenter-container">
		
			<div class="content-txt-interior vcentered-content">
	
				<!-- <h3>
					Ideum Touch Tables
				</h3> -->

				<p>
					The Tangible Engine is available with the purchase of a qualifying Ideum multitouch table. (The system is currently compatible with Ideum 55” and 65” 4K UHD touch tables that incorporate 3M touch technology.) Ideum is a leader in high-end integrated touch products designed for demanding environments such as public spaces. Fortune 500 companies, top universities, research labs, museums, and government agencies have selected Ideum products for their exceptional performance and quality.
				</p>
				
			</div><!-- /.content-txt-interior.vcentered-content -->
			
		</div><!-- /.content-txt.vcenter-container -->
	
	</section><!-- /.content-block .imgLeft-txtRight -->
	
	<!-- /// End Content Block - Ideum Touch Tables \\\ -->
	
	
	
	<!-- /// Begin Content Block - Tangible Engine in Action \\\ -->
	
	<section class="content-block imgRight-txtLeft tangible-engine-in-action">
		
		<div class="content-img"><a href="http://ideum.com/creative-services/jcb-wine-tasting-experience/"><!-- background image --></a></div>
		
		<div class="content-txt vcenter-container">
		
			<div class="content-txt-interior vcentered-content">
	
				<!-- <h3>
					Tangible Engine in Action
				</h3> -->

				<p>
					The Tangible Engine software was first prototyped in in 2014 and presented as the "<a href="http://ideum.com/2014/08/20/the-dynamic-desktop-experimental-tangible-interfaces-for-capacitive-touch-tables/">Dynamic Desktop</a>." This initial model relied on traditional conductive materials and the recognition was “hard coded.” In 2015, Ideum developed a more robust version of the software and built <a href="http://ideum.com/creative-services/jcb-wine-tasting-experience/">an interactive wine tasting experience</a> with JCB Wines. Just prior to the 1.0 release of Tangible Engine, Ideum developed an <a href="http://ideum.com/creative-services/interactive-coffee-traceability-prototype-experience/">interactive coffee experience</a> with Starbucks. Ideum continues to develop custom software and will be adding new features to Tangible Engine in the near future.
				</p>
				
			</div><!-- /.content-txt-interior.vcentered-content -->
			
		</div><!-- /.content-txt.vcenter-container -->
	
	</section><!-- /.content-block .imgRight-txtLeft -->
	
	<!-- /// End Content Block - Tangible Engine in Action \\\ -->
	
	<a class="anchor" name="contact"></a>
	
	<!-- /// Begin Software Support \\\ -->

	<section id="support_container">
		<div id="support_container-interior">
			<div id="support_text" class="vertcenter">
				<h1 class="black">Software and Support</h1>
				<p class="paragraphone"><a href="http://ideum.com/contact/" target="_blank">Contact us</a> to learn more about Tangible Engine software and support packages.</p> 
			</div>
			<div id="support_data" class="vertcenter">
				<p class="paragraphone">
					phone: (505) 792-1110<br>
					toll free: (855) 898-6824<br>
					fax: (505) 792-1111<br>
					email: <a class="footerlink" href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;tf=1&amp;to=sales@ideum.com&amp;su=Inquiry from the Tangible Engine Web Site" target="_blank">sales@ideum.com</a>
				</p>
			</div>
		</div>
	</section>
	
	<!-- /// End Software Support \\\ -->

</div><!-- /#content.content-wrapper -->

<footer id="footer">
	<ul>
		<li class="footerlink white"><a href="http://gestureworks.com/">Gestureworks</a></li>
		<li class="footerlink white"><a href="http://openexhibits.org/">Open Exhibits</a></li>
		<li class="footerlink white"><a href="http://ideum.com/blog">Blog</a></li>
		<li class="footerlink white"><a href="http://ideum.com/creative-services">Creative Services</a></li>
		<li class="footerlink white"><a href="http://wiki.tangibleengine.com/">Wiki</a></li>
		<li class="footerlink white"><a href="http://gestureworks.com/legal">Legal</a></li>
	</ul>
	<p id="copyright">
		©Ideum - Tangible Engine is a product of <a href="http://ideum.com">Ideum</a>
	</p>
</footer>

<div id="popup1" class="modal-box">
  <header> <a href="#" class="js-modal-close close">×</a>
  </header>
  <div class="modal-body">
  	<div id="video-container">
    	<iframe width="1280" height="720" src="https://www.youtube.com/embed/2MtNxcxfJ3I?rel=0" allowfullscreen="" frameborder="0"></iframe>
		</div>
    
  </div>
  <footer> <a href="#" class="btn btn-small js-modal-close">Close</a> </footer>
</div>

<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> 
<script>
$(function(){

var appendthis =  ("<div class='modal-overlay js-modal-close'></div>");

	$('a[data-modal-id]').click(function(e) {
		e.preventDefault();
    $("body").append(appendthis);
    $(".modal-overlay").fadeTo(500, 0.7);
    //$(".js-modalbox").fadeIn(500);
		var modalBox = $(this).attr('data-modal-id');
		$('#'+modalBox).fadeIn($(this).data());
	});  
  
  
$(".js-modal-close, .modal-overlay").click(function() {
    $(".modal-box, .modal-overlay").fadeOut(500, function() {
        $(".modal-overlay").remove();
    });
 
});
 
$(window).resize(function() {
    $(".modal-box").css({
        top: ($(window).height() - $(".modal-box").outerHeight()) / 2,
        left: ($(window).width() - $(".modal-box").outerWidth()) / 2
    });
});
 
$(window).resize();
 
});
</script>

<script>
$('.js-modal-close').click(function () {
  $('#popup1').hide();
  $('#popup1 iframe').attr("src", jQuery("#popup1 iframe").attr("src"));
});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>