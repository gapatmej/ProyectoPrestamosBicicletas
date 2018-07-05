<?php
/**
 * Descripción :
 *
 * Archivo que maneja los metodos hacia la base de datos para el mapeo de las estaciones.
 * 
 * @author  :   Andres Peralta
 * @email   :   gapatmej@gmail.com
 * @date    :   29-jun-2018
 */
namespace Back\Model;
require_once(BASE);

class MEstacion extends \Back\Config\Database\Base{
    private $tabla;
    
    public function __construct(){
        $this->tabla = "estaciones";
        parent::__construct($this->tabla );
    }
    
    public function insertarEstacion($arrayDatos){
        $query = "INSERT INTO $this->tabla (nombre, localizacion , capacidad, numero_unidades, servicio) "
                . "values (?,?,?,?,?)";

        if (!($sentencia = $this->conn->prepare($query))) {
            $arrRespuesta["codError"] = $this->conn->errno;
            $arrRespuesta["msjError"] = $this->conn->error;
            return $arrRespuesta;
        }
        
        if (!$sentencia->bind_param("ssiis", 
                                    $arrayDatos["txtNombreEstacion"], 
                                    $arrayDatos["txtLocalizacionEstacion"], 
                                    $arrayDatos["txtCapacidadEstacion"],
                                    $arrayDatos["txtNumeroBicicletas"],
                                    $arrayDatos["dropServicioEstacion"]
                                    )) {
            $arrRespuesta["codError"] = $this->conn->errno;
            $arrRespuesta["msjError"] = $this->conn->error;
            return $arrRespuesta;
        }
        
        if (!$sentencia->execute()) {
            $arrRespuesta["codError"] = $this->conn->errno;
            $arrRespuesta["msjError"] = $this->conn->error;
            return $arrRespuesta;
        }
        $arrRespuesta["codError"] = 0;
        $arrRespuesta["codError"] = "OK";
        
        return $arrRespuesta;
    }
    
    public function actualizarEstacion($arrayDatos){
        $query = "UPDATE $this->tabla SET nombre = ?, localizacion = ?, capacidad = ?, numero_unidades =?, servicio =? "
                . " WHERE id_estacion = ?";

        if (!($sentencia = $this->conn->prepare($query))) {
            $arrRespuesta["codError"] = $this->conn->errno;
            $arrRespuesta["msjError"] = $this->conn->error;
            return $arrRespuesta;
        }

        if (!$sentencia->bind_param("ssiisi", 
                                    $arrayDatos["txtNombreEstacion"], 
                                    $arrayDatos["txtLocalizacionEstacion"], 
                                    $arrayDatos["txtCapacidadEstacion"],
                                    $arrayDatos["txtNumeroBicicletas"],
                                    $arrayDatos["dropServicioEstacion"],
                                    $arrayDatos["hddIdEstacion"]
                                    )) {
            $arrRespuesta["codError"] = $this->conn->errno;
            $arrRespuesta["msjError"] = $this->conn->error;
            return $arrRespuesta;
        }
        
        if (!$sentencia->execute()) {
            $arrRespuesta["codError"] = $this->conn->errno;
            $arrRespuesta["msjError"] = $this->conn->error;
            return $arrRespuesta;
        }
        
        $arrRespuesta["codError"] = 0;
        $arrRespuesta["codError"] = "OK";
        
        return $arrRespuesta;
    }
            
}
