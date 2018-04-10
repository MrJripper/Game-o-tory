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
$_SESSION['id']=6;
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
		<p align="center">Cod Black Ops 3</p>
		<br><br>
		<img src="codbo3.jpg" height="400px" width="700px">
		<br><br>
		<div class="desc" align="left">
		Call of Duty: Black Ops II is a science fiction first-person shooter video game, developed by Treyarch and published by Activision (Square Enix for Japan). It was released on November 13, 2012 for Microsoft Windows, PlayStation 3, and Xbox 360 and on November 18, 2012 in North America, November 30, 2012 in Europe and Australia for the Wii U. Black Ops II is the ninth game in the Call of Duty franchise of video games, a sequel to the 2010 game Call of Duty: Black Ops and the first Call of Duty game for the Wii U. The game was launched at 16,000 stores worldwide at midnight on November 13, 2012.
		<br><br>
		Black Ops II is the first game in the Call of Duty franchise to feature future warfare technology and the first to present branching storylines driven by player choice as well as selecting weapons before starting story mode missions. It also offers a 3D display option. A corresponding game, Call of Duty: Black Ops: Declassified, was released simultaneously on the PlayStation Vita. Within 24 hours of going on sale, the game grossed over $500 million. It had remained the largest entertainment launch of all time until September 2013, when Take-Two announced that Grand Theft Auto V had grossed $800 million in its first day of release. It went on to sell 7.5 million copies in the U.S. in November 2012, making it the highest grossing game of the month.
		<br><br>
		The single-player campaign features two connected storylines, with the first set from 1986 to 1989 during the final years of the First Cold War, and the other set in 2025 during a Second Cold War. The protagonist of Black Ops, Alex Mason returns as the protagonist in the first Cold War section, and chronicles the rise to infamy of the game's primary antagonist, Raul Menendez.

        The 2025 section of the game features Alex Mason's son David (codenamed Section) as the protagonist, in which Menendez is plotting against the United States and China with one of his ultimate goals being to see the United States locked in a new Cold War with China, in revenge for many of his misfortunes.[16] In this era, wars are defined by robotics, cyberwarfare, unmanned vehicles, and other futuristic technology.
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

$sql = "select username,text from comments where Gameid = 6 ";

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
