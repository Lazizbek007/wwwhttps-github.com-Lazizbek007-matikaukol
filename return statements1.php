<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <?php

function cube($num){
 return $num * $num * $num; //return vrati se zpet k hodnote a vysledek bude 64 bez nej nebude zadnej vysledek taky to znamena koncim s touto funkci
echo "Hello"; // nevypise to protoze tam je return musim to napsat pred return
}

$cube = cube (4);
echo $cube;
   ?>
</body>
</html>
