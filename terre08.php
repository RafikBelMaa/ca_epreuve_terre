<?php
/* On vérifie si le nombre d'arguments passés est différent de 2. Donc on vérifie qu'il soit plus petit ou plus grand que 2*/
if (count($argv) != 2) {

  /* Si le nombre d'argument est plus petit que 2 alors on affiche un méssage d'erreur et s'arrete la */
  echo "erreur." . "\n";
  return;
}

$arguments = array_slice($argv, 1);

foreach ($arguments as $argument) {
  # On vérifie que cette argument n'est pas différent d'une string sinon on affiche un message d'erreur.
  if (!is_string($argument)) {
    echo "erreur." . "\n";
    return;
  }
  # On vérifie que cette argument n'est pas un nombre sinon on affiche un message d'erreur.
  if (is_numeric($argument)) {
    echo "erreur." . "\n";
    return;
  }
  # On vérifie que cette argument n'est pas un espace vide sinon on affiche un message d'erreur.
  if (trim($argument) == '') {
    echo "erreur." . "\n";
    return;
  }
}
# On insère notre argument dans une variable.
$newString = array_shift($arguments);


# On initialise une varible counter a zero afin de l'utiliser dans une boucle
$counterString = 0;

#On utilise une boucle pour parcourir chaque caractère du premiere argument jusqua la fin de la string
for ($i = 0; $i < strlen($newString); $i++) {

  # Pour chaque argument on incrémente notre counter
  $counterString++;
  # code...
}

echo ($counterString) . "\n";
