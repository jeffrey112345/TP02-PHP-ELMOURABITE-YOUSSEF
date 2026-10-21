<p>
<?php



if (isset($_POST['nom'],$_POST['prenom'],$_POST['groupe'])){
    echo "les variables existent";
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $groupe = $_POST['groupe'];
   }else{
    echo "les variables n'existent pas";
    }

if (trim($_POST['nom']) === "" || trim($_POST['prenom']) === "" || trim($_POST['groupe']) === "" ){
    echo "il faut eviter les espaces  ";
   }else{
    echo "les espaces sont remplis";
    } 

?>

</p>