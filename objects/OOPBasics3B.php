<?php
/**
 *
 */

class Remember {
  private $oop;

  public function __construct(){
    echo 'I remember';
  }
  public function getOop(){
    return $this->oop;
  }
  public function setOop($param){
    $this->oop = param;
  }
}
$newObject = new Remember();
 ?>
