<?php 
    $frase = 'Ciao! Come va? A me bene, ho iniziato il corso Boolean da 3 mesi e oggi abbiamo iniziato php, un abbraccio.';
    $censura = $_GET['censura'];
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

            $frase_len = strlen($frase);
        ?>
    </p>

    <p> la frase è lunga <?php echo $frase_len?> caratteri </p>

    <h2>Frase censurata</h2>

    <p>
       <?php
        $fraseCensurata = str_replace($censura, '***', $frase);
        echo $fraseCensurata;

        $fraseCensurata_len = strlen($fraseCensurata);
       ?>
    </p>

    <p>la frase censurata è lunga <?php echo $fraseCensurata_len ?> caratteri</p>
    
</body>
</html>