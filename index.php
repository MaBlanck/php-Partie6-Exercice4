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
    if (!isset($_GET['language'])) : ?>
        <p>Langage manquant</p>
    <?php endif; ?>
    <?php if (!isset($_GET['server'])) : ?>
        <p>!! ERREUR 500. SERVER ISSUES !!</p>
    <?php endif; ?>
    <?php if (isset($_GET['server']) && isset($_GET['language'])) : ?>
        <p>Vous êtes à nouveau connecté à votre server <?= $_GET['server'] ?>. Pour intéragir veuillez utiliser le langage <?= $_GET['language'] ?>.
    Si le problème persiste, passez chez windows! Coin coin! </p>
    <?php endif ?>
    <a href="index.php?language=PHP&server=LAMP">Résoudre votre problème</a>
</body>

</html>