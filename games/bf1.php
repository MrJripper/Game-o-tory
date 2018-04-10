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
$_SESSION['id']=3;
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
		<p align="center">Battlefield 1</p>
		<br><br>
		<img src="bf1.jpg" height="400px" width="700px">
		<br><br>
		<div class="desc" align="left">
		Battlefield 1 is a first-person shooter video game developed by EA DICE and published by Electronic Arts. It is the fifteenth installment in the Battlefield series, and the first main entry in the series since Battlefield 4. The game was released worldwide for Microsoft Windows, PlayStation 4, and Xbox One on October 21, 2016.

        Battlefield 1 received very positive reviews by critics and was seen as an improvement over previous installments Battlefield 4 and Battlefield Hardline, with most praise given to its World War I theme, multiplayer modes, visuals, sound design, and single-player campaign.
		<br><br>
		Similar to previous entries in the series, Battlefield 1 is a first-person shooter that emphasizes teamwork. The game is set in the period of World War I, and is inspired by historic events. Players can make use of World War I weapons, including bolt-action rifles, automatic and semi-automatic rifles, artillery, flamethrowers, and mustard gas to combat opponents. Melee combat was reworked, with DICE introducing new melee weapons such as sabres, trench clubs, and shovels into the game. These melee weapons were divided into two groups: heavy and light.Players can also take control of various armored vehicles, including light and heavy tanks, armored trucks, biplane aircraft, battleships and zeppelin, as well as ride horses into battle.Destructible environments and weapon customization, features present in the previous games, returned in Battlefield 1 and are more dynamic.
		<br><br>
		The game's world designer, Daniel Berlin, said the campaign mode has larger and more open environments than those in previous installments in the franchise, with more options and choices in terms of paths to completing levels and how to approach combat. Players can control several characters in the campaign. If the player dies in the prologue, they will then take control of another soldier and role instead of reloading from a checkpoint. These roles can range from tank gunner to flametrooper to rifleman. When the player dies, a name appears on the screen of a real soldier, along with their birth year. Unlike its predecessors, the game features a collection of war stories, similar to an anthology.
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

$sql = "select username,text from comments where Gameid = 3 ";

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
