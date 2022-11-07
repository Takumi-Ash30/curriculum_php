<link rel="stylesheet" href="answer.css?v=2">
<?php
  $choice1 = $_POST['choice1'];
  $choice2 = $_POST['choice2'];
  $choice3 = $_POST['choice3'];
  $my_name = $_POST['my_name'];
?>

<?php
  function judge($choice){
    if("correct" == $choice){
      printf("正解！");
    }else {
      printf("残念・・・");
    }
  }
?>

  
  <div><?php echo $my_name?>さんの結果は・・・？</div>
  <div>①の答え</div>
  <div><?php judge($choice1); echo '<br>';?> </div>
  <div>②の答え</div>
  <div><?php judge($choice2); echo '<br>';?> </div>
  <div>③の答え</div>
  <div><?php judge($choice3); echo '<br>';?> </div>


