
<?php
# On initialise notre variable alphabet comme une chaine de caractere vide
$alphabet = "";

#Ensuite on crée une boucle pour pouvoir parcourir 97 jusqua 123 ce qui equivaut aux code décimal des lettres dans la table des codes ASCII
for ($i = 97; $i < 123; $i++) {

  # On initialise une variable qui nous permettra de stocker la chaine de caractere que la fuction chr a crée en prennant en réglage le nombre qui est stocker dans l'index
  $getNewCaracter = chr($i);

  # On initialise une variable qui concatainera chaque chaine de caractère stocker dans getNewCaracter a la chaine précédente
  $alphabet .= $getNewCaracter;
}

# On demande a la sortie de la boucle a notre variable alphabet de concatener une chaine de caractere qui permet le saut a la ligne
$alphabet .= "\n";

echo $alphabet;
