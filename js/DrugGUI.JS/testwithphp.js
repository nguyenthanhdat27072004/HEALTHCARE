$(document).ready(function() {
    function loadData() {
        $.ajax({
            url: '/testphp/pages/DrugGUI.PHP/DrugSQLforApi.php',
            type: 'GET',
            dataType: 'json',
            success: function(response) {
                processProducts(response.products);
                processCategories(response.categories);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('Error:', textStatus, errorThrown);
                alert('Không thể tải dữ liệu từ server');
            }
        });
    }

    function processProducts(products) {
        if (Array.isArray(products)) {
            $('.Dat-product-container-for-all').empty();
            let productsHtml = '';
            products.forEach(function(product) {
                productsHtml += `
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
                </div>    
                `;
            });
            $('.Dat-product-container-for-all').append(productsHtml);
        }
    }

    function processCategories(categories) {
        if (Array.isArray(categories)) {
            $('.Dat-category-autoplay-slider').empty();
            let categoriesHtml = '';
            categories.forEach(function(category) {
                categoriesHtml += `
                    <div class="Dat-category">
                        <img src="${category.urlimg}" alt="Category Image">
                    </div>
                `;
            });
            $('.Dat-category-autoplay-slider').append(categoriesHtml);
            $('.Dat-category-autoplay-slider').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                dots: false,
                arrows: false,
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1
                        }
                    }
                ]
            });
        }
    }

    loadData();
});
