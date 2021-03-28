btn = document.getElementById('nav-btn')
close = document.getElementById('close')
nav = document.getElementById('sidenav')

btn.addEventListener('click', (e) => {
    e.preventDefault()
    nav.classList.add('show')
})
close.addEventListener('click', (e) => {
    e.preventDefault()
    nav.classList.remove('show')
})