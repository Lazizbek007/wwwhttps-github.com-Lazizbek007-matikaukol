<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <form action="URL.php" method="post">
    Name:<input type="text" name="name">
    <input type="submit">

  </form>
  <?php
echo $_POST["name"];
   ?>
</body>
</html>
