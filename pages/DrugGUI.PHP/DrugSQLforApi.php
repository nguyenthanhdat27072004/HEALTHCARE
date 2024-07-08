<?php

ini_set('log_errors', 'ON');
ini_set('error_log', dirname(__FILE__) . '/api_error.log');

$host = 'localhost';
$dbname = 'healthdbforbwd';
$username = 'root';
$password = '';

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    error_log("Connection Failed: " . $conn->connect_error);
    echo json_encode(['error' => "Connection failed: " . $conn->connect_error]);
    exit;
}

$response = ['products' => [], 'categories' => []];

$sql = "SELECT information, price,img,href FROM products";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $response['products'][] = $row;
    }
}

// Query for categories
$sql = "SELECT ten,urlimg FROM categories";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $response['categories'][] = $row;
    }
}

echo json_encode($response); 

$conn->close();


?>
