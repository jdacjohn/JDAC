<!DOCTYPE html>
<!-- <html lang="en"> -->
<head>
<title>JDAC Computing Solutions</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta name='author' content='John Arnold'>
<meta name='description' content='JDAC Computing Solutions is a personalized website development and website 
	hosting company based in Bartlesville, Oklahoma.  JDAC Computing Solutions offers Web Development Services 
  including Responsive Design techniques using the 960Grid System, PC Hardware and Software and Infrastructure 
  Support services, and SEO Analytics and Optimization, and serves both commercial and residential customers. 
  Email JDAC Computing Solutions your thoughts or questions.'>
<meta name='keywords' content='Website Development, Website Design, SEO, Search Engine Optimization, Hardware Support, Software Support, Responsive Design, Network Support, Infrastructure Support, Bartlesville, Northeast Oklahoma'>

	<?php include('../pageHead.php'); ?>
	<!-- Common Styles -->
	<?php include('../pageHeadStyles.php'); ?>
	<!-- Page specific stylesheets -->
  <!-- Common Javascript -->
  <?php include('../pageHeadScripts.php'); ?>
	<!-- Page-specific Javascript includes -->
	<script type="text/javascript" src="<?php print($siteRoot); ?>/script/tabs.js"></script>
	<script type='text/javascript' src="<?php print($siteRoot); ?>/script/css3-mediaqueries.js"></script>
<!--[if lt IE 9]>
  	<script type="text/javascript" src="<?php print($siteRoot); ?>/script/html5.js"></script>
	<style type="text/css">
		.bg{ behavior: url(<?php print($siteRoot); ?>/script/PIE.htc); }
	</style>
<![endif]-->
<!--[if lt IE 7]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0"  alt="" /></a>
		</div>
<![endif]-->
</head>
<body id="page5">
	<div class="body1">
	<div class="body2">
	<div class="body5">
		<div class="main zerogrid">
<!-- header -->
			<header>
			<?php include('../header.php'); ?>
			</header>
<!-- header end-->
		</div>
	</div>
	</div>
	</div>
	<div class="body3">
		<div class="main zerogrid">
<!-- content -->
			<article id="content">
				<div class="wrapper row">
					<section class="col-3-4">
					<div class="wrap-col">
						<h2 class="under">Email JDAC Your Thoughts or Questions</h2>
						<form id="ContactForm" method="post" action="<?php print($siteRoot); ?>/contact/contact_submit.php">
						<input type="hidden" name="env_report" value="REMOTE_ADDR,HTTP_USER_AGENT">
						<input type="hidden" name="recipient" value="">
						<div>
							<div  class="wrapper">
								<span>Your Name:</span>
								<input type="text" class="input" id="sender" name="sender" />
							</div>
							<div  class="wrapper">
								<span>Your City:</span>
								<input type="text" class="input" id="senderCity" name="senderCity" />
							</div>
							<div  class="wrapper">
								<span>Your E-mail:</span>
								<input type="text" class="input" id="senderEmail" name="senderEmail" />
							</div>
							<div  class="textarea_box">
								<span>Your Message:</span>
								<textarea name="comments" cols="1" rows="1" id="comments"></textarea>
							</div>
							<a href="#" onClick="document.getElementById('ContactForm').submit()">Send</a>
							<a href="#" onClick="document.getElementById('ContactForm').reset()">Clear</a>
						</div>
						</form>
					</div>
					</section>
					<section class="col-1-4">
					<div class="wrap-col">
						<h2 class="under">Contacts</h2>
						<div id="address"><span>Primary:<br />
								City:<br />
                Mobile:<br />
								Email:</span>
								John Arnold<br />
								Bartlesville, OK<br />
                918.886.2681<br />
								<a href="mailto:inquiries@jdacsolutions.com" class="color2">inquiries@jdac.com</a></div>
						<h2 class="under">Service Area</h2>
						<p>JDAC Computing Solutions provides HW/SW Support and Development Services in the Northeast Oklahoma Area.  
            Based out of Bartlesville, Oklahoma we serve:
            <ul>
            	<li>&bull; Avant, OK</li>
              <li>&bull; Barnsdall, OK</li>
              <li>&bull; Bartlesville, OK</li>
              <li>&bull; Dewey, OK</li>
              <li>&bull; Nowata, OK</li>
              <li>&bull; Ochelata, OK</li>
              <li>&bull; Pawhuska, OK</li>
              <li>&bull; Ramona, OK</li>
              <li>&bull; South Coffeyville, OK</li>
              <li>&bull; Surrounding Areas</li>
              </ul>
              </p>
              </p>
					</div>
					</section>
				</div>

			</article>
		</div>
	</div>
	<div class="body4">
		<div class="main zerogrid">
    	<?php include('../content_bottom.php'); ?>
<!-- content end -->
		</div>
	</div>
		<div class="main zerogrid">
<!-- footer -->
			<footer>
      	<?php include('../footer.php'); ?>
			</footer>
<!-- footer end -->
		</div>
<script type="text/javascript"> Cufon.now(); </script>
<script>
	$(document).ready(function() {
		tabs.init();
	})
</script>
</body>
</html>