<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>

   <form action="user input.php" method="get">
     Name:<input type="text" name="name">
     <input type="submit">
     <br>
     Age:<input type="number" name="age">
     <input type="submit">
   </form>
    Your name is  <?php
     echo $_GET["name"]; // vypise jmeno pres submit
      ?>
      <br>
    Your age is  <?php echo $_GET["age"];// vypise vek pres submit ?>

</body>
</html>
