<?php
if(isset($_GET['low'])){ $low = $_GET['low']; $truelow =  $_GET['low']; }
if(isset($_GET['high'])){ $high = $_GET['high']; $truehigh =  $_GET['high']; }

			$highans = $high - 1;
			$thislow = rand($low, $highans);
			$thishigh = rand($thislow, $high);

include('includes/subtraction/subtraction3.inc.php');
?>