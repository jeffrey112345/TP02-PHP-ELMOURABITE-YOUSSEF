<?php
$moyenne = 21;
if ($moyenne > 20 || $moyenne <0){
    echo "Note invalide";
}

if ($moyenne < 10){
    echo "Non valide";
} elseif ($moyenne >= 10 && $moyenne < 12){
    echo "Passable";
} elseif ($moyenne >= 12 && $moyenne < 14){
    echo "Assez bien";
} elseif ($moyenne >= 14 && $moyenne < 16){
    echo "Bien";
} elseif ($moyenne >= 16 && $moyenne < 20) {
    echo "Tres bien";

}











/* Inférieure à 10 | Non validé |
| De 10 inclus à 12 exclu | Passable |
| De 12 inclus à 14 exclu | Assez bien |
| De 14 inclus à 16 exclu | Bien |
| De 16 à 20 inclus | Très bien | */


?>