<?php 
    session_start();
    
    require "../connexion.php";
    
    if(isset($_POST['first-name']) && ($_POST['last-name']) && ($_POST['email']) && ($_POST['password'])) {
      $query = $db->prepare('INSERT INTO users (first_name, last_name, email, password) VALUE (:first_name, :last_name, :email, :password) ');
      $parameters = [
  
      'first_name' => $_POST['first-name'],
      'last_name' => $_POST['last-name'],
      'email' => $_POST['email'],
      'password' => $_POST['password']
      
      ];
      $query->execute($parameters);
      $user = $query -> fetch(PDO::FETCH_ASSOC);       
  }
    
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