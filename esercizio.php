<?php 
    $frase = 'Ciao! Come va? A me bene, ho iniziato il corso Boolean da 3 mesi e oggi abbiamo iniziato php, un abbraccio.'

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Frase non censurata</h2>
    <p>
        <?php
            echo $frase;
        ?>
    </p>
    
</body>
</html>