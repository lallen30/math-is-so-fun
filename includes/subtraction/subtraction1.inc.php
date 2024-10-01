<?php
	$answer = $_POST['answer'];
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$truelow = $_POST['truelow'];
	$truehigh = $_POST['truehigh'];
	$low = $_POST['low'];
	$high = $_POST['high'];
	$sum = $_POST['sum'];
	$realanswer = $_POST['realanswer'];
	$addto = $_POST['addto'];

	if($realanswer == $answer){
			// echo 'Way to go!!!! Yes the answer is ' . $realanswer .  '<br />';
			// echo 'Try another:<br />';
			echo'<img style="display:block; margin:0 auto;" src="images/buttons/way-to-go.png">';
			echo '<br />';
			$highans = $truehigh - 1;
			$thislow = rand($truelow, $highans);
			$thishigh = rand($thislow, $truehigh);
					include('subtraction3.inc.php');	

		}else{
				// echo 'That is incorrect. Try again: <br />';
				$thishigh = $high;
				$thislow = $low;
				echo'<img style="display:block; margin:0 auto;" src="images/buttons/try-again.jpg">';
			echo '<br />';
				include('includes/subtraction/subtraction3.inc.php');

		}
?>