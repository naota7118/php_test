<?php

const DB_HOST = 'mysql:dbname=udemy_php;host=localhost;charset=utf8';
const DB_USER = 'php_user';
const DB_PASSWORD = 'password123';

// 例外処理　Exception データベースとの接続を確認する
// 万が一データベースが落ちている可能性もあるので、DBとつながっているかどうかチェックする必要がある

// これはDB接続する時のお決まりの書き方
try{
  $pdo = new PDO(DB_HOST, DB_USER, DB_PASSWORD);
  echo '接続成功';
} catch(PDOException $e){
  echo '接続失敗' . $e->getMessage() . "\n";
  exit();
}

?>

<!-- rubyでいうところのdatabase.ymlの設定に似ている -->