<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Existing Page with Webcam Scan</title>
    <link rel="stylesheet" href="/testphp/css/ScanCam.CSS/style-scan-cam.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="existing-content">
        <h1>Welcome to the existing page</h1>
        <p>This is some existing content on the page.</p>
    </div>
    
    <!-- Place the search button anywhere on the page -->
    <button type="button" id="search-button" onclick="startScan()">🔍 Search</button>

    <div class="container"></div>
    <div id="webcam-container"></div>
    <div id="label-container"></div>
    <div id="results"></div>
    <button type="button" id="close-camera" onclick="stop()">X</button>

    <!-- Instructions and reference elements -->
    <div id="instructions">
        <h2>Hướng dẫn sử dụng webcam:</h2>
        <img src="/testphp/images/DrugGuiformain/hdsdcam.webp" alt="Hướng dẫn sử dụng">
        <ol>
            <li>Đảm bảo rằng môi trường xung quanh đủ ánh sáng.</li>
            <li>Đặt webcam ở vị trí cố định để tránh rung lắc.</li>
            <li>Đặt vật thể cần nhận diện trong khung hình của webcam.</li>
            <li>Kiểm tra kết nối mạng để đảm bảo không bị gián đoạn.</li>
            <li>Sử dụng trình duyệt hiện đại để đạt hiệu suất tốt nhất.</li>
        </ol>
    </div>
    <div id="reference">
        <h2>Chỉ nên tham khảo:</h2>
        <ol>
            <li>Ứng dụng chỉ trong quá trình tham khảo.</li>
            <li>Chỉ có khả năng nhận diện giới hạn</li>
            <li>Chưa có một dữ liệu đủ lớn.</li>
            <li>Hãy cố gắng liên lạc đến cơ quan y tế là tốt nhất</li>
            <li>Cảm ơn bạn đã sử dụng.</li>
        </ol>
    </div>
    <div id="loading-message">
        <div class="loader"></div>
        <p>Xin vui lòng đợi...</p>
    </div>
    <div id="result" style="display: none;">
        <div id="result-section"></div>
        <button type="button" onclick="reset()">Quay lại</button>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@latest/dist/tf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@teachablemachine/image@latest/dist/teachablemachine-image.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/coco-ssd"></script>
    <script src="/testphp/js/Scan-Cam.JS/scan-cam.js"></script>
</body>
</html>