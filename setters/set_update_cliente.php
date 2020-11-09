<?php
if (isset ($_POST ["clienteDNI"])) {
    $clienteDNI = $_POST ["clienteDNI"] ;
    $adminDNI = $_POST ["adminDNI"] ;
    $cl_nombre = $_POST ["cl_nombre"] ;
    $cl_apellidos = $_POST ["cl_apellidos"] ;
    $cl_usuario = $_POST ["cl_usuario"] ;
    $cl_password = $_POST ["cl_password"] ;
    $cl_edad = $_POST ["cl_edad"] ;
    $cl_rfc = $_POST ["cl_rfc"] ;                       
    $cl_telefono = $_POST ["cl_telefono"] ;                       
    $cl_mail = $_POST ["cl_mail"] ;                       
    $cl_mensaje = $_POST ["cl_mensaje"] ;                       
    $cl_direccion = $_POST ["cl_direccion"] ;                       
    $cl_cp = $_POST ["cl_cp"] ;                       
    $razon_social = $_POST ["razon_social"] ;                       
    $sello_digital = $_POST ["sello_digital"] ;                       

             

    if (empty ($clienteDNI)) {
        ?><script>alert ("Todos los campos son necesarios") ;</script><?php
    } elseif (empty ($adminDNI)) {
        ?><script>alert ("Todos los campos son necesarios") ;</script><?php
    } elseif (empty ($cl_nombre)) {
        ?><script>alert ("Todos los campos son necesarios") ;</script><?php
    } elseif (empty ($cl_apellidos)) {
        ?><script>alert ("Todos los campos son necesarios") ;</script><?php
    } elseif (empty ($cl_usuario)) {
        ?><script>alert ("Todos los campos son necesarios") ;</script><?php
    } elseif (empty ($cl_password)) {
        ?><script>alert ("Todos los campos son necesarios") ;</script><?php
    } elseif (empty ($cl_edad)) {
        ?><script>alert ("Todos los campos son necesarios") ;</script><?php
    } elseif (empty ($cl_rfc)) {
        ?><script>alert ("Todos los campos son necesarios") ;</script><?php
    } elseif (empty ($cl_telefono)) {
        ?><script>alert ("Todos los campos son necesarios") ;</script><?php
    } elseif (empty ($cl_mail)) {
        ?><script>alert ("Todos los campos son necesarios") ;</script><?php
    } elseif (empty ($cl_mensaje)) {
        ?><script>alert ("Todos los campos son necesarios") ;</script><?php
    } elseif (empty ($cl_direccion)) {
        ?><script>alert ("Todos los campos son necesarios") ;</script><?php
    } elseif (empty ($cl_cp)) {
        ?><script>alert ("Todos los campos son necesarios") ;</script><?php
    } elseif (empty ($razon_social)) {
        ?><script>alert ("Todos los campos son necesarios") ;</script><?php
    } elseif (empty ($sello_digital)) {
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
}