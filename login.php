<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
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
	
	if(isAlphabet(firstname, "Please enter valid first name")){
		if(isAlphabet(lastname, "Please enter valid last name")){
			if(notEmpty(user, "Please enter min 6 characters for username")){
				if(emailValidator(email, "Please enter a valid email address")){
					if(notEmpty(password,"Enter Valid password")){
						if(notValid(phone,"Enter Valid phone no.")){
						if(isAlphanumeric(security, "Please enter valid answer")){
							
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
	<div style="width: 280px; float:left;" >
	<img src ="images/back.jpg" width="1200px" height="120px">
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
			<div style=" float: left;width: 700px; height:50px ">
			
			<font face="Stencil Std" size="6" color="gray">CRIMINAL RECORDS SYSTEM</font>
			<br><br><br><br>
			<div align="center">
			<font size="6" face="Gabriola" color="black">
			Crime record management system project is useful for police departments form managing criminal records, pending cases, through online portal. This information is available for citizens and provide information about criminals for catching criminals. This system will improve performance of police departments to solve cases and tackle crimes efficiently in less time
			</font>
			</div>
			</div>

			
				
				
               <div id="container_demo" style="float:right;">
                    
                    
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form  action="logincheck.php" method="POST" autocomplete="on"> 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Authenticated Username</label>
                                    <input id="user1" name="user1" required="required" type="text" />
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p">Password </label>
                                    <input id="pass1" name="pass1" required="required" type="password" /> 
                                </p>
                  
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
								</p>
                               
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>