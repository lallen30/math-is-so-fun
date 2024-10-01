<!DOCTYPE html>
<!--[if IE 7]>
<html lang="en" class="ie7 oldie"></html><![endif]--><!--[if IE 8]>
<html lang="en" class="ie8 oldie"></html><![endif]-->
<!-- [if gt IE 8] <!-->
<!--[if lte IE 8]>              <html class="ie8 no-js" lang="en">     <![endif]-->
<!--[if IE 9]>					<html class="ie9 no-js" lang="en">     <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->	<html class="not-ie no-js" lang="en">  <!--<![endif]-->
<head>
	<link href='http://fonts.googleapis.com/css?family=Salsa|Rancho|Jockey+One|Oswald|Yanone+Kaffeesatz' rel='stylesheet' type='text/css'>
    <meta charset="utf-8" />	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Multiplication</title>
    
    <link rel="stylesheet" href="css/styles.css" />
	<link rel="stylesheet" href="css/video-js.css" />
	<link rel="stylesheet" href="css/prettyPhoto.css" /><!-- HTML5 Shiv -->
	<link rel="stylesheet" href="css/flexnav.css" />
	<link rel="stylesheet" href="themeChanger/css/colorpicker.css" />
	<link rel="stylesheet" href="themeChanger/css/themeChanger.css" />

	<script src="js/modernizr.custom.js"></script>
</head>
<body onload="document.myForm.Email.focus();" class="t-blue t-pattern-1 secondary-page t-menu-1 t-header-1 t-text-1"><?php include_once("includes/analyticstracking.php") ?>
	
		<?php include('includes/menu.inc.php'); ?>


	<div id="kids_middle_container"><!-- .content -->
		<div class="kids_top_content"> <!-- .middle_cloud -->
			<div class="kids_top_content_head">
				<div class="kids_top_content_head_body"></div>
			</div><!-- .kids_top_content_head -->

			<div class="kids_top_content_middle">
				<div class="l-page-width">     
					<!-- .kids_posts_container -->
				</div>
			</div><!-- .kids_top_content_middle -->
			<div class="kids_top_content_footer"></div><!-- .end_middle_cloud -->
		</div><!-- .end_middle_cloud  -->

		<div class="bg-level-2-full-width-container kids_bottom_content">
			<div class="bg-level-2-page-width-container l-page-width no-padding">
				<section class="kids_bottom_content_container">
					<div class="header_container">  
						
					</div>
					<div class="entry-container">
						<!-- ***************** - START Page Content - *************** -->
					
					<?php
					if(isset($_POST['realanswer'])){
											 include('includes/multiplication/multiplication1.inc.php'); 
					}else if(isset($_GET['times'])){
						 include('includes/multiplication/mult_high.inc.php');
					}else if(isset($_GET['high'])){
						 include('includes/multiplication/mult_low.inc.php');
					}else if(isset($_GET['low'])){
						 include('includes/multiplication/multiplication2.inc.php');
					}else if(isset($_POST['begin'])){
						 include('includes/multiplication/times.inc.php');
					}else{
						include('includes/multiplication/mult_instructions.inc.php'); 
					}
					 ?>
                    	                    	<?php // $actual_link = "http://$_SERVER[HTTP_HOST] . ' | ' . $_SERVER[REQUEST_URI]"; echo '<br />' . $actual_link; ?>

						<!-- ***************** - END Page Content - *************** -->	


						<div class="kids_clear"></div>                                
					</div><!-- .entry-container -->
				</section><!-- .bottom_content_container -->
				<div class="bg-level-2-left" id="bg-level-2-left"></div> <!-- .left_patterns -->
				<div class="bg-level-2-right" id="bg-level-2-right"></div><!-- .right_patterns -->
			</div>
		</div>

	</div><!-- .end_content -->

	<?php include('includes/footer.inc.php'); ?>

    </body>
</html>