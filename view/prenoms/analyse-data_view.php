<?php
    /**
     * Page principale du projet prenoms
     */

    // Insertion du header
    require("view/partials/prenoms/head.php");
?>

    <body>
        <header>
            <h1>Analyse des prénoms de 1946 à 2016</h1>
            <h2>Ce projet se base sur des données de l'INSEE et vise à permetter une analyse simple et claire de ces données portant
            sur les prénoms donnés à la naissance de 1946 à 2016. <a href="#">En savoir plus sur le projet</a>.</h2>
        </header>

        <main>
            <h3>Choisissez les données qui vous intéressent :</h3>
            <form>
                <input type="checkbox" id="annee">
                <label for="annee">Année :</label>
                <select id="anneeSelect">
                    <?php
                        for($i = 1946; $i < 2017; $i++) {
                            echo("<option>" . $i . "</option>");
                        }
                    ?>
                </select>
                <input type="checkbox" id="periode">
                <label for="periode">ou Période : de</label>
                <select>
                    <?php
                        for($i = 1946; $i < 2017; $i++) {
                            echo("<option>" . $i . "</option>");
                        }
                    ?>
                </select> à 
                <select>
                    <?php
                        for($i = 1946; $i < 2017; $i++) {
                            if($i === 2016) {
                                echo("<option selected>" . $i . "</option>");
                            } else {
                                echo("<option>" . $i . "</option>");
                            }
                        }
                    ?>
                </select><br>
                <label for="visualiser">Visualiser le résultat sous forme de :</label>
                <select id="visualiser">
                    <option>Graph ligne</option>
                    <option>Graph bâtons</option>
                    <option>Tableau</option>
                    <option>Diagramme</option>
                </select><br>
                <label for="resultats">Obtenir </label>
                <select id="resultats">
                    <?php 
                        for($i = 10; $i < 110; $i += 10) {
                            echo("<option>" . $i . "</option>");
                        }
                    ?>
                </select> résultats<br>
                <label for="ordre">Trier par ordre </label>
                <select id="ordre">
                    <option>Croissant</option>
                    <option>Décroissant</option>
                </select><br>
                <!-- 
                    Amélioration : récupérer une BDD de la liste des départements français avec les noms de départements.
                    L'afficher ici
                 -->
                <label for="departement">Département</label>
                <select id="departement">
                    <?php 
                        for($i = 0; $i < 96; $i++) {
                            if($i < 10) {
                                if($i === 0) {
                                    echo("<option>France entière</option>");
                                } else {
                                    echo("<option>0" . $i . "</option>");
                                }
                            } else {
                                echo("<option>" . $i . "</option>");
                            }
                        }
                        for($i = 971; $i < 977; $i++) {
                            echo("<option>" . $i . "</option>");
                        }
                    ?>
                </select>
                <hr>
                Analyser des prenoms en particulier :<br>
                <label for="ajoutPrenom">Ajouter un prénom</label> <input id="ajoutPrenom" type="text"> <button id="btnAjoutPrenom">OK</button><br>
                Liste des prénoms à analyser :<br>
                <div id="listePrenoms"></div>
                <hr>
                <input id="btnEnvoi" type="submit" value="Lancer la recherche">
            </form>
        </main>


    <!-- Insertion du footer (fermeture balises </body> et </html>) -->
    <?php require("view/partials/prenoms/footer.php"); ?>