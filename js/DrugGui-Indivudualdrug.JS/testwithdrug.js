$(document).ready(function() {
    $.ajax({
        url: '/testphp/pages/testwithparacetamolphp.php', // URL tới file PHP
        type: 'GET',
        success: function(data) {
            $('#hoang-thongtinchitiet').html(data); // Cập nhật dữ liệu vào thẻ div

        },
        error: function() {
            $('#hoang-thongtinchitiet').html('Unable to load data.'); // Hiển thị lỗi nếu không tải được dữ liệu
        }
    });
});
