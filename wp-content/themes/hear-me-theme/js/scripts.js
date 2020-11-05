import '../css/style.css';

// Sticky Header
window.onscroll = function() {add_sticky_class()};
var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function add_sticky_class() {
  if (window.pageYOffset > sticky) {
    navbar.classList.add("header-sticky");
  } else {
    navbar.classList.remove("header-sticky");
  }
}

// Allow new JS and CSS to load in browser without a traditional page refresh
if (module.hot) {
    module.hot.accept()
  }
  

