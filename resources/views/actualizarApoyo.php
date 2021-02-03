<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Registro Apoyo</title>
</head>
<body>

        <!-- COMENZAMOS CON EL CODIGO DEL FORMULARIO APOYO -->

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                    <div class="card-header" style="font-size:30px;">Modulo De Registro</div>

                        <div class="card-body">
                        <br>

                        <form action="/actualizar/<?php echo($apoyo->id_apoyo); ?>" method="post">

                            <h1 style="font-size:25px;">Registrar Apoyo</h1>
                                <div style="border:2px solid #17a2b8; padding: 5px; border-radius: 0.5em;">

                                <!-- FECHA DEL APOYO AH REGISTRAR "Fecha_Apoyo" -->
                                <div class="form-group row">
                                    <label for="Fecha_Apoyo" class="col-md-4 col-form-label text-md-right">Fecha:</label>
                                    <div class="col-md-6">
                                        <input  type="date"
                                                name="Fecha_Apoyo"
                                                id="fecha_apoyo"
                                                class="form-control"
                                                autocomplete="off"
                                                value="<?php echo($apoyo->fecha_apoyo); ?>"
                                                required>
                                    </div>
                                </div>

                                <!-- UBIICACION -->
                                <div class="form-group row">
                                    <label for="Ubicacion" class="col-md-4 col-form-label text-md-right">Ubicación:</label>
                                    <div class="col-md-6">
                                        <input id="Ubicacion"
                                                type="text"
                                                name="Ubicacion"
                                                class="form-control"
                                                autocomplete="off"
                                                value="<?php echo($apoyo->ubicacion); ?>"
                                                required>
                                    </div>
                                </div>

                                <!-- OSERVACIONES -->
                                <div class="form-group row">
                                    <label for="Observaciones" class="col-md-4 col-form-label text-md-right">Observaciones:</label>

                                    <div class="col-md-6">
                                        <input type="text"
                                                id="observaciones"
                                                name="Observaciones"
                                                class="form-control"
                                                value="<?php echo($apoyo->observaciones); ?>"
                                                autocomplete="off"
                                                required>
                                    </div>
                                </div>

                            </div>

                                <!-- ENVIAR FORMULARIO-->
                                <div class="form-group row justify-content-center">
                                    <input class="btn btn-danger" type="submit" value="Registrar Apoyo">
                                </div>

                        </form>

                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    <br>
    <br>
    <br>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
</body>
</html>
