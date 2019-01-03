<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/styles.css">
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <title>Erreur 404</title>
    <meta name="description" content="Erreur 404" />

</head>
<body>
    <div id="header">
        <nav>
            <a class="lien-logo" href="/"><h4 id="logo">WebComet</h4></a>

            <div id="menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>

        <span id="nav-link" class="invisible">
            <a href="webmaster-creation-site-vitrine">Création de site vitrine</a>
            <a href="consultant-seo">SEO</a>
        </span>

        <div id="header-container">
            <h1>Erreur 404</h1>
            <div id="btnContact" class="newButton">Contact</div>
        </div>
    </div>

    <div class="separator-container">
        <span class="separator"></span>
        <span class="separator2"></span>
    </div>

    <main>
        <div class="content" id="elem1">
            <h1>Erreur 404</h1>
            <p>
                <img src="public/images/404.png" alt="Erreur 404" />
            </p>
            <h2>La page que vous demandez n'existe pas à l'adresse que vous avez saisi dans la barre de recherche.</h2>
            <p>
                <a class="newButton" href="/">Retourner à l'accueil</a>
            </p>
        </div>

        <div class="contact_box">
            <h2>Contactez-moi</h2>

            <p>Contactez-moi pour une demande d'optimisation SEO<br>
            ou de création de site web</p>
            <?php require 'partials/form.php';?>
        </div>
    </main>

    <?php require 'partials/footer.php';?>

</body>
</html>