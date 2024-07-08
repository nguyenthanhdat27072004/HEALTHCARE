$(document).ready(function() {
    $('.Dat-clicktosend').click(function() {
        var messageText = $('#Dat-inputformessage').val();
        console.log('input: ', messageText);
        if (messageText.trim() != '') {
            // Tạo khối cho câu hỏi người dùng
            var messageBlock = document.createElement('div');
            messageBlock.classList.add('message-block');
            
            var userMessage = document.createElement('div');
            userMessage.classList.add('message', 'user');
            userMessage.textContent = messageText;
            
            messageBlock.appendChild(userMessage);

            // Làm trống trường nhập liệu và giữ focus
            $('#Dat-inputformessage').val('').focus();

            $.ajax({
                url: '/testphp/pages/DrugGUI.PHP/DrugSQLforQueryfortestchat.php', // Đường dẫn đến file PHP xử lý trên server
                type: 'GET', // Phương thức gửi dữ liệu
                data: { 'stringchat': messageText }, // Dữ liệu gửi đi
                dataType: 'json', // Kiểu dữ liệu mong muốn nhận về
                success: function(response) {
                    var responseData = response.message || "Không có phản hồi từ server";
                    var responseMessage = document.createElement('div');
                    responseMessage.classList.add('message', 'response');
                    responseMessage.textContent = responseData;
                    
                    messageBlock.appendChild(responseMessage);
                    $('#chat-window').append(messageBlock);
                },
                error: function() {
                    var errorMessage = document.createElement('div');
                    errorMessage.classList.add('message', 'response');
                    errorMessage.textContent = "Có lỗi xảy ra khi kết nối đến server";
                    
                    messageBlock.appendChild(errorMessage);
                    $('#chat-window').append(messageBlock);
                }
            });
        }
    });
});
