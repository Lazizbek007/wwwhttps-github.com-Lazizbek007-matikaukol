<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <?php
 $grades= array("Jim"=>"A+" , "Pam " =>"B-", "Josh" =>"C"); //klic[key] Jim hodnota[Value] A+
$grades ["Jim"] = "F";
 echo $grades["Jim"];
echo "<br>";
 echo count($grades);
   ?>

   <form action="associative array.php" method="post">

<input type="text" name="Kids">


     <input type="submit">
   </form>

   <?php
$grades = array("Jim"=>"A+", "Pam"=>"C", "Oscar"=>"B+");
echo $grades[$_POST['Kids']]; // beru hodnotu z toho text boxu,vlozum element do array

    ?>
</body>
</html>
