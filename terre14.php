<?php
if (count($argv) != 4) {
  echo "Veuillez insérer que trois arguments" . "\n";
  return;
};
$newArray = [];
$arguments = array_slice($argv, 1);

foreach ($arguments as $argument) {
  if (!is_numeric($argument)) {
    echo "Veuillez insérer trois nombre entier." . "\n";
    return;
  }
  if (in_array($arguments, $newArray)) {
    echo "Veuillez entrer des entiers différents" . "\n";
    return;
  }
  $newArray = $arguments;
}

$firstNumber = intval($newArray[0]);
$secondNumber = intval($newArray[1]);
$thirdNumber = intval($newArray[2]);


if ($firstNumber == $secondNumber || $firstNumber == $thirdNumber || $secondNumber == $thirdNumber) {
  echo "Veuillez insérer des chiffres différents";
  return;
}

if ($secondNumber < $firstNumber && $firstNumber < $thirdNumber || $thirdNumber < $firstNumber && $firstNumber < $secondNumber) {
  echo ($firstNumber);
};

if ($firstNumber < $secondNumber && $secondNumber < $thirdNumber || $thirdNumber < $secondNumber && $secondNumber < $firstNumber) {
  echo ($secondNumber);
  return;
}

echo ($thirdNumber);
