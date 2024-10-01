
<?php if(!isset($_POST['low']) && !isset($_POST['high'])){ ?>

<form action="" method="post" title="answer">
<?php if(!isset($_POST['low'])){ ?>
	Choose the lowest number to multiply <select name="low">
  <option value="1" selected>1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="3">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
 <?php if(isset($_POST['low'])){ ?> <input type="hidden" name="high" value="<?php echo $_POST['high']; ?>" /> <?php } ?>
</select> <br />
<?php } ?>
<?php if(!isset($_POST['high'])){ ?>
	Choose the highest number to multiply <select name="high">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="3">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12" selected>12</option>
 <?php if(isset($_POST['high'])){ ?> <input type="hidden" name="low" value="<?php echo $_POST['low']; ?>" /> <?php } ?>
</select> 

<?php } ?>
    <input type="submit" value="Send" />
</form>
<?php } ?>
<?php 
if(isset($_POST['low']) && isset($_POST['high']) || isset($high) && isset($low)){ 

if(isset($_POST['high'])){ $high = $_POST['high']; }
if(isset($_POST['low'])){ $low = $_POST['low']; }
$number1 = rand($low, $high);
$number2 = rand($low, $high);

$thissum = $number1 * $number2;
echo $number1 . ' x ' . $number2 . ' =';
?>
<form action="" method="post" title="answer">
	<input type="text" name="answer" />
    <input type="hidden" name="low" value="<?php echo $_POST['low']; ?>" />
    <input type="hidden" name="high" value="<?php echo $_POST['high']; ?>" />
    <input type="hidden" name="num1" value="<?php echo $number1; ?>" />
    <input type="hidden" name="num2" value="<?php echo $number2; ?>" />
    <input type="hidden" name="realanswer" value="<?php echo $thissum; ?>" />
    <input type="submit" value="Send" />
</form>

<br />
<br />
<br />
<br /><a href="">Reset numbers</a>
<?php } ?>