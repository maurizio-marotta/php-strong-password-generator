<?php 

  function genPassword($length){
    $ps = '';
    $listaComp = [
      'abcdefghilmnopqrstuvzxy',
      'ABCDEFGHILMNOPQRETUVZXY',
      '1234567890',
      '!?&%$<>^+-*/()[]{}@#_=',
    ];
  
    $indexComp = 0;
  
    while(strlen($ps) < $length) {
      $listaString = $listaComp [$indexComp];
      $comp = $listaString [rand(0, strlen($listaString) -1)];
      $ps .= $comp;
      $indexComp++;
      if ($indexComp === count($listaComp) -1 ) $indexComp = 0;
    }
    return $ps;
  }

?>