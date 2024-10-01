<?php $time = $_GET['times']; ?>
<h1><span style="color:#F93">You choose <?=$time?> for your divisor.</span></h1>
<h1>Now choose the lowest number to divide by <?=$time?>:</h1>

<div class="border-shadow alignleft">

<?php
	$highest = $time * 12;
	$sent = $num = $time;	
	$end = $sent * 13;
	$input = array(); 
		while($num < $end){
			$input[] = $num; 
			if($num != $highest){ echo '<div style="float:left; margin:2px;"><figure><a href="?low=' . $num . '&time='. $sent . '"><img src="images/numbers/'. $num . '.jpg" alt="" height="180" width="135"></a></figure></div>'; }
			if($num == $highest){ echo '<div style="float:left; margin:2px;"><figure><img src="images/numbers/'. $num . '.jpg" alt="" height="180" width="135"></figure></div>'; }
			$num = $num + $sent ;
		}
echo '<br />';

 ?>

 </div>
