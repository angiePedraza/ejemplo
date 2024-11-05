(function () {
    'use strict';

    // Selecciona todos los formularios a los que queremos aplicar estilos de validación personalizados de Bootstrap
    var formularios = document.querySelectorAll('#formMascota');

    // Convierte NodeList a Array y recorre cada uno
    Array.from(formularios).forEach(function (formulario) {
        formulario.addEventListener('submit', function (evento) {
            evento.preventDefault(); // Evita que el formulario se envíe de manera predeterminada
            if (!formulario.checkValidity()) {
                evento.stopPropagation(); // Detiene la propagación del evento si el formulario no es válido
                formulario.classList.add('was-validated'); // Añade la clase para aplicar los estilos de validación de Bootstrap
            } else {
                // Obtiene los valores de los campos del formulario
                let nombre = document.getElementById("txtNombre").value;
                let raza = document.getElementById("txtRaza").value;
                let edad = document.getElementById("txtEdad").value;
                let documentoPro = document.getElementById("txtDocumento").value;
                let imagen = document.getElementById("imgMascota").files[0]; // Obtiene el archivo seleccionado



                // Crea un objeto con los datos del formulario
                let datos = {
                    "registrarMascota": "ok",
                    "nombre": nombre,
                    "raza": raza,
                    "edad": edad,
                    "documentoPro": documentoPro,
                    "imagen": imagen
                };

                let usuarioObj = new mascota(datos);
                usuarioObj.registrarMascota();
            }
        }, false);
    });
})();


listarMascotas();

function listarMascotas() {
    let objData = { "listarMascotas": "ok", "idTabla": "#tblMascota" };
    let objMascota = new mascota(objData);
    objMascota.listarMascotas();
}