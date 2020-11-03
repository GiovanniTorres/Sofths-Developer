<?php 

if (isset ($_POST ["cl_nombre"])) {
    $cl_nombre = $_POST ["cl_nombre"] ;
    $cl_apellidos = $_POST ["cl_apellidos"] ;
    $cl_usuario = $_POST ["cl_usuario"] ;
    $cl_password = $_POST ["cl_password"] ;
    $cl_telefono = $_POST ["cl_telefono"] ;
    $cl_mail = $_POST ["cl_mail"] ;
    $cl_mensaje = $_POST ["cl_mensaje"] ;

    if (empty ($cl_nombre)) {
        ?><script>alert ("Todos los campos son necesarios") ;</script><?php
    } else if (empty ($cl_apellidos)) {
        ?><script>alert ("Todos los campos son necesarios") ;</script><?php
    } else if (empty ($cl_usuario)) {
        ?><script>alert ("Todos los campos son necesarios") ;</script><?php
    } else if (empty ($cl_password)) {
        ?><script>alert ("Todos los campos son necesarios") ;</script><?php
    } else if (empty ($cl_telefono)) {
        ?><script>alert ("Todos los campos son necesarios") ;</script><?php
    } else if (empty ($cl_mail)) {
        ?><script>alert ("Todos los campos son necesarios") ;</script><?php
    } else if (empty ($cl_mensaje)) {
        ?><script>alert ("Todos los campos son necesarios") ;</script><?php
    } else {
        $cliente_data = array (
            "clienteDNI" => NULL ,
            "adminDNI" => NULL ,
            "cl_nombre" => $cl_nombre ,
            "cl_apellidos" => $cl_apellidos ,
            "cl_usuario" => $cl_usuario ,
            "cl_password" => $cl_password ,
            "cl_edad" => NULL ,
            "cl_rfc" => NULL ,
            "cl_telefono" => $cl_telefono ,
            "cl_mail" => $cl_mail ,
            "cl_mensaje" => $cl_mensaje ,
            "cl_direccion" => NULL ,
            "cl_cp" => NULL ,
            "razon_social" => NULL ,
            "sello_digital" => NULL
        ) ;
        $cliente = new ClienteController () ;
        $cliente->setCliente ($cliente_data) ;
    }
}
?>