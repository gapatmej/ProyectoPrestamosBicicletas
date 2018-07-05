 <!--
 * Descripción:
 *
 * Vista que contiene los elementos html para Gestionar las Estaciones
 * 
 * @author  :   Andres Peralta
 * @email   :   gapatmej@gmail.com
 * @date    :   29-jun-2018
 */
 -->
<link rel="stylesheet" href="<?php echo STYLES ?>/Charisma/charisma-app.css">

<div class="container-fluid" >
    <div id="content" class="col-lg-12 col-sm-12">

        <div class="row">
            <div class="box col-lg-12">
                <div class="box-inner">
                    <div class="box-header well" data-original-title="">
                        <h2><i class="glyphicon glyphicon-user"></i> Estaciones </h2>
                    </div>
                    <div class="box-content table-responsive">
                        <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                            <thead>
                                <tr>
                                    <th style="width: 30%"> Nombre </th>
                                    <th class="text-center" style="width: 30%"> Localizacion </th>
                                    <th class="text-center" style="width: 10%"> Capacidad </th>
                                    <th class="text-center" style="width: 10%"> Numero de Unidades</th>
                                    <th class="text-center" style="width: 20%"> Servicio </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($rsEstaciones as $esta) { ?>
                                    <tr class="table-danger">
                                        <td ><?php echo $esta["nombre"]; ?></td>
                                        <td class="text-center"><?php echo $esta["localizacion"]; ?></td>
                                        <td class="text-center"><?php echo $esta["capacidad"]; ?></td>
                                        <td class="text-center"><?php echo $esta["numero_unidades"]; ?></td>
                                        <td class="text-center"><?php echo $esta["servicio"]; ?></td>
                                        <td class="text-center">
                                          <a class="btn btn-success" href="<?php echo APP_URL ?>estaciones/editar?id=<?php echo $esta["id_estacion"]?>">
                                                    <i class="glyphicon glyphicon-edit icon-white"></i>
                                                    Editar
                                          </a>
                                        </td>
                                        <td class="text-center">
                                          <a class="btn btn-danger" href="<?php echo APP_URL ?>estaciones/eliminar?id=<?php echo $esta["id_estacion"]?>">
                                                    <i class="glyphicon glyphicon-trash icon-white"></i>
                                                    Eliminar
                                          </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/span-->
        </div><!--/row-->
        <!-- content ends -->
    </div><!--/#content.col-md-0-->
</div><!--/fluid-row-->


<div class="ch-container" style="padding-top: 100px">
    <div class="row">
        <div class="box col-md-12">
            <div class="box-inner">
                <div class="box-header well" data-original-title="">
                    <h2><i class="glyphicon glyphicon-edit"></i> GESTIONA ESTACIONES </h2>
                </div>
                <div class="box-content">
                    <form id="frmAdmin" role="form" method="post" class="login-form">
                        <div class="rounded">
                            <button id="btnGuardar" type="submit" onclick="guardarEstacion();"  class="btn btn-success"><?php echo $botonGuardar ?></button>
                            <input id="hddIdEstacion" name="hddIdEstacion" type="hidden" value="<?php echo $estacion->getId();  ?>">
                        </div>
                        <div class="row">
                            <div class="form-group cols col-sm-12">
                                <label for="lblNombreEstacion"> Nombre de la Estación </label>
                                <input type="text" name="txtNombreEstacion" class="form-control" value="<?php echo $estacion->getNombre(); ?>"  id="txtNombreEstación" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group cols col-sm-12">
                                <label for="lblLocalizacionEstacion"> Localización de la Estación </label>
                                <input type="text" name="txtLocalizacionEstacion" class="form-control" value="<?php echo $estacion->getLocalizacion(); ?>"  id="txtLocalizacionEstación" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group cols col-sm-4">
                                <label for="lblCapacidadEstacion"> Capacidad de la Estación en Bicicletas </label>
                                <input type="text" name="txtCapacidadEstacion" class="form-control" value="<?php echo $estacion->getCapacidad();?>"  id="txtCapacidadEstacion" >
                            </div>
                            <div class="form-group cols col-sm-4">
                                <label for="lblNumeroBicicletas"> Numero de Bicicletas disponibles </label>
                                <input type="text" name="txtNumeroBicicletas" class="form-control" value="<?php echo $estacion->getNumeroUnidades(); ?>"  id="txtNumeroBicicletas" >
                            </div>
                            <div class="form-group cols col-sm-4">
                                <label for="lblServicioEstacion"> Servicio que brinda la estación </label>
                                <select class="form-control" name="dropServicioEstacion" data-style="btn-info" id="dropServicioEstacion">
                                    <option descripcion=""  nombreImagen="" value="0"> Selecciona el tipo de servicio </option>
                                    <option descripcion="" <?php echo ($estacion->getServicio() == "PR")?"selected='selected'":"" ?> nombreImagen="" value="PR"> Préstamo </option>
                                    <option descripcion="" <?php echo ($estacion->getServicio() == "TO")?"selected='selected'":"" ?> nombreImagen="" value="TO"> Tour </option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--/span-->

    </div><!--/row-->


</div><!--/.fluid-container-->

<hr>
</div><!--/.fluid-container-->
</div>

<script src='<?php echo JAVASCRIPT ?>Estaciones.js'></script>
<script src='<?php echo JAVASCRIPT ?>shorcutAdminUser.js'></script>
<script src='<?php echo JAVASCRIPT ?>charisma/jquery.cookie.js'></script>
<script src='<?php echo JAVASCRIPT ?>charisma/jquery.dataTables.min.js'></script>
<script src='<?php echo JAVASCRIPT ?>charisma/chosen.jquery.min.js'></script>
<script src='<?php echo JAVASCRIPT ?>charisma/jquery.colorbox-min.js'></script>
<script src='<?php echo JAVASCRIPT ?>charisma/jquery.raty.min.js'></script>
<script src='<?php echo JAVASCRIPT ?>charisma/jquery.iphone.toggle.js'></script>
<script src='<?php echo JAVASCRIPT ?>charisma/jquery.autogrow-textarea.js'></script>
<script src='<?php echo JAVASCRIPT ?>charisma/jquery.uploadify-3.1.min.js'></script>
<script src='<?php echo JAVASCRIPT ?>charisma/jquery.history.js'></script>
<script src='<?php echo JAVASCRIPT ?>charisma/init-chart.js'></script>

<script>
    $(document).ready(function() {
        pathImages = "<?php echo IMAGES; ?>"
        pathAplication = "<?php echo APP_URL ?>";       
    });

</script>