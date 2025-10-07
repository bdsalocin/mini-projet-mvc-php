<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateurs : <?= htmlspecialchars($userData->name, ENT_QUOTES, 'UTF-8') ?> </title>
</head>
<body>

<p> Produit : <?= htmlspecialchars($userData->id, ENT_QUOTES, 'UTF-8') ?> </h1>
<p> Nom : <?= htmlspecialchars($userData->name, ENT_QUOTES, 'UTF-8') ?> </h1></br>
<?php echo "---------------------------------------------------------\n" ?>
<p>
        <a href="?action=users">Retour utilisateurs</a>
</p>

</body>
</html>