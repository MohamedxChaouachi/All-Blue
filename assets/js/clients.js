document.querySelector("#show-popup").addEventListener("click",function(){
    document.querySelector(".popup").classList.add("active");
    document.getElementById("body").style.overflow = "hidden";
    
});
document.querySelector(".popup .close-btn").addEventListener("click",function(){
    document.querySelector(".popup").classList.remove("active");
    document.getElementById("body").style.overflow = "visible";


});