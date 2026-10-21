<?php
const TAUX_TVA = 0.2;


$prix_unitaire_HT = 60;
$quantite = 3;

$total_HT = $prix_unitaire_HT * $quantite;
$montant_TVA = $total_HT * TAUX_TVA;
$total_TTC = $total_HT + $montant_TVA;

$total_TTC += 15;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><?= "total_HT = ".$total_HT; ?></li>
        <li><?= "montant_TVA = ".$montant_TVA; ?></li>
        <li><?= "total_TTC = ".$total_TTC; ?></li>
    </ul>
    <?= defined("TAUX_TVA")?>
</body>
</html>