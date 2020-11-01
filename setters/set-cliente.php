
<?php 
if (isset ($_POST ["cl_nombre"]) AND isset ($_POST ["cl_apellido"])) {
    $cl_nombre = $_POST ["cl_nombre"] ;
    $cl_apellido = $_POST ["cl_apellido"] ;
    $cl_telefono = $_POST ["cl_telefono"] ;
    $cl_mail = $_POST ["cl_mail"] ;
    $cl_pass = $_POST ["cl_pass"] ;
    $cl_mensaje = $_POST ["cl_mensaje"] ;

    if (empty ($cl_nombre)) {
        ?><script>alert ("Todos los campos son necesarios") ;</script><?php
    } else if (empty ($cl_apellido)) {
        ?><script>alert ("Todos los campos son necesarios") ;</script><?php
    } else if (empty ($cl_telefono)) {
        ?><script>alert ("Todos los campos son necesarios") ;</script><?php
    } else if (empty ($cl_mail)) {
        ?><script>alert ("Todos los campos son necesarios") ;</script><?php
    } else if (empty ($cl_pass)) {
        ?><script>alert ("Todos los campos son necesarios") ;</script><?php
    } else if (empty ($cl_mensaje)) {
        ?><script>alert ("Todos los campos son necesarios") ;</script><?php
    } else {
        $cliente_data = array (
            "cl_nombre" => $cl_nombre ,
            "cl_apellido" => $cl_apellido ,
            "cl_telefono" => $cl_telefono ,
            "cl_mail" => $cl_mail ,
            "cl_pass" => $cl_pass ,
            "cl_mensaje" => $cl_mensaje
        ) ;
    }
}
?>