function ShowHide(){
const div=document.getElementById("show");
const dropdown=document.getElementById("dropdown");

const element=dropdown.classList.contains("active");
    if (element){
        dropdown.classList.remove("active")
        dropdown.classList.add("inactive");
    }else {
        dropdown.classList.remove("inactive")
        dropdown.classList.add("active");
    }

}
function myFunction() {
    // document.getElementById("dropdown").classList.add("active");
    const dropdown=document.getElementById("dropdown");
    console.log(dropdown);
}
