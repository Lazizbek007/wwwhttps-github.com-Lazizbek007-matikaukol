<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <form action="page.php" method="post">
<input type="text" name="Student">
    <input type="submit">
  </form>

  <?php
  $grades= array("Jim"=>"A+", "Paul"=>"B+", "Bet"=>"C-");
  echo $grades[$_POST["Student"]];
   ?>
</body>
</html>
