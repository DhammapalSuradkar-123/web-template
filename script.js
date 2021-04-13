var acc = document.getElementsByClassName("main3-tital");
let sidebar = document.getElementsByClassName("dropdown-link");

window.onscroll = function(){scrollfun()};
function scrollfun(){
  if(document.body.scrollTop > 40 || document.documentElement.scrollTop > 40){
    document.getElementById("n1").style.top = "0";
  }else{
    document.getElementById("n1").style.top = "-130px";
  }
}

for(let j = 0; j < sidebar.length; j++){
  sidebar[j].addEventListener("mouseover", function(){
    this.classList.toggle = "active";

    let nextEle = this.nextElementSibling;
    let prevEle = this.previousElementSibling;
    if(nextEle.style.display === "none"){
      nextEle.style.display = "block";
      this.style.borderBottom = "0.4px solid dodgerblue";
      nextEle.style.borderRight = "2px solid dodgerblue";
      nextEle.style.borderBottom = "2px solid dodgerblue";
      nextEle.style.borderLeft = "2px solid dodgerblue";
      prevEle.style.display = "none";
    }else{
      nextEle.style.display = "none";
      this.style.borderBottom = "0.4px solid lightgray";
      nextEle.style.borderRight = "2px solid transparent";
      nextEle.style.borderbottom = "2px solid transparent";
      nextEle.style.borderLeft = "2px solid dodgerblue";
      prevEle.style.display = "block";
    }
  })
}

function openNav(){
  document.getElementById("sidebar").style.width = "260px";
  document.getElementById("navigation").style.paddingRight = "260px";
}
function closeNav(){
  document.getElementById("sidebar").style.width = "0";
  document.getElementById("navigation").style.paddingRight = "0";
}

for (let i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");

    var panel = this.nextElementSibling;
    var parent = this.parentNode;
    if (panel.style.display === "none") {
      panel.style.display = "block";
      this.style.color = "#2ab22d";
      parent.style.borderLeft = "2px solid #2ab22d";
      preve.style.display = "none";
    } else {
      panel.style.display = "none";
      this.style.color = "black";
      parent.style.borderLeft = "1px solid lightgray";
    }
  });
}
