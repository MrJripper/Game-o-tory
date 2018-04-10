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
$_SESSION['id']=4;
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
		<p align="center">CALL OF DUTY</p>
		<br><br>
		<img src="codinfinite.jpg" height="400px" width="700px">
		<br><br>
		<div class="desc" align="left">
		Call of Duty: Infinite Warfare is a first-person shooter video game developed by Infinity Ward and published by Activision. It is the thirteenth primary installment in the Call of Duty series and was released for Microsoft Windows, PlayStation 4, and Xbox One on November 4, 2016.

        Development of Infinite Warfare began during 2014. It is the first title by Infinity Ward under the new three-year development cycle for the Call of Duty series. The game's campaign is centered around a battle for the Solar System, which the Settlement Defense Front (SDF), a hostile force who are the main antagonists, are attempting to take over. The player takes control of Captain Nick Reyes of the Special Combat Air Recon (SCAR). They have their own transforming fighter, named "Jackal", that they can customize as well as a central hub world named Retribution.
		<br><br>
		Special editions of Infinite Warfare were released with a remastered version of Call of Duty 4: Modern Warfare, entitled Modern Warfare Remastered. Infinite Warfare's announcement trailer was met with a mixed reception from game critics and journalists and a negative reception from the Call of Duty community, resulting in the announcement trailer becoming the second-most disliked video on YouTube at the time. Nevertheless, the game received generally positive reviews upon release; the single-player campaign and Zombie mode were praised, while the multiplayer mode was criticized for its lack of innovation.
		<br><br>
		Similar to the previous games in the series, Infinite Warfare is a first-person shooter. As the game introduces a new setting, outer space, new gameplay mechanics, such as zero-gravity environments, are included.Players are equipped with a boost pack, and a grappling hook, which allow players to move in these zero-gravity environments easily. As the game is set in space, players can visit different planets, satellites and asteroids in the solar system.
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

$sql = "select username,text from comments where Gameid = 4 ";

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
