<?php require_once ("./getters/get-cliente.php") ; 
if (!empty ($divide [2])) {$url_dos = $divide [2] ;}
?>


<div class="bg-white .pl-12p-1">
    <div class="container p-5">
        <div class="row justify-content-center borde">
            <div class="col-md-9 p-0 borde">
                <div class="col-md-12 text-4 text-center borde">Registrate</div>

                <form action="" method="post"  id="set_cliente">
                <div class="col-md-12 borde">
                    <label for="adminDNI">ClienteDNI:</label>
                    <input class="col-md-12 border border-bottom-4 p-2 text-4 clienteDNI" name="clienteDNI" type="text" readonly="readonly" placeholder="Administrador" <?php print "value='".$objectCliente[$url_dos-1]['clienteDNI']."'" ?> >
                </div>                    
                <div class="col-md-12 borde">
                    <label for="adminDNI">Administrador:</label>
                    <input class="col-md-12 border border-bottom-4 p-2 text-4 adminDNI" name="adminDNI" type="text" placeholder="Administrador" <?php print "value='".$objectCliente[$url_dos-1]['ad_nombre']."'" ?> >
                </div>
                <div class="col-md-12 borde">
                    <label for="cl_nombre">Nombre del Cliente:</label>
                    <input class="col-md-12 border border-bottom-4 p-2 text-4 cl_nombre" name="cl_nombre" type="text" placeholder="Nombre" <?php print "value='".$objectCliente[$url_dos-1]['cl_nombre']."'" ?> >
                </div>
                <div class="col-md-12 borde">
                <label for="cl_nombre">Apellido del Cliente:</label>
                    <input class="col-md-12 border border-bottom-4 p-2 text-4 cl_apellidos" name="cl_apellidos" type="text" placeholder="Apellidos" <?php print "value='".$objectCliente[$url_dos-1]['cl_apellidos']."'" ?> >
                </div>
                <div class="col-md-12 borde">
                <label for="cl_nombre">Usuario:</label>
                    <input class="col-md-12 border border-bottom-4 p-2 text-4 cl_usuario" name="cl_usuario" type="text" placeholder="Usuario" <?php print "value='".$objectCliente[$url_dos-1]['cl_usuario']."'" ?> >
                </div>
                <div class="col-md-12 borde">
                <label for="cl_nombre">Contraseña:</label>
                    <input class="col-md-12 border border-bottom-4 p-2 text-4 cl_password" name="cl_password" type="text" placeholder="Contraseña" <?php print "value='".$objectCliente[$url_dos-1]['cl_password']."'" ?> >
                </div>
                <div class="col-md-12 borde">
                <label for="cl_nombre">Edad:</label>
                    <input class="col-md-12 border border-bottom-4 p-2 text-4 cl_edad" name="cl_edad" type="text" placeholder="Edad" <?php print "value='".$objectCliente[$url_dos-1]['cl_edad']."'" ?> >
                </div>
                <div class="col-md-12 borde">
                <label for="cl_nombre">RFC:</label>
                    <input class="col-md-12 border border-bottom-4 p-2 text-4 cl_rfc" name="cl_rfc" type="text" placeholder="RFC" <?php print "value='".$objectCliente[$url_dos-1]['cl_rfc']."'" ?> >
                </div>
                <div class="col-md-12 borde">
                <label for="cl_nombre">Teléfono:</label>
                    <input class="col-md-12 border border-bottom-4 p-2 text-4 cl_telefono" name="cl_telefono" type="text" placeholder="Teléfono" <?php print "value='".$objectCliente[$url_dos-1]['cl_telefono']."'" ?> >
                </div>
                <div class="col-md-12 borde">
                <label for="cl_nombre">Correo Electrónico:</label>
                    <input class="col-md-12 border border-bottom-4 p-2 text-4 cl_mail" name="cl_mail" type="text" placeholder="Correo Electrónico" <?php print "value='".$objectCliente[$url_dos-1]['cl_mail']."'" ?> >
                </div>
                <div class="col-md-12 borde p-3">
                <label for="cl_nombre">Mensaje:</label>
                    <div class="form-group">
                        <textarea class="formulario-control border-bottom-4 textborder4 text-4 border-msj cl_mensaje" name="cl_mensaje" id="exampleFormControlTextarea1" rows="3" placeholder="Escribe aquí tu mensaje"><?php print $objectCliente[$url_dos-1]['cl_mensaje'] ; ?></textarea>
                    </div>
                </div>
                <div class="col-md-12 borde">
                <label for="cl_nombre">Dirección:</label>
                    <input class="col-md-12 border border-bottom-4 p-2 text-4 cl_direccion" name="cl_direccion" type="text" placeholder="Dirección" <?php print "value='".$objectCliente[$url_dos-1]['cl_direccion']."'" ?> >
                </div>
                <div class="col-md-12 borde">
                <label for="cl_nombre">Código Postal:</label>
                    <input class="col-md-12 border border-bottom-4 p-2 text-4 cl_cp" name="cl_cp" type="text" placeholder="Código postal" <?php print "value='".$objectCliente[$url_dos-1]['cl_cp']."'" ?> >
                </div>
                <div class="col-md-12 borde">
                <label for="cl_nombre">Razón social:</label>
                    <input class="col-md-12 border border-bottom-4 p-2 text-4 razon_social" name="razon_social" type="text" placeholder="Razón social" <?php print "value='".$objectCliente[$url_dos-1]['razon_social']."'" ?> >
                </div>
                <div class="col-md-12 borde">
                <label for="cl_nombre">Sello Digital:</label>
                    <input class="col-md-12 border border-bottom-4 p-2 text-4 sello_digital" name="sello_digital" type="text" placeholder="Sello digital" <?php print "value='".$objectCliente[$url_dos-1]['sello_digital']."'" ?> >
                </div>
                <div class="col-md-12 borde"><br>
                <input class="col-md-12 bg-1 border-4 rounded" type="submit" placeholder="Usuario">
                </div>
                </form>
                <div class="col-md-12 borde"></div>
            </div>
        </div>
    </div>
</div>

<!--script src="http://localhost/public/js/validar_update_cliente.js"></script-->
<?php require_once ("./setters/set_update_cliente.php") ; ?>