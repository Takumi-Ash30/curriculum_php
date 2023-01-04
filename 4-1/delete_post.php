<?php
require_once('function.php');
require_once('db_connect.php');

check_user_logged_in();

// URLの?以降で渡されるIDをキャッチ
$id = $_GET['id'];
// もし、$idが空であったらmain.phpにリダイレクト
// 不正なアクセス対策
if (empty($id)) {
    header("Location: main.php");
    exit;
}

// PDOのインスタンスを取得
$pdo = db_connect();

try {
     // SQL文の準備
     $sql = "DELETE FROM posts WHERE id = :id";
     // プリペアドステートメントの作成
     $stmt = $pdo->prepare($sql);
     // idのバインド
     $stmt->bindParam(':id', $id);
     $stmt->execute();
    // main.phpにリダイレクト
    header("Location: main.php");
    exit;
} catch (PDOException $e) {
    // エラーメッセージの出力
    echo 'データベースエラー' . '<br>';
    echo 'Error:' . $e->getMessage();
    die();
}