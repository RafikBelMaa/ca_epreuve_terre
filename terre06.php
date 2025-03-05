<?php
if (count($argv) != 3) {
  echo "Veuillez insérer que deux arguments" . "\n";
  return;
}

$newArray = array_slice($argv, 1);

foreach ($newArray as $argument) {
  if (!is_numeric($argument)) {
    /* Si les arguments ne sont pas des nombres, on affiche un message d'erreur */
    echo "Veuillez insérer des nombres" . "\n";
    return;
  }
}

/* On initialise une variable en lui insérant le premier argument du tableau $argv */
$dividendNumber = array_shift($newArray);

/* On initialise une autre variable en lui insérant le deuxième argument du tableau $argv */
$dividerNumber = array_pop($newArray);



# On vérifie que le deuxième argument n'est pas égal à zéro et que le premier argument est plus grand que le deuxième
if ($dividerNumber == 0 || $dividendNumber <= $dividerNumber) {
  /* Si le deuxième argument est égal à zéro ou si le premier argument n'est pas plus grand que le deuxième, on affiche un message d'erreur */
  echo "Erreur" . "\n";
  return;
}

/* On effectue la division entière du premier argument par le deuxième et on insère le résultat dans une variable */
$quotient = intdiv($dividendNumber, $dividerNumber);

/* On affiche le résultat de la division entière et on lui concatene un saut a la ligne */
echo "résultat: " . $quotient . "\n";

/* On calcule le reste de la division du premier argument par le deuxième et on insère le résultat dans une variable */
$rest = fmod($dividendNumber, $dividerNumber);

/* On affiche le reste de la division et on lui concatène un saut a la ligne */
echo "reste: " . $rest . "\n";
