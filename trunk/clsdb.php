<?php
/* _|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_| */
/*                  DATABASE CONNECTION CLASS .......>>>>>>>>>>>>>>>
                                                by qpayct 28.07.2010          */
/* _|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_| */
class clsdb
{
    static protected $DB = "infoampe_acc";      //  database.
    static protected $HN = "localhost";         //  hostname.
    static protected $UN = "infoampe_acc";      //  username.
    static protected $PW = "7257598";           //  password.
    static protected $dblink;                   //  connection descriptor.

    protected $res;                             //  sql resource.
    protected $ip;                              //  sql resource.

/* _|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_| */
    public function __construct()
    {
        $this->ip = self::getRealIpAddr();
    }
/* _|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_| */
    private static function connect()
    {   // DB connection.
        self::$dblink = mysql_connect(self::$HN, self::$UN, self::$PW);
        if(!is_resource(self::$dblink)) die('is_resource error');
        if(!mysql_select_db(self::$DB, self::$dblink)) die(mysql_error());
        //mysql_query ("SET NAMES utf8");
        mysql_set_charset('utf8', self::$dblink);
        mysql_query("set character_set_client='utf8'");
        mysql_query("set character_set_results='utf8'");
        //mysql_query("set collation_connection='utf8_general_ci'");
    }
/* _|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_| */
    public function execute($query)
    {
        //  if no database connection then connect.
        if(!self::$dblink)
			self::connect();
        //  return sql query result.
        if(!$this->res = mysql_query($query))
            return mysql_errno() ."|". mysql_error() ."|". $query;
        else
            return (TRUE);
    }
/* _|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_| */
//
    public function dbOpenAssoc()
    {
        $tbl = "
            <div class='th-line'>
                <div style=\"width:5%;\">ID</div>
                <div style=\"width:5%;\">Subject</div>
                <div style=\"width:80%;\">Question</div>
                <div style=\"width:9%;\">Date</div>

            </div>
        ";

        while($row = mysql_fetch_assoc($this->res))
        {
            if(empty($row)) $row = '&nbsp;';
            $tbl.= "<div class='tr-line'>
                    <div style=\"width:5%;\">&nbsp;". htmlspecialchars($row['id'], ENT_NOQUOTES, "UTF-8") ."</div>
                    <div style=\"width:5%;\">&nbsp;". htmlspecialchars($row['subject_name'], ENT_NOQUOTES, "UTF-8") ."</div>
                    <div style=\"width:80%;text-align:left;\">&nbsp;". htmlspecialchars($row['quiz_question'], ENT_NOQUOTES, "UTF-8") ."</div>
                    <div style=\"width:9%;\">&nbsp;". htmlspecialchars($row['dt'], ENT_NOQUOTES, "UTF-8") ."</div>

                    <div style=\"display:none;\">
                        <div style=\"width:5%;\">Correct Answer</div>

                        <div style=\"width:4%;\">Answer 1</div>
                        <div style=\"width:1%;\">V</div>
                        <div style=\"width:4%;\">Answer 2</div>
                        <div style=\"width:1%;\">V</div>
                        <div style=\"width:4%;\">Answer 3</div>
                        <div style=\"width:1%;\">V</div>
                        <div style=\"width:4%;\">Answer 4</div>
                        <div style=\"width:1%;\">V</div>
                        <div style=\"width:4%;\">Answer 5</div>
                        <div style=\"width:1%;\">V</div>
                        <div style=\"width:4%;\">Answer 6</div>
                        <div style=\"width:1%;\">V</div>
                        <div style=\"width:4%;\">Answer 7</div>
                        <div style=\"width:1%;\">V</div>

                        <div style=\"width:5%;\">URL 1</div>
                        <div style=\"width:5%;\">URL 2</div>
                        <div style=\"width:5%;\">URL 3</div>

                        <div style=\"width:5%;\">Answer</div>

                        <div style=\"width:5%;\">". htmlspecialchars($row['correct_answer'], ENT_NOQUOTES, "UTF-8") ."</div>

                        <div style=\"width:4%;\">". htmlspecialchars($row['answer_1'], ENT_NOQUOTES, "UTF-8") ."</div>
                        <div style=\"width:1%;\">". htmlspecialchars($row['var_1'], ENT_NOQUOTES, "UTF-8") ."</div>
                        <div style=\"width:4%;\">". htmlspecialchars($row['answer_2'], ENT_NOQUOTES, "UTF-8") ."</div>
                        <div style=\"width:1%;\">". htmlspecialchars($row['var_2'], ENT_NOQUOTES, "UTF-8") ."</div>
                        <div style=\"width:4%;\">". htmlspecialchars($row['answer_3'], ENT_NOQUOTES, "UTF-8") ."</div>
                        <div style=\"width:1%;\">". htmlspecialchars($row['var_3'], ENT_NOQUOTES, "UTF-8") ."</div>
                        <div style=\"width:4%;\">". htmlspecialchars($row['answer_4'], ENT_NOQUOTES, "UTF-8") ."</div>
                        <div style=\"width:1%;\">". htmlspecialchars($row['var_4'], ENT_NOQUOTES, "UTF-8") ."</div>
                        <div style=\"width:4%;\">". htmlspecialchars($row['answer_5'], ENT_NOQUOTES, "UTF-8") ."</div>
                        <div style=\"width:1%;\">". htmlspecialchars($row['var_5'], ENT_NOQUOTES, "UTF-8") ."</div>
                        <div style=\"width:4%;\">". htmlspecialchars($row['answer_6'], ENT_NOQUOTES, "UTF-8") ."</div>
                        <div style=\"width:1%;\">". htmlspecialchars($row['var_6'], ENT_NOQUOTES, "UTF-8") ."</div>
                        <div style=\"width:4%;\">". htmlspecialchars($row['answer_7'], ENT_NOQUOTES, "UTF-8") ."</div>
                        <div style=\"width:1%;\">". htmlspecialchars($row['var_7'], ENT_NOQUOTES, "UTF-8") ."</div>

                        <div style=\"width:5%;\">". htmlspecialchars($row['url_1'], ENT_NOQUOTES, "UTF-8") ."</div>
                        <div style=\"width:5%;\">". htmlspecialchars($row['url_2'], ENT_NOQUOTES, "UTF-8") ."</div>
                        <div style=\"width:5%;\">". htmlspecialchars($row['url_3'], ENT_NOQUOTES, "UTF-8") ."</div>

                        <div style=\"width:5%;\">". htmlspecialchars($row['quiz_answer'], ENT_NOQUOTES, "UTF-8") ."</div>
                    </div>
            </div>";
        }
        return ($tbl);
    }
/* _|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_| */
//
    public function dbAddQuestion(&$values)
    {
        //echo '<pre>';print_r($_POST);echo '</pre>';
        //  if no database connection then connect.
        if(!self::$dblink)
		  	self::connect();
		$sql = "INSERT INTO `tblacc_data` SET ";
		$input_size = count($values);
		$counter=0;

		foreach($values as $key=>$val)
		{
			$counter++;
			$sql.= " " . $key . "='" . mysql_real_escape_string($val) . "' ";
			if($counter < $input_size)
				$sql .= ",";
		}
		mysql_query($sql);

		if(mysql_errno())
			echo mysql_errno() ."|". mysql_error() ."|". $sql;
    }
/* _|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_| */
//
    public function num_rows() {if(mysql_num_rows($this->res)) return mysql_num_rows($this->res);}
/* _|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_| */
//
    public function free_results() {mysql_free_result($this->res);}
/* _|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_| */
//
    function sql_result() {if(mysql_result($this->res,1)) return mysql_result($this->res,1);}
/* _|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_| */
//
    private function getRealIpAddr() {
        if (getenv("HTTP_CLIENT_IP") && strcasecmp(getenv("HTTP_CLIENT_IP"),"unknown")){$my_ip = getenv("HTTP_CLIENT_IP");}
        elseif (getenv("HTTP_X_FORWARDED_FOR") && strcasecmp(getenv("HTTP_X_FORWARDED_FOR"), "unknown")){$my_ip = getenv("HTTP_X_FORWARDED_FOR");}
        elseif (getenv("REMOTE_ADDR") && strcasecmp(getenv("REMOTE_ADDR"), "unknown")){$my_ip = getenv("REMOTE_ADDR");}
        elseif (!empty($_SERVER['REMOTE_ADDR']) && strcasecmp($_SERVER['REMOTE_ADDR'], "unknown")) {$my_ip = $_SERVER['REMOTE_ADDR'];}
        else {$my_ip = "unknown";}
        return($my_ip);
    }
/* _|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_|_| */
}
?>