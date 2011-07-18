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
            <div id='header-sub'>
                <?php include_once("main_links_menu.php");?>
            </div>
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
                ?>
            </div>
        </div>

        <!-- FOOTER -->
        <div id='footer'>
            <div id='footer-left'>&nbsp;</div>
            <div id='footer-center'>
                Alexey & Andrey<br />
                <strong><a href="http://www.acc.infoamper.com">ACC</a></strong><br />
                <a href="About_php_sertification.php">About PHP Sertification</a>
            </div>
            <div id='footer-right'>&nbsp;</div>
        </div>






<!--
    	<section id="portfolio"> <!-- HTML5 section tag for the portfolio 'section' -->
<!--
    		<h2 class="work">My Portfolio</h2>

    		<ul class="work">
    			<li></li>
    		</ul>

    	</section>

    	<section id="about"> <!-- HTML5 section tag for the about 'section' -->

 <!--    		<h2 class="about">About Me</h2>

    		<p>Now this is a story</p>

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
<!-- Google Analytics -->
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-24598788-1']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
    </div>
</body>
</html>
