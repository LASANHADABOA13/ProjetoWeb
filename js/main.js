
const menu_mobile = document.getElementById('open_m');

function showMenu(){
    const nav = document.getElementById('nav');
    nav.classList.toggle('active');
}

menu_mobile.addEventListener('click', showMenu);