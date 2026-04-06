<?php
$pageTitle = 'Ma page PHP';
$currentDate = date('Y-m-d H:i:s');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></title>
</head>
<body>
    <main>
        <h1><?= htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8') ?></h1>
        <p>Bienvenue ! Cette page est générée avec PHP.</p>
        <p>Date actuelle (UTC) : <?= htmlspecialchars($currentDate, ENT_QUOTES, 'UTF-8') ?></p>
    </main>
</body>
</html>
