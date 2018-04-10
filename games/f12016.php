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
$_SESSION['id']=15;
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
		<p align="center">F1 2016</p>
		<br><br>
		<img src="images/f12016.jpg" height="400px" width="700px">
		<br><br>
		<div class="desc" align="left">
		F1 2016 is a racing game which is based on the 2016 Formula One season and was developed by Codemasters Birmingham, published by Codemasters, distributed by Square Enix in North America and Ubisoft in Japan. The game is the eighth instalment in the F1 franchise developed by Codemasters. The game was released on 19 August 2016 on PlayStation 4, Xbox One and PC. The game was also released for iOS, Android and tvOS on November 10, 2016.
		<br><br>
		Codemasters announced that the players will now be able to play a revised career mode consisting of ten full seasons rather than five seasons in previous games. The game will also include the twenty-one circuits from the 2016 season, in-game commentary from David Croft and Anthony Davidson, and all eleven teams and twenty-two drivers competing in the championship, including the return of Renault, and the brand-new Haas team. Players will also be able to choose the time of day that a race takes place, customise helmet designs and choose a race number for career mode. The safety car will return and the mechanics related to it have been revised. The game is to also see the introduction of the Virtual Safety Car, manual starts, manual pit lane entry and the introduction of the formation lap. The research and development aspect of the game will also be revised to allow players a greater degree of control over the performance of the car. Online lobbies will be expanded to allow for twenty-two car grids.
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

$sql = "select username,text from comments where Gameid = 15 ";

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
