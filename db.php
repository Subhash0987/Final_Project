<?php
// Automatically detect environment: local or hosting
$server = $_SERVER['HTTP_HOST'];

if ($server == 'localhost' || $server == '127.0.0.1') {
    // 🔧 Localhost (XAMPP) settings
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "config"; // Your local DB name
} else {
    // 🌐 Online Hosting (InfinityFree) settings
    $host = "sql213.infinityfree.com"; // Replace with your actual InfinityFree MySQL Host
    $user = "if0_39403416";    // Replace with your InfinityFree MySQL username
    $pass = "lg4qdtqEsfhz";    // Replace with your InfinityFree database password
    $dbname = "if0_39403416_config"; // Replace with full online DB name
}

// ✅ Connect to MySQL
$conn = mysqli_connect($host, $user, $pass, $dbname);

// ❌ Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
