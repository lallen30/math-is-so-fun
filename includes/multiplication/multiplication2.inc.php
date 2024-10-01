<?php
if(isset($_GET['time'])){ $times = $_GET['time']; }
if(isset($_GET['low'])){ $low = $_GET['low']; }
if(isset($_GET['high'])){ $high = $_GET['high']; }


if(isset($_POST['times'])){ $times = $_POST['times']; }
if(isset($_POST['high'])){ $high = $_POST['high']; }
if(isset($_POST['low'])){ $low = $_POST['low']; }


$multiby = rand($low, $high);

$thissum = $times * $multiby;


				include('includes/multiplication/multiplication3.inc.php');
?>