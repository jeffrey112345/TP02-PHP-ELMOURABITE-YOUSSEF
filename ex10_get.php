


<?php

if (isset($_POST['nom'], $_POST['prenom'], $_POST['groupe'])) {

    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $groupe = trim($_POST['groupe']);

    if ($nom === "" || $prenom === "" || $groupe === "") {
        echo " Il faut eviter les espaces.";
    } else {
        echo "Formulaire valide !<br>";

        echo "Nom : " . htmlspecialchars($nom, ENT_QUOTES, 'UTF-8') . "<br>";
        echo "Prénom : " . htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8') . "<br>";
        echo "Groupe : " . htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8');
    }

} else {
    echo " remplir  le formulaire avant d'accéder à cette page.";
}

?>
>