<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "healthdbforbwd";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$letter = isset($_GET['letter']) ? $_GET['letter'] : '';

// Xử lý đầu vào để tránh SQL Injection
$letter = $conn->real_escape_string($letter);

// Tạo truy vấn SQL tùy thuộc vào tham số đầu vào
if ($letter === '0-9') {
    $sql = "SELECT information, price, img FROM products WHERE information REGEXP '[0-9]'";
    $stmt = $conn->prepare($sql);
} else {
    $letter = '%' . $letter . '%';
    $sql = "SELECT information, price, img FROM products WHERE information LIKE ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $letter);
}

$stmt->execute();
$result = $stmt->get_result();

$products = [];
while ($row = $result->fetch_assoc()) {
    $products[] = $row;
}

$stmt->close();
$conn->close();

echo json_encode($products);
?>
