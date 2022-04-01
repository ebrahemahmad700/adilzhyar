const hamburger =document.querySelector('.header .nav-bar .nav-list .hamburger');
const mobile_menu =document.querySelector('.header .nav-bar .nav-list ul');
const menu_item =document.querySelector('.header .nav-bar .nav-list ul a');
const header =document.querySelector('.header.container');

hamburger.addEventListener('click',()=>{
    hamburger.classList.toggle('active');
    mobile_menu.classList.toggle('active');
});
document.addEventListener('scroll', ()=>{
 var scroll_position =wendow.scrolly;
 if(scroll_position>250){
     header.style.backgroundcolor="#29323c";
 }else
 {
    header.style.backgroundcolor="transparent";
 }
});

menu_item.array.forEach(item => {
    item.addEventListener('click',()=>{
        hamburger.classList.toggle('active');
        mobile_menu.classList.toggle('active');

    });
});