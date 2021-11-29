<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <?php
 //echo (3,6); vypise 6
 function getMax($num1, $num2,$num3){
   if($num1 > $num2){
     return $num1; //pokud dam return tak pokud num 1 bude vetsi funkce konci

   }else{
     return $num2;
   }
 }
echo getMax(14,5);

    ?>
</body>
</html>
