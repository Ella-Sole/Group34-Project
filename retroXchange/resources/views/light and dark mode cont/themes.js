const toggleButton = document.getElementById("change-theme");
const body = document.body;


if (localStorage.getItem("theme") === "dark") {
  body.classList.add("dark-mode");
}

toggleButton.addEventListener("click", () => {
  body.classList.toggle("dark-mode");

  
  if (body.classList.contains("dark-mode")) {
    localStorage.setItem("theme", "dark");
  } else {
    localStorage.setItem("theme", "light");
  }
});
