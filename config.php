
<?php

// Database settings for MAMP
$host = '127.0.0.1';
$port = '8888';
$dbname = 'is_security_project';
$username = 'root';
$password = 'root';

// Connect to MySQL
try {
    $pdo = new PDO(
        "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4",
        $username,
        $password,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES => false
        ]
    );

} catch (PDOException $e) {
    error_log($e->getMessage());
    http_response_code(500);
    exit('Database connection failed.');
}
