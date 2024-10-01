<?php include('db/connect.php'); ?>
<?php include('db/logged_in.php'); ?>
<?php $pagetitle = 'Parents Page'; ?>
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
                            <?php if ($userroleidquery == '3') { ?>

                                <h1>Parent's Page</h1>
                                <?php if (isset($_SESSION["userid"])) {
                                    $checkrec = $mysqli->query("SELECT id FROM users WHERE id = '" . $mysqli->real_escape_string($username) . "'");
                                    if ($checkrec->num_rows > 0) {
                                        $checkrow = $checkrec->fetch_assoc();
                                        $parentid = $checkrow['user_id'];
                                        // echo 'parentid: ' . $parentid;
                                    }
                                    echo '<p style="margin-left: 10px;" class="arrow-box">';
                                    echo '<span style="font-size: 18px; font-weight: bold;">My Children:</span><br />';
                                    $checkrec1 = $mysqli->query("SELECT username FROM users WHERE parent_id = '" . $mysqli->real_escape_string($useridquery) . "'");
                                    while ($checkrow1 = $checkrec1->fetch_assoc()) {
                                        $mychildname = $checkrow1['username'];
                                        echo $mychildname . '<br />';
                                    }
                                    echo '</p>';
                                }
                                ?>
                                <p class="instructionText"><?php echo 'Welcome ' . $username; ?></p>
                                <?php include('includes/kidsregistration.inc.php'); ?>

                        </div>

                    <?php } else if ($userroleidquery == '4') {
                                echo '<meta http-equiv="refresh" content="0; url=kids_page.php">';
                            } else {
                                echo '<meta http-equiv="refresh" content="0; url=index.php">';
                            } ?>

                    <!-- ***************** - END Page Content - *************** -->

                    </div>


                    <aside id="sidebar">

                        <div class="nav_cat type-1 widget">

                            <!-- ***************** - START Page Content - *************** -->

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