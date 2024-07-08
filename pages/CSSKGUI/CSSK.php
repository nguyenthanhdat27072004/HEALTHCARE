<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/testphp/css/CSSKGUI.CSS/style-CSSK.css">
    <script src="/testphp/js/CSSK.JS/CSSk-slideshow.js"></script>
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
<header>
        <nav id="navbar">
            <ul class="nav-list">
                <li class="Bao_logo_nav">
                    <a href="/testphp/pages/HomePage.PHP/HomePage.php">
                        <img src="/testphp/images/BodyMapImages/logo-removebg-preview.png" alt="" style="height: 40px;">
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
    <div class="hoang-title">
        <span>Calculate health parameters
        </span>
    </div>
    <img class="hoang-swirlyarrow" src="/testphp/images/CSSKImg/swirly-arrow.png" alt="">
    <div class="hoang-menucalculator">
        <div class="hoang-bmicalculator" onclick="showContent(1)">
            <img class="hoang-iconpart" src="/testphp/images/CSSKImg/calculatoricon-removebg-preview.png"></img>
            <span>BMI Calculator</span>
            <div class="hoang-spaceforimg">
                <img class="hoang-imgcalculator" src="/testphp/images/CSSKImg/bmicalculator-img.jpg" alt="">
            </div>
        </div>
        <div class="hoang-bmrcalculator" onclick="showContent(2)">
            <img class="hoang-iconpart" src="/testphp/images/CSSKImg/calculator.png" alt="">
            <span>BMR Calculator</span>
            <div class="hoang-spaceforimg">
                <img class="hoang-imgcalculator" src="/testphp/images/CSSKImg/BMR-Calculator.svg" alt="">
            </div>
        </div>
        <div class="hoang-teddcalculator" onclick="showContent(3)">
            <div class="hoang-spaceforimg">
                <img class="hoang-imgcalculator" src="/testphp/images/CSSKImg/TDEE.webp" alt="">
            </div>
            <img class="hoang-iconpart" src="/testphp/images/CSSKImg/calculatoricon.jpg" alt="">
            <span id="hoang-specialspan">TDEE Calculator</span>
        </div>
    </div>
    <div class="hoang-video">
        <video controls autoplay loop muted>
            <source src="/testphp/images/CSSKImg/video-for-bmi.mp4" type="video/mp4">
        </video>
    </div>
    <div class="hoang-content" id="content1">
        <div class="Bao_point_calculator">
            <div class="Bao_block_BMI">
                <div class="Bao_content_intro block_item">
                    <h1 style="--bg: #d06a2b">BMI Calculator</h1>
                    <p>Enter the value and click the calculator button to get results.</p>
                </div>

                <div class="Bao_box_gender block_item">
                    <h3>Gender</h3>
                    <div class="box_gender box_item">
                        <button id="FemaleButton" style="--bg: #d06a2b" onclick="toggleActive('FemaleButton', 'MaleButton')">
                            <i class="fa-solid fa-venus"></i>
                            <p>Female</p>
                        </button>
                        <button id="MaleButton" style="--bg: #d06a2b" onclick="toggleActive('MaleButton', 'FemaleButton')">
                            <i class="fa-solid fa-mars"></i>
                            <p>Male</p>
                        </button>
                    </div>
                </div>

                <div class="Bao_box_age block_item">
                    <h3>Age</h3>
                    <div class="box_item">
                        <input type="text" class="input_age">
                    </div>
                </div>

                <div class="Bao_box_height block_item">
                    <h3>Height</h3>
                    <div class="box_height box_item">
                        <input type="number" id="input_height" required>
                        <select name="" id="cm_or_feet">
                            <option value="">cm</option>
                            <option value="">feet</option>
                        </select>
                    </div>
                </div>

                <div class="Bao_box_weight block_item">
                    <h3>Weight</h3>
                    <div class="box_weight box_item">
                        <input type="number" id="input_weight" required>
                        <select name="" id="kg_or_pound">
                            <option value="">Kg</option>
                            <option value="">Pound</option>
                        </select>
                    </div>
                </div>

                <div class="Bao_box_submit block_item box_item">
                    <button style="--bg: #d06a2b" onclick="ShowBMIResult()">Calculate</button>
                </div>
            </div>
            <div class="Bao_block_img" id="Bao_block_img">
                <img src="/testphp/images/CSSKImg/ảnh bg BMI.png" alt="">
            </div>
            <div class="Bao_block_BMI_result" id="Bao_block_BMI_result" style="display: none;">
                <h2 class="item">Your results</h2>
                <p class="item">A BMI between <span>18.5</span> and <span>24.9</span> is considered normal weight, reducing the risk of weight-related health issues.</p>
                <div class="box_circle item">
                    <div class="circle_block">
                        <div class="box_circle_span">
                            <span id="result"></span>
                        </div>
                        <div class="box_circle_item"></div>
                        <div class="box_circle_item"></div>
                        <div class="box_circle_item"></div>
                        <div class="box_circle_item"></div>
                    </div>
                    <div class="detail_circle_color">
                        <div class="content_circle" style="--bg: #ff9999">underweight</div>
                        <div class="content_circle" style="--bg: #99cc99">normal weight</div>
                        <div class="content_circle" style="--bg: #9999ff">overweight</div>
                        <div class="content_circle" style="--bg: #ffcc99">obese</div>
                    </div>
                </div>
                <div class="box_content_results item">
                    <div class="item_content"><span><span class="item_span">Healthy BMI range </span><span>18.5</span>kg/m<sup>2</sup> - 25</span>kg/m<sup>2</sup></span></div>
                    <div class="item_content"><span><span class="item_span">Healthy weight for the height: </span><span>53.5</span>kg - <span>72.3</span>kg</span></div>
                    <div class="item_content"><span><span class="item_span">BMI prime: </span><span>0.78</span></span></div>
                    <div class="item_content"><span><span class="item_span">Ponderal index: </span><span>11.4</span>g/m<sup>2</sup></span></div>
                </div>
            </div>
        </div>
    </div>


    <div class="hoang-content" id="content2">
        <div class="Bao_point_calculator">
            <div class="Bao_block_BMR">
                <div class="Bao_content_intro block_item">
                    <h1 style="--bg: #22606B">BMR Calculator</h1>
                    <p>Enter the value and click the calculator button to get results.</p>
                </div>

                <div class="Bao_box_gender block_item">
                    <h3>Gender</h3>
                    <div class="box_gender box_item">
                        <button id="FemaleButton" style="--bg: #22606B" onclick="toggleActiveBMR('FemaleButton', 'MaleButton')">
                            <i class="fa-solid fa-venus"></i>
                            <p>Female</p>
                        </button>
                        <button id="MaleButton" style="--bg: #22606B" onclick="toggleActiveBMR('MaleButton', 'FemaleButton')">
                            <i class="fa-solid fa-mars"></i>
                            <p>Male</p>
                        </button>
                    </div>
                </div>

                <div class="Bao_box_age block_item">
                    <h3>Age</h3>
                    <div class="box_item">
                        <input type="text" class="input_age" id="input_age">
                    </div>
                </div>

                <div class="Bao_box_height block_item">
                    <h3>Height</h3>
                    <div class="box_height box_item">
                        <input type="number" id="input_height_BMR" required>
                        <select name="" id="">
                            <option value="">cm</option>
                            <option value="">feet</option>
                        </select>
                    </div>
                </div>

                <div class="Bao_box_weight block_item">
                    <h3>Weight</h3>
                    <div class="box_weight box_item">
                        <input type="number" id="input_weight_BMR" required>
                        <select name="" id="">
                            <option value="">Kg</option>
                            <option value="">Pound</option>
                        </select>
                    </div>
                </div>

                <div class="Bao_box_submit block_item box_item">
                    <button style="--bg: #22606B" onclick="ShowBMRResult()">Calculate</button>
                </div>
            </div>

            <div class="Bao_block_img" id="Bao_block_img_BMR">
                <img src="/testphp/images/CSSKImg/bg TEDD.png" alt="">
            </div>

            <div class="Bao_block_BMR_result" id="Bao_block_BMR_result" style="display: none;">
                <h2 class="item">Your results</h2>
                <p class="item">A BMR between <span>18.5</span> and <span>24.9</span> is considered normal weight, reducing the risk of weight-related health issues.</p>
                <div class="box_circle item">
                    <div class="circle_block">
                        <div class="box_circle_span">
                            <span id="resultBMR"></span>
                        </div>
                        <div class="box_circle_item"></div>
                        <div class="box_circle_item"></div>
                        <div class="box_circle_item"></div>
                        <div class="box_circle_item"></div>
                    </div>
                    <div class="detail_circle_color">
                        <div class="content_circle" style="--bg: #ff9999">underweight</div>
                        <div class="content_circle" style="--bg: #99cc99">normal weight</div>
                        <div class="content_circle" style="--bg: #9999ff">overweight</div>
                        <div class="content_circle" style="--bg: #ffcc99">obese</div>
                    </div>
                </div>
                <div class="box_content_results item">
                    <div class="item_content"><span><span class="item_span">Healthy BMI range </span><span>18.5</span>kg/m<sup>2</sup> - 25</span>kg/m<sup>2</sup></span></div>
                    <div class="item_content"><span><span class="item_span">Healthy weight for the height: </span><span>53.5</span>kg - <span>72.3</span>kg</span></div>
                    <div class="item_content"><span><span class="item_span">BMR prime: </span><span>0.78</span></span></div>
                    <div class="item_content"><span><span class="item_span">Ponderal index: </span><span>11.4</span>g/m<sup>2</sup></span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="hoang-content" id="content3">
        <div class="Bao_point_calculator">
            <div class="Bao_block_BMI">
                <div class="Bao_content_intro block_item">
                    <h1 style="--bg: #7BCDB6">TDEE Calculator</h1>
                    <p>Enter the value and click the calculator button to get results.</p>
                </div>

                <div class="Bao_box_gender block_item">
                    <h3>Gender</h3>
                    <div class="box_gender box_item">
                        <button id="FemaleButton" style="--bg: #7BCDB6" onclick="toggleActive('FemaleButton', 'MaleButton')">
                            <i class="fa-solid fa-venus"></i>
                            <p>Female</p>
                        </button>
                        <button id="MaleButton" style="--bg: #7BCDB6" onclick="toggleActive('MaleButton', 'FemaleButton')">
                            <i class="fa-solid fa-mars"></i>
                            <p>Male</p>
                        </button>
                    </div>
                </div>

                <div class="Bao_box_age block_item">
                    <h3>Age</h3>
                    <div class="box_item">
                        <input type="text" class="input_age" id="input_age">
                    </div>
                </div>

                <div class="Bao_box_height block_item">
                    <h3>Height</h3>
                    <div class="box_height box_item">
                        <input type="number" id="input_height_TDEE" required>
                        <select name="" id="">
                            <option value="">cm</option>
                            <option value="">feet</option>
                        </select>
                    </div>
                </div>

                <div class="Bao_box_weight block_item">
                    <h3>Weight</h3>
                    <div class="box_weight box_item">
                        <input type="number" id="input_weight_TDEE" required>
                        <select name="" id="">
                            <option value="">Kg</option>
                            <option value="">Pound</option>
                        </select>
                    </div>
                </div>

                <div class="Bao_box_submit block_item box_item">
                    <button style="--bg: #7BCDB6" onclick="ShowTDEEResult()">Calculate</button>
                </div>
            </div>
            <div class="Bao_block_img" id="Bao_block_img_TDEE" >
                <img src="/testphp/images/CSSKImg/bg BMR.png" alt="">
            </div>
            <div class="Bao_block_BMI_result" id="Bao_block_TDEE_result" style="display: none;">
                <h2 class="item">Your results</h2>
                <p class="item">A TDEE between <span>18.5</span> and <span>24.9</span> is considered normal weight, reducing the risk of weight-related health issues.</p>
                <div class="box_circle item">
                    <div class="circle_block">
                        <div class="box_circle_span">
                            <span id="resultTDEE"></span>
                        </div>
                        <div class="box_circle_item"></div>
                        <div class="box_circle_item"></div>
                        <div class="box_circle_item"></div>
                        <div class="box_circle_item"></div>
                    </div>
                    <div class="detail_circle_color">
                        <div class="content_circle" style="--bg: #ff9999">underweight</div>
                        <div class="content_circle" style="--bg: #99cc99">normal weight</div>
                        <div class="content_circle" style="--bg: #9999ff">overweight</div>
                        <div class="content_circle" style="--bg: #ffcc99">obese</div>
                    </div>
                </div>
                <div class="box_content_results item">
                    <div class="item_content"><span><span class="item_span">Healthy TDEE range </span><span>18.5</span>kg/m<sup>2</sup> - 25</span>kg/m<sup>2</sup></span></div>
                    <div class="item_content"><span><span class="item_span">Healthy weight for the height: </span><span>53.5</span>kg - <span>72.3</span>kg</span></div>
                    <div class="item_content"><span><span class="item_span">BMI prime: </span><span>0.78</span></span></div>
                    <div class="item_content"><span><span class="item_span">Ponderal index: </span><span>11.4</span>g/m<sup>2</sup></span></div>
                </div>
            </div>
        </div>
    </div>
    <div id="progress">
        <span id="progress-value">&#x1F815;</span>
    </div>

    <!-- Green Container -->
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

    <!-- Footer -->
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

    <!-- Styles -->
    <style>
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
        margin-bottom: -60px;
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
        padding-top: 40px;
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
            document.getElementById('nav-container').classList.add('active');
        });

        document.getElementById('close-btn').addEventListener('click', function() {
            document.getElementById('nav-container').classList.remove('active');
        });
    </script>
</body>
</html>
