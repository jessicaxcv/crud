<?php
include_once '../bd/conexion.php';
$objeto = new Conexion();
$conexion = $objeto->Conectar();

$nombre = (isset($_POST['nombre'])) ? $_POST['nombre'] : '';
$ape_paterno = (isset($_POST['ape_paterno'])) ? $_POST['ape_paterno'] : '';
$ape_materno = (isset($_POST['ape_materno'])) ? $_POST['ape_materno'] : '';
$edad = (isset($_POST['edad'])) ? $_POST['edad'] : '';
$calle = (isset($_POST['calle'])) ? $_POST['calle'] : '';
$num_casa = (isset($_POST['num_casa'])) ? $_POST['num_casa'] : '';
$cruzamiento1 = (isset($_POST['cruzamiento1'])) ? $_POST['cruzamiento1'] : '';
$cruzamiento2 = (isset($_POST['cruzamiento2'])) ? $_POST['cruzamiento2'] : '';

$id_colonia = (isset($_POST['id_colonia'])) ? $_POST['id_colonia'] : '';
$clave_maestro = (isset($_POST['clave_maestro'])) ? $_POST['clave_maestro'] : '';


switch($opcion){
    case 1:
        $consulta = "INSERT INTO maestro (clave_maestro, nombre, ape_paterno, ape_materno, edad, calle, num_casa, cruzamiento1, cruzamiento2, id_colonia) VALUES('$clave_maestro','$nombre', '$ape_paterno', '$ape_materno', '$edad', '$calle', '$num_casa', '$crazamiento1', '$cruzamiento2', 'id_colonia') ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();

        $consulta = "SELECT * FROM maestro ORDER BY maestro.nombre ASC";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 2:
        $consulta = "UPDATE maestro SET nombre='$nombre', ape_paterno='$ape_paterno', ape_materno='$ape_materno', edad='$edad', calle='$calle', num_casa='$num_casa', cruzamiento1 = '$cruzamiento1', cruzamiento2 = '$cruzamiento2', id_colonia = '$id_colonia' WHERE clave_maestro='$clave_maestro' ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();

        $consulta = "SELECT * FROM maestro WHERE clave_maestro='$clave_maestro' ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
    case 3:
        $consulta = "DELETE FROM maestro WHERE clave_maestro='$clave_maestro' ";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        break;
    case 4:
        $consulta = "SELECT * FROM maestro";
        $resultado = $conexion->prepare($consulta);
        $resultado->execute();
        $data=$resultado->fetchAll(PDO::FETCH_ASSOC);
        break;
}

print json_encode($data, JSON_UNESCAPED_UNICODE);//envio el array final el formato json a AJAX
$conexion=null;
