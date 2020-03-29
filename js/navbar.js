function stickyElement(e) {
  var navbar = document.querySelector(".navbar.navbar-expand-lg.navbar-light");
  var scrollValue = window.scrollY;

  if (scrollValue > 150) {
    navbar.classList.add("is-fixed");
  } else if (scrollValue < 30) {
    navbar.classList.remove("is-fixed");
  }
}

window.addEventListener("scroll", stickyElement);
