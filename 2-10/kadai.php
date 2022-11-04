<?php
  function getCubeArea($tate, $yoko, $takasa){
    $area = $tate * $yoko * $takasa;
    echo "直方体の面積は、". $area . "です！";
  }

  getCubeArea(5, 10, 8);

?>