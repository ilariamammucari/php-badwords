<?php
$testo = 'Benvenuti nella prima pagina creata con PHP.';
$lunghezza = strlen($testo);
$parola = $_GET['badword'];
$sostituzione = str_replace($parola,'***',$testo);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Primo esercizio in PHP</title>
</head>
<body>

    <h1>
    <?= $testo ?> La lunghezza della variabile $testo è di <?= $lunghezza ?> caratteri.
    </h1>

    <h2>
        <?= $sostituzione ?>
    </h2>
</body>
</html>