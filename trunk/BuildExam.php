<?php

?>

<h1>Build Exam</h1>

<form method="post">
<input type="hidden" value="<? echo 'examid'. md5('examid' . time() .rand(1000,50000)) .rand(1000,50000);?>" name="examid"/>
<div>
<label>Select subject </label>

<?

	for($t=0;$i<10;$i++)
	{


?>
	<label>Subject <?=$i+1?></label><br/>
<?

	}
?>
<div> Max question for exam: <em> 0 = Maximum </em><input type="text" name="max_question" value="0" /></div>
</div>
<input type="submit" value="Build" />
</form>
