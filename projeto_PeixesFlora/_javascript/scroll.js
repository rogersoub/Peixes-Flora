
let lastScrolltop = 0;
const navbar = document.querySelector('.menus')

window.addEventListener("scroll",()=>{
    if(window.scrollY >50){
        navbar.style.position = "fixed"

        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if(scrollTop>lastScrolltop){
            navbar.style.top = "-180px";
        }else{
            navbar.style.top = "0";
        }
        lastScrolltop = scrollTop
        console.log(scrollTop)

    }else{
        navbar.style.position='relative'
    }

});

// window.addEventListener("scroll",()=>{
//     let numero = 0 ; 
//     numero = window.scrollY
//     setInterval(()=>mostraNum(numero),6000);
    

// });