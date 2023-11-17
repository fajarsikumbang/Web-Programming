const navbarToggle = document.querySelector('.navbar-toggle input')
const nav = document.querySelector('nav .navbar-menu')

navbarToggle.addEventListener('click', function(){
    nav.classList.toggle('open')
})