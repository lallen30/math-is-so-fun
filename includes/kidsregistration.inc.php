<!-- ***************** - START Page Content - *************** -->

<?php
$usergood = '0';
$passgood = '0';


// childname must be digits and letters
if (isset($_POST["childname"])) {
    if (preg_match("/^[0-9a-zA-Z_]{5,}$/", $_POST["childname"]) === 0) {
        $errUser = 'childname must be bigger that 5 chars and contain only digits, letters and underscore. ';
        $usergood = '1';
    } else {
        $childname = $_POST['childname'];
        $usergood = '2';
    }
}

// Password must be digits and letters
if (isset($_POST["password"])) {
    if (preg_match("/^[0-9a-zA-Z_]{3,}$/", $_POST["password"]) === 0) {
        $errPass = 'Password must be bigger that 5 chars and contain only digits, letters and underscore. ';
        $passgood = '1';
    } else {
        $password = $_POST['password'];
        $passgood = '2';
    }
}

$insertgood = $usergood + $passgood;


if ($insertgood == '4') {
    $checkrec = $mysqli->query("SELECT username FROM users WHERE username = '$childname' LIMIT 1");
    while ($checkrow = mysql_fetch_array($checkrec)) {
        $querychildname = $checkrow['username'];
    }

    if ($querychildname != $childname) {
        // echo 'pass parentid: ' . $parentid;
        $sql1 = 'INSERT INTO `users` (`role_id`, `username`, `password`, `parent_id`) VALUES ("4", "' . $childname . '", "' . $password . '", "' . $_SESSION["userid"] . '")';
        $regrec1 = $mysqli->query($sql1);
        echo 'Registering Child. Please wait...<META http-equiv="refresh" content="5;URL=parents_page.php"> ';
        exit();
    } else if ($querychildname == $childname) {
        $insertgood = '0';
        $message = 'That child username already exist. Please Try another. ';
        $userexit = '1';
    }
}
if ($insertgood == '6') {
    // echo '<h1>Welcome ' . $childname . '</h1>';
} else {
?>
    <h1>Register a child:</h1>
    <form action="parents_page.php" method="post" class="contactForm">
        <?php
        if (isset($errUser)) {
            $message .= $errUser;
        }
        if (isset($errPass)) {
            $message .= $errPass;
        }
        if (isset($message)) {
            echo '<p class="error-box">' . $message . '</p>';
        }
        ?>
        <fieldset>
            <div class="row">
                <label for="childname">Create your Child's Username:</label>
                <input <?php if (isset($childname) && $userexit != '1') {
                            echo 'value="' . $childname . '"';
                        } ?> name="childname" id="wname" type="text">
                <p>Child's username must be bigger that 5 chars and contain only digits, letters and underscore</p>
            </div>

            <div class="row">
                <label for="password">Create a Password:</label>
                <input <?php if (isset($password)) {
                            echo 'value="' . $password . '"';
                        } ?> name="password" id="wpass" type="password">
                <p>Password must be bigger that 3 chars and contain only digits, letters and underscore</p>
            </div>

            <div class="row">
                <button type="submit" class="button medium button-style1 l-float-right-send" value="send">send</button>
                <div class="clear"></div>
            </div>
        </fieldset>

    </form><!--/ #contactform-->
<?php } ?>
<!-- ***************** - END Page Content - *************** -->