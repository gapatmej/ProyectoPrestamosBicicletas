<?php
/**
 * Descripción :
 *
 * Archivo que actua como controlador entre la vista y el Modelo para gestionar el front para el perfil de
 * usuario Administrador
 * 
 * @author  :   Andres Peralta
 * @email   :   gapatmej@gmail.com
 * @date    :   29-jun-2018
 */
require_once UTIL.'UValidaciones.php';

use Back\Util as Utilitarios;

if(!Utilitarios\UValidaciones::verificarSesion()){
    header('Location: '.APP_URL."login_administrador/show");
    exit;
} 


switch ($coincidencia["opcion"]) {
    case "ESTACIONES":
        header('Location: '.APP_URL."estaciones/show"); 
        break;
    
    default:
        include VIEWS . 'VAdministradorUser.php';
        break;
}



