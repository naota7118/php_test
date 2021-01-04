<?php

// 空ではなかったらechoを表示する
if(!empty($_POST)){
  echo '<pre>';
  // スーパーグローバル変数['キー']という形で取得できる
  var_dump ($_POST);
  echo '</pre>';
}

$pageFlag = 0;

// $_POSTは連想配列になっている
if(!empty($_POST['btn_confirm'])){
  $pageFlag = 1;
}

if(!empty($_POST['btn_submit'])){
  $pageFlag = 2;
}



?>

<!DOCTYPE html>
<meta charset="utf-8">
<head></head>
<body>



<?php if($pageFlag === 1) : ?>
<form method="POST" action="input.php">
氏名
<?php echo $_POST['your_name'] ;?>
<br>
メールアドレス
<?php echo $_POST['email'] ;?>
<br>
<input type="submit" name="btn_submit" value="送信する">
<!-- hiddenで設定すると表には表示されないがデータとしては持っている -->
<input type="hidden" name="your_name" value="<?php echo $_POST['your_name'] ;?>">
<input type="hidden" name="email" value="<?php echo $_POST['email'] ;?>">

</form>
<?php endif; ?>

<?php if($pageFlag === 2) : ?>
送信が完了しました。
<?php endif; ?>

<?php if($pageFlag === 0) : ?>
<!-- actionは処理をするファイルを指定する。今回は同じファイルなので、input.phpと指定する。 -->
<form method="POST" action="input.php">
氏名
<input type="text" name="your_name">
<br>
メールアドレス
<input type="email" name="email">
<br>
<input type="submit" name="btn_confirm" value="確認する">

</form>
<?php endif; ?>

<!-- <br>
<input type="checkbox" name="sports[]" value="野球">野球
<input type="checkbox" name="sports[]" value="サッカー">サッカー
<input type="checkbox" name="sports[]" value="バスケ">バスケ

type="submit"とすることで送信ボタンを作れる
<input type="submit" value="送信">

</form> -->

</body>
<form method="GET" action="input.php">