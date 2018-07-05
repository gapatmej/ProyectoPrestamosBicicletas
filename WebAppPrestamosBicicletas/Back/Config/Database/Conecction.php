<?php

namespace Back\Config\Database;

use Mysqli;

/**
 * Descripción de Conecction:
 *
 * Clase que maneja la conexion hacia la base de datos MYSQL
 * 
 * @author  :   Andres Peralta
 * @email   :   gapatmej@gmail.com
 * @date    :   29-jun-2018
 */
class Conecction {
    
    public static function conectar(){
         
        try{
            mysqli_report(MYSQLI_REPORT_STRICT);
            
            if(DRIVER =="mysql" || DRIVER ==null){
                $con=new Mysqli(HOST, USER, PASS, DATABASE);
                $con->query("SET NAMES '".CHARSET."'");
            }
        
            return $con;
            
        } catch (Exception $e) {
            die("Error". $e->getMessage());
            echo 'Excepción conn BDD line : ',  $e->getLine(), "\n";
            return null;
        }
    }
}
