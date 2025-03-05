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
    echo "Veuillez entrez un nombre positif différent de 0 ou 1";
    return;
  }
}

$userNumber = intval($arguments[0]);

for ($i = 2; $i < $userNumber; $i++) {
  if ($userNumber % $i == 0) {
    echo "Non, " . $userNumber . " n'est pas un nombre premier " . "\n";
    return;
  }
}
echo "Oui, " . $userNumber . " est un nombre premier " . "\n";
