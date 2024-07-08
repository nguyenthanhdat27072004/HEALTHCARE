let slideIndex = 0;
const slides = document.getElementsByClassName("Bao-block-item");

function moveSlide(n) {
    slideIndex += n;
    if (slideIndex >= slides.length) {
        slideIndex = 0; // Quay lại slide đầu tiên
    }
    if (slideIndex < 0) {
        slideIndex = slides.length - 1; // Chuyển đến slide cuối cùng nếu ở slide đầu tiên và bấm nút "prev"
    }
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.transform = "translateX(" + (-100 * slideIndex) + "%)";
    }
}

window.addEventListener('scroll', reveal);

function reveal(){
    var reveals = document.querySelectorAll(".reveal");

    for(var i = 0; i < reveals.length; i++){
        var heightWindown = window.innerHeight;
        var revealTop = reveals[i].getBoundingClientRect().top;
        var revealPoint = 100;

        if(revealTop < heightWindown - revealPoint) {
            reveals[i].classList.add('active');
        }
        else {
            reveals[i].classList.remove('active');
        }
    }
}

document.addEventListener("DOMContentLoaded", function() {
    // Function to hide all box contents
    function hideAllBoxes() {
        var boxContents = document.querySelectorAll('.box_main_content');
        boxContents.forEach(function(box) {
            box.classList.remove('move'); 
        });
    }

    // Function to rotate block-change
    function rotateBlockChange(degreeClass) {
        var blockChange = document.getElementById('block-change');

        // Remove all rotate classes before adding the new one
        blockChange.classList.remove('rotate-0', 'rotate-120', 'rotate-240');

        // Add the new rotate class
        blockChange.classList.add(degreeClass);
    }

    // Function to handle click events
    function click(a, b, degreeClass) {
        var blockItem = document.getElementById(a);
        var blockItemContent = document.getElementById(b);

        blockItem.addEventListener('click', () => {
            // Hide all box contents
            hideAllBoxes();

            // Show the clicked box content
            blockItemContent.classList.add('move');

            // Rotate the block-change element
            rotateBlockChange(degreeClass);
        });
    }

    click('block-change-BMI', 'Bao-BMI-box-id', 'rotate-0');
    click('block-change-BMR', 'Bao-BMR-box-id', 'rotate-120');
    click('block-change-TEDD', 'Bao-TEDD-box-id', 'rotate-240');
});

document.getElementById('menu-icon').addEventListener('click', function() {
    const baoBoxFunction = document.querySelector('.Bao_box_function');
    baoBoxFunction.classList.toggle('show');
});











