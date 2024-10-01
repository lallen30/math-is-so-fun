<?php include('db/logged_in.php'); ?>
<?php include('db/connect.php'); ?>
<?php $pagetitle = 'Parent\'s Registration Page'; ?>
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

                            <?php
                            $usergood = '0';
                            $passgood = '0';

                            // Email mask
                            if (isset($_POST["email"])) {
                                //   if(preg_match("/^[a-zA-Z]w+(.w+)*@w+(.[0-9a-zA-Z]+)*.[a-zA-Z]{2,4}$/", $_POST["email"]) === 0){
                                if (preg_match("/^[a-zA-Z]\w+(\.\w+)*\@\w+(\.[0-9a-zA-Z]+)*\.[a-zA-Z]{2,4}$/", $_POST["email"]) === 0) {
                                    $errEmail = 'Email address must be a valid email address. ';
                                    $emailgood = '1';
                                } else {
                                    $email = $_POST['email'];
                                    $emailgood = '2';
                                }
                            }

                            // Username must be digits and letters
                            if (isset($_POST["username"])) {
                                if (preg_match("/^[0-9a-zA-Z_]{5,}$/", $_POST["username"]) === 0) {
                                    $errUser = 'Username must be bigger that 5 chars and contain only digits, letters and underscore. ';
                                    $usergood = '1';
                                } else {
                                    $username = $_POST['username'];
                                    $usergood = '2';
                                }
                            }

                            // Password must be digits and letters
                            if (isset($_POST["password"])) {
                                if (preg_match("/^[0-9a-zA-Z_]{3,}$/", $_POST["password"]) === 0) {
                                    $errPass = 'Password must be bigger that 5 chars and contain only digits, letters and underscore. ';
                                    $passgood = '1';
                                } else {
                                    $password = $_POST['password'];
                                    $passgood = '2';
                                }
                            }

                            $insertgood = $usergood + $passgood + $emailgood;


                            if ($insertgood == '6') {
                                $checkrec = $mysqli->query("SELECT username, email FROM users WHERE username = '" . $mysqli->real_escape_string($username) . "' LIMIT 1");
                                if ($checkrec->num_rows > 0) {
                                    $checkrow = $checkrec->fetch_assoc();
                                    $queryusername = $checkrow['username'];
                                    $queryuseremail = $checkrow['email'];
                                }

                                if ($queryuseremail == $email) {
                                    $insertgood = '0';
                                    $message = 'That email address is already registered. Click here if you forgot you login info. ';
                                    $userexit = '1';
                                } else if ($queryusername != $username) {
                                    $sql1 = 'INSERT INTO `users` (`role_id`, `email`, `username`, `password`) VALUES ("3", "' . $email . '", "' . $username . '", "' . $password . '")';
                                    $regrec1 = $mysqli->query($sql1);
                                    $_SESSION["username"] = $_POST['username'];
                                    echo 'Verifying user information. Please wait...<META http-equiv="refresh" content="5;URL=db/login.php?username=' . $username . '&page=parent"> ';
                                    exit();
                                } else if ($queryusername == $username) {
                                    $insertgood = '0';
                                    $message = 'That Username already exist. Please Try another. ';
                                    $userexit = '1';
                                }
                            }
                            if ($insertgood == '6') {
                                echo '<h1>Welcome ' . $username . '</h1>';
                            } else {
                            ?>
                                <h1>Parent's registration:</h1>
                                <form action="registration.php" method="post" class="contactForm">
                                    <?php
                                    if (isset($errEmail)) {
                                        $message .= $errEmail;
                                    }
                                    if (isset($errUser)) {
                                        $message .= $errUser;
                                    }
                                    if (isset($errPass)) {
                                        $message .= $errPass;
                                    }
                                    if (isset($message)) {
                                        echo '<p class="error-box">' . $message . '</p>';
                                    }
                                    ?>
                                    <fieldset>
                                        <div class="row">
                                            <label for="email">Enter an Email address:</label>
                                            <input <?php if (isset($email) && $emailexit != '1') {
                                                        echo 'value="' . $email . '"';
                                                    } ?> name="email" id="wemail" type="text">
                                            <p>Email address must be a valid email address.</p>
                                        </div>

                                        <div class="row">
                                            <label for="username">Create a Username:</label>
                                            <input <?php if (isset($username) && $userexit != '1') {
                                                        echo 'value="' . $username . '"';
                                                    } ?> name="username" id="wname" type="text">
                                            <p>Username must be bigger that 5 chars and contain only digits, letters and underscore</p>
                                        </div>

                                        <div class="row">
                                            <label for="password">Create a Password:</label>
                                            <input <?php if (isset($password)) {
                                                        echo 'value="' . $password . '"';
                                                    } ?> name="password" id="wpass" type="password">
                                            <p>Password must be bigger that 3 chars and contain only digits, letters and underscore</p>
                                        </div>

                                        <!-- <div class="row">
                                        <label for="children">How many children would you like to register (up to 10):</label>
                                        <select name="children">
                                            <option value="Choose">Choose</option>
                                            <option <?php // if($children == '1'){ echo  ' selected="selected"'; } 
                                                    ?> value="1">1</option>
                                            <option <?php // if($children == '2'){ echo  ' selected="selected"'; } 
                                                    ?> value="2">2</option>
                                            <option <?php // if($children == '3'){ echo  ' selected="selected"'; } 
                                                    ?> value="3">3</option>
                                            <option <?php // if($children == '4'){ echo  ' selected="selected"'; } 
                                                    ?> value="4">4</option>
                                            <option <?php // if($children == '5'){ echo  ' selected="selected"'; } 
                                                    ?> value="5">5</option>
                                            <option <?php // if($children == '6'){ echo  ' selected="selected"'; } 
                                                    ?> value="6">6</option>
                                            <option <?php // if($children == '7'){ echo  ' selected="selected"'; } 
                                                    ?> value="7">7</option>
                                            <option <?php // if($children == '8'){ echo  ' selected="selected"'; } 
                                                    ?> value="8">8</option>
                                            <option <?php // if($children == '9'){ echo  ' selected="selected"'; } 
                                                    ?> value="9">9</option>
                                            <option <?php // if($children == '10'){ echo  ' selected="selected"'; } 
                                                    ?> value="10">10</option>
                                        </select>
                                    </div> -->

                                        <div class="row">
                                            <button type="submit" class="button medium button-style1 l-float-right-send" value="send">send</button>
                                            <div class="clear"></div>
                                        </div>
                                    </fieldset>

                                </form><!--/ #contactform-->
                            <?php } ?>
                            <!-- ***************** - END Page Content - *************** -->

                        </div>


                        <aside id="sidebar">

                            <div class="nav_cat type-1 widget">



                                <h1>Log in:</h1>

                                <form action="index.php" method="post" class="loginsidebar">

                                    <fieldset>
                                        <div class="row">
                                            <label for="username">User Name:</label>
                                            <input <?php if (isset($username)) {
                                                        echo 'value="' . $username . '"';
                                                    } ?> name="username" id="wname" type="text">
                                        </div>

                                        <div class="row">
                                            <label for="password">Password:</label>
                                            <input <?php if (isset($password)) {
                                                        echo 'value="' . $password . '"';
                                                    } ?> name="password" id="wname" type="password">
                                        </div>


                                        <div class="row">
                                            <button type="submit" class="button medium button-style1 l-float-right-send" value="send">send</button>
                                            <div class="clear"></div>
                                        </div>
                                        <span style="float:right; font-weight:bold;"><a style="color:#9BC0DD;" href="index.php">Forgot Username/Password</a></span>
                                        <span style="float:right;  padding-bottom: 1em; font-weight:bold;"><a style="color:#9BC0DD;" href="registration.php">Register</a></span>
                                    </fieldset>

                                </form><!--/ #contactform-->


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