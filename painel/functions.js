feather.replace();

const mainPainel = document.getElementById('mainPainel');
const menuPainel = document.getElementById('openMenuPainel');
const backPainel = document.getElementById('backMenuPainel');
const asidePainel = document.getElementById('asidePainel');
const menuPainel2 = document.getElementById('openMenuPainel2');


if (window.matchMedia("(max-width: 780px)").matches) {
asidePainel.hidden = true;
} else {
asidePainel.hidden = false;
backPainel.style.display = 'none';
}

menuPainel.addEventListener('click', (e)=>{
    asidePainel.hidden = true;
    mainPainel.style.gridTemplateColumns = '100%';
    menuPainel.style.display = 'none';
    menuPainel2.style.display = 'block';
});
menuPainel2.addEventListener('click', (e)=>{
    asidePainel.hidden=false;
    if (window.matchMedia("(min-width:800px)")){
    mainPainel.style.gridTemplateColumns = '20% 80%';
    }
    menuPainel.style.display = 'block';
    menuPainel2.style.display = 'none';
});

backPainel.addEventListener('click', (e)=>{
    asidePainel.hidden=true;
});

for (var i = 0; i < document.links.length; i++) {
    if (document.links[i].href == document.URL) {
        document.links[i].className = 'active';
    }
}

$('.deletar-membro').click(function(){
    var id_membro = $(this).attr('id_membro');
    var el = $(this).parent().parent();
   $.ajax({
    method: 'post',
    data: {'id_membro':id_membro},
    url: 'deletar.php'
   }).done(function(){
    el.fadeOut(function(){
        el.remove();
    });
   })
})
