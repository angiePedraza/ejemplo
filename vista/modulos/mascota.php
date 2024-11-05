<script src="vista/js/cl_mascotas.js"></script>
<div class="container" style="text-align: center;">

    <br><br>

    <div class="row">


        <h1>Registro de mascotas🐶</h1>

        <h4>Las mascotas registralas aqui..</h4>

    </div>
    <br><br>

    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalMascota">
        Agregar Mascota
    </button>



    <div class="modal fade" id="modalMascota" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Agregar Mascota</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <form id="formMascota" class="row g-3 needs-validation" novalidate>
                        <div class="col-md-12">
                            <label for="txtNombre" class="form-label">Nombre</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="txtNombre"
                                    aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    Por favor escribe el nombre del animal.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="txtRaza" class="form-label">Raza</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="txtRaza"
                                    aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    Por favor escribe la raza del animal.
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <label for="txtEdad" class="form-label">Edad</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="txtEdad"
                                    aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    Por favor escribe la edad del animal.
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="txtDocumento" class="form-label">Numero de documento del dueño</label>
                            <div class="input-group has-validation">
                                <input type="text" class="form-control" id="txtDocumento"
                                    aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    Por favor escribe el documento del dueño.

                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <label for="imgMascota" class="form-label">Imagen de la mascota</label>
                            <div class="input-group has-validation">
                                <input type="file" class="form-control" id="imgMascota"
                                    aria-describedby="inputGroupPrepend" required>
                                <div class="invalid-feedback">
                                    Por favor ingresa una imagen.
                                </div>
                            </div>
                        </div>

                        <div class="col-12">
                            <button class="btn btn-primary" type="submit">Guardar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>

    <div class="row mt-4">
        <div class="col-md-12" >
            <div
                class="table-responsive"
            >
                <table id="tblMascota" style="width: 100%;" class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Raza</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Propietario</th>
                            <th scope="col">Imagen</th>
                            <th scope="col">null</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="" >
                            <td scope="row">R1C1</td>
                            <td>R1C2</td>
                            <td>R1C3</td>
                            <td>R1C4</td>
                            <td>R1C5</td>
                        </tr>

                    </tbody>
                </table>
            </div>
            
        </div>
    </div>

</div>



<script src="vista/js/mascotas.js"></script>

