<html>
<body>
<?php


$servername = "localhost:3307";
$username = "root";
$password = "";

$conn = mysql_connect($servername, $username, $password);
session_start();

$Fname=$_POST['Fname'];
$Password=$_POST['Password'];

if(!$conn)
{
die("failed".mysql_error() );
}

$sq=mysql_select_db('gameotory',$conn);


if(!$sq)
{
die("failed". mysql_error());
}

$sql = "select * from users where fname='$Fname' AND password='$Password'";
$_SESSION['Fname']=$Fname;
$c=mysql_query($sql,$conn);

if(!$c)
{
die("failed". mysql_error());
}

$count=mysql_num_rows($c);

if($count>0)
{
	$_SESSION['Fname']=$Fname;
	header('Location:index1.php');
}
else
{
header('Location:signin1.html');	
}

mysql_close($conn);

?>
</body>
</html>
