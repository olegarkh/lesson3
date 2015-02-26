<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <link rel="stylesheet" href="../css/style.css" style="text/css">
  <title>Загрузить статью</title>
</head>
<body>
   <p><a href="index.php?ctrl=Admin">На главную</a></p>
   <form action="index.php?ctrl=Admin&act=Add" method="post">
       <p><label>Введите дату<br><input type="date" name="date"></label></p>
       <p><label>Введите название статьи<br><input type="text" name="title" size="100"></label></p>
       <p><label>Текст статьи<br><textarea name="text" rows="16" cols="90"></textarea></label></p>
       <p><input type="submit" name="sub" value="Сохранить"></p>
   </form>
</body>
</html>