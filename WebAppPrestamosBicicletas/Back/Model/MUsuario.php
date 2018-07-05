<?php

/**
 * Descripción de MUsuario:
 *
 * Archivo que maneja los metodos hacia la base de datos para el mapeo de los usuarios.
 * 
 * @author  :   Andres Peralta
 * @email   :   gapatmej@gmail.com
 * @date    :   02-jul-2018
 */
namespace Back\Model;

require_once(BASE);

class MUsuario extends \Back\Config\Database\Base{
    
     private $tabla;

    public function __construct() {
        $this->tabla = "usuarios";
        parent::__construct($this->tabla);
    }
    
    public function consultarUsuarioPorCredencial($arrayDatos) {
        $query = "SELECT * FROM $this->tabla "
                . " WHERE user = ? and password =?";
        
        if (!($sentencia = $this->conn->prepare($query))) {
            
            return null;
        }
        
        if (!$sentencia->bind_param("ss", 
                                    $arrayDatos["username"], 
                                    $arrayDatos["password"] 
                                    )) {
            
            return null;
        }
        
        if (!$sentencia->execute()) {
            
            return null;
        }
      
        $respuesta = $sentencia->get_result();
        $row = $respuesta->fetch_assoc();
        return $row;
    }
}
