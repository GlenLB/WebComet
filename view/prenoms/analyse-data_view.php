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
                <input type="checkbox" id="checkboxAnnee">
                <label for="checkboxAnnee">Sur une année précise :</label>
                <select id="selectAnnee">
                    <?php
                        for($i = 1946; $i < 2017; $i++) {
                            echo("<option>" . $i . "</option>");
                        }
                    ?>
                </select><br>
                Ou ----------------<br>
                <input type="checkbox" id="checkboxPeriode">
                <label for="selectPeriode">Sur une période : de</label>
                <select id="selectPeriode">
                    <?php
                        for($i = 1946; $i < 2017; $i++) {
                            echo("<option>" . $i . "</option>");
                        }
                    ?>
                </select> à 
                <select id="selectPeriode2">
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
                <label for="selectFormeData">Visualiser le résultat sous forme de :</label>
                <select id="selectFormeData">
                    <option id="ligne">Graph ligne</option>
                    <option id="baton">Graph bâtons</option>
                    <option id="tableau">Tableau</option>
                    <option id="diagramme">Diagramme</option>
                </select><hr>
                <input type="checkbox" id="checkboxObtenirRes">
                <label for="selectResultats">Obtenir </label>
                <select id="selectResultats">
                    <?php 
                        for($i = 1; $i < 10; $i++) {
                            echo("<option>" . $i . "</option>");
                        }
                        for($i = 10; $i < 101; $i += 10) {
                            echo("<option>" . $i . "</option>");
                        }
                    ?>
                </select> résultats<br>
                <label id="labelOrdre" for="ordre"">Trier par ordre </label>
                <select id="ordre"">
                    <option>Croissant</option>
                    <option>Décroissant</option>
                </select><br>
                Ou -----------------------------<br>
                <input type="checkbox" id="checkboxObtenirPrenom">
                Analyser des prenoms en particulier :<br>
                <label for="ajoutPrenom">Ajouter un prénom</label> <input id="ajoutPrenom" type="text"> <button id="btnAjoutPrenom">OK</button><br>
                Liste des prénoms à analyser :<br>
                <div id="listePrenoms"></div>
                <hr>
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
                <input id="btnEnvoi" type="submit" value="Lancer la recherche">
            </form>
        </main>


    <!-- Insertion du footer (fermeture balises </body> et </html>) -->
    <?php require("view/partials/prenoms/footer.php"); ?>