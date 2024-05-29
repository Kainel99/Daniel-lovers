<?php

require "../connexion.php";

$query = $db->prepare('SELECT * FROM users');

$query->execute();
$users = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Espace Membre</title>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    
    <main class="container">
        <h1>Liste des utilisateurs</h1>
        <table class="admin-table">
        <thead>
            <tr>
                <th scope="col">Prénom</th>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col">Article préféré</th>
                <th scope="col">Admin</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <?php foreach ($users as $user): ?>
                <td> <?php echo htmlspecialchars($user['first_name']); ?> </td>
                <td> <?php echo htmlspecialchars($user['last_name']); ?> </td>
                <td> <?php echo htmlspecialchars($user['email']); ?> </td>
                <td> <?php echo htmlspecialchars($user['vote']); ?> </td>
                <td> <?php echo htmlspecialchars($user['admin']); ?> </td>
                <td class="col-boutons"><form method="POST" action="user_update.php">
                    <input type="submit" name="user_update" value="Modifier"/>
                    <input type="hidden" id="userId" name="userId" value="<?php echo htmlspecialchars($user['id']); ?>" />
                    </form>
                    <form method="POST" action="user_delete.php">
                    <input type="submit" name="user_delete" value="Supprimer"/>
                    <input type="hidden" id="userId" name="userId" value="<?php echo htmlspecialchars($user['id']); ?>" />
                    </form>
                </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
        <p><form method="POST" action="user_create.php">
            <label for="first-name" class="form-label">Prénom</label>
            <input type="text" class="form-control" name="first_name" id="first_name" >
            <label for="last-name" class="form-label">Nom</label>
          <input type="text" class="form-control" name="last_name" id="last_name">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="votre@email.fr">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="password">
          <label for="admin" class="form-label">Admin ? (1 pour oui, 0 pour non)</label>
          <input type="number" class="form-control" name="admin" id="admin" >
                    <input type="submit" name="user_create" value="Ajouter un utilisateur"/>
                    </form></p>

</main>
</html>