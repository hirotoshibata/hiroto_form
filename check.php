<<?php
    $nickname = $_POST['nickname'];
    // スーパーグローバル関数
    $email = $_POST['email'];
    $content = $_POST['content'];
    // echo $nickname;

    if ($nickname ==''){
        $nickname_result = 'ニックネームが入力されていません。';
    }else{
        $nickname_result = 'ようこそ、' . $nickname . '様';
    }

    if ($email == '') {
        $email_result = 'メールアドレスが入力されていません。';
        # code...
    }else{
        $email_result = 'メールアドレス:' . $email;
    }

    if ($content== '') {
        $content_result = 'お問い合わせ内容が入力されていません。';
        # code...
    }else{
        $content_result = 'お問い合わせ内容:' . $content;
    }

    ?>
    <<!DOCTYPE html>
    <html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>入力内容確認</title>
    </head>
    <body>
        <h1>入力内容確認</h1>
        <p><?php echo $nickname_result ?></p>
        <p><?php echo $email_result ?></p>
        <p><?php echo $content_result ?></p>
    </body>
    </html>