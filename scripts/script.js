'use strict';
window.onscroll = function (){
   const nav = document.querySelector(".navbar");
   let top = window.scrollY;
   if(top >=100){
      nav.classList.add("active");
   }
   else{
      nav.classList.remove("active");
   }
   if(top>= 895){
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
   while (Element != null) {
       selectedPosX += Element.offsetLeft;
       selectedPosY += Element.offsetTop;
       Element = Element.offsetParent;
   }
   window.scrollTo(selectedPosX, selectedPosY);
}

function sliderScroll(element, parentId) {
   element = document.getElementById(element);
   parentId = document.getElementById(parentId);
   const elementList = document.querySelectorAll('.bar')
   const slider = document.querySelector(".slider-block");
   let posX = element.offsetLeft;
   let posY = element.offsetTop;
   slider.scroll(posX, posY);
   eachElementRemoveClass("remove", "active", elementList);
   parentId.classList.add("active");
}
function eachElementRemoveClass(operation,status, elementList){
   switch(operation) {
      case ("add"):
         for(let i = 0; i < elementList.length; i++){
            elementList[i].classList.add(status);
         }
         break;
      case ("remove"):
         for(let i = 0; i < elementList.length; i++){
            elementList[i].classList.remove(status);
         }
         break;
   }
   
}