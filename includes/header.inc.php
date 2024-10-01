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
    <title><?php echo $pagetitle; ?></title>
  <?php if($pageID == 'registration'){ ?>
    <link rel="stylesheet" href="../css/styles.css" />
	<link rel="stylesheet" href="../css/video-js.css" />
	<link rel="stylesheet" href="../css/prettyPhoto.css" /><!-- HTML5 Shiv -->
	<link rel="stylesheet" href="../css/flexnav.css" />
	<link rel="stylesheet" href="../themeChanger/css/colorpicker.css" />
	<link rel="stylesheet" href="../themeChanger/css/themeChanger.css" />
	<script src="../js/modernizr.custom.js"></script>
    <?php }else{ ?>
    <link rel="stylesheet" href="css/styles.css" />
	<link rel="stylesheet" href="css/video-js.css" />
	<link rel="stylesheet" href="css/prettyPhoto.css" /><!-- HTML5 Shiv -->
	<link rel="stylesheet" href="css/flexnav.css" />
	<link rel="stylesheet" href="themeChanger/css/colorpicker.css" />
	<link rel="stylesheet" href="themeChanger/css/themeChanger.css" />
	<script src="js/modernizr.custom.js"></script>
<?php } ?> 
</head>