<?php 
    session_start();
    
    require "../connexion.php";
    
    if(isset($_POST['first-name']) && ($_POST['last-name']) && ($_POST['email']) && ($_POST['password'])) {
        
        $firstName = $_POST['first-name'];
        $lastName = $_POST['last-name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
    
        
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
      $query = $db->prepare('INSERT INTO users (first_name, last_name, email, password) VALUE (:first_name, :last_name, :email, :password) ');
      $parameters = [
  
        'first_name' => $firstName,
        'last_name' => $lastName,
        'email' => $email,
        'password' => $hashedPassword
      
      ];
      $query->execute($parameters);
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
        
        if ($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            header('Location:  https://kilianjanus.sites.3wa.io/PHP/Daniel-lovers/Kilian/espace_membre.php?id=' . $user['id']);
            exit();
        } else {
            echo 'Email ou mot de passe incorrect.';
        }
    }
?>