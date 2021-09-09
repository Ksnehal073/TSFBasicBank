//Responsive Navigation Bar
const bars = document.querySelector(".bars");
const times = document.querySelector(".close");
const mobileNav = document.querySelector(".mobile-nav");

bars.onclick = () => {
  mobileNav.style.left = "0";
}

times.onclick = () => {
  mobileNav.style.left = "-100%";
}

var moLinks = document.querySelectorAll(".side-nav a");
for (var i = 0; i < moLinks.length; i++) {
  moLinks[i].onclick = () => {
    mobileNav.style.left = "-100%";
  }
}

// Transfer money select options
const selectedItem = document.querySelector(".selected");
const optionsBox = document.querySelector(".options-container");
const optionsList = document.querySelectorAll(".option");

selectedItem.addEventListener("click", () => {
  optionsBox.classList.toggle("active");
});

optionsList.forEach(s => {
  s.addEventListener("click", () => {
    selectedItem.innerHTML = s.querySelector("label").innerHTML;
    optionsBox.classList.remove("active");
  });
});


