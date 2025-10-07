<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Utilisateur</title> 

</head>
<body>

    <h1>Nos utilisateurs : </h1>

    <?php foreach ($users as $user) : ?>

    <p>Id utilisateur : <?= htmlspecialchars($user->id, ENT_QUOTES, 'UTF-8') ?></p>
    <p>Utilisateurs : <?= htmlspecialchars($user->name, ENT_QUOTES, 'UTF-8') ?></p>
    <p><a href="index.php?action=userview&id=<?= urlencode($user->id) ?>">Voir l'utilisateur</a></p>
    <?php echo "---------------------------------------------------------\n" ?>
    <?php endforeach ?>
    <p>
        <a href="?action=products">Voir produits</a> 
    </p>
</body>
</html>
