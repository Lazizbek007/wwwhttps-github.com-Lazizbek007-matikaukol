<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <?php
  // ++ coz to bude 6 ale 6 je vetsi jako 5 tak to printne max 5 incrementing= zvysovani
  //pokud tam nebude index ++ tak to bude do nekonecna printovat 1 a kdyz tam je ++ tak to bude printovat cislo v tom while

// $index =1;
// while ($index <= 8) {
   //echo "$index <br>";
  // $index ++;
 //}
 $index=6;
 do{
   echo "$index <br>";
   $index ++;
 } while ($index <= 5);
 // do while loop vypise 6 predtim nez zkontroluje 5 coz kdyz je 6 vetsi tak vypise 6 do while printe prvni bodu a pak kondici
   ?>
</body>
</html>
