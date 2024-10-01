<?php
$host = getenv('DB_HOST') ?: 'kidsmath-db-1';
$username = getenv('DB_USER') ?: 'root';
$password = getenv('DB_PASSWORD') ?: 'rootpassword';
$database = getenv('DB_NAME') ?: 'kidsmath';

$mysqli = new mysqli($host, $username, $password, $database);

if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') ' . $mysqli->connect_error);
}

// Uncomment the following line for debugging
// echo 'Connected successfully to the database.';
