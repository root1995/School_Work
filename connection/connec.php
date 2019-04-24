<?php
function connex($base)
{
	include_once("myparam.php");
	$connect=@mysql_connect(mysql_host,Mysql_user,mysql_passw);
$idbase=mysql_select_db($base,$connect);
if(!$connect | !$idbase){
	
	echo "erreur";
}	
	return $connect;
}



?>