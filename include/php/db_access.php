<?php
//DBに接続する
//DBにアクセスし、結果をテーブルで出力する
require_once('db.php');
try {
   $pdo = new PDO($dsn, $user, $password);
   $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
   $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "データベース{$dbName}に接続しました。";
   $pdo = NULL;
} catch (Exception $e) {
   echo "<span class='error'>エラーがありました。</span><br>";
   echo $e->getMessage();
   exit();
}

header('Content-Type: text/html; charset=utf-8');


?>