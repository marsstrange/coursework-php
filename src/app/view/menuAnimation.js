function button_clicked(x) {
    x.classList.toggle("change");
    if (document.querySelector(".header .menu").style.getPropertyValue("display") == "flex") {
        document.querySelector(".header .menu").style.display = "none";
    }
    else {
        document.querySelector(".header .menu").style.display = "flex";
    }
}
document.getElementsByTagName("BODY")[0].onresize = function() {resize_check()};
function resize_check(){
    // window.getComputedStyle(document.getElementById("list")).style.getPropertyValue("flex-direction")
    console.log(document.querySelector(".symbol").classList.contains("change"));
    if (window.innerWidth >= 700) {
        if(document.querySelector(".symbol").classList.contains("change")){
            document.querySelector(".symbol").classList.remove("change");
        }
        document.querySelector(".header .menu").style.display = "flex";
    }
    else if(!document.querySelector(".symbol").classList.contains("change")){
        document.querySelector(".header .menu").style.display = "none";
    }
}