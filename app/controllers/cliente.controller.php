<?php

require_once "../models/Cliente.php";
$cliente = new Cliente();

header('Content-Type: application/json; charset=utf-8');

if (isset($_POST['operation'])){
  switch ($_POST['operation']){
    case "add":
      $datosEnviar = [
        "apellidos"   => $_POST['apellidos'],
        "nombres"     => $_POST['nombres'],
        "telefono"    => $_POST['telefono'],
        "preferencias"=> ""
      ];
      $cliente->add($datosEnviar);
      break;
  }
}