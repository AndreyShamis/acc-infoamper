<?php
header('Cache-Control: no-cache, must-revalidate');
header('Content-Type: text/html; charset=utf-8');

include 'serv_function.php';
include 'serv_db_tables_name.php' ;	//	ALL TABLES NAMES
include 'clsdb.php';
include "ClassTemplate.php";

 $p =   isset($_GET['pg'])  ? $_GET['pg']   : 'Home';

$cl = 	isset($_GET['cl'])  ? $_GET['cl'] 	: 1;
$di = 	isset($_GET['di'])  ? $_GET['di'] 	: 25;

$db = new clsdb();

?>
<!DOCTYPE html>
<html>
<head>
    <title>Automated Certification Coach (ACC)</title>
    <meta http-equiv='content-type' content='text/html; charset=UTF-8' />
    <!--[if IE]>
    	<script src='http://html5shiv.googlecode.com/svn/trunk/html5.js'></script>
    <![endif]-->
    <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js' type='text/javascript'></script>
    <script src='js/user_agent_loader.js' type='text/javascript'></script>
	<script src='js/js.js' type='text/javascript'></script>

    <link rel='stylesheet' href='css/styles.css'    type='text/css' />
    <link rel='stylesheet' href=''                  type='text/css' id='browser_version' />

    <? include 'google_analytics.inc.php';?>
</head>

<body>
    <div id='page'>
        <!-- HEADER -->
        <div id='header'>
            <div id='header-mid'>
                <div id='header-mid-left'>
                    &nbsp;
                </div>
                <div id='header-mid-center'>
                    <div class="logo"><font color='red'>A</font>utomated <font color='blue'>B</font>rowser <font color='darkviolet'>C</font>ertification </div>
                </div>
                <div id='header-mid-right'>&nbsp;</div>
            </div>
        </div>

        <!-- CONTENT -->
        <div id='content'>
            <div id='content-left'>
                &nbsp;
            </div>
            <div id='content-center'>
                <div id='menu'><?
                include "main_links_menu.php";
             ?></div>
                <div id='menu-content'>
                    <br />
                    <br />
                    <?php
                        if($_GET['pg'] == 'Build-Exam')
                            include 'BuildExam.php';
                        else if($_GET['pg'] == 'About-PHP-Certification')
                            include 'About_php_sertification.php';
                        else if($_GET['pg'] == 'addQuestion')
                            include 'addQuestion.php';
                        else if($_GET['pg'] == 'question-list')
                            include 'list_questions.php';
                        else if($_GET['pg'] == 'subject-list')
                            include 'subject_list.php';
                        else if($_GET['pg'] == 'addNew-TAG')
                            include 'serv_add_new_tag.php';
                    ?>
                    <br />
                    <!-- FOOTER -->
                    <div id='footer'>
                        <div id='footer-left'>
                            &nbsp;
                        </div>
                        <div id='footer-center'>
                            <strong><a href='http://www.acc.infoamper.com' title="ACC">ACC - Automated Certification Coach</a></strong><br />
                            <div style='float:left;width:50%;'>
                              <a href='mailto:lolnik@gmail.com'>lolnik</a><br />
                              <a href='http://www.infoamper.com' title="www.infoamper.com">http://www.infoamper.com</a>
                            </div>
                            <div style='float:left;width:50%;'>
                              <a href='mailto:qpayct@gmail.com'>qpayct</a><br />
                              <a href='http://www.armade.net'>http://www.armade.net</a>
                            </div>
                        </div>
                        <div id='footer-right'>
                            &nbsp;
                        </div>
                    </div>
                </div>
            </div>
            <div id='content-right'>&nbsp;</div>
        </div>

    </div>
</body>
</html>
