<?php

namespace Back\Config\Database;

/**
 * Descripción de Base:
 *
 * Clase que mantiene metodos genericos hacia la base de datos
 * 
 * @author  :   Andres Peralta
 * @email   :   gapatmej@gmail.com
 * @date    :   29-jun-2018
 */
require_once CONECCTION;

class Base extends Conecction {

    private $tabla;
    public $conn;

    public function __construct($tabla) {
        $this->tabla = (string) $tabla;
        $this->conn = Conecction::conectar();
    }

    public function getConn() {
        return $this->conn;
    }

    public function obtenerTodo() {
        $rows = array();
        $query = "SELECT * FROM $this->tabla ";

        if ($result = $this->conn->query($query)) {
            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                $rows[] = $row;
            }
            return $rows;
        }
        return null;
    }
    
    public function obtenerPorID($tipoDato, $idCampo, $id) {
        $rows = array();
        
        $query = "SELECT * FROM $this->tabla "
                . " WHERE $idCampo = ? ";

        if (!($sentencia = $this->conn->prepare($query))) {

            return null;
        }

        if (!$sentencia->bind_param("$tipoDato", $id)) {

            return null;
        }

        if (!$sentencia->execute()) {

            return null;
        }

        $respuesta = $sentencia->get_result();
                
        while ($row = $respuesta->fetch_array(MYSQLI_ASSOC)) {
               $rows[] = $row;
            }
        return $rows;
    }

     public function eliminarPorId($tipoDato, $column, $id) {
        
        $query = "DELETE FROM $this->tabla "
                . " WHERE $column = ?";
        
        if (!($sentencia = $this->conn->prepare($query))) {
            return false;
        }
        
        if (!$sentencia->bind_param("$tipoDato", $id)) {
            return false;
        }
        
        if (!$sentencia->execute()) {
            return false;
        }

        return true;
    }
    
}
