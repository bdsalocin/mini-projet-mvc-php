<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateurs : </title>
</head>
<body>

<p> Produit : <?= htmlspecialchars($userData->id, ENT_QUOTES, 'UTF-8') ?> </h1>
<p> Nom : <?= htmlspecialchars($userData->name, ENT_QUOTES, 'UTF-8') ?> </h1></br>
<p> Age : <?= htmlspecialchars($userData->age, ENT_QUOTES, 'UTF-8') ?> </h1></br>
<?php echo "---------------------------------------------------------\n" ?>

<form action="index.php?action=updateuser" method="post">
<input type="submit" name="modifier" value="Modifier">
<input type="hidden" name="updateuser" value="<?= htmlspecialchars($userData->id, ENT_QUOTES, 'UTF-8'); ?>">
<input type="text" name="name" value="<?= htmlspecialchars($userData->name, ENT_QUOTES, 'UTF-8'); ?>">
<input type="number" name="age" value="<?= htmlspecialchars($userData->age, ENT_QUOTES, 'UTF-8'); ?>">
</form>

<form action="index.php?action=deleteuser" method="post">
<input type="submit" name="supprimer" value="Supprimer">
<input type="hidden" name="deleteuser" value="<?= htmlspecialchars($userData->id, ENT_QUOTES, 'UTF-8'); ?>">
</form>
<p>
        <a href="?action=users">Retour utilisateurs</a>
</p>

</body>
</html>