<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produits</title>
</head>
<body>
    <p>Produit : </p>
    <p>Titre : <?= htmlspecialchars($product->title) ?></p>
    <p>Prix : <?= htmlspecialchars($product->price) ?> euros</p>
    <p>
        <a href="?action=user">Retour Utilisateur</a>
    </p>
</body>
</html>
