//Navigation Bar
const navSlide = () => {
    const burger = document.querySelector('.burger');
    const nav = document.querySelector('.nav-links');
    const navLinks = document.querySelectorAll('.nav-links li');
    
    burger.addEventListener('click',() => {
        //Toggle nav
        nav.classList.toggle('nav-active');

        //Animate Links
        navLinks.forEach((link, index) => {
            if (link.style.animation){
                link.style.animation = ''
            } else {
             link.style.animation = `navLinkFade 0.3s ease forwards`; //${index / 7 + 0.3}s if want add delay
            } 
        });
        //Burger animation
        burger.classList.toggle('toggle');
    });

    
    
}
navSlide();