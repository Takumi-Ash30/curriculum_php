<?php
$name = $_POST["name"];
$password = $_POST["password"];
$password_hash = password_hash($password, PASSWORD_DEFAULT);

if(isset($_POST["signUp"])){ 
  echo "登録完了しました。" 
} ?>

