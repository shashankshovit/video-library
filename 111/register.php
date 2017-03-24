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
<title>video library - register</title>
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
			<li class="current_page_item"><a href="register.php">Register</a></li>
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
-->				<h2 class="title"><a href="register.php">the register of video library</a></h2>
				<div class="entry">
					<p>
                    	here we can perform 3 basic functions<br />
                        <ul>
                        	<li>Issue a Movie to a customer</li>
                            <li>Deposit a Movie from a customer</li>
                            <li>View the stock all together</li>
                        </ul>
                    </p>
				</div>
				<!--<div><a href="#" class="links">View Full Story</a></div>-->
			</div>
            
			<div class="post" id="div_issue">
				<!--<p class="meta"><span class="date">Sunday, April 26, 2009</span> 7:27 AM Posted by <a href="#">Someone</a></p>-->
				<h2 class="title"><a href="register.php?op=issue">Issue a Movie</a></h2>
				<div class="entry">
					<form method="get" action="register.php">
                	<table>
                    	<tr>
                        	<th>Movie ID</th>
                            <td><input type="text" name="i_mid" /></td>
                        </tr>
                        <tr>
                        	<th>Customer ID</th>
                            <td><input type="text" name="i_cid" /></td>
                        </tr>
                        <tr>
                        	<th>Date of Issue</th>
                            <td><input type="text" name="i_doi" value="<?php echo date("d-m-Y"); ?>" readonly="readonly" /></td>
                        </tr>
                        <tr>
                        	<td></td>
                        	<th colspan="2"><input type="submit" value="Issue" /></th> 
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
						
						$mid = $_REQUEST['i_mid'];
						$cid = $_REQUEST['i_cid'];
						$doi = $_REQUEST['i_doi'];
						
						echo $mid;
						echo $cid;
						echo $doi;
						
						
						
						$query = "INSERT INTO register VALUES" . "('$mid', '$cid', '$doi', '', '')";
						if (!mysql_query($query, $db_server))
						echo "INSERT failed: $query<br />" .
						mysql_error() . "<br /><br />";
						
					?>
				</div>
				<!--<div><a href="#" class="links">View Full Story</a></div>-->
			</div>
            
            <div class="post" id="div_deposit">
				<!--<p class="meta"><span class="date">Sunday, April 26, 2009</span> 7:27 AM Posted by <a href="#">Someone</a></p>-->
				<h2 class="title"><a href="deposit.php?op=issue">Deposit a Movie</a></h2>
				<div class="entry">
                <form action="register.php" method="get">
                <table>
                	<tr>
                    	<th>Movie ID</th>
                        <td><input type="text" name="d_mid" /></td>
                    </tr>
                    <tr>
                    	<th>Customer ID</th>
                        <td><input type="text" name="d_cid" /></td>
                    </tr>
                    <tr>
                    	<th>Date of Deposit</th>
                        <td><input type="text" name="d_dod" value="<?php echo date("d-m-Y"); ?>" readonly="readonly" /></td>
                    </tr>
                    <tr>
                    	<th>Fine/Dues</th>
                        <td><input type="text" name="d_fine" /></td>
                    </tr>
                    <tr>
                    	<th></th>
                        <td colspan="2"><input type="submit" value="Deposit"</td>
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
						
						$mid = $_REQUEST['d_mid'];
						$cid = $_REQUEST['d_cid'];
						$dod = $_REQUEST['d_dod'];
						$fine = $_REQUEST['d_fine'];
						
						echo $mid;
						echo $cid;
						echo $doi;
						echo $fine;
						
						$query = "UPDATE register SET register.dod=" . "'$dod'" . " ,register.fine=" . "'$fine'" . " WHERE register.mid=" . "'$mid'" . " AND register.cid=" . "'$cid'";
						if (!mysql_query($query, $db_server))
						echo "UPDATE failed: $query<br />" .
						mysql_error() . "<br /><br />";

					?>
                </div>
				<!--<div><a href="#" class="links">View Full Story</a></div>-->
			</div>
            
            <div class="post" id="div_stock">
				<!--<p class="meta"><span class="date">Sunday, April 26, 2009</span> 7:27 AM Posted by <a href="#">Someone</a></p>-->
				<h2 class="title"><a href="regiter.php?op=stock">View the stock</a></h2>
				<div class="entry">
                <table>
                	<tr><b>
                    	<td>Movie ID</td>
                        <td>Customer ID</td>
                        <td>Date of Issue</td>
                        <td>Date of Deposit</td>
                        <td>Fines</td></b>
                    </tr>
                	<?php
					  require_once 'db.php';
					  $db_server = mysql_connect($db_hostname, $db_username, $db_password);
					  if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
					  mysql_select_db($db_database)
					  or die("Unable to select database: " . mysql_error());
					  $query = "SELECT * FROM register";
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
						<li><a href="register.php?op=issue">Issue a Movie</a></li>
						<li><a href="register.php?op=deposit">Deposit a Movie</a></li>
						<li><a href="register.php?op=stock">Stock View</a></li>
						<!--<li><a href="#">Film 4</a></li>
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