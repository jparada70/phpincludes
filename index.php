<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

<title>Juan M. Parada</title>
<meta name="description" content="Juan M. Parada, Professional Work and Student work samples">
<meta name="keywords" content="">

<!-- Mobile viewport -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">


<!-- CSS-->
<!-- Google web fonts. You can get your own bundle at http://www.google.com/fonts. Don't forget to update the CSS accordingly!-->
<link href='http://fonts.googleapis.com/css?family=Droid+Serif|Ubuntu' rel='stylesheet' type='text/css'>

<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="js/flexslider/flexslider.css">
<link rel="stylesheet" href="css/basic-style.css">

<!-- end CSS-->

<!-- JS-->
<script src="js/libs/modernizr-2.6.2.min.js"></script>
<script type="text/javascript" src="js/lightbox.js"></script>
<!-- end JS-->

<style>
#lightbox{
	background-color:#eee;
	padding: 10px;
	border-bottom: 2px solid #666;
	border-right: 2px solid #666;
	}
#lightboxDetails{
	font-size: 0.8em;
	padding-top: 0.4em;
	}
#lightboxCaption{ float: left; }
#keyboardMsg{ float: right; }
#closeButton{ top: 5px; right: 5px; }

#lightbox img{ border: none; clear: both;}
#overlay img{ border: none; }

#overlay{ background-image: url(images/overlay.png); }

* html #overlay{
	background-color: #333;
	back\ground-color: transparent;
	background-image: url(blank.gif);
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="images/overlay.png", sizingMethod="scale");
	}

	img.sm {
			opacity: 1.0;
			filter: alpha(opacity=50); /* For IE8 and earlier */
	}

	img.sm:hover {
			opacity: 0.5;
			filter: alpha(opacity=100); /* For IE8 and earlier */
	}

	.cont {
	  position: relative;
	}
	.overlay2 {
	  position: absolute;
	  top: 0;
	  bottom: 0;
	  left: 0;
	  right: 0;
	  height: 100%;
	  width: 100%;
	  opacity: 0;
	  transition: .5s ease;
	  background-color: #616161;
	}

	.cont:hover .overlay2 {
	  opacity: 1;
	}

	.txt {
  color: white;
  font-size: 30px;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}



</style>

</head>

<body id="home">

<!-- header area -->
    <header class="wrapper clearfix">

        <div id="banner">
        	<div id="logo"><a href="index.php"><img src="images/basic-logo.png" alt="logo" class="sm"></a></div>
        </div>



	 <!-- main navigation -->
	 <?php include("php/nav.php"); ?>
<!-- end main navigation -->


    </header><!-- end header -->


<!-- hero area (the grey one with a slider -->
    <section id="hero" class="clearfix">
    <!-- responsive FlexSlider image slideshow -->
    <div class="wrapper">
       <div class="row">
        <div class="grid_5">
            <h2>Juan M. Parada</h2>





        </div>

              </div><!-- end grid_7 -->
        </div><!-- end row -->
       </div><!-- end wrapper -->
    </section><!-- end hero area -->

<!-- main content area -->
<div class="wrapper" id="main">

<!-- content area -->
	<section id="content" class="wide-content">

		<div class="row">
							<div class="grid_4">

<div class="cont">
	<a href="s_wds.php"><img src="images/home_sw.jpg" /></a>
	<div class="overlay2">
	<a href="s_wds.php"><div class="txt">Student</div></a>
</div>
</div>

		</div>
		<div class="grid_4">

					<div class="cont">
						<a href="about.php"><img src="images/home_a.jpg" /></a>
						<div class="overlay2">
						<a href="about.php"><div class="txt">About</div></a>
					</div>
					</div>

			</div>

		<div class="grid_4">

			<div class="cont">
				<a href="p_webdev.php"><img src="images/home_pw.jpg" /></a>
				<div class="overlay2">
				<a href="p_webdev.php"><div class="txt">Professional</div></a>
			</div>
			</div>

			</div>


</section><!-- #end content area -->


    <!-- sidebar
    <aside>
        <h2>Contact:</h2>
            <nav id="secondary-navigation">
                    <ul>
                        <li class="current"><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                         Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</a></li>

                      <li><a href="mailto:paradaj@gmail.com">Email</a></li>

                    </ul>
             </nav>
      </aside> #end sidebar -->

  </div><!-- #end div #main .wrapper -->



	<!-- footer area -->
	<footer>
		<div id="colophon" class="wrapper clearfix">
	    	Juan M. Parada | Copyright © <script>new Date().getFullYear()>document.write(new Date().getFullYear());</script>
	    </div>
</footer>
	<!-- #end footer area -->


<!-- jQuery -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="js/libs/jquery-1.9.0.min.js">\x3C/script>')</script>

<script defer src="js/flexslider/jquery.flexslider-min.js"></script>

<!-- fire ups - read this file!  -->
<script src="js/main.js"></script>

</body>
</html>
