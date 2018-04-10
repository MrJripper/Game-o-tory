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
$_SESSION['id']=9;
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
		<p align="center">Dark Souls III</p>
		<br><br>
		<img src="images/darksouls.jpg" height="400px" width="700px">
		<br><br>
		<div class="desc" align="left">
		Dark Souls III[a] is an action role-playing video game developed by FromSoftware and published by Bandai Namco Entertainment for PlayStation 4, Xbox One, and Microsoft Windows. The fourth entry in the Souls series, Dark Souls III was released in Japan in March 2016, and worldwide in April 2016.

        Dark Souls III was critically and commercially successful, with critics calling the game a worthy and fitting conclusion to the series. The game became Bandai Namco's fastest selling game in their history, selling over three million copies worldwide two months after release.
		<br><br>
		Dark Souls III is an action role-playing game played in a third-person perspective, similar to previous games in the series. According to lead director and series creator Hidetaka Miyazaki, the game's gameplay design followed "closely from Dark Souls II". Players are equipped with a variety of weapons to fight against enemies, such as bows, throwable projectiles, and swords. Shields can act as secondary weapons but they are mainly used to deflect enemies' attacks and protect the player from suffering damage. Each weapon has two basic types of attacks, one being a standard attack, and the other being slightly more powerful that can be charged up, similar to FromSoftware's previous game, Bloodborne. In addition, attacks can be evaded through dodge-rolling. Bonfires, which serve as checkpoints, return from previous installments. Ashes, according to Miyazaki, play an important role in the game. Magic is featured in the game, with a returning magic system from Demon's Souls, now known as "focus points" (FP). When performing spells, the players' focus points are consumed. There are two separate types of Estus Flasks in the game, which can be allotted to fit a players' particular play style. One of them refills hit points like previous games in the series, while another, newly introduced in Dark Souls III, refills focus points. Combat and movements were made faster and more fluid in Dark Souls III, with several players' movements, such as backstepping and swinging heavy weapons, able to be performed more rapidly, allowing players to deal more damage in a short period of time.
		<br><br>
		Throughout the game, players encounter different types of enemies, each with different behaviors. Some of them change their combat pattern during battles.New combat features are introduced in Dark Souls III, including weapon and shield "Skills", which are special abilities that vary from weapon to weapon that enable unique attacks and features, at the cost of focus points.The game places more focus on role-playing, in which the character builder is expanded and weapons are improved to provide more tactical options to players.The game features fewer overall maps than its predecessor Dark Souls II, but they are larger and more detailed, which encourages exploration.The adaptability stat from Dark Souls II was removed in Dark Souls III, with other stats being adjusted.The game features multiplayer elements, like the previous games in the series.
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

$sql = "select username,text from comments where Gameid = 9 ";

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
