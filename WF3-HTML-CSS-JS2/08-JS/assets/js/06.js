/* --------------------------------------
        Les Fonctions
----------------------------------------*/

// -- Déclarer une fonction 
// -- Cette focntion ne retourne aucune valeur 

function ditBonjour() {
    // -- Lors de l'appel de cette , les instruction ci-dessous 
        // seront executées ...
    alert("Bonjour !");
}

// -- Je vais appeler ma fonction "ditBonjour" et 
    // declencher ses instructions.

ditBonjour();

// -- Déclarer une fonction qui prenune variable en paramétre 
function Bonjour(Prenom,Nom) {
    document.write("<p>Hello <strong>" + Prenom + " " + Nom + "</strong> !</p>")
}

// -- Appeler / Utiliser une fonction avec des paramètres 
Bonjour("Hocine","Alili");

// -- Exercice : Créer une fonction permettant d'effectuer l'addition de deux
    // nombre passées en parametres . 

function Addition(nb1, nb2){
   return nb1 + nb2;
}

document.write("<p> " + Addition(10,5) + "</p>");




