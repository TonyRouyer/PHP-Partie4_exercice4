<?php
    function testNumber($nb1, $nb2){
            if ($nb1 > $nb2){
                echo 'Le premier nombre est plus grand';
            }else if ($nb1 < $nb2){
                echo 'Le premier nombre est plus petit';
            }else if ($nb1 == $nb2){
                echo 'Les deux nombres sont identiques';
            }
        } 
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>partie 4 exercice 4</title>
    </head>
    <body>
        <p><?php testNumber(31, 31) ?></p>
    </body>
</html>