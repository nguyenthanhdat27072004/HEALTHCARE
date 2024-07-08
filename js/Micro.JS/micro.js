function openSpeechWindow() {
    document.getElementById('chat-container').style.display = 'block';
}

function closeSpeechWindow() {
    document.getElementById('chat-container').style.display = 'none';
    document.getElementById('result').textContent = '';
    document.getElementById('messages').innerHTML = '';
    document.getElementById('loader').style.display = 'none';
    document.getElementById('loaderForListen').style.display = 'none';
}

function displayUserMessage(message) {
    const responseContainer = document.getElementById('messages');
    const messageDiv = document.createElement('div');
    messageDiv.className = 'message user';
    messageDiv.textContent = message;
    responseContainer.appendChild(messageDiv);
}

function clearSuggestions() {
    const suggestionButtons = document.querySelectorAll('.suggestion-button');
    suggestionButtons.forEach(button => button.remove());
}

function displayResponse(response) {
    const responseContainer = document.getElementById('messages');

    response.messages.forEach(message => {
        if (message.type === 'answer') {
            const messageDiv = document.createElement('div');
            messageDiv.className = 'message assistant';
            messageDiv.textContent = message.content;
            responseContainer.appendChild(messageDiv);
        }
        if (message.type === 'follow_up') {
            const button = document.createElement('button');
            button.className = 'suggestion-button';
            button.textContent = message.content;
            button.addEventListener('click', () => {
                document.getElementById('loader').style.display = 'block';
                askCoze(message.content);
            });
            responseContainer.appendChild(button);
        }
    });
}

document.getElementById('micro-button').addEventListener('click', function() {
    document.getElementById('chat-container').style.display = 'block';
    startRecognition();
});

document.getElementById('micro-button-window').addEventListener('click', function() {
    document.getElementById('chat-container').style.display = 'block';
    startRecognition();
});

document.getElementById('close-button').addEventListener('click', function() {
    closeSpeechWindow();
});

if ('webkitSpeechRecognition' in window || 'SpeechRecognition' in window) {
    const SpeechRecognition = window.webkitSpeechRecognition || window.SpeechRecognition;
    const recognition = new SpeechRecognition();
    recognition.lang = 'vi-VN';
    recognition.interimResults = false;
    recognition.maxAlternatives = 1;

    recognition.onstart = () => {
        document.getElementById('loaderForListen').style.display = 'block';
    };

    recognition.onresult = (event) => {
        const transcript = event.results[0][0].transcript;
        document.getElementById('result').textContent = `Kết quả: ${transcript}`;
        displayUserMessage(transcript);
        document.getElementById('loaderForListen').style.display = 'none';
        document.getElementById('loader').style.display = 'block';
        askCoze(transcript);
    };

    recognition.onspeechend = () => {
        recognition.stop();
        document.getElementById('loaderForListen').style.display = 'none';
    };

    recognition.onerror = (event) => {
        console.error('Lỗi xảy ra trong quá trình nhận diện: ' + event.error);
        document.getElementById('loaderForListen').style.display = 'none';
    };

    function startRecognition() {
        recognition.start();
    }
} else {
    console.log('Trình duyệt không hỗ trợ Web Speech API.');
}

function askCoze(text) {
    const data = {
        "conversation_id": "123",
        "bot_id": "7377747601325637649",
        "user": "123333333",
        "query": text,
        "stream": false
    };

    $.ajax({
        url: 'https://api.coze.com/open_api/v2/chat',
        type: 'POST',
        headers: {
            'Authorization': 'Bearer pat_X7B4LYrwYys5ystOeqCUtUlfnotoeUP7MyxWpULQVcQf6nZ0FPzInZK41RVWfbjf', 
            'Content-Type': 'application/json'
        },
        data: JSON.stringify(data),
        success: function(response) {
            document.getElementById('loader').style.display = 'none';
            try {
                console.log(response);
                clearSuggestions();
                displayResponse(response);
            } catch (e) {
                console.error('Lỗi phân tích cú pháp JSON: ', e);
                console.error('Phản hồi gốc: ', response);
            }
        },
        error: function(xhr, status, error) {
            document.getElementById('loader').style.display = 'none';
            console.error('Lỗi xảy ra trong quá trình gửi yêu cầu: ', error);
        }
    });
}
