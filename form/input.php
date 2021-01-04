<?php

session_start();

// 空ではなかったらechoを表示する
if(!empty($_SESSION)){
  echo '<pre>';
  // スーパーグローバル変数['キー']という形で取得できる
  var_dump ($_SESSION);
  echo '</pre>';
}
header('X-FRAME-OPTIONS:DENY');

function h($str)
{
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
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
<?php if($_POST['csrf'] === $_SESSION['csrfToken']) :?>
<form method="POST" action="input.php">
氏名
<?php echo h($_POST['your_name']) ;?>
<br>
メールアドレス
<?php echo h($_POST['email']) ;?>
<br>
<input type="submit" name="back" value="戻る">

<input type="submit" name="btn_submit" value="送信する">
<!-- hiddenで設定すると表には表示されないがデータとしては持っている -->
<input type="hidden" name="your_name" value="<?php echo h($_POST['your_name']) ;?>">
<input type="hidden" name="email" value="<?php echo h($_POST['email']) ;?>">
<input type="hidden" name="csrf" value="<?php echo h($_POST['csrf']) ;?>">

</form>

<?php endif; ?>

<?php endif; ?>

<?php if($pageFlag === 2) : ?>
<?php if($_POST['csrf'] === $_SESSION['csrfToken']) :?>
送信が完了しました。

<!-- 送信が完了したら合言葉を削除 -->
<?php unset($_SESSION['csrfToken']); ?>
<?php endif; ?>
<?php endif; ?>

<?php if($pageFlag === 0) : ?>

<?php
// issetは設定されていなかったらという意味
if(!isset($_SESSION['csrfToken'])){
  // 暗号を生成
  // bin2hexは16進数に変換する関数
  $csrfToken = bin2hex(random_bytes(32));
  $_SESSION['csrfToken'] = $csrfToken;
}
$token = $_SESSION['csrfToken'];
?>

<!-- actionは処理をするファイルを指定する。今回は同じファイルなので、input.phpと指定する。 -->
<form method="POST" action="input.php">
氏名
<input type="text" name="your_name" value="<?php if(!empty($_POST['your_name'])){echo h($_POST['your_name']) ;} ?>">
<br>
メールアドレス
<input type="email" name="email" value="<?php if(!empty($_POST['email'])){echo h($_POST['email']) ;} ?>">
<br>
<input type="submit" name="btn_confirm" value="確認する">
<input type="hidden" name="csrf" value="<?php echo $token;?>">

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