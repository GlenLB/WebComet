<?php require 'partials/head.php';?>

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
                <h1>Création de site vitrine professionnel</h1>
                <div id="btnContact" class="newButton">Contact</div>
            </div>
        </div>

        <div class="separator-container">
            <span class="separator"></span>
            <span class="separator2"></span>
        </div>

        <main>
            <div class="content" id="elem1">
                <h2 class="titre">Vous souhaitez faire réaliser un site vitrine ? Je peux vous le créer sur-mesure à un prix compétitif</h2>

                <p>
                    Vous avez besoin d'un site vitrine pour présenter votre activité, être plus visible sur internet et attirer plus de clients ?<br> Mes prestations en création de site vitrine sont avantageuses pour vous : en me confiant la réalisation de votre site vitrine, vous faite appel à un webmaster indépendant qui vous coûtera moins cher qu'une agence web. De plus, mes disponibilités sont plus grandes, mes horaires plus flexibles : vous pourrez me joindre plus facilement.<br><br> Les sites web que je créé sont de qualité :
                </p>
                <ul>
                    <li><i class="far fa-check-circle"></i>Développement de votre site vitrine sur-mesure</li>
                    <li><i class="far fa-check-circle"></i>Responsive : s'adapte à toutes les tailles d'écran (téléphones, tablettes, ordinateurs)</li>
                    <li><i class="far fa-check-circle"></i>Optimisé pour le SEO : votre site vitrine sera optimisé pour être bien visible sur Google</li>
                    <li><i class="far fa-check-circle"></i>Rapide : votre site vitrine étant développé sur mesure, il sera bien plus rapide qu'un site vitrine créé avec un CMS comme WordPress</li>
                    <li><i class="far fa-check-circle"></i>Une réelle implication de ma part dans vos projets web</li>
                    <li><i class="far fa-check-circle"></i>De belles finitions pour votre site vitrine</li>
                </ul>

                <p>
                    Vous l'aurez compris, en faisant appel à mes services vous n'aurez pas un site vitrine créé à la chaîne avec un thème WordPress peu personnalisé, lent, mal optimisé pour le SEO et lourd, comme beaucoup en font.<br> Au contraire vous aurez un site vitrine développé sur mesure selon vos envies, léger et rapide, optimisé pour flirter avec les premières positions sur Google, créé avec les dernières technologies web du moment (Javascript, Node.js, React.js).<br><br>

                    Si vous avez déjà un site web dont vous voulez améliorer le référencement naturel, vous devriez consulter ma page de <a href="/consultant-seo">consultant SEO</a>.
                </p>

                <h2 class="titre mt7">Mes dernières réalisations</h2>

                <div class="portfolio-container">
                    <div class="portfolio-row">
                        <div class="box-portfolio">
                            <img src="public/images/portfolio/emsam_serrurerie.jpg" alt="">
                            <div class="box-portfolio-text">
                                <h3>Emsam-serrurerie</h3>
                                <p>
                                    Création d'un site vitrine pour une entreprise de serrurerie basée à Nice.<br> Site web créé sur-mesure, optimisé pour le SEO.
                                </p>
                                <a class="newButton" target="_blank" href="https://emsam-serrurerie.fr/">Voir le site</a>
                            </div>
                        </div>

                        <div class="box-portfolio">
                            <img src="public/images/portfolio/michele_barange.png" alt="">
                            <div class="box-portfolio-text">
                                <h3>Artiste peintre</h3>
                                <p>
                                    Création d'un site vitrine pour une artiste peintre à Rennes.<br> Site web créé sur-mesure, optimisé pour le SEO.
                                </p>
                                <a class="newButton" target="_blank" href="https://michelebarange.com/">Voir le site</a>
                            </div>
                        </div>
                    </div>

                    <div class="portfolio-row">
                        <div class="box-portfolio">
                            <img src="public/images/portfolio/newlive.jpg" alt="">
                            <div class="box-portfolio-text">
                                <h3>Newlive</h3>
                                <p>
                                    Création d'un site vitrine pour une entreprise de coaching personnel.<br> Site web créé avec le CMS WordPress sur demande du client, non optimisé pour le SEO.
                                </p>
                                <a class="newButton" target="_blank" href="https://newliveconsulting.com/">Voir le site</a>
                            </div>
                        </div>

                        <div class="box-portfolio">
                            <img src="public/images/portfolio/sauve-le-koala.png" alt="">
                            <div class="box-portfolio-text">
                                <h3>Sauve le koala</h3>
                                <p>
                                    Création d'un site vitrine pour un jeu vidéo 2D.<br> Site web créé sur-mesure, non optimisé pour le SEO.
                                </p>
                                <a class="newButton" target="_blank" href="https://webcomet.fr/sauve-le-koala">Voir le site</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- <h2 class="titre mt7">Les avis de mes clients</h2> -->
            </div>

            <div class="contact_box">
                <h2>Contactez-moi</h2>

                <p>Contactez-moi pour une demande de création de site vitrine</p>
                <?php require('partials/form.php'); ?>
            </div>
        </main>

        <!-- AJOUTER TARIFS + PACKS AVEC CONTENU POUR CHAQUE PACK -->

        <?php require('partials/footer.php') ;?>
    </body>

    </html>