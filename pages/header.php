<?php
include "config.php"

?>
<!DOCTYPE HTML>
<!--
	Ion by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<base href="//127.0.0.1/" />
<html>
	<head>
		<title>Navel-IT</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<!--[if lte IE 8]><script src="js/html5shiv.js"></script><![endif]-->
		<script src="js/jquery.min.js"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-layers.min.js"></script>
		<script src="js/init.js"></script>
		<script src="js/jscolor.js"></script>
		<noscript>
			<link rel="stylesheet" href="css/skel.css" />
			<link rel="stylesheet" href="css/style.css" />
			<link rel="stylesheet" href="css/style-xlarge.css" />
		</noscript>
		<link rel="icon" href="images/icone_navel_new2.png" sizes="32x32" />
	</head>

<!-- Header -->
			<header id="header" class="skel-layers-fixed">
				<h1 >
					<a href="<?=$lang?>/home" >
				<img src="images/icone_navel_new2_blanc.png" style="margin: 5px 0 0 0;" alt="" height="35px" />
				<img src="images/icone_navel_name2.png" style="margin: 5px 0 0 0;" alt="" height="35px" />
				</a></h1>
				
				
				
				<nav id="nav">
					<ul>
<!--
						<div style="margin-left:250px;">
-->
						
<!--
						</div>
-->
						<li><a href="<?=$lang?>/home"><?=TXT_HEADER_HOME?></a></li>						
						<li><a href="<?=$lang?>/howitwork"><?=TXT_HEADER_HIW?></a></li>						
												
						<li><a href=""><?=TXT_HEADER_RESOURCES?></a>
						<ul>
							<li><a href=""><?=TXT_HEADER_SUPPORT?></a></li>
							<li><a href="http://confluence.navel-it.fr/display/<?=LINK_HEADER_DOCUMENTATION?>"><?=TXT_HEADER_DOCUMENTATION?></a>
							<li><a href="http://confluence.navel-it.fr/pages/viewrecentblogposts.action?key=<?=LINK_HEADER_BLOG?>"><?=TXT_HEADER_BLOG?></a></li>
						</ul>
						</li>
						<li><a href="<?=$lang?>/contacts"><?=TXT_HEADER_CTC?></a></li>
						
						<li><a href="en/<?=$page?>"><img src="images/en.png" alt="EN" width="20px" /></a>
						<a href="fr/<?=$page?>"><img src="images/fr.png" alt="FR" width="20px" /></a>
						</li>
<!--
						<li><a href="#" class="button special">Sign Up</a></li>
-->
					</ul>
				</nav>
			</header>
