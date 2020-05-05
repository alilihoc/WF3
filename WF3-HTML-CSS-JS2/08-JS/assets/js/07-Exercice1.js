/* --
    Votre mission, que vous devez accepter !
    Réaliser une fonction permettant à un internaute de :
        - Saisir son Prénom dans un Prompt
        - Retourner à l'Utilisateur : Bonjour [PRENOM], Quel age as-tu ?
        - Saisir son Age
        - Retourner à l'Utilisateur : Tu est donc né en [ANNEE DE NAISSANCE].
        - Afficher ensuite un récapitulatif dans la page.
        Bonjour [PRENOM], tu as [AGE] ! 
-- */

// Toujours écrire la logique de developpement !

// // Demande de Prenom 
// var Prenom = window.prompt("Quel est votre prenom ?");

// // Retour Prenom-Age 
// var Age = window.prompt("Bonjour " + Prenom + " Quel age as-tu");

// // calcul année 
//     var date = new Date();
//     var AnneeDeNaissance = (date.getFullYear() - parseInt(Age)); 

// // Retour année 
// alert("Tu es donc né en " + AnneeDeNaissance );

// // Récap
// document.write("Bonjour " + Prenom + ", tu as " + Age + " ans !");

// -------------  CORRECTION -------------- //

// 1 -- Initialisation des variables 
var DateObj       = new Date();
var AnneeActuelle = DateObj.getFullYear();
// 2 -- Création de la fonction 
function Hello() {

    // 2a. -- Je demande a l'utilisateur son prenom
    let prenom = prompt("Hello ! What is your name?", "Saisie votre Prenom"); // -- Let - Variable(inFonction)
    console.log(prenom);
    console.log(typeof prenom);

    // 2b. -- Je lui demande son age 
    let age = parseInt(prompt("Hello " + prenom + " ! How old  are you ?" , "<Saisie votre age>"));
    console.log(age);
    console.log(typeof age);

    // 2c. -- J'affiche une alert avec son année de naissance 
    alert("AMAZING ! So you were born in " + (AnneeActuelle - age) + " !");

    // 2d. -- Affichage dans ma page html 
    document.write("Hello " + prenom + "it's AMAZING ! You're " + age + " years old !")
}
// 3 -- Execution de ma fonction 
Hello ();