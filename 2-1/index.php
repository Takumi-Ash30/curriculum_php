<html>
    <p>I say that <?php echo "Hello World!!"; ?></p>

    <?php
    //hello
    $message = "Hello World!";
    echo $message; echo '<br>';
    
    //変数
    $x = 8;
    $y = 5.55;
    var_dump($x); echo '<br>';
    var_dump($y); echo '<br>';

    //論理値
    $flag = true;
    var_dump($flag); echo '<br>';

    //空
    $emp = null;
    var_dump($emp); echo '<br>';
    //定数
    define("ADMIN_EMAIL", "y-i-group@gmail.com");
    define("LIST_COUNT", 15);
    
    echo ADMIN_EMAIL; echo '<br>';
    echo LIST_COUNT; echo '<br>';
    ?>
</html>