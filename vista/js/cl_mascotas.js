class mascota{
    constructor(objData) {

        this._objUsuario = objData;
    }


    registrarMascota() {

        let objDatosUsuario = new FormData();
        objDatosUsuario.append("registrarMascota", this._objUsuario.registrarMascota);
        objDatosUsuario.append("nombre", this._objUsuario.nombre);
        objDatosUsuario.append("raza", this._objUsuario.raza);
        objDatosUsuario.append("edad", this._objUsuario.edad);
        objDatosUsuario.append("documentoPro", this._objUsuario.documentoPro);
        objDatosUsuario.append("imagen", this._objUsuario.imagen);



        fetch("controlador/mascotaCtr.php", {
            method: 'POST',
            body: objDatosUsuario

        })

            .then(response => response.json()).catch(error => {
                console.log(error);
            })

            .then(response => {
                alert(response.rta)
                $("#modalMascota").modal("hide");
                let objData = { "listarMascotas": "ok", "idTabla": "#tblMascota" };
                let objMascota = new mascota(objData);
                objMascota.listarMascotas();
            

            })

    }

    editarMascota() {
    }

    eliminarMascota() {
    }

    listarMascotas() {


        let objData = new FormData();
        objData.append("listarMascotas", this._objUsuario.listarMascotas);

        fetch("controlador/mascotaCtr.php", {
            method: 'POST',
            body: objData

        })
            .then(response => response.json()).catch(error => {
                console.log(error);
            })
            .then(response => {

                console.log(response);

                let dataSet = [];


                response["listarMascotas"].forEach(item => {

                    var objBotones = '';
                    var imagen = '<img src="' + item.imagen + '" width="80" height="80" >';


                    dataSet.push([item.nombre, item.raza, item.edad, item.documentoProp, imagen , objBotones]);

                });

                $(this._objUsuario.idTabla).DataTable({

                    buttons: [
                        {
                            extend: "colvis",
                            text: "Columnas Visibles",
        
                        },
                        "excel",
                        {
                            extend: "print",
                            text: "imprimir"
                        },
        
                    ],
                    dom: "Bfrtip",
                    destroy: true,
                    data: dataSet,
                    responsive: true
                });

            });

    }

    cargarMascota() {
    }
}