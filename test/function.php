<?php
	//identificar navegador
	{
		if(strpos($browser,'Firefox')!==false)
		{
			$nav="firefox";
		}
		elseif(strpos($browser,'Opera')!==false)
		{
			$nav="opera";
		}
		elseif(strpos($browser,'MSIE')!==false)
		{
			$nav="iexplore";
		}
		else
		{
			$nav="unknow";
		}
	}
	
	//identificar sistema operativo
	{
		if(strpos($browser,'Windows NT 5.1')!==false)
		{
			$sys="Windows XP";
		}
		elseif(strpos($browser,'Windows NT 6')!==false)
		{
			$sys="Windows Vista";
		}
		elseif(strpos($browser,'Windows NT 7')!==false)
		{
			$sys="Windows 7";
		}
		else
		{
			$sys="unknow";
		}
	}
	
	//dentificarnivel de acceso
	function nivel_acceso()
	{
		if(!isset($_SESSION["NIVEL"]))
		{
			header("location:index.php");
		}		
	}
?>