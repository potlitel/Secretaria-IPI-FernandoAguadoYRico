function actualizaReloj()
{ 
	marcacion = new Date() 
	Hora = marcacion.getHours() 
 	Minutos = marcacion.getMinutes() 
	Segundos = marcacion.getSeconds()  
	if (Hora<=9)
	Hora = "0" + Hora
	if (Minutos<=9)
	Minutos = "0" + Minutos
	if (Segundos<=9)
	Segundos = "0" + Segundos		
	var Dia = new Array("Domingo", "Lunes", "Martes", "Mi&eacute;rcoles", "Jueves", "Viernes", "S&aacute;bado", "Domingo");
	var Mes = new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
	var Hoy = new Date();
	var Anio = Hoy.getFullYear();
	var Fecha = Dia[Hoy.getDay()] + ", " + Hoy.getDate() + " de " + Mes[Hoy.getMonth()] + " de " + Anio + " | ";
	var Inicio, Script, Final, Total	
	Script = Fecha + Hora + ":" + Minutos + ":" + Segundos 
	Total = Script
	document.getElementById("Fecha_Reloj").innerHTML = Total
	setTimeout("actualizaReloj()",1000) 
}