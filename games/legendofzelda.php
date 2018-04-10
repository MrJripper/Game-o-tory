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
$_SESSION['id']=21;
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
		<p align="center">The Legend of Zelda</p>
		<br><br>
		<img src="images/legendofzelda.jpg" height="400px" width="700px">
		<br><br>
		<div class="desc" align="left">
		The Legend of Zelda (Japanese: ゼルダの伝説 Hepburn: Zeruda no Densetsu?) is a high-fantasy action-adventure video game series created by Japanese game designers Shigeru Miyamoto and Takashi Tezuka. It is primarily developed and published by Nintendo, although some portable installments have been outsourced to Capcom, Vanpool, and Grezzo. The series' gameplay incorporates elements of action, adventure, and puzzle-solving games.
		<br><br>
		The series centers on Link, the playable character and chief protagonist. Link is often given the task of rescuing Princess Zelda and the kingdom of Hyrule from Ganon, who is the principal antagonist of the series; however, other settings and antagonists have appeared in several titles. The games' plots commonly involve a relic known as the Triforce, a set of three omnipotent golden triangles. The protagonist in each game is usually not the same incarnation of Link, but a few exceptions exist.
		<br><br>
		The Legend of Zelda games feature a mixture of puzzles, action, adventure/battle gameplay, and exploration. These elements have remained constant throughout the series, but with refinements and additions featured in each new game. Later games in the series also include stealth gameplay, where the player must avoid enemies while proceeding through a level, as well as racing elements. Although the games can be beaten with a minimal amount of exploration and side quests, the player is frequently rewarded with helpful items or increased abilities for solving puzzles or exploring hidden areas. Some items are consistent and appear many times throughout the series (such as bombs and bomb flowers, which can be used both as weapons and to open blocked or hidden doorways; boomerangs, which can kill or paralyze enemies; keys for locked doors; magic swords, shields, and bows and arrows), while others are unique to a single game. Though the games contain many role-playing elements (Zelda II: The Adventure of Link is the only one to include an experience system), they emphasize straightforward hack and slash-style combat over the strategic, turn-based or active time combat of games like Final Fantasy. The game's role-playing elements, however, have led to much debate over whether or not the Zelda games should be classified as action role-playing games, a genre on which the series has had a strong influence.
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

$sql = "select username,text from comments where Gameid = 21 ";

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
