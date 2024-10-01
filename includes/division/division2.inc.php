<?php
if(isset($_GET['time'])){ $times = $_GET['time']; }
if(isset($_GET['low'])){ $low = $_GET['low']; }
if(isset($_GET['high'])){ $high = $_GET['high']; }

if(isset($_POST['times'])){ $times = $_POST['times']; }
if(isset($_POST['high'])){ $high = $_POST['high']; }
if(isset($_POST['low'])){ $low = $_POST['low']; }

$sent = $num = $low;	
	$end = $sent * 13;
	$input = array(); 
		while($num < $high){
			$input[] = $num; 
			$num = $num + $sent ;
		}
$k = array_rand($input);
$multiby = $input[$k];
$thissum = $multiby / $times;

echo '<div class="multiplication"><img src="images/numbers/' . $multiby . '.jpg" /></div>' . ' <div class="multiplication"><img src="images/numbers/divide.jpg" /></div> ' . '<div class="multiplication"><img src="images/numbers/' . $times . '.jpg" /></div>' . ' <div class="multiplication"><img src="images/numbers/equals.jpg" /></div>  <br /><br /><br />';
?>
<div id="multanswerbackground">
	<form name="myForm" id="multanswer" action="division.php" method="post" title="answer">
		<input type="text" pattern="\d*" name="answer" />
		<input type="hidden" name="times" value="<?php echo $times; ?>" />
		<input type="hidden" name="low" value="<?php echo $low; ?>" />
		<input type="hidden" name="high" value="<?php echo $high; ?>" />
		<input type="hidden" name="num1" value="<?php echo $number1; ?>" />
		<input type="hidden" name="num2" value="<?php echo $number2; ?>" />
		<input type="hidden" name="multiby" value="<?php echo $multiby; ?>" />
		<input type="hidden" name="realanswer" value="<?php echo $thissum; ?>" /><br />
		<input class="multiButton" type="submit" value="" />
	</form>
</div>
<br />
<br />
<br />
<br /><h1><a href="division.php">Reset numbers</a></h1>
