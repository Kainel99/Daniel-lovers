<?php

require "../connexion.php";

$query = $db->prepare('UPDATE users SET vote = :vote');
$parameters = [
    'vote' => $_POST['product_id']
    ];

$query->execute($parameters);


?>