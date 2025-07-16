<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Site de Recettes</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
    >
</head>
<body class="d-flex flex-column min-vh-100">

    <div class="container">
        <!-- Navigation -->
        <?php require_once(__DIR__ . '/header.php') ?>

            <h1>Contactez-nous</h1>
            <form action="soumission_contact.php" method="POST" enctype="multipart/form-data">
                <!-- Ajout des champs email et message -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby = "email-help">
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Votre message</label>
                    <textarea class="form-control" placeholder="Exprimez vous" id="message" name="message"></textarea>
                </div>
                <!-- Ajout champ upload -->
                <div class="mb-3">
                    <label for="screenshot" class="form-label">Votre capture d'écran</label>
                    <input type="file" class="form-control" id="screenshot" name="screenshot" />
                </div>
                <!-- Fin ajout du champ -->
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </form>
            <br />
    </div>
    <!-- Pied de page -->
    <?php require_once(__DIR__ . '/footer.php') ?>

</body>
</html>