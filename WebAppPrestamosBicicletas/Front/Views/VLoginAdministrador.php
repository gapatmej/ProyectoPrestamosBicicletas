 <!--
 * Descripción:
 *
 * Vista que contiene el formulario para loguearse en la aplicacion.
 * 
 * @author  :   Andres Peralta
 * @email   :   gapatmej@gmail.com
 * @date    :   29-jun-2018
 */
 -->
 <link rel="stylesheet" href="<?php echo STYLES . "styleLogin.css" ?>">

<div class="bodyLoginAdmin" >
    <div class="container" >
        <section id="content">
            <form action="<?php echo APP_URL ?>login_administrador/ingresar" method="post">
                <h1>Administradores</h1>
                <div>
                    <input type="text" placeholder="Usuario" required="" name="username" id="username" />
                </div>
                <div>
                    <input type="password" placeholder="Clave" name="password" required="" id="password" />
                </div>
                <div>
                    <input type="submit" value="Ingresar" />
                    <a href="#">Olvidaste tu clave?</a>
                    <a href="#">Registrate</a>
                </div>
            </form>
        </section>
    </div> 
</div>

<?php include ENTORNO . 'modalMensaje.php'; ?>
