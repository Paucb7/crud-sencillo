<?php

define('SERVIDOR', 'containers-us-west-77.railway.app');
define('NOMBRE_BD', 'railway');
define('USUARIO', 'root');
define('CLAVE', 'IbGmBYysHfcTHnUdu5GR');
$opciones = [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'];

try {
  $pdo = new PDO('mysql:host=' . SERVIDOR . ';dbname=' . NOMBRE_BD, USUARIO, CLAVE, $opciones);
  return $pdo;
} catch (Exception $e) {
  $respuesta = ['Error' => 'error: ' . $e->getMessage()];
  print json_encode($respuesta);
  die();
}
