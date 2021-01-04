<?php

require 'db_connection.php';

//ユーザー入力なし query


// $sql = 'select * from contacts where id = 2';

// // PDOを実体化してるので、メソッドが使える
// // PDO::query() は、PDOStatement オブジェクトを返します。 失敗した場合は false を返します。
// $stmt = $pdo->query($sql);

// // PDOStatement::fetchAll — 全ての結果行を含む配列を返す
// $result = $stmt->fetchall();

// echo'<pre>';
// var_dump($result);
// echo'</pre>';

//ユーザー入力あり prepare bind execute
// $sql = 'select * from contacts where id = :id';
// $stmt = $pdo->prepare($sql);
// $stmt->bindValue('id', 2, PDO::PARAM_INT);
// $stmt->execute();

