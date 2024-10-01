<?php
if(isset($_GET['sum'])){ $sum = $_GET['sum']; }
if(isset($_GET['low'])){ $low = $_GET['low']; }
if(isset($_GET['high'])){ $high = $_GET['high']; }


if(isset($_POST['sum'])){ $sum = $_POST['sum']; }
if(isset($_POST['high'])){ $high = $_POST['high']; }
if(isset($_POST['low'])){ $low = $_POST['low']; }


$addto = rand($low, $high);

$thissum = $sum * $addto;


				include('includes/addition/addition3.inc.php');
?>