<!DOCTYPE html>
<html lang="en">
<head>
	<title>JDAC Computing Solutions</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name='author' content='John Arnold'>
	<meta name='description' content='JDAC Computing Solutions is a personalized website development and website 
		hosting company based in Bartlesville, Oklahoma.  JDAC Computing Solutions offers Web Development Services 
		including Responsive Design techniques using the 960Grid System, PC Hardware and Software and Infrastructure 
		Support services, and SEO Analytics and Optimization, and serves both commercial and residential customers.'>
	<meta name='keywords' content='Website Development, Website Design, SEO, Search Engine Optimization, 
		Hardware Support, Software Support, Responsive Design, Network Support, Infrastructure Support, Bartlesville, 
		Northeast Oklahoma'>

	<?php include('./pageHead.php'); ?>
	<!-- Common Styles -->
	<?php include('./pageHeadStyles.php'); ?>
	<!-- Page specific stylesheets -->
	<link rel="stylesheet" href="./css/responsiveslides.css" />
  <!-- Common Javascript -->
  <?php include('./pageHeadScripts.php'); ?>
	<!-- Page-specific Javascript includes -->
	<script type="text/javascript" src='<?php print($siteRoot); ?>/script/jquery.easing.1.3.js'></script>
	<script type="text/javascript" src='<?php print($siteRoot); ?>/script/tms-0.3.js'></script>
	<script type="text/javascript" src='<?php print($siteRoot); ?>/script/tms_presets.js'></script>
	<script type="text/javascript" src='<?php print($siteRoot); ?>/script/jcarousellite.js'></script>
	<script type="text/javascript" src='<?php print($siteRoot); ?>/script/script.js'></script>
	<script type='text/javascript' src='<?php print($siteRoot); ?>/script/css3-mediaqueries.js'></script>
  <!--[if lt IE 9]>
  	<script type="text/javascript" src="js/html5.js"></script>
	<style type="text/css">
		.bg{ behavior: url(js/PIE.htc); }
	</style>
  <![endif]-->
	<!--[if lt IE 7]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://www.theie6countdown.com/images/upgrade.jpg" border="0"  alt="" /></a>
		</div>
	<![endif]-->
	
	<script src="./script/responsiveslides.js"></script>
	
	<script>
		$(function () {
		  $("#slider").responsiveSlides({
			auto: true,
			speed: 1000,
			timeout: 2000,
			pager: false,
			nav: true,
			maxwidth: 960,
			namespace: "centered-btns"
		  });
		});
	</script>
</head>
<body id="page1">
<?php include('./ga.php'); ?>

  <div class="body1">
    <div class="body2">
      <div class="main zerogrid">
        <header>
        <?php include('./header.php'); ?>
        <?php include('./slides.php'); ?>
        </header>
      </div> <!-- End main zerogrid -->
    </div> <!-- End body2 -->
  </div> <!-- End body1 -->

	<div class="body3">
		<div class="main zerogrid">
		<!-- content -->
			<article id="content">
				<div class="wrapper row">
					
          <section class="col-1-4">
						<div class="wrap-col">
							<h3><span class="dropcap">A</span>Web<span>solutions</span></h3>
							<p class="pad_bot1">JDAC Computing Solutions has over 20 years experience in developing Web-based 
              applications.  Let us design and build your website for you, or upgrade your old site to current 
              standards using the latest responsive design techniques such as the 
              <a href="http://960.gs" target="_blank">960 Grid System.</a></p>
							<a href="./services" class="link1">Read More</a>
						</div>
					</section>
					
          <section class="col-1-4">
						<div class="wrap-col">
							<h3><span class="dropcap">B</span>Infrastructure<span>support</span></h3>
							<p class="pad_bot1">JDAC Computing Solutions specializes in providing PC/Software/Hardware and Networking Support. Our experienced
              technicians will come to your home or business to solve issues onsite in most cases.</p>
							<a href="./services" class="link1">Read More</a>
						</div>
					</section>
					
          <section class="col-1-4">
						<div class="wrap-col">
							<h3><span class="dropcap">C</span>SEO<span>analytics</span></h3>
							<p class="pad_bot1">Improve your online presence with Search Engine Optimization.  JDAC Computing 
              Solutions offers SEO Assessments and conducts optimization to your websites in order to 
              improve search page rankings and thereby increase your sales.</p>
							<a href="./services" class="link1">Read More</a>
						</div>
					</section>
					
          <section class="col-1-4">
						<div class="wrap-col">
							<h3><span class="dropcap">D</span>Commercial<span>& residential</span></h3>
							<p class="pad_bot1">Based out of Bartlesville, JDAC Computing Solutions serves the Northeast Oklahoma Area
               and offers a host of solutions to area residents and businesses.</p>
							<!-- <a href="./products" class="link1">Read More</a> -->
						</div>
					</section>
				
        </div> <!-- End Wrapper row -->
				
        <div class="wrapper row">
					<section class="col-3-4">
						<div class="wrap-col">
							<h2 class="under">Welcome to JDAC Computing Solutions!</h2>
							<div class="wrapper">
								<figure class="left marg_right1"><img src="images/page1_img3.png" alt="JDAC Computing Solutions"></figure>
								<p class="pad_bot1">Call JDAC Computing Solutions to serve your needs whether 
                residential or commercial.  We can handle your PC and Networking Issues, Website development and maintenance, 
                Search Engine Optimization, Vendor ROI Consulting, and Custom Software Engineering.</p>
							</div>
						</div>
					</section>
					
          <section class="col-1-4">
						<div class="wrap-col">
							<h2>Testimonials</h2>
							<div class="testimonials">
							<div id="testimonials">
							  <ul>
								<li>
									<div>
										“You've done a great job... It all "feels" so much better than previous attempts to have a site.
                    Thank you so much. You do good and efficient work!”
									</div>
									<span><strong class="color1">Margery Kisby Warder, Author</strong> <br>
									<a href='http://www.margerywarder.com' target='_blank'>MargeryWarder.com</a></span>
								</li>
								<li>
									<div>
										“Seems to be working well this morning.  Many Thanks. Will call on you next time we have a problem.”
									</div>
									<span><strong class="color1">Bill McLeckie, McLeckie Insurance Group,</strong> <br>
									Naples, Texas</span>
								</li>
								<li>
									<div>
										“Starting our home improvement business was challenging, but JDAC Solutions had our home office set up and running for us in less than 48 hours!”
									</div>
									<span><strong class="color1">Yaneth Improvement Services,</strong> <br>
									Linden, Texas</span>
								</li>
								<li>
									<div>
										“JDAC Computing Solutions restored my useless computer and had it running like new.”
									</div>
									<span><strong class="color1">Jeremy Morris,</strong> <br>
									Naples, Texas</span>
								</li>
								<li>
									<div>
										“John came out twice to fix our computer issues.  Both times he was fast, friendly, and delivered on-time and never charged more than he quoted.”
									</div>
									<span><strong class="color1">Bill and Patricia Kelton,</strong> <br>
									Atlanta, Texas</span>
								</li>
							  </ul>
							</div>
							<a href="#" class="up"></a>
							<a href="#" class="down"></a>
							</div>
						</div>
					</section>
				</div> <!-- End Wrapper-row -->
			</article>
		</div> <!-- End main zerogrid -->
	</div> <!-- End body3 -->
  
	<div class="body4">
		<div class="main zerogrid">
    	<?php include('./content_bottom.php'); ?>
<!-- content end -->
		</div>
	</div>
		<div class="main zerogrid">
<!-- footer -->
			<footer>
      	<?php include('./footer.php'); ?>
			</footer>
<!-- footer end -->
		</div>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>