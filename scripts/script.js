'use strict';

let prev = 0;
window.onscroll = function (prev){
   const nav = document.querySelector(".navbar");
   let top = window.scrollY;
   console.log(top);
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
   return prev
}