let indice = 1;
muestraSlides(indice);

function avanzaSlides(n){
    muestraSlides(indice+=n);
}

function posicionSlide(n){
    muestraSlides(indice=n)
}

function muestraSlides(n) {
    let i;

    
    let slides = document.getElementsByClassName('miSlider');
    if(n > slides.length){
        indice = 1;
    }
    if(n < 1){
        indice = slides.length;
    }
    for(i = 0; i < slides.length; i++){
        slides[i].style.display = 'none';
    }
    
    slides[indice-1].style.display = 'block';
    
}



