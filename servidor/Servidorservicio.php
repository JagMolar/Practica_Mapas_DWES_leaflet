<?php
require_once("Lugares.php");
$server = new SoapServer("obtenerLugares.wsdl");
$server->setClass('Lugares');
$server->handle();
