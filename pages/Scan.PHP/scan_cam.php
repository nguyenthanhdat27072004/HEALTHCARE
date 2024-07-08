<?php
// scan_cam.php

header('Content-Type: application/json');

// Thông tin kết nối cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "healthdbforbwd";

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die(json_encode(array("error" => "Connection failed: " . $conn->connect_error)));
}

// Kiểm tra xem biến $_GET['names'] có tồn tại và không rỗng
if (isset($_GET['names']) && !empty($_GET['names'])) {
    $names = explode(',', $_GET['names']);
    $placeholders = implode(',', array_fill(0, count($names), '?'));

    // Truy vấn cơ sở dữ liệu
    $sql = "SELECT * FROM products WHERE information IN ($placeholders)";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die(json_encode(array("error" => "Failed to prepare statement: " . $conn->error)));
    }

    // Bind the parameters dynamically
    $types = str_repeat('s', count($names));
    $stmt->bind_param($types, ...$names);

    if ($stmt->execute() === false) {
        die(json_encode(array("error" => "Failed to execute statement: " . $stmt->error)));
    }

    $result = $stmt->get_result();

    // Tạo mảng chứa dữ liệu sản phẩm
    $products = array();
    while ($row = $result->fetch_assoc()) {
        $products[] = $row;
    }

    // Đóng kết nối
    $stmt->close();
    $conn->close();

    // Trả về dữ liệu JSON
    echo json_encode($products);
} else {
    // Trả về lỗi nếu biến names không tồn tại hoặc rỗng
    echo json_encode(array("error" => "Names parameter is missing or empty.", "get_data" => $_GET));
}
?>
