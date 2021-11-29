<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>

  <form action="calculator2.php" method="post">
First num:<input type="number" step="0.1" name="num1"> <br>
<br>
operator:<input type="text" name="op"> <br>
<br>
    Second Num:<input type="number" name="num2"> <br>
    <br>
    <input type="submit">
  </form>
  <?php
//text umoznuje aby se tam pridavali +,-,* atd
$num1=$_POST["num1"];
$num2=$_POST["num2"];
$op=$_POST["op"];

if($op =="+"){
echo $num1 + $num2;

}elseif ($op =="-") {
    echo $num1 - $num2;
}elseif ($op =="*") {
  echo $num1 * $num2;

}elseif ($op =="/") {
  echo $num1 / $num2;

} else {
  echo"invalid operator";
}

   ?>
</body>
</html>
