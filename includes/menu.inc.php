<?php
$thispage = isset($_SERVER['REQUEST_URI']) ? htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8') : '';
$updirectory = '';
if (isset($pageID) && $pageID == 'registration') {
	$updirectory = '../';
}
?>
<div class="kids-bg-level-1">

	<header id="kids_header">

		<div class="l-page-width clearfix">

			<div style="width: 361.5px; left: -351.5px;" class="bg-level-1-left" id="bg-level-1-left"></div>
			<div style="width: 361.5px; right: -351.5px;" class="bg-level-1-right" id="bg-level-1-right"></div>
			<div id="kids_logo_block">
				<a id="kids_logo_text" href="<?= htmlspecialchars($updirectory, ENT_QUOTES, 'UTF-8') ?>index.php" title="Mathissofun">
					<img src="<?= htmlspecialchars($updirectory, ENT_QUOTES, 'UTF-8') ?>images/logo.png" alt="Math is so fun logo">
				</a>
			</div><!--/ #kids_logo_block-->

			<nav id="kids_main_nav">
				<div class="menu-button">
					<span class="menu-button-line"></span>
					<span class="menu-button-line"></span>
					<span class="menu-button-line"></span>
				</div>
				<ul class="clearfix flexnav" data-breakpoint="800">
					<li <?= ($thispage == '/addition.php') ? 'class="current-menu-item"' : '' ?>>
						<a href="<?= htmlspecialchars($updirectory, ENT_QUOTES, 'UTF-8') ?>addition.php">Addition</a>
					</li>

					<li <?= ($thispage == '/subtraction.php') ? 'class="current-menu-item"' : '' ?>>
						<a href="<?= htmlspecialchars($updirectory, ENT_QUOTES, 'UTF-8') ?>subtraction.php">Subtraction</a>
					</li>
					<li <?= ($thispage == '/multiplication.php') ? 'class="current-menu-item"' : '' ?>>
						<a href="<?= htmlspecialchars($updirectory, ENT_QUOTES, 'UTF-8') ?>multiplication.php">Multiplication</a>
					</li>

					<li <?= ($thispage == '/division.php') ? 'class="current-menu-item"' : '' ?>>
						<a href="<?= htmlspecialchars($updirectory, ENT_QUOTES, 'UTF-8') ?>division.php">Division</a>
					</li>
					<li class="item-with-ul">
						<a href="kids_page.php">My Page</a>
						<?php /* if($userroleidquery == '4'){ ?><a href="<?php echo $updirectory; ?>kids_page.php">My Page</a><?php } */ ?>
						<?php /* if($userroleidquery == '3'){ ?><a href="<?php echo $updirectory; ?>parents_page.php">My Page</a><?php } */ ?>
					</li>
					<?php if (isset($_SESSION["userid"])): ?>
						<li><a href="<?= htmlspecialchars($updirectory, ENT_QUOTES, 'UTF-8') ?>db/logout.php">Logout</a></li>
					<?php else: ?>
						<li><a href="<?= htmlspecialchars($updirectory, ENT_QUOTES, 'UTF-8') ?>/registration.php">Register</a></li>
					<?php endif; ?>
				</ul>

			</nav><!-- #kids_main_nav -->
			<div class="kids_clear"></div>
		</div><!--/ .l-page-width-->

	</header><!--/ #kids_header-->

</div>