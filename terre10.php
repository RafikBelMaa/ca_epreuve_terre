<?php
if (count($argv) != 2) {
  echo "Veuillez insérer que un argument" . "\n";
  return;
}
$arguments = array_slice($argv, 1);

foreach ($arguments as $argument) {
  if (!is_numeric($argument)) {
    echo "Veuillez entrez un nombre";
    return;
  }
  if ($argument < 2) {
    echo "Veuillez entrez un nombre positif et différent de 0 et 1";
    return;
  }
}

$userNumber = floatval($arguments[0]);


$approximateRoot = $userNumber / 2;


$precisionThreshold = 0.0001;

while (abs($approximateRoot * $approximateRoot - $userNumber) > $precisionThreshold) {
  $approximateRoot = ($approximateRoot + $userNumber / $approximateRoot) / 2;

  if (($approximateRoot * $approximateRoot - $userNumber) < $precisionThreshold) {

    echo round($approximateRoot, 0);
    return;
  }

  $approximateRoot = $approximateRoot;
};
