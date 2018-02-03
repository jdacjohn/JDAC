<div class="wrapper row">
<?php	
	$currentFile = $_SERVER["SCRIPT_NAME"];
	$parts = Explode('/',$currentFile);
	$currentFile = $parts[count($parts) - 2];
	// print($currentFile . '<br />');
?>
<h1><a href="<?php print($siteRoot); ?>" id="logo"><img src="<?php print($siteRoot); ?>/images/logo_03.png" /></a></h1>
<nav>
	<ul id="menu">
<?php
	switch ($currentFile) {
		case 'contact':
			print('<li id="nav1"><a href="' . $siteRoot . '">Home</a></li>');
			print('<li id="nav2"><a href="' . $siteRoot . '/news">News<span>Tech Updates</span></a></li>');
			print('<li id="nav3"><a href="' . $siteRoot . '/services">Services</a></li>');
			print('<li id="nav4"><a href="' . $siteRoot . '/products">Resources<span>Users & Developers</span></a></li>');
			print('<li id="nav5" class="active"><a href="' . $siteRoot . '/contact">Contact Us</a></li>');
			break;
		case 'products':
			print('<li id="nav1"><a href="' . $siteRoot . '">Home</a></li>');
			print('<li id="nav2"><a href="' . $siteRoot . '/news">News<span>Tech Updates</span></a></li>');
			print('<li id="nav3"><a href="' . $siteRoot . '/services">Services</a></li>');
			print('<li id="nav4" class="active"><a href="' . $siteRoot . '/products">Resources<span>Users & Developers</span></a></li>');
			print('<li id="nav5"><a href="' . $siteRoot . '/contact">Contact Us</a></li>');
			break;
		case 'services':
			print('<li id="nav1"><a href="' . $siteRoot . '">Home</a></li>');
			print('<li id="nav2"><a href="' . $siteRoot . '/news">News<span>Tech Updates</span></a></li>');
			print('<li id="nav3" class="active"><a href="' . $siteRoot . '/services">Services</a></li>');
			print('<li id="nav4"><a href="' . $siteRoot . '/products">Resources<span>Users & Developers</span></a></li>');
			print('<li id="nav5"><a href="' . $siteRoot . '/contact">Contact Us</a></li>');
			break;
		case 'news':
			print('<li id="nav1"><a href="' . $siteRoot . '">Home</a></li>');
			print('<li id="nav2" class="active"><a href="' . $siteRoot . '/news">News<span>Tech Updates</span></a></li>');
			print('<li id="nav3"><a href="' . $siteRoot . '/services">Services</a></li>');
			print('<li id="nav4"><a href="' . $siteRoot . '/products">Resources<span>Users & Developers</span></a></li>');
			print('<li id="nav5"><a href="' . $siteRoot . '/contact">Contact Us</a></li>');
			break;
		default:
			print('<li id="nav1" class="active"><a href="' . $siteRoot . '">Home</a></li>');
			print('<li id="nav2"><a href="' . $siteRoot . '/news">News<span>Tech Updates</span></a></li>');
			print('<li id="nav3"><a href="' . $siteRoot . '/services">Services</a></li>');
			print('<li id="nav4"><a href="' . $siteRoot . '/products">Resources<span>Users & Developers</span></a></li>');
			print('<li id="nav5"><a href="' . $siteRoot . '/contact">Contact Us</a></li>');
	}
?>
	</ul>
</nav>
</div>

