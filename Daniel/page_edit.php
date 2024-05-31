<?php
require "../connexion.php";

$query = $db->prepare('SELECT * FROM users WHERE id = :id');
$parameters = [
        'id' => $_POST['userId']
    ];

$query->execute($parameters);
$user = $query->fetch(PDO::FETCH_ASSOC);


?>
<form method="POST" action="edit.php">
    <label for="first_name" class="form-label">Prénom</label>
    <input type="text" class="form-control" name="first_name" id="first_name" >

    <label for="last_name" class="form-label">Nom</label>
    <input type="text" class="form-control" name="last_name" id="last_name">

    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="votre@email.fr">
    
    <label for="password" class="form-label">Password</label>
    <input type="password" class="form-control" name="password" id="password">
    
    <input type="submit" name="user_create" value="Modifier"/>
    <input type="hidden" id="userId" name="userId" value="<?php echo htmlspecialchars($user['id']); ?>" />
</form>