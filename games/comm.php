<!DOCTYPE html>
<html>
<body>
<?php


$servername = "localhost:3307";
$username = "root";
$password = "";

$conn = mysql_connect($servername, $username, $password);
session_start();
$id=$_SESSION['id'];


$comm=$_POST['comm'];
$user=$_POST['user'];

if(!$conn)
{
die("failed".mysql_error() );
}

$sql=mysql_select_db('gameotory',$conn);


if(!$sql)
{
die("failed". mysql_error());
}

$sql = "INSERT INTO comments values ($id,'$user','$comm');";

$c=mysql_query($sql,$conn);

if(!$c)
{
die("failed". mysql_error());
}

mysql_close($conn);

?>
</body>
</html>
