<?php

$host = getenv('DB_HOST');
$port = getenv('DB_PORT');
$database = getenv('DB_DATABASE');
$username = getenv('DB_USERNAME');
$password = getenv('DB_PASSWORD');

$dsn = "mysql:host=$host;port=$port;dbname=$database";
$conn = new PDO($dsn, $username, $password);