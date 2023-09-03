<?php
$host = 'localhost';
$dbname = 'tru_db';
$user = 'root';
$pass = '';

try {
    // Establish the database connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
    
    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    echo "Connected to the database successfully!";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>