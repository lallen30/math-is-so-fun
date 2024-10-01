<?php $pagetitle = 'Division'; ?>
<?php include('includes/header.inc.php'); ?>
<body onload="document.myForm.Email.focus();" class="t-blue t-pattern-1 secondary-page t-menu-1 t-header-1 t-text-1"><?php include_once("includes/analyticstracking.php") ?>
<div class="top-panel">
		<div class="l-page-width">
			<div class="tweets"></div>
		</div>
	</div><!--/ .top-panel-->		
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
						 include('includes/division/division1.inc.php');
					}else if(isset($_GET['times'])){
						 include('includes/division/div_low.inc.php');
					}else if(isset($_GET['high'])){
						 include('includes/division/division2.inc.php');
					}else if(isset($_GET['low'])){
						 include('includes/division/div_high.inc.php');
					}else if(isset($_POST['begin'])){
						 include('includes/division/divs.inc.php');
					}else{
						include('includes/division/div_instructions.inc.php');
					}
					 ?>
                    	
					<?php //	include('includes/division/div_vars.inc.php'); ?>
						
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