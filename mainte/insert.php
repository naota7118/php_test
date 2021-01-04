<?php

// DB接続 PDO
require 'db_connection.php';

// ユーザー入力ありなので、prepareを使う
// prepare, execute(配列(全て文字列))

$params = [
  'id' => null,
  'your_name' => 'なまえ',
  'email' => 'test@test.com',
  'url' => 'http://test.com',
  'gender' => '1',
  'age' => '2',
  'contact' => 'いいい',
  'created_at' => 'NOW()',
]

?>