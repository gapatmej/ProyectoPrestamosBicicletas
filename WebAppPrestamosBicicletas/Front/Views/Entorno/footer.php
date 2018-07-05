 <?php
 /* Descripción:
 *
 * Vista que contiene los elementos html para el footer del sitio web
 * 
 * @author  :   Andres Peralta
 * @email   :   gapatmej@gmail.com
 * @date    :   29-jun-2018
 */
 ?>
<footer>
            <div class="container" >
                <div class="row" style='background-image:url(<?php echo IMAGES . "bg_footer.png" ?>); background-size: 100% 100%;'>
                    <div class="col-sm-4 footer-box wow fadeInDown">
                        <h4>Acerca de Nosotros</h4>
                        <div class="footer-box-text">
	                        <p>
	                        	BiciQuito pretende fomentar en la ciudadanía un modo de transporte cotidiano no motorizado para viajes cortos mediante el desarrollo, implementación y gestión del servicio de bicicletas de carácter público.
	                        </p>
                        </div>
                    </div>
                    <div class="col-sm-4 footer-box wow fadeInDown">
                        <h4>Contactanos via Email</h4>
                        <div class="footer-box-text footer-box-text-subscribe">
                        	<p>Ingresa tu Email y nosotros te contactamos...</p>
                        	<form role="form" method="post">
		                    	<div class="form-group">
		                    		<label class="sr-only" for="subscribe-email">Direccion Email</label>
		                        	<input type="text" name="email" placeholder="Email..." class="subscribe-email" id="subscribe-email">
		                        </div>
		                        <button type="submit" class="btn">Enviar</button>
		                    </form>
		                    <p class="success-message"></p>
		                    <p class="error-message"></p>
                        </div>
                    </div>
                    <div class="col-sm-4 footer-box wow fadeInDown">
                        <h4>Contact Us</h4>
                        <div class="footer-box-text footer-box-text-contact">
	                        <p><i class="fa fa-map-marker"></i> Dirección: Agencia Metropolitana de Tránsito Oficina matriz, Av. Amazonas N33-299 e Inglaterra, Edif. Valderrama.</p>
	                        <p><i class="fa fa-phone"></i> Teléfono: (593-2) 3952 300 </p>
	                        <p><i class="fa fa-user"></i> Ciudad: Quito - Ecuador</p>
	                        <p><i class="fa fa-envelope"></i> Email: <a href="">serviciosciudadanos@quito.gob.ec</a></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                	<div class="col-sm-12 wow fadeIn">
                		<div class="footer-border"></div>
                	</div>
                </div>
                <div class="row">
                    <div class="col-sm-7 footer-copyright wow fadeIn">
                        <p>Copyright © 2018, Municipio del Distrito Metropolitano de Quito. Todos los derechos reservados</p>
                    </div>
                    <div class="col-sm-5 footer-social wow fadeIn">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>  
        </footer>

