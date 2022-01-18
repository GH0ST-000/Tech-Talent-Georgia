function myFunction() {
   var element = document.getElementById("modal");
    if (element.classList.contains("hidden")){
        element.classList.remove("hidden");
    }else
        element.classList.add("hidden");
}

function ImageUpload(){
 var el = document.getElementById("uploaded_image");
 console.log(el.value);
}

