<?
include "../serv_db_simple_connect.php"; 
	include "../serv_db_tables_name.php" ;	//	ALL TABLES NAMES 
	
	
	function ArrToSqlOr($cell_name , $condition, $arr)
	{
		$ret_string = " ";
		if(strlen($cell_name) ==0 || strlen($condition) == 0 || count($arr) == 0)
			return 0;
		else
		{
			$arr_size = count($arr);
			for($i=0;$i<$arr_size;$i++)
			{
				$ret_string.= $cell_name . $condition . "'" . $arr[$i] ."'";
				
				if($i<$arr_size-1)
				{
					$ret_string.=" OR ";
				}	
			}
		
		}
		
		return($ret_string);
	}
	
	$exam_id = isset($_POST["examid"])? $_POST["examid"]: 0;
	$limit = isset($_POST["max_question"])? $_POST["max_question"]: 0;
	if($limit == 0)
		$limit = 100;
	$limit = min(200,$limit);
	
	if($exam_id)
	{
		echo "Start build new exam table<br>";
	}
	$arr[0] = "PHP";
	$arr[1] = "MySQL";
	$arr[2] = "ASP";
	$db_exam_new_name = $db_prefix_exam_question . $exam_id;
	$select_condition = ArrToSqlOr("subject_name", "=" , $arr);
	$sql = "CREATE TABLE ". $db_exam_new_name. " 
			(id INT(11) auto_increment primary key)
			SELECT * FROM ". $db_main_data ." 
			WHERE " . $select_condition . "
			LIMIT " . $limit . "";
	//echo $sql;
	
	
    $sql_create_exam = "INSERT INTO " . $db_exam_data . "
	(id_table_exam,id_ip4,id_ip6,id_time_start,id_questions_number,id_answers_number)
	VALUES
	(
		'" . $db_exam_new_name . "',
		'" . "111.111.111.111". "',
		'" . "11:22:aa:ee:ff:cc:dd". "',
		'" . time(). "',
		'" . $limit. "',
		'" . '0' . "'
	)";
	mysql_query($sql_create_exam);

	if(mysql_errno())
		echo "<br/>" . mysql_error() . "<br/>" ;
	else
	{
		mysql_query($sql);
		if(mysql_errno())
			echo "<br/>" . mysql_error() . "<br/>" ;
			
	}
	
	$sql = "SELECT * FROM " . $db_exam_new_name;
	$q = mysql_query($sql);
		if(mysql_errno())
			echo "<br/>" . mysql_error() . "<br/>" ;
	$question_number = mysql_num_rows($q);
	
?>
<strong>Questions number in exam:</strong> <?=$question_number?> <br/>
<strong>Subject:</strong> <br/>
<strong>Time start:</strong><?=time()?> <br/>
<strong>The exam will be saved for </strong>1 weak <br/>

