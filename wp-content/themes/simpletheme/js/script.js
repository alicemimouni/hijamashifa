// change navbar on scroll
// ########################
// add class tilt-in when srolling
// ###############################
window.onscroll = function() {

  if (window.innerWidth > 750) {

    if(document.documentElement.scrollTop > 80) { 
      document.querySelector('nav').style.backgroundColor = "rgb(133, 166, 164)";
    }
    else if(document.documentElement.scrollTop < 80) {
          document.querySelector('nav').style.background = "transparent";
    }
  }

    let element = document.querySelector(".tilt");
    
    if(element) {
      let currentScrollPos = window.pageYOffset;
      if (currentScrollPos > 0) {
        element.classList.add("tilt-in");
      } else {
        element.classList.remove("tilt-in");
      }

    }
  }


// burger menu to cross on click
// ##############################

let link = document.getElementById('link');
let burger = document.getElementById('burger');
let menu = document.querySelector('.menu-header-container');
if(link) { 
  link.addEventListener('click', function() {
      // if menu is openned
      if(burger.classList.contains('open')) {
          menu.style.display = "none";
          burger.classList.remove("open");
          menu.classList.remove('load');
      }
      // if menu is closed
      else {
          burger.classList.add('open');
          menu.classList.add('load');
          menu.style.display = "flex";
      }
  })
};


// animation css - reveal elements
// ###############################
// define options
const ratio = .7
const options = {
  root: null,
  rootMargin: '0px',
  threshold: ratio
}
// add class reveal-visible when ratio is good
const handleIntersect = function (entries, observer) {
  entries.forEach(function (entry) {
    if (entry.intersectionRatio > ratio) {
      entry.target.classList.add('reveal-visible')
      observer.unobserve(entry.target)
    }
  })
}
// loop foreach element who have reveal class css reveal
  const observer = new IntersectionObserver(handleIntersect, options) 
  document.querySelectorAll('.reveal, .reveal-top, .reveal-left').forEach(function(r) {
    observer.observe(r)
  })


// remove empty elements p 
// ######################
let paragraphes = document.querySelectorAll('body p');
paragraphes.forEach(element => {
    if(element.innerHTML === "" || element.innerHTML === "&nbsp;") {
        element.parentNode.removeChild(element);
    }
});


// insert &nbsp; before carcteres ? or : or !
// ###########################################
document.querySelectorAll('h2, h3, h1, p').forEach(element => {

  if(element.innerHTML.includes('?')) {
    element.innerHTML = element.innerHTML.replace('?', '&nbsp?');  
  }
  
  if(element.innerHTML.includes('!')) {
    
    element.innerHTML = element.innerHTML.replace('!', '&nbsp!');   
  }

  if(element.innerHTML.includes(':')) {
    
    element.innerHTML = element.innerHTML.replace(':', '&nbsp:'); 
  }
});

