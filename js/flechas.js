document.onkeydown = checkKey;

function kDivisaConv(e) {

    e = e || window.event;

    if (e.keyCode == '38') {
        //arriba
    }
    else if (e.keyCode == '40') {
        // abajo
    }
    else if (e.keyCode == '37') {
       // izquierda
    }
    else if (e.keyCode == '39') {
       // derecha
       document.getElementById("tipoCambioConv").focus();
    }

}