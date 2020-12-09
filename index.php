<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4 Partie 6</title>
</head>

<body>
    <h1>Exercice 4 Partie 6</h1>
    <?php
    if (isset($_GET['language']) AND isset($_GET['server'])) : ?>
        <p><?=  $_GET['language'] . ' ' . $_GET['server'] ?></p>
    <?php endif ?>
</body>

</html>