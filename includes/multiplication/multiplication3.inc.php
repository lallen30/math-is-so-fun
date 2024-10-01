<?php
$thissum = $times * $multiby;
$currentdate = date("F j, Y, g:i a");


if (isset($_POST['givehint'])) {
	$givehint = $_POST['givehint'];
	if ($givehint == '1') {
		$answers = $_POST['answer'];
	}
	if ($givehint > '1') {
		$answers = $_POST['answ'] . ', ' . $_POST['answer'];
	}
	if ((int)$givehint == 5) {
		$giveanswer = 'Answer: ' . $thissum;
		$missedsql = $mysqli->query("INSERT INTO missed (missed_id, user_id, first, second, answers, type, currentdate)VALUE('', '" . $useridquery . "', '" . $times . "', '" . $multiby . "', '" . $answers . "', '3', '" . $currentdate . "')") or die(mysqli_error($mysqli));
	} else {
		$givehint = (int)$givehint + 1;
	}
} else {
	$givehint = '1';
}

// echo '<hr />'.$_POST['givehint']. ' | ' .$givehint.'<hr />';

echo '<div class="multiplication"><img src="images/numbers/' . $times . '.jpg" /></div>' . ' <div class="multiplication"><img src="images/numbers/times.jpg" /></div> ' . '<div class="multiplication"><img src="images/numbers/' . $multiby . '.jpg" /></div>' . ' <div class="multiplication"><img src="images/numbers/equals.jpg" /></div>  <br /><br /><br />';
?>
<div id="multanswerbackground">
	<form name="myForm" id="multanswer" action="multiplication.php" method="post" title="answer">
		<input type="text" pattern="\d*" name="answer" <?php if (isset($giveanswer)) {
																											echo 'value="' . $thissum . '" style="color:#E55A77" ';
																										} ?> />
		<input type="hidden" name="times" value="<?php echo $times; ?>" />
		<input type="hidden" name="low" value="<?php echo $low; ?>" />
		<input type="hidden" name="high" value="<?php echo $high; ?>" />
		<input type="hidden" name="num1" value="<?php echo $number1; ?>" />
		<input type="hidden" name="num2" value="<?php echo $number2; ?>" />
		<input type="hidden" name="answ" value="<?php echo $answers; ?>" />
		<input type="hidden" name="givehint" value="<?php echo $givehint; ?>" />
		<input type="hidden" name="multiby" value="<?php echo $multiby; ?>" />
		<input type="hidden" name="realanswer" value="<?php echo $thissum; ?>" /><br />
		<input class="multiButton" type="submit" value="" />
	</form>
</div>
<br />

<br />
<br />
<br />
<?php include('includes/multiplication/mult_resetnumber.inc.php'); ?>
<!-- <a href="multiplication.php">Reset numbers</a> -->