let slideIndex = 0;
slidey();

function slidey(){
    let i;
    let dots = document.getElementsByClassName("dot");
    let sliding = document.getElementsByClassName("mySlides");
    for(i = 0; i < sliding.length; i++){
        sliding[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > sliding){
        slideIndex = 1;
    }
    for(i = 0; i < dots.length; i++){
        dots[i].className = dots[i].className.replace("active2", "");
    }
    sliding[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += "active2";
    setTimeout(slidey, 5000);
}