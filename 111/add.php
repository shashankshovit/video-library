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
<title>video library - new additions</title>
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
			<li><a href="index.php" class="first">Home</a></li>
			<li><a href="register.php">Register</a></li>
			<li class="current_page_item"><a href="add.php">Add</a></li>
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
				<!--<p class="meta"><span class="date">Sunday, April 26, 2009</span> 7:27 AM Posted by <a href="#">Someone</a></p>-->
				<h2 class="title"><a href="add.php">the new entries in video library</a></h2>
				<div class="entry">
					<p>Here we perform either of the two functions.
                    	<ul>
                        	<li>Adding new movies to the database</li>
                            <li>Adding new customers to the database</li>
                        </ul>
                    </p>
				</div>
				<!--<div><a href="#" class="links">View Full Story</a></div>-->
			</div>
            
			<div class="post">
				<!--<p class="meta"><span class="date">Sunday, April 26, 2009</span> 7:27 AM Posted by <a href="#">Someone</a></p>-->
				<h2 class="title"><a href="add.php?op=movies">New Movies</a></h2>
				<div class="entry">
				<form action="add.php" method="get">
                <table>
                	<tr>
                    	<th>Movie ID</th>
                        <td><input type="text" name="m_mid" /></td>
                    </tr>
                    <tr>
                    	<th>Name of Movie</th>
                        <td><input type="text" name="m_name" /></td>
                    </tr>
                    <tr>
                    	<th>Studio/Production House</th>
                        <td><input type="text" name="m_studio" /></td>
                    </tr>
                    <tr>
                    	<th>Year of Release</th>
                        <td><input type="text" name="m_year" /></td>
                    </tr>
                    <tr>
                    	<th>Genre of Movie</th>
                        <td><input type="text" name="m_genre" /></td>
                    </tr>
                    <tr>
                    	<th>Language</th>
                        <td><input type="text" name="m_language" /></td>
                    </tr>
                    <tr>
                    	<th>Type of Movie</th>
                        <td><input type="text" name="m_type" /></td>
                    </tr>
                    <tr>
                    	<th>Casting</th>
                        <td><input type="text" name="m_cast" /></td>
                    </tr>
                    <tr>
                    	<th>Director of Movie</th>
                        <td><input type="text" name="m_director" /></td>
                    </tr>
                    <tr>
                    	<th>Pack/Edition</th>
                        <td><input type="text" name="m_pack" /></td>
                    </tr>
                    <tr>
                    	<th>M.R.P</th>
                        <td><input type="text" name="m_value" /></td>
                    </tr>
                    <tr>
                    	<th></th>
                        <td colspan="2"><input type="submit" value="Add Movie" /></td>
                    </tr>
                </table>
                </form>
                <?php
				/*code for connecting to database*/
						
                        require_once 'db.php';
						$db_server = mysql_connect($db_hostname, $db_username, $db_password);
						if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
						mysql_select_db($db_database, $db_server)
						or die("Unable to select database: " . mysql_error());
						
						$mid = $_REQUEST['m_mid'];
						$name = $_REQUEST['m_name'];
						$studio = $_REQUEST['m_studio'];
						$year = $_REQUEST['m_year'];
						$genre = $_REQUEST['m_genre'];
						$language = $_REQUEST['m_language'];
						$type = $_REQUEST['m_type'];
						$cast = $_REQUEST['m_cast'];
						$director = $_REQUEST['m_director'];
						$pack = $_REQUEST['m_pack'];
						$value = $_REQUEST['m_value'];
						
						
						echo $mid;
						echo $name;
						echo $studio;
						echo $year;
						echo $genre;
						echo $language;
						echo $type;
						echo $cast;
						echo $director;
						echo $pack;
						echo $value;
						
						$query = "INSERT INTO movies VALUES" . "('$mid', '$name', '$studio', '$year', '$genre', '$language', '$type', '$cast', '$director')";
						if (!mysql_query($query, $db_server))
						echo "INSERT failed: $query<br />" .
						mysql_error() . "<br /><br />";
						
						$query = "INSERT INTO stock VALUES" . "('$mid', '$pack', '$value')";
						if (!mysql_query($query, $db_server))
						echo "INSERT failed: $query<br />" .
						mysql_error() . "<br /><br />";
				?>
				</div>
				<!--<div><a href="#" class="links">View Full Story</a></div>-->
			</div>
            
            <div class="post">
				<!--<p class="meta"><span class="date">Sunday, April 26, 2009</span> 7:27 AM Posted by <a href="#">Someone</a></p>-->
				<h2 class="title"><a href="add.php?op=customer">New Customer</a></h2>
				<div class="entry">
				<form action="add.php" method="get">
                <table>
                	<tr>
                    	<th>Customer ID</th>
                        <td><input type="text" name="c_cid" /></td>
                    </tr>
                    <tr>
                    	<th>Name of Customer</th>
                        <td><input type="text" name="c_name" /></td>
                    </tr>
                    <tr>
                    	<th>Address of Customer</th>
                        <td><input type="text" name="c_address" /></td>
                    </tr>
                    <tr>
                    	<th>Phone Number</th>
                        <td><input type="text" name="c_phone" /></td>
                    </tr>
                    <tr>
                    	<th></th>
                        <td colspan="2"><input type="submit" value="Add Customer" /></td>
                    </tr>
                </table>
                </form>
                <?php
				/*code for connecting to database*/
						
                        require_once 'db.php';
						$db_server = mysql_connect($db_hostname, $db_username, $db_password);
						if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
						mysql_select_db($db_database, $db_server)
						or die("Unable to select database: " . mysql_error());
						
						$cid = $_REQUEST['c_cid'];
						$name = $_REQUEST['c_name'];
						$address = $_REQUEST['c_address'];
						$phone = $_REQUEST['c_phone'];
						
						echo $cid;
						echo $name;
						echo $address;
						echo $phone;
						
						$query = "INSERT INTO customer VALUES" . "('$cid', '$name', '$address', '$phone')";
						if (!mysql_query($query, $db_server))
						echo "INSERT failed: $query<br />" .
						mysql_error() . "<br /><br />";

				?>
				</div>
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
					<h2>Menu</h2>
					<ul>
						<li><a href="add.php?op=movies">Movies</a></li>
						<li><a href="add.php?op=customer">Customer</a></li>
						<!--<li><a href="#">Film 3</a></li>
						<li><a href="#">Film 4</a></li>
						<li><a href="#">Film 5</a></li>
						<li><a href="#">Film 6</a></li>
						<li><a href="#">Film 7</a></li>
						<li><a href="#">Film 8</a></li>-->
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
