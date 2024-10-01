<?php @session_start();
if (isset($_GET['username'])) {
    $_SESSION["username"] = $_GET['username'];
    echo 'Logging in to your account. Please continue to wait...';
    if ($_GET['page'] == 'parent') {
        //  echo 'parent';
        echo '<META http-equiv="refresh" content="5;URL=http://www.localhost:8080/parents_page.php "> ';
    } else {
        echo '<META http-equiv="refresh" content="5;URL=http://www.localhost:8080/index.php"> ';
    }
}
