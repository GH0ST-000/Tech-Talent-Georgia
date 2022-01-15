function openModal() {
    var element = document.getElementById("description");
    if (element.classList.contains("hidden")){
        element.classList.remove("hidden");
        document.getElementById("plus").classList.add('hidden')
    }else
        element.classList.add("hidden");
}
function CoreDecription(){
    var element = document.getElementById("core-description");
    if (element.classList.contains("hidden")){
        element.classList.remove("hidden");
        document.getElementById("pluss").classList.add('hidden')
    }else
        element.classList.add("hidden");
}

