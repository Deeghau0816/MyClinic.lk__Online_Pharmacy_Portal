
//Image slider
const slides = document.querySelectorAll(".slides img");
let slideIndex= 0;
let intervalId= null;

//initializeSlider();
document.addEventListener("DOMContentLoaded", initializeSlider);

function initializeSlider(){
    if(slides.length > 0){
        slides[slideIndex].classList.add("displaySlide");
        intervalId=setInterval(nextSlide, 5000);
    }
}

function showSlide(index){

    if(index >= slides.length){
        slideIndex=0;
    }
    else if(index < 0){
        slideIndex = slides.length - 1;
    }


    slides.forEach(slide => {
        slide.classList.remove("displaySlide");
    });
    slides[slideIndex].classList.add("displaySlide");

}

function prevSlide(){
    slideIndex--;
    showSlide(slideIndex);
}

function nextSlide(){
    slideIndex++;
    showSlide(slideIndex);
}

//Search Bar
function listSearch() {
    var query = document.getElementById("input-box").value;

    if (query == "categories") {
        window.location.href = 'category.php';
    } else if (query == "panadol") {
        window.location.href = 'products.php';
    } else if (query == "pet") {
        window.location.href = 'products.php';
    } else if (query == "shampoo") {
        window.location.href = 'products.php';
    } else if (query == "ayur") {
        window.location.href = 'products.php';    
    } else {
        alert("Not found!");
    }
}

//Search Bar
function listSearchLog() {
    var query = document.getElementById("input-box").value;
    
    if (query == "categories") {
        window.location.href = 'category-log.php';
    } else if (query == "panadol") {
        window.location.href = 'products-log.php';
    } else if (query == "pet") {
        window.location.href = 'products-log.php';
    } else if (query == "shampoo") {
        window.location.href = 'products-log.php';
    } else if (query == "ayur") {
        window.location.href = 'products-log.php';    
    } else {
        alert("Not found!");
    }
}

//cart 
function cartbtn(){
    let cart = confirm("You have to Log In!!");
    window.Location.href='Home.php'
}