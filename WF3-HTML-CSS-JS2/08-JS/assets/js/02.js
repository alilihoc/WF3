// -- déclarer Un Tableau Numérique 
var monTableau = [];
var myArray    = new Array;

// -- Affecter des valeurs a mon tableau numérique 
monTableau[0] ="Hugo"
monTableau[1] ="Nathan"
monTableau[2] ="Lou"

// -- Afficher le contenu de mon tableau dans la console 
console.log(monTableau[0]);  // -- Hugo 
console.log(monTableau[1]);  // -- Nathna
console.log(monTableau);     // -- Afficher toutes les données 

// -- Déclarer et affecter des valeurs a un tableau numérique 
var NosPrenoms = ["Emilie","Hocine","Terry","Benjamin","Hugo"];
console.log(NosPrenoms);
console.log(typeof NosPrenoms);

// -- Déclarer et Affecter des Valeurs à un objet.
// :  (Pas de tableau associatif en JS)
var Coordonnee = {
    prenom :"Hugo", 
    nom    :"LIEGEARD",  
    age    : 27
};

console.log(Coordonnee); 
console.log(typeof Coordonnee);

// -- Je vais créer 2 tableaux numériques 
var listePrenoms  = ["Hugo", "Rodrigue", "Benjamin"];
var listeNoms     = ["LIEGEARD", "NOUEL", "JOURAND"];

// -- Je vais créer un tableau a 2 dimensions à partir de me 
        // deux tableaux 

var Annuaire = [listePrenoms, listeNoms];
console.log(Annuaire); 

// -- Afficher sur ma page le nom et le prenom de Rodrigue.
document.write(Annuaire[0][1]);
document.write("  ");
document.write(Annuaire[1][1]);

    /* Exercice : Tableau a 2 dimensions : "AnnuaireDesStagiaires"
                  qui contiendra toutes les coordonnées pour chaque stagiaire 
                  ex: Nom ,Prenom, Tel */


// -- Correction : 

var AnnuaireDesStagiaires =[
    {prenom: "Hocine", Nom: "Alili", tel :"0750496720"},
    {prenom: "Hugo", Nom: "Liegeard", tel :"07XXXXXXXX"},
    {prenom: "Benjamin", Nom: "Jourand", tel :"07XXXXXXXX"},
]

console.log(AnnuaireDesStagiaires);
console.log(AnnuaireDesStagiaires[0].prenom);
console.log(AnnuaireDesStagiaires[1]['prenom']);
console.log(AnnuaireDesStagiaires[1].prenom);


    /*  ---------------------
        Ajouter Un Element 
    -------------------------*/

var Couleurs = ["Rouge", "Jaune", "Vert"]

// -- Si je souhaite ajouter un élèment dans mon tableau
// -- Je fait appel à la fonction push() qui me renvoi le 
    // nombre d'elements dans mon tableau .

console.log(Couleurs);
var NombreElemntsDeMonTableau = Couleurs.push("Orange");
console.log(Couleurs);
console.log(NombreElemntsDeMonTableau);

// -- NB : la fonction unshift() permet d'ajouter 
// --      ou plusieurs élèments en début de tableau.

/* -----------------------------------------------------
        Récuperer et sortir le dernier élèment 
------------------------------------------------------*/

// -- La fonction pop() me permet de supprimer le dernier 
// -- élèment de mon tablaeu et d'en récuperer la valuer 

var monDernierElement = Couleurs.pop();
console.log(monDernierElement);
console.log(Couleurs);

// -- La même chose est possible avec le premier élèment ...
    // -- en utilisant la foncton shift();

// -- NB : La foncyion splice() vous permet de faire sortir 
    // -- un ou plusieurs élèments de votre tableau ; 

    
