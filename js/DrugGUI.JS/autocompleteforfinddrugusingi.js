document.addEventListener('DOMContentLoaded', function() {
    const availableKeywords = [
        'Paracetamol',
        'Ibuprofen',
        'Aspirin-100',
        'Amoxicillin',
        'Simvastatin 20',
        'Esomeprazole 40 Savi',
        'Losartan-25',
        'hạ sốt',
        'chống viêm',
        'điều trị nhiễm khuẩn',
        'điều trị tiểu đường',
        'giảm cholesterol',
        'giảm acid dạ dày',
        'điều trị cao huyết áp',
    ];

    const overlay = document.querySelector(".overlay");
    const resultBox = document.querySelector(".Dat-result-box");
    const resultsList = document.getElementById("resultsList");
    const inputBox = document.getElementById("Dat-input-box");

    inputBox.onkeyup = function() {
        let input = this.value;
        resultsList.innerHTML = '';

        if (input.length) {
            const filteredResults = availableKeywords.filter(keyword => keyword.toLowerCase().includes(input.toLowerCase()));
            
            if (filteredResults.length) {
                resultBox.style.display = 'block'; 
                overlay.style.display = 'block'; 
                filteredResults.forEach(result => {
                    let li = document.createElement('li');
                    li.textContent = result;
                    resultsList.appendChild(li);
                    li.onclick = function() {
                        inputBox.value = this.textContent; 
                        resultBox.style.display = 'none'; 
                        overlay.style.display = 'none';
                    };
                });
            } else {
                resultBox.style.display = 'none';
                overlay.style.display = 'none';
            }
        } else {
            resultBox.style.display = 'none'; 
            overlay.style.display = 'none'; 
        }
    };

    document.addEventListener('click', function(event) {
        if (!inputBox.contains(event.target) && !resultBox.contains(event.target)) {
            resultBox.style.display = 'none';
            overlay.style.display = 'none';
        }
    });
});
