<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateur</title> 

</head>
<body>
    <h1>Utilisateur : <?= htmlspecialchars($user->name) ?></h1>
    <p>
        <a href="?action=product">Voir produit</a> 
    </p>
</body>
</html>
