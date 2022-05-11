<style type="text/css">
	.style2 
	{
	color: #000000;
	font-weight: bold;
	}
	
	.style4 {
	color: #000000;
	font-weight: bold;
	font-size: 12px;
	font-family: Georgia, "Times New Roman", Times, serif;
	}

	.style5 {
		font-weight: bold;
		font-size: 12px;
		font-family: Georgia, "Times New Roman", Times, serif;
		color: #0000FF;
	}
</style>
<link rel="stylesheet" href="../css/VerticalNavstyle.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>

<script>
 $(function($) { 
	
	function loading()
	{ 
	var msg = '<h4> <img src="process1321.gif" width="20" height="20"> Espere unos segundos por favor... </h4>';
	
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
	
	$("#newOperator").click(function() { 
        loading();
		setTimeout($.unblockUI, 20000); 
    });
	$("#editOperator").click(function() { 
        loading();
    });
	$("#delOperator").click(function() { 
        loading();
    });
	$("#listOperator").click(function() { 
        loading();
    });
	$("#changePass").click(function() { 
        loading();
    });
});
 </script>

<?php sleep(3); ?>	
<div id="sidebar">	 
		<!--<pre class="style4"><img src="../images/preferences-system_002.png"></img> Opciones de Acceso</pre>
	    <pre class="style4"><img src="../images/contact-new.png"></img> <a href="#">Crear nuevo usuario</a></pre>
	    <pre class="style4"><img src="../images/user-trash-full.png"></img> <a href="#">Eliminar usuario</a></pre>
	    <pre class="style4"><img src="../images/mail-reply-all_002.png"></img> <a href="#">Listar usuarios</a></pre>
		<pre class="style4"><img src="../images/system-lock-screen_003.png"></img> <a href="#">Cambiar mi clave</a></pre>-->
 
		<!-- Start css3menu.com BODY section -->
		</br>
		<ul id="css3menu1" class="topmenu">
		<input type="checkbox" id="css3menu-switcher" class="switchbox"><label onclick="" class="switch" for="css3menu-switcher"></label>	<li class="topfirst" id="newOperator"><a href="NuevoOperador.php" style="width:141px;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAArUlEQVQ4jaWSsQ3CQAxFU2QESsZgAApKCgoGoEzJDimuZBQGSJEREpERKClSUlA8GkeyTh/pTL50Ov2z/WxZV1VCQA20wNNOAmqVK2XFudoIYBSAMQKYBOARASQBSBHAuiU60A24liY31m0wf3Hjn+2tt5xGAfziTsAx83vnJwWYXcIAbJzfWvdFswLkOti4L2CXB0sAPXAHOrvDAKy4U4FSwAd4rwH8lPwL/+gL1QX4CgEKTs4AAAAASUVORK5CYII=" alt=""/>Crear nuevo usuario</a></li>
			<li class="topmenu" id="editOperator"><a href="NuevoOperador.php" style="width:141px;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAjElEQVQ4jeWPIRKDQBAEV94TIiORyEieEhmJ4EUgETzhZGQkT4hEIBGNmVQOENzGZszUiu6pNXMEKIABmIEIXD28AS+2iZ7lh/qdCKZc+APVu7vzwMtOEoFLLtwDZSK5e5Z7IKgBRu/yP8AhgQcXLMGNb0ZJ8mAJGo6JQHUKS9D+DEvw1M+13gnZsJmtYm+6JPcz8l8AAAAASUVORK5CYII=" alt=""/>Modificar usuario</a></li>
			<li class="topmenu" id="delOperator"><a href="NuevoOperador.php" style="width:141px;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAx0lEQVQ4jZWSoQ7CMBRF9wWEJXzBUOgZFGoWReYJYkEgECRTKCwJCRZF+Ca+AAdyhqTiYC5k2d66ck3T3vvOy2sbRYaAC23drKwp4AUMG2eur2gHVEbnpipgawFCin+Q4HGCBSwBF9DdARsLcP5jhKsF2MuMtafmoTVW5mgB1jITDyBRprQAC5mpB5Aqs7IAM5mZB5ApM7cAE5m5B5ArM7UAI5mFB1AoM24BFHh+L6gDUAJvYNAFuHc9fE0Ps1iAA/2/8VSv+QDGHPQ5mfggeAAAAABJRU5ErkJggg==" alt=""/>Eliminar usuario</a></li>
			<li class="topmenu" id="listOperator"><a href="NuevoOperador.php" style="width:141px;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAzklEQVQ4ja3QIW5CQRSFYUQFogKBQCC6hAoWgegCEAhkl4BogqhAIitZAKLsgiUgEIgnKhEVFYivokw6GebN4yUcN8n8597/djr3Dh7xgimGbeE+Tv7zjac2BW+uM29TsEjgBXoXpTG6TQUfEXzIKJ2Kd0k2WNYovTdtcQjuGSVYNxVMLh/HiVLIpgQPoqmvNRssc2APK/xEHyt0IyX4wkMKP+OYmRS2mMTv3PRdBtxjhmGiscKgeMSCUsjZ33H7dXBJKU6FUa5gewMc8vkLYvkZBhpIQPAAAAAASUVORK5CYII=" alt=""/>Listar usuarios</a></li>
			<li class="toplast" id="changePass"><a href="NuevoOperador.php" style="width:141px;"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAuklEQVQ4jZ3QIZLCQBCFYcRKJGIFAoGI3APsURAcAcF9kJEIRGTEij3AyghkJAKBQHwImioIM0vCMzPV3e/vVz0avRCmKPGH71fzXfMSB1RocewFia07V1VRK3pBMI7Bm1oUvSGY4OxRgyEbz0pB2hxgnkjRhVSoc4AVTgnADVJFv8iZfyJFDgLr/8yf8eb0i48h5i9s4398ip4zJxIWmHWLCzSpzckLJ6hlzDeDjHeAunuhoYD9W8bQBcxo7TUZb7jBAAAAAElFTkSuQmCC" alt=""/>Cambiar mi clave</a></li>
		</ul><p class="_css3m"><a href="http://css3menu.com/">css drop down menu</a> by Css3Menu.com</p>
</div>
<!-- end #sidebar -->