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

// You can assign your own key=>value pair in the array
$names = array('Austin'=>24,'James'=>34,'Andrew'=>14);
print_r($names);
echo $names['James'];

$people = array(
  'Jimmy'=>array('Age'=>22, 'Hair'=>'Blonde'),
  'Tim'=>array('Age'=>45, 'Hair'=>'Brown'),
  'Bob'=>array('Age'=>33, 'Hair'=>'Red')
);

echo $people['Jimmy']['Hair'];

?>