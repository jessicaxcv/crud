$(document).ready(function() {
var clave_maestro, opcion;
opcion = 4;

tablaMaestros = $('#tablaMaestros').DataTable({
    "ajax":{
        "url": "bd/crud.php",
        "method": 'POST', //usamos el metodo POST
        "data":{opcion:opcion}, //enviamos opcion 4 para que haga un SELECT
        "dataSrc":""
    },
    "columns":[
        {"data": "clave_maestro"},
        {"data": "nombre"},
        {"data": "ape_paterno"},
        {"data": "ape_materno"},
        {"data": "edad"},
        {"data": "calle"},
        {"data": "num_casa"},
        {"data": "cruzamiento1"},
        {"data": "cruzamiento2"},
        {"data": "id_colonia"},
        {"defaultContent": "<div class='text-center'><div class='btn-group'><button class='btn btn-primary btn-sm btnEditar'><i class='material-icons'>edit</i></button><button class='btn btn-danger btn-sm btnBorrar'><i class='material-icons'>delete</i></button></div></div>"}

/*coma para finalizar*/
    ]
});

var fila; //captura la fila, para editar o eliminar
//submit para el Alta y Actualización
$('#formMaestros').submit(function(e){
    e.preventDefault(); //evita el comportambiento normal del submit, es decir, recarga total de la página
    nombre = $.trim($('#nombre').val());
    ape_paterno = $.trim($('#ape_paterno').val());
    ape_materno = $.trim($('#ape_materno').val());
    edad = $.trim($('#edad').val());
    calle = $.trim($('#calle').val());
    num_casa = $.trim($('#num_casa').val());
    cruzamiento1 = $.trim($('#cruzamiento1').val());
    cruzamiento2 = $.trim($('#cruzamiento2').val());
    id_colonia = $.trim($('#id_colonia').val());
        $.ajax({
          url: "bd/crud.php",
          type: "POST",
          datatype:"json",
          data:  {clave_maestro:clave_maestro, nombre:nombre, ape_paterno:ape_paterno, ape_materno:ape_materno, edad:edad, calle:calle , num_casa:num_casa, cruzamiento1:cruzamiento1, cruzamiento2:cruzamiento2, id_colonia:id_colonia},
          success: function(data) {
            tablaMaestros.ajax.reload(null, false);
           }
        });
    $('#modalCRUD').modal('hide');
});



//para limpiar los campos antes de dar de Alta una Persona
$("#btnNuevo").click(function(){
    opcion = 1; //alta
    clave_maestro=null;
    $("#formMaestros").trigger("reset");
    $(".modal-header").css( "background-color", "#17a2b8");
    $(".modal-header").css( "color", "white" );
    $(".modal-title").text("Alta de Usuario");
    $('#modalCRUD').modal('show');
});

//Editar
$(document).on("click", ".btnEditar", function(){
    opcion = 2;//editar
    fila = $(this).closest("tr");
    clave_maestro = parseInt(fila.find('td:eq(0)').text()); //capturo el ID
    nombre = fila.find('td:eq(1)').text();
    ape_paterno = fila.find('td:eq(2)').text();
    ape_materno = fila.find('td:eq(3)').text();
    edad = fila.find('td:eq(4)').text();
    calle = fila.find('td:eq(5)').text();
    num_casa = fila.find('td:eq(6)').text();
    cruzamiento1 = fila.find('td:eq(7)').text();
    cruzamiento2 = fila.find('td:eq(8)').text();
    id_colonia = fila.find('td:eq(9)').text();
    
    $("#nombre").val(nombre);
    $("#ape_paterno").val(ape_paterno);
    $("#ape_materno").val(ape_materno);
    $("#edad").val(edad);
    $("#calle").val(calle);
    $("#num_casa").val(num_casa);
    $("#cruzamiento1").val(cruz1);
    $("#cruzamiento2").val(cruz2);
    $("#id_colonia").val(colonia);
    $(".modal-header").css("background-color", "#007bff");
    $(".modal-header").css("color", "white" );
    $(".modal-title").text("Editar Usuario");
    $('#modalCRUD').modal('show');
});

//Borrar
$(document).on("click", ".btnBorrar", function(){
    fila = $(this);
    clave_maestro = parseInt($(this).closest('tr').find('td:eq(0)').text()) ;
    opcion = 3; //eliminar
    var respuesta = confirm("¿Está seguro de borrar el registro "+clave_maestro+"?");
    if (respuesta) {
        $.ajax({
          url: "bd/crud.php",
          type: "POST",
          datatype:"json",
          data:  {opcion:opcion, clave_maestro:clave_maestro},
          success: function() {
              tablaMaestros.row(fila.parents('tr')).remove().draw();
           }
        });
    }
 });

});
