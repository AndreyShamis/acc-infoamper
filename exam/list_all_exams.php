<?
	include "../serv_db_simple_connect.php"; 
	include "../serv_db_tables_name.php" ;	//	ALL TABLES NAMES 
	
	function table_exists($tablename, $database = false) {

	    if(!$database) {
	        $res = mysql_query("SELECT DATABASE()");
	        $database = mysql_result($res, 0);
	    }

	    $res = mysql_query("
	        SELECT COUNT(*) AS count 
	        FROM information_schema.tables 
	        WHERE table_schema = '$database' 
	        AND table_name = '$tablename'
	    ");

	    return mysql_result($res, 0) == 1;

	}
	
	  $sql = "SELECT * FROM ". $db_exam_data ;
	$q = mysql_query($sql);
	
	$rows = mysql_num_rows($q);
	

?>
<table style="border:1px solid #231245;">
<?
	for($i=0;$i<$rows;$i++)
    {
		$f = mysql_fetch_array($q);	  
?>
<tr>
	<td style="border:1px solid #231245;"> <?=$f["id_table_exam"]?> </td>
	<td style="border:1px solid #231245;"> <?=$f["id_ip4"]?> </td>
	<td style="border:1px solid #231245;"> <?=$f["id_ip6"]?> </td>
	<td style="border:1px solid #231245;"> <?=$f["id_time_start"]?> </td>
	<td style="border:1px solid #231245;"> <?=$f["id_questions_number"]?> </td>
	<td style="border:1px solid #231245;"> <?=$f["id_answers_number"]?> </td>
	<td style="border:1px solid #231245;"> <? 
	if(table_exists($f["id_table_exam"],"infoampe_acc"))
		echo "Exist";
	else
		echo "Table not exist";
	?> </td>  
</tr>	
<?
	}
?>
</table>
