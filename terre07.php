<?php
/* On vérifie si le nombre d'arguments passés est inférieur à 2 car le nom du fichier et le premier argument */
if (count($argv) != 2) {

  /* Si moins de deux arguments sont fournis,en comptant le nom du fichier qui est le premier argument, on affiche un message d'erreur */
  echo "Veuiller insérer au maximum un argument";

  return;
}

/* On découpe les arguments à partir du deuxième élément du tableau $argv. Qui est donc le nom du fichier car la on parle d'éléments et non pas d'index. */
$arguments = array_slice($argv, 1);
$originalString = "";
/* On parcourt chaque argument extrait */
foreach ($arguments as $argument) {

  /* On vérifie si l'argument est de type nombre */
  if (is_numeric($argument) || trim($argument) == '') {

    /* Si l'argument est un nombre, on affiche un message d'erreur et on arrête l'exécution */
    echo "Veuillez insérer que des chaines de caractères";
    return;
  }

  $originalString .= $argument;
}


$reverseString = "";

/* On parcourt la chaîne à l'envers et on afiche le caractère ensuite on déconcatène. */
for ($i = strlen($originalString) - 1; $i >= 0; $i--) {
  $reverseString .= $originalString[$i];
}
echo ($reverseString);
