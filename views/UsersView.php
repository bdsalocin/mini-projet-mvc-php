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
    <p>Nom : <?= htmlspecialchars($user->name, ENT_QUOTES, 'UTF-8') ?></p>
    <p>Age : <?= htmlspecialchars($user->age, ENT_QUOTES, 'UTF-8') ?></p>
    <p><a href="index.php?action=userview&id=<?= $user->id ?>">Voir l'utilisateur</a></p>
    <?php echo "---------------------------------------------------------\n" ?>
    <?php endforeach ?>

    <h2>Ajouter des produits : </h2>

<form action="index.php?action=adduser" method="post">

    <label>Nom de l'utilisateur :</label>
    <input type="text" name="name" id="name" /></br>

    <label>Son âge :</label>
    <input type="number" name="age" id="age"/></br>
    
    <button type="submit">Valider</button>
</form>
    <p>
        <a href="?action=products">Voir produits</a> 
    </p>
</body>
</html>
