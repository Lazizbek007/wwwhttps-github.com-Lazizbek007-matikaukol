
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <?php
 $a = 5.5;
 $b = 6.1;
 $c = 5.9;
 $d = 144;
 $e = 25;
 $f = 1255;
 $g = 165;
 $h =1.99999;

 echo round($a);
 echo "<br>";

 echo ceil($b);
 echo "<br>";

 echo floor($c);
 echo "<br>";

 echo sqrt($d);
 echo "<br>";

 echo pow($d,$e);
 echo "<br>";

 echo asin($a),acos($b),atan($c);
 echo "<br>";
 echo sin($a),cos($b),tan($c);
  echo "<br>";

  echo fmod($d,$e);
   echo "<br>";

  echo max($f,$g);
   echo "<br>";

   echo abs($h);
echo "<br>";

$x= $a-$f;
echo $x;
echo "<br>";

$x= $d+$e;
echo $x;
echo "<br>";

$x= 54548*56545;
echo $x;
echo "<br>";

$x= 41255/4541;
echo $x;
echo "<br>";

echo number_format($a);
   ?>
</body>
</html>
