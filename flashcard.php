<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
if(isset($_POST['answer'])){
	$answer = $_POST['answer'];
	$num1 = $_POST['num1'];
	$num2 = $_POST['num2'];
	$low = $_POST['low'];
	$high = $_POST['high'];
	$realanswer = $_POST['realanswer'];

	if($realanswer == $answer){
			echo 'Way to go!!!! Yes the answer is ' . $realanswer;
			echo '<br /><br />';
					include('flashcard.inc.php');	

		}else{
				echo 'No that is incorrect. Try again: <br />';
				echo $num1 . ' x ' . $num2 . ' =';
?>
    <form action="" method="post" title="answer">
        <input type="text" name="answer" />
        <input type="hidden" name="num1" value="<?php echo $num1; ?>" />
        <input type="hidden" name="num2" value="<?php echo $num2; ?>" />
    <input type="hidden" name="low" value="<?php echo $low; ?>" />
    <input type="hidden" name="high" value="<?php echo $high; ?>" />
        <input type="hidden" name="realanswer" value="<?php echo $realanswer; ?>" />
     <input type="submit" value="Send" />
   </form>


<?php
		}

	}else{
		include('flashcard.inc.php');	
 } ?>
 
</body>
</html>