<h3>Question list</h3>
<?php
	$subject = isset($_GET["subject"])?(int)$_GET["subject"]:0;
	$subject_name = isset($_GET["subject_name"])?(int)$_GET["subject_name"]:"";
	if($subject > 0 && strlen($subject_name)>2 && strlen($subject_name)<10)
	{
		$select_condition = " WHERE subject_name = '".$subject_name."'";

	}
    if($db->execute("SELECT * FROM `tblacc_data`  ".$select_condition) == TRUE)
  	    echo $db->dbOpenAssoc();
?>