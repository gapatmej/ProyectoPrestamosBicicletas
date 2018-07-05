    <!DOCTYPE html>
    <html lang="en">

        <body class="home">

    <?php
    require("Back/Config/Config.php");
    
    session_start();
    
    $url = str_replace(SEPARADOR.strtoupper (APP_NAME).SEPARADOR, "", strtoupper ($_SERVER["REQUEST_URI"]));
    
    $controlador = null;
    
    if (preg_match("/^LOGIN_ADMINISTRADOR\/(?P<opcion>[a-zA-Z]+)$/", $url, $coincidencia) > 0) {
        $controlador = "CLoginAdministrador.php";
    }
    else if (preg_match("/^USER_ADMINISTRADOR\/(?P<opcion>[a-zA-Z]+)$/", $url, $coincidencia) > 0) {
        $controlador = "CAdministradorUser.php";
    }
    else if (preg_match("/^ESTACIONES\/(?P<opcion>[a-zA-Z]+)$/", $url, $coincidencia) > 0) {
        $controlador = "CEstaciones.php";
    }
    else if (preg_match("/^ESTACIONES\/(?P<opcion>[a-zA-Z]+)\?(?P<datos>[a-zA-z0-9=&]+)$/", $url, $coincidencia) > 0) {
        $controlador = "CEstaciones.php";
    }
    else{
        $controlador = "CHome.php";
    }
    
    include ENTORNO . "header.php";
    
    include CONTROLLER.$controlador ;

    include ENTORNO . "footer.php";

    ?>

        </body>
    </html>