window.onload = function() {
  
var page =  document.location.href.match(/[^\/]+$/)[0];

document.getElementById(page).classList.add("active");

};