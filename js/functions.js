feather.replace();

const menuMobile = document.getElementById('menu-mobile');
const menuMobileTwo = document.getElementById('menu-mobileTwo');
const backMenu = document.getElementById('backMenu');
const asideMenu = document.getElementById('listenerMenu');


 
if (window.matchMedia("(max-width: 780px)").matches) {
asideMenu.hidden = true;
} else {
asideMenu.hidden = false;
}
menuMobile.addEventListener('click', (e)=>{
    asideMenu.hidden = false;
    menuMobile.style.display = 'none';
    menuMobileTwo.style.display = 'block';
});
menuMobileTwo.addEventListener('click', (e)=>{
    asideMenu.hidden=true;
    menuMobile.style.display = 'block';
    menuMobileTwo.style.display = 'none';
});
backMenu.addEventListener('click', (e)=>{
    asideMenu.hidden=true;
});

for (var i = 0; i < document.links.length; i++) {
    if (document.links[i].href == document.URL) {
        document.links[i].className = 'active';
    }
}