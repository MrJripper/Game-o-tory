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
$_SESSION['id']=20;
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
		<p align="center">The Paper Mario</p>
		<br><br>
		<img src="images/papermario.jpg" height="400px" width="700px">
		<br><br>
		<div class="desc" align="left">
		The Paper Mario series is an RPG action-adventure series of the Mario franchise developed by Intelligent Systems. Five games have been released - four for home consoles and one for the Nintendo 3DS. The series has gone through three iterations so far: Paper Mario and Paper Mario: The Thousand-Year Door are RPGs, Super Paper Mario is a RPG-platformer hybrid, and Paper Mario: Sticker Star and Paper Mario: Color Splash are action-adventure, RPG-styled games.
		<br><br>
		Having its roots in the action-RPG genre that Super Mario RPG: Legend of the Seven Stars followed, Mario is the primary character to be controlled in the Paper Mario series and finds himself in 3D settings in which items can be found, foes can be fought, and non-playable characters can be discussed with. However, unlike Super Mario RPG: Legend of the Seven Stars's isometric view, areas in the Paper Mario series are reminiscent of levels in the main Mario series such as Super Mario World by generally being made of simple horizontal paths, with Mario having to go from the left to the right and finding enemies and secrets along the way, while going through platforming trials, collecting coins and striking Blocks. To discover secrets, Mario can use many abilities he gains over the course of the game, such as a Hammer to strike Blocks, a Koopa Troopa shell to reach distant objects or the ability to remove and replace elements of the environment. Traps can also be found in the field however, and will decrease Mario's HP if he gets harmed, although his HP cannot drop below 1, except in Paper Mario: The Thousand Year Door and Super Paper Mario. Save Blocks and Heart Blocks can be found, saving the player's game and healing Mario's HP and FP respectively.
		<br><br>
		Towns can also be visited, and act as areas in which Mario can rest, craft new items, talk to residents and shop for items. Side quests can also be found in towns, generally consisting in helping out dwellers in exchange for rewards. Each game has a main town as well that acts as a bigger area where the player may need to return to frequently for purposes revolving around the story, such as unlocking the next area that needs to be visited. These towns gradually change as the story advances, and in the case of the first three games of the story, also possess underground areas and optional battles. These towns are Toad Town for Paper Mario, Rogueport for Paper Mario: The Thousand-Year Door, Flipside for Super Paper Mario, Decalburg for Paper Mario: Sticker Star and Port Prisma for Paper Mario: Color Splash.
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

$sql = "select username,text from comments where Gameid = 20 ";

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
