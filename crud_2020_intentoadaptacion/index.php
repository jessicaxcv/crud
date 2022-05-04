<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />
    <title>DataTables</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <!-- CSS personalizado -->
    <link rel="stylesheet" href="main.css">


    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="assets/datatables/datatables.min.css"/>
    <!--datables estilo bootstrap 4 CSS-->
    <link rel="stylesheet"  type="text/css" href="assets/datatables/DataTables-1.10.18/css/dataTables.bootstrap4.min.css">

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  </head>

  <body>
     <header>
     <h3 class='text-center'></h3>
     </header>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <button id="btnNuevo" type="button" class="btn btn-info" data-toggle="modal"><i class="material-icons">library_add</i></button>
            </div>
        </div>
    </div>
    <br>

    <div class="container caja">
        <div class="row">
            <div class="col-lg-12">
            <div class="table-responsive">
                <table id="tablaUsuarios" class="table table-striped table-bordered table-condensed" style="width:100%" >
                    <thead class="text-center">
                        <tr>
                            <th>Clave maestro</th>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Apellido Materno</th>
                            <th>edad</th>
                            <th>Calle</th>
                            <th>Numero de casa</th>
                            <th>Cruzamientos</th>
                            <th>Colonia</th>
                            <th>CP</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>

<!--Modal para CRUD-->
<div class="modal fade" id="modalCRUD" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
            </div>
        <form id="formUsuarios">
            <div class="modal-body">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                  <label for="" class="col-form-label">Clave del maestro</label>
                  <input type="text" class="form-control" id="clave_maestro">
                  </div>
                </div>
              </div>
                <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">Apellido Paterno</label>
                    <input type="text" class="form-control" id="apep">
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">Apellido Materno</label>
                    <input type="text" class="form-control" id="apem">
                    </div>
                    </div>
                    <div class="col-lg-6">
                    <div class="form-group">
                    <label for="" class="col-form-label">Edad</label>
                    <input type="number" class="form-control" id="edad">
                    </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-9">
                        <div class="form-group">
                        <label for="" class="col-form-label">Calle</label>
                        <input type="text" class="form-control" id="calle">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                        <label for="" class="col-form-label">Numero de casa</label>
                        <input type="number" class="form-control" id="numcasa">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="form-group">
                        <label for="" class="col-form-label">Cruzamiento 1</label>
                        <input type="text" class="form-control" id="cruz1">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                        <label for="" class="col-form-label">Cruzamiento 2</label>
                        <input type="text" class="form-control" id="cruz2">
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                    <label for="" class="col-form-label">Colonia</label>
                    <input type="text" class="form-control" id="colonia">
                    </div>
                  </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancelar</button>
                <button type="submit" id="btnGuardar" class="btn btn-dark">Guardar</button>
            </div>
        </form>
        </div>
    </div>
</div>

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="assets/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/popper/popper.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

    <!-- datatables JS -->
    <script type="text/javascript" src="assets/datatables/datatables.min.js"></script>

    <script type="text/javascript" src="main.js"></script>


  </body>
</html>
