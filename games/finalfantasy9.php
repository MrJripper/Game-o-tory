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
$_SESSION['id']=16;
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
		<p align="center">Final Fantasy IX</p>
		<br><br>
		<img src="finalfantasy9.jpg" height="400px" width="700px">
		<br><br>
		<div class="desc" align="left">
		Final Fantasy IX (ファイナルファンタジーIX Fainaru Fantajī Nain?) is a role-playing video game developed and published by Square for the PlayStation video game console. Originally released in 2000, it is the ninth title in the Final Fantasy series and last to debut on the original PlayStation console. In 2010, it was re-released as a PSone Classics title on the PlayStation Network. The game introduced new features to the series like the "Active Time Event", "Mognet", and a unique equipment and skill system.

        Final Fantasy IX's plot centers on a war between nations. Players follow a young thief named Zidane Tribal, who joins with others to defeat Queen Brahne of Alexandria, the one responsible for starting the war. The plot shifts, however, when the characters realise that Brahne is working with an even more threatening person called Kuja.
		<br><br>
		Final Fantasy IX was developed alongside Final Fantasy VIII, but took a different approach by returning to the more traditional style of the early Final Fantasy games. Consequently, Final Fantasy IX was influenced significantly by the original Final Fantasy game, and features allusions to other titles in the series. It was released to critical acclaim and holds the highest Metacritic score of all Final Fantasy installments.Final Fantasy IX was commercially successful, selling 5.30 million units worldwide by March 31, 2003.

        Ports for iOS and Android were released in February 2016, while a port for Microsoft Windows was released in April 2016.
		<br><br>
		In Final Fantasy IX, the player navigates a character throughout the game world, exploring areas and interacting with non-player characters. Most of the game occurs in towns and dungeons which are referred to as "field screens".To aid exploration on the field screen, Final Fantasy IX introduces the "field icon", an exclamation mark appearing over their lead character's head, signalling an item or sign is nearby.Players speak with moogles to record their progress, restore life energy with a tent and purchase items—a deviation from previous installments, which used a save point to perform these functions. Moogles may request the playable character deliver letters to other Moogles via Mognet, playable characters might also receive letters from non-playable characters.
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

$sql = "select username,text from comments where Gameid = 16 ";

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
