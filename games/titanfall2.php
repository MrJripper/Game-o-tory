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
$_SESSION['id']=10;
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
		<p align="center">Titanfall 2</p>
		<br><br>
		<img src="images/titanfall2.jpg" height="400px" width="700px">
		<br><br>
		<div class="desc" align="left">
		Titanfall is a multiplayer first-person shooter video game developed by Respawn Entertainment and published by Electronic Arts. It was released for Microsoft Windows and Xbox One on March 11, 2014; an Xbox 360 version ported by Bluepoint Games[3] was released April 8, 2014. The game was highly anticipated as the debut title from developers formerly behind the successful Call of Duty franchise.

        In Titanfall, players control "pilots" and their mech-style Titans, and fight in six-on-six matches set in war-torn outer space colonies. The game is optimized for fast-paced, continual action, aided by wall-running abilities and populations of computer-controlled soldiers. Up to 50 characters can be active in a single game, and non-player activity is offloaded to Microsoft's cloud computing services to optimize local graphical performance. The game's development team began work on the title in 2011, and their Titan concept grew from a human-sized suit into a battle tank exoskeleton. The team sought to bring "scale, verticality, and story" to its multiplayer genre through elements traditionally reserved for single-player campaigns. The 65-person project took inspiration from Blade Runner, Star Wars, Abrams Battle Tank, and Masamune Shirow of Ghost in the Shell.
		<br><br>
		Titanfall won over 60 awards at its E3 2013 reveal, including a record-breaking six E3 Critics Awards and "Best of Show" from several media outlets. It also won official awards at Gamescom and the Tokyo Game Show. Titanfall received generally favorable reviews. Reviewers praised its balance, Smart Pistol weapon, player mobility, and overall accessibility for players of all skill sets, but criticized its thin campaign, disappointing artificial intelligence, and lack of community features and multiplayer modes. Critics considered the game a successful evolution for the first-person shooter genre but did not agree as to whether the game delivered on its anticipation. On March 12, 2015, it was announced that a sequel is in production for Microsoft Windows, PlayStation 4, and Xbox One. It was released on October 28, 2016.
		<br><br>
		Titanfall is a shooter game played from a first-person perspective. Players fight as free-running foot soldier "pilots" who can command agile, mech-style exoskeletons—"Titans"—to complete team-based objectives. The game is set on derelict and war-torn colonies at the Frontier fringe of space exploration as either the Interstellar Manufacturing Corporation (IMC) or the Frontier Militia. Online multiplayer is the sole game mode, but contains single-player elements such as plot, character dialogue, and non-player characters (NPCs).While Titanfall has no offline, single-player, or local splitscreen modes, it supports system link over a local area network (LAN). Respawn founder Vince Zampella described the game as bringing "scale, verticality, and story" to the first-person shooter genre of multiplayer gaming.
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

$sql = "select username,text from comments where Gameid = 10 ";

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
