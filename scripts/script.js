'use strict';
window.onscroll = function (){
   const nextDiv = document.querySelector(".pricelist-block")
   const nav = document.querySelector(".navbar");
   
   let top = window.scrollY;
   if(top >=100){
      nav.classList.add("active");
   }
   else{
      nav.classList.remove("active");
   }
   if(top>= nextDiv.offsetTop - nav.offsetHeight){
      nav.classList.add("underline");
   }
   else{
      nav.classList.remove("underline");
   }
}
function smoothScroll(Element) {

   Element = document.getElementById(Element);
   let selectedPosX = 0;
   let selectedPosY = 0;
      selectedPosX += Element.offsetLeft;
      selectedPosY += Element.offsetTop;
   window.scrollTo(selectedPosX, selectedPosY);
}
function displayElement(Element, status) {

   Element = document.getElementById(Element);
   Element.style.display = status;
}


