<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <?php
 $phrase="Academy Panda";  //variable
  // $phrase [0]="G"; // vymeni A za G
  echo substr($phrase, 8, 3); // vypise to Panda druhe cislo vybiram kolik pismen chci aby to vypsalo
  echo "<br>";
  echo str_replace("Panda","Tiger",$phrase); // vymeni Panda za Tiger
echo "<br>";
 echo strtolower ($phrase); //vsechno bude maly
 echo "<br>";
  echo strtoupper ($phrase); //vsechno bude velky
  echo "<br>";
  echo strlen ($phrase); //spocita kolik je tam pismen
    echo "<br>";
    echo $phrase[6]; //pise pismena podle rady
    echo "<br>";

   ?>
</body>
</html>
