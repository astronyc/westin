$(document).on("scroll", function(){
    if
  ($(document).scrollTop() > 60){
      $("navbar").addClass("shrink");
    }
    else
    {
        $("navbar").removeClass("shrink");
    }
});





/* const nav = document.querySelector('#main');
const topOfNav = nav.offsetTop;

function fixNav() {
    if(window.scrollY >= topOfNav) {
        document.body.style.paddingTop = nav.offsetHeight + 'px';
        document.body.classList.add('fixed-nav');
    } else {
        document.body.style.paddingTop = 0;
        document.body.classList.remove('fixed-nav');
    }
}

window.addEventListener('scroll', fixNav); */



/* function runOnScroll() {
    var navbar = document.getElementsByTagName('navbar')  ;
    if(document.body.scrollTop >= 50) {
        navbar[0].classList.add('shrink')
    } else {
        navbar[0].classList.remove('shrink')
    }
    console.log(topMenu[0].classList)

}; */

