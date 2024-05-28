<?php 
    
?>

<!doctype html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Home</title>
        <link rel="stylesheet" href="../css/bootstrap.css" type="text/css" />
        <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css" />
        <link rel="stylesheet" href="../css/style.css" type="text/css" />
    </head>
    <body class="homeBody">
        <h1>Les Daniel Lovers</h1>
        <p>Trouver de l'inspi pour ce texte</p>
        <form class="row g-3" action="welcome.php" method="post">
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="col-md-6">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>
        </form>
        <p>Pas encore de compte ? <a href="../Daniel/inscription.php">Inscris-toi</a> pour devenir un Daniel lover !</p>
    </body>
</html>

