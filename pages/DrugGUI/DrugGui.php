<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spline Viewer Example</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="/testphp/css/DrugGUI.CSS/stylefortestwithphp.css">
    <link rel="stylesheet" href="/testphp/css/DrugGUI.CSS/styleforsearchDrugGui.css">
    <link rel="stylesheet" href="/testphp/css/ScanCam.CSS/style-scan-cam.css">
    <link rel="stylesheet" href="/testphp/css/Micro.CSS/micro.css">
    <link rel="stylesheet" href="/testphp/css/Micro.CSS/micro.css"> 
</head>
<style>
        /* Base styles for the navigation */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .nav-list {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
            align-items: center;
        }

        .nav-list li {
            margin-right: 20px;
        }

        .nav-list a {
            text-decoration: none;
            color: #000;
        }

        .nav-toggle {
            display: none;
            background: none;
            border: none;
            font-size: 1.5em;
            cursor: pointer;
            color: #000;
            margin-left: 100px;
        }

        .nav-container {
            display: none;
            flex-direction: column;
            align-items: center;
            width: 100%;
            background-color: rgba(255, 255, 255, 0.9);
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 10px 0;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 999;
        }

        .nav-container.active {
            display: flex;
        }

        .overlay-menu {
            list-style: none;
            padding: 0;
            text-align: center;
            width: 100%;
        }

        .overlay-menu li {
            margin: 10px 0;
        }

        .overlay-menu a {
            color: #000;
            font-size: 1.2em;
            text-decoration: none;
            display: block;
            padding: 10px;
            transition: background 0.3s;
        }

        .overlay-menu a:hover {
            background-color: rgba(0, 0, 0, 0.1);
        }

        .close-btn {
            font-size: 2em;
            color: #000;
            cursor: pointer;
            position: absolute;
            top: 10px;
            right: 20px;
        }

        @media (max-width: 768px) {
            .nav-list .Bao_box_function {
                display: none;
            }
            .nav-toggle {
                display: block;
            }
        }
    </style>
<body>
    
    <div class="existing-content">
    <header >
        <nav>
            <ul class="nav-list">
                <li class="Bao_logo_nav">
                    <a href="/testphp/pages/HomePage.PHP/HomePage.php">
                        <img src="/testphp/images/MainGUI.images/logo.png" alt="">
                        <p>LIVESAVER</p>
                    </a>
                </li>
                <button class="nav-toggle" id="nav-toggle">
                    <i class="fa fa-bars"></i>
                </button>
                <li class="Bao_box_function">
                    <a href="/testphp/pages/DrugGUI/DrugGui.php">DRUGS</a>
                    <a href="/testphp/pages/BodyMapGUI/BodyMapGui.php">BODYMAP</a>
                    <a href="/testphp/pages/CSSKGUI/CSSK.php">BODYCAL</a>
                    <a href="/testphp/pages/Introduction/infor.php">ABOUTUS</a>
                    <button type="button" id="search-button" onclick="startScan()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-camera2" viewBox="0 0 16 16">
                            <path d="M5 8c0-1.657 2.343-3 4-3V4a4 4 0 0 0-4 4"/>
                            <path d="M12.318 3h2.015C15.253 3 16 3.746 16 4.667v6.666c0 .92-.746 1.667-1.667 1.667h-2.015A5.97 5.97 0 0 1 9 14a5.97 5.97 0 0 1-3.318-1H1.667C.747 13 0 12.254 0 11.333V4.667C0 3.747.746 3 1.667 3H2a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1h.682A5.97 5.97 0 0 1 9 2c1.227 0 2.367.368 3.318 1M2 4.5a.5.5 0 1 0-1 0 .5.5 0 0 0 1 0M14 8A5 5 0 1 0 4 8a5 5 0 0 0 10 0"/>
                        </svg> 
                    </button>
                    <button type="button" id="micro-button" onclick="openSpeechWindow()">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-mic-fill" viewBox="0 0 16 16">
                            <path d="M5 3a3 3 0 0 1 6 0v5a3 3 0 0 1-6 0z"/>
                            <path d="M3.5 6.5A.5.5 0 0 1 4 7v1a4 4 0 0 0 8 0V7a.5.5 0 0 1 1 0v1a5 5 0 0 1-4.5 4.975V15h3a.5.5 0 0 1 0 1h-7a.5.5 0 0 1 0-1h3v-2.025A5 5 0 0 1 3 8V7a.5.5 0 0 1 .5-.5"/>
                        </svg>
                    </button>
                </li>
            </ul>
        </nav>
        <div class="nav-container" id="nav-container">
            <span class="close-btn" id="close-btn">&times;</span>
            <ul class="overlay-menu">
                <li><a href="/testphp/pages/DrugGUI/DrugGui.php">DRUGS</a></li>
                <li><a href="/testphp/pages/BodyMapGUI/BodyMapGui.php">BODYMAP</a></li>
                <li><a href="/testphp/pages/CSSKGUI/CSSK.php">BODYCAL</a></li>
                <li><a href="/testphp/pages/Introduction/infor.php">ABOUTUS</a></li>
            </ul>
        </div>
    </header>
        <div id="content">
            <div class="all-div">
                <div class="Dat-searchGui">
                    <div class="Dat-search-section">
                        <div class="Dat-containerfind">
                            <h1 class="Dat-main-heading">Find drugs suits the best</h1>
                            <h1><span class="Dat-highlight">DrugSavingsCentral</span></h1>
                            <p class="Dat-description">
                                From concept to execution, we deliver web designs that make and visually stunning websites.
                            </p>
                            <div class="overlay"></div>
                            <div class="Dat-inserted-image">
                                <img src="\testphp\images\DrugGuiformain\test3.png" alt="Inserted Image">
                            </div>
                            <div class="Dat-find-form">
                                <div class="row">
                                    <input id="Dat-input-box" class="Dat-input-box" type="text" placeholder="Enter your drug name" autocomplete="off">
                                    <button class="Dat-search" type="button">Find!</button>
                                </div>
                                <div class="Dat-result-box" id="resultBox">
                                    <ul id="resultsList"></ul>
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                        <div class="Dat-bangchucai-find">
                            <div class="Dat-alphabet-filter">
                                <button class="letter" data-letter="A">A</button>
                                <button class="letter" data-letter="B">B</button>
                                <button class="letter" data-letter="C">C</button>
                                <button class="letter" data-letter="D">D</button>
                                <button class="letter" data-letter="E">E</button>
                                <button class="letter" data-letter="F">F</button>
                                <button class="letter" data-letter="G">G</button>
                                <button class="letter" data-letter="H">H</button>
                                <button class="letter" data-letter="I">I</button>
                                <button class="letter" data-letter="J">J</button>
                                <button class="letter" data-letter="K">K</button>
                                <button class="letter" data-letter="L">L</button>
                                <button class="letter" data-letter="M">M</button>
                                <button class="letter" data-letter="N">N</button>
                                <button class="letter" data-letter="O">O</button>
                                <button class="letter" data-letter="P">P</button>
                                <button class="letter" data-letter="Q">Q</button>
                                <button class="letter" data-letter="R">R</button>
                                <button class="letter" data-letter="S">S</button>
                                <button class="letter" data-letter="T">T</button>
                                <button class="letter" data-letter="U">U</button>
                                <button class="letter" data-letter="V">V</button>
                                <button class="letter" data-letter="W">W</button>
                                <button class="letter" data-letter="X">X</button>
                                <button class="letter" data-letter="Y">Y</button>
                                <button class="letter" data-letter="Z">Z</button>
                                <button class="letter" data-letter="0-9">0-9</button>
                            </div>
                            <div class="Dat-info-boxes">
                                <div class="Dat-info-box">
                                    <div class="Dat-icon">
                                        <svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2.25 11.9994C2.25 11.2426 2.33278 10.5061 2.48954 9.79839C3.52877 11.4668 4.9817 12.8444 6.70303 13.7805C6.89642 15.2744 7.31649 16.8492 7.91754 18.3021C8.4287 19.5376 9.08647 20.7226 9.87759 21.7036C5.52106 20.7171 2.25 16.7562 2.25 11.9994Z" fill="currentColor" fill-opacity="0.25"></path>
                                            <path d="M6.58273 11.9511C5.09625 10.9367 3.89759 9.51584 3.14064 7.84162C4.39913 5.05845 6.8817 2.97347 9.87759 2.2951C9.08647 3.2761 8.4287 4.46106 7.91754 5.69662C7.07721 7.72786 6.59064 9.99757 6.58273 11.9511Z" fill="currentColor" fill-opacity="0.25"></path>
                                            <path d="M16.0799 18.3021C15.5688 19.5376 14.911 20.7226 14.1199 21.7036C18.4764 20.7171 21.7475 16.7562 21.7475 11.9994C21.7475 11.2426 21.6647 10.5061 21.508 9.79841C20.4687 11.4668 19.0158 12.8445 17.2944 13.7805C17.1011 15.2744 16.681 16.8492 16.0799 18.3021Z" fill="currentColor" fill-opacity="0.25"></path>
                                            <path d="M17.4148 11.9511C18.9012 10.9367 20.0999 9.51585 20.8569 7.84164C19.5984 5.05847 17.1158 2.97347 14.1199 2.29511C14.911 3.2761 15.5688 4.46106 16.0799 5.69662C16.9203 7.72786 17.4069 9.99758 17.4148 11.9511Z" fill="currentColor" fill-opacity="0.25"></path>
                                            <path d="M9.3035 6.27003C10.0004 4.58556 10.9365 3.14358 11.9986 2.25C13.0608 3.14358 13.9969 4.58556 14.6938 6.27003C15.4761 8.16121 15.9147 10.2571 15.9147 11.9993C15.9147 12.26 15.9049 12.5287 15.8856 12.8033C14.694 13.3321 13.3792 13.625 11.9986 13.625C10.618 13.625 9.30329 13.3321 8.11167 12.8033C8.09234 12.5287 8.08252 12.26 8.08252 11.9993C8.08252 10.2571 8.52111 8.16121 9.3035 6.27003Z" fill="currentColor"></path>
                                            <path d="M11.9986 15.125C13.2807 15.125 14.5119 14.907 15.6587 14.5059C15.4523 15.5799 15.1253 16.6854 14.6938 17.7287C13.9969 19.4131 13.0608 20.8551 11.9986 21.7487C10.9365 20.8551 10.0004 19.4131 9.3035 17.7287C8.87192 16.6854 8.54495 15.5799 8.3385 14.5059C9.48539 14.907 10.7166 15.125 11.9986 15.125Z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                    <div class="Dat-info">
                                        <h3>Accurately Medication</h3>
                                        <p>Exported from Drug Bank</p>
                                    </div>
                                </div>
                                <div class="Dat-info-box">
                                    <div class="Dat-icon">
                                        <svg width="50" height="50" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8.55681 21.7488H15.443C17.9932 21.7488 19.2684 21.7488 19.8663 21.0613C20.054 20.8455 20.1933 20.5919 20.2746 20.3176C20.5338 19.4441 19.8493 18.3682 18.4804 16.2165L18.3427 16C15 19.5 9 19.5 5.65709 16L5.51933 16.2166C4.15054 18.3683 3.46614 19.4441 3.72526 20.3176C3.80662 20.5919 3.94586 20.8455 4.1336 21.0614C4.73154 21.7488 6.00663 21.7488 8.55681 21.7488Z" fill="currentColor" fill-opacity="0.25"></path>
                                            <path d="M19.5 9.75C19.5 12.0563 18.459 14.1195 16.8212 15.4953C15.5176 16.5904 13.8358 17.25 12 17.25C10.164 17.25 8.48209 16.5903 7.17838 15.495C5.54084 14.1192 4.5 12.0561 4.5 9.75C4.5 5.60786 7.85786 2.25 12 2.25C16.1421 2.25 19.5 5.60786 19.5 9.75Z" fill="currentColor"></path>
                                        </svg>
                                    </div>
                                    <div class="Dat-info">
                                        <h3>Smooth Experience</h3>
                                        <p>Enhanced Application</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="spline-container">
                    <script type="module" src="https://unpkg.com/@splinetool/viewer@1.7.4/build/spline-viewer.js"></script>
                    <spline-viewer url="https://prod.spline.design/LycuwY9yJjdaD3ea/scene.splinecode"></spline-viewer>
                        </div>
                </div>
            </div>
            <div class="Dat-container-category">
                <h1 class="Dat-title-slider">20+ Products</h1>
                <div class="Dat-category-autoplay-slider"></div>
            </div>
            <div class="Dat-title-product-container">
                <h1 class="Dat-title-product-container-for-all">Products</h1>
            </div>
            <div class="Dat-product-container-for-all"></div>
            <div class="Dat-container-product-sorted"></div>
        </div>
    </div>

    <!-- div cho microchat -->
    <div id="chat-container">
        <button id="close-button">X</button>
        <h1>TheHealthCare</h1>
        <p id="subtitle">Leave Your Voice Instantly</p>
        <div id="messages"></div>
        <div id="loader"></div>
        <div id="loaderForListen"><img src="/testphp/images/MicroImages/wave-sound.png" alt="Listening..."></div>
        <div id="input-container">
            <input type="text" id="text-input" placeholder="Text at here...">
            <button id="send-button">Send</button>
        </div>
        <button id="micro-button-window"><i class="fa fa-microphone-lines"></i></button>
        <!-- <button id="back-button" onclick="closeSpeechWindow()">Quay lại</button> -->
    </div>

    <!-- quét camera -->
    <div id="webcam-container"></div>
    <div id="label-container"></div>
    <div id="results"></div>
    <button type="button" id="close-camera" onclick="stop()">X</button>
    <div id="instructions">
        <h2>Hướng dẫn sử dụng webcam:</h2>
        <img src="/testphp/images/DrugGuiformain/hdsdcam.webp" alt="Hướng dẫn sử dụng">
        <ol>
            <li>Đảm bảo rằng môi trường xung quanh đủ ánh sáng.</li>
            <li>Đặt webcam ở vị trí cố định để tránh rung lắc.</li>
            <li>Đặt vật thể cần nhận diện trong khung hình của webcam.</li>
            <li>Kiểm tra kết nối mạng để đảm bảo không bị gián đoạn.</li>
            <li>Sử dụng trình duyệt hiện đại để đạt hiệu suất tốt nhất.</li>
        </ol>
    </div>
    <div id="reference">
        <h2>Chỉ nên tham khảo:</h2>
        <ol>
            <li>Ứng dụng chỉ trong quá trình tham khảo.</li>
            <li>Chỉ có khả năng nhận diện giới hạn.</li>
            <li>Chưa có một dữ liệu đủ lớn.</li>
            <li>Hãy cố gắng liên lạc đến cơ quan y tế là tốt nhất.</li>
            <li>Cảm ơn bạn đã sử dụng.</li>
        </ol>
    </div>
    <div id="loading-message">
        <div class="loader"></div>
        <p>Xin vui lòng đợi...</p>
    </div>
    <div id="result" style="display: none;">
        <div id="result-section"></div>
        <button type="button" onclick="reset()">Quay lại</button>
    </div>

    <div class="green-container">
    <div class="green-content">
        <h2>Saving Life</h2>
        <div class="contact-info">
            <p><i class="fas fa-heartbeat"></i> "Explore accurate medication information for your well-being. Empower your health with trusted insights, accessible anytime, anywhere."</p>
        </div>
        <div class="icon-grid">
            <div class="icon-item">
                <i class="fas fa-pills"></i>
                <p>Medication</p>
            </div>
            <div class="icon-item">
                <i class="fas fa-stethoscope"></i>
                <p>Consultation</p>
            </div>
            <div class="icon-item">
                <i class="fas fa-notes-medical"></i>
                <p>Health Records</p>
            </div>
            <div class="icon-item">
                <i class="fas fa-heart"></i>
                <p>Well-being</p>
            </div>
        </div>
    </div>
</div>


    <div class="footer_main">
        <div class="waveWrapper waveAnimation">
            <div class="waveWrapperInner bgTop">
                <div class="wave waveTop" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-top.png')"></div>
            </div>
            <div class="waveWrapperInner bgMiddle">
                <div class="wave waveMiddle" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-mid.png')"></div>
            </div>
            <div class="waveWrapperInner bgBottom">
                <div class="wave waveBottom" style="background-image: url('http://front-end-noobs.com/jecko/img/wave-bot.png')"></div>
            </div>
        </div>
        <div class="contact_link footer_item">
            <h2>Contact</h2>
            <p>Hotline: xxxxxxxx</p>
            <p>Hotline: xxxxxxxx</p>
        </div>

        <div class="member_team footer_item">
            <h2>Members of team</h2>
            <p>NTD</p>
            <p>DQB</p>
            <p>TRANG</p>
            <p>HOANG</p>
        </div>

        <div class="connect_media footer_item">
            <h2>Social media</h2>
            <p>Facebook</p>
            <p>Instagram</p>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="/testphp/js/DrugGUI.JS/testwithphp.js"></script>
    <script src="/testphp/js/DrugGUI.JS/highlight.js"></script>
    <script src="/testphp/js/DrugGUI.JS/searchforDugGui.js"></script>
    <script src="/testphp/js/DrugGUI.JS/searchforDrugGuiusinginput.js"></script>
    <script src="/testphp/js/DrugGUI.JS/autocompleteforfinddrugusingi.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@latest/dist/tf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@teachablemachine/image@latest/dist/teachablemachine-image.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/coco-ssd"></script>
    <script src="/testphp/js/Scan-Cam.JS/scan-cam.js"></script>
    <script src="/testphp/js/Micro.JS/micro.js"></script> <!-- Link to the JavaScript file -->
    <script src="/testphp/js/DrugGUI.JS/autocompleteforfinddrugusingi.js"></script>

    <style>
/* Green Container */
/* Green Container */
.green-container {
    width: 100%;
    background-color: #00b140;
    padding: 40px 20px;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    z-index: 2;
    margin-bottom: -60px; /* Điều chỉnh giá trị này để di chuyển container lên xuống */
    max-width: 75%;
    margin-left: auto;
    margin-right: auto;
    border-radius: 10px;
    display: none;
}

.green-content {
    width: 90%;
    max-width: 1200px;
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.green-content h2 {
    margin-bottom: 20px;
    font-size: 2.5em;
    font-weight: bold;
}

.green-content .contact-info {
    margin-bottom: 30px;
    font-size: 1.2em;
    line-height: 1.5;
}

.green-content .contact-info i {
    margin-right: 10px;
    color: #fff;
    font-size: 1.5em;
}

.icon-grid {
    display: flex;
    justify-content: space-around;
    width: 100%;
    max-width: 800px;
    flex-wrap: wrap;
}

.icon-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin: 10px;
}

.icon-item i {
    font-size: 3em;
    margin-bottom: 10px;
}

.icon-item p {
    font-size: 1.1em;
    font-weight: bold;
}

/* Footer styles */
.footer_main {
    width: 100vw;
    height: 50vh;
    background: url(/testphp/images/HomePage.Images/HomePageGui-First.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    display: flex;
    justify-content: space-around;
    align-items: center;
    position: relative;
    z-index: 1;
    overflow: hidden;
    padding-top: 40px; /* Để đảm bảo phần wave không bị che khuất */
}

.footer_main::before {
    width: 100%;
    height: 100%;
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    background-color: rgba(41, 41, 41, 0.54);
    z-index: 2;
}

.footer_main .footer_item {
    padding: 10px 50px;
    width: 30%;
    height: 80%;
    color: white;
    z-index: 3;
}

.footer_main .footer_item h2 {
    width: 100%;
    height: 30%;
    font-size: 1.5em;
    display: flex;
    align-items: center;
    position: relative;
}

.footer_main .footer_item h2::before {
    width: 100%;
    height: 2px;
    content: "";
    position: absolute;
    bottom: 10px;
    left: 0;
    background-color: #ffffff;
}

@keyframes move_wave {
    0% {
        transform: translateX(0) translateZ(0) scaleY(1);
    }
    50% {
        transform: translateX(-25%) translateZ(0) scaleY(0.55);
    }
    100% {
        transform: translateX(-50%) translateZ(0) scaleY(1);
    }
}

.waveWrapper {
    overflow: hidden;
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    top: 0;
    margin: auto;
}

.waveWrapperInner {
    position: absolute;
    width: 100%;
    overflow: hidden;
    height: 100%;
    bottom: -1px;
    background: transparent;
}

.bgTop {
    z-index: 15;
    opacity: 0.5;
}

.bgMiddle {
    z-index: 10;
    opacity: 0.75;
}

.bgBottom {
    z-index: 5;
}

.wave {
    position: absolute;
    left: 0;
    width: 200%;
    height: 100%;
    background-repeat: repeat no-repeat;
    background-position: 0 bottom;
    transform-origin: center bottom;
}

.waveTop {
    background-size: 50% 100px;
}

.waveAnimation .waveTop {
    animation: move_wave 3s linear infinite;
    -webkit-animation: move_wave 3s linear infinite;
    -webkit-animation-delay: 1s;
    animation-delay: 1s;
}

.waveMiddle {
    background-size: 50% 120px;
}

.waveAnimation .waveMiddle {
    animation: move_wave 10s linear infinite;
}

.waveBottom {
    background-size: 50% 100px;
}

.waveAnimation .waveBottom {
    animation: move_wave 15s linear infinite;
}

/* Media Queries */
@media (max-width: 1200px) {
    .footer_main .footer_item {
        padding: 10px 30px;
    }
}

@media (max-width: 992px) {
    .green-container{
        display: none;
    }
    .green-content h2 {
        font-size: 2em;
    }

    .green-content .contact-info {
        font-size: 1em;
    }

    .icon-item i {
        font-size: 2.5em;
    }

    .icon-item p {
        font-size: 1em;
    }

    .footer_main {
        height: 60vh;
    }

    .footer_main .footer_item {
        padding: 10px 20px;
        width: 45%;
    }
}

@media (max-width: 768px) {
    .green-content h2 {
        font-size: 1.8em;
    }

    .icon-grid {
        flex-direction: column;
        align-items: center;
    }

    .footer_main {
        height: auto;
        flex-direction: column;
        padding: 20px 0;
    }

    .footer_main .footer_item {
        width: 80%;
        margin-bottom: 20px;
    }
}

@media (max-width: 576px) {
    .green-content h2 {
        font-size: 1.5em;
    }

    .green-content .contact-info {
        font-size: 0.9em;
    }

    .icon-item i {
        font-size: 2em;
    }

    .icon-item p {
        font-size: 0.9em;
    }

    .footer_main .footer_item {
        width: 100%;
        padding: 10px;
    }
}

    </style>
      <script>
        document.getElementById('nav-toggle').addEventListener('click', function() {
            document.getElementById('nav-overlay').classList.toggle('active');
        });
    </script>
    <script>
        
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

    document.querySelector('.menu-icon').addEventListener('click', function() {
        const baoBoxFunction = document.querySelector('.Bao_box_function');
        baoBoxFunction.classList.toggle('show');
    });
    
});

document.getElementById('menu-icon').addEventListener('click', function() {
    const baoBoxFunction = document.querySelector('.Bao_box_function');
    baoBoxFunction.classList.toggle('show');
});
    </script>
        <script>
        document.getElementById('nav-toggle').addEventListener('click', function() {
            document.getElementById('nav-container').classList.add('active');
        });

        document.getElementById('close-btn').addEventListener('click', function() {
            document.getElementById('nav-container').classList.remove('active');
        });
    </script>
        <script src="https://sf-cdn.coze.com/obj/unpkg-va/flow-platform/chat-app-sdk/0.1.0-beta.4/libs/oversea/index.js"></script>
      <script>
          new CozeWebSDK.WebChatClient({
            config: {
              bot_id: '7379883161985581057',
            },
            componentProps: {
              title: 'Coze',
            },
          });
      </script>
</body>
</html>
