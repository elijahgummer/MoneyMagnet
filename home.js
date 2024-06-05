var typed = new Typed(".auto-type", {
    strings: [
      "Take Control",
      "Achieve Financial Freedom",
      "Master Your Money",
      "Secure Your Financial Future",
      "Budget Like a Pro",
    ],
    typeSpeed: 150,
    backSpeed: 150,
    loop: true,
  });
  
  let li = document.querySelectorAll(".faq-text li");
  for (var i = 0; i < li.length; i++) {
    li[i].addEventListener("click", (e) => {
      let clickedLi;
      if (e.target.classList.contains("question-arrow")) {
        clickedLi = e.target.parentElement;
      } else {
        clickedLi = e.target.parentElement.parentElement;
      }
      clickedLi.classList.toggle("showAnswer");
    });
  }
  