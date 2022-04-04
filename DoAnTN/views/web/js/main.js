const menuBar = document.querySelector(".menu-bar")
    menuBar.addEventListener("click",function(){
        menuBar.classList.toggle("active");
        document.querySelector(".menu-items").classList.toggle("active")
    })
window.addEventListener("scroll",function(){
    const x =this.pageYOffset;
    if(x>80){document.querySelector(".top").classList.add("active")}
    else{document.querySelector(".top").classList.remove("active")}
})
