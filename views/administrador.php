<?php require_once ("./getters/get-administrador.php") ; ?>
<div class="bg-white p-5p-0">
    <div class="bg-3 text-center text-white border p-2">Tabla administrador</div>
    <div class="bg-white border p-3">
        <table class="width-complete">
            <thead class="bg-1">
                <tr>
                    <th class="border text-center xx-small p-2p-0">DNI</th>
                    <th class="border text-center xx-small p-2p-0">Nombre</th>
                    <th class="border text-center xx-small p-2p-0">Apellidos</th>
                    <th class="border text-center xx-small p-2p-0">Teléfono</th>
                    <th class="border text-center xx-small p-2p-0">Correo Electrónico</th>
                    <th class="border text-center xx-small p-2p-0">Nuevo</th>
                    <th class="border text-center xx-small p-2p-0">Actualizar</th>
                    <th class="border text-center xx-small p-2p-0">Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                for ($j=0; $j <= 1 ; $j++) { 
                ?>
                <tr>
                    <td class="border text-center xx-small p-2p-0"><?php print $objectAdmin[$j]["adminDNI"]?></td>
                    <td class="border text-center xx-small p-2p-0"><?php print $objectAdmin[$j]["ad_nombre"]?></td>
                    <td class="border text-center xx-small p-2p-0"><?php print $objectAdmin[$j]["ad_apellidos"]?></td>
                    <td class="border text-center xx-small p-2p-0"><?php print $objectAdmin[$j]["ad_telefono"]?></td>
                    <td class="border text-center xx-small p-2p-0"><?php print $objectAdmin[$j]["ad_mail"]?></td>
                    <td class="border text-center xx-small p-2p-0"><a href="#"><img src="http://localhost/images/nuevo.png" height="30" alt=""></a></td>
                    <td class="border text-center xx-small p-2p-0"><a href="#"><img src="http://localhost/images/editar.png" height="30" alt=""></a></td>
                    <td class="border text-center xx-small p-2p-0"><a href="#"><img src="http://localhost/images/eliminar.png" height="30" alt=""></a></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>