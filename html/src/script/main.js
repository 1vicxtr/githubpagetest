let btnMenu;
let Menu;
let menu;
window.onload = addEventListener("DOMContentLoaded",function(){

    /* Carrusel */
    const slider = this.document.getElementById('slider');
    const sliderSection = this.document.querySelectorAll('.slider-section');
    setInterval(() => {
        moveToRight();
    }, 3000);
    let operacion = 0,
    counter = 0,
    widthImg = 100/sliderSection.length;
    function moveToRight(){
        if(counter >= sliderSection.length-1){
            counter = 0;
            operacion = 0;
            slider.style.transform = `translate(-${operacion}%)`;
            slider.style.transition = "none";
            return;
        }
            counter++;
            operacion = operacion + widthImg;
            slider.style.transform = `translate(-${operacion}%)`;
            slider.style.transition = "all ease .6s";        
    }
});
