const navbarToggle = document.querySelector("header nav .toggle input")
const navbarMenu = document.querySelector("header nav .menu")

navbarToggle.addEventListener("click", function() {
    navbarMenu.classList.toggle("open")
})