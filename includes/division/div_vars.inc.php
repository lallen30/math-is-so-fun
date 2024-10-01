<?php
$sent = $num = $low;	
	$end = $sent * 13;
	$input = array(); 
		while($num < $high){
			$input[] = $num; 
			/*echo $num . ' '; */
			$num = $num + $sent ;
		}
/*			print_r($input);
		echo '<br /><br />';
		  $randvalue = array_rand($input);
		echo  $input[$rand_keys[0]] . "\n";  */	
$k = array_rand($input);
$multiby = $input[$k];
// echo $multiby;
// echo '<hr />';
?>