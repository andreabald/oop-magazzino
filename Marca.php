<?php

trait Marca{
  protected $brand;

  public function stampaBrand(){
    echo $this->brand;
  }

  public function setBrand($brand){
    $this->brand = $brand;
  }
}

 ?>
