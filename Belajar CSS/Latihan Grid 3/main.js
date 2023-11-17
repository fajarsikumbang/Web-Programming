const navbarToggle = document.querySelector('.menu-toggle input')
const nav = document.querySelector('nav .menu-list')

navbarToggle.addEventListener('click',function() {
    nav.classList.toggle('open')
})