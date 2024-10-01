<?php
session_start();
ob_start();

include('db/connect.php');
include('db/logged_in.php');
$pagetitle = 'Math is So fun Login';
include('includes/header.inc.php');

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Login - Math is So Fun</title>
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/flexnav.css">
	<script src="js/modernizr.custom.js"></script>
</head>

<body class="t-blue t-pattern-1 secondary-page t-menu-1 t-header-1 t-text-1">
	<?php include('includes/menu.inc.php'); ?>

	<div id="kids_middle_container">
		<div class="kids_top_content">
			<div class="kids_top_content_middle">
				<div class="l-page-width">
				</div>
			</div>
		</div>

		<div class="bg-level-2-full-width-container kids_bottom_content">
			<div class="bg-level-2-page-width-container l-page-width no-padding">
				<section class="kids_bottom_content_container">
					<div class="entry-container">
						<?php
						$error = '';
						if ($_SERVER["REQUEST_METHOD"] == "POST") {
							$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
							$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

							echo "Debug: Attempting login with username: $username<br>";

							if (empty($username) || empty($password)) {
								$error = "Username and password are required.";
							} else {
								$stmt = $mysqli->prepare("SELECT id, username, password FROM users WHERE username = ? LIMIT 1");
								if ($stmt === false) {
									echo "Debug: Prepare failed: " . $mysqli->error . "<br>";
								} else {
									$stmt->bind_param("s", $username);
									$stmt->execute();
									$result = $stmt->get_result();

									echo "Debug: Query executed. Num rows: " . $result->num_rows . "<br>";

									if ($result->num_rows === 1) {
										$user = $result->fetch_assoc();
										echo "Debug: User found. Stored password hash: " . $user['password'] . "<br>";

										// Verify the password
										if (hash('sha256', $password) === $user['password']) {
											echo "Debug: Password verified successfully<br>";
											// Password is correct, set session variables
											$_SESSION["userid"] = $user['id'];
											$_SESSION["username"] = $user['username'];

											// Redirect to the user's profile page
											header("Location: parents_page.php");
											exit();
										} else {
											echo "Debug: Password verification failed<br>";
											$error = "Invalid username or password.";
										}
									} else {
										echo "Debug: User not found<br>";
										$error = "Invalid username or password.";
									}
									$stmt->close();
								}
							}
						}
						?>

						<h1>Log in:</h1>

						<?php
						if (!empty($error)) {
							echo "<p style='color: red;'>" . htmlspecialchars($error) . "</p>";
						}
						?>

						<form action="login.php" method="post" class="contactForm">
							<fieldset>
								<div class="row">
									<label for="username">User Name:</label>
									<input name="username" id="username" type="text" required>
								</div>

								<div class="row">
									<label for="password">Password:</label>
									<input name="password" id="password" type="password" required>
								</div>

								<div class="row">
									<button type="submit" class="button medium button-style1 l-float-right-send">Login</button>
									<div class="clear"></div>
								</div>
								<div style="position:relative;">
									<span style="position:relative; float:left; font-weight:bold;">
										<a style="color:#9BC0DD;" href="index.php">Forgot Username/Password</a>
									</span>
									<span style="float:left; position:relative; padding-bottom: 1em; font-weight:bold; margin-left:20px;">
										<a style="color:#9BC0DD;" href="registration.php">Register</a>
									</span>
								</div>
							</fieldset>
						</form>
					</div>
				</section>
			</div>
		</div>
	</div>

	<?php include('includes/footer.inc.php'); ?>
</body>

</html>
<?php
ob_end_flush();
?>