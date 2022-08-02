const nav = document.getElementById("nav");

window.addEventListener("scroll", function () {
  scrollposition = window.scrollY;

  if (scrollposition >= 60) {
    nav.classList.add("nav-dark");
  } else if (scrollposition <= 60) {
    nav.classList.remove("nav-dark");
  }
});

navbar = document.querySelector(".navbar").querySelectorAll("a");
console.log(navbar);

navbar.forEach((element) => {
  element.addEventListener("click", function () {
    navbar.forEach((nav) => nav.classList.remove("active"));

    this.classList.add("active");
  });
});
