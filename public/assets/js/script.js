var scrollpos = window.scrollY;
var header = document.getElementById("header");
var header2 = document.getElementById("header2");
var navcontent = document.getElementById("nav-content");
var navaction = document.getElementById("navAction");
var brandname = document.getElementById("brandname");
var toToggle = document.querySelectorAll(".toggleColour");
var icon = document.getElementById("icon");

document.addEventListener("scroll", function () {
/*Apply classes for slide in bar*/
scrollpos = window.scrollY;

if (scrollpos > 10) {
    header.classList.add("bg-white");
    header2.classList.add("bg-white");
    header2.classList.remove("gradient");
    navaction.classList.remove("bg-white");
    navaction.classList.add("gradient");
    navaction.classList.remove("text-gray-800");
    navaction.classList.add("text-white");
    //Use to switch toggleColour colours
    for (var i = 0; i < toToggle.length; i++) {
    toToggle[i].classList.add("text-gray-800");
    toToggle[i].classList.remove("text-white");
    }
    header.classList.add("shadow");
    icon.setAttribute('src', '/img/linac-icon.png');
} else {
    header.classList.remove("bg-white");
    header2.classList.remove("bg-white");
    header2.classList.add("gradient");
    navaction.classList.remove("gradient");
    navaction.classList.add("bg-white");
    navaction.classList.remove("text-white");
    navaction.classList.add("text-gray-800");
    //Use to switch toggleColour colours
    for (var i = 0; i < toToggle.length; i++) {
    toToggle[i].classList.add("text-white");
    toToggle[i].classList.remove("text-gray-800");
    }
    header.classList.remove("shadow");
    icon.setAttribute('src','/img/linac-icon-.png');
}
});
/*Toggle dropdown list*/
/*https://gist.github.com/slavapas/593e8e50cf4cc16ac972afcbad4f70c8*/

var navMenuDiv = document.getElementById("nav-content");
var navMenu = document.getElementById("nav-toggle");

document.onclick = check;
function check(e) {
var target = (e && e.target) || (event && event.srcElement);

//Nav Menu
if (!checkParent(target, navMenuDiv)) {
    // click NOT on the menu
    if (checkParent(target, navMenu)) {
    // click on the link
    if (navMenuDiv.classList.contains("hidden")) {
        navMenuDiv.classList.remove("hidden");
    } else {
        navMenuDiv.classList.add("hidden");
    }
    } else {
    // click both outside link and outside menu, hide menu
    navMenuDiv.classList.add("hidden");
    }
}
}
function checkParent(t, elm) {
while (t.parentNode) {
    if (t == elm) {
    return true;
    }
    t = t.parentNode;
}
return false;
}

window.addEventListener('scroll', function () {
    const parallaxLayer = document.querySelector('.parallax-layer1');
    let scrollPosition = window.pageYOffset;

    let speed = 0.3;
    parallaxLayer.style.transform = 'translateY(' + (scrollPosition * speed) + 'px)';
  });

window.addEventListener('scroll', function () {
    const parallaxLayer = document.querySelector('.parallax-layer2');
    let scrollPosition = window.pageYOffset;

    let speed = 0.3;
    parallaxLayer.style.transform = 'translateY(' + (scrollPosition * speed) + 'px)';
  });