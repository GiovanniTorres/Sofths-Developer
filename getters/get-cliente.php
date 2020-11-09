<?php
/*Tabla cliente*/
$clientecontroller = new ClienteController () ;
$c = "" ;
$objectCliente = $clientecontroller->getCliente ($cliente = $c) ;
$cant_objectCliente = count($objectCliente);