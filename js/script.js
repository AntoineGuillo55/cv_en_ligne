// Je souhaite rendre l'affichage de mes formations et expériences professionnelles dynamique.
// Je souhaite que le contenu change, ou que l'élement soit caché en fonction de l'année du sélecteur

dataJob = {
    titre: "Conseiller clientèle à La Banque Postale",
    description: "Conseil et vente de produits et services bancaires, financiers, assurances et financement à une clientèle de particuliers"
};

// Je change la date en cliquant sur les flèches

let year = document.querySelector('#years');
let compteur = 2022;
year.textContent = compteur;

const flecheDroite = document.querySelector('#right-selector');
const flecheGauche = document.querySelector('#left-selector');

flecheDroite.addEventListener('click', modifyYears);
flecheGauche.addEventListener('click', modifyYears);


function modifyYears (event) {

let cibleDuClick = event.currentTarget;


if(cibleDuClick.id === "right-selector") {

    console.log("c'est cliqué");
    compteur++;
    year.textContent = compteur;
} else {

    console.log("c'est cliqué");
    compteur--;
    year.textContent = compteur;
}
}

// Je change le contenu lorsque la date change