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

	<script>
	
function formValidator(){
	
	var firstname = document.getElementById('fname');
	var user = document.getElementById('user');
	var lastname = document.getElementById('lname');
	var gender = document.getElementById('sex');
	var email = document.getElementById('mail');
	var password = document.getElementById('pass');
	var cpassword = document.getElementById('rpass');
	var phone = document.getElementById('no');
	var security = document.getElementById('sq');
	var age= document.getElementById('age');
	
	if(isAlphabet(firstname, "Please enter valid entry")){
		if(isAlphabet(lastname, "Please enter valid entry")){
			if(notEmpty(user, "Please enter valid entry")){
				if(notEmpty(email, "Please enter valid entry")){
					if(notEmpty(password,"Please enter valid entry")){
						if(notEmpty(cpassword,"Please enter valid entry")){
						if(notEmpty(phonr, "Please enter valid entry")){
							
							 return true;
							}					
						}		
							
					}
					
				}
			}
		}
	}
	
	return false;
}
function notEmpty(elem,helperMsg){
	if(elem.value.length < 6){
		alert(helperMsg);
		elem.focus();
		return false;
	}
	return true;
}

function notValid(elem, helperMsg){
	if(elem.value.length != 10){
		alert(helperMsg);
		elem.focus();
		return false;
	}
	return true;
}




function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function lengthRestriction(elem, min, max){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter a username between " +min+ " and " +max+ " characters");
		elem.focus();
		return false;
	}
}

function passcheck(elem,helperMsg){
    var check = password;
	var user = elem;
	if(user == check){
	    return true;
	}else{
	     alert(helperMsg);
		 elem.focus();
		 return false;
	}
}	
	
	

function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

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
                                <h1>Enter Name of criminal to be searched</h1> 
                                <input id="fname" name="fname" required="required" type="text" placeholder=""/>
								
								<p class="signin button"> 
								<br>
									<input type="submit" value="Go"/> 
								</p>

                       
                            
                            </form>
                        </div>
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>