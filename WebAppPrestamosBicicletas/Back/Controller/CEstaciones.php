<?php
/**
 * Descripción :
 *
 * Archivo que actua como controlador entre la Vista y el Modelo para gestionar el CRUD a las Estaciones en el
 * modulo Gestion de Estaciones para el usuario Administrador
 * 
 * @author  :   Andres Peralta
 * @email   :   gapatmej@gmail.com
 * @date    :   29-jun-2018
 */
require_once MODEL.'MEstacion.php';
require_once UTIL.'UValidaciones.php';
require_once ENTITY.'Estacion.php';

use Back\Model as Modelos;
use Back\Util as Utilitarios;
use Back\Entity as Entidades;


if(!Utilitarios\UValidaciones::verificarSesion()){
    header('Location: '.APP_URL."login_administrador/show");
    exit;
} 

$objEstacion = new Modelos\MEstacion();
$estacion = new Entidades\Estacion();
$botonGuardar = "Guardar";

switch ($coincidencia["opcion"]) {
    case "EDITAR":
        $datos = Utilitarios\UValidaciones::generarArrayPost($coincidencia["datos"]);
        mapearEstacion($objEstacion->obtenerPorID("i","id_estacion",$datos["ID"]));
        $botonGuardar = "Actualizar";
        break;
    case "ELIMINAR":
        $datos = Utilitarios\UValidaciones::generarArrayPost($coincidencia["datos"]);
        $objEstacion->eliminarPorId("i", "id_estacion", $datos["ID"]);
    case "INSERTAR":
        $objEstacion->insertarEstacion($_POST);
        break;
    case "ACTUALIZAR":
        $resultado = $objEstacion->actualizarEstacion($_POST);
        break;
    
    default:
        break;
}

$rsEstaciones = $objEstacion->obtenerTodo();
generarDetalle($rsEstaciones);


function generarDetalle(&$rsEstaciones){
    
     foreach ($rsEstaciones as &$estacion){
        if($estacion["servicio"] == "PR"){
            $estacion["servicio"] = "PRESTAMO";
        }
        elseif ( $estacion["servicio"] == "TO"){
            $estacion["servicio"] = "TOUR";
        }
    }
}

function mapearEstacion($row){
    global $estacion;
    $estacion->setId($row[0]["id_estacion"]);
    $estacion->setNombre($row[0]["nombre"]);
    $estacion->setLocalizacion($row[0]["localizacion"]);
    $estacion->setCapacidad($row[0]["capacidad"]);
    $estacion->setNumeroUnidades($row[0]["numero_unidades"]);
    $estacion->setServicio($row[0]["servicio"]);
}

include VIEWS . 'VAdministrarEstaciones.php';
    
