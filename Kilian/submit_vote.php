<?php

require "../connexion.php";

$query = $db->prepare('UPDATE users SET vote = :vote');
$parameters = [
    'vote' => $_POST['product_id']
    ];

$query->execute($parameters);


?>

<html lang="fr">
    
    <main>
        <p>Votre vote a bien été enregistré</p>
    </main>
    
</html>