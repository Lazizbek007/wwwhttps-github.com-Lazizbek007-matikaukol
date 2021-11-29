<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <form action="minigame.php" method="get">
Color:<input type="text" name="color"> <br>

Veci:<input type="text" name="veci"> <br>

Celebrita:<input type="text" name="lol"> <br>

    <input type="submit">
  </form>
    <br><br>

    <?php
  
    $color = $_GET["color"];
    $veci = $_GET["veci"];
    $Celebrita = $_GET["lol"];


    echo "Roses are $color <br>";
    echo "$veci are blue <br>";
    echo "I love $Celebrita <br>";

   ?>
</body>
</html>
