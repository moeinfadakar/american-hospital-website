let $ = document
let Doctor =  $.getElementById("Doctor")
let patient = $.getElementById("Patient") 
let Patient__Form = $.getElementById("Patient__Form")
let doctor__form = $.getElementById("doctor__form")
// variables for docPortaland ptients portal
let table__wrapper = $.getElementById("table__wrapper");
let new__treatment__wrapper = $.getElementById("new__treatment__wrapper");
let my__information__wrapper = $.getElementById("my__information__wrapper");
let sev = $.getElementById("sev");
let MySev = $.getElementById("MySev");
let MyInfo = $.getElementById("MyInfo");
// search bar variables
let search__bar = $.getElementById("search__bar");
let click = $.getElementById("click");

function  doctor(){

    patient.classList.remove("btn-danger")
    patient.classList.add("btn-outline-danger")
    Doctor.classList.add("btn-danger")
    Doctor.classList.add("text-white")
    patient.classList.remove("text-white")
    patient.classList.add("text-danger")


doctor__form.style.display = "block"
Patient__Form.style.display = "none"

}
function Patient(){

 Doctor.classList.remove("btn-danger")
    Doctor.classList.add("btn-outline-danger")
    patient.classList.add("btn-danger")
    patient.classList.add("text-white")
    Doctor.classList.remove("text-white")
    Doctor.classList.add("text-danger")



Patient__Form.style.display = "block"
doctor__form.style.display = "none"

}


 // doc portal functions


 new__treatment__wrapper.style.display = "none"
 my__information__wrapper.style.display = "none"

function MyPatient(){

    sev.style.backgroundColor = "#013a5d"
    sev.style.color = "white"

    MyInfo.style.backgroundColor = "white"
    MyInfo.style.color = "black"

    MySev.style.backgroundColor = "white"
    MySev.style.color = "black"

table__wrapper.style.display = "block"
new__treatment__wrapper.style.display = "none"
my__information__wrapper.style.display = "none"

}
function MyServe(){

    MySev.style.backgroundColor = "#013a5d"
    MySev.style.color = "white"

    MyInfo.style.backgroundColor = "white"
    MyInfo.style.color = "black"

    sev.style.backgroundColor = "white"
    sev.style.color = "black"

    table__wrapper.style.display = "none"
    new__treatment__wrapper.style.display = "block"
    my__information__wrapper.style.display = "none"

} 
function myInformation(){

MyInfo.style.backgroundColor = "#013a5d"
MyInfo.style.color = "white"

MySev.style.backgroundColor = "white"
MySev.style.color = "black"

sev.style.backgroundColor = "white"
sev.style.color = "black"

    table__wrapper.style.display = "none"
    new__treatment__wrapper.style.display = "none"
    my__information__wrapper.style.display = "block"

}

click.addEventListener( 'click'  , function(){


alert("check")

})


let date = $.getElementById("date");
let time = $.getElementById("time");

function redBorder(){
    date.style.borderColor = "red";
    time.style.borderColor  ="red"
}

