<?php

$arguments = array_slice($argv, 1);
$countArguments = 0;

foreach ($arguments as $argument) {
  if (!is_numeric($argument)) {
    echo "Veuillez insérer que des nombres" . "\n";
    return;
  }
  $countArguments += 1;
}

if ($countArguments < 2) {
  echo "Veuillez insérer au moins deux caractère." . "\n";
  return;
}

for ($i = 0; $i < count($arguments) - 1; $i++) {
  if ($arguments[$i] > $arguments[$i + 1]) {
    echo "Pas trié !\n";
    return;
  }
}
echo "Trié";
