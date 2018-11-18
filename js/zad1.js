function delete_input() {

    var form = document.forms.item(0);
    form.removeChild(form.childNodes[0]);

}

function createInp(value){
    var container = document.createElement("div");
    var newItem = document.createElement("input");
    newItem.value=value;
    container.appendChild(newItem);
    return container;
}

function replace_input(){


    var form = document.forms.item(0);
    form.replaceChild(createInp("Jestem tu nowy"), form.childNodes[4]);

}

function create_input(){


    var form = document.forms.item(0);
    form.insertBefore(createInp("Txt"), form.childNodes[0]);

}
function create_button() {
    var button = document.createElement("button");
    var b_txt = document.createTextNode("Click");
    button.appendChild(b_txt);
    document.getElementById("buttons").appendChild(button);
}


window.addEventListener("submit", thanks, false);
window.addEventListener("load", variables, false);
window.addEventListener("load", showDay, false);
showDay();

function variables() {
    var zmienne = window.prompt("Wprowadź losowy ciąg znaków")
    document.getElementById("int").innerHTML = "Zmienna typu int: " + parseInt(zmienne);
    document.getElementById("float").innerHTML = "Zmienna typu float: " + parseFloat(zmienne);
}

function thanks() {
    window.alert("Dziękujemy za wysłanie swoich danych");
}


function showDay(){
    var day;
    switch (new Date().getDay()) {
        case 0:
            day = "niedziela";
            break;
        case 1:
            day = "poniedziałek";
            break;
        case 2:
            day = "wtorek";
            break;
        case 3:
            day = "sroda";
            break;
        case 4:
            day = "czwartek";
            break;
        case 5:
            day = "piątek";
            break;
        case 6:
            day = "sobota";
    }
    document.getElementById("nagl").innerHTML = "Dej mie te dane człowieku, bo jest dzisiaj " + day;
}

