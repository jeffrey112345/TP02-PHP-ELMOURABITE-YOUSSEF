<?php
$nombre = 7;
for ($i=1;$i<=10;$i++){
    echo "7 * ".$i . " = ". $nombre * $i ." <br>";
}
for ($i=1;$i<=6;$i++){
    for ($j=1;$j<=6;$j++){
        echo str_repeat("*", $j) ;
        echo "<br>";
        

         
    }
    break;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ex07</title>
</head>
<body>
    <section>
        <h2>resultat 1</h2>
        <?php
        $nombre = 7;
        for ($i=1;$i<=10;$i++){
            echo "7 * ".$i . " = ". $nombre * $i ." <br>";
        }
        ?>
    </section>
    <section>
        <h2>resultat 2</h2>
        <?php
        for ($i=1;$i<=6;$i++){
            for ($j=1;$j<=6;$j++){
               echo str_repeat("*", $j) ;
               echo "<br>";
        

         
            }
            break;
        }
        ?>


    </section>
</body>
</html>
