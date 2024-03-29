<!DOCTYPE html>
<html lang="en">

<!-- This is a demonstration of HTML5 goodness with healthy does of CSS3 mixed in -->
<head>
    
    <title>One Page Portfolio with HTML5 and CSS3</title>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    			
    <!--[if IE]>
    	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    
    <!--[if IE 7]>
    	<link rel="stylesheet" href="ie7.css" type="text/css" media="screen" />
    <![endif]-->
    
    <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.0/jquery.min.js" type="text/javascript"></script>
    <script src="js/jquery.anchor.js" type="text/javascript"></script>
    <script src="js/jquery.fancybox-1.2.6.pack.js" type="text/javascript"></script>
    
</head>

<body>

    <header> <!-- HTML5 header tag -->
    
    	<div id="headercontainer">
    
    		<h1><a class="introlink anchorLink" href="#intro">Web Design Portfolio</a></h1>
    		
    		<nav> <!-- HTML5 navigation tag -->
    			<ul>
    				<li><a class="introlink anchorLink" href="#intro">Intro</a></li>
    				<li><a class="portfoliolink anchorLink" href="#portfolio">Portfolio</a></li>
    				<li><a class="aboutlink anchorLink" href="#about">About</a></li>
    				<li><a class="contactlink anchorLink" href="#contact">Contact</a></li>
    			</ul>				
    		</nav>
    	
    	</div>
    
    </header>

    <section id="contentcontainer"> <!-- HTML5 section tag for the content 'section' -->
    
    	<section id="intro">
    	
    		<h2 class="intro">Hand-coded <strong>HTML</strong> and <strong>CSS</strong> is what I do. <span class="sub">It's what I'm good at so why not?</span></h2>
    		
    		<a class="featured" href="http://inspectelement.com"><img src="images/featured.gif" alt="Inspect Element large preview" /></a>
    		
    		<p>Featured Project: <a href="#">Inspect Element</a></p>
    				
    	</section>

    	<section id="portfolio"> <!-- HTML5 section tag for the portfolio 'section' -->
    	
    		<h2 class="work">My Portfolio</h2>
    			
    		<ul class="work">
    			<li>
    				<a href="http://inspectelement.com"><img src="images/inspectelementSmall.jpg" alt="Inspect Element preview" /></a>
    			</li>
    			<li>
    				<a href="http://inspectelement.com"><img src="images/inspectelementSmall.jpg" alt="Inspect Element preview" /></a>
    			</li>
    			<li>
    				<a href="http://inspectelement.com"><img src="images/inspectelementSmall.jpg" alt="Inspect Element preview" /></a>
    			</li>
    			<li>
    				<a href="http://inspectelement.com"><img src="images/inspectelementSmall.jpg" alt="Inspect Element preview" /></a>
    			</li>
    			<li>
    				<a href="http://inspectelement.com"><img src="images/inspectelementSmall.jpg" alt="Inspect Element preview" /></a>
    			</li>
    			<li>
    				<a href="http://inspectelement.com"><img src="images/inspectelementSmall.jpg" alt="Inspect Element preview" /></a>
    			</li>
    			<li>
    				<a href="http://inspectelement.com"><img src="images/inspectelementSmall.jpg" alt="Inspect Element preview" /></a>
    			</li>
    			<li>
    				<a href="http://inspectelement.com"><img src="images/inspectelementSmall.jpg" alt="Inspect Element preview" /></a>
    			</li>
    			<li>
    				<a href="http://inspectelement.com"><img src="images/inspectelementSmall.jpg" alt="Inspect Element preview" /></a>
    			</li>
    		</ul>
    				
    	</section>
    			
    	<section id="about"> <!-- HTML5 section tag for the about 'section' -->
    	
    		<h2 class="about">About Me</h2>
    		
    		<p>Now this is a story all about how my life got twisted upside down and I'd like to take a minute just sit right there I'll tell you how I became the prince of a town called Bel-Air. In West Philadelphia born and raised on the playground my momma said most of my days chilling out, maxing and relaxing all cool and all shooting some b-ball outside of school when a couple of guys they were up to no good started making trouble in our neighbourhood I got in one little fight and my mom got scared, she said your moving in with your auntie and uncle in Bel-Air</p>
    	
    	</section>
    			
    	<section id="contact"> <!-- HTML5 section tag for the contact 'section' -->
    	
    		<h2 class="contact">Contact Me</h2>
    		
    		<p>I whistled for a cab and when it came near the license plate said fresh and had dice in the mirror, if anything I could say that this cab was rare but I thought nah, <a href="">forget it</a>, yo home to Bel-Air! I pulled up to the house about seven or eight I yelled to the cabbie yo home, smell you later, looked at my kingdom I was finally there to sit on my throne as the prince of Bel-Air</p>
    		
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
    			
    	<footer> <!-- HTML5 footer tag -->
    	
    		<ul>
    			<li><img src="images/twitter.png" alt="" /><a href="http://twitter.com/tkenny">Follow me on Twitter</a></li>
    			<li><a href="http://inspectelement.com/articles/code-a-backwards-compatible-one-page-portfolio-with-html5-and-css3">Back to the Tutorial on Inspect Element</a></li>
    		</ul>
    	
    	</footer>	
    
    </section>
    
    <script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
	</script>
	<script type="text/javascript">
		try {
		var pageTracker = _gat._getTracker("UA-9207090-1");
		pageTracker._trackPageview();
		} catch(err) {}
	</script>
    
</body>

</html>