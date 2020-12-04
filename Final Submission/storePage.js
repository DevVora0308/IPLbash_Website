function myFunction() {
    document.getElementsByClassName("wishList").className = "mystyle";
}

function solidHeart(x) {
    x.classList.remove("far fa--heart");
    x.classList.add("fas fa-heart");
}
  
function borderHeart(x) {
    x.classList.remove("fas fa-heart");
    x.classList.add("far fa--heart");
}

function cartPlus(x) {
    x.classList.remove("fa-shopping-cart");
    x.classList.add("fa-cart-plus");
}

function normalCart(x) {
    x.classList.remove("fa-cart-plus");
    x.classList.add("fa-shopping-cart");
}

var flag = true;
function addWishList(x) {
    if(flag){
        x.removeAttribute('onmouseover');
        x.removeAttribute('onmouseout');
        solidHeart(x);
        flag=false;
    } 
    else{
        x.addEventListener("onmouseover",function(){solidHeart(x);});
        x.addEventListener("onmouseout",function(){borderHeart(x);});
        borderHeart(x);
        flag=true;
    }
}

