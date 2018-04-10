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
$_SESSION['id']=19;
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
		<p align="center">Pokkén Tournament</p>
		<br><br>
		<img src="images/pokkentournament.jpg" height="400px" width="700px">
		<br><br>
		<div class="desc" align="left">
		Pokkén Tournament (ポッ拳 Pokken?) is a fighting video game developed by Bandai Namco Studios and published by The Pokémon Company.The game combines gameplay elements from Bandai Namco's Tekken series with characters from Nintendo's Pokémon franchise.[4] It was released for Japanese arcades in July 2015, and worldwide for the Wii U in March 2016.
		<br><br>
		Pokkén Tournament is a fighting game in which two fighters battle against each other using various Pokémon, with gameplay shifting between "Field Phase" where the Pokémon move freely around the arena, and "Duel Phase" where they move relative each other similar to the Tekken games. Unlike most arcade fighting games, which use a traditional joystick and buttons, the arcade version is played using console-style controllers, which are designed so that players who are not used to arcade sticks can get into the game more easily.The game focuses more on action, as opposed to the more technical gameplay of Tekken, allowing both hardcore and casual fans to enjoy it. As such, players can perform various techniques taken from the Pokémon series, such as special moves and Mega Evolutions (which can be built up from attacks using a "Synergy Gauge").Players can also use Support Pokémon to give them special benefits such as buffs in attack or defense. On October 30, 2015, footage surfaced of a boss fight with a new form of Mewtwo, known as "Shadow Mewtwo"; the character was teased in an official trailer a few days later. First-print Wii U copies of the game were packaged with a Shadow Mewtwo amiibo card, which immediately unlocked the character for use.The title also features online play, where players can compete in two types of online battle modes called friendly battles and ranked battles, including matches between players with registered friend codes and players who enter the same VS Code as each other.
		<br><br>
		Pokkén Tournament was first teased during a Pokémon Game Show event held in Japan in August 2013, with trademarks for the game filed the same month.It was officially announced at an event held by Famitsu on August 26, 2014. The Pokémon Company CEO Tsunekazu Ishihara, Tekken series producer Katsuhiro Harada, and Soulcalibur producer Masaaki Hoshino attended the event, which was broadcast on NicoNico, stating the collaboration came about from brainstorming ideas of new ways to play Pokémon.
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

$sql = "select username,text from comments where Gameid = 19 ";

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
