<?php
if (count($argv) != 3) {
  echo "Veuillez insérer que deux arguments" . "\n";
  return;
};
$arguments = array_slice($argv, 1);
$chaine = array_shift($arguments);
$partitionChaine = explode(":", $chaine);
$secondChaine = array_pop($arguments);
$hour = array_shift($partitionChaine);
$minutes = array_pop($partitionChaine);


if (!preg_match('/^(1[0-2]|0?[1-9]):([0-5][0-9])$/', $chaine)) {
  echo "Veuillez entrez une heure avec ce format HH:MM " . "\n";
  return;
};

if (!preg_match('/\b(AM|PM)\b/', $secondChaine)) {
  echo "Veuillez entrée un format 12h (AM/PM)" . "\n";
  return;
}

if ($hour == 12 && $minutes == 00 && $secondChaine == "AM") {
  echo "Minuit";
  return;
}

if ($hour == 12 && $minutes == 00 && $secondChaine == "PM") {
  echo "Midi";
  return;
}
if ($secondChaine == "PM") {
  $newHour = $hour + 12;
  echo ($newHour . ":" . $minutes . "\n");
  return;
}

if ($secondChaine == "AM") {
  echo ($hour . ":" . $minutes . "\n");
  return;
}

if ($hour == 12 && $secondChaine == "AM") {
  $newHour = $hour - 12;
  echo ($newHour . ":" . $minutes);
  return;
}
