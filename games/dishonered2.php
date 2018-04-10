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
$_SESSION['id']=11;
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
		<p align="center">Dishonored 2</p>
		<br><br>
		<img src="dishonered2.jpg" height="400px" width="700px">
		<br><br>
		<div class="desc" align="left">
		Dishonored 2 is an action-adventure stealth video game developed by Arkane Studios and published by Bethesda Softworks. The sequel to 2012's Dishonored, the game was released for Microsoft Windows, PlayStation 4, and Xbox One on November 11, 2016.

        The series takes place in the fictional Empire of the Isles with the majority of Dishonored 2 set in the coastal city of Karnaca and is set fifteen years after the events of the first game. After Empress Emily Kaldwin is deposed by an "otherworldly usurper", the player may choose between playing as either Emily or her bodyguard and father Corvo Attano as they attempt to reclaim the throne. Both Emily and Corvo employ their own array of supernatural abilities. They can alternatively decide to forfeit them altogether. There are a multitude of ways to succeed in each given mission, from stealth to purposeful violent conflict.
		<br><br>
		Ideas for a sequel to Dishonored began while developing its downloadable content, which spawned the decision to create a voice for Corvo Attano after being a silent character in the first installment. Emily Kaldwin was first proposed as a playable character and brought about the advancement of the timeline. The design was influenced by paintings and sculptures. Set in the new fictional city of Karnaca, its history was invented over the course of one year. The city itself was based on southern European countries like Greece, Italy, and Spain, drawing on the architecture, fashion, and technologies of 1851.
		<br><br>
		Dishonored 2 was released to a positive reception. Praised were the improvements made since the first game: the more challenging stealth, the adaptability of Emily and Corvo's abilities to both play styles, the art direction, the realization of the game's world as well as the replay-value and the artificial intelligence. Criticism was directed at the lack of focus of the overarching narrative while the individual missions were praised for their creative designs. Aside from this, technical blunders as well as issues with the PC-port were received unfavorably. Dishonored 2 won the award for Best Action/Adventure Game at The Game Awards 2016.
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

$sql = "select username,text from comments where Gameid = 11 ";

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
