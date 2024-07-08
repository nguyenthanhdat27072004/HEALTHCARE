<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/testphp/css/HomePage.CSS/HomePage.css">
    <script src="mainweb_rework.js"></script>
    <link rel="stylesheet" href="/testphp/js/HomePageFinal.JS/homepage.js" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,0,0"
    />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
  <div class="background-container"></div> <!-- Container nền phong phú -->
  <div class="logo"></div>
  <div class="navigation">
      <nav>
          <ul>
              <li class="nav-logo">
                  <a href="">
                      <img src="/testphp/images/MainGUI.images/logo.png" alt="">
                  </a>
              </li>
              <li class="Bao_box_function">
                      <a href="/testphp/pages/DrugGUI/DrugGui.php">DRUGS</a>
                      <a href="/testphp/pages/BodyMapGUI/BodyMapGui.php">BODYMAP</a>
                      <a href="/testphp/pages/CSSKGUI/CSSK.php">BODYCAL</a>
                      <a href="/testphp/pages/Introduction/infor.php">ABOUTUS</a>
              </li>
          </ul>
      </nav>
  </div>
  <div class="header">
      <div class="letters">
          <div>H</div>
          <div>E</div>
          <div>A</div>
          <div>L</div>
          <div>T</div>
      </div>
      <div class="letters">
          <div>H</div>
          <div>C</div>
          <div>A</div>
          <div>R</div>
          <div>E</div>
      </div>
  </div>
  <div class="website-content">
      <div class="video-holder">
          <video id="main-video" src="/testphp/images/HomePageIMG/videoBWD.mp4" muted loop></video>
          <h2 class="fancy-intro">The Health Care</h2>      
      </div>

      <section class="section-1 why-block">
        <div class="box_left_content_goal_mission">
            <div class="box_button_change_content reveal">
                <button class="button_mission" id="button_mission">Our Mission</button>
                <button class="button_goal" id="button_goal">Our Goal</button>
            </div>
    
            <div class="box_content_mission_goal box_content_mission">
                <h1 class="title_mission_goal reveal">Our Mission</h1>
                <div class="box_content_detail reveal">
                    <p>Maintaining good health is essential for a fulfilling life. It involves a balanced diet, regular exercise, and adequate sleep. Exercise strengthens the heart and muscles, and improves mental health by reducing anxiety and depression.</p>
                    <div class="box_content_part">
                        <i class="fa-solid fa-circle-check"></i>
                        <p>Provide Accurate Medication Services
                        </p>
                    </div>
                    <div class="box_content_part">
                        <i class="fa-solid fa-circle-check"></i>
                        <p>Conduct Comprehensive Body Checkups
                        </p>
                    </div>
                    <div class="box_content_part">
                        <i class="fa-solid fa-circle-check"></i>
                        <p>Monitor and Assess Health Metrics</p>
                    </div>
                </div>
            </div>
    
            <div class="box_content_mission_goal box_content_goal">
                <h1 class="title_mission_goal reveal">Our Goal</h1>
                <div class="box_content_detail goal reveal">
                    <p>The primary goals of our health website are to provide accurate health information, promote healthy lifestyles, and support personal health care. </p>
                    <div class="box_content_part ">
                        <i class="fa-solid fa-circle-check"></i>
                        <p>Provide Accurate Health Information</p>
                    </div>
                    <div class="box_content_part">
                        <i class="fa-solid fa-circle-check"></i>
                        <p>Promote Healthy Lifestyles</p>
                    </div>
                    <div class="box_content_part">
                        <i class="fa-solid fa-circle-check"></i>
                        <p>Support Personal Health Care</p>
                    </div>
                </div>
            </div>
            <div class="img_mission_goal">
                <img src="/testphp/images/HomePageIMG/ảnh mục tiêu 2.png" alt="" class="img_mission_goal_item reveal">
            </div>
        </div>
    
        <div class="box_right_content_goal_mission reveal">
            <img src="/testphp/images/HomePageIMG/ảnh background why.jpg" alt="" class=" img_bg_right_box reveal">
        </div>
    </section>
    

      <section class="section-2">
          <div class="center">
              <div class="stack-area">
                  <div class="left">
                      <div class="title">Healthcare Tools</div>
                      <div class="sub-title">
                      Understanding these metrics helps in monitoring health and adjusting lifestyle, diet, and exercise to achieve personal health goals.                          <br />
                          <button>See More Details</button>
                      </div>
                  </div>
                  <div class="right">
                      <div class="cards">
                          <div class="card">
                              <div class="sub">
                                  <p>BMI</p>
                                  <button>details</button>
                              </div>
                              <div class="content">BMI (Body Mass Index): BMI is calculated using weight and height and is a common measure to classify underweight, normal weight, overweight, or obesity. The formula is weight (kg) divided by height squared (m²). While useful, BMI doesn't distinguish between muscle and fat mass.</div>
                          </div>
                          <div class="card">
                              <div class="sub">
                                  <p>BMR</p>
                                  <button>details</button>
                              </div>
                              <div class="content">BMR (Basal Metabolic Rate): BMR is the number of calories your body needs at rest to maintain essential functions like breathing and circulation. It accounts for 60-75% of daily energy expenditure. Knowing your BMR helps you understand the minimum calorie requirement for your body and tailor your diet accordingly.</div>
                          </div>
                          <div class="card">
                              <div class="sub">
                                  <p>TDEE</p>
                                  <button>details</button>
                              </div>
                              <div class="content">TDEE (Total Daily Energy Expenditure): This is the total amount of calories your body needs each day to maintain basic bodily functions and physical activities. Knowing your TEDD helps you adjust your calorie intake to meet your body's needs, aiding in weight loss or maintenance.</div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>  
      </section>

      <section class="section-3">
        <div class="content_type_of_drug ">
          <h2 class="title_type_of_drug">Type of drug</h2>
          <div class="content_box_type_of_drug">

              <div class="list_img_type_of_drug">
  
                  <div class="box_type_of_drug">
                      <div class="title_type_of_drug_box">
                          <img src="/testphp/images/HomePageIMG/ảnh 1 type.png" alt="">
                          <h2>Cardiovascula</h2>
                      </div>
                      <div class="box_content_type_of_drug">
                          <p>"Aspirin is used to reduce pain, fever, and inflammation. It also helps prevent blood clots, reducing the risk of heart attack and stroke."</p>
                      </div>
                  </div>
                  <div class="box_type_of_drug">
                      <div class="title_type_of_drug_box">
                          <img src="/testphp/images/HomePageIMG/ảnh 2 type.png" alt="">
                          <h2>Abdomen</h2>
                      </div>
                      <div class="box_content_type_of_drug">
                          <p>"Omeprazole is used to decrease stomach acid, treating conditions like stomach ulcers and gastroesophageal reflux disease (GERD).</p>
                      </div>
                  </div>
                  <div class="box_type_of_drug">
                      <div class="title_type_of_drug_box">
                          <img src="/testphp/images/HomePageIMG/ảnh 3 type.png" alt="">
                          <h2>Brain</h2>
                      </div>
                      <div class="box_content_type_of_drug">
                          <p>Sertraline: An SSRI antidepressant used to treat depression, anxiety disorders, and obsessive-compulsive disorder (OCD).</p>
                      </div>
                  </div>
                  <div class="box_type_of_drug">
                      <div class="title_type_of_drug_box">
                          <img src="/testphp/images/HomePageIMG/ảnh 4 type.png" alt="">
                          <h2>Eye</h2>
                      </div>
                      <div class="box_content_type_of_drug">
                          <p>Latanoprost: An eye drop used to treat glaucoma and reduce intraocular pressure.
                          </p>
                      </div>
                  </div>
                  <div class="box_type_of_drug">
                      <div class="title_type_of_drug_box">
                          <img src="/testphp/images/HomePageIMG/ảnh 5 type.png" alt="">
                          <h2>Kidney</h2>
                      </div>
                      <div class="box_content_type_of_drug">
                          <p>Furosemide: A diuretic that increases the elimination of water and salt from the body, used to treat kidney disease and high blood pressure.</p>
                      </div>
                  </div>
                  <div class="box_type_of_drug">
                      <div class="title_type_of_drug_box">
                          <img src="/testphp/images/HomePageIMG/ảnh 6 type.png" alt="">
                          <h2>Liver</h2>
                      </div>
                      <div class="box_content_type_of_drug">
                          <p>Acetaminophen (Paracetamol): A pain reliever and fever reducer, but high doses can cause liver damage, so it should be used with caution.</p>
                      </div>
                  </div>
              </div>
              <div class="box_3D">
                <script type="module" src="https://unpkg.com/@splinetool/viewer@1.7.4/build/spline-viewer.js"></script>
                <spline-viewer url="https://prod.spline.design/xfPzOpqf30iUrAix/scene.splinecode"></spline-viewer>
              </div>
          </div>
          <!-- <div class="btn_arrow">
              <button class="btn_arrow_right">&lt;</button>
              <button class="btn_arrow_left">&gt;</button>
          </div> -->
        </div>
    </section>

      <section class="section-4">
          <div class="box_quote">
            <h1 class="title_quote_content">Quote</h1>
            <div class="box_quote_content">
                <div class="box_quote_img_show">
                    <img src="/testphp/images/HomePageIMG/hippocrates-la-ai.jpg" alt="" class="box_quote_img_item_show_1">
                    <img src="/testphp/images/HomePageIMG/doctor2.jpg" alt="" class="box_quote_img_item_show_2">
                    <img src="/testphp/images/HomePageIMG/doctor3.jpg" alt="" class="box_quote_img_item_show_3">
                    <img src="/testphp/images/HomePageIMG/Phamngocthach.jpg" alt="" class="box_quote_img_item_show_4">
                </div>
                <div class="box_quote_img">
                    <img src="/testphp/images/HomePageIMG/hippocrates-la-ai.jpg" alt="" class="box_quote_img_item_1">
                    <img src="/testphp/images/HomePageIMG/doctor2.jpg" alt="" class="box_quote_img_item_2">
                    <img src="/testphp/images/HomePageIMG/doctor3.jpg" alt="" class="box_quote_img_item_3">
                    <img src="/testphp/images/HomePageIMG/Phamngocthach.jpg" alt="" class="box_quote_img_item_4">
                </div>
                <div class="box_quote_detail">
                    <div class="box_quote_detail_item">
                        <h2>Hippocrates</h2>
                        <p>It is far more important to know what person the disease has than what disease the person has.</p>
                    </div>

                    <div class="box_quote_detail_item">
                        <h2>William Osler</h2>
                        <p>Listen to your patient, he is telling you the diagnosis</p>
                    </div>

                    <div class="box_quote_detail_item">
                        <h2>Ton That Tung </h2>
                        <p>Surgery should be performed to minimize pain and reduce risks for patients</p>
                    </div>

                    <div class="box_quote_detail_item">
                        <h2>Pham Ngoc Thach</h2>
                        <p>Live like a lighthouse</p>
                    </div>
                </div>
                <div class="box_quote_button_change">
                    <button><i class="fa-solid fa-chevron-left"></i></button>
                    <button><i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>
          </div>
      </section>

      <!-- <div class="replace_block"></div> -->

      <div class="container">
          <video class="video-background" autoplay muted loop>
              <source src="/testphp/images/HomePageIMG/footer.mp4" type="video/mp4">
              Your browser does not support the video tag.
          </video>
          <div id="top-side" class="side">
              <h2 class="title">
                  <span class="fancy">The Health Care</span>      
              </h2>
          </div>
          <h2 class="title title-for-sub">
              <span class="fancy">The Health Care</span>      
          </h2>
      </div>
  </div>

  <script src="/testphp/js/HomePageFinal.JS/homepage.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
  <script>
    gsap.registerPlugin(ScrollTrigger);
    document.addEventListener("DOMContentLoaded", function(){
        const contentHolderHeight = document.querySelector(".content-holder").offsetHeight;
        const videoHolderHeight = window.innerHeight;
        const additionalScrollHeight = window.innerHeight;

        const totalBodyHeight = contentHolderHeight + videoHolderHeight + additionalScrollHeight;
        document.body.style.height = `${totalBodyHeight}px`;
    });

    ScrollTrigger.create({
        trigger: ".website-content",
        start: "-0.1% top",
        end: "bottom bottom",
        onEnter: () =>{
            gsap.set(".website-content", {position: 'absolute', top: '195%'});
        },
        onLeaveBack: () =>{
            gsap.set(".website-content", {position: 'fixed', top: '0'});
        }
    });

    gsap.to(".header .letters:first-child", {
        x: ()=> -innerWidth *3,
        scale: 10,
        ease: "power2.inOut",
        scrollTrigger: {
            start: "top top",
            end: `+=200%`,
            scrub: 1
        }
    });

    gsap.to(".header .letters:last-child ", {
        x: ()=> innerWidth *3,
        scale: 10,
        ease: "power2.inOut",
        scrollTrigger: {
            start: "top top",
            end: `+=200%`,
            scrub: 1
        }
    });

    gsap.to(".video-holder", {
        rotation: 0,
        clipPath: 'polygon(0% 0%, 100% 0%, 100% 100%, 0% 100%)',
        ease: "power2.inOut",
        scrollTrigger: {
            start: "top top",
            end: `+=200%`,
            scrub: 1
        }
    });

    gsap.to(".video-holder video", {
        scale: 1,
        ease: "power2.inOut",
        scrollTrigger: {
            start: "top top",
            end: `+=200%`,
            scrub: 1
        }
    });

    gsap.to("h1", {
        opacity: 1,
        ease: "power2.inOut",
        scrollTrigger: {
            start: "top top",
            end: `+=100%`,
            scrub: 1
        }
    });

    const container = document.querySelector('.container');
    const topSide = document.getElementById("top-side");
    const containerHeader = document.querySelector(".title-for-sub");
    const mainVideo = document.getElementById("main-video");
    let scrollPos = 0;

    const handleScroll = e => {
        const containerTop = container.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;
        const containerInView = containerTop < windowHeight && containerTop > 0;

        if (containerInView) {
            scrollPos = windowHeight - containerTop;
            if (scrollPos < 0) scrollPos = 0;
            if (scrollPos > windowHeight) scrollPos = windowHeight;
            const newHeight = 100 - (scrollPos / windowHeight * 100);
            topSide.style.height = `${newHeight}vh`;

            // Hiển thị hoặc ẩn h2 trong container dựa trên chiều cao của top-side
            if (newHeight <= 50) { // Khi chiều cao nhỏ hơn hoặc bằng 50% chiều cao cửa sổ
                containerHeader.style.opacity = 1;
            } else {
                containerHeader.style.opacity = 0;
            }
        }
    }

    window.addEventListener('scroll', handleScroll);

    ScrollTrigger.create({
        trigger: ".video-holder",
        start: "top 80%",
        end: "bottom top",
        onEnter: () => {
            mainVideo.play();
        },
        onLeaveBack: () => {
            mainVideo.pause();
        }
    });
    let cards = document.querySelectorAll(".card");
    let stackArea = document.querySelector(".stack-area");

    function rotateCards() {
        let angle = 0;
        cards.forEach((card) => {
            if (card.classList.contains("active")) {
                card.style.transform = `translate(-50%, -120vh) rotate(-48deg)`;
            } else {
                card.style.transform = `translate(-50%, -50%) rotate(${angle}deg)`;
                angle = angle - 10;
            }
        });
    }

    rotateCards();

    window.addEventListener("scroll", () => {
        let proportion = stackArea.getBoundingClientRect().top / window.innerHeight;
        if (proportion <= 0) {
            let n = cards.length;
            let index = Math.ceil((proportion * n) / 2);
            index = Math.abs(index) - 1;
            for (let i = 0; i < n; i++) {
                if (i <= index) {
                    cards[i].classList.add("active");
                } else {
                    cards[i].classList.remove("active");
                }
            }
            rotateCards();
        }
    });

</script>
  </body>
</html>