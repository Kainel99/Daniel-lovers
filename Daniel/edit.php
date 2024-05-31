<?php

require "../connexion.php";

$query = $db->prepare('UPDATE users SET first_name = :first_name, last_name = :last_name, email = :email, password = :password WHERE id = :id');

$parameters = [
        'id' => $_POST['userId'],
        'first_name' => $_POST['first_name'],
        'last_name' => $_POST['last_name'],
        'email' => $_POST['email'],
        'password' => $_POST['password'],
    ];
    
$query->execute($parameters);
$user = $query->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <p>L'utilisateur a bien été modifié</p>
        <p><a href="../Kilian/admin.php">Revenir sur l'espace admin</a></p>
    </main>

</body>
</html>