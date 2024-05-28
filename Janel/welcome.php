<?php 
    session_start();
    
    require "../connexion.php";
    
    if (isset($_POST["password"]) && isset($_POST["email"])) {
        $password = $_POST["password"];
        $email = $_POST["email"];
    
        $query = $db->prepare('SELECT * FROM users WHERE email = :email');
        $parameters = [
            'email' => $email
        ];
    
        $query->execute($parameters);
        
        $user = $query->fetch(PDO::FETCH_ASSOC);
        
        if ($password === $user['password']) {
            header('Location:  https://kilianjanus.sites.3wa.io/PHP/Daniel-lovers/Kilian/espace_membre.php?id=' . $user['id']);
            exit();
        } else {
            echo 'Email ou mot de passe incorrect.';
        }
    }
?>