<html>

<head>

  <title></title>
  <meta charset="utf-8">

</head>

<body>

<form action="checkbox.php" method="post">
  Apples:<input type="checkbox" name='fruits[]' value="apples"><br>

  Oranges:<input type="checkbox" name='fruits[]' value="oranges"><br>

  Pears:<input type="checkbox" name='fruits[]' value="pears"><br>



  <input type="submit">

<?php
//aby to bylo vsechno ve stejnem array musi tam byt []
$fruits = $_POST ["fruits"];
echo "<br>";
echo $fruits[1];





 ?>

</body>
</html>
