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
$_SESSION['id']=12;
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
		<p align="center">Overwatch</p>
		<br><br>
		<img src="images/overwatch.jpg" height="400px" width="700px">
		<br><br>
		<div class="desc" align="left">
		Overwatch is a team-based multiplayer first-person shooter video game developed and published by Blizzard Entertainment. It was released in May 2016 for Microsoft Windows, PlayStation 4, and Xbox One.

        Overwatch puts players into two teams of six, with each player selecting one of several pre-defined hero characters with unique movement, attributes, and abilities; these heroes are divided into four classes: Offense, Defense, Tank and Support. Players on a team work together to secure and defend control points on a map and/or escort a payload across the map in a limited amount of time. Players gain cosmetic rewards that do not affect gameplay, such as character skins and victory poses, as they continue to play in matches. The game was launched with casual play, while Blizzard added competitive ranked play about a month after launch. Additionally, Blizzard has developed and added new characters, maps, and game modes post-release, while stating that all Overwatch updates will remain free, with the only additional cost to players being microtransactions to earn additional cosmetic rewards.
		<br><br>
		Overwatch is Blizzard's fourth major franchise, and came about following the 2014 cancellation of the ambitious massively multiplayer online role-playing game Titan. A portion of the Titan team came up with the concept of Overwatch, based on the success of team-based first-person shooters like Team Fortress 2 and the growing popularity of multiplayer online battle arenas, creating a hero-based shooter that emphasized teamwork. Some elements of Overwatch borrow assets and concepts from the canceled Titan project. After establishing the narrative of an optimistic near-future Earth setting after a global crisis, the developers aimed to create a diverse cast of heroes that spanned genders and ethnicities as part of this setting. Significant time was spent adjusting the balance of the characters, making sure that new players would still be able to have fun while skilled players would present each other with a challenge.
		<br><br>
		Overwatch was unveiled at BlizzCon 2014 in a fully playable state, and was in a closed beta from late 2015 through early 2016. An open beta in May 2016 drew in more than 9.7 million players. The release of the game was promoted with short animated videos to introduce the game's narrative and each of the characters. Upon official release, Overwatch received universal acclaim from critics, who praised its accessibility and enjoyable gameplay. Overwatch has become recognized as an eSport, and in addition to sponsoring tournaments, Blizzard has announced plans to help support professional league play starting in 2017.
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

$sql = "select username,text from comments where Gameid = 12 ";

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
