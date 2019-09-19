function toggleOne() {
    var dots = document.getElementById("dots_1");
    var moreText = document.getElementById("more_1");
    var btnText = document.getElementById("btn_1");
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "&#x2193"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "&#x2191"; 
      moreText.style.display = "inline";
    }
  }

  function toggleTwo() {
    var dots = document.getElementById("dots_2");
    var moreText = document.getElementById("more_2");
    var btnText = document.getElementById("btn_2");
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "&#x2193"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "&#x2191"; 
      moreText.style.display = "inline";
    }
  }

  function toggleThree() {
    var dots = document.getElementById("dots_3");
    var moreText = document.getElementById("more_3");
    var btnText = document.getElementById("btn_3");
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      btnText.innerHTML = "&#x2193"; 
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      btnText.innerHTML = "&#x2191"; 
      moreText.style.display = "inline";
    }
}

function changePlace() {
    document.getElementById('formbutton').style.transform = "translate(850px, 0px)";
}

function hiddenMenu(){
    var x = document.getElementById("mobile_menu"); 
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }
    hiddenMenu();