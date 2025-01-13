document.addEventListener("DOMContentLoaded", () => {
     // 1
     const weBelieveContainer = document.querySelector(".we-believe");
     const movingBall = weBelieveContainer
          ? weBelieveContainer.querySelector(".moving-ball")
          : null;

     function updateBallAnimation() {
          if (!movingBall) return;

          const screenWidth = window.innerWidth;
          let translateXValue = 370;

          if (screenWidth <= 390) {
               translateXValue = 262;
          } else if (screenWidth <= 950) {
               translateXValue = 300;
          }

          movingBall.style.animation = `move-around-we-believe 10s linear infinite`;

          const keyframes = `
             @keyframes move-around-we-believe {
                 0% {
                     transform: translate(-50%, -50%) rotate(0deg) translateX(${translateXValue}px);
                 }
                 100% {
                     transform: translate(-50%, -50%) rotate(360deg) translateX(${translateXValue}px);
                 }
             }
         `;

          let styleSheet = document.querySelector(
               "#dynamic-animations-we-believe"
          );
          if (!styleSheet) {
               styleSheet = document.createElement("style");
               styleSheet.id = "dynamic-animations-we-believe";
               document.head.appendChild(styleSheet);
          }

          styleSheet.innerHTML = keyframes;
     }

     if (movingBall) {
          updateBallAnimation();
          window.addEventListener("resize", updateBallAnimation);
     }

     // 2
     const dots = document.querySelectorAll(".dot");
     const contents = document.querySelectorAll(".content");
     const images = document.querySelectorAll(".images .image");
     const txtLabels = document.querySelectorAll(".txt-label");
     const additionalServicesWrapper = document.querySelector(
          ".additional-services__wrapper"
     );

     if (dots.length > 0 && contents.length > 0 && images.length > 0) {
          dots[0].classList.add("active");
          contents[0].classList.add("active");
          images[0].style.visibility = "visible";
          images[0].style.opacity = "1";
          images[0].style.width = "auto";
          images[0].style.height = "auto";
     }
     //575
     if (additionalServicesWrapper && window.innerWidth > 768) {
          const currentHeight = additionalServicesWrapper.clientHeight;
          additionalServicesWrapper.style.height = currentHeight + 50 + "px";
     }

     function activateContent(index) {
          document
               .querySelectorAll(".content.active")
               .forEach((c) => c.classList.remove("active"));
          document
               .querySelectorAll(".dot.active")
               .forEach((d) => d.classList.remove("active"));
          document
               .querySelectorAll(".txt-label.active")
               .forEach((t) => t.classList.remove("active"));

          images.forEach((img) => {
               img.style.visibility = "hidden";
               img.style.opacity = "0";
               img.style.width = "0";
               img.style.height = "0";
          });

          dots[index].classList.add("active");
          contents[index].classList.add("active");
          txtLabels[index].classList.add("active");

          images[index].style.visibility = "visible";
          images[index].style.opacity = "1";
          images[index].style.width = "auto";
          images[index].style.height = "auto";
     }

     dots.forEach((dot, index) => {
          dot.addEventListener("click", function () {
               if (!this.classList.contains("active")) {
                    activateContent(index);
               }
          });
     });

     txtLabels.forEach((label, index) => {
          label.addEventListener("click", function () {
               if (!this.classList.contains("active")) {
                    activateContent(index);
               }
          });
     });

     // 3
     //DESKTOP
     const leftBoxes = document.querySelectorAll(
          ".right__first-column .right__box"
     );
     const rightBoxes = document.querySelectorAll(
          ".right__second-column .right__box"
     );

     let currentIndex = 0;
     let interval;

     const combinedBoxes = [];

     for (let i = 0; i < Math.max(leftBoxes.length, rightBoxes.length); i++) {
          if (leftBoxes[i]) combinedBoxes.push(leftBoxes[i]);
          if (rightBoxes[i]) combinedBoxes.push(rightBoxes[i]);
     }

     function highlightBox() {
          if (combinedBoxes.length === 0) return;

          combinedBoxes.forEach((box) => box.classList.remove("active"));

          combinedBoxes[currentIndex].classList.add("active");

          currentIndex = (currentIndex + 1) % combinedBoxes.length;
     }

     function startHighlighting() {
          interval = setInterval(highlightBox, 2500);
     }

     function stopHighlighting() {
          clearInterval(interval);
     }

     combinedBoxes.forEach((box, index) => {
          box.addEventListener("mouseenter", () => {
               stopHighlighting();
               combinedBoxes.forEach((b) => b.classList.remove("active"));
               box.classList.add("active");
               currentIndex = index;
          });

          box.addEventListener("mouseleave", () => {
               startHighlighting();
          });
     });

     if (combinedBoxes.length > 0) {
          highlightBox();
          startHighlighting();
     }

     // 4
     const ballFirst = document.querySelector(".moving-ball-vertical-first");
     const ballSecond = document.querySelector(".moving-ball-vertical-second");
     const problemsElement = document.querySelector(".problems");
     const boxes = document.querySelectorAll(".slider-desktop__box");
     const windowWidth = window.innerWidth;

     const animationDuration = 10000;
     let animationTimeout = null;
     let animationStopped = false;

     function isProblemsVisible() {
          return (
               problemsElement &&
               problemsElement.offsetWidth > 0 &&
               problemsElement.offsetHeight > 0
          );
     }

     function checkBallCollision(ball) {
          const ballRect = ball.getBoundingClientRect();
          boxes.forEach((box) => {
               const boxRect = box.getBoundingClientRect();

               if (
                    ballRect.right >= boxRect.left &&
                    ballRect.left <= boxRect.right &&
                    ballRect.bottom >= boxRect.top &&
                    ballRect.top <= boxRect.bottom
               ) {
                    box.classList.add("active");
               } else {
                    box.classList.remove("active");
               }
          });
     }

     function animateBallFirst(startPosition = 0) {
          ballFirst.style.display = "block";
          let position = startPosition;
          const distance = windowWidth - 20;
          const startTime = performance.now();

          function move(currentTime) {
               if (animationStopped) return;

               const elapsedTime = currentTime - startTime;
               const progress = Math.min(elapsedTime / animationDuration, 1);
               position = progress * distance;
               ballFirst.style.left = position + "px";

               checkBallCollision(ballFirst);

               if (progress < 1) {
                    requestAnimationFrame(move);
               } else {
                    ballFirst.style.display = "none";
                    setTimeout(() => {
                         animateBallSecond();
                    }, 1000);
               }
          }
          requestAnimationFrame(move);
     }

     function animateBallSecond(startPosition = 0) {
          ballSecond.style.display = "block";
          let position = startPosition;
          const distance = windowWidth - 20;
          const startTime = performance.now();

          function move(currentTime) {
               if (animationStopped) return;

               const elapsedTime = currentTime - startTime;
               const progress = Math.min(elapsedTime / animationDuration, 1);
               position = progress * distance;
               ballSecond.style.left = position + "px";

               checkBallCollision(ballSecond);

               if (progress < 1) {
                    requestAnimationFrame(move);
               } else {
                    ballSecond.style.display = "none";
                    setTimeout(() => {
                         animateBallFirst();
                    }, 1000);
               }
          }
          requestAnimationFrame(move);
     }

     boxes.forEach((box) => {
          box.addEventListener("mouseenter", () => {
               ballFirst.style.display = "none";
               ballSecond.style.display = "none";
               animationStopped = true;

               box.classList.add("highlight");

               if (animationTimeout) {
                    clearTimeout(animationTimeout);
               }
          });

          box.addEventListener("mouseleave", () => {
               box.classList.remove("highlight");

               animationTimeout = setTimeout(() => {
                    animationStopped = false;
                    animateBallFirst(0);
               }, 1000);
          });
     });

     if (isProblemsVisible()) {
          animateBallFirst(0);
     }

     // //5
     // const slides = document.querySelectorAll(".splide__slide.mirror");

     // const reversedSlides = Array.from(slides).reverse();

     // const slideContainer = document.querySelector(".splide__list.mirror");

     // slideContainer.innerHTML = "";

     // reversedSlides.forEach((slide) => slideContainer.appendChild(slide));

     //6
     const faqBoxes = document.querySelectorAll(".faq-list__box");

     faqBoxes.forEach((box) => {
          box.classList.remove("active");
          box.querySelector(".faq-dot")?.classList.remove("active");
          box.querySelector(".faq-list__desc-border")?.classList.remove(
               "active"
          );
          box.querySelector(".button-border")?.classList.remove("active");
     });

     if (faqBoxes.length > 0) {
          faqBoxes[0].classList.add("active");
          faqBoxes[0].querySelector(".faq-dot")?.classList.add("active");
          faqBoxes[0]
               .querySelector(".faq-list__desc-border")
               ?.classList.add("active");
          faqBoxes[0].querySelector(".button-border")?.classList.add("active");
     }

     faqBoxes.forEach((box) => {
          const dot = box.querySelector(".faq-list__title-border");

          if (dot) {
               dot.addEventListener("click", function () {
                    const isActive = box.classList.contains("active");

                    faqBoxes.forEach((b) => {
                         b.classList.remove("active");
                         b.querySelector(".faq-dot")?.classList.remove(
                              "active"
                         );
                         b.querySelector(
                              ".faq-list__desc-border"
                         )?.classList.remove("active");
                         b.querySelector(".button-border")?.classList.remove(
                              "active"
                         );
                    });

                    if (!isActive) {
                         box.classList.add("active");
                         box.querySelector(".faq-dot")?.classList.add("active");
                         box.querySelector(
                              ".faq-list__desc-border"
                         )?.classList.add("active");
                         box.querySelector(".button-border")?.classList.add(
                              "active"
                         );
                    }
               });
          }
     });

     //7
     function initializeCircleAnimation(integrationClass) {
          const circleMove = document.querySelector(
               `.${integrationClass} .circle-move`
          );
          if (!circleMove) return;

          const testCircles = document.querySelectorAll(
               `.${integrationClass} .box-logo`
          );

          function updateCircleAnimation() {
               const wrapper = document.querySelector(".carousel-wrapper");
               const wrapperDiameter = wrapper.offsetWidth;
               const circleRadius = wrapperDiameter / 2;

               circleMove.style.animation = `moveCircle 10s linear infinite`;

               const keyframes = `
         @keyframes moveCircle {
            0% {
               transform: translate(-50%, -50%) rotate(0deg) translateX(${circleRadius}px);
            }
            100% {
               transform: translate(-50%, -50%) rotate(360deg) translateX(${circleRadius}px);
            }
         }
         `;

               let styleSheet = document.querySelector("#dynamic-animations");
               if (!styleSheet) {
                    styleSheet = document.createElement("style");
                    styleSheet.id = "dynamic-animations";
                    document.head.appendChild(styleSheet);
               }

               styleSheet.innerHTML = keyframes;
          }

          function detectCollision() {
               const rect = circleMove.getBoundingClientRect();
               const ballRadius = rect.width / 2;
               const ballCenterX = rect.left + ballRadius + window.scrollX;
               const ballCenterY = rect.top + ballRadius + window.scrollY;

               testCircles.forEach((testCircle) => {
                    const testRect = testCircle.getBoundingClientRect();
                    const testRadius = testRect.width / 2;
                    const testCenterX =
                         testRect.left + testRadius + window.scrollX;
                    const testCenterY =
                         testRect.top + testRadius + window.scrollY;

                    const distance = Math.sqrt(
                         (ballCenterX - testCenterX) ** 2 +
                              (ballCenterY - testCenterY) ** 2
                    );

                    if (distance < ballRadius + testRadius) {
                         testCircle.classList.add("active");
                    } else {
                         testCircle.classList.remove("active");
                    }
               });
          }

          updateCircleAnimation();
          window.addEventListener("resize", updateCircleAnimation);
          setInterval(detectCollision, 100);
     }

     initializeCircleAnimation("integrations");
     initializeCircleAnimation("integrations-reflection");
     initializeCircleAnimation("integrations-double");

     //8
});
