
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
	 
	<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	 
	<head charset="UTF-8">
	 
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	 
	<meta name="description" content="" />
	 
	<meta name="keywords" content="" />
	 
	<meta name="author" content="" />
	 
	<link rel="stylesheet" type="text/css" href="../css/home.css" media="screen" />
	<link rel="stylesheet" href="../css/footer.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="../jquery-easyui-1.4/themes/gray/easyui.css">
	<link rel="stylesheet" type="text/css" href="../jquery-easyui-1.4/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="../SmartWizard-master/styles/smart_wizard.css">
	
	<!--<script type="text/javascript" src="../jquery-easyui-1.4/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="../jquery-easyui-1.4/jquery.min.js"></script>-->
	<script type="text/javascript" src="../js/jquery-1.8.0.min.js"></script>
	<script type="text/javascript" src="../jquery-easyui-1.4/jquery.easyui.min.js"></script>
	<script type="text/javascript" src="../js/jquery.blockUI.js"></script>
	<script type="text/javascript" src="../js/jquery.blockUI.min.js"></script>
	<script type="text/javascript" src="../js/jquery.jCombo.js"></script>
	<script type="text/javascript" src="../js/jquery.jCombo.min.js"></script>
	<!--<script type="text/javascript" src="../SmartWizard-master/js/jquery-1.4.2.min.js"></script>-->
	<script type="text/javascript" src="../SmartWizard-master/js/jquery.smartWizard-2.0.min.js"></script>
	
	<script type="text/javascript" src="../Momentjs/moment.js"></script>
	<script type="text/javascript" src="../Momentjs/locales.js"></script>
	
	<!-- Start css3menu.com HEAD section -->
	<link rel="stylesheet" href="../css/styleNav.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>
	<!-- End css3menu.com HEAD section -->
	
	 <style type="text/css">
	#searchid
	{
		width:400px;
		border:solid 1px #000;
		padding:10px;
		font-size:14px;
		background: url('../images/search.png') no-repeat 8px 6px; 
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

	<title>Secretaria IPI Fernando Aguado Y Rico</title>
	 
	 <script type="text/javascript">
    //$("#provincia").jCombo({ url: "getEstados.php" } );
	$(document).ready(function(){
							
		$("#info").hide();
		$("#exito").hide();
	  
		//Deshabilitamos el combobox que lista los municipios hasta que se cambie el valor del combobox de las provincias
		//$("#municipio").attr('disabled','disabled');
		
		function SetCmbData(arr)
		{
			$("#municipio").attr('disabled',false);
			$('#municipio').empty();
			jQuery.each(arr, function(index, value) 
			{
				$('#municipio').append('<option>' + value + '</option>');
			});
		};

   
		$('#provincia').change(function() 
		{              
			var filter = $(this).attr('value');
			switch(filter)
			{
			 case "Pinar del Rio":
						var arr = [ "Consolacion del Sur", "Guane", "La Palma", "Los Palacios", "Mantua", "Minas de Matahambre", "Pinar del Rio", "San Juan y Martinez", "San Luis", "Sandino"];
						SetCmbData(arr);
						break;
			case "Artemisa":
						var arr = [ "Alquizar", "Artemisa", "Bauta", "Caimito", "Guanajay", "Mariel", "Bahia Honda", "San Cristobal", "Candelaria"];
						SetCmbData(arr);
						break;
			case "Mayabeque":
						var arr = [ "Batabano", "Bejucal", "Jaruco", "Madruga", "Melena del Sur", "Nueva Paz", "Quivican", "San Jose de las Lajas", "San Nicolas de Bari", "Santa Cruz del Norte"];
						SetCmbData(arr);
						break;
			case "La Habana":
						var arr = [ "Arroyo Naranjo", "Boyeros", "Centro Habana", "Cerro", "Cotorro", "Diez de Octubre", "Guanabacoa", "Habana del Este", "Habana Vieja", "La Lisa", "Marianao", "Playa", "Plaza", "Regla", "San Miguel del Padron"];
						SetCmbData(arr);
						break;
			case "Matanzas":
						var arr = ["Calimete", "Cardenas", "Cienaga de Zapata", "Colon", "Jovellanos", "Limonar", "Los Arabos", "Marti", "Matanzas", "Pedro Betancourt", "Perico", "Unión de Reyes"];
						SetCmbData(arr);
						break;
			case "Villa Clara":
						var arr = [ "Caibarien", "Camajuani", "Cifuentes", "Corralillo", "Encrucijada", "Manicaragua", "Placetas", "Ranchuelo", "Remedios", "Sagua la Grande", "Santa Clara", "Santo Domingo"];
						SetCmbData(arr);
						break;
			case "Cienfuegos":
						var arr = [ "Abreus", "Aguada de Pasajeros", "Cienfuegos", "Cruces", "Cumanayagua", "Palmira", "Rodas", "Santa Isabel de las Lajas"];
						SetCmbData(arr);
						break;
			case "Sancti Spiritus":
						var arr = [ "Cabaiguan", "Fomento", "Jatibonico", "La Sierpe", "Sancti Spiritus", "Taguasco", "Trinidad", "Yaguajay"];
						SetCmbData(arr);
						break;
			case "Ciego de Avila":
						var arr = [ "Ciro Redondo", "Baragua", "Bolivia", "Chambas", "Ciego de Avila", "Florencia", "Majagua", "Moron", "Primero de Enero", "Venezuela"];
						SetCmbData(arr);
						break;
			case "Camagüey":
						var arr = [ "Camagüey", "Carlos Manuel de Cespedes", "Esmeralda", "Florida", "Guaimaro",  "Minas", "Najasa", "Nuevitas", "Santa Cruz del Sur", "Sibanicu", "Sierra de Cubitas", "Vertientes"];
						SetCmbData(arr);
						break;
			case "Las Tunas":
						var arr = [ "Amancio Rodriguez", "Colombia", "Jesus Menendez", "Jobabo", "Las Tunas", "Majibacoa", "Manati", "Puerto Padre"];
						SetCmbData(arr);
						break;
			case "Holguin":
						var arr = [ "Antilla", "Baguanos", "Banes", "Cacocum", "Calixto Garcia", "Cueto", "Frank Pais", "Gibara", "Holguin", "Mayari", "Moa", "Rafael Freyre", "Sagua de Tanamo", "Urbano Noris"];
						SetCmbData(arr);
						break;
			case "Granma":
						var arr = [ "Bartolome Maso", "Bayamo", "Buey Arriba", "Campechuela", "Cauto Cristo", "Guisa", "Jiguani", "Manzanillo", "Media Luna", "Niquero", "Pilon", "Rio Cauto", "Yara"];
						SetCmbData(arr);
						break;
			case "Santiago de Cuba":
						var arr = [ "Contramaestre", "Guama", "Julio Antonio Mella", "Palma Soriano", "San Luis", "Santiago de Cuba", "Segundo Frente", "Songo la Maya", "Tercer Frente"];
						SetCmbData(arr);
						break;
			case "Guantanamo":
						var arr = [ "Baracoa", "Caimanera", "El Salvador", "Guantanamo", "Imias", "Maisi", "Manuel Tames", "Niceto Perez", "San Antonio del Sur", "Yateras"];
						SetCmbData(arr);
						break;
			case "Municipio especial":
						var arr = [ "Isla de la Juventud"];
						SetCmbData(arr);
						break;
			}	
        });
		
    	// Smart Wizard     	
  		$('#wizard').smartWizard({transitionEffect:'slideleft',onLeaveStep:leaveAStepCallback,onFinish:onFinishCallback,enableFinishButton:true});

      function leaveAStepCallback(obj){
        var step_num= obj.attr('rel');
        return validateSteps(step_num);
      }
      
      function onFinishCallback(){
       if(validateAllSteps()){
        $('form').submit();
       }
      }
		});
	   
    function validateAllSteps()
	{
       var isStepValid = true;
       
       if(validateStep1() == false)
	   {
         isStepValid = false;
         $('#wizard').smartWizard('setError',{stepnum:1,iserror:true});         
       }
	   else
	   {
         $('#wizard').smartWizard('setError',{stepnum:1,iserror:false});
       }
	   
	   if(validateStep2() == false)
	   {
         isStepValid = false;
         $('#wizard').smartWizard('setError',{stepnum:2,iserror:true});         
       }
	   else
	   {
         $('#wizard').smartWizard('setError',{stepnum:2,iserror:false});
       }
       
       if(validateStep3() == false)
	   {
         isStepValid = false;
         $('#wizard').smartWizard('setError',{stepnum:3,iserror:true});         
       }
	   else
	   {
         $('#wizard').smartWizard('setError',{stepnum:3,iserror:false});
       }
       
       if(!isStepValid)
	   {
          $('#wizard').smartWizard('showMessage','<img src="../images/warning_16.png" /> Por favor rectifique los errores pendientes antes de finalizar');
       }
              
       return isStepValid;
    } 	
		
		
	function validateSteps(step)
	{
	  var isStepValid = true;
      // validate step 1
      if(step == 1)
	  {
        if(validateStep1() == false )
		{
          isStepValid = false; 
          $('#wizard').smartWizard('showMessage','<img src="../images/warning_16.png" /> Por favor rectifique los errores pendientes en el Paso '+step);
          $('#wizard').smartWizard('setError',{stepnum:step,iserror:true});         
        }
		else
		{
          $('#wizard').smartWizard('setError',{stepnum:step,iserror:false});
        }
      }
	  
	  // validate step 2
	  if(step == 2)
	  {
        if(validateStep2() == false )
		{
          isStepValid = false; 
          $('#wizard').smartWizard('showMessage','<img src="../images/warning_16.png" /> Por favor rectifique los errores pendientes en el Paso'+step);
          $('#wizard').smartWizard('setError',{stepnum:step,iserror:true});         
        }
		else
		{
          $('#wizard').smartWizard('setError',{stepnum:step,iserror:false});
        }
      }
      
      // validate step3
      if(step == 3)
	  {
        if(validateStep3() == false )
		{
          isStepValid = false; 
          $('#wizard').smartWizard('showMessage','Please correct the errors in step'+step+ ' and click next.');
          $('#wizard').smartWizard('setError',{stepnum:step,iserror:true});         
        }
		else
		{
          $('#wizard').smartWizard('setError',{stepnum:step,iserror:false});
        }
      }
      
      return isStepValid;
    }
		
	function validateStep1()
	{
		   var isValid = true; 
		   // Validate Username
		   var un = $('#username').val();
		   if(!un && un.length <= 0)
		   {
			 isValid = false;
			 $('#msg_username').html('<img src="../images/warning_16.png" /> Campo requerido').show();
		   }
		   else
		   {
			 $('#msg_username').html('').hide();
		   }
       
		   // validate apellidos
		   var pw = $('#apellidos').val();
		   if(!pw && pw.length <= 0)
		   {
			 isValid = false;
			 $('#msg_apellidos').html('<img src="../images/warning_16.png" /> Campo requerido').show();         
		   }
		   else
		   {
			 $('#msg_apellidos').html('').hide();
		   }
	   
		   // validate sexo
		   var pw = $('#sexo').val();
		   if(!pw && pw.length <= 0)
		   {
			 isValid = false;
			 $('#msg_genero').html('<img src="../images/warning_16.png" /> Campo requerido').show();         
		   }
		   else
		   {
			 $('#msg_genero').html('').hide();
		   }
		   
		   // validate ci
		   var pw = $('#ci').val();
		   if(!pw && pw.length <= 0)
		   {
			 isValid = false;
			 $('#msg_ci').html('<img src="../images/warning_16.png" /> Campo requerido').show();         
		   }
		   else
		   {
			 $('#msg_ci').html('').hide();
		   }
		   
		   // validate nacimiento
		   var pw = $('#nacimiento').val();
		   if(!pw && pw.length <= 0)
		   {
			 isValid = false;
			 $('#msg_nacimiento').html('<img src="../images/warning_16.png" /> Campo requerido').show();         
		   }
		   else
		   {
			 $('#msg_nacimiento').html('').hide();
		   }
		   
		   // validate provincia
		   var pw = $('#provincia').val();
		   if(!pw && pw.length <= 0)
		   {
			 isValid = false;
			 $('#msg_provincia').html('<img src="../images/warning_16.png" /> Campo requerido').show();         
		   }
		   else
		   {
			 $('#msg_provincia').html('').hide();
		   }
		   
		   // validate municipio
		   var pw = $('#municipio').val();
		   if(!pw && pw.length <= 0)
		   {
			 isValid = false;
			 $('#msg_municipio').html('<img src="../images/warning_16.png" /> Campo requerido').show();         
		   }
		   else
		   {
			 $('#msg_municipio').html('').hide();
		   }
		   
		   // validate escolaridad
		   var pw = $('#escolaridad').val();
		   if(!pw && pw.length <= 0)
		   {
			 isValid = false;
			 $('#msg_escolaridad').html('<img src="../images/warning_16.png" /> Campo requerido').show();         
		   }
		   else
		   {
			 $('#msg_escolaridad').html('').hide();
		   }
		   
		   // validate especialidadEstudio
		   var pw = $('#especialidadEstudio').val();
		   if(!pw && pw.length <= 0)
		   {
			 isValid = false;
			 $('#msg_especialidadEstudio').html('<img src="../images/warning_16.png" /> Campo requerido').show();         
		   }
		   else
		   {
			 $('#msg_especialidadEstudio').html('').hide();
		   }
		   
		   // validate cursoMatricula
		   var pw = $('#cursoMatricula').val();
		   if(!pw && pw.length <= 0)
		   {
			 isValid = false;
			 $('#msg_cursoMatricula').html('<img src="../images/warning_16.png" /> Campo requerido').show();         
		   }
		   else
		   {
			 $('#msg_cursoMatricula').html('').hide();
		   }
		   
		   // validate procedencia
		   var pw = $('#procedencia').val();
		   if(!pw && pw.length <= 0)
		   {
			 isValid = false;
			 $('#msg_procedencia').html('<img src="../images/warning_16.png" /> Campo requerido').show();         
		   }
		   else
		   {
			 $('#msg_procedencia').html('').hide();
		   }
		   
		   // validate comprobante
		   var pw = $('#comprobante').val();
		   if(!pw && pw.length <= 0)
		   {
			 isValid = false;
			 $('#msg_comprobante').html('<img src="../images/warning_16.png" /> Campo requerido').show();         
		   }
		   else
		   {
			 $('#msg_comprobante').html('').hide();
		   }
		   
		   // validate ec
		   var pw = $('#ec').val();
		   if(!pw && pw.length <= 0)
		   {
			 isValid = false;
			 $('#msg_ec').html('<img src="../images/warning_16.png" /> Campo requerido').show();         
		   }
		   else
		   {
			 $('#msg_ec').html('').hide();
		   }
		   
		   // validate hijos
		   var pw = $('#hijos').val();
		   if(!pw && pw.length <= 0)
		   {
			 isValid = false;
			 $('#msg_hijos').html('<img src="../images/warning_16.png" /> Campo requerido').show();         
		   }
		   else
		   {
			 $('#msg_hijos').html('').hide();
		   }
		   
		   // validate foto
		   /*var pw = $('#foto').val();
		   if(!pw && pw.length <= 0)
		   {
			 isValid = false;
			 $('#msg_foto').html('<img src="../images/warning_16.png" /> Campo requerido').show();         
		   }
		   else
		   {
			 $('#msg_foto').html('').hide();
		   }*/
	   
		   // validate password
		   /*var pw = $('#password').val();
		   if(!pw && pw.length <= 0)
		   {
			 isValid = false;
			 $('#msg_password').html('<img src="../images/warning_16.png" /> Campo requerido').show();         
		   }
		   else
		   {
			 $('#msg_password').html('').hide();
		   }
       
		   // validate confirm password
		   var cpw = $('#cpassword').val();
		   if(!cpw && cpw.length <= 0)
		   {
			 isValid = false;
			 $('#msg_cpassword').html('Please fill confirm password').show();         
		   }
		   else
		   {
			 $('#msg_cpassword').html('').hide();
		   }  
       
		   // validate password match
		   if(pw && pw.length > 0 && cpw && cpw.length > 0)
		   {
			 if(pw != cpw)
			 {
			   isValid = false;
			   $('#msg_cpassword').html('Password mismatch').show();            
			 }
			 else
			 {
			   $('#msg_cpassword').html('').hide();
			 }
		   }*/
       return isValid;
    }
	
	function validateStep2()
	{
		   var isValid = true; 
		   // Validate calle
		   var un = $('#calle').val();
		   if(!un && un.length <= 0)
		   {
			 isValid = false;
			 $('#msg_calle').html('<img src="../images/warning_16.png" /> Campo requerido').show();
		   }
		   else
		   {
			 $('#msg_calle').html('').hide();
		   }
       
		   // validate numero
		   var pw = $('#numero').val();
		   if(!pw && pw.length <= 0)
		   {
			 isValid = false;
			 $('#msg_numero').html('<img src="../images/warning_16.png" /> Campo requerido').show();         
		   }
		   else
		   {
			 $('#msg_numero').html('').hide();
		   }
	   
		   // validate entrecalles
		   var pw = $('#entrecalles').val();
		   if(!pw && pw.length <= 0)
		   {
			 isValid = false;
			 $('#msg_entrecalles').html('<img src="../images/warning_16.png" /> Campo requerido').show();         
		   }
		   else
		   {
			 $('#msg_entrecalles').html('').hide();
		   }
		   
		   // validate piso
		   /*var pw = $('#piso').val();
		   if(!pw && pw.length <= 0)
		   {
			 isValid = false;
			 $('#msg_piso').html('<img src="../images/warning_16.png" /> Campo requerido').show();         
		   }
		   else
		   {
			 $('#msg_piso').html('').hide();
		   }*/
		   
		   // validate apto
		   var pw = $('#apto').val();
		   if(!pw && pw.length <= 0)
		   {
			 isValid = false;
			 $('#msg_apto').html('<img src="../images/warning_16.png" /> Campo requerido').show();         
		   }
		   else
		   {
			 $('#msg_apto').html('').hide();
		   }
		   
		   // validate barrio
		   var pw = $('#barrio').val();
		   if(!pw && pw.length <= 0)
		   {
			 isValid = false;
			 $('#msg_barrio').html('<img src="../images/warning_16.png" /> Campo requerido').show();         
		   }
		   else
		   {
			 $('#msg_barrio').html('').hide();
		   }
		   
		   // validate municipioResidencia
		   var pw = $('#municipioResidencia').val();
		   if(!pw && pw.length <= 0)
		   {
			 isValid = false;
			 $('#msg_municipioResidencia').html('<img src="../images/warning_16.png" /> Campo requerido').show();         
		   }
		   else
		   {
			 $('#msg_municipioResidencia').html('').hide();
		   }
		   
		   // validate telefono
		   /*var pw = $('#telefono').val();
		   if(!pw && pw.length <= 0)
		   {
			 isValid = false;
			 $('#msg_telefono').html('<img src="../images/warning_16.png" /> Campo requerido').show();         
		   }
		   else
		   {
			 $('#msg_telefono').html('').hide();
		   }*/
       return isValid;
    }
    
    function validateStep3(){
      var isValid = true;    
      //validate email  email
      /*var email = $('#email').val();
       if(email && email.length > 0){
         if(!isValidEmailAddress(email)){
           isValid = false;
           $('#msg_email').html('Email is invalid').show();           
         }else{
          $('#msg_email').html('').hide();
         }
       }else{
         isValid = false;
         $('#msg_email').html('Please enter email').show();
       }*/
		   var pw = $('#annoMatriculado').val();
		   if(!pw && pw.length <= 0)
		   {
			 isValid = false;
			 $('#msg_annoMatriculado').html('<img src="../images/warning_16.png" /> Campo requerido').show();         
		   }
		   else
		   {
			 $('#msg_annoMatriculado').html('').hide();
		   }       
		   
		   var pw = $('#nombreCentroEstudio').val();
		   if(!pw && pw.length <= 0)
		   {
			 isValid = false;
			 $('#msg_nombreCentroEstudio').html('<img src="../images/warning_16.png" /> Campo requerido').show();         
		   }
		   else
		   {
			 $('#msg_nombreCentroEstudio').html('').hide();
		   }
		   
		   var pw = $('#regional').val();
		   if(!pw && pw.length <= 0)
		   {
			 isValid = false;
			 $('#msg_regional').html('<img src="../images/warning_16.png" /> Campo requerido').show();         
		   }
		   else
		   {
			 $('#msg_regional').html('').hide();
		   }
		   
		   var pw = $('#expedienteNumero').val();
		   if(!pw && pw.length <= 0)
		   {
			 isValid = false;
			 $('#msg_expedienteNumero').html('<img src="../images/warning_16.png" /> Campo requerido').show();         
		   }
		   else
		   {
			 $('#msg_expedienteNumero').html('').hide();
		   }
		   
		   var pw = $('#fechaIngreso').val();
		   if(!pw && pw.length <= 0)
		   {
			 isValid = false;
			 $('#msg_fechaIngreso').html('<img src="../images/warning_16.png" /> Campo requerido').show();         
		   }
		   else
		   {
			 $('#msg_fechaIngreso').html('').hide();
		   }
		   
		   var pw = $('#complementario').val();
		   if(!pw && pw.length <= 0)
		   {
			 isValid = false;
			 $('#msg_complementario').html('<img src="../images/warning_16.png" /> Campo requerido').show();         
		   }
		   else
		   {
			 $('#msg_complementario').html('').hide();
		   }
      return isValid;
    }
    
    // Email Validation
    function isValidEmailAddress(emailAddress) {
      var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
      return pattern.test(emailAddress);
    } 
		
	function loading()
	{ 
	$.blockUI({
							message: '<h4><img src="../images/process1321.gif" /> Espere unos segundos por favor...</h4>',
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
	
	$("#inicio1").click(function() { 
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
	/*function submitForm()
	{
		$('#fssf').form({
				url:'../php/form3_proc.php',
				onSubmit:function(){
					return $(this).form('validate');
				},
				success:function(data){
					$.messager.alert('Info', data, 'info');
				}
			});
	}*/
</script>
	 
	 <script type="text/javascript">
		/*$(function(){
			$('#ffxx').form({
				url:'../php/form3_proc.php',
				onSubmit:function(){
					return $(this).form('validate');
				},
				success:function(data){
					$.messager.alert('Info', data, 'info');
				}
			});
		});*/
	</script>
	 
	</head>
	 
	    <body>
	 
	        <div id="wrapper">
	  <?php
	  
		include('../session.php');
		include("pais.php");
		include('../includes/BannerTwoo.php');

		if(isset($_GET['exito']))
		{
			?>
			<script type="text/javascript">
			$(document).ready(function()
			{
				$("#exito").show();
			});
			</script>
		    <?php
		}
		
		$id = $_GET["id"];		
		$sql = "select * from estudiantes Where id = '$id'";
		$result = @mysql_query($sql);
		$row = mysql_fetch_assoc($result);
	?>
	
	<?php sleep(3); ?>
	<div align="center">
	<ul id="css3menu1" class="topmenu">
<input type="checkbox" id="css3menu-switcher" class="switchbox"><label onclick="" class="switch" for="css3menu-switcher"></label>	<li class="topfirst" id="inicio1"><a href="Home.php" style="height:19px;line-height:19px;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAt0lEQVQ4jeWRsQ2DMBREPQBFKsQAFBQZgIIhKBiAASgzQxqGoGAQhvAIKTIAEg3FS3NWLIcYOW1O+pJ1vmf/bxsTEVABVSwTgztgVXUpYA7cgY23Nnn5GVwAi6AduKl2eQtQfINr4KHgE2iAq6qRhzJ1CA/hLUDvvUF/0N3g4NmbdQQuwMSnJu2NnjcbLVagVbv2AHayyrRiMDJLr+UzuZFKwBog0yhJEpP5D5l8QPgT0cA/HPCrXrEXTWHRBIWcAAAAAElFTkSuQmCC" alt=""/>Inicio</a></li>
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
		<li><a href="HistorialEstudiantes.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAyklEQVQ4jZ3PL26CQRCG8RGfQFTW1XySJpWVFcgKBAdAcABEPXhIeoCKHqCiAolAIjgCB6ioQCIrfpjdZNPwb3mTTXYmu888ExEReFCfx8jBU2q2V549eiWgj990P5v0ZothCRhjE1cGS0zLxgzfFQaf+CgBX3ivMJhiWTbWeKswGGFbAn4wqDDoYZ+LJsGfKwzaVN5nSAdNhUGDu1wsLk09k1Vgckr139RjmQde8HejwWumr274vEEnA46ucSGzcr8Wu4rPO3QjIg4NIqzwgelETwAAAABJRU5ErkJggg==" alt=""/>Historial de estudiantes</a></li>
	</ul></li>
	<li class="topmenu"><a href="#" style="height:19px;line-height:19px;"><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Reportes</span></a>
	<ul>
		<li class="subfirst"><a href="ReportesIPI.php?curso=B"><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Bibliotecologia</span></a>
		<ul>
			<li class="subfirst"><a href="ReportesIPI.php?curso=B1"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Primer Curso</a></li>
			<li><a href="ReportesIPI.php?curso=B2"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Segundo Curso</a></li>
			<li><a href="ReportesIPI.php?curso=B3"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Tercer Curso</a></li>
			<li><a href="ReportesIPI.php?curso=B4"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Cuarto Curso</a></li>
		</ul></li>
		<li><a href="ReportesIPI.php?curso=I"><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Informatica</span></a>
		<ul>
			<li class="subfirst"><a href="ReportesIPI.php?curso=I1"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Primer Curso</a></li>
			<li><a href="ReportesIPI.php?curso=I2"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Segundo Curso</a></li>
			<li><a href="ReportesIPI.php?curso=I3"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Tercer Curso</a></li>
			<li><a href="ReportesIPI.php?curso=I4"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Cuarto Curso</a></li>
		</ul></li>
		<li><a href="ReportesIPI.php?curso=SU"><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Sede Universitaria</span></a>
		<ul>
			<li class="subfirst"><a href="ReportesIPI.php?curso=SU1"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Primer Curso</a></li>
			<li><a href="ReportesIPI.php?curso=SU2"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Segundo Curso</a></li>
			<li><a href="ReportesIPI.php?curso=SU3"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Tercer Curso</a></li>
			<li><a href="ReportesIPI.php?curso=SU4"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Cuarto Curso</a></li>
			<li><a href="ReportesIPI.php?curso=SU5"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Quinto Curso</a></li>
		</ul></li>
		<li><a href="ReportesIPI.php?curso=GD"><span><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Gestion Documental</span></a>
		<ul>
			<li class="subfirst"><a href="ReportesIPI.php?curso=GD1"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Primer Curso</a></li>
			<li><a href="ReportesIPI.php?curso=GD2"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Segundo Curso</a></li>
			<li><a href="ReportesIPI.php?curso=GD3"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Tercer Curso</a></li>
			<li><a href="ReportesIPI.php?curso=GD4"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Cuarto Curso</a></li>
		</ul></li>
		<li><a href="ReporteTodos.php"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAA2UlEQVQ4jZ3TIVYDMRDG8RGVKxAVlRxgJQJRwREqEAgkAtkbcIiKFchKJAJRgUAgEAgEB+gRKlf8MNlHKNkGOiYvme/7v0wyExERWKF3ON5wGaVI5kkx+a2BTyyLyRHTbA8wK0JKAJxjM0AGTQa5qgEu8IjT7AZ5fNQA0yRsRspT3vwUbTE9CpBKeMbDsYAnnKDDzb8AWOAe12l9xQ7vWGM+Ckjf94IlzoYGQ5OAd8MD/wLgNv1xuWUPlYA2mVc18xhggvYv5hKgOkx75gZ9ftCpj3MePbqIiC88O58funHmygAAAABJRU5ErkJggg==" alt=""/>Todos los estudiantes registrados en el IPI</a></li>
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
	
	<!--<div align="right" style="margin-right: 42px;margin-top: 5px; ">
		 <input type="text" class="search" id="searchid" placeholder="Buscar" />
		 <div id="result" align="right" style="margin-right: 42px;margin-top: 5px; ">
		 </div>
	</div>-->
	
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
	</script>
	
	<p style="font-family: Adobe Caslon Pro, Hoefler Text, Georgia, Garamond, Times, serif;letter-spacing: 0.1em;line-height: 145%;font-size: 15px;">
	Secretario Docente conectado: <?php echo $_SESSION['login_name']; echo " "; 
											   echo $_SESSION['login_1p']; echo " "; 
											   echo $_SESSION['login_2p'];
	?></p>
</div>
	
	<?php //include('../includes/nav.php'); ?>
	 
	<div id="contenthp">
	 
	<h3 class="encabezado">Edite los datos del expediente del trabajador alumno</h3>
	
	<div id="info" >
		<b><img src="../images/dialog-warning.png"/> La imagen seleccionada ya ha sido utilizada previamente, debe seleccionar otra imagen</b>
	</div>
	
	<div id="exito" align="center">
		<b style="font-family: Adobe Caslon Pro, Hoefler Text, Georgia, Garamond, Times, serif;letter-spacing: 0.1em;line-height: 145%;font-size: 15px;"><img src="../images/info_16.png"/> Los datos de este estudiante han sido modificados satisfactoriamente.</b>
	</div>
	 
	<table align="center" border="0" cellpadding="0" cellspacing="0">
<tr><td>

<form action="../php/EditStudent.php" method="POST">
  <input type='hidden' name="issubmit" value="1">
<!-- Tabs -->
  		<div id="wizard" class="swMain">
  			<ul>
  				<li><a href="#step-1">
                <span class="stepNumber">1</span>
                <span class="stepDesc">
                   PERSONAL<br />
                   <small></small>
                </span>
            </a></li>
  				<li><a href="#step-2">
                <span class="stepNumber">2</span>
                <span class="stepDesc">
                   UBICACION<br />
                   <small></small>
                </span>
            </a></li>
  				<li><a href="#step-3">
                <span class="stepNumber">3</span>
                <span class="stepDesc">
                   OTROS<br />
                   <small></small>
                </span>
             </a></li>
  				<!--<li><a href="#step-4">
                <span class="stepNumber">3</span>
                <span class="stepDesc">
                   Other Details<br />
                   <small>Fill your other details</small>
                </span>
            </a></li>-->
  			</ul>
  			<div id="step-1">	
            <h2 class="StepTitle">Paso 1: Datos personales del nuevo estudiante</h2>
            <table cellspacing="3" cellpadding="3" align="center">
          			<tr>
                    	<td align="center" colspan="3">&nbsp;</td>
						<input type="text" id="id" name="id" value="<?php echo $row["id"]; ?>" class="input" hidden>
          			</tr>        
          			<tr>
                    	<td align="right"><label>Nombre(s) :</label></td>
                    	<td align="left">
                    	  <input type="text" id="username" name="username" value="<?php echo $row["username"]; ?>" class="input">
                      </td>
                    	<td align="left"><span id="msg_username"></span>&nbsp;</td>
          			</tr>
          			<tr>
                    	<td align="right"><label>Apellidos :</label></td>
                    	<td align="left">
                    	  <input id="apellidos" name="apellidos" value="<?php echo $row["apellidos"]; ?>" class="input">
                      </td>
                    	<td align="left"><span id="msg_apellidos"></span>&nbsp;</td>
          			</tr> 
					<tr>
                    	<td align="right"><label>Sexo :</label></td>
                    	<td align="left">
                        <select id="sexo" name="sexo" class="select">
                          <option value="">-Seleccione-</option>
						  <option value="Femenino" <?php if ($row['sexo'] == "Femenino"): ?> selected="selected"<?php endif; ?>>Femenino</option>
                          <option value="Masculino" <?php if ($row['sexo'] == "Masculino"): ?> selected="selected"<?php endif; ?>>Masculino</option>                 
                        </select>
                      </td>
                    	<td align="left"><span id="msg_genero"></span>&nbsp;</td>
          			</tr>
					<tr>
                    	<td align="right"><label>Carnet de identidad :</label></td>
                    	<td align="left">
                    	  <input id="ci" name="ci" value="<?php echo $row["ci"]; ?>" type=number class="input">
                      </td>
                    	<td align="left"><span id="msg_ci"></span>&nbsp;</td>
          			</tr>
					<tr>
                    	<td align="right"><label>Fecha de nacimiento :</label></td>
                    	<td align="left">
                    	  <input type=date id="nacimiento" name="nacimiento" value="<?php echo $row["nacimiento"]; ?>" class="input">
                      </td>
                    	<td align="left"><span id="msg_nacimiento"></span>&nbsp;</td>
          			</tr> 
					<tr>
                    	<td align="right"><label>Provincia de nacimiento :</label></td>
                    	<td align="left">
                    	  <!--<input id="provincia" name="provincia" value="" class="txtBox">-->
						  <select name="provincia" id="provincia" class="select">
						  <option value="">-Seleccione-</option>
                          <option value="Pinar del Rio" <?php if ($row['provincia'] == "Pinar del Rio"): ?> selected="selected"<?php endif; ?>>Pinar del Rio</option>
                          <option value="Artemisa" <?php if ($row['provincia'] == "Artemisa"): ?> selected="selected"<?php endif; ?>>Artemisa</option>       
						  <option value="Mayabeque" <?php if ($row['provincia'] == "Mayabeque"): ?> selected="selected"<?php endif; ?>>Mayabeque</option>     
						  <option value="La Habana" <?php if ($row['provincia'] == "La Habana"): ?> selected="selected"<?php endif; ?>>La Habana</option>     
						  <option value="Matanzas" <?php if ($row['provincia'] == "Matanzas"): ?> selected="selected"<?php endif; ?>>Matanzas</option>     
						  <option value="Villa Clara" <?php if ($row['provincia'] == "Villa Clara"): ?> selected="selected"<?php endif; ?>>Villa Clara</option>     
						  <option value="Cienfuegos" <?php if ($row['provincia'] == "Cienfuegos"): ?> selected="selected"<?php endif; ?>>Cienfuegos</option>     
						  <option value="Sancti Spiritus" <?php if ($row['provincia'] == "Sancti Spiritus"): ?> selected="selected"<?php endif; ?>>Sancti Spiritus</option>     
						  <option value="Ciego de Avila" <?php if ($row['provincia'] == "Ciego de Avila"): ?> selected="selected"<?php endif; ?>>Ciego de Avila</option>     
						  <option value="Camagüey" <?php if ($row['provincia'] == "Camagüey"): ?> selected="selected"<?php endif; ?>>Camagüey</option>     
						  <option value="Las Tunas" <?php if ($row['provincia'] == "Las Tunas"): ?> selected="selected"<?php endif; ?>>Las Tunas</option>     
						  <option value="Holguin" <?php if ($row['provincia'] == "Holguin"): ?> selected="selected"<?php endif; ?>>Holguin</option>     
						  <option value="Granma" <?php if ($row['provincia'] == "Granma"): ?> selected="selected"<?php endif; ?>>Granma</option>     
						  <option value="Santiago de Cuba" <?php if ($row['provincia'] == "Santiago de Cuba"): ?> selected="selected"<?php endif; ?>>Santiago de Cuba</option>     
						  <option value="Guantanamo" <?php if ($row['provincia'] == "Guantanamo"): ?> selected="selected"<?php endif; ?>>Guantanamo</option>   
						  <option value="Municipio especial" <?php if ($row['provincia'] == "Municipio especial"): ?> selected="selected"<?php endif; ?>>Municipio especial</option>   
						  </select>
                      </td>
                    	<td align="left"><span id="msg_provincia"></span>&nbsp;</td>
          			</tr> 
					<tr>
                    	<td align="right"><label>Municipio de nacimiento :</label></td>
                    	<td align="left">
                    	  <!--<input id="municipio" name="municipio" value="" class="txtBox">-->
						  <select name="municipio" id="municipio" class="select">
						  </select>
                      </td>
                    	<td align="left"><span id="msg_municipio"></span>&nbsp;</td>
          			</tr> 
					<tr>
                    	<td align="right"><label>Nivel de escolaridad :</label></td>
                    	<td align="left">
                    	  <select id="escolaridad" name="escolaridad" class="input">
                          <option value="">-Seleccione-</option>
                          <option value="Noveno Grado" <?php if ($row['escolaridad'] == "Noveno Grado"): ?> selected="selected"<?php endif; ?>>Noveno Grado</option>
                          <option value="Pre-universitario" <?php if ($row['escolaridad'] == "Pre-universitario"): ?> selected="selected"<?php endif; ?>>Pre-universitario</option>                 
                        </select>
                      </td>
                    	<td align="left"><span id="msg_escolaridad"></span>&nbsp;</td>
          			</tr>
					<tr>
                    	<td align="right"><label>Especialidad a estudiar :</label></td>
                    	<td align="left">
                        <select id="especialidadEstudio" name="especialidadEstudio" class="input">
                          <option value="">-Seleccione-</option>
                          <option value="Bibliotecologia" <?php if ($row['especialidadEstudio'] == "Bibliotecologia"): ?> selected="selected"<?php endif; ?>>Bibliotecologia</option>
                          <option value="Informatica" <?php if ($row['especialidadEstudio'] == "Informatica"): ?> selected="selected"<?php endif; ?>>Informatica</option>                 
						  <option value="Gestion Documental" <?php if ($row['especialidadEstudio'] == "Gestion Documental"): ?> selected="selected"<?php endif; ?>>Gestion Documental</option>
                          <option value="Sede Universitaria" <?php if ($row['especialidadEstudio'] == "Sede Universitaria"): ?> selected="selected"<?php endif; ?>>Sede Universitaria</option>                 
                        </select>
                      </td>
                    	<td align="left"><span id="msg_especialidadEstudio"></span>&nbsp;</td>
          			</tr>
					<tr>
                    	<td align="right"><label>Matricula en el curso :</label></td>
                    	<td align="left">
                        <select id="cursoMatricula" name="cursoMatricula" class="select">
                          <option value="">-Seleccione-</option>
                          <option value="1er Curso" <?php if ($row['cursoMatricula'] == "1er Curso"): ?> selected="selected"<?php endif; ?>>1er Curso</option>
                          <option value="2do Curso" <?php if ($row['cursoMatricula'] == "2do Curso"): ?> selected="selected"<?php endif; ?>>2do Curso</option>                 
						  <option value="3er Curso" <?php if ($row['cursoMatricula'] == "3er Curso"): ?> selected="selected"<?php endif; ?>>3er Curso</option>
                          <option value="4to Curso" <?php if ($row['cursoMatricula'] == "4to Curso"): ?> selected="selected"<?php endif; ?>>4to Curso</option>                 
                        </select>
                      </td>
                    	<td align="left"><span id="msg_cursoMatricula"></span>&nbsp;</td>
          			</tr>
					<tr>
                    	<td align="right"><label>Centro de procedencia :</label></td>
                    	<td align="left">
                    	  <input id="procedencia" name="procedencia" value="<?php echo $row['procedencia'] ?>" class="input">
                      </td>
                    	<td align="left"><span id="msg_procedencia"></span>&nbsp;</td>
          			</tr>
					<tr>
                    	<td align="right"><label>No comprobante SMG :</label></td>
                    	<td align="left">
                    	  <input id="comprobante" name="comprobante" value="<?php echo $row['comprobante'] ?>" type=number class="input">
                      </td>
                    	<td align="left"><span id="msg_comprobante"></span>&nbsp;</td>
          			</tr>
					<tr>
                    	<td align="right"><label>Estado civil :</label></td>
                    	<td align="left">
                    	  <select id="ec" name="ec" class="select">
                          <option value="">-Seleccione-</option>
                          <option value="Casado(a)" <?php if ($row['ec'] == "Casado(a)"): ?> selected="selected"<?php endif; ?>>Casado(a)</option>
                          <option value="Soltero(a)" <?php if ($row['ec'] == "Soltero(a)"): ?> selected="selected"<?php endif; ?>>Soltero(a)</option>                 
                        </select>
                      </td>
                    	<td align="left"><span id="msg_ec"></span>&nbsp;</td>
          			</tr>
					<tr>
                    	<td align="right"><label>Numero de hijos :</label></td>
                    	<td align="left">
                    	  <input id="hijos" name="hijos" value="<?php echo $row['hijos'] ?>" type=number class="input">
                      </td>
                    	<td align="left"><span id="msg_hijos"></span>&nbsp;</td>
          			</tr>
					<!--<tr>
                    	<td align="right"><label>Foto :</label></td>
                    	<td align="left">
                    	  <!--<input type="file" id="foto" name="foto" value="" class="txtBox">-->
						  <!--<input type="file" name="foto" id="foto" class="input">
                      </td>
                    	<td align="left"><span id="msg_foto"></span>&nbsp;</td>
          			</tr>-->
  			   </table>          			
        </div>
  			<div id="step-2">
            <h2 class="StepTitle">Paso 2: Domicilio y ubicacion laboral del nuevo estudiante</h2>	
            <table cellspacing="3" cellpadding="3" align="center">
          			<tr>
                    	<td align="center" colspan="3">&nbsp;</td>
          			</tr>        
					<tr>
                    	<td align="center" colspan="3">DOMICILIO</td>
          			</tr> 
          			<tr>
                    	<td align="right"><label>Calle o Finca :</label></td>
                    	<td align="left">
                    	  <input type="text" id="calle" name="calle" value="<?php echo $row['calle'] ?>" class="input">
                      </td>
                    	<td align="left"><span id="msg_calle"></span>&nbsp;</td>
          			</tr>
          			<tr>
                    	<td align="right"><label>Número :</label></td>
                    	<td align="left">
                    	  <input type="text" id="numero" name="numero" value="<?php echo $row['numero'] ?>" class="input">
                      </td>
                    	<td align="left"><span id="msg_numero"></span>&nbsp;</td>
          			</tr> 
					<tr>
                    	<td align="right"><label>Entrecalles :</label></td>
                    	<td align="left">
                    	  <input type="text" id="entrecalles" name="entrecalles" value="<?php echo $row['entrecalles'] ?>" class="input">
                      </td>
                    	<td align="left"><span id="msg_entrecalles"></span>&nbsp;</td>
          			</tr> 
					<tr>
                    	<td align="right"><label>Piso :</label></td>
                    	<td align="left">
                    	  <input type="text" id="piso" name="piso" value="<?php echo $row['piso'] ?>" class="input">
                      </td>
                    	<td align="left"><span id="msg_piso"></span>&nbsp;</td>
          			</tr> 
					<tr>
                    	<td align="right"><label>Apto :</label></td>
                    	<td align="left">
                    	  <input type="text" id="apto" name="apto" value="<?php echo $row['apto'] ?>" class="input">
                      </td>
                    	<td align="left"><span id="msg_apto"></span>&nbsp;</td>
          			</tr> 
					<tr>
                    	<td align="right"><label>Barrio, Reparto o Localidad :</label></td>
                    	<td align="left">
                    	  <input type="text" id="barrio" name="barrio" value="<?php echo $row['barrio'] ?>" class="input">
                      </td>
                    	<td align="left"><span id="msg_barrio"></span>&nbsp;</td>
          			</tr> 
          			<tr>
                    	<td align="right"><label>Municipio :</label></td>
                    	<td align="left">
                        <select id="municipioResidencia" name="municipioResidencia" class="select">
                          <option value="">-Seleccione-</option>
                          <option value="Arroyo Naranjo" <?php if ($row['municipioResidencia'] == "Arroyo Naranjo"): ?> selected="selected"<?php endif; ?>>Arroyo Naranjo</option>
                          <option value="Boyeros" <?php if ($row['municipioResidencia'] == "Boyeros"): ?> selected="selected"<?php endif; ?>>Boyeros</option>                 
						  <option value="Centro Habana" <?php if ($row['municipioResidencia'] == "Centro Habana"): ?> selected="selected"<?php endif; ?>>Centro Habana</option>
						  <option value="Cerro" <?php if ($row['municipioResidencia'] == "Cerro"): ?> selected="selected"<?php endif; ?>>Cerro</option>
						  <option value="Cotorro" <?php if ($row['municipioResidencia'] == "Cotorro"): ?> selected="selected"<?php endif; ?>>Cotorro</option>
						  <option value="Diez de Octubre" <?php if ($row['municipioResidencia'] == "Diez de Octubre"): ?> selected="selected"<?php endif; ?>>Diez de Octubre</option>
						  <option value="Guanabacoa" <?php if ($row['municipioResidencia'] == "Guanabacoa"): ?> selected="selected"<?php endif; ?>>Guanabacoa</option>
						  <option value="Habana del Este" <?php if ($row['municipioResidencia'] == "Habana del Este"): ?> selected="selected"<?php endif; ?>>Habana del Este</option>
						  <option value="Habana Vieja" <?php if ($row['municipioResidencia'] == "Habana Vieja"): ?> selected="selected"<?php endif; ?>>Habana Vieja</option>
						  <option value="La Lisa" <?php if ($row['municipioResidencia'] == "La Lisa"): ?> selected="selected"<?php endif; ?>>La Lisa</option>
						  <option value="Marianao" <?php if ($row['municipioResidencia'] == "Marianao"): ?> selected="selected"<?php endif; ?>>Marianao</option>
						  <option value="Playa" <?php if ($row['municipioResidencia'] == "Playa"): ?> selected="selected"<?php endif; ?>>Playa</option>
						  <option value="Plaza" <?php if ($row['municipioResidencia'] == "Plaza"): ?> selected="selected"<?php endif; ?>>Plaza</option>
						  <option value="Regla" <?php if ($row['municipioResidencia'] == "Regla"): ?> selected="selected"<?php endif; ?>>Regla</option>
						  <option value="San Miguel del Padrón" <?php if ($row['municipioResidencia'] == "San Miguel del Padrón"): ?> selected="selected"<?php endif; ?>>San Miguel del Padrón</option>
                        </select>
                      </td>
                    	<td align="left"><span id="msg_municipioResidencia"></span>&nbsp;</td>
          			</tr> 
					<tr>
                    	<td align="right"><label>Teléfono :</label></td>
                    	<td align="left">
                    	  <input type="text" id="telefono" name="telefono" value="<?php echo $row['telefono'] ?>" class="input">
                      </td>
                    	<td align="left"><span id="msg_telefono"></span>&nbsp;</td>
          			</tr> 
					<tr>
                    	<td align="center" colspan="3">&nbsp;</td>
          			</tr>        
					<tr>
                    	<td align="center" colspan="3">CENTRO DE TRABAJO</td>
          			</tr> 					
					<tr>
                    	<td align="right"><label>Nombre :</label></td>
                    	<td align="left">
                    	  <input type="text" id="nombrecentro" name="nombrecentro" value="<?php echo $row['nombrecentro'] ?>" class="input">
                      </td>
                    	<td align="left"><span id="msg_nombrecentro"></span>&nbsp;</td>
          			</tr>
					<tr>
                    	<td align="right"><label>Dirección :</label></td>
                    	<td align="left">
                    	  <input type="text" id="direccioncentro" name="direccioncentro" value="<?php echo $row['direccioncentro'] ?>" class="input">
                      </td>
                    	<td align="left"><span id="msg_direccioncentro"></span>&nbsp;</td>
          			</tr>
					<tr>
                    	<td align="right"><label>Organismo :</label></td>
                    	<td align="left">
                    	  <input type="text" id="organismocentro" name="organismocentro" value="<?php echo $row['organismocentro'] ?>" class="input">
                      </td>
                    	<td align="left"><span id="msg_organismocentro"></span>&nbsp;</td>
          			</tr>
					<tr>
                    	<td align="right"><label>Cargo que ocupa :</label></td>
                    	<td align="left">
                    	  <input type="text" id="cargo" name="cargo" value="<?php echo $row['cargo'] ?>" class="input">
                      </td>
                    	<td align="left"><span id="msg_cargo"></span>&nbsp;</td>
          			</tr>
					<tr>
                    	<td align="right"><label>Teléfono :</label></td>
                    	<td align="left">
                    	  <input type="text" id="telefonocentro" name="telefonocentro" value="<?php echo $row['telefonocentro'] ?>" class="input">
                      </td>
                    	<td align="left"><span id="msg_telefonocentro"></span>&nbsp;</td>
          			</tr>
  			   </table>        
        </div>                      
  			<div id="step-3">
            <h2 class="StepTitle">Paso 3: Otros datos</h2>	
            <table cellspacing="3" cellpadding="3" align="center">
          			<tr>
                    	<td align="center" colspan="3">&nbsp;</td>
          			</tr>        
          			<tr>
                    	<td align="right"><label>Año matriculado :</label></td>
                    	<td align="left">
                    	  <input type="number" id="annoMatriculado" name="annoMatriculado" value="<?php echo $row['annoMatriculado'] ?>" class="input">
                      </td>
                    	<td align="left"><span id="msg_annoMatriculado"></span>&nbsp;</td>
          			</tr>
          			<tr>
                    	<td align="right"><label>Nombre del centro :</label></td>
                    	<td align="left">
                    	  <input type="text" id="nombreCentroEstudio" name="nombreCentroEstudio" value="<?php echo $row['nombreCentroEstudio'] ?>" class="input">
                      </td>
                    	<td align="left"><span id="msg_nombreCentroEstudio"></span>&nbsp;</td>
          			</tr>          			
					<tr>
                    	<td align="right"><label>Regional :</label></td>
                    	<td align="left">
                    	  <input type="text" id="regional" name="regional" value="<?php echo $row['regional'] ?>" class="input">
                      </td>
                    	<td align="left"><span id="msg_regional"></span>&nbsp;</td>
          			</tr>          	
					<tr>
                    	<td align="right"><label>Expediente número :</label></td>
                    	<td align="left">
                    	  <input type="text" id="expedienteNumero" name="expedienteNumero" value="<?php echo $row['expedienteNumero'] ?>" class="input">
                      </td>
                    	<td align="left"><span id="msg_expedienteNumero"></span>&nbsp;</td>
          			</tr>          	
					<tr>
                    	<td align="right"><label>Fecha :</label></td>
                    	<td align="left">
                    	  <input type="date" id="fechaIngreso" name="fechaIngreso" value="<?php echo $row['fechaIngreso'] ?>" class="input">
                      </td>
                    	<td align="left"><span id="msg_fechaIngreso"></span>&nbsp;</td>
          			</tr>          	
          			<tr>
                    	<td align="right"><label>Datos complementarios :</label></td>
                    	<td align="left">
                            <textarea name="complementario" id="complementario" class="textarea" rows="3">
								<?php echo $row['complementario'] ?>
							</textarea>
                      </td>
                    	<td align="left"><span id="msg_complementario"></span>&nbsp;</td>
          			</tr>                                   			
  			   </table>               				          
        </div>
  			<!--<div id="step-4">
            <h2 class="StepTitle">Step 4: Other Details</h2>	
            <table cellspacing="3" cellpadding="3" align="center">
          			<tr>
                    	<td align="center" colspan="3">&nbsp;</td>
          			</tr>        
          			<tr>
                    	<td align="right">Hobbies :</td>
                    	<td align="left">
                    	  <input type="text" id="phone" name="phone" value="" class="txtBox">
                      </td>
                    	<td align="left"><span id="msg_phone"></span>&nbsp;</td>
          			</tr>          			
          			<tr>
                    	<td align="right">About You :</td>
                    	<td align="left">
                            <textarea name="address" id="address" class="txtBox" rows="5"></textarea>
                      </td>
                    	<td align="left"><span id="msg_address"></span>&nbsp;</td>
          			</tr>                                   			
  			   </table>                 			
        </div>-->
  		</div>
<!-- End SmartWizard Content -->  		
</form> 
  		
</td></tr>
</table> 
	 
	</div> <!-- end #content -->
	 
	<?php //include('../includes/FooterDiv.php'); ?>	
	<?php include('../includes/footerFinal.php'); ?> 
	 
	        </div> <!-- End #wrapper -->
	 
	    </body>
	 
	</html>