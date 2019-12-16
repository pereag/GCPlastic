<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="<?= $this->path; ?>/public/images/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?= $this->path; ?>/public/css/style.css">
    <title>GC Plastic | Erreur</title>
</head>
    <body>
        <p class="error">Erreur : <?= $error->getMessage(); ?>.</p>
    </body>
</html>