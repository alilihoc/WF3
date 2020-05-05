/* ---------------------------------------
            LES CONDITIONS
----------------------------------------*/


var MajoriteLegaleFR = 18 ;

if (27 >= MajoriteLegaleFR) {
    alert("Bienvenue !");
} else {
    alert("Google ...") ;
}


/* ----------------------------------------
        EXERCICE

Créer une fonction permettant de vérifier l'age du visiteur (prompt).
S'il a la majorité légale , alors je lui souhaite la bienvenue  ,
sinon , je fais une redirection sur GooGle aprés lui avoir signalé le soucis .
------------------------------------------*/

// 1 -- Déclarer la majoritéLegale 
var MajoriteLegaleFR = 18;

// 2 -- Fonction 
    function Verif() {
        
        // let age = prompt.window("Bonjour ! Quel est votre age ?"); // Methode 1 :
        // age = parseint(age);
        // return age ;

        // -- Methode 2
        return parseInt (prompt ("Bonjour ! Quel age avez-vous ?") ); 

    }

// 3 -- Condition 
        if (Verif() >= MajoriteLegaleFR ) {
            alert("Bienvenue son mon site internet pour les majeurs!");
        } else  { // -- Redirection
            document.location.href = "https://Google.fr"
        }

        
/*--------------------------------------------------------------

                Les Opérateurs de Comparaison 

    L'Opérateur de comparaison "==" signifie  : Egal à 
    Il permet de vérifier que deux variable sont identiques

    L'operateur de comparaison "===" signifie : Strictement 
    Egal à . Il va comparer la valeur et le type de donnée 

    l'Opérateur de comparaison "!=" signifie  : Different de 
    l'Opérateur de comparaison "!==" signifie : Strictement different de 


 --------------------------------------------------------------*/




 /* -------------------------------
            EXERCICE :
    J'arrive sur un Espace Sécurisé au moyen 
    d'un email et d'un mot de passe.

    Je doit saisir mon email et mon mot de passe afin d'être authentifié sur le site.

    En cas d'échec une alert m'informe du problème.
    Si tous se passe bien, un message de bienvenue m'accueil.
-------------------------------- */

// -- BASE DE DONNEES
var email, mdp;

email = "wf3@hl-media.fr";
mdp = "wf3";

// 1 -- Demander son email a l'utilisateur 
var UsEmail = prompt("Bonjour , Quel est votre email","<Saisissez votre email>");

// 2 -- Je vérifie si l'adresse mail saisie correspond a la BDD
if (email === UsEmail) { 
    // 2a. -- Tout est Ok , je continu la verification avec le mot de passe 
    // 2a1. --Je demande a l'utilisateur son mdp
    var Usmdp = prompt("Votre Mdp","<Saisissez votre mdp>");
    if(Usmdp === mdp){
        alert("Bienvenue sur mon site")
    } else {
        alert=("Attention , nous n'avons pas reconnu votre mot de passe")
    } 
} else {
    // 2b. -- Sinon , les emails ne correspondent pas , je lance une Alert ;
    alert("Attention , nous n'avons pas reconnu votre adresse email");
} 


// -- EXEMPLE AVEC LES FONCTIONS

/**
 * Vérifie si mon utilisateur est présent en BDD
 */
function monUtilisateurEstCorrect(UsEmail, Usmdp) {
    if(UsEmail=== email && Usmdp === mdp) {
        return true;
    }
    else {
        return false;
    }
}

var UsEmail = prompt("Bonjour, Quel et votre email", "<Saisissez votre Email>");

var Usmdp = prompt("votre mot de passe ?", "<Saisissez votre Mot de Passe>");

if(monUtilisateurEstCorrect(UsEmail, Usmdp)) {
    alert("Bienvenue " + UsEmail);
} else {
    alert("ATTENTION, email/mot de passe incorrect");
}

/* ---------------------------------------
            LES CONDITIONS
----------------------------------------*/

// L'Operateur ET : && ou AND
// Si la combinaison UsEmail et email correspond Et la combinaison Usmdp et mdp correspond ;

// Dans cette condition , les deux doivent obligatoirement être validée .

if (UsEmail === mail && Usmdp === mdp) {. . .};

// L'Opérateur Ou : || ou OR

if (UsEmail === mail || Usmdp === mdp) {. . .};

// L'Operateur "!" : qui signifie le CONTRAIRE DE ... ou encore NOT

var monUtilisateurEstApprouve = true ;
if(!monUtilisateurEstApprouve) { . . . }; // -- Si l'utilisateur n'est pas approuvé ...

// Reviens également à écrire 
if(monUtilisateurEstApprouve == false);








