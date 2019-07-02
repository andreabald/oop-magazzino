<?php
  class Prodotto {
    public $codice;
    public $denominazione;
    public $prezzo;
    public $id;
    public $collocazione;
    public $prezzo_acquisto;

    function __construct($cod, $nome, $collocazione, $prezzo = 0){
      $this->codice = $cod;
      $this->denominazione = $nome;
      $this->prezzo = $prezzo;
      $this->collocazione = $collocazione;
    }
  }

 ?>
