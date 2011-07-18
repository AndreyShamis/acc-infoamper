<?php
$question       = isset($_POST['question'])     ? $_POST['question'] : Null;
$question_code  = isset($_POST['question_code'])? $_POST['question_code'] : Null;
$answers        = isset($_POST['question'])     ? $_POST['question'] : Null;
$checks         = isset($_POST['question'])     ? $_POST['question'] : Null;
$time           = isset($_POST['time'])         ? $_POST['time'] : Null;

/*____________________________________________________________________________*/
?>
<form method="post" action="addQuestion.php" style="border: 1px solid #999999;background-color:#e2e1a1;">
<table style="width: 100%;">
<tr>
<td><strong>Question</strong><br /><textarea cols='50' rows='6' id='question' name='question'>How to</textarea></td>
<td><strong>Question Code </strong><br /><textarea cols='50' rows='6' id='question_code' name='question_code'><code>...</code></textarea></td>
</tr>
</table>
    <br />
    


<br />
<?php

    for($i=0;$i<7;$i++)
    {
?>

<div class='left-side'>
      <label>Answer <?=$i+1?> <input type="text" name="var[]" value="Answer <?=$i+1?>" /> </label>
      <label><input style="border: 1px solid #342344;" type='checkbox' name='ans[]' value='' /></label>

 </div>
<?php
}
?>
    <label>Description of right answer to this query : <input type="text" name="quiz_desc" value=""/> </label><br />
	<label>Subject Name <em>Like:PHP,MySQL,etc</em> : <input type="text" name="subject_name" value="DEF"/> </label><br />
    <input type="submit" value="Load" />
 

</form>