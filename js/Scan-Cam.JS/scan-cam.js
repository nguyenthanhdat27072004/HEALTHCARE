const URL = "https://teachablemachine.withgoogle.com/models/zl5K1BmVE/";

let model, webcam, labelContainer, maxPredictions, cocoModel, canvas, ctx;
let isRunning = false;
let captureTimeout;
let resultsData = []; 

async function init() {
    try {
        isRunning = true;
        const existingContent = document.querySelector('.existing-content');
        if (existingContent) {
            existingContent.classList.add('blur'); // Làm mờ nội dung ban đầu
        }
        
        document.getElementById("loading-message").style.display = 'block';
        document.getElementById("search-button").style.display = 'none';
        document.getElementById("instructions").style.display = 'block';
        document.getElementById("reference").style.display = 'block';
        document.getElementById("webcam-container").style.display = 'block';
        document.getElementById("results").style.display = 'block';
        document.getElementById("close-camera").style.display = 'inline-block';

        const modelURL = URL + "model.json";
        const metadataURL = URL + "metadata.json";

        // load the Teachable Machine model and metadata
        model = await tmImage.load(modelURL, metadataURL);
        maxPredictions = model.getTotalClasses();

        // load the Coco SSD model
        cocoModel = await cocoSsd.load();

        // setup webcam
        const flip = true; // whether to flip the webcam
        webcam = new tmImage.Webcam(640, 480, flip); // width, height, flip
        await webcam.setup(); // request access to the webcam
        await webcam.play();
        window.requestAnimationFrame(loop);

        // append elements to the DOM
        document.getElementById("webcam-container").appendChild(webcam.canvas);
        labelContainer = document.getElementById("label-container");
        document.getElementById("label-container").innerHTML = ""; // clear previous predictions

        // create a canvas for drawing bounding boxes
        canvas = document.createElement('canvas');
        canvas.width = 640;
        canvas.height = 480;
        ctx = canvas.getContext('2d');
        document.getElementById("webcam-container").appendChild(canvas);

        // hide loading message
        document.getElementById("loading-message").style.display = 'none';

        // set interval to capture the result every 6 seconds
        captureTimeout = setInterval(() => {
            if (isRunning) {
                captureAndShowResults();
            }
        }, 6000);
    } catch (error) {
        console.error('Error initializing the webcam:', error);
        alert('Could not open your camera. You may have denied access.');
        reset();
    }
}

async function loop() {
    if (isRunning) {
        webcam.update(); // update the webcam frame
        await predict();
        window.requestAnimationFrame(loop);
    }
}

async function predict() {
    // predict with Teachable Machine model
    const prediction = await model.predict(webcam.canvas);
    prediction.sort((a, b) => b.probability - a.probability); // sort by probability

    const top3 = prediction.slice(0, 3); // get top 3 predictions
    resultsData = top3; // Lưu kết quả vào biến resultsData

    const resultsContainer = document.getElementById("results");
    resultsContainer.innerHTML = ""; // clear previous results

    top3.forEach(pred => {
        const resultItem = document.createElement("div");
        resultItem.className = "result-item";
        
        const pill = document.createElement("div");
        pill.className = "pill";
        
        const fill = document.createElement("div");
        fill.className = "fill";
        fill.style.backgroundColor = getColorByProbability(pred.probability * 100);
        fill.style.top = `${100 - (pred.probability * 100)}%`;

        const label = document.createElement("div");
        label.className = "label";
        label.textContent = `${(pred.probability * 100).toFixed(2)}%`;
        
        pill.appendChild(fill);
        pill.appendChild(label);
        resultItem.appendChild(pill);

        const text = document.createElement("div");
        text.textContent = pred.className; // Đây là nơi tên kết quả dự đoán được lưu trữ

        resultItem.appendChild(text);
        resultsContainer.appendChild(resultItem);
    });

    // predict with Coco SSD model
    const cocoPredictions = await cocoModel.detect(webcam.canvas);

    // clear previous drawings
    ctx.clearRect(0, 0, canvas.width, canvas.height);

    cocoPredictions.forEach(pred => {
        // draw bounding box
        ctx.beginPath();
        ctx.rect(pred.bbox[0], pred.bbox[1], pred.bbox[2], pred.bbox[3]);
        ctx.lineWidth = 2;
        ctx.strokeStyle = 'red';
        ctx.fillStyle = 'red';
        ctx.stroke();
        ctx.fillText(
            `${pred.class} (${Math.round(pred.score * 100)}%)`,
            pred.bbox[0],
            pred.bbox[1] > 10 ? pred.bbox[1] - 5 : 10
        );
    });
}

function captureAndShowResults() {
    stopLoop(); // Stop the loop

    const topPrediction = resultsData[0];
    if (topPrediction.className === "không tìm thấy" && topPrediction.probability > 0.5) {
        showNotFoundPopup();
    } else {
        showResults();
    }
}

function showNotFoundPopup() {
    const notFoundPopup = document.createElement("div");
    notFoundPopup.id = "not-found-popup";
    notFoundPopup.innerHTML = `
        <div class="popup-content">
            <h1>Không xác định</h1>
            <p>Vui lòng thử lại.</p>
            <button onclick="closeNotFoundPopup()">OK</button>
        </div>
    `;
    document.body.appendChild(notFoundPopup);
}

function closeNotFoundPopup() {
    const notFoundPopup = document.getElementById("not-found-popup");
    if (notFoundPopup) {
        document.body.removeChild(notFoundPopup);
    }
    reset();
}

function showResults() {
    const resultsContainer = document.getElementById("result-section");
    
    const newProductsContainer = document.createElement("div");
    newProductsContainer.id = "new-products-container";
    resultsContainer.appendChild(newProductsContainer);

    document.getElementById("result").style.display = 'block';

    const recognizedNames = resultsData.map(pred => pred.className);
    fetchProductsByNames(recognizedNames);
}

function stopLoop() {
    isRunning = false;
}

function stop() {
    isRunning = false;
    clearInterval(captureTimeout);
    if (webcam) {
        webcam.stop();
    }
    reset();
}

function reset() {
    const existingContent = document.querySelector('.existing-content');
    if (existingContent) {
        existingContent.classList.remove('blur'); // Xóa lớp mờ nội dung ban đầu
    }
    document.getElementById("webcam-container").style.display = 'none';
    document.getElementById("label-container").innerHTML = "";
    document.getElementById("results").style.display = 'none';
    document.getElementById("close-camera").style.display = 'none';
    document.getElementById("search-button").style.display = 'inline-block';
    document.getElementById("instructions").style.display = 'none';
    document.getElementById("reference").style.display = 'none';
    document.getElementById("result").style.display = 'none';
}

function getColorByProbability(probability) {
    if (probability > 80) {
        return 'green';
    } else if (probability > 50) {
        return 'yellow';
    } else {
        return 'red';
    }
}

// Add the fetchProductsByNames function
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
                <div class="Product-card-custom">
                    <img src="${product.img}" alt="Product Image">
                    <h3 class="Product-information-custom">${product.information}</h3>
                    <p class="Product-price-custom">${product.price}</p>
                    <a href="${product.href}">
                        <button class="Product-details-button-custom">XEM CHI TIẾT</button>
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

// Function to start the webcam scan when the search button is clicked
function startScan() {
    init();
}

// Ensure that the function is available globally
window.startScan = startScan;
