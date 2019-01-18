/**
 * Gère l'ajout et la suppression de prenoms dans la liste du formulaire
 * 
 * TODO pouvoir supprimer prénoms de la liste des prénoms
 */
const btnAjoutPrenom = document.getElementById("btnAjoutPrenom");
const listePrenoms = document.getElementById("listePrenoms");
const inputAjoutPrenom = document.getElementById("ajoutPrenom");
let tableauPrenoms = [];
listePrenoms.innerHTML = "<ul>";
btnAjoutPrenom.addEventListener("click", (e) => {
    e.preventDefault();
    let valeurSaisie = inputAjoutPrenom.value.trim();
    if (valeurSaisie.length > 0) {
        tableauPrenoms.push(valeurSaisie);
        let i = tableauPrenoms.length - 1;
        // Enlève la fermeture </ul> de la liste
        listePrenoms.innerHTML.replace("</ul>", "");
        listePrenoms.innerHTML += "<li id=\"li" + i + "\">" + valeurSaisie + " <button id=\"btnSuppression" + i + "\">Retirer</button></li>";
        listePrenoms.innerHTML += "</ul>";
        //ajouterListenerDernierBouton();
    }
});

/*function ajouterListenerDernierBouton() {
    for(let i = 0; i < tableauPrenoms.length; i++) {
        if(i === (tableauPrenoms.length - 1)) {
            document.getElementById("btnSuppression" + i).addEventListener("click", (e) => {
                e.preventDefault();
                console.log(i);
                document.getElementById("li" + i).style.display = "none";
                tableauPrenoms.splice(i, 1);
                console.log(tableauPrenoms);
            })
        }
    }
}*/

// ---------------------------------------
/**
 * Gère la traduction des critères sélectionnés en requête SQL
 */