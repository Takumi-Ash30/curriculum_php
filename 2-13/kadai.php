<?php
  echo "いろんな関数を使ってみよう!"; echo'<br>';
  $x = 6.7;
  echo "ceil(切り上げ)：";
  printf("%f → %d", $x, ceil($x)); echo'<br>';
  echo "floor(切り捨て)：";
  printf("%f → %d", $x, floor($x)); echo'<br>';
  echo "round(四捨五入)：";
  printf("%f → %d", $x, round($x)); echo'<br>';
  echo "pi(円周率)：";
  printf("%05f", pi()); echo'<br>';
  echo "mt_rand(乱数)："; 
  printf("%d", mt_rand(1,10)); echo '<br>'; echo'<br>';

  $str = "nakamura takumi";
  printf("対象文字列：%s", $str); echo'<br>';
  printf("strlen(文字列の長さ)：%s", strlen($str)); echo'<br>';
  printf("strpos(検索)(対象:u)：%d", strpos($str, "u")); echo'<br>';
  printf("substr(文字列切り取り:-4から3文字)：%s", substr($str, -4, 3));echo'<br>';
  printf("str_replace(置換)：%s", str_replace("takumi", "TAKUMI", $str)); echo'<br>';

  $data = sprintf("私%sは%d歳です。", $str, 22);
  echo $data;

  ?>