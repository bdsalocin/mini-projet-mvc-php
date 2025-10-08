<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produit : </title>
</head>
<body>

<p> Produit : <?= htmlspecialchars($productData->id, ENT_QUOTES, 'UTF-8') ?> </p>
<p> Nom : <?= htmlspecialchars($productData->name, ENT_QUOTES, 'UTF-8') ?> </p>
<p> Prix : <?= htmlspecialchars($productData->price, ENT_QUOTES, 'UTF-8') ?> euros </p>
<p> Description : <?= htmlspecialchars($productData->description, ENT_QUOTES, 'UTF-8') ?> </p></br>
<!-- <a href="index.php?action=deleteproduct&id=<?= $productData->id ?>">Supprimer</a></br> -->

<form action="index.php?action=updateproduct" method="post">
    <input type="hidden" name="updateproduct" value="<?= htmlspecialchars($productData->id, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="text" name="name" value="<?= htmlspecialchars($productData->name, ENT_QUOTES, 'UTF-8'); ?>">
    <input type="number" name="price" value="<?= htmlspecialchars($productData->price, ENT_QUOTES, 'UTF-8'); ?>">
    <textarea name="description"><?= htmlspecialchars($productData->description, ENT_QUOTES, 'UTF-8'); ?></textarea>
    <input type="submit" name="modifier" value="Modifier">
</form>


<form action="index.php?action=deleteproduct" method="post">
    <input type="submit" name="supprimer" value="Supprimer">
    <input type="hidden" name="deleteproduct" value="<?= htmlspecialchars($productData->id, ENT_QUOTES, 'UTF-8'); ?>">
</form>

<?php echo "---------------------------------------------------------\n" ?>

<p>
        <a href="?action=products">Retour produits</a>
</p>

</body>
</html>