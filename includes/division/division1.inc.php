<?php
	$answer = $_POST['answer'];
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$low = $_POST['low'];
	$high = $_POST['high'];
	$times = $_POST['times'];
	$realanswer = $_POST['realanswer'];
	$multiby = $_POST['multiby'];

	if($realanswer != $answer){
				echo'<img style="display:block; margin:0 auto;" src="images/buttons/try-again.jpg">';
			echo '<br />';
				include('includes/division/division3.inc.php');
		}else if($realanswer == $answer){
			echo'<img style="display:block; margin:0 auto;" src="images/buttons/way-to-go.png">';
			include('includes/division/div_vars_rand.inc.php'); 
		} 
?>