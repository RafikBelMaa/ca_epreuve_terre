<?php
if (count($argv) != 3) {
  echo "Veuillez insérer uniquement 2 arguments." . "\n";
  return;
}
$arguments = array_slice($argv, 1);


foreach ($arguments as $argument) {
  if (!is_numeric($argument)) {
    echo " Veuillez inserez uniquement des nombres" . "\n";
    return;
  }
}




$baseNumber = array_shift($arguments);
$exposantNumber = array_pop($arguments);


if ($baseNumber == 0 || $exposantNumber < 0) {
  echo "Veuillez insérer un nombre a multiplier différent de zero et un exposant non négatif" . "\n";
  return;
}
$resultat = 1;
for ($i = 0; $i < $exposantNumber; $i++) {
  $resultat *= $baseNumber;
}
echo ($resultat);
