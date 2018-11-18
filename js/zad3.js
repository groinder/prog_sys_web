var bckg = document.getElementById("bckg");
bckg.addEventListener("change", function() {
    document.body.style.backgroundColor=bckg.value;
})

var text = document.getElementById("text");
text.addEventListener("change", function() {
    document.body.style.color=text.value;
})

var font = document.getElementById("font");
font.addEventListener("change", function() {
    document.body.style.fontFamily=font.value;
})

function printMouseCord(event){
    var cords = event.clientX + "," + event.clientY + " " + event.screenX + "," + event.screenY;
    document.getElementById("mouse").innerHTML= cords;

}

function printKey(event){
    var keys = [];

    if(event.altKey){
        keys.push("ALT")
    }
    if(event.ctrlKey){
        keys.push("CTRL")
    }
    if(event.shiftKey){
        keys.push("SHIFT")
    }
    if(event.keyCode){
        keys.push(event.keyCode)
    }
    var keysStr = keys.join(" + ");
    document.getElementById("keys").innerHTML=keysStr;
}
var container = document.getElementById("information");
var area = document.body.getElementsByTagName("textarea")[0];
area.addEventListener("mousedown", function(){
    container.innerHTML="Wciśnięte";
})
area.addEventListener("mouseover", function(){
    container.innerHTML="Nad";
})
area.addEventListener("mouseout", function(){
    container.innerHTML="Poza";
})

document.body.addEventListener("keydown", printKey);
document.body.addEventListener("keyup", printKey);
document.body.addEventListener("mousemove", printMouseCord);


function resetConfirm(event){
    var confirmed = window.confirm("Czy na pewno?");

    if(!confirmed){
        event.preventDefault();
    }
}

document.forms[0].addEventListener("reset", resetConfirm);
document.forms[0].addEventListener("submit", resetConfirm);
