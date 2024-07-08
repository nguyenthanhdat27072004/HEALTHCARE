<?php
// Thiết lập thông tin kết nối cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "drugindividualdb";  // Đảm bảo rằng tên cơ sở dữ liệu này chính xác

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM druginformation WHERE tenthuoc='Paracetamol'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Xuất dữ liệu của mỗi hàng
    while($row = $result->fetch_assoc()) {
        echo "" . $row["giacavathongtinvahinhanh"] . "";
        echo "" . $row["menu"] . "";
        echo "" . $row["gioithieuthuocvahinhanh"] . "";
        echo " " . $row["chidinh"] . "";
        echo " " . $row["congdung"] . "";
        echo " " . $row["cachsudungvahinhanh"] . "";
        echo " " . $row["tacdungphu"] . "";

        // Thêm các thuộc tính khác nếu cần
    }
} else {
    echo "<p>No results found.</p>";
}

// Đóng kết nối
$conn->close();
?>
