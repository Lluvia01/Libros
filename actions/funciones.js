var modal = document.getElementById('id01');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
var modal = document.getElementById('id02');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function ConfirmDemo() {
    var mensaje = confirm("¿Seguro deceas cerrar sesión?");
    if (mensaje) {
      window.location.href="../includes/logout.php";
    }
}

function ConfirmAuto() {
    var mensaje = confirm("¿Seguro deceas agregar este autor?");
    if (mensaje) {
        window.location.href="../actions/agregarAutor.php";
    }
}

function ConfirmEdi() {
    var mensaje = confirm("¿Seguro deceas agregar esta editorial?");
    if (mensaje) {
        window.location.href="../actions/agregarEdi.php";
    }
}

function ConfirmLib() {
    var mensaje = confirm("¿Seguro deceas agregar este libro?");
    if (mensaje) {
        window.location.href="../actions/agregarLib.php";
    }
}

function ConfirmAlu() {
    var mensaje = confirm("¿Seguro deceas agregar este alumno?");
    if (mensaje) {
        window.location.href="../actions/AgregarAlu.php";
    }
}

function Pres() {
    window.location.href='../vistas/libros_pres.php';     
}