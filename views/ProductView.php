<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produit : <?php $_GET['id']?> </title>
</head>
<body>

<p> Produit : <?= htmlspecialchars($productData->id, ENT_QUOTES, 'UTF-8') ?> </h1>
<p> Nom : <?= htmlspecialchars($productData->name, ENT_QUOTES, 'UTF-8') ?> </h1></br>
<?php echo "---------------------------------------------------------\n" ?>
<p>
        <a href="?action=products">Retour produits</a>
</p>

</body>
</html>