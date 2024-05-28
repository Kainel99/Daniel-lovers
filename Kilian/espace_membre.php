<?php
require "../connexion.php";

$query = $db->prepare('SELECT * FROM users WHERE id = :id');
$parameters = [
    'id' => $_GET['id']
    ];

$query->execute($parameters);
$user = $query->fetch(PDO::FETCH_ASSOC);

$productQuery = $db->prepare('SELECT * FROM clothes');
$productQuery->execute();
$products = $productQuery->fetchAll(PDO::FETCH_ASSOC);

?>


<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Espace Membre</title>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
    </head>
    
    <main class="container">
        <h1>Espace Membre</h1>
        
        <h2>Utilisateur</h2>
        <p><?php echo htmlspecialchars($user['first_name']); ?> <?php echo htmlspecialchars($user['last_name']); ?></p>
        
        <h2>Email</h2>
        <p><?php echo htmlspecialchars($user['email']); ?></p>
        
        <h2>Votez pour votre Dan-ccessoire préféré</h2>
        <form class="voteform" method="post" action="submit_vote.php">
            <div class="products-container">
            <?php foreach ($products as $product): ?>
                <div class="product">
                    <h3><?php echo htmlspecialchars($product['name']); ?></h3>
                    <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?>" style="width:200px;height:auto;">
                    <div>
                        <input type="radio" id="product_<?php echo $product['id']; ?>" name="product_id" value="<?php echo $product['id']; ?>" required>
                        <label for="product_<?php echo $product['id']; ?>">Choisir</label>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>
            <div class="button-center">
            <button type="submit" class="btn btn-primary">Voter</button>
            </div>
        </form>
        
    </main>
</html>