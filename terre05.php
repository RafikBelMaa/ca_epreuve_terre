<?php
if (count($argv) != 2) {
  echo "Veuillez insérer que un argument" . "\n";
  return;
}
$newArray = array_slice($argv, 1);
/* On initialise une variable en lui insérant le premier argument du tableau $argv */

$departChiffre = array_shift($newArray);


/* On vérifie si le premier argument donné par l'utilisateur est un nombre */
if (is_numeric($departChiffre) != true) {
  /* Si l'argument n'est pas un nombre, on affiche un message d'erreur */
  echo "Tu ne me la mettre pas a l'envers. Met un chiffre" . "\n";
  return;
}
# On vérifie si le nombre est impair
if ($departChiffre % 2 == 1) {

  /* Si le nombre est impair, on affiche "Impair"  */
  echo "Impair" . "\n";
  return;
}
/* Sinon on affiche "Pair" */

echo ("Pair" . "\n");
