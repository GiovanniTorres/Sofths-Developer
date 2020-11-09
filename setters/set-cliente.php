<?php 

$clienteDNI = NULL ;
$adminDNI = 1 ;
$cl_nombre = isset ($_POST ["cl_nombre"]) ? $_POST ["cl_nombre"] : NULL ;
$cl_apellidos = isset ($_POST ["cl_apellidos"]) ? $_POST ["cl_apellidos"] : NULL ;
$cl_usuario = isset ($_POST ["cl_usuario"]) ? $_POST ["cl_usuario"] : NULL ; 
$cl_password = isset ($_POST ["cl_password"]) ? $_POST ["cl_password"] : NULL ;
$cl_edad = NULL ;
$cl_rfc = NULL ;
$cl_telefono = isset ($_POST ["cl_telefono"]) ? $_POST ["cl_telefono"] : NULL ;
$cl_mail = isset ($_POST ["cl_mail"]) ? $_POST ["cl_mail"] : NULL ;
$cl_mensaje = isset ($_POST ["cl_mensaje"]) ? $_POST ["cl_mensaje"] : NULL ;
$cl_direccion = NULL ;
$cl_cp = NULL ;
$razon_social = NULL ;
$sello_digital = NULL ;

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
        "clienteDNI" => $clienteDNI ,
        "adminDNI" => $adminDNI ,
        "cl_nombre" => $cl_nombre ,
        "cl_apellidos" => $cl_apellidos ,
        "cl_usuario" => $cl_usuario ,
        "cl_password" => $cl_password ,
        "cl_edad" => $cl_edad ,
        "cl_rfc" => $cl_rfc ,
        "cl_telefono" => $cl_telefono ,
        "cl_mail" => $cl_mail ,
        "cl_mensaje" => $cl_mensaje ,
        "cl_direccion" => $cl_direccion ,
        "cl_cp" => $cl_cp ,
        "razon_social" => $razon_social ,
        "sello_digital" => $sello_digital
    ) ;
    $cliente = new ClienteController () ;
    $cliente->setCliente ($cliente_data) ;
}



/*
if (isset ($_POST ["cl_nombre"])) {
    $clienteDNI = NULL ;
    $adminDNI = 1 ;
    $cl_nombre = $_POST ["cl_nombre"] ;
    $cl_apellidos = $_POST ["cl_apellidos"] ;
    $cl_usuario = $_POST ["cl_usuario"] ;
    $cl_password = $_POST ["cl_password"] ;
    $cl_edad = NULL ;
    $cl_rfc = NULL ;
    $cl_telefono = $_POST ["cl_telefono"] ;
    $cl_mail = $_POST ["cl_mail"] ;
    $cl_mensaje = $_POST ["cl_mensaje"] ;
    $cl_direccion = NULL ;
    $cl_cp = NULL ;
    $razon_social = NULL ;
    $sello_digital = NULL ;

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
            "clienteDNI" => $clienteDNI ,
            "adminDNI" => $adminDNI ,
            "cl_nombre" => $cl_nombre ,
            "cl_apellidos" => $cl_apellidos ,
            "cl_usuario" => $cl_usuario ,
            "cl_password" => $cl_password ,
            "cl_edad" => $cl_edad ,
            "cl_rfc" => $cl_rfc ,
            "cl_telefono" => $cl_telefono ,
            "cl_mail" => $cl_mail ,
            "cl_mensaje" => $cl_mensaje ,
            "cl_direccion" => $cl_direccion ,
            "cl_cp" => $cl_cp ,
            "razon_social" => $razon_social ,
            "sello_digital" => $sello_digital
        ) ;
        $cliente = new ClienteController () ;
        $cliente->setCliente ($cliente_data) ;
    }
}*/
?>