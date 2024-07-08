$(document).ready(function(){
    $('.Dat-search').click(function(){
        let drugname = $('#Dat-input-box').val();
        if (drugname) {  
            $.ajax({
                url: '/testphp/pages/DrugGUI.PHP/DrugSQLforSearchqueryusinginput.php',
                type: 'GET',
                data: { drugname: drugname },
                dataType: 'json',
                success: function(response) {
                    if (response.url) {
                        window.location.href = response.url;
                    } else {
                        alert('No details available for the specified drug.');
                    }
                }
            });
        }
    });
});
