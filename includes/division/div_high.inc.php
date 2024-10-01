<?php $time = $_GET['time'];
$low = $_GET['low']; ?>
<h1><span style="color:#F93">You choose <?=$time?> for your times table and <?=$hig?> for your high number.</span>
<h1>Now choose your highest number to divide by <?=$time?>:</h1>
<div class="border-shadow alignleft">
<?php
	$sent = $num = $time;	
	$end = $sent * 13;
	$input = array(); 
		while($num < $end){
			$input[] = $num; 
				 if($num > $low){ 
						echo '<div style="float:left; margin:2px;"><figure><a href="?high=' . $num . '&time=' . $sent . '&low=' . $low . '"><img src="images/numbers/' . $num . '.jpg" alt="" height="180" width="135"></a></figure></div>';
				 } else{ 
						  echo '<div style="float:left; margin:2px;"><figure><img src="images/numbers/gray/' . $num . '.jpg" alt="" height="180" width="135"></figure></div>';
				 } 
			$num = $num + $sent ;
		}
?>
</div>
