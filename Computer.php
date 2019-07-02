<?php

require "Prodotto.php";
require "Marca.php";

class Computer extends Prodotto{

  use Marca;

  public $ram;
  public $memoria;
  public $is_fisso;
  public $processore;
  public $scheda_grafica;
  public $sistema_operativo;

  function __construct($proc, $ram, $cod, $nome){
    $this->processore = $proc;
    $this->ram = $ram;

    parent::__construct($cod, $nome, "pippo", 10);
  }
}

 ?>
