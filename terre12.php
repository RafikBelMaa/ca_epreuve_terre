<?php
if (count($argv) != 2) {
  echo "Veuillez insérer que un argument" . "\n";
  return;
};
$arguments = array_slice($argv, 1);
$chaine = array_shift($arguments);

if (!preg_match('/^([01]?[0-9]|2[0-3]):([0-5][0-9])$/', $chaine)) {
  echo "Veuillez entrez une heure avec ce format HH:MM";
  return;
};

$partitionChaine = explode(":", $chaine);
$hour = array_shift($partitionChaine);
$minutes = array_pop($partitionChaine);



if ($hour == 00 && $minutes == 00) {
  echo "Minuit" . "\n";
  return;
};

if ($hour == 12 && $minutes == 00) {
  echo "Midi" . "\n";
  return;
};

if ($hour == 0) {
  echo "12:" . $minutes . " AM";
  return;
};

if ($hour == 1 || $hour <= 11) {
  echo $hour . ":" . $minutes . " AM" . "\n";
  return;
};
if ($hour == 13 || $hour <= 23) {
  echo ($hour - 12) . ":" . $minutes . " PM" . "\n";
  return;
};
