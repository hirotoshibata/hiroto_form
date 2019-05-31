<?php
require_once('function.php');
require_once('dbconect.php');

$stmt = $dbh->prepare('SELECT * FROM surveys');
$stmt->execute();
$results = $stmt->fetchAll();

// var_dump($results);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php foreach ($results as $result): ?>
        <p><?php echo $result ['nickname'];?></p>
        <p><?php echo $result ['email'];?></p>
        <p><?php echo $result ['content'];?></p>
    <?php endforeach;?>
</body>
</html>
