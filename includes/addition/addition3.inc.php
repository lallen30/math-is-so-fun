<?php
$thissum = $sum + $addto;
// echo $sum . ' x ' . $addto . ' = <br /><br /><br />';
echo '<div class="multiplication"><img src="images/numbers/' . $sum . '.jpg" /></div>' . ' <div class="multiplication"><img src="images/numbers/add.jpg" /></div> ' . '<div class="multiplication"><img src="images/numbers/' . $addto . '.jpg" /></div>' . ' <div class="multiplication"><img src="images/numbers/equals.jpg" /></div>  <br /><br /><br />';
?>
<div id="multanswerbackground">
	<form name="myForm" id="multanswer" action="addition.php" method="post" title="answer">
		<input type="text" pattern="\d*" name="answer" />
		<input type="hidden" name="sum" value="<?php echo $sum; ?>" />
		<input type="hidden" name="low" value="<?php echo $low; ?>" />
		<input type="hidden" name="high" value="<?php echo $high; ?>" />
		<input type="hidden" name="num1" value="<?php echo $number1; ?>" />
		<input type="hidden" name="num2" value="<?php echo $number2; ?>" />
		<input type="hidden" name="addto" value="<?php echo $addto; ?>" />
		<input type="hidden" name="realanswer" value="<?php echo $thissum; ?>" /><br />
		<input class="multiButton" type="submit" value="" />
	</form>
</div>
<br />
<br />
<br />
<br />
<?php include('includes/addition/add_resetnumber.inc.php'); ?>
<!-- <a href="addition.php">Reset numbers</a> -->
