<?php
/* On met le tableau de la super global dans une variable */
$arguments = $argv;

/* Si i est plus petit que la longueur de $arguments alors incrémente */
for ($i = 0; $i < count($arguments); $i++) {
  # Affiche i + un saut a la ligne
  echo ($arguments[$i] . "\n");
};
