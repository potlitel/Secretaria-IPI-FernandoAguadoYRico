<!--<div id="nav">	 
	<a href="#">Inicio</a>
	<a href="#">Opciones Generales</a>
	<a href="#">Acerca de nosotros</a>
	<a href="#">Contactenos</a>
	<a href="logout.php">Salir del sistema</a>
</div> 
 end #nav -->
 
<!--<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui.min.js"></script>
<script type="text/javascript" src="../js/jquery-1.9.1.js"></script>-->

<!--<script type="text/javascript" src="../jquery-easyui-1.4/jquery-1.9.1.js"></script>
<script type="text/javascript" src="../jquery-easyui-1.4/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.blockUI.js"></script>
<script type="text/javascript" src="../js/jquery.blockUI.min.js"></script>-->

<!-- Cambio para insertar el buscador, se introduce jquery-1.8.0.min.js -->
<!--<script type="text/javascript" src="../jquery-easyui-1.4/jquery-1.9.1.js"></script>
<script type="text/javascript" src="../jquery-easyui-1.4/jquery.min.js"></script>-->
<script type="text/javascript" src="../js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="../jquery-easyui-1.4/jquery.easyui.min.js"></script>
<script type="text/javascript" src="../jquery-easyui-1.4/jquery.edatagrid.js"></script>
<script type="text/javascript" src="../jquery-easyui-1.4/locale/easyui-lang-es.js"></script>
<script type="text/javascript" src="../js/jquery.blockUI.js"></script>
<script type="text/javascript" src="../js/jquery.blockUI.min.js"></script>

<script type="text/javascript" src="../Momentjs/moment.js"></script>
<script type="text/javascript" src="../Momentjs/locales.js"></script>

<style type="text/css">
	#searchid
	{
		width:400px;
		border:solid 1px #000;
		padding:6px 15px 6px 35px;
		font-size:16px;
		background: url('../images/search_16.png') no-repeat 8px 6px ; 
	}
	#result
	{
		position:absolute;
		width:400px;
		padding:10px;
		display:none;
		margin-top:5px;
		margin-left: 535px;
		border-top:0px;
		overflow:hidden;
		border:1px #CCC solid;
		background-color: white;
	}
	.show
	{
		padding:10px; 
		border-bottom:1px #999 dashed;
		font-size:15px; 
		height:50px;
	}
	.show:hover
	{
		background:#4c66a4;
		color:#FFF;
		cursor:pointer;
	}
</style>

<script type="text/javascript">
$(function(){
$(".search").keyup(function() 
{ 
var searchid = $(this).val();
var dataString = 'search='+ searchid;
if(searchid!='')
{
	$.ajax({
	type: "POST",
	url: "../php/search.php",
	data: dataString,
	cache: false,
	success: function(html)
	{
	$("#result").html(html).show();
	}
	});
}return false;    
});

jQuery("#result").live("click",function(e){ 
	var $clicked = $(e.target);
	var $name = $clicked.find('.name').html();
	var decoded = $("<div/>").html($name).text();
	$('#searchid').val(decoded);
});
jQuery(document).live("click", function(e) { 
	var $clicked = $(e.target);
	if (! $clicked.hasClass("search")){
	jQuery("#result").fadeOut(); 
	}
});
$('#searchid').click(function(){
	jQuery("#result").fadeIn();
});
});
</script>

<script>
 $(function($) { 
	
	function loading()
	{ 
	var msg = '<h4> <img src="process1321.gif" width="20" height="20"> Espere unos segundos por favor... </h4>';
	//'<h4><img src="../images/process1321.gif" /> Espere unos segundos por favor...</h4>'
	
	$.blockUI({
							message: msg,
							css: {  
									padding: 0,
									margin: 0,
									width: '70%',
									top: '50%',
									left: '15%',
									textAlign: 'center',
									color: '#fff',
									border: '0px solid #aaa',
									backgroundColor: 'transparent',
									cursor: 'wait'
								}
						  });
	}
	
	$("#inicio").click(function() { 
        loading();
		setTimeout($.unblockUI, 20000); 
    });
	$("#bibliotecologia").click(function() { 
        loading();
    });
	$("#informatica").click(function() { 
        loading();
    });
	$("#sedeuniversitaria").click(function() { 
        loading();
    });
	$("#gestiondocumental").click(function() { 
        loading();
    });
	$("#nuevoestudiante").click(function() { 
        loading();
    });
	$("#estudianteBibliotecologia1C").click(function() { 
        loading();
    });
	$("#estudianteBibliotecologia2C").click(function() { 
        loading();
    });
	$("#estudianteBibliotecologia3C").click(function() { 
        loading();
    });
	$("#estudianteBibliotecologia4C").click(function() { 
        loading();
    });
	$("#estudianteInformatica1C").click(function() { 
        loading();
    });
	$("#estudianteInformatica2C").click(function() { 
        loading();
    });
	$("#estudianteInformatica3C").click(function() { 
        loading();
    });
	$("#estudianteInformatica4C").click(function() { 
        loading();
    });
	
	$("#estudianteSU1C").click(function() { 
        loading();
    });
	$("#estudianteSU2C").click(function() { 
        loading();
    });
	$("#estudianteSU3C").click(function() { 
        loading();
    });
	$("#estudianteSU4C").click(function() { 
        loading();
    });
	$("#estudianteSU5C").click(function() { 
        loading();
    });
	
	$("#estudianteGD1C").click(function() { 
        loading();
    });
	$("#estudianteGD2C").click(function() { 
        loading();
    });
	$("#estudianteGD3C").click(function() { 
        loading();
    });
	$("#estudianteGD4C").click(function() { 
        loading();
    });
	
	$("#acerca").click(function() { 
        loading();
    });
	$("#contactar").click(function() { 
        loading();
    });
	$("#salir").click(function() { 
        loading();
    });
	$("#changepassword").click(function() { 
        loading();
    });
	$("#listoperators").click(function() { 
        loading();
    });
	$("#editoperator").click(function() { 
        loading();
    });
	$("#newoperator").click(function() { 
        loading();
    });
	$("#deleteoperator").click(function() { 
        loading();
    });
	
	$("#historial").click(function() { 
        loading();
    });
	$("#todos").click(function() { 
        loading();
    });
	$("#B").click(function() { 
        loading();
    });
	$("#B1").click(function() { 
        loading();
    });
	$("#B2").click(function() { 
        loading();
    });
	$("#B3").click(function() { 
        loading();
    });
	$("#B4").click(function() { 
        loading();
    });
	$("#I").click(function() { 
        loading();
    });
	$("#I1").click(function() { 
        loading();
    });
	$("#I2").click(function() { 
        loading();
    });
	$("#I3").click(function() { 
        loading();
    });
	$("#I4").click(function() { 
        loading();
    });
	$("#SU").click(function() { 
        loading();
    });
	$("#SU1").click(function() { 
        loading();
    });
	$("#SU2").click(function() { 
        loading();
    });
	$("#SU3").click(function() { 
        loading();
    });
	$("#SU4").click(function() { 
        loading();
    });
	$("#SU5").click(function() { 
        loading();
    });
	$("#GD").click(function() { 
        loading();
    });
	$("#GD1").click(function() { 
        loading();
    });
	$("#GD2").click(function() { 
        loading();
    });
	$("#GD3").click(function() { 
        loading();
    });
	$("#GD4").click(function() { 
        loading();
    });
});
 </script>
 <!-- Start css3menu.com BODY section -->
<?php sleep(3); ?>
<ul id="css3menu1" class="topmenu">
<input type="checkbox" id="css3menu-switcher" class="switchbox"><label onclick="" class="switch" for="css3menu-switcher"></label>	<li class="topfirst" id="inicio"><a href="Home.php" style="height:19px;line-height:19px;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAt0lEQVQ4jeWRsQ2DMBREPQBFKsQAFBQZgIIhKBiAASgzQxqGoGAQhvAIKTIAEg3FS3NWLIcYOW1O+pJ1vmf/bxsTEVABVSwTgztgVXUpYA7cgY23Nnn5GVwAi6AduKl2eQtQfINr4KHgE2iAq6qRhzJ1CA/hLUDvvUF/0N3g4NmbdQQuwMSnJu2NnjcbLVagVbv2AHayyrRiMDJLr+UzuZFKwBog0yhJEpP5D5l8QPgT0cA/HPCrXrEXTWHRBIWcAAAAAElFTkSuQmCC" alt=""/>Inicio</a></li>
	<li class="topmenu"><a href="#" style="height:19px;line-height:19px;"><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAMklEQVQ4jWP4TwAwEAJUMQDdMGxytDWA5mGAV54uYUDQBRR7gWIDKPYC3cIAW/QPAwMAO8CFl5F8bogAAAAASUVORK5CYII=" alt=""/>Unidades Docentes</span></a>
	<ul>
		<li class="subfirst" id="bibliotecologia"><a href="Bibliotecologia.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAMklEQVQ4jWP4TwAwEAJUMQDdMGxytDWA5mGAV54uYUDQBRR7gWIDKPYC3cIAW/QPAwMAO8CFl5F8bogAAAAASUVORK5CYII=" alt=""/>Bibliotecologia</a></li>
		<li id="informatica"><a href="Informatica.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAMklEQVQ4jWP4TwAwEAJUMQDdMGxytDWA5mGAV54uYUDQBRR7gWIDKPYC3cIAW/QPAwMAO8CFl5F8bogAAAAASUVORK5CYII=" alt=""/>Informatica</a></li>
		<li id="sedeuniversitaria"><a href="SedeUniversitaria.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAMklEQVQ4jWP4TwAwEAJUMQDdMGxytDWA5mGAV54uYUDQBRR7gWIDKPYC3cIAW/QPAwMAO8CFl5F8bogAAAAASUVORK5CYII=" alt=""/>Sede Universitaria</a></li>
		<li id="gestiondocumental"><a href="GestionDocumental.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAMklEQVQ4jWP4TwAwEAJUMQDdMGxytDWA5mGAV54uYUDQBRR7gWIDKPYC3cIAW/QPAwMAO8CFl5F8bogAAAAASUVORK5CYII=" alt=""/>Gestion Documental</a></li>
	</ul></li>
	<li class="topmenu"><a href="#" style="height:19px;line-height:19px;"><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAzklEQVQ4ja3QIW5CQRSFYUQFogKBQCC6hAoWgegCEAhkl4BogqhAIitZAKLsgiUgEIgnKhEVFYivokw6GebN4yUcN8n8597/djr3Dh7xgimGbeE+Tv7zjac2BW+uM29TsEjgBXoXpTG6TQUfEXzIKJ2Kd0k2WNYovTdtcQjuGSVYNxVMLh/HiVLIpgQPoqmvNRssc2APK/xEHyt0IyX4wkMKP+OYmRS2mMTv3PRdBtxjhmGiscKgeMSCUsjZ33H7dXBJKU6FUa5gewMc8vkLYvkZBhpIQPAAAAAASUVORK5CYII=" alt=""/>Estudiantes</span></a>
	<ul>
		<li class="subfirst" id="nuevoestudiante"><a href="RegistrarEstudiante.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAyklEQVQ4jZ3PL26CQRCG8RGfQFTW1XySJpWVFcgKBAdAcABEPXhIeoCKHqCiAolAIjgCB6ioQCIrfpjdZNPwb3mTTXYmu888ExEReFCfx8jBU2q2V549eiWgj990P5v0ZothCRhjE1cGS0zLxgzfFQaf+CgBX3ivMJhiWTbWeKswGGFbAn4wqDDoYZ+LJsGfKwzaVN5nSAdNhUGDu1wsLk09k1Vgckr139RjmQde8HejwWumr274vEEnA46ucSGzcr8Wu4rPO3QjIg4NIqzwgelETwAAAABJRU5ErkJggg==" alt=""/>Registrar nuevo estudiante</a></li>
		<li><a href="#"><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAzklEQVQ4ja3QIW5CQRSFYUQFogKBQCC6hAoWgegCEAhkl4BogqhAIitZAKLsgiUgEIgnKhEVFYivokw6GebN4yUcN8n8597/djr3Dh7xgimGbeE+Tv7zjac2BW+uM29TsEjgBXoXpTG6TQUfEXzIKJ2Kd0k2WNYovTdtcQjuGSVYNxVMLh/HiVLIpgQPoqmvNRssc2APK/xEHyt0IyX4wkMKP+OYmRS2mMTv3PRdBtxjhmGiscKgeMSCUsjZ33H7dXBJKU6FUa5gewMc8vkLYvkZBhpIQPAAAAAASUVORK5CYII=" alt=""/>Correspondientes a Bibliotecologia</span></a>
		<ul>
			<li class="subfirst" id="estudianteBibliotecologia1C"><a href="Bibliotecologia1erCurso.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAATklEQVQ4jWNgYGBg+P//v8n///+P/ycSMKCD////rydWMy4DSAIwPaMGjBpAEwO6////z4ORTHEAbAZIEOsabAYcp9QFNv///z9NTlgAAOrf5vhEK9FFAAAAAElFTkSuQmCC" alt=""/>Primer Curso</a></li>
			<li id="estudianteBibliotecologia2C"><a href="Bibliotecologia2doCurso.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAATklEQVQ4jWNgYGBg+P//v8n///+P/ycSMKCD////rydWMy4DSAIwPaMGjBpAEwO6////z4ORTHEAbAZIEOsabAYcp9QFNv///z9NTlgAAOrf5vhEK9FFAAAAAElFTkSuQmCC" alt=""/>Segundo Curso</a></li>
			<li id="estudianteBibliotecologia3C"><a href="Bibliotecologia3erCurso.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAATklEQVQ4jWNgYGBg+P//v8n///+P/ycSMKCD////rydWMy4DSAIwPaMGjBpAEwO6////z4ORTHEAbAZIEOsabAYcp9QFNv///z9NTlgAAOrf5vhEK9FFAAAAAElFTkSuQmCC" alt=""/>Tercer Curso</a></li>
			<li id="estudianteBibliotecologia4C"><a href="Bibliotecologia4toCurso.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAATklEQVQ4jWNgYGBg+P//v8n///+P/ycSMKCD////rydWMy4DSAIwPaMGjBpAEwO6////z4ORTHEAbAZIEOsabAYcp9QFNv///z9NTlgAAOrf5vhEK9FFAAAAAElFTkSuQmCC" alt=""/>Cuarto Curso</a></li>
		</ul></li>
		<li><a href="#"><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAzklEQVQ4ja3QIW5CQRSFYUQFogKBQCC6hAoWgegCEAhkl4BogqhAIitZAKLsgiUgEIgnKhEVFYivokw6GebN4yUcN8n8597/djr3Dh7xgimGbeE+Tv7zjac2BW+uM29TsEjgBXoXpTG6TQUfEXzIKJ2Kd0k2WNYovTdtcQjuGSVYNxVMLh/HiVLIpgQPoqmvNRssc2APK/xEHyt0IyX4wkMKP+OYmRS2mMTv3PRdBtxjhmGiscKgeMSCUsjZ33H7dXBJKU6FUa5gewMc8vkLYvkZBhpIQPAAAAAASUVORK5CYII=" alt=""/>Correspondientes a Informatica</span></a>
		<ul>
			<li class="subfirst" id="estudianteInformatica1C"><a href="Informatica1erCurso.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAATklEQVQ4jWNgYGBg+P//v8n///+P/ycSMKCD////rydWMy4DSAIwPaMGjBpAEwO6////z4ORTHEAbAZIEOsabAYcp9QFNv///z9NTlgAAOrf5vhEK9FFAAAAAElFTkSuQmCC" alt=""/>Primer Curso</a></li>
			<li id="estudianteInformatica2C"><a href="Informatica2doCurso.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAATklEQVQ4jWNgYGBg+P//v8n///+P/ycSMKCD////rydWMy4DSAIwPaMGjBpAEwO6////z4ORTHEAbAZIEOsabAYcp9QFNv///z9NTlgAAOrf5vhEK9FFAAAAAElFTkSuQmCC" alt=""/>Segundo Curso</a></li>
			<li id="estudianteInformatica3C"><a href="Informatica3erCurso.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAATklEQVQ4jWNgYGBg+P//v8n///+P/ycSMKCD////rydWMy4DSAIwPaMGjBpAEwO6////z4ORTHEAbAZIEOsabAYcp9QFNv///z9NTlgAAOrf5vhEK9FFAAAAAElFTkSuQmCC" alt=""/>Tercer Curso</a></li>
			<li id="estudianteInformatica4C"><a href="Informatica4toCurso.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAATklEQVQ4jWNgYGBg+P//v8n///+P/ycSMKCD////rydWMy4DSAIwPaMGjBpAEwO6////z4ORTHEAbAZIEOsabAYcp9QFNv///z9NTlgAAOrf5vhEK9FFAAAAAElFTkSuQmCC" alt=""/>Cuarto Curso</a></li>
		</ul></li>
		<li><a href="#"><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAzklEQVQ4ja3QIW5CQRSFYUQFogKBQCC6hAoWgegCEAhkl4BogqhAIitZAKLsgiUgEIgnKhEVFYivokw6GebN4yUcN8n8597/djr3Dh7xgimGbeE+Tv7zjac2BW+uM29TsEjgBXoXpTG6TQUfEXzIKJ2Kd0k2WNYovTdtcQjuGSVYNxVMLh/HiVLIpgQPoqmvNRssc2APK/xEHyt0IyX4wkMKP+OYmRS2mMTv3PRdBtxjhmGiscKgeMSCUsjZ33H7dXBJKU6FUa5gewMc8vkLYvkZBhpIQPAAAAAASUVORK5CYII=" alt=""/>Correspondientes a Sede Universitaria</span></a>
		<ul>
			<li class="subfirst" id="estudianteSU1C"><a href="SedeUniversitaria1erCurso.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAATklEQVQ4jWNgYGBg+P//v8n///+P/ycSMKCD////rydWMy4DSAIwPaMGjBpAEwO6////z4ORTHEAbAZIEOsabAYcp9QFNv///z9NTlgAAOrf5vhEK9FFAAAAAElFTkSuQmCC" alt=""/>Primer Curso</a></li>
			<li id="estudianteSU2C"><a href="SedeUniversitaria2doCurso.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAATklEQVQ4jWNgYGBg+P//v8n///+P/ycSMKCD////rydWMy4DSAIwPaMGjBpAEwO6////z4ORTHEAbAZIEOsabAYcp9QFNv///z9NTlgAAOrf5vhEK9FFAAAAAElFTkSuQmCC" alt=""/>Segundo Curso</a></li>
			<li id="estudianteSU3C"><a href="SedeUniversitaria3erCurso.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAATklEQVQ4jWNgYGBg+P//v8n///+P/ycSMKCD////rydWMy4DSAIwPaMGjBpAEwO6////z4ORTHEAbAZIEOsabAYcp9QFNv///z9NTlgAAOrf5vhEK9FFAAAAAElFTkSuQmCC" alt=""/>Tercer Curso</a></li>
			<li id="estudianteSU4C"><a href="SedeUniversitaria4toCurso.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAATklEQVQ4jWNgYGBg+P//v8n///+P/ycSMKCD////rydWMy4DSAIwPaMGjBpAEwO6////z4ORTHEAbAZIEOsabAYcp9QFNv///z9NTlgAAOrf5vhEK9FFAAAAAElFTkSuQmCC" alt=""/>Cuarto Curso</a></li>
			<li id="estudianteSU5C"><a href="SedeUniversitaria5toCurso.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAATklEQVQ4jWNgYGBg+P//v8n///+P/ycSMKCD////rydWMy4DSAIwPaMGjBpAEwO6////z4ORTHEAbAZIEOsabAYcp9QFNv///z9NTlgAAOrf5vhEK9FFAAAAAElFTkSuQmCC" alt=""/>Quinto Curso</a></li>
		</ul></li>
		<li><a href="#"><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAzklEQVQ4ja3QIW5CQRSFYUQFogKBQCC6hAoWgegCEAhkl4BogqhAIitZAKLsgiUgEIgnKhEVFYivokw6GebN4yUcN8n8597/djr3Dh7xgimGbeE+Tv7zjac2BW+uM29TsEjgBXoXpTG6TQUfEXzIKJ2Kd0k2WNYovTdtcQjuGSVYNxVMLh/HiVLIpgQPoqmvNRssc2APK/xEHyt0IyX4wkMKP+OYmRS2mMTv3PRdBtxjhmGiscKgeMSCUsjZ33H7dXBJKU6FUa5gewMc8vkLYvkZBhpIQPAAAAAASUVORK5CYII=" alt=""/>Correspondientes a Gestion Documental</span></a>
		<ul>
			<li class="subfirst" id="estudianteGD1C"><a href="GestionDocumental1erCurso.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAATklEQVQ4jWNgYGBg+P//v8n///+P/ycSMKCD////rydWMy4DSAIwPaMGjBpAEwO6////z4ORTHEAbAZIEOsabAYcp9QFNv///z9NTlgAAOrf5vhEK9FFAAAAAElFTkSuQmCC" alt=""/>Primer Curso</a></li>
			<li id="estudianteGD2C"><a href="GestionDocumental2doCurso.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAATklEQVQ4jWNgYGBg+P//v8n///+P/ycSMKCD////rydWMy4DSAIwPaMGjBpAEwO6////z4ORTHEAbAZIEOsabAYcp9QFNv///z9NTlgAAOrf5vhEK9FFAAAAAElFTkSuQmCC" alt=""/>Segundo Curso</a></li>
			<li id="estudianteGD3C"><a href="GestionDocumental3erCurso.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAATklEQVQ4jWNgYGBg+P//v8n///+P/ycSMKCD////rydWMy4DSAIwPaMGjBpAEwO6////z4ORTHEAbAZIEOsabAYcp9QFNv///z9NTlgAAOrf5vhEK9FFAAAAAElFTkSuQmCC" alt=""/>Tercer Curso</a></li>
			<li id="estudianteGD4C"><a href="GestionDocumental4toCurso.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAATklEQVQ4jWNgYGBg+P//v8n///+P/ycSMKCD////rydWMy4DSAIwPaMGjBpAEwO6////z4ORTHEAbAZIEOsabAYcp9QFNv///z9NTlgAAOrf5vhEK9FFAAAAAElFTkSuQmCC" alt=""/>Cuarto Curso</a></li>
		</ul></li>
		<li><a href="HistorialEstudiantes.php" id="historial"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAyklEQVQ4jZ3PL26CQRCG8RGfQFTW1XySJpWVFcgKBAdAcABEPXhIeoCKHqCiAolAIjgCB6ioQCIrfpjdZNPwb3mTTXYmu888ExEReFCfx8jBU2q2V549eiWgj990P5v0ZothCRhjE1cGS0zLxgzfFQaf+CgBX3ivMJhiWTbWeKswGGFbAn4wqDDoYZ+LJsGfKwzaVN5nSAdNhUGDu1wsLk09k1Vgckr139RjmQde8HejwWumr274vEEnA46ucSGzcr8Wu4rPO3QjIg4NIqzwgelETwAAAABJRU5ErkJggg==" alt=""/>Historial de estudiantes</a></li>
	</ul></li>
	<li class="topmenu"><a href="#" style="height:19px;line-height:19px;"><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Reportes</span></a>
	<ul>
		<li class="subfirst"><a href="ReportesIPI.php?curso=B" id="B"><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Bibliotecologia</span></a>
		<ul>
			<li class="subfirst"><a href="ReportesIPI.php?curso=B1" id="B1"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Primer Curso</a></li>
			<li><a href="ReportesIPI.php?curso=B2" id="B2"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Segundo Curso</a></li>
			<li><a href="ReportesIPI.php?curso=B3" id="B3"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Tercer Curso</a></li>
			<li><a href="ReportesIPI.php?curso=B4" id="B4"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Cuarto Curso</a></li>
		</ul></li>
		<li><a href="ReportesIPI.php?curso=I" id="I"><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Informatica</span></a>
		<ul>
			<li class="subfirst"><a href="ReportesIPI.php?curso=I1" id="I1"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Primer Curso</a></li>
			<li><a href="ReportesIPI.php?curso=I2" id="I2"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Segundo Curso</a></li>
			<li><a href="ReportesIPI.php?curso=I3" id="I3"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Tercer Curso</a></li>
			<li><a href="ReportesIPI.php?curso=I4" id="I4"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Cuarto Curso</a></li>
		</ul></li>
		<li><a href="ReportesIPI.php?curso=SU" id="SU"><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Sede Universitaria</span></a>
		<ul>
			<li class="subfirst"><a href="ReportesIPI.php?curso=SU1" id="SU1"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Primer Curso</a></li>
			<li><a href="ReportesIPI.php?curso=SU2" id="SU2"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Segundo Curso</a></li>
			<li><a href="ReportesIPI.php?curso=SU3" id="SU3"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Tercer Curso</a></li>
			<li><a href="ReportesIPI.php?curso=SU4" id="SU4"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Cuarto Curso</a></li>
			<li><a href="ReportesIPI.php?curso=SU5" id="SU5"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Quinto Curso</a></li>
		</ul></li>
		<li><a href="ReportesIPI.php?curso=GD" id="GD"><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Gestion Documental</span></a>
		<ul>
			<li class="subfirst"><a href="ReportesIPI.php?curso=GD1" id="GD1"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Primer Curso</a></li>
			<li><a href="ReportesIPI.php?curso=GD2" id="GD2"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Segundo Curso</a></li>
			<li><a href="ReportesIPI.php?curso=GD3" id="GD3"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Tercer Curso</a></li>
			<li><a href="ReportesIPI.php?curso=GD4" id="GD4"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Cuarto Curso</a></li>
		</ul></li>
		<li><a href="ReporteTodos.php" id="todos"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Todos los estudiantes registrados en el IPI</a></li>
	</ul></li>
	<li class="topmenu"><a href="#" style="height:19px;line-height:19px;"><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAApklEQVQ4jbXSLQ7CUBAE4CcqKpqArOUeSA7FDZCICg5AgqkgwSARlQgkx/kwj7Qp/aOBUfuS2XmzsxtCD3BWo+zj9QK66l7ym2QEbf7vBaaON0sA6WwBbPHEciyDtNWYoIiU/aADpPGXIjZm6ns4TsoAu/i8oYp1iWSqwAKHhqsTVq2xhkOM1is8kHUEOr4F5Mg/9/GnQ7r4HtemwBr3L5rv2IQQwgvG7ABunRfe5wAAAABJRU5ErkJggg==" alt=""/>Mis Opciones</span></a>
	<ul>
		<li class="subfirst" id="newoperator"><a href="NuevoOperador.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAYUlEQVQ4jd2TMQ6AMAwD/WQGftKBJ+YBHTpel1AJUYSSSgx4tOKTPUTADlRiqsAmSUqEB+QEAKCALpkZwGfZqJkAmNv2fQPgAJrbDShRwE3hCW8KN3i6+WuDDGD5mZbeuQOZaivfZjpaQwAAAABJRU5ErkJggg==" alt=""/>Crear nuevo secretario</a></li>
		<li><a href="ModificarSecretario.php" id="editoperator"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAYUlEQVQ4jd2TMQ6AMAwD/WQGftKBJ+YBHTpel1AJUYSSSgx4tOKTPUTADlRiqsAmSUqEB+QEAKCALpkZwGfZqJkAmNv2fQPgAJrbDShRwE3hCW8KN3i6+WuDDGD5mZbeuQOZaivfZjpaQwAAAABJRU5ErkJggg==" alt=""/>Modificar secretario</a></li>
		<li><a href="EliminarSecretario.php" id="deleteoperator"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAYUlEQVQ4jd2TMQ6AMAwD/WQGftKBJ+YBHTpel1AJUYSSSgx4tOKTPUTADlRiqsAmSUqEB+QEAKCALpkZwGfZqJkAmNv2fQPgAJrbDShRwE3hCW8KN3i6+WuDDGD5mZbeuQOZaivfZjpaQwAAAABJRU5ErkJggg==" alt=""/>Eliminar secretario</a></li>
		<li><a href="ListadoSecretarios.php" id="listoperators"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAYUlEQVQ4jd2TMQ6AMAwD/WQGftKBJ+YBHTpel1AJUYSSSgx4tOKTPUTADlRiqsAmSUqEB+QEAKCALpkZwGfZqJkAmNv2fQPgAJrbDShRwE3hCW8KN3i6+WuDDGD5mZbeuQOZaivfZjpaQwAAAABJRU5ErkJggg==" alt=""/>Listar secretarios</a></li>
		<li><a href="CambiarClaveAcceso.php" id="changepassword"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAuklEQVQ4jZ3QIZLCQBCFYcRKJGIFAoGI3APsURAcAcF9kJEIRGTEij3AyghkJAKBQHwImioIM0vCMzPV3e/vVz0avRCmKPGH71fzXfMSB1RocewFia07V1VRK3pBMI7Bm1oUvSGY4OxRgyEbz0pB2hxgnkjRhVSoc4AVTgnADVJFv8iZfyJFDgLr/8yf8eb0i48h5i9s4398ip4zJxIWmHWLCzSpzckLJ6hlzDeDjHeAunuhoYD9W8bQBcxo7TUZb7jBAAAAAElFTkSuQmCC" alt=""/>Cambiar mi clave de acceso</a></li>
	</ul></li>
	<li class="topmenu" id="acerca"><a href="AcercaDeNosotros.php" style="height:19px;line-height:19px;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAwElEQVQ4jd3ToQ3CYBAFYASiggEqkIxQwQgdAcEAiI6AY4QKBkAwQkdAdIQOwAAIBOLDXMJPaMOP5SWX/Hn37uXycv9sNgEs0UeVU7pJYOeF3TfxgBY1iqkNUISmxZAaVDjihjs6NFhFNcHdQ3NENbbJIlbvfaKP3iI3gzfkp/cfBpE8XJJAV78YNDG0wTbezS8GHa6Yx/Fc0eUOF3Ew+4Q7BFfkGNQhLhOuxAN1jkGL0wh/RptjMIzdOdbSDxR4AtVuYhVavmUYAAAAAElFTkSuQmCC" alt=""/>Acerca de nosotros</a></li>
	<!--<li class="topmenu" id="contactar"><a href="Contactenos.php" style="height:19px;line-height:19px;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA80lEQVQ4jZ3TLVIDQRCG4RErIxCIlQgEgiOsSwSHQCAjIrhHjoBERkQgVkRygMgIRCQCgVgREfEgtpOaIptlSVeNmJ7ve+enpxOusEBjeOywRJnCfGksUrbzO67TH4ERVuFpUkZ7wgfuesy32IQWHAEhmMeJHjrME3xjHvNOQIEaezxn5lnkahRnAdkdN5F+iSFyo0zXDYjFMdbZ+6wx/qXpBZRx532MCcpBAFTakhaYYhr5FapeQJi/cN9RhRt8HiAngDA3mJ3+gCPkMTRVF6DB2zlzBnmV9U3SNoY43tCvvA3PLmm76tKoDyVb+n871yh/AEursbT8b62gAAAAAElFTkSuQmCC" alt=""/>Contactenos</a></li>-->
	<li class="toplast" id="salir"><a href="../index.php" style="height:19px;line-height:19px;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAzElEQVQ4jbXToW4CQRDGcURlBQ9QgUQgkCcQCB4EUVFRiWxSgUAiEYg+QiUCgUQgECdO8AAnkBUVFb8KNmS53MEdTT+zk8x8/8zszrZa/yEMsMUOo3sAO0wxw6GpuYs8xB0nPTUBjPEZ4j6+bxlidZHjOeTesGkCyDGPchvV2mNQBEwajppeAOqaI0BWCxC9RqwUo9od4AX7skRdwAcWfwGs8VoFeA/nF5Z4LNT08KNsIwsXM8QKGRK0Q02C47UOY+CD00fKIvB5O4v6BVbsds9wnHYVAAAAAElFTkSuQmCC" alt=""/>Salir del sistema</a></li>
</ul>

	
	
	<div align="right" style="margin-right: 42px;margin-top: 5px; ">
		 <input type="text" class="search" id="searchid" placeholder="Buscar estudiantes" />
		 <div id="result" align="right" style="margin-right: 42px;margin-top: 5px; ">
		 </div>
	</div>
	
	<strong><div id="divdate" class="date"/></strong>
	
	<script>
			moment.locale('es', 
			{
				months : [
					"Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio",
					"Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"
				],
				weekdays : [
					"Domingo", "Lunes", "Martes", "Miercoles", "Jueves", "Viernes", "Sabado"
				]
			});
			
			var now = moment().format("dddd, MMMM Do, YYYY, h:mm:ss A");
			moment.locale('es');
			// Saturday, June 9th, 2007, 5:46:21 PM
			$('#divdate').append(now);
	</script></br>
	
	<div>
	<p style="font-family: Adobe Caslon Pro, Hoefler Text, Georgia, Garamond, Times, serif;letter-spacing: 0.1em;line-height: 145%;font-size: 15px;">
	Secretario Docente conectado: <?php echo $_SESSION['login_name']; echo " "; 
											   echo $_SESSION['login_1p']; echo " "; 
											   echo $_SESSION['login_2p'];
	?></p>
	</div>

	