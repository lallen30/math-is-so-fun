<?php
$thisans = $thishigh - $thislow;
// echo $sum . ' x ' . $addto . ' = <br /><br /><br />';
echo '<div class="multiplication"><img src="images/numbers/' . $thishigh . '.jpg" /></div>' . ' <div class="multiplication"><img src="images/numbers/subtrac.jpg" /></div> ' . '<div class="multiplication"><img src="images/numbers/' . $thislow . '.jpg" /></div>' . ' <div class="multiplication"><img src="images/numbers/equals.jpg" /></div>  <br /><br /><br />';
?>
<div id="multanswerbackground">
	<form name="myForm" id="multanswer" action="subtraction.php" method="post" title="answer">
		<input type="text" pattern="\d*" name="answer" />
		<input type="hidden" name="truelow" value="<?php echo $truelow; ?>" />
		<input type="hidden" name="truehigh" value="<?php echo $truehigh; ?>" />
		<input type="hidden" name="low" value="<?php echo $thislow; ?>" />
		<input type="hidden" name="high" value="<?php echo $thishigh; ?>" />
		<input type="hidden" name="num1" value="<?php echo $number1; ?>" />
		<input type="hidden" name="num2" value="<?php echo $number2; ?>" />
		<input type="hidden" name="addto" value="<?php echo $addto; ?>" />
		<input type="hidden" name="realanswer" value="<?php echo $thisans; ?>" /><br />
		<input class="multiButton" type="submit" value="" />
	</form>
</div>
<br />
<br />
<br />
<br />
<?php include('includes/subtraction/sub_resetnumber.inc.php'); ?>
<!-- <a href="addition.php">Reset numbers</a> -->
