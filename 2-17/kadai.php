<?php
  date_default_timezone_set('Asia/Tokyo');
  function greeting() {
    $date = date("Y-m-d H:i:s", time());
    $hour = intval(substr($date,11,2));
    printf("今%d時台です\n", $hour); echo '<br>';
    switch($hour){
      case ($hour>=5 && $hour< 11) : printf("おはようございます"); break;
      case ($hour>=11 && $hour< 18) : printf("こんにちは"); break;
      case ($hour>=18 || $hour<5) : printf("こんばんは"); break;
    } echo '<br>';
  }

  function sugoroku(){
    printf("すごろくしましょう！！"); echo '<br>';
    $goal = 40;
    $position = 0;
    printf("スタート(残り%dマス)", $goal); echo '<br>';
    for($i=1;;++$i){
      $sai = mt_rand(1, 6);
      $position += $sai;
      if($position >= $goal) {
        printf("%d回目 = %d", $i, $sai); echo '<br>';
        printf("合計%d回でゴールしました！", $i); echo '<br>';
        break;
      }else{
        printf("%d回目 = %d (残り%dマス)", $i, $sai, $goal-$position); echo '<br>';
      }
    }
  }

  greeting();
  echo '<br>';
  sugoroku();
?>