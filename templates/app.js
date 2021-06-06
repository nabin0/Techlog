const navigation = document.querySelector(".navigation");
let themeMode = document.getElementById("themeMode");
var themeBox = document.getElementById("theme");

// Hamburger menu toggle
document.querySelector(".toggle").onclick = function () {
  this.classList.toggle("active");
  navigation.classList.toggle("active");
};


// Toggle Theme
themeMode.addEventListener("click", (e) => {
    if (document.documentElement.hasAttribute("theme")) {
      document.documentElement.removeAttribute("theme");
      themeMode.innerHTML = ` <i class="fa fa-moon-o" id="themeMode">Dark</i>`;
    } else {
      document.documentElement.setAttribute("theme", "dark");
      themeMode.innerHTML = ` <i class="fa fa-sun-o" id="themeMode">Light</i>`;
    }
  });