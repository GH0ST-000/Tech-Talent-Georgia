function myFunction() {
   var element = document.getElementById("modal");
    if (element.classList.contains("hidden")){
        element.classList.remove("hidden");
    }else
        element.classList.add("hidden");
}
