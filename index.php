<?php
  
$name = 'Austin';
$age = 27;

echo "My name is $name and I am $age years old.";

$password = 'password';

if ($password=='austin' && $name=='Jimmy') {
  echo 'This is the correct password';
} else if ($password=='james'){
  echo 'This is the wrong password!';
} else {
  echo 'You are really bad at this.';
}

$num1 = 10;
$num2 = 2;

$result = ($num1 + $num2) / 2;

echo $result;

$number1 = 10.5;
$number2 = '10.5';

if ($number1===$number2) {
  echo 'Equal.';
} else {
  echo 'Not equal.';
}

switch ($num1) {
  case 10:
    echo 'Ten';
  break;
  case 9:
    echo 'Nine';
  break;
  case 8:
    echo 'Egith';
  break;
  default:
    echo 'Number not found';
  break;
}

?>