<?php
/**
 * Descripción :
 *
 * Archivo de configuracion que maneja constantes del aplicativo
 * 
 * @author  :   Andres Peralta
 * @email   :   gapatmej@gmail.com
 * @date    :   29-jun-2018
 */

define("DRIVER","mysql");
define("HOST","localhost");
define("USER","root");
define("PASS","root");
define("DATABASE","prestamo_bicicletas");
define("CHARSET","utf8");

/**
 * Directorios físicos del Sistema
 */
define("SEPARADOR","/");
define("PROTOCOLO_HTTP","http:");
define("SERVER_NAME",$_SERVER['SERVER_NAME']);
define("SERVER_PORT",$_SERVER['SERVER_PORT']);
define("APP_NAME","WebAppPrestamosBicicletas");
define("APP_URL", PROTOCOLO_HTTP.SEPARADOR.SEPARADOR.SERVER_NAME.":".SERVER_PORT.SEPARADOR.APP_NAME.SEPARADOR);   
define("APP_ROOT",$_SERVER["DOCUMENT_ROOT"].SEPARADOR);
define("BACK","Back".SEPARADOR);
define("CONFIG",  BACK."Config".SEPARADOR);
define("BASE",  CONFIG."Database".SEPARADOR."Base.php");
define("CONECCTION", CONFIG."Database".SEPARADOR."Conecction.php");
define("CONTROLLER",BACK."Controller".SEPARADOR);
define("ENTITY",BACK."Entity".SEPARADOR);
define("MODEL",BACK."Model".SEPARADOR);
define("UTIL",BACK."Util".SEPARADOR);
define("FRONT", "Front".SEPARADOR);
define("IMAGES", APP_URL.FRONT."Images".SEPARADOR);
define("ICONS", IMAGES."Icons".SEPARADOR);
define("LOGOS", IMAGES."Logos".SEPARADOR);
define("JAVASCRIPT", APP_URL.FRONT."JavaScript".SEPARADOR);
define("BOOTSTRAP_JS", JAVASCRIPT."Bootstrap".SEPARADOR);
define("JQUERY", JAVASCRIPT."Jquery".SEPARADOR);
define("STYLES", APP_URL.FRONT."Styles".SEPARADOR);
define("ANDIA_AGENCY_V2", STYLES."Andia-agency-v2".SEPARADOR);
define("BOOTSTRAP_CSS", STYLES."Bootstrap".SEPARADOR);
define("VIEWS", FRONT."Views".SEPARADOR);


/*
 * Modulos del sistema
 */
define("ENTORNO", VIEWS."Entorno".SEPARADOR);

?>

