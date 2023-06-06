<?php
    $testo = $_POST['testo'];

    $censura = $_POST['censura'];
    
    $testo_censurato = str_replace($censura, '***', $testo, $num_censura);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paragrafo da censurare</title>
</head>
<body>
    <h2>Paragrafo: <?= $testo; ?></h2>
    <h2>Parola censurata: <?= $censura; ?></h2>
    <h2>Paragrafo con parole censurate: <?= $testo_censurato; ?></h2>
    <h2>Quante parole censurate: <?= $num_censura; ?></h2>
</body>
</html>