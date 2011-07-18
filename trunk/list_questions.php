<h3>Question list</h3>
<?php
    if($db->execute("SELECT * FROM `tblacc_data` ") == TRUE)
  	    echo $db->dbOpenAssoc();
?>