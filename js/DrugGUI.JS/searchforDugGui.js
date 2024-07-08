$(document).ready(function() {
    $('.letter').on('click', function() {
        let letter = $(this).data('letter');
        console.log('Letter sent: ', letter);
        
        $.ajax({
            url: '/testphp/pages/DrugGUI.PHP/DrugSQLforSearchqueryusingletterDrugGui.php',
            type: 'GET',
            data: { letter: letter },
            dataType: 'json',
            success: function(products) {
                $('.Dat-product-container-for-all').empty();

                $.each(products, function(i, product) {
                    let productHtml = `
                    <div class="container">
                        <div class="Dat-product">
                            <div class="Dat-product-content">
                                <div class="Dat-img-container">
                                    <img src="${product.img}" alt="Product Image">
                                </div>
                                <h3 class="Dat-product-information">${product.information}</h3>
                                <p class="Dat-product-price">${product.price}</p>
                                <a href="${product.href}">
                                    <button class="cart"><i class="fas fa-search"></i></button>
                                </a>
                            </div>
                            <div class="Dat-parallelogram"></div>
                        </div>
                    </div>`;
                    
                    $('.Dat-product-container-for-all').append(productHtml);
                });

                $('html, body').animate({
                    scrollTop: $('.Dat-product-container-for-all').offset().top
                }, 1000);
            },
            error: function(xhr, status, error) {
                console.error("An error occurred: " + status + " " + error);
            }
        });
    });
});
