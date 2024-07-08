function showContent(contentNumber) {

    // Hide all content divs
    document.querySelectorAll('.hoang-content').forEach(function(content) {
        content.style.display = 'none';
    });

    // Show the selected content div
    var contentToShow = document.getElementById('content' + contentNumber);
    contentToShow.style.display = 'block';

    // Scroll to the content div
    contentToShow.scrollIntoView({ behavior: 'smooth' });
}

let calcScrollValue = () => {
    let scrollProgress = document.getElementById("progress");
    let progressValue = document.getElementById("progress-value");
    let pos = document.documentElement.scrollTop;
    let calcHeight =
      document.documentElement.scrollHeight -
      document.documentElement.clientHeight;
    let scrollValue = Math.round((pos * 100) / calcHeight);
    if (pos > 100) {
      scrollProgress.style.display = "grid";
    } else {
      scrollProgress.style.display = "none";
    }
    scrollProgress.addEventListener("click", () => {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
    scrollProgress.style.background = `conic-gradient(#22606b ${scrollValue}%, #ffff ${scrollValue}%)`;
  };
  
  window.onscroll = calcScrollValue;
  window.onload = calcScrollValue;

function toggleActive(activeId, inactiveId) {
    document.getElementById(activeId).classList.add('active');
    document.getElementById(inactiveId).classList.remove('active');
}

function toggleActiveBMR(activeId, inactiveId) {
  document.getElementById(activeId).classList.add('active');
  document.getElementById(inactiveId).classList.remove('active');
}
function ShowBMIResult() {

  var contentToHidden = document.getElementById('Bao_block_img');
  var contentToShow = document.getElementById('Bao_block_BMI_result');
  var getGender = document.getElementsByClassName('Bao_box_gender block_item').value;
  var getAge = document.getElementsByClassName('input_age').value;
  var getHeight = document.getElementById('input_height').value;
  var getWeight = document.getElementById('input_weight').value;

  if (isNaN(getHeight) || isNaN(getWeight) || getHeight <= 0 || getWeight <= 0) {
    alert('Vui lòng nhập giá trị hợp lệ.');
    return;
  }

  var heightInMeters = getHeight / 100;
  var bmi = getWeight / (heightInMeters * heightInMeters);

  // Hiển thị kết quả
  var resultText = 'BMI = ' + bmi.toFixed(2);

  document.getElementById('result').innerText = resultText;

  contentToShow.style.display = 'block';
  contentToHidden.style.display = 'none';
}

function ShowBMRResult() {

  var contentToHidden = document.getElementById('Bao_block_img_BMR');
  var contentToShow = document.getElementById('Bao_block_BMR_result');
  var getAge = document.getElementById('input_age').value;
  var getHeight = document.getElementById('input_height_BMR').value;
  var getWeight = document.getElementById('input_weight_BMR').value;

  if (isNaN(getHeight) || isNaN(getWeight) || isNaN(getAge) || getHeight <= 0 || getWeight <= 0 || getAge <= 0) {
    alert('Vui lòng nhập giá trị hợp lệ.');
    return;
  }

  var bmi = 66 + (13.7 * getWeight) + (5 * getHeight) - (6.8 * getAge);

  // Hiển thị kết quả
  var resultText = 'BMR = ' + bmi.toFixed(2);

  document.getElementById('resultBMR').innerText = resultText;
  contentToShow.style.display = 'block';
  contentToHidden.style.display = 'none';
}

function ShowTDEEResult() {

  var contentToHidden = document.getElementById('Bao_block_img_TDEE');
  var contentToShow = document.getElementById('Bao_block_TDEE_result');
  var getAge = document.getElementById('input_age').value;
  var getHeight = document.getElementById('input_height_TDEE').value;
  var getWeight = document.getElementById('input_weight_TDEE').value;

  if (isNaN(getHeight) || isNaN(getWeight) || isNaN(getAge) || getHeight <= 0 || getWeight <= 0 || getAge <= 0) {
    alert('Vui lòng nhập giá trị hợp lệ.');
    return;
  }

  var bmi = (66 + (13.7 * getWeight) + (5 * getHeight) - (6.8 * getAge)) * 1.375;

  // Hiển thị kết quả
  var resultText = 'TDEE = ' + bmi.toFixed(2);

  document.getElementById('resultTDEE').innerText = resultText;

  contentToShow.style.display = 'block';
  contentToHidden.style.display = 'none';

}

Translate

