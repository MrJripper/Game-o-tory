<!DOCTYPE html>
<html>

<head>
<title>gameotory</title>
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link href="css/foot.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
</head>


<body>
<!-- Page -->
<div id="page" class="shell">
	<br><br>
  <!-- Header -->
  <div id="header">
    <div class="cl">&nbsp;</div>
    
	<!-- Logo -->
    <div id="logo">
      <h1><a href="index.html">game<span>otory</span></a></h1>
      <p class="description"> &nbsp; &nbsp; &nbsp; Your Game Zone</p>
    </div>
    <!-- / Logo -->

	 
    <div class="cl">&nbsp;</div>
    
	<!-- Sort Navigation -->
    <div id="sort-nav">
      <div class="bg-right">
        <div class="bg-left">
          <div class="cl">&nbsp;</div>
          <ul>
            <li><a href="index.html">Home</a><span class="sep">&nbsp;</span></li>
            <li><a href="xbox.php">XBOX </a><span class="sep">&nbsp;</span></li>
            <li><a href="ps.php">PS</a><span class="sep">&nbsp;</span></li>
            <li><a href="pc.php">PC</a><span class="sep">&nbsp;</span></li>
            <li><a href="wii.php">WII</a><span class="sep">&nbsp;</span></li>
            <li><a href="games.php">All Games</a><span class="sep">&nbsp;</span></li>
            <li><a href="forums.php">Forums</a><span class="sep">&nbsp;</span></li>
			
            <li class="right"><a href="signup.html">Sign Up</a><span class="sep">&nbsp;</span></li>
            <li class="right"><a href="signin.html">Sign In</a><span class="sep">&nbsp;</span></li>
			
          </ul>
          <div class="cl">&nbsp;</div>
        </div>
      </div>
    </div>
    <!-- / Sort Navigation -->
	
  </div>
  <!-- / Header -->
  
  <br><br><br>
  
  <div class="vid">
  
	<video id="bgvid" playsinline autoplay loop>
	<?php
	
	$servername = "localhost:3307";
	$username = "root";
	$password = "";

	$conn = mysql_connect($servername, $username, $password);

	if(!$conn)
	{
	die("failed".mysql_error() );
	}

	$sql=mysql_select_db('gameotory',$conn);

	if(!$sql)
	{
		die("failed". mysql_error());
	}
	
	$sql = "select address from videos where vid=4";
	$c=mysql_query($sql,$conn);
	for($counter=0;$row=mysql_fetch_row($c);$counter++)
		{
			print(" <source src=\"$row[0].webm\" type=\"video/webm\">
			<source src=\"$row[0].mp4\" type=\"video/mp4\">");
		}
	?>
	</video>
	
  </div>
  
	<!-- Footer -->
   <div id="foot" class="content">
			<div class="footer-grids">
				<div class="footer one">
					<h3>More About Gameotory</h3>
					<p> Gameotory keeps you updated about the latest and
						trending games for various consoles. This is a
						perfect spot for all the game addicts.	</p>
					<div class="clear"></div>
				</div>
				<div class="footer two">
					<h3>Keep Connected</h3>
					<ul>
						<li><a class="fb" href="#"><i></i>Like us on Facebook</a></li>
						<li><a class="fb1" href="#"><i></i>Follow us on Twitter</a></li>
						<li><a class="fb2" href="#"><i></i>Add us on Google Plus</a></li>
					</ul>
				</div>
				<div class="footer three">
					<h3>Contact Information</h3>
					<ul>
						<li>Gameotory<span>JIIT, Noida.</span> </li>
						<li>1234567890  </li>
						<li><a href="mailto:info@example.com">contact@example.com</a> </li>
					</ul>
				</div>
				<div class="clear"></div>
			</div>
		</div>
    <!-- / Footer -->
  </div>
</div>
<!-- / Main -->
</div>
<!-- / Page -->
</body>
</html>
