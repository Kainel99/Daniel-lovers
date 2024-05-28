<?php

require "../connexion.php";

$query = $db->prepare('UPDATE users SET vote = :vote WHERE id = :id');
$parameters = [
    'vote' => $_POST['product_id'],
    'id' => $_POST['userId']
    ];

$query->execute($parameters);


?>

<html lang="fr">
    
    <main>
        <p>Votre vote a bien été enregistré</p>
        <p><a href="../Janel/home.php">Revenir sur la page d'accueil</a></p>
    </main>
    
</html>