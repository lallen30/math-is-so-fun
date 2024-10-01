<?php include('db/connect.php'); ?>
<?php include('db/logged_in.php'); ?>
<?php $pagetitle = 'Kids Page'; ?>
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
              <?php if ($userroleidquery == '4') { ?>

                <h1>Welcome to Math is So fun!</h1>

                <h1>Missed Problems</h1>
                <div>
                  <h3>Multiplication</h3>
                </div>
                <div style="float:left; width:150px;">Problems:</div>
                <div style="float:left; width:150px;">Given answers:</div>
                <div style="float:left; width:150px;">Correct Answer:</div>
                <div style="float:left; width:150px;">Date:</div>
                <div style="clear: both;"></div>
                <?php
                $missmultisql = mysql_query("SELECT * FROM missed WHERE user_id = '" . $useridquery . "' AND type = '3'");
                while ($missmultirow = mysql_fetch_array($missmultisql)) {
                  $first = $missmultirow['first'];
                  $second = $missmultirow['second'];
                  $anwers = $missmultirow['answers'];
                  $currentdate = $missmultirow['currentdate'];
                ?>
                  <div style="float:left; width:150px;"><?php echo $first . ' x ' . $second; ?></div>
                  <div style="float:left; width:150px;"><?php echo ' ( ' . $anwers . ' ) '; ?></div>
                  <div style="float:left; width:150px;"><?php $cans = $first * $second;
                                                        echo $cans; ?></div>
                  <div style="float:left; width:200px;"><?php echo $currentdate; ?></div>

                  <div style="clear: both;"></div>
                <?php } ?>

                <br /><br />
                <p class="instructionText">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a class="instructionText" href="addition.php">Try your hand at mastering Addition.</a></p>
                <p class="instructionText">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a class="instructionText" href="subtraction.php">Or take your chances at Subtraction.</a></p>
                <p class="instructionText">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a class="instructionText" href="multiplication.php">Or go crazy with Multiplication.</a></p>
                <p class="instructionText">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <a class="instructionText" href="division.php">If you're really brave, then give Division a go.</a></p>
                <p class="instructionText">Coming soon:<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Word Problems, Fractions, Equations, games<span style="float:right;"> and much much more...</span></p>



            </div>

          <?php } else {
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

<environment_details>
  # VSCode Visible Files
  kids_page.php

  # VSCode Open Tabs
  index.php
  registration.php
  kids_page.php
  docker-compose.yml
  parents_page.php
  includes/menu.inc.php
</environment_details>