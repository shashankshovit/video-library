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
			<li><a href="index.php" class="first">Home</a></li>
			<li><a href="register.php">Register</a></li>
			<li><a href="add.php">Add</a></li>
			<li class="current_page_item"><a href="search.php">Search</a></li>
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
-->				<h2 class="title"><a href="search.php">Content Search</a></h2>
				<div class="entry">
					<p>This is a page whereby following two display are shown:
                    	<ul>
                        	<li>full data display of movie records</li>
                            <li>full data display of customer records</li>
                        </ul>
                    </p>
				</div>
				<!--<div><a href="#" class="links">View Full Story</a></div>-->
			</div>
			<div class="post">
				<!--<p class="meta"><span class="date">Sunday, April 26, 2009</span> 7:27 AM Posted by <a href="#">Someone</a></p>-->
				<h2 class="title"><a href="search.php?op=movies">Showing all details of movies</a></h2>
				<div class="entry">
					<table>
                	<tr><b>
                    	<td>Movie ID</td>
                        <td>Movie Name</td>
                        <td>Studio/ Production House</td>
                        <td>Year of Production</td>
                        <td>Genre</td>
                        <td>Language</td>
                        <td>Type</td>
                        <td>Casting</td>
                        <td>Director</td>
                        <td>Pack</td>
                        <td>M.R.P</td></b>
                    </tr>
                	<?php
					  require_once 'db.php';
					  $db_server = mysql_connect($db_hostname, $db_username, $db_password);
					  if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
					  mysql_select_db($db_database)
					  or die("Unable to select database: " . mysql_error());
					  $query = "SELECT * FROM movies, stock WHERE movies.mid=stock.mid";
					  $result = mysql_query($query);
					  if (!$result) die ("Database access failed: " . mysql_error());
					  $rows = mysql_num_rows($result);
					  
					  for ($j = 0 ; $j < $rows ; ++$j)
					  {
						  
						  echo "<tr>";
						  $row = mysql_fetch_row($result);
						  echo '<td>' . $row[0] . '</td>';
						  echo '<td>' . $row[1] . '</td>';
						  echo '<td>' . $row[2] . '</td>';
						  echo '<td>' . $row[3] . '</td>';
						  echo '<td>' . $row[4] . '</td>';
						  echo '<td>' . $row[5] . '</td>';
						  echo '<td>' . $row[6] . '</td>';
						  echo '<td>' . $row[7] . '</td>';
						  echo '<td>' . $row[8] . '</td>';
						  echo '<td>' . $row[9] . '</td>';
						  echo '<td>' . $row[10] . '</td>';
						  echo "</tr>";
					  }
					  mysql_close($db_server);
				  ?>
                </table>
                </div>
				<!--<div><a href="#" class="links">View Full Story</a></div>-->
			</div>
            
            <div class="post">
				<!--<p class="meta"><span class="date">Sunday, April 26, 2009</span> 7:27 AM Posted by <a href="#">Someone</a></p>-->
				<h2 class="title"><a href="search.php?op=customer">Showing details of all customers</a></h2>
				<div class="entry">
					<table>
                	<tr><b>
                    	<td>Customer ID</td>
                        <td>Customer Name</td>
                        <td>Address</td>
                        <td>Phone</td></b>
                    </tr>
                	<?php
					  require_once 'db.php';
					  $db_server = mysql_connect($db_hostname, $db_username, $db_password);
					  if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
					  mysql_select_db($db_database)
					  or die("Unable to select database: " . mysql_error());
					  $query = "SELECT * FROM customer";
					  $result = mysql_query($query);
					  if (!$result) die ("Database access failed: " . mysql_error());
					  $rows = mysql_num_rows($result);
					  
					  for ($j = 0 ; $j < $rows ; ++$j)
					  {
						  
						  echo "<tr>";
						  $row = mysql_fetch_row($result);
						  echo '<td>' . $row[0] . '</td>';
						  echo '<td>' . $row[1] . '</td>';
						  echo '<td>' . $row[2] . '</td>';
						  echo '<td>' . $row[3] . '</td>';
						  echo "</tr>";
					  }
					  mysql_close($db_server);
				  ?>
                </table>
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
						<li><a href="search.php?op=movies">Movies</a></li>
						<li><a href="search.php?op=customers">Customers</a></li>
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
