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
$_SESSION['id']=17;
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
		<p align="center">Axiom Verge</p>
		<br><br>
		<img src="images/axiomverge.jpg" height="400px" width="700px">
		<br><br>
		<div class="desc" align="left">
		Axiom Verge is an indie Metroidvania video game created by Thomas Happ Games. The game was originally released in March 2015 for PlayStation 4, and May 2015 for Microsoft Windows, OS X, and Linux. A PlayStation Vita version was released in April 2016. The Wii U version was released on September 1, 2016. The Xbox One version was released on September 29, 2016.
		<br><br>
		Axiom Verge is a side-scroller action-adventure game where the player controls Trace, a scientist who, after suffering a crippling injury, wakes up in an ancient and high-tech world. The game focuses on action and exploration, and features over 60 items and power-ups. The gameplay borrows elements from classic games such as Metroid, Contra, Blaster Master, and Bionic Commando, among others.
		<br><br>
		Trace is a scientist on Earth who works in a laboratory when a frozen pressure valve causes an explosion that knocks him down. He awakens in the alien world of Sudra, where Elsenova, one of the Rusalki, giant war machines remaining from the Sudran civilization, asks for his help to stop Athetos, a mad scientist who destroyed the Sudrans long ago. As Trace explores Sudra in order to restore power to Elsenova and the other remaining Rusalki in preparation to confront Athetos, he discovers that he and Athetos are the same person.

        Trace then remembers that the explosion on Earth turned him crippled and blind, but allowed him to see things from a new perspective and formulate a new, revolutionary theory regarding the laws of physics. But Trace's findings were ridiculed by the scientific community, who shunned him, leading them to start calling him "Athetos". By using his new knowledge, Trace managed to travel between Earth and Sudra, where he used the advanced technology he found to heal his body. Elsenova also reveals that Trace, now calling himself Athetos, discovered that there is a world beyond Sudra with a far more advanced civilization that the Sudrans have kept hidden due to religious taboo, but unable to reach a compromise with them, he used a biological weapon to exterminate the entire civilization as part of his plan to bring this technology back to Earth. Trace also discovers that he is a clone from the original Athetos, back from the days when he first arrived on Sudra
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

$sql = "select username,text from comments where Gameid = 17 ";

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
