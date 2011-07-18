<?
	$db_name = "infoampe_acc";
	$db_user = "infoampe_acc";
	$db_pass = "7257598";
	$db_serv = "localhost";
	
	mysql_connect($db_serv,$db_user ,$db_pass) or die(mysql_error());
 
	mysql_select_db($db_name) or die(mysql_error());


?>