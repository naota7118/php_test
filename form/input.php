<?php

// 空ではなかったらechoを表示する
if(!empty($_POST)){
  echo '<pre>';
  // スーパーグローバル変数['キー']という形で取得できる
  var_dump ($_POST);
  echo '</pre>';
}

?>

<!DOCTYPE html>
<meta charset="utf-8">
<head></head>
<body>

<!-- actionは処理をするファイルを指定する。今回は同じファイルなので、input.phpと指定する。 -->
<form method="POST" action="input.php">
氏名
<input type="text" name="your_name">

<br>
<input type="checkbox" name="sports[]" value="野球">野球
<input type="checkbox" name="sports[]" value="サッカー">サッカー
<input type="checkbox" name="sports[]" value="バスケ">バスケ

<!-- type="submit"とすることで送信ボタンを作れる -->
<input type="submit" value="送信">

</form>

</body>
<form method="GET" action="input.php">