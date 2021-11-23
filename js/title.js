// Typing Effect

var quoteArray = ["Hi, My name is Daniel Reynolds"];
var textPosition = 0; 
var speed = 50;

typewriter = () => {
  document.querySelector(".title").innerHTML = quoteArray[0].substring(0, textPosition) + '<span>\u25AE</span>';
  
  if(textPosition++ != quoteArray[0].length)
    setTimeout(typewriter, speed);
}
window.addEventListener("load", typewriter)

// $('.js-menu').on('click', () => {
// 	$('.js-menu').toggleClass('active');
// 	$('.js-nav').toggleClass('open');
// 	$('.js-nav__list').toggleClass('show');
// });