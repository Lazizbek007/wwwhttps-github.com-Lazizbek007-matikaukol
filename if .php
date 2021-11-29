<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <?php
$isMale= false; //boolean variable pokud tam bude false tak tam nic nevyleze
$isTall=true; // pokud jeden je false tak vse je false
if ($isMale && $isTall) { //pokud je to male vyleze you are male pokud ne tak you are not male,ke spojeni 2 se tam davca &&
  echo "you are a tall male";
} elseif($isMale && !$isTall){
  echo "you are a short male";
}elseif(!$isMale && $isTall){
  echo "you are tall female";
}else {
echo "you are not tall Male";
}
// && oba musi byt true || tohle je or a staci kdyz bude jeden true
//cont
   ?>

</body>
</html>
