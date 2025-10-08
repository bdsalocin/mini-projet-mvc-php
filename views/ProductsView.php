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
    <p>Description : <?= htmlspecialchars($product->description, ENT_QUOTES, 'UTF-8') ?></p>
    <p><a href="index.php?action=productview&id=<?= $product->id ?>">Voir le produit</a></p>

<?php echo "---------------------------------------------------------\n" ?>

<?php endforeach ?> 

<h2>Ajouter des produits : </h2>

<form action="index.php?action=addproduct" method="post">
    <label>Nom du produit :</label>
    <input type="text" name="name" id="name" /></br>

    <label>Le prix :</label>
    <input type="number" name="price" id="price"/></br>
    
    <label>Description : </label>
    <textarea type="textarea" name="description" id="description"/></textarea></br>

    <button type="submit">Valider</button>
</form>

    <p>
        <a href="?action=users">Retour utilisateurs</a>
    </p>
</body>
</html>
