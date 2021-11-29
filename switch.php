<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>

  <form action="switch.php" method="post">
    What is your grade?
    <input type="text" name="grade">

    <input type="submit">
    <br>
  <?php
 $grade =$_POST["grade"];
switch ($grade) {
  case "A":
    echo "You did amazing";
    break;
case 'B':
echo "Good job";
  break;
  case 'C':
    echo "Not bad";
    break;
    case 'D':
      echo "Very bad";
      break;
      case 'F':
        echo "You Fail";
        break;

        default:
        echo "Invalid grade";
}
   ?>
</body>
</html>
