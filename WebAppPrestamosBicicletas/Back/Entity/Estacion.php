<?php

/**
 * Descripción de Estacion:
 *
 * Entidad que sirve para mapear la tabla "estaciones" de la base de datos
 * 
 * @author  :   Andres Peralta
 * @email   :   gapatmej@gmail.com
 * @date    :   02-jul-2018
 */
namespace Back\Entity;

class Estacion {

    private $id;
    private $nombre;
    private $localizacion;
    private $capacidad;
    private $numeroUnidades;
    private $servicio;

    public function getId() {
        return $this->id;
    }
    
    public function setId($value) {
        $this->id = $value; 
    }
    
    public function getNombre() {
        return $this->nombre;
    }
    
    public function setNombre($value) {
        $this->nombre = $value; 
    }
    
    public function getLocalizacion() {
        return $this->localizacion;
    }
    
    public function setLocalizacion($value) {
        $this->localizacion = $value; 
    }
    
    public function getCapacidad() {
        return $this->capacidad;
    }
    
    public function setCapacidad($value) {
        $this->capacidad = $value; 
    }
    
    public function getNumeroUnidades() {
        return $this->numeroUnidades;
    }
    
    public function setNumeroUnidades($value) {
        $this->numeroUnidades = $value; 
    }
    
    public function getServicio() {
        return $this->servicio;
    }
    
    public function setServicio($value) {
        $this->servicio = $value; 
    }

}
