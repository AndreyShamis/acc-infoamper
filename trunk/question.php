<?



	include "../serv_db_simple_connect.php"; 
	include "../serv_db_tables_name.php" ;	//	ALL TABLES NAMES 

	include "cookie.php";
	$exam_id = isset($_GET["exam_id"])?$_GET["exam_id"]:0;
	if(!$exam_id)
	{ 
		 print_r(ReadAllExams($cookie_delimiter));
	?>
	
	
	
	<?	
	
	}

?>
<html>
<body>
Java Script Here(More AJAX)  <br />                     
<form name="answerForm" method="post" action="" id="answerForm">
<div>
<input type="hidden" name="exam_id" value="<?=$exam_id?>" /> Hidden : <?=$exam_id?><br />
<input type="hidden" name="command" value="" /> Hidden : Command<br />
</div>
<script type="text/javascript">
var answerForm = document.forms['answerForm'];

if (!answerForm) 
{
    answerForm = document.answerForm;
}

function PostAnswer(eventTarget, eventArgument) 
{       
	alert(answerForm.exam_id.value);    
    if (!answerForm.onsubmit || (answerForm.onsubmit() != false)) 
	{
        answerForm.command.value = eventTarget;
        //answerForm.__EVENTARGUMENT.value = eventArgument;
        answerForm.submit();
		alert(answerForm.exam_id.value);
    	
	}
}
</script>                       
<?
		
	$i=10;
	while($i)
	{
?><span onclick="javascript:alert('sss');PostAnswer('answer<?=$i?>$exam_id<?=$exam_id?>','');" style="border: 1px solid #008080;font-size: 24px;">ANSWER </span>
<?
		$i--;
	}
?>           
</form>




</body>
</html>
