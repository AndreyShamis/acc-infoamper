<?php
	include "clsdb.php";
	
	$db = new clsdb();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Automated Certification Coach (ACC)</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <!--[if IE]>
    	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if IE 7]>
    	<link rel="stylesheet" href="templ1/ie7.css" type="text/css" media="screen" />
    <![endif]-->
    <link rel="stylesheet" href="templ1/style.css" type="text/css" media="screen" />
    <link rel='stylesheet' id='cfq-css'  href='style_chrome.css' type='text/css' media='all' />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery.anchor.js" type="text/javascript"></script>
    <script src="js/jquery.fancybox-1.2.6.pack.js" type="text/javascript"></script>
<? include "google_analytics.inc.php";?> 
</head>

<body>
    <div id='page'>

        <!-- HEADER -->
        <div id='header'>
            <div id='header-top'>
                 &nbsp;
            </div>
            <div id='header-mid'>
                <div id='header-mid-left'>&nbsp;</div>
                <div id='header-mid-center'>
                    <h1><a class="introlink anchorLink"  href="#intro">Automated Certification Coach (ACC)</a></h1>
                </div>
                <div id='header-mid-right'>&nbsp;</div>
            </div>

        </div>
            <div class='menu'>
                <?php include_once("main_links_menu.php");?>
            </div>
        <!-- CONTENT -->
        <div id='content'>
            <div id='content-left'>
                &nbsp;
            </div>
            <div id='content-right'>
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
            </div>
        </div>


<!--
    	<section id="portfolio"> <!-- HTML5 section tag for the portfolio 'section' -->
<!--
    		<h2 class="work">My Portfolio</h2>
    		<ul class="work">
    			<li></li>
    		</ul>
    	</section>
    	<section id="contact"> <!-- HTML5 section tag for the contact 'section' -->
<!--     		<h2 class="contact">Contact Me</h2>
    		<p>I whistled forBel-Air</p>
    		<form id="contactform">
    			<p><label for="name">Name</label></p> 
    			<input type="text" id=name name=name placeholder="First and last name" required tabindex="1" />
    			<p><label for="email">Email</label></p>
    			<input type="text" id=email name=email placeholder="example@domain.com" required tabindex="2" /> 
    			<p><label for="comment">Your Message</label></p>
    			<textarea name="comment" id="comment" tabindex="4"></textarea>
       			<input name="submit" type="submit" id="submit" tabindex="5" value="Send Message" />
    		</form>
    	</section>



    -->
    </div>
    <!-- FOOTER -->
    <div id='footer'>
        <div id='footer-left'>&nbsp;</div>
        <div id='footer-center'>
            Alexey & Andrey<br />
            <strong><a href="http://www.acc.infoamper.com">ACC</a></strong><br />
            <a href="About_php_sertification.php">About PHP Sertification</a>
        </div>  <br />
		<div  id='footer-center'>
		<a href="http://www.infoamper.com">http://www.infoamper.com</a> || 
		<a href="http://www.armade.net">http://www.armade.net</a></div>
        <div id='footer-right'>&nbsp;</div>
    </div>

</body>
</html>
