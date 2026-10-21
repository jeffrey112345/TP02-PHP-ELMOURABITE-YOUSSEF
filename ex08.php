<?php
$i=0;
while ($i <=20){
    if ($i%2==0){
        if ($i==10){
            echo "<strong> $i</strong> <br>";
          } else{
                echo $i. "<br>";
            }
        
    }
    $i++;
}
$compteur = 5;
while ($compteur<5){
    echo $compteur ."<br>" ;
    $compteur++;
}echo "hhh<br>";
do {
    echo $compteur . "<br>";
    $compteur++;
   } while ($compteur<5);

?>