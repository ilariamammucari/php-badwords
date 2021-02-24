<?php 

$linguaggio = 'PHP';
$lunghezza = strlen($linguaggio);
$parola = $_GET['badword'];
$sostituzioneParola = str_replace($parola, '***', $parola);

echo $parola . ' questa parola è sostituita con: ' . $sostituzioneParola;

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
    Benvenuti nella prima pagina creata con <?php echo $linguaggio . '.' . ' La lunghezza della variabile $linguaggio è di ' .  $lunghezza . ' caratteri.' ?>
    </h1>
</body>
</html>