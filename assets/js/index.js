const navbar = document.querySelector(".navbar__abs");
// const navbar_toggler = document.querySelector(".navbar-toggler");

// function handleLlinks() {
//   navbar.classList.toggle("navbar__active");
// }

// navbar_toggler.addEventListener("click", handleLlinks);

function reportWindowSize() {
  if (window.innerWidth > 768) {
    navbar.classList.remove("navbar__active");
  } else {
    navbar.classList.add("navbar__active");
  }
}

window.onresize = reportWindowSize;
window.onload = reportWindowSize;
