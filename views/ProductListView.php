<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produits</title>
</head>
<body>
    <h1>Nos Produits : </h1> 
    <?php foreach ($products as $product) : ?>
    <p>Titre : <?= htmlspecialchars($product->title) ?></p>
    <p>Prix : <?= htmlspecialchars($product->price) ?> euros</p>
    <?php echo "------------------------------------- \n"; ?>
    <?php endforeach; ?>
    <br>
    <a href="?action=user">Retour Utilisateur</a>
</body>
</html>