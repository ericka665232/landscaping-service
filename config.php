<?php
$host = 'localhost';
$db = 'landscaping_service';
$user = 'root'; // Default for XAMPP
$pass = ''; // Default is empty for XAMPP

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
