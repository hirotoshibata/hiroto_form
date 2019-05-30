<?php
if ($_SEVER['REQUEST_METHOD'] === 'GET') {
    header('Location: index.html');
}

require_once('function.php');
    $nickname = h($_POST['nickname']);
    // スーパーグローバル関数
    $email = h($_POST['email']);
    $content = h($_POST['content']);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>送信完了</title>
</head>
<body>
    <h1>お問い合わせ有難うございました！</h1>
    <p><?php echo $nickname ?></p>
    <p><?php echo $email ?></p>
    <p><?php echo $content ?></p>
</body>
</html>
