<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/testphp/css/HomePageGUI.CSS/style-HomePage.css">
    <script src="/testphp/js/HomePage.JS/homepage-slideshow.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <header>
        <div class="existing-content">
        <video autoplay muted loop id="bg-video">
            <source src="/testphp/images/video/y2mate.com_-_THE_SEED_Inspirational_Short_Film_1080p (1).mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        <nav>
            <ul>
                <li class="Bao_logo_nav">
                    <a href="">
                        <img src="/testphp/images/MainGUI.images/logo.png" alt="">
                        <p>LIVESAVER</p>
                    </a>
                </li>
                <li class="Bao_box_function">
                    <a href="/testphp/pages/DrugGUI/DrugGui.php">DRUGS</a>
                    <a href="/testphp/pages/BodyMapGUI/BodyMapGui.php">BODYMAP</a>
                    <a href="/testphp/pages/CSSKGUI/CSSK.php">BODYCAL</a>
                    <a href="/testphp/pages/Introduction/infor.php">ABOUTUS</a>
                    <div class="overlay" style="display: none;"></div>
                </li>
                <li class="icon-fa-bars">
                    <i class="fa-solid fa-bars menu-icon"></i>
                </li>
            </ul>
        </nav>
        
        <div class="header_main">
            <div class="block_content reveal reveal-header">
                <div class="block_item">
                    <h2>Healthcare</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum doloribus quae dignissimos quod? Illum nulla fuga vel tempore voluptate minus blanditiis corporis libero error, assumenda maiores, eos dolorem cumque. Voluptatum!
                        ?
                    </p>
                </div>
                <div class="block_item_search">
                    <div class="search_tool">
                        <input type="text" placeholder="Drug identification scanning...">
                        <button type="button" id="search-button" onclick="startScan()">
                           <i class="fa-solid fa-camera"></i>
                        </button>
                        <i class="fa-solid fa-microphone"></i>
                    </div>
                    <p>Tutorial</p>
                </div>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ffffff" fill-opacity="1" d="M0,192L80,192C160,192,320,192,480,181.3C640,171,800,149,960,144C1120,139,1280,149,1360,154.7L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path>
              </svg>
        </div>
    </header>

    <div class="why_chose_page_block reveal">
        <div class="content">
            <h1>Why you should choose our websites </h1>
            <div class="box_content_why">               
                <div class="box_content_reason reveal">
                    <div class="box_content_reason_item reveal">
                        <h2 style="--bgc: #129CB5;" class="reveal"><span>F</span>lexibility</h2>
                        <p class="reveal">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam veniam quisquam architecto, harum eligendi eaque perferendis vitae unde magni praesentium autem officiis beatae odit, eius dignissimos, nihil molestiae ut inventore.</p>
    
                    </div>
                    <div class="box_content_reason_item  reveal">
                        <h2  style="--bgc: #399997;" class="reveal"><span>U</span>serful</h2>
                        <p class="reveal">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam veniam quisquam architecto, harum eligendi eaque perferendis vitae unde magni praesentium autem officiis beatae odit, eius dignissimos, nihil molestiae ut inventore.</p>
                    </div>
                    <div class="box_content_reason_item reveal">
                        <h2  style="--bgc: #22606B;" class="reveal"><span>B</span>asically</h2>
                        <p class="reveal">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ullam veniam quisquam architecto, harum eligendi eaque perferendis vitae unde magni praesentium autem officiis beatae odit, eius dignissimos, nihil molestiae ut inventore.</p>
                    </div>
                </div>
                <div class="img-why-block reveal">
                    <img src="/testphp/images/HomePage.Images/ảnh background why.jpg" alt="" class="reveal reveal-img">
                    <div class="block-temp block-temp-1 reveal"></div>
                    <div class="block-temp block-temp-2 reveal">Healthcare<i class="fa-solid fa-heart"></i></div>
                </div>
            </div>
        </div>
    </div>

    <div class="body_main">
        <div class="Bao-block-BMI reveal">
            <h1>Health assessment tools</h1>
            <div class="Bao-BMI-box-list">              
                <h2>TOOLS</h2>
                <div class="block-change reveal block-move" id="block-change">
                    <div class="ring-change" id="block-change-BMI" style="--i: 0; --bgc: #129CB5;"><span>BMI</span></div>
                    <div class="ring-change" id="block-change-BMR" style="--i: 1; --bgc: #399997;"><span>BMR</span></div>
                    <div class="ring-change" id="block-change-TEDD" style="--i: 2; --bgc: #22606B;"><span>TEDD</span></div>
                </div>

                <div class="Bao-BMR-box box_main_content reveal reveal-body move" id="Bao-BMR-box-id" style="--bgc: #399997;">
                    <div class="box_content">
                        <img src="/testphp/images/HomePage.Images/pexels-n-voitkevich-7615567.jpg" alt="">
                        <div class="Bao-box-detail">
                            <h1>BMR</h1>
                            <button>Learn more</button>
                        </div>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque facilis possimus Aut, magnam sequi quidem distinctio consequuntur quod molestiae iusto amet deserunt quaerat maxime eos veniam ipsam omnis totam, sit minima? Repellat, nulla.
                        </p>
                    </div>
                </div>
                <div class="Bao-TDEE-box box_main_content reveal reveal-body move" id="Bao-TEDD-box-id" style="--bgc: #22606B;">
                    <div class="box_content">
                        <div  class="Bao-box-detail">
                            <h1>TEDD</h1>
                            <button>earn more</button>
                        </div>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque facilis possimus asperiores odio, Aut, magnam sequi quidem distinctio consequuntur quod molestiae iusto amet deserunt quaerat maxime eos veniam ipsam omnis totam, sit minima? Repellat, nulla.
                        </p>
                        <img src="/testphp/images/HomePage.Images/pexels-n-voitkevich-7615567.jpg" alt="">
                    </div>
                </div>
                <div class="Bao-BMI-box box_main_content reveal reveal-body move" id="Bao-BMI-box-id" style="--bgc: #129CB5;">
                    <div class="box_content">
                        <div  class="Bao-box-detail">
                            <h1>BMI</h1>
                            <button>Learn more</button>
                        </div>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Doloremque facilis possimus asperiores odio, Aut, magnam sequi quidem distinctio consequuntur quod molestiae iusto amet deserunt quaerat maxime eos veniam ipsam omnis totam, sit minima? Repellat, nulla.
                        </p>
                        <img src="/testphp/images/HomePage.Images/pexels-n-voitkevich-7615567.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="Bao-block-drug">
            <div class="Bao-box-drug reveal">
                <h1>Type of trend drugs</h1>
                <div class="Bao-box-item">
                    <div class="Bao-box-img-item">
                        <img src="/testphp/images/HomePage.Images/skin.jpg" alt="">
                        <a href="" style="--cl: #22606b99;">SKIN</a>
                    </div >
                    <div class="Bao-box-img-item">
                        <img src="/testphp/images/HomePage.Images/supplement.jpg" alt="">
                        <a href="" style="--cl: #399997a9;">SUPPLEMENT</a>             
                    </div>
                    <div class="Bao-box-img-item">
                        <img src="/testphp/images/HomePage.Images/healthcare.jpg" alt="">
                        <a href="" style="--cl: #74b8a5a6;">HEALTHCARE</a>
                    </div>
                    <div class="Bao-box-img-item">
                        <img src="/testphp/images/HomePage.Images/healthcare.jpg" alt="">
                        <a href="" style="--cl: #129db5ab;">PRODUCTIVE</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="Bao-block-quotes reveal">
            <div class="Bao-block-item">
                <h1>Some quote about healthcare</h1>
                <div class="list-quotes-healthcare">
                    <div class="box-content-quotes reveal">
                        <div class="block-bgr reveal"></div>
                        <div class="box-img-authors">
                            <img src="/testphp/images/HomePage.Images/ảnh author 1.jpg" alt="">
                        </div>
                        <div class="box-quotes">
                            <h2>Thomas Carlyle</h2>
                            <p>“He who has health has hope; and he who has hope, has everything.” </p>
                        </div>
                    </div>
                    <div class="box-content-quotes reveal">
                        <div class="block-bgr reveal"></div>
                        <div class="box-quotes">
                            <h2>Dr. Mark Hyman</h2>
                            <p>“We know that food is a medicine, perhaps the most powerful drug on the planet with the power to cause or cure most disease.” </p>
                        </div>
                        <div class="box-img-authors">
                            <img src="/testphp/images/HomePage.Images/ảnh author 2.jpg" alt="">
                        </div>
                    </div>
                    <div class="box-content-quotes reveal">
                        <div class="block-bgr reveal"></div>
                        <div class="box-img-authors">
                            <img src="/testphp/images/HomePage.Images/brian.jpg" alt="">
                        </div>
                        <div class="box-quotes">
                            <h2>Brian Tracy</h2>
                            <p>“If you achieve all kinds of things in the material world, but you lose your health hoặc your peace of mind, you get little or no pleasure from your other accomplishments.”</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

    </div>
    </div>
    
  
    <div id="webcam-container"></div>
  <div id="label-container"></div>
  <div id="results"></div>
  <button type="button" id="close-camera" onclick="stop()">X</button>

  <!-- Instructions and reference elements -->
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
          <li>Chỉ có khả năng nhận diện giới hạn</li>
          <li>Chưa có một dữ liệu đủ lớn.</li>
          <li>Hãy cố gắng liên lạc đến cơ quan y tế là tốt nhất</li>
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

    <link rel="stylesheet" href="/testphp/css/HomePageGUI.CSS/style-HomePage.css">
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow/tfjs@latest/dist/tf.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@teachablemachine/image@latest/dist/teachablemachine-image.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@tensorflow-models/coco-ssd"></script>
    <script src="/testphp/js/Scan-Cam.JS/scan-cam.js"></script>
    <link rel="stylesheet" href="/testphp/css/ScanCam.CSS/style-scan-cam.css">
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

</body>
</html>
