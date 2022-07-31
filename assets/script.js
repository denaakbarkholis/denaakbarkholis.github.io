const nav = document.getElementById("nav");
const active = document.getElementId("nav");

window.addEventListener("scroll", function () {
  scrollposition = window.scrollY;

  if (scrollposition >= 60) {
    nav.classList.add("nav-dark");
  } else if (scrollposition <= 60) {
    nav.classList.remove("nav-dark");
  }
});

window.addEventListener("active", function () {
  active.classList.toogle("active");
});
