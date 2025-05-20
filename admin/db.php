<?php
foreach (parse_ini_file('.env') as $key => $value) {
    $_ENV[$key] = $value;
  }

// Create connection
$conn = new mysqli($_ENV["DB_HOST"], $_ENV["DB_USERNAME"], $_ENV["DB_PASSWORD"], $_ENV["DB_NAME"]);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>