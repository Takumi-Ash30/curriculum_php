<link rel="stylesheet" href="question.css?v=2">
<?php
  $my_name = $_POST['my_name'];
?>

<div class="body">
  <p>お疲れ様です、<?php echo $my_name; ?>さん！</p>
  <form action="answer.php" method="post">
    <h2>①ネットワークのポート番号は何番？</h2>
    <div class="choices">
    <?php $choice1 = ["80", "22", "21", "20"];
      foreach($choice1 as $value) { ?>
        <div class="choice">
        <?php if($value == "80"){?>
          <input type="radio" name="choice1" value="correct">
        <?php }else { ?>
          <input type="radio" name="choice1" value="incorrect">
        <?php } ?>
        <div class="word"><?php echo $value; ?> </div>
      </div>
    <?php  } ?>
      <br>
    </div>

    <h2>②Webページを作成するための言語は？</h2>
    <div class="choices">
    <?php $choice2 = ["PHP", "Python", "Java", "HTML"];
      foreach($choice2 as $value) { ?> 
        <div class="choice">
        <?php if($value == "PHP"){?>
          <input type="radio" name="choice2" value="correct">
        <?php }else { ?>
          <input type="radio" name="choice2" value="incorrect">
        <?php } ?>
        <div class="word"><?php echo $value; ?> </div>
      </div>
    <?php  } ?>
      <br>
    </div>

    <h2>③MySQLで情報を取得するためのコマンドは？</h2>
    <div class="choices">
    <?php $choice3 = ["join", "select", "insert", "update"];
      foreach($choice3 as $value) { ?>
        <div class="choice">
        <?php if($value == "select"){?>
            <input type="radio" name="choice3" value="correct">
        <?php }else { ?>
            <input type="radio" name="choice3" value="incorrect">
        <?php } ?>
            <div class="word"><?php echo $value; ?> </div>
          </div>
      <?php  } ?>
      <br>
    </div>
      
    <input type="hidden" name="my_name" value="<?php echo $my_name;?>"">
    <input type="submit" class ="send" value="回答する">
  </form>
</div>

