<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="inscriptionBody">
    <h1>Inscription</h1>

    <form class="row g-3" action="../Janel/welcome.php" method="post">
        <div class="col-md-5">
          <label for="last-name" class="form-label">Nom</label>
          <input type="text" class="form-control" name="last-name" id="last-name">
        </div>
        <div class="col-md-5">
          <label for="first-name" class="form-label">Prénom</label>
          <input type="text" class="form-control" name="first-name" id="first-name" >
        </div>

        <div class="col-10">
          <label for="email" class="form-label">Votre email</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="votre@email.fr">
        </div>

        <div class="col-10">
          <label for="inputPassword4" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" id="inputPassword4">
        </div>

        <div class="col-12">
          <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
    </form>
</body>
</html>