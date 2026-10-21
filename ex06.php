<?php
$numeroMois = (int) date("m");
switch($numeroMois){
    case 1 :
        echo "Janvier";
        break;
    
    case 2 :
        echo "Fevrier";
        break;
    
    case 3 :
        echo "Mars";
        break;    

    case 4 :
        echo "Avril";
        break;
      
    case 5 :
        echo "Mai";
        break;
        
    case 6 :
        echo "Juin";
        break;
        
    case 7 :
        echo "Juillet";
        break;
        
    case 8 :
        echo "Aout";
        break;
        
    case 9 :
        echo "September";
        break;    

    case 10 :
        echo "October";
        break;
        
    case 11 :
        echo "November";
        break;
        
    case 12 :
        echo "December";
        break;    

    default :
        echo "Numero de mois invalide";
}









/*  Déclarer `$numeroMois = 3`.
2. Utiliser `switch` pour afficher le nom français correspondant aux nombres de 1 à 12.
3. Prévoir un cas `default` affichant « Numéro de mois invalide ».
4. Tester `1`, `3`, `12` et `15`.
5. Remplacer ensuite la valeur fixe par `(int) date("m")` pour afficher le mois courant du serveur.
*/
?>