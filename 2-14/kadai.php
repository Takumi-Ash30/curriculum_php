<?php
  $fruits = ["apple", "peach", "grape" ,"strawberry", "orange"];
  if(in_array("grape", $fruits)){
    echo "ぶどうあるよ！"; echo '<br>';
  } else {
    echo "ぶどうは売り切れです...";
  }

  $fruitsMix = implode(",", $fruits);
  var_dump($fruitsMix); echo '<br>';

  $re_fruits = explode(",", $fruitsMix);
  var_dump($re_fruits);
?>