window.addEventListener('DOMContentLoaded', () => {
    document.addEventListener("DOMContentLoaded", function(){
        const contentHolderHeight = document.querySelector(".content-holder").offsetHeight;
        const videoHolderHeight = window.innerHeight;
        const additionalScrollHeight = window.innerHeight;
  
        const totalBodyHeight = contentHolderHeight + videoHolderHeight + additionalScrollHeight;
        document.body.style.height = `${totalBodyHeight}px`;
    });
  
    const container = document.querySelector('.container');
    const topSide = document.getElementById("top-side");
    const containerHeader = document.querySelector(".title-for-sub");
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
  
            if (newHeight <= 50) {
                containerHeader.style.opacity = 1;
            } else {
                containerHeader.style.opacity = 0;
            }
        }
    }
  
    window.addEventListener('scroll', handleScroll);
  
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
  
    document.addEventListener("DOMContentLoaded", () => {
      const button_mission = document.querySelector(".button_mission");
      const button_goal = document.querySelector(".button_goal");
  
      function toggleActive(element) {
          element.addEventListener("click", () => {
              element.classList.toggle("active");
              console.log("OK!");
          });
      }
  
      if (button_mission) {
          toggleActive(button_mission);
      }
  
      if (button_goal) {
          toggleActive(button_goal);
      }
  });
  
  });
  
  document.addEventListener("DOMContentLoaded", () => {
      const buttonMission = document.querySelector("#button_mission");
      const buttonGoal = document.querySelector("#button_goal");
      const contentMission = document.querySelector(".box_content_mission");
      const contentGoal = document.querySelector(".box_content_goal");
  
      function showMission() {
          contentMission.style.opacity = 1;
          contentGoal.style.opacity = 0;
          contentMission.style.transform = "translateX(0)";
          contentGoal.style.transform = "translateX(60%)";
  
          buttonMission.classList.add("active");
          buttonGoal.classList.remove("active");
      }
  
      function showGoal() {
          contentMission.style.opacity = 0;
          contentGoal.style.opacity = 1;
          contentMission.style.transform = "translateX(-60%)";
          contentGoal.style.transform = "translateX(0)";
  
          buttonMission.classList.remove("active");
          buttonGoal.classList.add("active");
      }
  
      buttonMission.addEventListener("click", showMission);
      buttonGoal.addEventListener("click", showGoal);
  
      showMission();
  });
  
  document.addEventListener("DOMContentLoaded", () => {
      const listImg = document.querySelectorAll(".box_quote_img img");
      const listImgShow = document.querySelectorAll(".box_quote_img_show img");
      const listContent = document.querySelectorAll(".box_quote_detail_item");
  
      const buttonLeft = document.querySelector(".fa-chevron-left");
      const buttonRight = document.querySelector(".fa-chevron-right");
  
      let i = 0;
  
      function showContent(index) {
          listImg[i].classList.remove('active');
          listImgShow[i].classList.remove('active');
          listContent[i].classList.remove('active');
  
          i = index;
  
          listImg[i].classList.add('active');
          listImgShow[i].classList.add('active');
          listContent[i].classList.add('active');
      }
  
      function updateSliderPosition() {
          listImg.forEach((imgElement, idx) => {
              let offset = (idx - i) * 100;
              imgElement.style.transform = `translateX(${offset}%)`;
          });
      }
  
      showContent(i);
      updateSliderPosition();
  
      listImgShow.forEach((img, idx) => {
          img.addEventListener('click', () => {
              showContent(idx);
              updateSliderPosition();
          });
      });
  
      buttonRight.addEventListener('click', () => {
          const nextIndex = (i + 1) % listImg.length;
          showContent(nextIndex);
          updateSliderPosition();
      });
  
      buttonLeft.addEventListener('click', () => {
          const prevIndex = (i - 1 + listImg.length) % listImg.length;
          showContent(prevIndex);
          updateSliderPosition();
      });
  });
  
  document.addEventListener("DOMContentLoaded", () => {
      console.log('DOMContentLoaded event fired');
  
      window.addEventListener('scroll', reveal);
      
      function reveal(){
          var reveals = document.querySelectorAll(".reveal");
          console.log('Reveals:', reveals);
      
          for(var i = 0; i < reveals.length; i++){
              var heightWindow = window.innerHeight;
              var revealTop = reveals[i].getBoundingClientRect().top;
              var revealPoint = 100;
  
              console.log('Element top:', revealTop, 'Window height:', heightWindow);
      
              if(revealTop < heightWindow - revealPoint) {
                  reveals[i].classList.add('scrollActive');
                  console.log('Element revealed:', reveals[i]);
              }
              else {
                  reveals[i].classList.remove('scrollActive');
                  console.log('Element hidden:', reveals[i]);
              }
          }
      }
  
      reveal();
  });
  
  document.addEventListener("DOMContentLoaded", () => {
      window.addEventListener('scroll', function() {
          var scrollPosition = window.scrollY;
          var changePoint = 2200;
          var targetElements = document.querySelectorAll('.navigation nav ul .Bao_box_function a');
          var navigation = document.querySelector('.navigation');
  
          targetElements.forEach(element => {
              if ((scrollPosition >= 2200 && scrollPosition <= 5200) || (scrollPosition >= 6200 && scrollPosition <= 7200)) {
                  element.style.color = '#000000';
              } else {
                  element.style.color = '#ffffff';
              }
          });
  
          if (scrollPosition >= changePoint) {
              navigation.classList.add('scrolled');
          } else {
              navigation.classList.remove('scrolled');
          }
      });
  });
  