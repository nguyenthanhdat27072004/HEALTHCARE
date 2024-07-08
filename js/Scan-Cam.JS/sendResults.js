// sendResults.js

function fetchProductsByNames(names) {
    console.log("Sending request with names:", names); // Thêm log để kiểm tra tên gửi đi
    $.ajax({
        url: '/testphp/pages/Scan.PHP/scan_cam.php', // Địa chỉ URL để lấy dữ liệu sản phẩm từ máy chủ
        type: 'GET',
        data: { names: names.join(',') }, // Gửi mảng tên nhận dạng từ webcam đến máy chủ
        success: function(products) {
            console.log("Received products:", products); // Thêm log để kiểm tra dữ liệu nhận được
            // Thêm sản phẩm vào thẻ div mới trong popupResultsContainer
            $('#new-products-container').empty();

            $.each(products, function(i, product) {
                let productHtml = `
                <div class="Dat-product-details">
                <img src="${product.img}" alt="Product Image">
                   <h3 class="information">${product.information}</h3>
                    <p class="price">${product.price}</p>
                    <a href="${product.href}">
                        <button class="details-button">XEM CHI TIẾT</button>
                    </a>
                </div>
                `;
                $('#new-products-container').append(productHtml);
            });
        },
        error: function(xhr, status, error) {
            console.error('Error fetching products:', status, error); // Ghi log chi tiết lỗi
            console.log(xhr.responseText); // Ghi log phản hồi của máy chủ
        }
    });
}

$(document).ready(function() {
    // Khi popup hiển thị, gọi hàm fetchProductsByNames nếu cần thiết
    $('#result-popup').on('show', function() {
        const recognizedNames = resultsData.map(pred => pred.className); // Lấy cả 3 tên từ kết quả nhận dạng
        fetchProductsByNames(recognizedNames);
    });
});
