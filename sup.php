<!DOCTYPE html>
<html>
<body>
<?php


$servername = "localhost:3307";
$username = "root";
$password = "";

$conn = mysql_connect($servername, $username, $password);
session_start();

$Fname=$_POST['fname'];
$Lname=$_POST['lname'];
$number=$_POST['number'];
$mail=$_POST['mail'];
$password=$_POST['Password'];

if(!$conn)
{
die("failed".mysql_error() );
}

$sql=mysql_select_db('gameotory',$conn);


if(!$sql)
{
die("failed". mysql_error());
}

$sql = "INSERT INTO users (fname,lname,mob,email,password) values ('$Fname','$Lname','$number','$mail','$password');";
$_SESSION['Fname']=$Fname;
$c=mysql_query($sql,$conn);

if(!$c)
{
die("failed". mysql_error());
}
$_SESSION['Fname']=$Fname;
header('Location:index1.php');
mysql_close($conn);

?>
</body>
</html>
