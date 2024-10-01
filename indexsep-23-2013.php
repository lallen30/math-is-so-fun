<?php include('db/logged_in.php'); ?>
<?php include('db/connect.php'); ?>
<?php $pagetitle = 'Math is So fun'; ?>
<?php include('includes/header.inc.php'); ?>
<body class="t-blue t-pattern-1 secondary-page t-menu-1 t-header-1 t-text-1">
	
	<div class="top-panel">
		<div class="l-page-width">
			<div class="tweets"></div>
		</div>
	</div><!--/ .top-panel-->
		<?php include('includes/menu.inc.php'); ?>

	<div id="kids_middle_container">	
		<div class="kids_top_content">
			<div class="kids_top_content_head">
				<div class="kids_top_content_head_body"></div>
			</div><!-- .kids_top_content_head -->
			<div class="kids_top_content_middle">	
				<div class="l-page-width">     
					<!-- .kids_posts_container -->
				</div>
			</div><!-- .kids_top_content_middle -->
			<div class="kids_top_content_footer"></div>
		</div><!-- .end_middle_cloud  -->
		<div class="bg-level-2-full-width-container kids_bottom_content">
			<div class="bg-level-2-page-width-container l-page-width no-padding">
				<section class="kids_bottom_content_container">
					<div class="header_container"></div>
					
					<div id="sbr" class="entry-container">
						<div id="post-content">

                    <!-- ***************** - START Page Content - *************** -->
					
					<h1>Welcome to Math is So fun!</h1>
					<p class="instructionText">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a class="instructionText" href="addition.php">Try your hand at mastering Addition.</a></p>
					<p class="instructionText">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a class="instructionText" href="subtraction.php">Or take your chances at Subtraction.</a></p>
					<p class="instructionText">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a class="instructionText" href="multiplication.php">Or go crazy with Multiplication.</a></p>
					<p class="instructionText">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a class="instructionText" href="division.php">If you're really brave, then give Division a go.</a></p>
					<p class="instructionText">Coming soon:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Word Problems, Fractions, Equations, games<span style="float:right;"> and much much more...</span></p>
					<div style="margin: 20px auto;">
					
					</div>
                    	
						<!-- ***************** - END Page Content - *************** -->

						</div>


						<aside id="sidebar">

							<div class="nav_cat type-1 widget">

						<!-- ***************** - START Page Content - *************** -->
						<?php
                        $usergood = '0';
                        $passgood = '0';

                        // Username must be digits and letters
                        if(isset($_POST["username"])){
                            if(preg_match("/^[0-9a-zA-Z_]{5,}$/", $_POST["username"]) === 0){
                                $errUser = 'The Username or Password is not correct';
                                $usergood = '1';
                            }else{$username = $_POST['username']; $usergood = '2'; }
                        }

                        // Password must be digits and letters
                        if(isset($_POST["password"])){
                            if(preg_match("/^[0-9a-zA-Z_]{3,}$/", $_POST["password"]) === 0){
                                $errUser = 'The Username or Password is not correct';
                                $passgood = '1';
                            }else{$password = $_POST['password'];  $passgood = '2'; }
                        }
                        $insertgood = $usergood + $passgood;

                        if($insertgood == '4'){
                        $checkrec = mysql_query("SELECT username FROM users WHERE username = '$username' LIMIT 1");
                            while($checkrow = mysql_fetch_array($checkrec)){
                                $userquery = $checkrow['username'];
                            }
                        }
                        $welcomessage = '<h1>' . $username . '</h1>';
                        if(isset($_SESSION["username"])){ echo $welcomessage;
                           }else if($insertgood == '4' && $username == $userquery){ echo 'Verifying user information. Please wait...<META http-equiv="refresh" content="5;URL=db/login.php?username='.$username.'"> ';
                        }else{ ?>

                                <h1>Log in:</h1>

							<form action="index.php" method="post" class="loginsidebar">
								
								<fieldset>
									<div class="row"> 
										<label for="username">User Name:</label>
										<input <?php if(isset($username)){ echo 'value="'. $username . '"'; } ?> name="username" id="wname" type="text">
									</div>
									
									<div class="row">
										<label for="password">Password:</label>
										<input <?php if(isset($password)){ echo 'value="'. $password . '"'; } ?> name="password" id="wpass" type="password">
									</div>

									
									<div class="row">
										<button type="submit" class="button medium button-style1 l-float-right-send" value="send">send</button>
										<div class="clear"></div>
									</div>
                        <span style="float:right; font-weight:bold;"><a style="color:#9BC0DD;" href="index.php">Forgot Username/Password</a></span>
                        <span style="float:right;  padding-bottom: 1em; font-weight:bold;"><a style="color:#9BC0DD;" href="registration.php">Register</a></span>
								</fieldset>
								
							</form><!--/ #contactform-->
						<?php } ?>
						<!-- ***************** - END Page Content - *************** -->	
								

							</div><!--/ nav_cat-->

						</aside><!--/ sidebar-right-->
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