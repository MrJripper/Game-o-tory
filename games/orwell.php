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
$_SESSION['id']=14;
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
		<p align="center">Orwell</p>
		<br><br>
		<img src="images/orwell.jpg" height="400px" width="700px">
		<br><br>
		<div class="desc" align="left">
		Orwell is a simulation video game in which the player assumes the role of a state operative and monitors surveillance sources to find national security threats. The game was released by indie developer Osmotic as a weekly, five-part serial for Windows beginning on October 20, 2016.[1]
		<br><br>
		Orwell takes place in a country called The Nation, led by a modern-day authoritarian government known as The Party in the capital of Bonton. In 2012, the Party passed the Safety Bill, a law expanding the government's ability to spy on its citizens in the name of national security. As part of the bill, the Ministry of Security (led by Minister Catherine Delacroix) commissioned a covert surveillance system known as Orwell, formerly known as Demiurge.

        Orwell allows investigations into the private communications of people of interest, but doesn't allow any one person full access. Instead, Orwell's operation is run by two groups; Investigators, persons outside of the Nation working for the government who search through the communication of target persons and upload items of interest (represented as "datachunks"), and Advisors, people inside of the Nation who use the received datachunks to determine the course of action and to recommend actions to the authorities.

        The player takes the role of an Orwell investigator in an unnamed country, who has just been selected to use the system.
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

$sql = "select username,text from comments where Gameid = 14 ";

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
