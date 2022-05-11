<?php
	$info=$_SERVER['HTTP_USER_AGENT'];
	$ip=$_SERVER['REMOTE_ADDR'];
	
	$brow;
	$so;
	//navegador
	if(strpos($info,'Firefox')!==false)
	{
		$brow="firefox";
	}
	elseif(strpos($info,'Opera')!==false)
	{
		$brow="opera";
	}
	elseif(strpos($info,'MSIE')!==false)
	{
		$brow="iexplore";
	}
	elseif(strpos($info,'Chrome')!==false)
	{
		$brow="chrome";
	}
	elseif(strpos($info,'Safari')!==false)
	{
		$brow="safari";
	}
	else
	{
		$brow="Unknow";
	}
	//sistema operativo
	if(strpos($info,'Windows NT 5')!==false)
	{
		$so="winxp";
	}
	elseif(strpos($info,'Windows NT 6')!==false)
	{
		$so="winvista";
	}
	elseif(strpos($info,'Windows NT 7')!==false)
	{
		$so="win7";
	}
	elseif(strpos($info,'Windows NT 8')!==false)
	{
		$so="win8";
	}
	elseif(strpos($info,'debian')!==false)
	{
		$so="debian";
	}
	elseif(strpos($info,'ubuntu')!==false)
	{
		$so="ubuntu";
	}
	else
	{
		$so="unknow";
	}
?>