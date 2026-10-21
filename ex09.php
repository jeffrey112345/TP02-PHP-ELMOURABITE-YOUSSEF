<?php
$notes = [
    "Amine" => 12,
    "Sara" => 16,
    "Youssef" => 8,
    "Lina" => 14,
    "Adam" => 10
];
?> 
<table border="1">
    <tr>
        <th>Etudiant</th>
        <th>Note</th>
        <th>Validation</th>
        
    </tr>
    
    <?php foreach($notes as $nom=>$note){ ?>
    <tr>
      <td><?php echo $nom ; ?></td>
      <td><?php echo $note  ; ?></td>   
      <td><?php 
          if ($note < 10){
            echo "non valide";
          }else  {
            echo "valide";
          }

         ?>    </td>  
    </tr>    
        <?php  } ?>

    
</table>
<?php 
$somme =0;
foreach($notes as $nom => $note ){
    $somme += $note;
}
$moyenne = $somme / count($notes);
?>

<p><?php echo "la somme des notes est: ".$somme. "<br>"  ;   ?></p>
<p><?php echo "la  moyenne des notes est: ".$moyenne. "<br>"  ;   ?></p>

<?php
$nbr = 0;
foreach($notes as $nom=>$note){
    if ($note>=10){
        $nbr+=1;
    }
}

?>
<p><?php echo "le nombre des etudiants valide est: " .$nbr ."<br>"; ?></p>
<?php
$max = reset($notes);
$nom_max=key($notes);
foreach($notes as $nom => $note){
    if($note > $max){
        $max = $note;
        $nom_max=$nom;
    }
}
?>
<p><?php echo "la meilleure note est: " .$max ." pour ".$nom_max."<br>"; ?></p>

<?php

/* 
Utiliser ce jeu de données fictives :

```php
$notes = [
    "Amine" => 12,
    "Sara" => 16,
    "Youssef" => 8,
    "Lina" => 14,
    "Adam" => 10
];
```

1. Afficher les étudiants et leurs notes dans un tableau HTML avec `foreach`.
2. Ajouter une colonne « Validé » ou « Non validé », avec un seuil de 10.
3. Calculer la somme des notes et la moyenne de la classe.
4. Compter les étudiants ayant validé.
5. Déterminer la meilleure note et le nom de l'étudiant correspondant en parcourant le tableau.

**Vérification :** moyenne = 12 ; 4 étudiants ont validé ; Sara possède la meilleure note, égale à 16.
*/
?>