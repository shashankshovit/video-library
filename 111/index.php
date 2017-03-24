<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : Throughout 
Description: A two-column, fixed-width design for 1024x768 screen resolutions.
Version    : 1.0
Released   : 20100423

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>video library</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<script type="text/javascript" src="jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="jquery/jquery.slidertron-0.1.js"></script>
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<style type="text/css">
@import "slidertron.css";
</style>
</head>
<body>
<!-- end #header-wrapper -->
<!--<div id="logo">
	<h1><a href="#">Throughout </a></h1>
	<p><em> template design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a></em></p>
</div>
-->
<div id="header">
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="index.php" class="first">Home</a></li>
			<li><a href="register.php">Register</a></li>
			<li><a href="add.php">Add</a></li>
			<li><a href="search.php">Search</a></li>
			<!--<li><a href="#">Contact</a></li>-->
		</ul>
	</div>
	<!-- end #menu -->
	<div id="search">
		<form method="get" action="">
			<fieldset>
				<input type="text" name="s" id="search-text" size="15" />
			</fieldset>
		</form>
	</div>
	<!-- end #search -->
</div>
<!-- end #header -->
<hr />
<!-- end #logo -->
<div id="slideshow">
	<!-- start -->
	<div id="foobar">
		<div id="col1"><a href="#" class="previous">&nbsp;</a></div>
		<div id="col2">
			<div class="viewer">
				<div class="reel">
					<div class="slide"><img src="images/img04.jpg" width="726" height="335" alt="" /> <span>the latest sharukh hit!!!</span> </div>
					<div class="slide"><img src="images/img07.jpg" width="726" height="335" alt="" /> <span>double the fun, double the laughter...</span> </div>
					<div class="slide"><img src="images/img08.jpg" width="726" height="335" alt="" /> <span>suspense continues...</span> </div>
				</div>
			</div>
		</div>
		<div id="col3"><a href="#" class="next">&nbsp;</a></div>
	</div>
	<script type="text/javascript">

						$('#foobar').slidertron({
							viewerSelector:			'.viewer',
							reelSelector:			'.viewer .reel',
							slidesSelector:			'.viewer .reel .slide',
							navPreviousSelector:	'.previous',
							navNextSelector:		'.next',
							navFirstSelector:		'.first',
							navLastSelector:		'.last'
						});
						
					</script>
	<!-- end -->
--></div>
<div id="page">
	<div id="page-bgtop">
		<div id="content">
			<div class="post">
				<!--<p class="meta"><span class="date">Sunday, April 26, 2009</span> 7:27 AM Posted by <a href="#">Someone</a></p>
-->				<h2 class="title"><a href="index.php">Welcome to Video Library </a></h2>
				<div class="entry">
					<p>This is <strong>Video Library </strong>, made in <strong>php</strong> & <strong>mysql</strong>. It is a local website that is meant to run on reception of the shop.
                    </p>
				</div>
				<!--<div><a href="#" class="links">View Full Story</a></div>-->
			</div>
			<div class="post">
				<!--<p class="meta"><span class="date">Sunday, April 26, 2009</span> 7:27 AM Posted by <a href="#">Someone</a></p>
				<h2 class="title"><a href="#">Lorem ipsum sed aliquam</a></h2>
				<div class="entry">
					<p><img src="images/img11.jpg" width="560" height="270" alt="" />Donec ipsum. Proin imperdiet est. Phasellus <a href="#">dapibus semper urna</a>. Pellentesque ornare, orci in consectetuer hendrerit, urna elit eleifend nunc, ut consectetuer nisl felis ac diam. Etiam non felis.</p>
				</div>-->
				<!--<div><a href="#" class="links">View Full Story</a></div>-->
			</div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<ul>
				<!--<li>
					<h2>Aliquam tempus</h2>
					<p>Mauris vitae nisl nec metus placerat perdiet est. Phasellus dapibus semper urna. Pellentesque ornare, orci in consectetuer hendrerit, volutpat.</p>
				</li>-->
				<li>
					<h2>New Additions</h2>
					<ul>
						<li><a href="#">RA-ONE</a></li>
						<li><a href="#">PA</a></li>
						<li><a href="#">Dabangg</a></li>
						<li><a href="#">Run</a></li>
						<li><a href="#">Haunted 3D</a></li>
						<li><a href="#">Seher</a></li>
						<li><a href="#">Texas Chainsaw Massacare</a></li>
						<li><a href="#">Troy</a></li>
					</ul>
				</li>
				<li>
					<h2>Made By:-</h2>
					<ul>
						<li><a href="#">Parikshit Sharma</a></li>
						<li><a href="#">Parikshit Sharma</a></li>
						<li><a href="#">Parikshit Sharma</a></li>
						<li><a href="#">Parikshit Sharma</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<!-- end #page -->
</div>
<div id="footer">
	<p>Copyright (c) 2008 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org/">Free CSS Templates</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>
