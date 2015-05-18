<?php
include("dbcon.php");
mysql_select_db("crs");
$user=$_POST["user1"];
$pass=$_POST["pass1"];


if($user=="Admin" && $pass=="admin")
{
	session_start();
	$_SESSION['user']="admin";
	header('location:main.php');
}
	else
	{
	echo '<script language="javascript">alert("Wrong Username or Password"),window.location = "login.php"</script>';
	}

?>