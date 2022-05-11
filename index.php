<?php
include('login.php'); // Includes Login Script
?>
<!DOCTYPE html>
<html>
<head>
<title>Sistema Secretaria</title>
<!--<link href="css/style.css" rel="stylesheet" type="text/css">-->
<!--<link href="css/block.css" rel="stylesheet" type="text/css">-->

<!--<link rel="stylesheet" type="text/css" href="jquery-easyui-1.4/themes/default/easyui.css">
<link rel="stylesheet" type="text/css" href="jquery-easyui-1.4/themes/icon.css">
<link rel="stylesheet" type="text/css" href="jquery-easyui-1.4/demos/demo.css">-->

<link href="css/styleLogin.css" rel="stylesheet" type="text/css">
	
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="js/jquery.blockUI.js"></script>
<script type="text/javascript" src="js/jquery.blockUI.min.js"></script>
<script type="text/javascript" src="js/chili-1.7.pack.js"></script>
<script type="text/javascript" src="js/show_ads.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>

<script type="text/javascript" src="jquery-easyui-1.4/jquery.easyui.min.js"></script>

<script>
$(document).ready(function() {
	$(".username").focus(function() {
		$(".user-icon").css("left","-48px");
	});
	$(".username").blur(function() {
		$(".user-icon").css("left","0px");
	});
	
	$(".password").focus(function() {
		$(".pass-icon").css("left","-48px");
	});
	$(".password").blur(function() {
		$(".pass-icon").css("left","0px");
	});
});


$(document).ready(function()
{
        $("#info").hide();
});

 $(function($) {  
	 $('#button').click(function() 
		 {
			$("#info").hide();	
			if($("#signupForm").valid())
			{
				$.blockUI({
							message: '<h1> <img src="process1321.gif" width="20" height="20"> Verificando identidad</h1>',
							css: {  
									padding: 0,
									margin: 0,
									width: '70%',
									top: '40%',
									left: '15%',
									textAlign: 'center',
									color: '#fff',
									border: '0px solid #aaa',
									backgroundColor: 'transparent',
									cursor: 'wait'
								}
						  });
			}
		 });
		 
	  $("#signupForm").validate({
			  rules: {
					  username: {
								 required: true,
								 minlength: 2
					  },
					  password: {
								 required: true,
								 minlength: 5
					  },
					  messages: {
									 username: 
									 {
										 required: "Por favor escriba un nombre de usuario",
										 minlength: "Su nombre de usuario debe contener al menos 2 caracteres"
									 },
									 password: 
									 {
										 required: "Por favor escriba su clave de acceso",
										 minlength: "Su clave de acceso debe contener al menos 5 caracteres"
									 }
								 },
								 errorElement: "span",
								 errorPlacement: function(error, element) {
									 element.siblings("label").append(error);
								 },
								 highlight: function(element) {
											 $(element).closest('.control-group').removeClass('success').addClass('error');
										 },
										 success: function(element) {
											 element
											 .text('OK!').addClass('valid')
											 .closest('.control-group').removeClass('error').addClass('success');
										 }
											  }
		  });	 
 });
</script>

</head>
<body>
<!--WRAPPER-->
<div id="wrapper">

	<!--SLIDE-IN ICONS-->
    <div class="user-icon"></div>
    <div class="pass-icon"></div>
    <!--END SLIDE-IN ICONS-->

<!--LOGIN FORM-->
<form name="login-form" class="login-form" action="" method="post">

	<!--HEADER-->
    <div class="header">
    <!--TITLE--><h1>Sistema Secretaria</h1><!--END TITLE-->
    <!--DESCRIPTION--><span>Instituto Politecnico de Informatica</span></br><!--END DESCRIPTION-->
	<span>Fernando Aguado Y Rico</span>
    </div>
    <!--END HEADER-->
	
	<!--CONTENT-->
    <div class="content">
	<!--USERNAME--><input name="username" type="text" class="input username" value="Username" width="25px" onfocus="this.value=''" required/><!--END USERNAME-->
    <!--PASSWORD--><input name="password" type="password" class="input password" value="Password" onfocus="this.value=''" required/><!--END PASSWORD-->
    </div>
    <!--END CONTENT-->
    
    <!--FOOTER-->
    <div class="footer">
    <!--LOGIN BUTTON--><input type="submit" name="submit" value="Entrar al sistema" class="button" /><!--END LOGIN BUTTON-->
	</br></br></br><div id="info" >
		<b><img src="images/dialog-warning.png"/> Usuario o clave incorrecta</b>
	</div>
    </div>
    <!--END FOOTER-->

</form>
<!--END LOGIN FORM-->

</div>
<!--END WRAPPER-->


<!--<div id="main">
<div id="login">
<h2>SISTEMA SECRETARIA</h2>
<h2>Acceso de usuarios registrados</h2>
<form id="signupForm" action="" method="post">

<div>
	<div style="">
		<label>Usuario :</label>
	</div>
	<div>
		<input id="username" name="username" type="text">
	</div>
	<div style="margin-top:20px" >
		<label>Clave de acceso :</label>
	</div>
	<div style="">
		<input id="password" name="password" type="password">
	</div>
	<input id="button" name="submit" type="submit" value=" Entrar al sistema ">
</div>-->

<?php if ($error == 1) 
	{
?>
	<script type="text/javascript">
	$(document).ready(function()
	{
		$("#info").show();
	});
	</script>
<?php
	}
?>
<!--</form>-->
</div>
</div>
</body>
</html>
