<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<script type="text/javascript">
onload=function(){
var e=document.getElementById("refreshed");
if(e.value=="no")e.value="yes";
else{e.value="no";location.reload();}
}
</script>
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
		<link rel="stylesheet" type="text/css" media="all" href="jsDatePick_ltr.min.css" />
		<script type="text/javascript" src="jsDatePick.min.1.3.js">
		</script>
		<script>
		window.onload = function(){
		new JsDatePick({
			useMode:2,
			target:"inputField",
			dateFormat:"%d-%M-%Y"
			/*selectedDate:{				This is an example of what the full configuration offers.
				day:5,						For full documentation about these settings please see the full version of the code.
				month:9,
				year:2006
			},
			yearsRange:[1978,2020],
			limitToToday:false,
			cellColorScheme:"beige",
			dateFormat:"%m-%d-%Y",
			imgPath:"img/",
			weekStartDay:1*/
		});
	};
	</script>

    </head>



<body>
	<div align="right">
	<br><a href="destroy.php"><img src="images/lg.png" width="150" height="50"></a>
	</div>
	<div style="width: 280px; float:left;" >
	<img src ="images/back.png" width="500px" height="120px">
</div> 
      <div class="container" >
            <!-- Codrops top bar -->
            <div class="codrops-top">
                <div class="clr"></div>
            </div><!--/ Codrops top bar -->
            <header>
                <h1><span></span></h1>
            </header>
            <section>
			
                <div id="container_demo" style="float:center;">
                
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="go.php" method="POST" autocomplete="on"> 
							<h1>Details Of The Criminal</h1>

							
	<br><a href="destroy.php"><img src="images/1.jpg" width="150" height="150"></a>
	
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							
	<a href="destroy.php"><img src="images/VN.jpg" width="150" height="150"></a>
	<br><br>
						
                                <?php 
include("dbcon.php");


$fname=$_POST["fname"];

$result = mysql_query("SELECT * FROM crime WHERE name= '$fname'");
if(!$result)
{	
	
    echo '<script language="javascript">alert("Not found"),window.location = "search.php"</script>';
}
else
{
    $query="SELECT * FROM crime WHERE name='$fname'";
$result=mysql_query($query);
while($row=mysql_fetch_array($result)){
	$id=$row[0];
	$name=$row[1];
	$lname=$row[2];
	$gender=$row[3];
	$age=$row[4];
	$location=$row[5];
	$crime=$row[6];
	$crimed=$row[7];
	$crimel=$row[8];
	$jailor=$row[9];
	}
	echo "<table align='center'>";
	echo "<tr><td width='500'>";
	echo "<p class='margin'><font face='Algerian' size='5' COLOR='black'>ID:</font></p>";
	echo "</td>";
	echo "<td>";
	echo"<font face='Algerian' SIZE='+1.5' color='gray'>".$id;
	echo "</td></tr>";
	echo "<tr><td width='500'>";
	echo "<p class='margin'><font face='Algerian' size='5' COLOR='black'>name:</font></p>";
	echo "</td>";
	echo "<td>";
	echo"<font face='Algerian' SIZE='+1.5' color='gray'>".$name. " " .$lname;
	echo "</td></tr>";
	echo "<tr><td width='500'>";
	echo "<p class='margin'><font face='Algerian' size='5' COLOR='black'>Gender:</font></p>";
	echo "</td>";
	echo "<td>";
	echo"<font face='Algerian' SIZE='+1.5' color='gray'>".$gender;
	echo "</td></tr>";
	echo "<tr><td width='500'>";
	echo "<p class='margin'><font face='Algerian' size='5' COLOR='black'>Age:</font></p>";
	echo "</td>";
	echo "<td>";
	echo"<font face='Algerian' SIZE='+1.5' color='gray'>".$age;
	echo "</td></tr>";
	echo "<tr><td width='500'>";
	echo "<p class='margin'><font face='Algerian' size='5' COLOR='black'>Address:</font></p>";
	echo "</td>";
	echo "<td>";
	echo"<font face='Algerian' SIZE='+1.5' color='gray'>".$location. "<br>";
	echo "</td></tr>";
	echo "<tr><td width='500'>";
	echo "<p class='margin'><font face='Algerian' size='5' COLOR='black'>Crime:</font></p>";
	echo "</td>";
	echo "<td>";
	echo"<font face='Algerian' SIZE='+1.5' color='gray'>".$crime;
	echo "<tr><td width='500'>";
	echo "<p class='margin'><font face='Algerian' size='5' COLOR='black'>Duration of Crime:</font></p>";
	echo "</td>";
	echo "<td>";
	echo"<font face='Algerian' SIZE='+1.5' color='gray'>".$crimed;
	echo "</td></tr>";
	echo "<tr><td width='500'>";
	echo "<p class='margin'><font face='Algerian' size='5' COLOR='black'>Location of Jail</font></p>";
	echo "</td>";
	echo "<td>";
	echo"<font face='Algerian' SIZE='+1.5' color='gray'>".$crimel;
	echo "</td></tr>";
	echo "<tr><td width='500'>";
	echo "<p class='margin'><font face='Algerian' size='5' COLOR='black'>Jailor Incharge</font></p>";
	echo "</td>";
	echo "<td>";
	echo"<font face='Algerian' SIZE='+1.5' color='gray'>".$jailor;
	echo "</td></tr>";
	echo "</table>";
	}
?>
                       
                            
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>