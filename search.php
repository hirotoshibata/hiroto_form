<?php
// search.php

require_once('function.php');
require_once('dbconect.php');

$nickname = '';
if (isset($_GET['nickname'])) {
    $nickname = $_GET['nickname'];
}

$stmt = $dbh->prepare('SELECT * FROM surveys WHERE nickname like ?');
$stmt->execute(["%$nickname%"]);
$results = $stmt->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="search.php" method="GET">
        <input type="text" name="nickname">
        <input type="submit" value="検索">
    </form>
    
    <?php foreach ($results as $result): ?>
        <p><?php echo $result ['nickname'];?></p>
        <p><?php echo $result ['email'];?></p>
        <p><?php echo $result ['content'];?></p>
    <?php endforeach;?>
</body>
</html>