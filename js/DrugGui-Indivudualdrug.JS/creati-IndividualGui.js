$(document).ready(function(){
    function loadDataforIndividualDrug (){
        $.ajax({
            url: '/testphp/pages/DrugGUIforIndividualdrug/DrugIndividualGui.php',
            type: 'GET',
            dataType: 'json',
            success: function(response){
                processInformation(response.information);
                processInformationforDrug(response.informationforDrug);
                processInformationremaining(response.informationremaining);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.error('Error:', textStatus, errorThrown);
                alert('Không thể tải dữ liệu từ server');
            }
        })
    }

    function processInformation (information){
        if (Array.isArray(information)){
            // thẻ div chứa no
            let information = ' ';
            information.forEach(function(information){
                informationHtml += `

                `;
            });
            $('.Dat-product-container').append(productsHtml);

        }
    }

    loadDataforIndividualDrug();
});