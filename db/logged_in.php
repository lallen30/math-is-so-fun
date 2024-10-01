<?php
@session_start();
require_once 'connect.php'; // Make sure this file is in the same directory

if (isset($_SESSION["userid"])) {
	$userid = $_SESSION["userid"];
	$stmt = $mysqli->prepare("SELECT id, role_id, username FROM users WHERE id = ? LIMIT 1");
	$stmt->bind_param("i", $userid);
	$stmt->execute();
	$result = $stmt->get_result();

	if ($row = $result->fetch_assoc()) {
		$username = $row['username'];
		$useridquery = $row['id'];
		$userroleidquery = $row['role_id'];
	}

	$stmt->close();
}
