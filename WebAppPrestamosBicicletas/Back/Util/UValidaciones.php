<?php

/**
 * Descripción de UValidaciones:
 *
 * Clase que maneja métodos estáticos genéricos para toda la aplicación 
 * 
 * @author  :   Andres Peralta
 * @email   :   gapatmej@gmail.com
 * @date    :   02-jul-2018
 */
namespace Back\Util;

class UValidaciones {

    public static function verificarSesion() {
        if (array_key_exists("user", $_SESSION)) {
            if ($_SESSION["user"] != null) {
                return true;
            }
        }
        return false;
    }

    public static function generarArrayPost($cadenaPost) {

        $arrayDatos = explode("&", $cadenaPost);
        foreach ($arrayDatos as $dato) {
            $claveValor = explode("=", $dato);
            $diccionario[$claveValor[0]] = $claveValor[1];
        }
        return $diccionario;
    }

}
