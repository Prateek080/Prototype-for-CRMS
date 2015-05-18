<?php 
include("dbcon.php");

$fname=$_POST["fname"];
$lname=$_POST["lname"];
$user=$_POST["user"];
$email=$_POST["mail"];
$gender=$_POST["sex"];
$age=$_POST["age"];
$pass=$_POST["pass"]; 
$cpass=$_POST["rpass"];
$phone=$_POST["no"];







$sql="INSERT INTO crime( `name`, `Last name`, `gender` ,`age`, `location`, `crime`,`crimed`,`crimel`,`jailor`) VALUES ('$fname', '$lname', '$gender', '$age', '$user', '$email', '$pass', '$cpass','$phone');";
$qury=mysql_query($sql) or die(mysql_error());


if(!$qury)
{	
	
    echo '<script language="javascript">alert("Not Inserted Successfully"),window.location = "enter.php"</script>';
}
else
{
    
	echo '<script language="javascript">alert("Successfully inserted"),window.location = "main.php"</script>';
}

?>
