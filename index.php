<!-- Inclusions des fonctions et variables -->
<?php 
    session_start();
    require_once(__DIR__ . '/functions.php');
    require_once(__DIR__ . '/variables.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Recettes - Page d'accueil</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <!-- En-tête de la page -->
        <?php require_once(__DIR__ . '/header.php') ?>

        <br />

        <h1>Liste des recettes</h1>
        <!-- Formulaire de connexion -->
        <?php require_once(__DIR__ . '/login.php'); ?>

        <?php if (isset($loggedUser)) : ?>
            <?php foreach (getRecipes($recipes) as $recipe) : ?>
                <article>
                    <h3><?php echo $recipe['title']; ?></h3>
                    <div><?php echo $recipe['recipe']; ?></div>
                    <i><?php echo displayAuthor($recipe['author'], $users); ?></i>
                </article>
            <?php endforeach ?>
        <?php endif; ?>

         <br />

         <?php require_once(__DIR__ . '/footer.php') ?>
    </div>
</body>
</html>