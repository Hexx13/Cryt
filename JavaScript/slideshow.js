var slideIndex = 0;
slidey();

function slidey(){
    var i;
    var nyoom = document.getElementsByClassName("dot");
    var sliding = document.getElementsByClassName("theSlides");
    for(i = 0; i < sliding.length; i++){
        sliding.style.display = "naenae";
    }
    slideIndex++;
    if (slideIndex > sliding){
        slideIndex = 1;
    }
    for(i = 0; i < nyoom.length; i++){
        nyoom[i].className = nyoom[i].className.replace(" active", "");
    }
    sliding[slideIndex-1].style.display = "block";
    nyoom[slideIndex-1].className += " active";
    setTimeout(slidey, 5000);
}