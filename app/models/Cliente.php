<?php

require_once "./Conexion.php";

class Cliente extends Conexion{

  private $pdo;

  public function __CONSTRUCT(){ $this->pdo = parent::getConexion(); }

  /**
   * Agrega un nuevo cliente
   */
  public function add($params = []){
    try{
      $query = "INSERT INTO clientes (apellidos, nombres, telefono, preferencias) VALUES (?,?,?,?)";
      $cmd = $this->pdo->prepare($query);
      $cmd->execute(
        array(
          $params["apellidos"],
          $params["nombres"],
          $params["telefono"],
          $params["preferencias"]
        )
      );
    }catch(Exception $e){
      error_log($e->getMessage());
    }
  }
}
