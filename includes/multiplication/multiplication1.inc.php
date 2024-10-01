<?php
	$answer = $_POST['answer'];
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$low = $_POST['low'];
	$high = $_POST['high'];
	$times = $_POST['times'];
	$realanswer = $_POST['realanswer'];
    $multiby = $_POST['multiby'];

	if($realanswer == $answer){
        // echo 'Way to go!!!! Yes the answer is ' . $realanswer .  '<br />';
        // echo 'Try another:<br />';
        $_POST['givehint'] = '';
        echo'<img style="display:block; margin:0 auto;" src="images/buttons/way-to-go.png">';
        echo '<br />';
        $multiby = rand($low, $high);
                include('multiplication3.inc.php');
		}else{
            // echo 'That is incorrect. Try again: <br />';
            echo'<img style="display:block; margin:0 auto;" src="images/buttons/try-again.jpg">';
            echo '<br />';
            include('includes/multiplication/multiplication3.inc.php');
		}
?>