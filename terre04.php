<?php
/* On initialise une varible en lui insérent le deuxieme argument du tableau $argv */
$beginLetter = $argv[1];

/* On verifie sii le deuxieme argument donné par l'utilisateur est un string et si il est en minuscule  */
if (is_string($beginLetter) == true && ctype_lower($beginLetter) == true) {

  /* On convertie le deuxieme argument en sa valeur ASCII et on l'insère dans une variable */
  $lettreChiffre = ord($beginLetter);

  /* On verifie que la valeur ASCII est plus petite que 123 sachant que la valeur de "z" est 122 si oui on incrémente */
  for ($i = $lettreChiffre; $i < 123; $i++) {

    # On convertie cette fois ci la valeur ASCII de "i" au caractere lui correspondant
    $getNewCaracter = chr($i);

    /* On insere ensuite ce caractère dans la variable $alphabet */
    $alphabet .= $getNewCaracter;
  };

  /* On ajoute un saut de ligne a la fin de la boucle dans la variable */
  $alphabet .= "\n";

  /* Et on affiche la variable */
  echo $alphabet;
} else {

  echo "Veuillez insérer une lettre en miniscule" . "\n";
}
