<?php


//
$subject        = isset($_POST['subject_name'])     ? $_POST['subject_name']    : Null; //
$question       = isset($_POST['question'])         ? $_POST['question']        : Null; //
$question_code  = isset($_POST['question_code'])    ? $_POST['question_code']   : Null; //
$desc           = isset($_POST['quiz_desc'])        ? $_POST['quiz_desc']       : Null; //
//
$answers        = isset($_POST['ans'])              ? $_POST['ans']             : Null; //
$checks         = isset($_POST['chkans'])           ? $_POST['chkans']          : Null; //
//
$urls           = isset($_POST['url'])              ? $_POST['url']             : Null; //

//$time           = isset($_POST['time'])             ? $_POST['time']            : Null; //

/*____________________________________________________________________________*/
$err='';

//  проверка колличества правильных ответов
if(count($checks) == 1)
    $data['correct_answer'] = (int)key($checks);
elseif(count($checks) > 1)
    $data['correct_answer'] = 0;
else
    $err.= 'No Answer. Please try again<br />';
/*____________________________________________________________________________*/
//  проверяем данные в массиве ссылок
$urls = array(
    'url_1'     => $urls['url_1'],
    'url_2'     => $urls['url_2'],
    'url_3'     => $urls['url_3']
);
$args = array(
    'url_1'   => FILTER_VALIDATE_URL,
    'url_2'   => FILTER_VALIDATE_URL,
    'url_3'   => FILTER_VALIDATE_URL
);
if(filter_var_array($urls, $args))
{
    $data['url_1'] = $urls[1];
    $data['url_2'] = $urls[2];
    $data['url_3'] = $urls[3];
} else {
    $err.= 'please check your URLs<br />';
}
/*____________________________________________________________________________*/
//  проверяем вопрос
if(!strlen($question) < 1001)
{
    $err.= 'question field to big.<br />';
}
/*____________________________________________________________________________*/
//  проверяем код вопроса
if(!strlen($question_code) < 1001)
{
    $err.= 'question_code field to big.<br />';
}
/*____________________________________________________________________________*/
//  проверяем массив возможных ответов
if(count($answers) > 1)
{
    foreach($answers as $key => $val)
        if(filter_var()) $data['answer_'. $key] = $val;
} else {
    $err.= '2 answers minimum required.<br />';
}
/*____________________________________________________________________________*/
if(!$err)
{
    $db->dbAddQuestion($data);
}
/*____________________________________________________________________________*/
?>
<form action="?pg=addQuestion"  method="post" style="border: 1px solid #999999;background-color:#e2e1a1;">
    <table style="width: 100%;">
      <br />
      <tr>
        <td colspan='2'>
            Subject Name <em>Like:PHP,MySQL,etc</em> : <br /><br />
            <input type="text" name="subject_name" value="DEF"/>
        </td>
      </tr>
      <tr>
        <td style='width:50%;text-align:left;'>
            <strong>Question</strong><br /><br />
            <textarea cols='50' rows='6' id='question' name='question'>How to</textarea>
        </td>
        <td style='width:50%;text-align:left;'>
            <strong>Question Code </strong><br /><br />
            <textarea cols='50' rows='6' id='question_code' name='question_code'><code>...</code></textarea>
        </td>
      </tr>
      <?php
      for($i=1;$i<8;$i++)
      {
      ?>
      <tr>
        <td style='width:50%;text-align:right;font-size:18pt;'>
            Answer <?=$i?> : &nbsp;&nbsp;
        </td>
        <td style='width:50%;text-align:left;'>
            <input type='text' name='ans[<?=$i?>]' value='Answer <?=$i?>' />
            <input type='checkbox' name='chkans[<?=$i?>]' />
        </td>
      </tr>
      <?php
      }
      ?>
      <tr>
        <td style='width:50%;text-align:right;'>
            Description of right answer to this query :
        </td>
        <td style='width:50%;text-align:left;'>
            <input type="text" name="quiz_desc" value=""/>
        </td>
      </tr>
      <tr>
      <td colspan='2'>
      <?php
      for($i=1;$i<4;$i++)
      {
      ?>
        <div style='float:left;width:33%;'>
            URL <?=$i?> :<br /><br />
            <input type="text" name="url[<?=$i?>]" value=""/>
        </div>
      <?php
      }
      ?>
      </td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" value="Add" /></td>
      </tr>
    </table>
</form>