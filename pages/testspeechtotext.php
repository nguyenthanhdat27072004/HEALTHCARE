<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Web Speech API Demo - Tiếng Việt</title>
</head>
<body>
    <h1>Chuyển Giọng Nói Thành Văn Bản</h1>
    <button id="start-recognition">Bắt đầu nhận diện</button>
    <p id="result"></p>

    <script>
        if ('webkitSpeechRecognition' in window || 'SpeechRecognition' in window) {
            const SpeechRecognition = window.webkitSpeechRecognition || window.SpeechRecognition;
            const recognition = new SpeechRecognition();
            recognition.lang = 'vi-VN'; // Thiết lập ngôn ngữ là tiếng Việt
            recognition.interimResults = false; // Không hiển thị kết quả tạm thời
            recognition.maxAlternatives = 1; // Chỉ nhận kết quả tốt nhất

            const startButton = document.getElementById('start-recognition');
            const resultElement = document.getElementById('result');

            startButton.addEventListener('click', () => {
                recognition.start();
                console.log('Bắt đầu nhận diện giọng nói.');
            });

            recognition.onresult = (event) => {
                const transcript = event.results[0][0].transcript;
                resultElement.textContent = `Kết quả: ${transcript}`;
                console.log(`Kết quả: ${transcript}`);
            };

            recognition.onspeechend = () => {
                recognition.stop();
                console.log('Kết thúc nhận diện giọng nói.');
            };

            recognition.onerror = (event) => {
                console.error('Lỗi xảy ra trong quá trình nhận diện: ' + event.error);
            };
        } else {
            console.log('Trình duyệt không hỗ trợ Web Speech API.');
        }
    </script>
</body>
</html>
