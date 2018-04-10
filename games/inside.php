<!DOCTYPE html>
<html>

<head>
<title>gameotory</title>
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link href="css/foot.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Viga' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<?php
session_start();
$_SESSION['id']=13;
?>
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
    
	<div class="gcontent" align="center">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<p align="center">INSIDE</p>
		<br><br>
		<img src="images/inside.jpg" height="400px" width="700px">
		<br><br>
		<div class="desc" align="left">
		Inside (stylized as INSIDE) is a puzzle-platformer adventure video game developed and published by Playdead and first released in June 2016. In the game the player controls a young boy in a dystopic world, solving environmental puzzles while avoiding death in a 2.5D sidescrolling fashion, thematically and visually following up on the 2010 monochromatic video game Limbo.

        Playdead started working on Inside shortly after the release of Limbo. Initially, the company started with the same custom game engine they used for Limbo, but later switched to Unity to simplify development. They developed rendering routines to give the game a signature look and which they later released as open source. The game was partially funded by a grant from the Danish Film Institute.
		<br><br>
		Inside premiered at Microsoft's E3 2014 conference, with a planned release in 2015. The game was released for Xbox One on 29 June 2016, Microsoft Windows on 7 July, and for the PlayStation 4 on 23 August. The game received critical acclaim upon release, with some critics and reviewers calling it a worthy successor to Limbo.
		<br><br>
		Inside is a puzzle platformer in which the player character is an unnamed young red-shirted boy who explores a surreal environment presented as a primarily monochromatic 2.5D platform game, using color only to highlight parts of the environment. The game is very dark in nature and mostly silent, with only occasional musical cues. The player controls the boy who walks, runs, swims, climbs, and uses objects to overcome obstacles and progress in the game.Later the boy gains the ability to control bodies to complete certain puzzles, a mechanic that IGN's Marty Sliva compared to a similar mechanic in The Swapper. At various points in the game, the player may discover hidden rooms containing glowing orbs. If all the orbs are deactivated during a playthrough, the player can unlock the game's alternate ending.

        The boy can die in various ways, such as being shot with a tranquilizer dart, mutilated by dogs, ensnared by security machines, blown apart by shockwaves, or drowning. As in the predecessor game Limbo, these deaths are presented realistically and often graphically. If the character dies, the game continues from the most recent checkpoint.  
		</div>
	</div>
	
		<div class="comments">
		<h1> COMMENTS: </h1>
		<br><br>
		<?php
		
		$servername = "localhost:3307";
		$username = "root";
		$password = "";

		$conn = mysql_connect($servername, $username, $password);

	if(!$conn)
{
die("failed");
}


$sql=mysql_select_db('gameotory',$conn);
if(!$sql)
{
die("failed". mysql_error());
}

$sql = "select username,text from comments where Gameid = 13 ";

$c=mysql_query($sql,$conn);

if(!$c)
{ 
die("failed query". mysql_error());
}

for($count=0;$row = mysql_fetch_row($c);$count++)
{
	print("<div class=\"user\">
		$row[0]
		</div>
		<div class=\" text\">
		$row[1]
		</div>");

}
		?>
		
		
	</div>
	
	<div>
	
	<form action="comm.php" method="post">
	
	 &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
	USER NAME: &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input name="user" type="text">
	<br><br>
	&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
	ADD COMMENT: &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input name="comm" type="text">
	
	<br><br>
	&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
	<input type="submit" value="COMMENT">
	</form>
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
