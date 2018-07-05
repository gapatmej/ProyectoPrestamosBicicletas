<?php
/**
 * Descripción :
 *
 * Archivo que actua como controlador entre la Vista y el Modelo para gestionar el login para los
 * usuarios Administradores
 * 
 * @author  :   Andres Peralta
 * @email   :   gapatmej@gmail.com
 * @date    :   29-jun-2018
 */
   require_once(MODEL."MUsuario.php");
   require_once UTIL.'UValidaciones.php';
   
   use Back\Model as Modelos;
   use Back\Util as Utilitarios;

    if(Utilitarios\UValidaciones::verificarSesion()){
        header('Location: '.APP_URL."user_administrador/show");
        exit;
    } 

   $scriptMensaje = null;
   switch ($coincidencia["opcion"]){
        case "INGRESAR":
            $respuesta = verificarCredenciales($_POST);
            $titulo = "Ingreso al sistema";
            if($respuesta != 0 && $respuesta != null){
                $_SESSION["user"] = $respuesta["user"];
                $_SESSION["nombre"] = $respuesta["nombre"];
                $_SESSION["apellido"] = $respuesta["apellido"];
                header('Location: '.APP_URL."user_administrador/show");
                exit;
            }
            else{
                $mensaje = "!Sus credenciales no son válidas!";
                $scriptMensaje = "<script>"
                . "$('#idTitulo').text('".$titulo."');"
                . "$('#idMensaje').text('".$mensaje."');"
                . "$('#myModal').modal('show');</script>";
            }
            
            break;
        case "CLOSE":
            Utilitarios::cerrarSesion();
            break;
        default:
            break;
    }

   function verificarCredenciales($arrCedenciales){ 
        $objUsuario = new Modelos\MUsuario();
        return $objUsuario->ConsultarUsuarioPorCredencial($arrCedenciales); 
    } 

    include VIEWS.'VLoginAdministrador.php';
    
    echo ($scriptMensaje != null && $scriptMensaje != "")?$scriptMensaje:"";
?>