<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produits</title>

</head>
<body>
    <h1>Nos produits : </h1>
    <?php foreach ($products as $product) : ?>
    <p>Id produit : <?= htmlspecialchars($product->id, ENT_QUOTES, 'UTF-8') ?></p>
    <p>Nom du produit : <?= htmlspecialchars($product->name, ENT_QUOTES, 'UTF-8') ?></p>
    <p>Prix : <?= htmlspecialchars($product->price, ENT_QUOTES, 'UTF-8') ?> euros</p>
    <p><a href="index.php?action=productview&id=<?= urlencode($product->id) ?>">Voir le produit</a></p>
    <?php echo "---------------------------------------------------------\n" ?>

    <?php endforeach ?> 
    <p>
        <a href="?action=users">Retour utilisateurs</a>
    </p>
</body>
</html>
