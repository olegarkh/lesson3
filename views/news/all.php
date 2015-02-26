<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/style.css" style="text/css">
    <title>Загрузить статью</title>
</head>
<body>
<a href="index.php?ctrl=Admin">Администрирование</a>
<a href="index.php?id=<?php echo $item->id;?>&act=Edit&ctrl=<?php echo $status; ?>" ><?php echo $info; ?></a>
<?php foreach ($items as $item): ?>
    <h3><?php echo $item->title; ?></h3>
    <p><?php echo $item->text; ?></p>
    <a href="index.php?id=<?php echo $item->id;?>&act=One&ctrl=<?php echo $status; ?>" >Читать далее...</a>
<?php endforeach; ?>
</body>
</html>