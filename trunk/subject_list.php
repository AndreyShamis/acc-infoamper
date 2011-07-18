
<div>
<?php
include "serv_db_simple_connect.php";

	$sql = "SELECT * FROM tbl_tags LIMIT 100";
    
	$q = mysql_query($sql);
	
	$rows = mysql_num_rows($q);
	
	for($i=0;$i<$rows;$i++)
    {
		$f = mysql_fetch_array($q);
?>
    <span class="tag"><a href="<?=$f["id"]?>"><?=$f["tag_name"]?> </a></span>
<?php
    }
?>
</div>

