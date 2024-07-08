<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/testphp/css/GUIforIndividual.CSS/paracetamol.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    <title>Paracetamol STADA 500mg tablets</title>
    
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
    <div class="hoang-price">
        <div id="slide">
            <div class="item" style="background-image: url(/testphp/images/paracetamolMG/DrugIndividual-img-anh-san-pham-1.jpg);"></div>
            <div class="item" style="background-color: white;">
                <div class="content">
                    <div class="hoang-name">Paracetamol STADA 500mg tablets</div>
                    <div class="hoang-description">
                        <p>Price: 50,000 VND / 1 box</p>
                        <p>Category: Pain relief medication</p>
                        <p>Dosage form: Film-coated tablets</p>
                        <p>Packaging: Box of 10 blisters x 10 tablets</p>
                        <p>Origin: Vietnam</p>
                        <p>Manufacturer: STADA</p>
                    </div>
                    <button onclick="showContent()">SEE MORE</button>
                </div>
            </div>
            <div class="item" style="background-image: url(/testphp/images/paracetamolMG/DrugIndividual-img-anh-san-pham-3.jpg);"></div>
            <div class="item" style="background-image: url(/testphp/images/paracetamolMG/DrugIndividual-img-anh-san-pham-4.jpeg);"></div>
            <div class="item" style="background-image: url(/testphp/images/paracetamolMG/DrugIndividual-img-anh-san-pham-5.png);"></div>
            <div class="item" style="background-image: url(/testphp/images/paracetamolMG/DrugIndividual-img-anh-san-pham-6.jpg);"></div>
        </div>
        <div class="buttons">
            <button id="prev"><i class="fa-solid fa-angle-left"></i></button>
            <button id="next"><i class="fa-solid fa-angle-right"></i></button>
        </div>         
    </div>
    <br>
    <br>
    <div class="hoang-thongtinchitiet" id="content">
        <div class="menu">
            <i class="fa-solid fa-bars fa-2x"></i>
            <span>Table of Contents</span>     
            <ul id="mainpart">
                <li><a href="#hoang-standfor"><b>What is Paracetamol?</b></a> <br></li>
                <li><a href="#hoang-chidinh"><b>Indications and Contraindications for Use </b></a> <br></li>
                <li><a href="#hoang-hamluong"><b>Forms and Dosages of Paracetamol</b></a> <br></li>
                <li><a href="#hoang-useful"><b>Uses of Paracetamol</b></a> <br></li>
                <li><a href="#hoang-hdsd"><b>How to Use and Dosage</b></a> <br></li>
                <li><a href="#hoang-tdp"><b>Side Effects of Paracetamol</b></a> <br></li>
                <li><a href="#hoang-luuy"><b>Precautions When Using Paracetamol</b></a> <br></li>
            </ul>                                                    
        </div>
        <div class="information">
            <div id="hoang-standfor">
                <h2>What is Paracetamol?</h2>
                <p>
                    <b>Paracetamol</b> (also known as <b style="color: blue;">acetaminophen</b>) is an over-the-counter pain reliever. It is commonly used to alleviate mild to moderate pain or as a fever reducer and can also be used to help treat symptoms of colds and flu. (1)  <br>
                </p>                
                <p>
                    Unlike nonsteroidal anti-inflammatory drugs (NSAIDs), paracetamol does not have anti-inflammatory properties and is considered very safe, not causing harm to the cardiovascular system or gastrointestinal tract. Therefore, this medication can be used for children, pregnant women, and breastfeeding mothers (with appropriate dosages as recommended). 
                    <br>
                </p>
                <P>
                    However, incorrect dosages of paracetamol can lead to some unwanted side effects. Therefore, it is important for everyone to thoroughly understand the indications, contraindications, usage, and dosages of paracetamol to ensure safe use of the medication.
                </P>
            </div> 
            <div id="hoang-imagethuoc">
                <img id="picture1" src="/testphp/images/paracetamolMG/DrugIndividual-img-anh-bai-bao-1.jpg" alt="">
                <p style="text-align: center;">
                    <i>Image 1: Paracetamol is a very common pain reliever </i>
                </p>
            </div>
            <div id="hoang-chidinh">              
                <h2>Indications and Contraindications for Using Paracetamol</h2>
                <h3 style="color: rgb(87, 87, 87);">Indications for Use</h3>
                <p>aracetamol is typically used to relieve various types of pain, such as headaches, back pain, toothaches, joint pain, muscle pain, and pain caused by arthritis. Additionally, it is effective in reducing fever, whether it is due to the flu, a cold, or a vaccine.</p>

                <h3 style="color: rgb(87, 87, 87);">Contraindications for Use</h3>
                <p>Despite being proven as a safe pain reliever with minimal side effects, there are certain cases where the use of paracetamol is contraindicated or should be used under medical supervision. These include:</p>
                <ul>
                    <li>Individuals allergic or hypersensitive to paracetamol.</li>
                    <li>Individuals with a history of liver disease or liver damage.</li>
                    <li>Individuals who are alcoholics or frequently consume alcoholic beverages and other stimulants.</li>
                    <li>Individuals with severe malnutrition.</li>
                    <li>Individuals currently taking other medications that could interact negatively with paracetamol.</li>
                </ul>              
                <p>There is no conclusive research on the side effects of paracetamol on pregnant women and breastfeeding mothers. Therefore, pregnant women and those breastfeeding can use the medication, but it is best to consult a doctor before doing so.</p>
            </div>
            <div id="hoang-hamluong">
                <h2>Forms and Dosages of Paracetamol</h2>
                <p>Paracetamol is available in various forms, including tablets, capsules, liquids, dissolvable tablets, and intravenous injections. The dosage of paracetamol varies depending on its form and includes concentrations such as 250 mg, 325 mg, and 500 mg.</p>
                <ul>
                    <li>
                        <b>Tablets:</b> The most common form of paracetamol is in tablet form, exemplified by brands like Panadol. Tablet dosages typically include 325 mg and 500 mg.<br>
                        <b><i>See more:</i></b> <a href="https://tamanhhospital.vn/thuoc/paracetamol-325mg/" target="_blank"><i>What is Paracetamol 325 mg? Uses, dosage, and instructions.</i></a>
                    </li>
                    <li><b>Rectal Suppositories:</b> Paracetamol is also available in suppository form with dosages of 80 mg, 150 mg, and 300 mg, making it a popular option for children.</li>
                    <li><b>Liquid:</b> Paracetamol can be formulated as a liquid or syrup, with common concentrations including 160 mg/5 ml (in bottles of 120 ml, 473 ml), 160 mg/5 ml (in bottles of 118 ml), and 500 mg/5 ml (in bottles of 240 ml).</li>
                    <li><b>Dissolvable Tablets or Powder:</b> Another form is effervescent tablets or powders that dissolve in water. Powder packets generally have dosages of 80 mg, 150 mg, and 250 mg (usually for children), while effervescent tablets typically contain 500 mg (usually for adults).</li>
                    <li><b>Intravenous Injections:</b> A more specialized form of paracetamol is the intravenous injection, which is administered and supervised by medical professionals. (2)</li>
                </ul>
            </div>
            <div id="hoang-imagethuoc">
                <img id="picture1" src="/testphp/images/paracetamolMG/DrugIndividual-img-anh-bai-bao-2.jpg" alt="">
                <p style="text-align: center;"><i>Image 2: Paracetamol in effervescent tablet form is easy to use</i></p>
            </div>
            <div id="hoang-useful">
                <h2>Uses of Paracetamol</h2>
                <p>Paracetamol is available both over-the-counter and by prescription. It is used in a variety of situations, including: (3)</p>
                <ul>
                    <li>Headaches</li>
                    <li>Migraines</li>
                    <li>Back pain</li>
                    <li>Rheumatism and muscle pain</li>
                    <li>Toothaches</li>
                    <li>Menstrual cramps</li>
                    <li>........</li>
                </ul>
                <p>Paracetamol can be used as a pain relief alternative to aspirin. However, unlike aspirin, it does not have anti-inflammatory properties and is only used for mild cases of arthritis.</p>
            </div>
            <div id="hoang-hdsd">
                <h2>How to Use and Dosage of Paracetamol</h2>
                <p>Questions like "How much paracetamol should I take?", "How many paracetamol tablets can I take at once?", and "How should I use paracetamol?" are common, as paracetamol is often used as an over-the-counter medication without detailed guidance from a doctor. Generally, paracetamol can be taken in the recommended dosages as follows: (4)</p>
                <h3>For Adults</h3>
                <p>The dosage of paracetamol for pain relief and fever reduction in adults is typically:</p>
                <ul>
                    <li>General Dosage: Take or use one suppository of 325–650 mg every 4–6 hours. For a dosage of 1000 mg, the interval between doses should be 6–8 hours.</li>
                    <li>500 mg Tablets: 1–2 tablets every 4–6 hours.</li>
                    <li>Suppositories: For suppository use, doctors recommend 10-20 mg/kg per dose. Each dose should be administered every 4 hours if necessary, not exceeding 5 doses and 75 mg/kg within 24 hours. </li>
                </ul>
                <p>See more: <a href="https://www.drugs.com/paracetamol.html"><i>What is Paracetamol 650 mg? Uses, dosage, and instructions.</i></a></p>
                <h3>For Children</h3>
                <p>The safe dosage of paracetamol for children is calculated based on their body weight:</p>
                <ul>
                    <li>
                        Oral Administration:
                        <ul type="circle">
                            <li>Infants: 10-15 mg/kg, every 6–8 hours (3-4 times a day).</li>
                            <li>Older Children: The same dosage as infants, but can be administered every 4–6 hours, resulting in 4-6 doses a day, not exceeding five doses in 24 hours.</li>
                        </ul>
                    </li>
                    <li>
                        Rectal Administration:
                        <ul type="circle">
                            <li>6–11 months: 80 mg every 6 hours, with a maximum of 320 mg/day.</li>
                            <li>12–36 months: 80 mg every 4–6 hours, with a maximum of 400 mg/day.</li>
                            <li>3–6 years: 120 mg every 4–6 hours, with a maximum of 600 mg/day.</li>
                            <li>6–12 years: 325 mg every 4–6 hours, with a maximum of 1625 mg/day.</li>
                            <li>Over 12 years: 650 mg every 4–6 hours, with a maximum of 3900 mg/day.</li>
                        </ul>
                    </li>
                </ul>
            </div>  
            <div id="hoang-imagethuoc">
                <img id="picture1" src="/testphp/images/paracetamolMG/DrugIndividual-img-anh-bai-bao-3.jpg" alt="">
                <p style="text-align: center;"><i>Image 3: For oral paracetamol, children should take the medication every 4-6 hours</i></p>
            </div>
            <div id="hoang-tdp">
                <h2>Side Effects of Paracetamol</h2>
                <p>In general, paracetamol is considered a relatively safe medication for both adults and children. However, it can still cause some side effects that may impact health, especially when not used correctly. (5)</p>
                <p>Specifically, paracetamol can cause allergic reactions such as rashes, red skin, itching, swelling of the face or lips, swelling of the tongue, swelling of the throat, and in more severe cases, difficulty breathing. The U.S. Food and Drug Administration (FDA) also warns that paracetamol can cause toxic epidermal necrolysis and skin peeling, although these are very rare occurrences.</p>
                <p>Additionally, paracetamol may cause sudden increases in blood pressure or hypothermia when used in conjunction with some blood pressure medications containing phenothiazines.</p>
                <p>If unusual reactions occur after using paracetamol, it is advised to stop taking the medication immediately, drink plenty of water, and monitor the body's reactions. If symptoms do not improve or worsen, it is essential to seek medical attention promptly.</p>
            </div>
            <div id="hoang-luuy">
                <h2>Precautions When Using Paracetamol</h2>
                <p>Paracetamol can be used as an over-the-counter pain reliever, but caution is necessary to avoid potential side effects.</p>
                <p>Some important precautions to note when using paracetamol include:</p>
                <ul>
                    <li>Read Instructions Carefully: Always read the instructions thoroughly before using the medication.</li>
                    <li>Avoid Unnecessary Use: Do not use paracetamol if there is no pain or if the fever is not above 38.5 degrees Celsius.</li>
                    <li>For adults, do not use paracetamol for more than 10 consecutive days. For children, do not use it for more than 5 consecutive days unless directed by a doctor.</li>
                    <li>For pain relief (e.g., headache, joint pain, toothache), do not use paracetamol continuously. Wait 4-6 hours between doses as the medication works for about 4 hours. Continuous use does not increase effectiveness and can lead to overdose and liver damage.</li>
                    <li>Ensure that children use paracetamol under adult supervision.</li>
                    <li>Do not consume alcohol or use foods and drinks containing alcohol when taking paracetamol. </li>
                    <li>Adhere strictly to the recommended dosage and do not exceed it.</li>
                    <li>Those who are intoxicated, have liver, heart, lung, or kidney disease, are sensitive to the medication's ingredients, are anemic, or have a glucose-6-phosphate dehydrogenase deficiency should not use paracetamol without medical advice.</li>
                    <li>Take paracetamol 30 minutes to 1 hour after meals. Do not take it during meals to avoid reduced absorption due to food.</li>
                    <li>.......</li>
                </ul>
            </div> 
            <div id="hoang-conclusion">
                <p>The information above provides basic details about Paracetamol. However, it is essential for patients to visit medical facilities for proper diagnosis and treatment. Paracetamol is an effective medication for pain relief, fever reduction, and treatment of colds and flu. However, for persistent headaches, one should not overuse the medication to avoid drug tolerance and dangerous side effects. It is best to visit a hospital with a neurology department to get proper medical support, diagnosis, and treatment advice from a doctor.</p>
                <label for="">Cre: </label>
                <a href="https://tamanhhospital.vn/thuoc/paracetamol/">Tam An Hospital</a>
            </div>                            
        </div>
    </div>
    <div id="progress">
        <span id="progress-value">&#x1F815;</span>
    </div>
    <div class="hoang-endpage">

    </div>
    <script>
        document.getElementById('nav-toggle').addEventListener('click', function() {
            document.getElementById('nav-container').classList.add('active');
        });

        document.getElementById('close-btn').addEventListener('click', function() {
            document.getElementById('nav-container').classList.remove('active');
        });
    </script>

    <script src="/testphp/js/DrugGui-Indivudualdrug.JS/slide-paracetamol.js"></script>
</body>
</html>
