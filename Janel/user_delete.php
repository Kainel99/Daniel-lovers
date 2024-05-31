<?php

require('../connexion.php'); 

$query = $db->prepare('DELETE FROM users WHERE id = :id');
$parameters = [
        'id' => $_POST['userId']
    ];
    
$query->execute($parameters);

header('Location:  https://janelhocde.sites.3wa.io/Daniel-lovers/Kilian/admin.php');

?>